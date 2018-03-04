<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    /* 
     * function adminDashboard
     * It redirects us to the Admin's Dashboard   
    */
    function adminDashboard()
    {
        return view('admindashboard');
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
