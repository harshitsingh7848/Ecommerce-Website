<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ecommerce;
use Illuminate\Support\Facades\Hash;
use Session;

class AddUserController extends Controller
{
  /* 
   * function addUserToDB
   * It adds the user's details to Database and Redirects them to Index Page
   */

  public function addUserToDB()
  {

       $res = new ecommerce;
      $res->empname    =   $_POST['name'];
      $res->emp_mobile    =   $_POST['mobile'];
      $res->emp_email    =   $_POST['email'];
      $res->emp_pass    =  Hash::make( $_POST['password']);
      $res->save();

      Session::put('name', $_POST['name']); 
      
      return redirect('/');      
  }   
}
