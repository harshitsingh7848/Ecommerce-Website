<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    /* 
     * function getUsers
     * It displays the details of all the Users
     * 
     * @return Response
     */
    public function getUsers(Request $request)
    {
        $months=['Jan'=>0,'Feb'=>0,'Mar'=>0,'Apr'=>0,'May'=>0,'Jun'=>0,'Jul'=>0,
        'Aug'=>0,'Sep'=>0,'Oct'=>0,'Nov'=>0,'Dec'=>0];

         $sql = 'select created_at from user_details';
        $where = '';
        if(!empty($request->input('startDate')) && !empty($request->input('startDate')))
        {
        $startDate= $request->input('startDate')." 00.00.00"; 
        $endDate= $request->input('endDate')." 23.59.59";
         $where = 'where created_at>"'.$startDate.'" and created_at<"'.$endDate.'"';
        }
        

        $sql = $sql." ".$where;
        
        $userDetails=DB::select($sql);

        
        foreach($userDetails as $i=>$v){
            $time= strtotime($userDetails[$i]->created_at);
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
        return response()->json($months)->header('Content-Type', 'text/json');
    }
}
