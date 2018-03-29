<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RegionController extends Controller
{
    public function getRegion(Request $request)
    {
        $region=DB::select('select DISTINCT(store_address.Country) from orders 
        join map_user_order on orders.id=map_user_order.order_id
        join user_details on user_details.empid= map_user_order.user_id
        join store_address on user_details.empid=store_address.user_id
         where address_type="2"');
         return response()->json($region);
    }
}
