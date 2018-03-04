<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Closure;

use Session;
class LogoutController extends Controller
{
    

    
    /* 
     * function index
     *  Redirects to the Dashboard
     */

    public function index()
    {
       return redirect('/');
    }
}
