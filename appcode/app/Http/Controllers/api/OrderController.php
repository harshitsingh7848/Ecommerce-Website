<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class OrderController extends Controller
{
    /* 
     * function getOrders
     * It displays all the details of the Orders
     * 
     * @return Response
     */
    public function getOrders(Request $request)
    {   
        $months=['Jan'=>0,'Feb'=>0,'Mar'=>0,'Apr'=>0,'May'=>0,'Jun'=>0,'Jul'=>0,
        'Aug'=>0,'Sep'=>0,'Oct'=>0,'Nov'=>0,'Dec'=>0];
        
        $role=Session::get('userRole');
        
        $flag='';
        $sql = 'select orders.order_date from orders';
        $where = '';
        $str='';
        $result='';
        $check=0;
        if(!empty($request->input('startDate')) && !empty($request->input('startDate')))
        {
        $startDate= $request->input('startDate')." 00.00.00"; 
        $endDate= $request->input('endDate')." 23.59.59";
         $where = 'where order_date>"'.$startDate.'" and order_date<"'.$endDate.'"';

         if($role==4){
            $vendorId=DB::select('select vendor_role_id from user_privilege_module_role where emp_id
            ="'.$userId.'"');
            if($vendorId[0]->vendor_role_id=="2"){
                $flag=1;
            }
            else{
                $vendor=DB::select('select vendor_names.id from map_vendor_user left join vendor_names ON
                vendor_names.id=map_vendor_user.vendor_id
                where user_id="'.$userId.'"');
                $userDt=DB::select('select user_id from map_vendor_user where 
                vendor_id="'.$vendor[0]->id.'"');
                $str='IN(';
                foreach($userDt as $user){
                    $str.=$user->user_id.",";
                }
                $str=rtrim($str,',').")";
                
                $result='left join map_product_order on orders.id=map_product_order.order_id
       left join products on products.id= map_product_order.product_id   
       join map_order_status on orders.id = map_order_status.order_id
       join order_status on order_status.id= map_order_status.status_id 
       where products.added_by '.$str.' and order_date>"'.$startDate.'" and order_date<"'.$endDate.'"';
       $check=1;
            }
        } 
        }
        
        if($check==0){
            $sql = $sql." ".$where;
        }
        else{
            $sql = $sql." ".$result;
        }
        
         /* echo $sql;exit;  */
         if($flag==0)
         {
        $orderDetails=DB::select($sql);

        
        foreach($orderDetails as $i=>$v){
            $time= strtotime($orderDetails[$i]->order_date);
            $month=date('m',$time);
            $month = ltrim($month, '0');
            
            switch($month){
                case 1:$months['Jan']++;
                         break; 
                case 2:$months['Feb']++;
                         break; 
                case 3:$months['Mar']++;
                         break; 
                case 4:$months['Apr']++;
                         break; 
                case 5:$months['May']++;
                         break; 
                case 6:$months['Jun']++;
                         break; 
                case 7:$months['Jul']++;
                         break; 
                case 8:$months['Aug']++;
                         break; 
                case 9:$months['Sep']++;
                         break; 
                case 10:$months['Oct']++;
                         break; 
                case 11:$months['Nov']++;
                         break; 
                case 12:$months['Dec']++;
                         break;                                                                                                               
            } 
        }
        /* return json_encode($months); */
         return response()->json($months); 
    }
    }

   
}
