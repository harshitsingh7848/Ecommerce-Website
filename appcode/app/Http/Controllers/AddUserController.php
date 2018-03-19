<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ecommerce;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;

class AddUserController extends Controller
{
  /* 
   * function addUserToDB
   * It adds the user's details to Database and Redirects them to Index Page
   */

  public function addUserToDB()
  {
      $email=DB::select('select emp_email from user_details where emp_email ="'. $_POST['email'].'"');
      $mobile=DB::select('select emp_mobile from user_details where emp_mobile ="'. $_POST['mobile'].'"');
        $errors=[];
        if(!empty($email) ){
          $errors['email']="Duplicate Email";
          
        }
        if(!empty($mobile)){
          
          $errors['mobile']="Duplicate Mobile Number";
          
        }
         return redirect()->back()
            ->withErrors($errors); 
        
      
       $res = new ecommerce;
      $res->empname    =   $_POST['name'];
      $res->emp_mobile    =   $_POST['mobile'];
      $res->emp_email    =   $_POST['email'];
      $res->emp_pass    =  Hash::make( $_POST['password']);
      $res->save();

      

      if(!empty(Session::get('username'))){
          return redirect('/admin');
      }

      Session::put('name', $_POST['name']); 
     $userId= DB::select('select id from user_details where emp_email ="'.$res->emp_email .'"');
      
      DB::select('insert into user_privilege_module_role (emp_id,module_id,privilege_id,role_id)
      values("'.$userId.'","1","3","3"),("'.$userId.'","2","5","3"),("'.$userId.'","5","5","3")');

      return redirect('/');      
        
  }   
}
