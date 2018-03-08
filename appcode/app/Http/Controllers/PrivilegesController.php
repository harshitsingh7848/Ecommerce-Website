<?php

namespace App\Http\Controllers;

use App\ecommerce;
use App\Mapping;
use Illuminate\Http\Request;

class PrivilegesController extends Controller
{
    /* 
     * function index
     * Redirects to userlist page
     */

    public function index()
    {
        
        
        
        $res    =  Mapping::whereNull('role_id')->get(['emp_id']);

        print_r($res);exit;
    
        return view('userlist',['name'=>$res,'dropdown'=>$usertype]);
    }
}
