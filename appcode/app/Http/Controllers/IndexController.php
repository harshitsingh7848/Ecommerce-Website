<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ecommerce;
use App\Mapping;
use Config;
use Session;
use Illuminate\Support\Facades\Hash;
use Auth;
use Carbon\Carbon;
use DB;

class IndexController extends Controller
{
    
    /* 
     * function index
     * checks if Root Admin is present and Redirects to homepage 
     * It redirects normally to homepage  if root admin is present
     * Adds the root admin and redirects to homepage if root admin not present    
     */

     public function index()
    {
        /* result will hold the value 1 if root admin is present in database  */
        $result =   Mapping::where('role_id',1)->get();
        
        if($result->isEmpty()){
           
           $arr =   Config::get('userconfig.arr');

           $res = new ecommerce;
           $res->empname    =   $arr['name'];
           $res->emp_mobile    =   $arr['mobile'];
           $res->emp_email    =   $arr['email'];
           $res->emp_pass    =  Hash::make( $arr['pass']);

           $res->save();

           $getEmpId    = json_decode(ecommerce::where('emp_email',$res->emp_email)->get(['empid']));

           $mappingInsert   = new Mapping;
           $mappingInsert->emp_id   =   $getEmpId[0]->empid;
           $mappingInsert->role_id  =   $arr['role'];
           $mappingInsert->privilege_id  =   $arr['privilege']; 
           $mappingInsert->module_id  =   $arr['module']; 

           $mappingInsert->save();
           
        }
        $currentDate = Carbon::now();
        //$currentDateTime = $currentDate->toDateTimeString();

         $latestProductList = json_decode(DB::table('products')->where('created_date','>=',$currentDate->subMonth())->select('product_name')->get());
               
        $name=Session::get('username');
        return view('index',['name'=>$name,'latestProductList'=>$latestProductList]);   
    }
}