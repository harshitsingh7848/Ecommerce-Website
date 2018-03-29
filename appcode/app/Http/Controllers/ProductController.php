<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use PDF;
use Dompdf\Dompdf;

class ProductController extends Controller
{   

    /* 
     * function getQuantity
     * It gets quantity and redirects to checkout page
     */
    public function getQuantity()
    {
        $userId= Session::get('userid');
        if(isset($_POST['quantity'])){
            $quantity=$_POST['quantity'];
            Session::put('quantity',$quantity);
        }
             
        
        if(isset($_POST['order']))
         $orderSelect = $_POST['order']; 
         
         
        if(empty($userId)){
            return redirect('/login')->with(['order'=> $orderSelect]);
        }    
        return redirect('/buy');
    }
    /* 
     * function selectProduct
     * It will get Shipping Id of the product and redirect to purchase product page
     */
    public function selectProduct()
    {
        $shipId=$_POST['shipId'];
        
        return redirect('/purchased')->with(['shipId'=>$shipId]);
    }
    

    /* 
     * function myOrders
     * It will display all the Orders given by user 
     */
    public function myOrders()
    {
        $empId= Session::get('userid');
       $name = Session::get('username');

       $orderDetail=DB::select('select orders.order_number,orders.mode_of_payment,orders.order_quantity,
       orders.order_date,products.product_name,products.product_description,products.id,
       store_address.address,store_address.Pincode,store_address.city,store_address.state
       ,product_price.sellingprice,images.image_url,order_status.order_status from
       orders left join map_product_order on orders.id=map_product_order.order_id
       left join products on products.id= map_product_order.product_id 
       left join map_user_order on orders.id=map_user_order.order_id
       left join user_details on user_details.empid= map_user_order.user_id
        join map_order_address on orders.id = map_order_address.order_id
       join store_address on store_address.id= map_order_address.address_id
       join map_order_status on orders.id = map_order_status.order_id
       join order_status on order_status.id= map_order_status.status_id
       LEFT JOIN map_product_image on products.id=map_product_image.product_id
        LEFT JOIN images ON images.id=map_product_image.image_id
        LEFT JOIN product_price ON products.id =product_price.product_id
       where user_details.empid="'.$empId.'" 
       '); 
      
       $role = Session::get('userRole');
       


        return view('myorders',['orderDetail'=>$orderDetail,'role'=>$role,'name'=>$name]);
    }

    /* 
     * function downloadInvoice
     * It will download the invoice  
     */
    public function downloadInvoice()
    {
        
        /* $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHtml('<h1>hi</h1>');
        return $pdf->download('invoice.pdf');   */ 
        
    }

    /*
     * function showPurchasedProduct
     * It redirects to Purchase Product page 
     */
    public function showPurchasedProduct()
    {
         $userId= Session::get('userid'); 
        $quantity=Session::get('quantity');
        $productId=Session::get('productId');
       $name=Session::get('username');
       $role=Session::get('userRole');
       $shipId=Session::get('shipId');
       

        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $invoiceNum = 'GM';
        $max = strlen($characters) - 1;
        for ($i = 0; $i < 10; $i++) {
            $invoiceNum .= $characters[mt_rand(0, $max)];
            
        }
        $invoiceNum .= $productId.$userId;
        

        DB::select('insert into invoice (invoice_number) values("'.$invoiceNum.'")');
        $invoiceId=DB::select('select MAX(id) as id from invoice');
        $invoice=DB::select('select invoice_number from invoice where id="'.$invoiceId[0]->id.'"');
        $invoiceNumber=$invoice[0]->invoice_number;
       $billing= DB::select('select * from store_address where address_type="1" and user_id="'.$userId.'"');
       $shippingAddress=DB::select('select * from store_address 
        where id="'.$shipId.'" ' ); 

         $productDetails = DB::select('SELECT products.id,products.product_name,products.product_description,products.model_name,product_price.sellingprice,
       product_price.actualprice FROM products 
LEFT JOIN product_price ON products.id =product_price.product_id
where products.id="'.$productId.'"');



        
        return view('purchaseproductdetails',['shippingAddress'=>$shippingAddress
        ,'productDetails'=>$productDetails,'name'=>$name,'productId'=>$productId,'quantity'=>
        $quantity,'invoiceNumber'=>$invoiceNumber,'role'=>$role]); 
        
    }

    /* 
     * function invoice
     * It redirects to invoice page     
     */
    public function invoice(Request $request)
    {
       $userId= Session::get('userid');
       $quantity=$_POST['quantity'];
       $paymentMode=$_POST['payment_method'];
       $productId=$_POST['productId'];
       $shipId=$_POST['shipId'];
       $name=Session::get('username');
       $role=Session::get('userRole');
        


        DB::select('insert into orders (order_quantity,mode_of_payment) values
       ("'.$quantity.'","'.$paymentMode.'")');
       $order=DB::select('SELECT MAX(id) as `id` from orders');
       $orderId=$order[0]->id;
       DB::select('insert into map_product_order (order_id,product_id)values("'.$orderId.'",
       "'.$productId.'")');
       DB::select('insert into map_user_order (order_id,user_id)values("'.$orderId.'",
       "'.$userId.'")');

        DB::select('insert into map_order_status (order_id,status_id)values("'.$orderId.'",
       "1")');

       DB::select('insert into  map_order_address (address_id,order_id) values("'.$shipId.'","'.$orderId.'")');

        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $orderNum = 'GMOR-';
        
        $orderNum .= $productId.$userId.$orderId;

        DB::select('update orders set order_number="'.$orderNum.'" where id="'.$orderId.'"');
    
       $billing= DB::select('select * from store_address where address_type="1" and user_id="'.$userId.'"');
       $shippingAddress=DB::select('select * from store_address 
        where id="'.$shipId.'" ' ); 

         $productDetails = DB::select('SELECT products.id,products.product_name,products.product_description,products.model_name,product_price.sellingprice,
       product_price.actualprice,orders.order_quantity,orders.mode_of_payment,orders.order_date,orders.order_number
        FROM products 
LEFT JOIN product_price ON products.id =product_price.product_id
LEFT JOIN map_product_order on products.id=map_product_order.product_id
LEFT JOIN orders ON orders.id=map_product_order.order_id
where products.id="'.$productId.'" and orders.id="'.$orderId.'"');



/* $pdf = \App::make('dompdf.wrapper');
$pdf->loadHtml('invoice');
return $pdf->download('invoice.pdf'); */
        
/* $dompdf = new Dompdf();        
        
        
$dompdf->loadHtml(view('invoice',['billingAddress'=>$billing,'shippingAddress'=>$shippingAddress
,'productDetails'=>$productDetails,'name'=>$name]));
$dompdf->render(); */
            
        
        return view('invoice',['billingAddress'=>$billing,'shippingAddress'=>$shippingAddress
        ,'productDetails'=>$productDetails,'name'=>$name,'role'=>$role]);  
    }

    /* 
     * function addBillingDetails
     * It adds billing deatils to database
     */
    public function addBillingDetails()
    {
        $userId=Session::get('userid');
        if(isset($_POST['bmobile']))
         $mobile=DB::select('select mobile_number from store_address where mobile_number ="'. $_POST['bmobile'].'"');
        
        if( !empty($mobile)){          
          $errors['mobile']="Duplicate Mobile Number";
         return redirect()->back()
            ->withErrors($errors);       
        }

       if(isset($_POST['bmobile'])){
        $contact = $_POST['bmobile'];  
        $pincode = $_POST['bpin'];
        $address = $_POST['billingaddress'];
        $city = $_POST['bcity'];
        $state = $_POST['bstate'];
        $country=$_POST['bcountry'];
       /*  $addType =$_POST['addType']; */
        $shipAdd="";
        $name=$_POST['name'];
        $billAdd=DB::select('select * from store_address where address_type=1 and user_id="'.$userId.'"');
          echo '<pre/>';
          
          
        if(empty($billAdd))  {  
        DB::select('insert into store_address (address,address_type,user_id,Pincode,city,state,mobile_number,name,country)
        values("'.$address.'",
        "1","'.$userId .'","'. $pincode.'","'.$city.'","'.$state.'","'.$contact.'","'.$name.'","'.$country.'")');
        $ship=DB::select('select Max(id) as id from store_address');
        $shipAdd=$ship[0]->id;
        }
       }
       if(isset($_POST['sname']))
       {
           return redirect('/select-shipping-details');
           }
           $shipId=$shipAdd;
           return redirect('/purchased')->with(['shipId'=>$shipId]);
    }

    /*
     * function addShippingDetails
     * It adds shipping details to the database 
     */
    public function addShippingDetails()
    {
        $contact = $_POST['smobile'];  
        $pincode = $_POST['spin'];
        $address = $_POST['shippingaddress'];
        $city = $_POST['scity'];
        $state = $_POST['shstate'];
        $addType =$_POST['addType'];
        $userId =Session::get('userid');
        $name=$_POST['sname'];
        $country=$_POST['scountry'];
        $productId =Session::get('productId');
        $quantity=Session::get('quantity');

        
        
        
        $shipAdd=DB::select('select * from store_address where address_type=2 and user_id="'.$userId.'"');
        
        if(empty($shipAdd)||!($shipAdd[0]->address ==$address && $shipAdd[0]->city==$city && $shipAdd[0]->state
        == $state && $shipAdd[0]->Pincode==$pincode && $shipAdd[0]->name=$name)){
            DB::select('insert into store_address (address,address_type,user_id,Pincode,city,state,mobile_number,name,country)
        values("'.$address.'",
        "'.$addType.'","'.$userId .'","'. $pincode.'","'.$city.'","'.$state.'","'.$contact.'","'.$name.'","'.$country.'")');
        }
        $shipAdd=DB::select('select Max(id) as id from store_address ');
         $shipId=$shipAdd[0]->id;
         return redirect('/purchased')->with(['shipId'=>$shipId]);
        
        
    }

    /* 
     * function selectShippingDetails
     * It selects all the shipping address of the user
     */
    public function selectShippingDetails()
    {
        
        
        $userId=Session::get('userId');
        $role = Session::get('userRole');
        $name = Session::get('username');
        $productId=Session::get('productId');
        $quantity=Session::get('quantity');
        
         
         return view('selectaddress',['userId'=>$userId,'role'=>$role,'name'=>$name,'quantity'=>$quantity,'productId'=>$productId]);
    }

    /* 
     * function category
     * It redirects to category page where the different product categories are present
     */
    public function category()
    {
        return view('category');
    }
   
    /* 
     * function productInfo
     * It retrieves the single product details and redirects to its page
     *
     *  @param int $slug
    */
    function productInfo($slug)
    {       
       $res = DB::select('SELECT products.id,products.product_id,products.product_name,products.product_description,products.model_name,product_price.sellingprice,
       product_price.actualprice,product_weight.weight,colour.color,images.image_url,warranty_features.warranty_summary,
       os_features.os,os_features.processor_type,os_features.processor_core,memory_features.RAM,memory_features.internal_storage,
       memory_features.expandable_storage,display_features.display_size,display_features.resolution,display_features.display_colors,
       dimensions.dimension,connectivity_features.network_type,connectivity_features.supported_networks,connectivity_features.gprs,
       camera_features.primary_camera,camera_features.secondary_camera,battery_features.battery_capacity,
       additional_features.sim_size FROM products 
LEFT JOIN map_product_display_features ON products.id=map_product_display_features.product_id
LEFT JOIN display_features ON map_product_display_features.display_feature_id=display_features.id
LEFT JOIN map_product_camera_features ON products.id=map_product_camera_features.product_id
LEFT JOIN camera_features ON map_product_camera_features.camera_feature_id=camera_features.id
LEFT JOIN product_price ON products.id =product_price.product_id
LEFT JOIN product_weight ON products.id= product_weight.product_id
LEFT JOIN map_product_additional_features ON products.id = map_product_additional_features.product_id
LEFT JOIN additional_features ON map_product_additional_features.additional_features_id=additional_features.id
LEFT JOIN map_product_battery_features ON products.id =map_product_battery_features.product_id
LEFT JOIN battery_features ON battery_features.id=map_product_battery_features.battery_feature_id
LEFT JOIN map_product_color_features ON products.id =map_product_color_features.product_id
LEFT JOIN colour ON colour.id = map_product_color_features.color_id
LEFT JOIN map_product_connectivity_features ON products.id = map_product_connectivity_features.product_id
LEFT JOIN connectivity_features on connectivity_features.id=map_product_connectivity_features.connectivity_feature_id
LEFT JOIN map_product_dimension_features ON products.id = map_product_dimension_features.product_id
LEFT JOIN dimensions on dimensions.id = map_product_dimension_features.dimension_feature_id
LEFT JOIN map_product_memory_features on products.id =map_product_memory_features.product_id
LEFT JOIN memory_features on memory_features.id =map_product_memory_features.memory_feature_id
LEFT JOIN map_product_os_features ON products.id = map_product_os_features.product_id
LEFT JOIN os_features ON os_features.id=map_product_os_features.os_feature_id
LEFT JOIN map_product_warranty_features on products.id=map_product_warranty_features.product_id
LEFT JOIN warranty_features ON warranty_features.id=map_product_warranty_features.warranty_feature_id
LEFT JOIN map_product_image on products.id=map_product_image.product_id
LEFT JOIN images ON images.id=map_product_image.image_id
where products.product_name="'.$slug.'"');
 
$name= Session::get('username');
$role = Session::get('userRole');



       return view('single-product',['productDetails'=>$res,'name'=>$name,'role'=>$role]);
    }

    /*
     * function productList
     * it redirects us to the Page Containing Data about all the products
    */
    function productList()
    {
        $productList = json_decode(DB::table('products')->select('product_name')->get());
        /* echo '<pre/>';
        print_r($result);exit; */
        return view('shop',['productList'=>$productList]);
    }

    /* 
     * function brandList
     * it redirects us to the Page Containing Data about all the brands present
     */

     function brandList()
    {
        
        $brandList =DB::select('select DISTINCT(brand.brand_name) as brand_name,
         GROUP_CONCAT(products.product_name) as product_name from brand left join brand_product on brand.id = brand_product.brand_id LEFT JOIN products
         on brand_product.product_id = products.id where products.show_users=1 and products.show_backend=1 GROUP BY brand.brand_name');
            $role = Session::get('userRole');
            for($i=0; $i<count($brandList); $i++) {
                $brandList[$i]->product_name = explode(",", $brandList[$i]->product_name);
            }
              $name=Session::get('username');
              
              
            /* echo '<pre/>';
            print_r($brandList);
            exit; */
        return view('brandlist',['brandlists'=>$brandList,'name'=>$name,'role'=>$role]);
    }

    /* 
     * function productFunctions
     * It redirects to products page 
     */

    public function productFunctions()
    {
        $roleId= Session::get('userRole');
        $userId=Session::get('userid');
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"');

        if($roleId==1 || $roleId==2)
        {
        $productDetails = json_decode(DB::table('products')->where('show_backend',1)->get());
        }
        else
        {
           $productDetails= DB::select('select * from products where added_by="'.$userId.'"'); 
        }
        return view('viewproduct',['productDetails'=>$productDetails,'role'=>$roleId,'privilegeDetails'=>$privilegeDetails]);

    }

    /* 
     * function addProduct
     * It adds the product to the Database and returns back message to the user who added it
     */
     public function addProduct(Request $request)
    {
        $product_name = $_POST['product_name'];
        $model=explode(' ',$product_name);
        for($i=1;$i<sizeof($model);$i++){
            $modelName .= $model[$i]." ";
        }
        $file = $request->file('image');
        $image=$file->getClientOriginalName();
        $fileName=$product_name.$image;
        $sourcePath=$file->getRealPath();
        $destinationPath = 'assets/img';
      $file->move($destinationPath,$fileName);

      $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      $productNum = '';
      $max = strlen($characters) - 1;
      for ($i = 0; $i < 10; $i++) {
          $invoiceNum .= $characters[mt_rand(0, $max)];
          
      }
      $productNum .= $productId;
     
          
        $product_description = $_POST['product_description'];   
        if(isset($_POST['show_users'])){
        $showUser   = $_POST['show_users'];
        }
        if(isset($_POST['show_backend'])){
            $showInDB   = $_POST['show_backend'];
            }
        
        $sellingPrice = $_POST['product_sprice'];
        $actualPrice = $_POST['product_aprice'];
        $weight   = $_POST['product_weight'];
        $color   = $_POST['product_color'];
      
        $warranty = $_POST['warranty'];
        $os   = $_POST['os'];
        $processType   = $_POST['processtype'];
        $processCore = $_POST['pcore'];
        $ram = $_POST['ram'];
        $iStorage   = $_POST['istorage'];
        $eStorage   = $_POST['estorage'];
        $displaySize = $_POST['dsize'];
        $resolution = $_POST['resolution'];
        $dColors   = $_POST['dcolors'];
        $dim   = $_POST['dim'];
        $networkType = $_POST['ntype'];
        $supportedNet = $_POST['snetworks'];
        $gprs   = $_POST['gprs'];
        $primaryCamera   = $_POST['cfeatures'];
        $secondaryCamera = $_POST['scfeatures'];
        $battery = $_POST['battcapac'];
        $simSize   = $_POST['simsize']; 
        
        $userId=Session::get('userid');    
        
         DB::select('insert into products(product_name,product_id,product_description,show_users,show_backend,model_name,added_by)
        values("'.$product_name.'","'.$productNum.'","'.$product_description.'","'.$showUser.'","'.$showInDB.'",
        "'.$modelName.'","'.$userId.'")');  
        
        DB::select('insert into images(image_url) values("'.$fileName.'")');    

          DB::select('insert into colour (color) values("'.$color.'")');
        
        DB::select('insert into battery_features (battery_capacity) values("'.$battery.'")');
        DB::select('insert into dimensions (dimension) values("'.$dim.'")');
        DB::select('insert into warranty_features (warranty_summary) values("'.$warranty.'")');

        DB::select('insert into os_features ( os,processor_type,processor_core)  values("'.$os.'","'.$processType.'","'.$processCore.'") ');        

        DB::select('insert into memory_features ( internal_storage,RAM,expandable_storage)
        values("'.$ram.'","'.$iStorage.'","'.$eStorage.'") ');

         DB::select('insert into display_features( display_size,resolution,display_colors)
        values("'.$displaySize.'","'.$resolution.'","'.$dColors.'" )');  
        
         DB::select('insert into connectivity_features(network_type,supported_networks,gprs)
        values("'.$networkType.'","'.$supportedNet.'","'.$gprs.'") ');
         
         DB::select('insert into camera_features(primary_camera,secondary_camera)
        values("'.$primaryCamera.'","'.$secondaryCamera.'")');  

          DB::select('insert into additional_features(sim_size)
        values("'.$simSize.'")');  

       
      $productId= DB::select('SELECT MAX(id) as `id` from products ');

         echo $productId[0]->id;
     
      $colorId= DB::select('SELECT MAX(id) as `id` from colour ');

      

      $batteryId= DB::select('SELECT MAX(id) as `id` from battery_features ');

        $dimensionId= DB::select('SELECT MAX(id) as `id` from dimensions');

      $warrantyId= DB::select('SELECT MAX(id) as `id` from warranty_features ');

      $osId= DB::select('SELECT MAX(id) as `id` from os_features');


        $memoryId= DB::select('SELECT MAX(id) as `id` from memory_features');

      $displayId= DB::select('SELECT MAX(id) as `id` from  display_features');

      $connectivityId= DB::select('SELECT MAX(id) as `id` from connectivity_features');

      $cameraId= DB::select('SELECT MAX(id) as `id` from  camera_features');

      $addId= DB::select('SELECT MAX(id) as `id` from additional_features');
      
      $imageId= DB::select('SELECT MAX(id) as `id` from images');
      

     

     DB::select('insert into map_product_additional_features (product_id,additional_features_id)
    values("'.$productId[0]->id.'","'.$addId[0]->id.'")');  

    DB::select('insert into map_product_image (product_id,image_id)
    values("'.$productId[0]->id.'","'.$imageId[0]->id.'")');  

    DB::select('insert into map_product_battery_features (product_id,battery_feature_id)
    values("'.$productId[0]->id.'","'.$batteryId[0]->id.'")');

    DB::select('insert into map_product_camera_features (product_id,camera_feature_id)
    values("'.$productId[0]->id.'","'.$cameraId[0]->id.'")');

    DB::select('insert into map_product_color_features (product_id,color_id)
    values("'.$productId[0]->id.'","'.$colorId[0]->id.'")');

    DB::select('insert into map_product_connectivity_features (product_id,connectivity_feature_id)
    values("'.$productId[0]->id.'","'.$connectivityId[0]->id.'")');

    DB::select('insert into map_product_dimension_features (product_id,dimension_feature_id)
    values("'.$productId[0]->id.'","'.$dimensionId[0]->id.'")');

    DB::select('insert into map_product_display_features (product_id,display_feature_id)
    values("'.$productId[0]->id.'","'.$displayId[0]->id.'")');

    DB::select('insert into map_product_memory_features (product_id,memory_feature_id)
    values("'.$productId[0]->id.'","'.$memoryId[0]->id.'")');

    DB::select('insert into map_product_os_features (product_id,os_feature_id)
    values("'.$productId[0]->id.'","'.$osId[0]->id.'")');

    DB::select('insert into map_product_warranty_features (product_id,warranty_feature_id)
    values("'.$productId[0]->id.'","'.$warrantyId[0]->id.'")');

   

    DB::select('insert into product_price (product_id,actualprice,sellingprice)
    values("'.$productId[0]->id.'","'.$actualPrice.'","'.$sellingPrice.'")');

    DB::select('insert into product_weight (product_id,weight)
    values("'.$productId[0]->id.'","'.$weight.'")');   

        echo 'Successfully Added Product';
           
    }

    /* 
     * function viewAddProducts
     * It redirects to the Page where the Products can be added 
     */
     public function viewAddProducts()
    {
        $role=Session::get('userRole');
        $userId=Session::get('userId');
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"');
        return view('addproduct',['role'=>$role,'privilegeDetails'=>$privilegeDetails]);
    }

    /* 
     * function deleteProduct
     * It deletes the product
     */
    public function deleteProduct()
    {
        $productId =    $_GET['id'];
        DB::select('update products set show_backend=0 where id="'.$productId.'"');
        echo "Product Deleted";
    }

    /* 
     * function updateProduct
     * It redirects to updateproduct page
     */
    function updateProduct()
    {
        $productId =    $_GET['productId'];
        $userRole = Session::get('userRole');
        $userId=Session::get('userid');
        $name=Session::get('username');
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"'); 
       $productDetail = DB::select('SELECT * FROM products 
LEFT JOIN map_product_display_features ON products.id=map_product_display_features.product_id
LEFT JOIN display_features ON map_product_display_features.display_feature_id=display_features.id
LEFT JOIN map_product_camera_features ON products.id=map_product_camera_features.product_id
LEFT JOIN camera_features ON map_product_camera_features.camera_feature_id=camera_features.id
LEFT JOIN product_price ON products.id =product_price.product_id
LEFT JOIN product_weight ON products.id= product_weight.product_id
LEFT JOIN map_product_additional_features ON products.id = map_product_additional_features.product_id
LEFT JOIN additional_features ON map_product_additional_features.additional_features_id=additional_features.id
LEFT JOIN map_product_battery_features ON products.id =map_product_battery_features.product_id
LEFT JOIN battery_features ON battery_features.id=map_product_battery_features.battery_feature_id
LEFT JOIN map_product_color_features ON products.id =map_product_color_features.product_id
LEFT JOIN colour ON colour.id = map_product_color_features.color_id
LEFT JOIN map_product_connectivity_features ON products.id = map_product_connectivity_features.product_id
LEFT JOIN connectivity_features on connectivity_features.id=map_product_connectivity_features.connectivity_feature_id
LEFT JOIN map_product_dimension_features ON products.id = map_product_dimension_features.product_id
LEFT JOIN dimensions on dimensions.id = map_product_dimension_features.dimension_feature_id
LEFT JOIN map_product_memory_features on products.id =map_product_memory_features.product_id
LEFT JOIN memory_features on memory_features.id =map_product_memory_features.memory_feature_id
LEFT JOIN map_product_os_features ON products.id = map_product_os_features.product_id
LEFT JOIN os_features ON os_features.id=map_product_os_features.os_feature_id
LEFT JOIN map_product_warranty_features on products.id=map_product_warranty_features.product_id
LEFT JOIN warranty_features ON warranty_features.id=map_product_warranty_features.warranty_feature_id
where products.id="'.$productId .'"');


    return view('updateproduct',['productDetail'=>$productDetail,'role'=>$userRole,
    'privilegeDetails'=>$privilegeDetails,'name'=>$name]);
}

    /* 
     * function updateDatabase
     * It updates the data in database and redirects to viewproducts page
     */
    function updateDatabase()
    {
        $product_id=$_POST['product_id'];
        $product_name = $_POST['product_name'];
          //echo $product_name;
        $product_description = $_POST['product_description'];   
        if(isset($_POST['show_users'])){
        $showUser   = $_POST['show_users'];
        }
        if(isset($_POST['show_backend'])){
            $showInDB   = $_POST['show_backend'];
            }
        
        $sellingPrice = $_POST['product_sprice'];
        $actualPrice = $_POST['product_aprice'];
        $weight   = $_POST['product_weight'];
        $color   = $_POST['product_color'];
        $warranty = $_POST['warranty'];
        $os   = $_POST['os'];
        $processType   = $_POST['processtype'];
        $processCore = $_POST['pcore'];
        $ram = $_POST['ram'];
        $iStorage   = $_POST['istorage'];
        $eStorage   = $_POST['estorage'];
        $displaySize = $_POST['dsize'];
        $resolution = $_POST['resolution'];
        $dColors   = $_POST['dcolors'];
        $dim   = $_POST['dim'];
        $networkType = $_POST['ntype'];
        $supportedNet = $_POST['snetworks'];
        $gprs   = $_POST['gprs'];
        $primaryCamera   = $_POST['cfeatures'];
        $secondaryCamera = $_POST['scfeatures'];
        $battery = $_POST['battcapac'];
        $simSize   = $_POST['simsize']; 

        $file = $request->file('image');
        $image=$file->getClientOriginalName();
        $fileName=$product_name.$image;
        
        

        DB::select('update table products set product_name= "'.$product_name.'"
        ,product_description="'.$product_description.'",show_users="'.$showUser.'",
        show_backend="'.$showInDB.'" where id="'.$product_id.'"');  

       $additionalId= DB::select('select additional_features_id from map_product_additional_features
       where product_id="'.$product_id.'" ');  
       $imgId= DB::select('select image_id from map_product_image
       where product_id="'.$product_id.'" ');  
       $battId= DB::select('select battery_feature_id from map_product_battery_features
       where product_id="'.$product_id.'" ');  
       $camId= DB::select('select camera_feature_id from map_product_camera_features
       where product_id="'.$product_id.'" ');  
        $colId= DB::select('select color_id from map_product_color_features
       where product_id="'.$product_id.'" ');  

       $connId= DB::select('select connectivity_feature_id from map_product_connectivity_features
       where product_id="'.$product_id.'" ');  

       $dimId= DB::select('select dimension_feature_id from map_product_dimension_features
       where product_id="'.$product_id.'" ');  

       $disId= DB::select('select display_feature_id from map_product_display_features
       where product_id="'.$product_id.'" ');  

       $memId= DB::select('select memory_feature_id from map_product_memory_features
       where product_id="'.$product_id.'" ');  

       $operatingId= DB::select('select os_feature_id from map_product_os_features
       where product_id="'.$product_id.'" ');  

       $warrId= DB::select('select warranty_feature_id from map_product_warranty_features
       where product_id="'.$product_id.'" ');  

                 
        DB::select('update table colour set color ="'.$color.'" where id="'.$colId.'" ');
        
        DB::select('update table battery_features set battery_capacity="'.$battery.'"where id="'.$battId.'"');
        DB::select('update table dimensions set dimension="'.$dim.'"where id="'.$dimId.'"');
        DB::select('update table warranty_features set warranty_summary="'.$warranty.'"where id="'.$warrId.'"');

        DB::select('update table os_features set os="'.$os.'",processor_type="'.$processType.'",processor_core= "'.$processCore.'" where id="'.$operatingId.'" ');        

        DB::select('update table memory_features set internal_storage="'.$iStorage.'",RAM="'.$ram.'",
        expandable_storage="'.$eStorage.'"  where id="'.$memId.'"');

         DB::select('update table display_features set display_size="'.$displaySize.'",
         resolution="'.$resolution.'",display_colors="'.$dColors.'"  where id="'.$disId.'" ');  
        
         DB::select('update table connectivity_features set network_type="'.$networkType.'"
         ,supported_networks="'.$supportedNet.'",gprs="'.$gprs.'"
        where id="'.$connId.'" ');
         
         DB::select('update table camera_features set primary_camera="'.$primaryCamera.'"
         ,secondary_camera="'.$secondaryCamera.'"  where id="'.$camId.'" ');  

          DB::select('update table additional_features set sim_size="'.$simSize.'"
          where id="'.$additionalId.'"');  

          DB::select('update table images set image_url="'.$fileName.'"
          where id="'.$imgId.'"');  

          $sourcePath=$file->getRealPath();
        $destinationPath = 'assets/img';
      $file->move($destinationPath,$fileName);

      DB::select('update table product_price  set actualprice="'.$actualPrice.'",
      sellingprice="'.$sellingPrice.'"where product_id="'.$product_id.'"');

      DB::select('update table product_weight  set weight="'.$weight.'"
      where product_id="'.$product_id.'"');
    }

    /* 
     * function buy
     * It redirects to buy products page
     */
    public function buy()
    {

        $userId= Session::get('userid');
        
        
        $quantity=Session::get('quantity');
        $name=Session::get('username');
        $role=Session::get('userRole');
        $userAddress=DB::select('select * from store_address 
        where user_id="'.$userId.'" and address_type= "1"' );
        
        $userDetail=DB::select('select empid,empname,emp_mobile from user_details where
        empid="'.$userId.'"') ;
        
        
        
      
        $productId=Session::get('productId');
       
       
        $productDetails=DB::select('select * from products where id="'.$productId.'"');
        
        /* $checkAddress=DB::select('select * from store_address where user_id=2 and address=
        "'.$userAddress[0]->address.'"'); */
        /* ,'check'=>$checkAddress */
        
        if(empty($userAddress))
        {
        return view('checkout',['userDetail'=>$userDetail,'userAddress'=>$userAddress,'productDetails'=>$productDetails,
        'name'=>$name,'role'=>$role,'quantity'=>$quantity]);
        }
        else
        {
             $shippingAddress = DB::select('select * from store_address where user_id=
        "'.$userId.'" and address_type="2" and address<>"'.$userAddress[0]->address.'"');
        return view('checkout2',['userDetail'=>$userDetail,'userAddress'=>$userAddress,'productDetails'=>$productDetails,
        'address'=>$shippingAddress,'name'=>$name,'role'=>$role,'quantity'=>$quantity]);
        }
    }

    /* 
        * function orderDetails
        * It redirects to the orders page
        */
    public function orderDetails()
    {
        $productId=$_GET['productId'];
        $role=Session::get('userRole');
        Session::put('productId',$productId);
        

         $productDetails = DB::select('SELECT products.id,products.product_name,products.product_description,products.model_name,product_price.sellingprice,
       product_price.actualprice,warranty_features.warranty_summary,
       memory_features.RAM,memory_features.internal_storage,
       memory_features.expandable_storage
        FROM products 
LEFT JOIN product_price ON products.id =product_price.product_id
LEFT JOIN map_product_memory_features on products.id =map_product_memory_features.product_id
LEFT JOIN memory_features on memory_features.id =map_product_memory_features.memory_feature_id
LEFT JOIN map_product_warranty_features on products.id=map_product_warranty_features.product_id
LEFT JOIN warranty_features ON warranty_features.id=map_product_warranty_features.warranty_feature_id

where products.id="'.$productId.'"');
        $name= Session::get('username');
        return view('order',['productDetails'=>$productDetails,'name'=>$name,'role'=>$role]);
    }
    /* 
     * function showPayment
     * It redirects to the Payment Page
     */
    public function showPayment()
    {
        $shippingAddressId=$_POST['shipId'];
        $productId=$_POST['productId'];
        $quantity=$_POST['quantity'];
        $name=Session::get('username');
         $role=Session::get('userRole');

        return view('payment',['quantity'=>$quantity,'shipId'=>$shippingAddressId,
        'productId'=>$productId,'name'=>$name,'role'=>$role]);
    }

    /* 
     * function viewOrders
     * It shows the list of all the orders that have been placed
     */
    public function viewOrders()
    {
        $userRole = Session::get('userRole');
        $userId=Session::get('userid');
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"');
        if($userRole==1 || $userRole==2)
        {
        $orders=DB::select('select orders.order_number,orders.mode_of_payment,orders.order_quantity,
       orders.order_date,products.product_name,products.product_description,orders.id,
       order_status.order_status from
       orders left join map_product_order on orders.id=map_product_order.order_id
       left join products on products.id= map_product_order.product_id   
       join map_order_status on orders.id = map_order_status.order_id
       join order_status on order_status.id= map_order_status.status_id 
       ');
        }
        else
        {
            $orders=DB::select('select orders.order_number,orders.mode_of_payment,orders.order_quantity,
       orders.order_date,products.product_name,products.product_description,orders.id,
       order_status.order_status from
       orders left join map_product_order on orders.id=map_product_order.order_id
       left join products on products.id= map_product_order.product_id   
       join map_order_status on orders.id = map_order_status.order_id
       join order_status on order_status.id= map_order_status.status_id 
       where products.added_by="'.$userId.'"
       '); 
        }
       $name=Session::get('username'); 
        
        return view('vieworder',['orders'=>$orders,'name'=>$name,'role'=>$userRole,'privilegeDetails'=>$privilegeDetails]);
    }
    /*
     * function specificOrderDetails
     * It shows specific order details  
     */
    public function specificOrderDetails()
    {
        $orderNumber=$_GET['orderNumber'];
        $orderDetail=DB::select('select orders.order_number,orders.mode_of_payment,orders.order_quantity,
       orders.order_date,products.product_name,products.product_description,store_address.id,
       store_address.address,store_address.Pincode,store_address.city,store_address.state,
       store_address.name
       ,product_price.sellingprice,images.image_url,order_status.order_status from
       orders left join map_product_order on orders.id=map_product_order.order_id
       left join products on products.id= map_product_order.product_id 
       left join map_user_order on orders.id=map_user_order.order_id
       left join user_details on user_details.empid= map_user_order.user_id
        join map_order_address on orders.id = map_order_address.order_id
       join store_address on store_address.id= map_order_address.address_id
       join map_order_status on orders.id = map_order_status.order_id
       join order_status on order_status.id= map_order_status.status_id
       LEFT JOIN map_product_image on products.id=map_product_image.product_id
        LEFT JOIN images ON images.id=map_product_image.image_id
        LEFT JOIN product_price ON products.id =product_price.product_id
       where orders.order_number="'.$orderNumber.'"');
       $name=Session::get('username');
        $billingDetails=DB::select('select * from store_address where address_type="1" and id="'.$orderDetail[0]->id.'"');
       return view('specificorder',['orderDetail'=>$orderDetail,'billingDetails'=>$billingDetails,'name'=>$name]);
    }

    /* 
     * function addToCart
     * It adds products to the cart
     */
    public function addToCart(Request $request)
    {
        $count=1;
        $price=0;
        $productId=$request->input('productId');
        if(empty(Session::get('count'))){
        Session::put('count',$count);
        }
        else{
            $productCount=1;
          $countFromSession=  Session::get('count');
          $count=$productCount + $countFromSession;
           $request->session()->forget('count');
          Session::put('count',$count); 
          
        }
        $productprice=DB::select('select product_price.sellingprice from product_price where product_id
        ="'.$productId.'"');
        if(empty(Session::get('price'))){
            $price=$productprice[0]->sellingprice;
            Session::put('price',$price);
        }
        else{
            $sellPrice=$productprice[0]->sellingprice;
            $priceFromSession=Session::get('price');
            $price=$sellPrice + $priceFromSession;
             $request->session()->forget('price');
            Session::put('price',$price); 
        }
        $arr=['price'=>$price,'count'=>$count];
        echo json_encode($arr);
         
    }

    /* 
     * function viewCart
     * It shows all the items that are present in cart of the user
     */
    public function viewCart(Request $request)
    {
         $userRole = Session::get('userRole');
        $userId=Session::get('userid');
        $name=Session::get('username');
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"');
        
   /*  $products=$request->input('products');
   
    $productsId=explode(',',$products);
    
    for($i=0;$i<sizeof($productsId);$i++){
        $res[$i]=explode('-',$productsId[$i]);
    }
    $m=0;
    for($i=0;$i<sizeof($res);$i++){
        $flag=0;
        if($i==0){
        for($j=0;$j<2;$j++){
             $productDesc[$m]=$res[$i][$j];
             
             $j++;
             $quantity[$m]=$res[$i][$j];
             $m++;
        }
    }
    else{
        
        for($j=0;$j<2;$j++){
            
            if($j==0){
            for($k=0;$k<$i;$k++){
                
                if($res[$i][0]==$res[$k][0]){
                    
                    $quantity[$k]+=$res[$i][$j+1];
                    
                    
                    $flag=1;

                }
            }
        }
            if($flag==0){
            $productDesc[$m]=$res[$i][$j];   
             $j++;
             $quantity[$m]=$res[$i][$j];
             $m++;
            }
       }
    }
    }
       
   
    $str='products.id IN(';
    $res='ORDER BY FIELD(products.id,';
    $productDetails="";
        if(!empty($products))
        {
        for($i=0;$i<sizeof($productDesc);$i++)
        {
            $str.=''.$productDesc[$i].',';
            $res.=''.$productDesc[$i].',';
        }
        $str=rtrim($str,',');
        $str.=')';
        $res=rtrim($res,',');
        $res.=')';
         
        
        
        
         $productDetails = DB::select('SELECT products.id,products.product_name,products.product_description,products.model_name,product_price.sellingprice,
       product_price.actualprice,warranty_features.warranty_summary,
       memory_features.RAM,memory_features.internal_storage,
       memory_features.expandable_storage
        FROM products 
LEFT JOIN product_price ON products.id =product_price.product_id
LEFT JOIN map_product_memory_features on products.id =map_product_memory_features.product_id
LEFT JOIN memory_features on memory_features.id =map_product_memory_features.memory_feature_id
LEFT JOIN map_product_warranty_features on products.id=map_product_warranty_features.product_id
LEFT JOIN warranty_features ON warranty_features.id=map_product_warranty_features.warranty_feature_id

where '.$str.' '.$res.' ');
        
        } */
        
        return view('cart',['role'=>$userRole,'privilegeDetails'=>$privilegeDetails,
        'name'=>$name]);
    }

}

