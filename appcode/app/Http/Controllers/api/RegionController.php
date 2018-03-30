<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RegionController extends Controller
{
    public function getRegion(Request $request)
    {
        $country=[];
        $countries=DB::select('select country from store_address  where address_type="2"');
        for($i=0;$i<sizeof($countries);$i++){
            $country['"'.$countries[$i]->country.'"']=0;
        }
        
        foreach($country as $i=>$v){
        $region=DB::select('select count(orders.id) as count from orders 
        join map_user_order on orders.id=map_user_order.order_id
        join user_details on user_details.empid= map_user_order.user_id
        join store_address on user_details.empid=store_address.user_id
         where store_address.Country='.$i.'');
         $countryCount[$i]=$region[0]->count;
        }
        
        
         return response()->json($countryCount);
    }
}
