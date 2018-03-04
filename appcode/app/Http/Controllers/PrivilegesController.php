<?php

namespace App\Http\Controllers;

use App\ecommerce;
use App\dropdownbind;
use Illuminate\Http\Request;

class PrivilegesController extends Controller
{
    /* 
     * function index
     * Redirects to userlist page
     */

    public function index()
    {
        
        $usertype  = dropdownbind::get(['user_type']);
        
        $res    =  ecommerce::whereNull('emp_type')->get(['emp_email','empname','empid']);
    
        return view('userlist',['name'=>$res,'dropdown'=>$usertype]);
    }
}
