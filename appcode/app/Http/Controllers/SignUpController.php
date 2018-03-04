<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class SignUpController extends Controller
{
    /* 
     * function index
     * Redirects to the Sign Up Page for Registration 
     */

    public function signup()
    {
         return  view('signup');
    }
}
