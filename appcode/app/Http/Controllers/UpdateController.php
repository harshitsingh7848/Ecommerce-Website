<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ecommerce;
use App\dropdownbind;
use DB;
use Session;

class UpdateController extends Controller
{
    /* 
     * function update
     * It updates the user type of the users in Database
     */
    public function update()
    {
             print_r($res);
    }

    /* 
     * function getDetails
     * It fetches the details of modules from Database and passes it to the Web Worker
     */
    public function getDetails(Request $request)
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        $role=Session::get('userRole');
        $userId=Session::get('userid');
        $time="";
        $vendorId=$request->input('vendorId');
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"'); 
        $vendorId=DB::select('select vendor_id from map_vendor_user where user_id="'.$userId.'"');
        if($role===4){
            if($privilegeDetails[0]->vendor_role_id===1){
                $result= DB::select('select count(empid) as count from user_details left join
                map_vendor_user on user_details.empid=map_vendor_user.user_id
                left join vendor_names on map_vendor_user.vendor_id= vendor_names.id where 
                vendor_names.id="'.$vendorId[0]->vendor_id.'"');
                $time=$result[0]->count;
            }
        }
        else{
            $time = ecommerce::count();
        }
        
        echo "Number of Users:  {$time}\n\n";
        flush();
    }

    /*
     * function getOrderCount
     * It passes details of Orders from database and passes it to webworker 
     */
    public function getOrderCount()
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        $role=Session::get('userRole');
        $userId=Session::get('userid');
        $result="";
        if($role===4){
        $result=DB::select('select count(orders.order_number) as id from
       orders left join map_product_order on orders.id=map_product_order.order_id
       left join products on products.id= map_product_order.product_id   
       join map_order_status on orders.id = map_order_status.order_id
       join order_status on order_status.id= map_order_status.status_id 
       where products.added_by="'.$userId.'"
       '); 
        }
        else{
        $result = DB::select('select count(id) as id from orders ');
        }
        $time = $result[0]->id;
        echo "Number of Orders:  {$time}\n\n";
        flush();
    }

    /* 
     * function getProductsCount
     * It passes details of Products from database and passes it to webworker
     */
    public function getProductsCount()
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        $role=Session::get('userRole');
        $userId=Session::get('userid');
        $result="";

        if($role===4){
        $result=DB::select('select count(products.id) as id from products
       where products.added_by="'.$userId.'"
       '); 

        }
        else{
        $result = DB::select('select count(id) as id from products ');
        }
        $time = $result[0]->id;
        echo "Number of Products:  {$time}\n\n";
        flush();
    }
}
