<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{   

   
    /* 
     * function productInfo
     * It retrieves the single product details and redirects to its page
    */
    function productInfo($slug)
    {       
       $res = json_decode(DB::table('products')->where(['product_name'=>$slug ])->get(['product_name']));
        if(empty($res))
        {
            abort(404);
        }   
       return view('single-product',['productName'=>$res[0]->product_name]);
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
            for($i=0; $i<count($brandList); $i++) {
                $brandList[$i]->product_name = explode(",", $brandList[$i]->product_name);
            }
            /* echo '<pre/>';
            print_r($brandList);
            exit; */
        return view('brandlist',['brandlists'=>$brandList]);
    }

    /* 
     * function productFunctions
     * It redirects to products page 
     */

    public function productFunctions()
    {
        $productDetails = json_decode(DB::table('products')->where('show_backend',1)->get());

        return view('viewproduct',['productDetails'=>$productDetails]);

    }

    /* 
     * function addProduct
     * It adds the product to the Database and returns back message to the user who added it
     */
     public function addProduct(Request $request)
    {
        $product_name = $_POST['product_name'];
        $file = $request->file('image');
        $image=$file->getClientOriginalName();
        $fileName=$product_name.$image;
        $sourcePath=$file->getRealPath();
        $destinationPath = 'assets/img';
      $file->move($destinationPath,$fileName);
     
          
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
        
            
        
         DB::select('insert into products(product_name,product_description,show_users,show_backend)
        values("'.$product_name.'","'.$product_description.'","'.$showUser.'","'.$showInDB.'")');  
        
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
        return view('addproduct');
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


    return view('updateproduct',['productDetail'=>$productDetail]);
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
        //$imagePath= $_FILES['file']['tmp_name'];

        DB::select('update table products set product_name= "'.$product_name.'"
        ,product_description="'.$product_description.'",show_users="'.$showUser.'",
        show_backend="'.$showInDB.'" where id="'.$product_id.'"');  
        
        DB::select('update table colour set color ="'.$color.'" where id="'.$product_id.'" ');
        
        DB::select('update table battery_features set battery_capacity="'.$battery.'"where id="'.$product_id.'"');
        DB::select('update table dimensions set dimension="'.$dim.'"where id="'.$product_id.'"');
        DB::select('update table warranty_features set warranty_summary="'.$warranty.'"where id="'.$product_id.'"');

        DB::select('update table os_features set os="'.$os.'",processor_type="'.$processType.'",processor_core= "'.$processCore.'" where id="'.$product_id.'" ');        

        DB::select('update table memory_features set internal_storage="'.$iStorage.'",RAM="'.$ram.'",
        expandable_storage="'.$eStorage.'"  where id="'.$product_id.'"');

         DB::select('update table display_features set display_size="'.$displaySize.'",
         resolution="'.$resolution.'",display_colors="'.$dColors.'"  where id="'.$product_id.'" ');  
        
         DB::select('insert into connectivity_features(network_type,supported_networks,gprs)
        values("'.$networkType.'","'.$supportedNet.'","'.$gprs.'") ');
         
         DB::select('insert into camera_features(primary_camera,secondary_camera)
        values("'.$primaryCamera.'","'.$secondaryCamera.'")');  

          DB::select('insert into additional_features(sim_size)
        values("'.$simSize.'")');  

    }

}

