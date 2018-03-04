<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ecommerce;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    /* 
     * function doLogin
     * Validate the Credentials
     * Redirect to user's dashboard if valid 
     * Redirect to Login Page if invalid
     */
    public function doLogin()
    {
        $username=$_POST['username'];
        $password=$_POST['pass'];

        $res    =  json_decode(ecommerce::where('emp_email',$username)->get(['emp_email','emp_pass','empname','emp_type']));
        
        $userfromDb=$res[0]->emp_email;
        $passfromDb= $res[0]->emp_pass;
       
       Session::put('username',$res[0]->empname);
       
       if( Hash::check($password,$passfromDb) ){
            $params['name']=$res[0]->empname;
            if(empty($res[0]->emp_type) || $res[0]->emp_type==2){
                return view('index',$params);
            }
            else if($res[0]->emp_type==1 || $res[0]->emp_type==5){
                return redirect('/admin',$params);
            }
            else if($res[0]->emp_type==4){
                return redirect('/vendor',$params);
            }
            else if($res[0]->emp_type==3){
                return redirect('/employee',$params);
            }
           // $params['usertype']=$res[0]->emp_type;
           
       }
       else{
           echo "Wrong Username or Password";
           return view('login');
       }

       
       
    }

    /* 
     * function index
     * redirects to login page
     */

    public function index()
    {
        return view('login');
    }

    

    
}
