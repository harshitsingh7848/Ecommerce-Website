<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    
    /* 
     * function adminDashboard
     * It redirects us to the Admin's Dashboard   
    */
    function adminDashboard()
    {
        $name=Session::get('username');
        return view('admindashboard',['name'=>$name]);
    }

    /* 
     * function vendorDashboard
     * it redirects us to the Vendor's Dashboard
    */
    function vendorDashboard()
    {
        return view('vendordashboard');
    }
}
