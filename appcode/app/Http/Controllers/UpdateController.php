<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ecommerce;
use App\dropdownbind;

class UpdateController extends Controller
{
    /* 
     * function update
     * It updates the user type of the users in Database
     */
    public function update()
    {
            $concatEmailUserType = $_GET['concatemailusertype'];  
            $result = explode('-',$concatEmailUserType);
            $usertype=$result[0];
            $email=$result[1];

             $res    =  dropdownbind::where('user_type',$usertype)->get(['id']);

             print_r($res);
             
           
            

    }
}
