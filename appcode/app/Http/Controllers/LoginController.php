<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ecommerce;
use App\Mapping;
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

        $res    =  json_decode(ecommerce::where('emp_email',$username)->get(['emp_email','emp_pass','empname','empid']));
        
        $user_role  = json_decode(Mapping::where('emp_id',$res[0]->empid)->get(['role_id']));

        $userfromDb=$res[0]->emp_email;
        $passfromDb= $res[0]->emp_pass;

       Session::put('username',$res[0]->empname);
       Session::put('userid',$res[0]->empid);
       if(!empty($user_role))
       Session::put('userRole',$user_role[0]->role_id);
      
       
       if( Hash::check($password,$passfromDb) ){
            //$params['name']=$res[0]->empname;
            if( $user_role[0]->role_id==3){
                return redirect('/');
            }
            else if($user_role[0]->role_id==1 || $user_role[0]->role_id==2){
                return redirect('/admin');
            }
            else if($user_role[0]->role_id==4){
                return redirect('/vendor');
            }
            else if($user_role->role_id==5){
                return redirect('/employee');
            }
        
           
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
