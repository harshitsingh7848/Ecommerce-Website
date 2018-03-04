<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ecommerce;
use Config;
use Session;
use Illuminate\Support\Facades\Hash;
use Auth;

class IndexController extends Controller
{
    
    /* 
     * function checkAdmin
     * checks if Root Admin is present
     * It keeps on doing normal processing if root admin is present
     * Adds the root admin if root admin not present    
     */

    public function checkAdmin()
    {
        $result =   ecommerce::where('emp_type',5)->get();
        
        if($result->isEmpty()){
           
           $arr =   Config::get('userconfig.arr');

           $res = new ecommerce;
           $res->empname    =   $arr['name'];
           $res->emp_mobile    =   $arr['mobile'];
           $res->emp_email    =   $arr['email'];
           $res->emp_pass    =  Hash::make( $arr['pass']);
           $res->emp_type   =   $arr['type'];   

           $res->save();
           
        }
    }

    /*
     * function index
     * Redirects to homepage 
     */

    public function index()
    {
        return view('index');
        
    }

    

}