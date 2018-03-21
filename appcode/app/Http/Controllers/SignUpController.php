<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use Session;

class SignUpController extends Controller
{
    /* 
     * function index
     * Redirects to the Sign Up Page for Registration 
     */

    public function signup()
    {
        $name=Session::get('username');
        $selectId=Session::get('selectId');
        echo $selectId;exit;
      
         return  view('signup',['name'=>$name,'selectId'=>$selectId]);
    }
}
