<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Carbon\Carbon;

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
         on brand_product.product_id = products.id GROUP BY brand.brand_name');
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
        $productDetails = json_decode(DB::table('products')->get());

        return view('viewproduct',['productDetails'=>$productDetails]);

    }

    /* 
     * function addProduct
     * It adds the product to the Database and returns back message to the user who added it
     */
     public function addProduct()
    {
        $product_name = $_GET['product-name'];
        $product_description = $_GET['product-desc'];
        $showUser   = $_GET['showuser'];
        $showInDB   = $_GET['showindb'];
        $sellingPrice = $_GET['sp'];
        $actualPrice = $_GET['ap'];
        $weight   = $_GET['weight'];
        $color   = $_GET['color'];
        $inBox = $_GET['inbox'];
        $warranty = $_GET['warranty'];
        $os   = $_GET['os'];
        $processType   = $_GET['processType'];
        $processCore = $_GET['processCore'];
        $ram = $_GET['ram'];
        $iStorage   = $_GET['istorage'];
        $eStorage   = $_GET['estorage'];
        $displaySize = $_GET['displaysize'];
        $resolution = $_GET['resolution'];
        $dColors   = $_GET['dcolors'];
        $dim   = $_GET['dim'];
        $networkType = $_GET['networktype'];
        $supportedNet = $_GET['supportednet'];
        $gprs   = $_GET['gprs'];
        $primaryCamera   = $_GET['primaryCam'];
        $secondaryCamera = $_GET['secondaryCam'];
        $battery = $_GET['battery'];
        $simSize   = $_GET['simSize'];
        $dateFirstAvail   = $_GET['dateFirstAvail'];
        
        DB::select('insert into products(product_name,product_description,show_users,show_backend)
        values("'.$product_name.'","'.$product_description.'","'.$showUser.'","'.$showInDB.'")'); 
        
         DB::select('insert into colour (color) values("'.$color.'")');
        DB::select('insert into what_is_in_box (items_in_box) values("'.$inBox.'")');
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

      $inBoxId= DB::select('SELECT MAX(id) as `id` from  what_is_in_box');

      $batteryId= DB::select('SELECT MAX(id) as `id` from battery_features ');

        $dimensionId= DB::select('SELECT MAX(id) as `id` from dimensions');

      $warrantyId= DB::select('SELECT MAX(id) as `id` from warranty_features ');

      $osId= DB::select('SELECT MAX(id) as `id` from os_features');


        $memoryId= DB::select('SELECT MAX(id) as `id` from memory_features');

      $displayId= DB::select('SELECT MAX(id) as `id` from  display_features');

      $connectivityId= DB::select('SELECT MAX(id) as `id` from connectivity_features');

      $cameraId= DB::select('SELECT MAX(id) as `id` from  camera_features');

      $addId= DB::select('SELECT MAX(id) as `id` from additional_features');

     

    /* DB::select('insert into map_product_additional_features (product_id,additional_features_id)
    values("'.$productId[0]->id.'","'.$addId[0]->id.'")');  

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

    DB::select('insert into map_product_whatisinbox (boxid,product_id)
    values("'.$inBoxId[0]->id.'",'.$productId[0]->id.'")');

    DB::select('insert into product_price (product_id,actualprice,sellingprice)
    values("'.$productId[0]->id.'","'.$actualPrice.'","'.$sellingPrice.'")');

    DB::select('insert into product_weight (product_id,weight)
    values("'.$productId[0]->id.'","'.$weight.'")'); */

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
}

