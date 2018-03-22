<?php

namespace App\Http\Controllers;

use App\ecommerce;
use App\Mapping;
use App\dropdownbind;
use Illuminate\Http\Request;
use DB;

class PrivilegesController extends Controller
{
    /* 
     * function index
     * Redirects to userlist page
     */

    public function index()
    {
               
        $res    = DB::table('user_details')
        ->leftjoin('user_privilege_module_role', 'user_details.empid', '=', 'user_privilege_module_role.emp_id')
        ->leftjoin('roles', 'user_privilege_module_role.role_id', '=', 'roles.id')
        ->wherenull('user_privilege_module_role.role_id')
        ->get(); 
        
        $usertype = dropdownbind::where('id','<>','3')->get(['role_name']);
        $vendors = DB::select('select * from vendor_names');
        
        $modules = DB::table('modules')->get();

        //print_r($usertype);
        return view('userlist',['name'=>$res,'dropdown'=>$usertype,'modules'=>$modules,
        'vendors'=>$vendors]);
    }

    /* 
     * function addPrivileges
     * It gives privileges to the users
     */
    public function addPrivileges()
    {   $vendorId="";
        if(isset($_POST['vendorName'])){
            $vendorName=$_POST['vendorName'];
            $vendor=DB::select('select id from vendor_names where vendor_name="'.$vendorName.'"');
            $vendorId=$vendor[0]->id;
        }  

        $checkId = trim($_POST['checkId']);
        
         $privilege=explode(" ",$checkId); 
        
         $concatUserRole=$_POST['concatUserRole'];
           $result= explode("-",$concatUserRole);
          $role=$result[0];
          $roles = DB::select('select id from roles where role_name = "'.$role.'"');

          $roleId=$roles[0]->id;
          

          $empId=$result[1];
          $moduleId=$_POST['moduleId']; 

          $str="";

           foreach($privilege as $p=>$v)
           {     
            $str.='("'.$empId.'", "'.$moduleId.'", "'.$privilege[$p].'", "'.$roleId.'") ,';
           }
           
            DB::select('insert into user_privilege_module_role (emp_id,module_id,privilege_id,role_id) 
          values '.rtrim( $str, ' , '));
          if(!empty($vendorId)){
          DB::select('insert into map_vendor_user (vendor_id,user_id) values("'.$vendorId.'"
          ,"'.$empId.'") ');
          }
          echo 'Privilege Saved Successfully';
         
    }
    /* 
     * function addVendor
     * It redirects to a view where we can add a new vendor
     */
    public function addVendor()
    {
        return view('addvendor');
    }

    /* 
     * function addVendorToDB
     * It adds vendor details to database and returns to vendor view   
     */
    public function addVendorToDB(Request $request)
    {
        $vendorName=$request->input('name');
         DB::select('insert into vendor_names (vendor_name) values("'.$vendorName.'")'); 
        echo "vendor successfully added";
    }

    /* 
     * function listOfVendors
     * It shows the list of all the Vendors present
     */
    public function listOfVendors()
    {
        return view('viewvendors');
    }

}
