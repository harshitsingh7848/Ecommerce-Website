<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class ProductComparisonController extends Controller
{
    public function getProducts(Request $request)
    {
        $brands=[];
        $seller=[];
        $userId=Session::get('userid');
        $role=Session::get('userRole');
        $sql='select brand_name from brand';
        $where='';
        $flag=0;
        //echo $role;
         if($role==4){
            $vendorId=DB::select('select vendor_role_id from user_privilege_module_role where emp_id
            ="'.$userId.'"');
            if($vendorId[0]->vendor_role_id=="2"){
                $flag=1;
            }
            else{
                $vendor=DB::select('select vendor_names.vendor_name from map_vendor_user left join vendor_names ON
                vendor_names.id=map_vendor_user.vendor_id
                where user_id="'.$userId.'"');
                $vendorName=$vendor[0]->vendor_name;
                $where='where brand_name="'.$vendorName.'"';
                
            }
        } 
        if($flag==0){
        DB::select('select * from orders');
        
        $sql=$sql." ".$where;
        $brandName=DB::select($sql);
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
}
