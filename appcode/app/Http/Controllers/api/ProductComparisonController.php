<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductComparisonController extends Controller
{
    public function getProducts(Request $request)
    {
        $brands=[];
        $seller=[];
        DB::select('select * from orders');
        $brandName=DB::select('select brand_name from brand');
        foreach($brandName as $i=>$v)
        {
            $brands['"'.$brandName[$i]->brand_name.'"']=0; 
        }
        
         
        foreach($brands as $i=>$v){  
             
         $productCount=DB::select('select count(orders.id) as count from orders left join
        map_product_order on orders.id=map_product_order.order_id left join
        products on products.id=map_product_order.product_id
        join brand_product on brand_product.product_id=products.id
        join brand on brand.id=brand_product.brand_id where 
        brand.brand_name='.$i.'
        
        ');
        $seller[$i]=$productCount[0]->count; 
        
        }        
        return response()->json($seller); 
    }
}
