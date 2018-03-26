<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
class DashboardController extends Controller
{
    
    /* 
     * function adminDashboard
     * It redirects us to the Admin's Dashboard   
    */
    function adminDashboard()
    {
        $name=Session::get('username');
        $role=Session::get('userRole');
        $userId=Session::get('userid');
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"');   
        /* echo '<pre/>';
        print_r($privilegeDetails);exit; */
         return view('admindashboard',['name'=>$name,'role'=>$role,'privilegeDetails'=>
         $privilegeDetails]); 
    }

    
    
}
