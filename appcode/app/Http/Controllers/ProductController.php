<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Carbon\Carbon;

class ProductController extends Controller
{
    
    /* 
     * function adminDashboard
     * It redirects us to the Admin's Dashboard   
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

     public function addProduct()
    {
        $product_name = $_GET['product-name'];
        $product_description = $_GET['product-desc'];
        $showUser   = $_GET['showuser'];
        $showInDB   = $_GET['showindb'];
        
        
        /* echo $product_description; */
         DB::select('insert into products(product_name,product_description,show_users,show_backend)
          values("'.$product_name.'","'.$product_description.'","'.$showUser.'","'.$showInDB.'") '); 
        
        echo 'Successfully Added Product';
    }

     public function viewAddProducts()
    {

        return view('addproduct');

    }
}

