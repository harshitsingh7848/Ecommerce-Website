<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrderController extends Controller
{
    /* 
     * function getOrders
     * It displays all the details of the Orders
     */
    public function getOrders(Request $request)
    {   
        $months=['Jan'=>0,'Feb'=>0,'Mar'=>0,'Apr'=>0,'May'=>0,'Jun'=>0,'Jul'=>0,
        'Aug'=>0,'Sep'=>0,'Oct'=>0,'Nov'=>0,'Dec'=>0];
               
        $sql = 'select order_date from orders';
        $where = '';
        $startDate= $request->input('startDate')." 00.00.00"; 
        $endDate= $request->input('endDate')." 23.59.59";
       
        if(!empty($startDate) && !empty($endDate)){
            $where = 'where order_date>"'.$startDate.'" and order_date<"'.$endDate.'"';
        }

        $sql = $sql." ".$where;
        /* echo $sql;exit; */
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
