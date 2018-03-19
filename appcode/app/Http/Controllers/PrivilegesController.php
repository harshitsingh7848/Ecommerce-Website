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
        
        $usertype = dropdownbind::get(['role_name']);
        $modules = DB::table('modules')->get();

        //print_r($usertype);
        return view('userlist',['name'=>$res,'dropdown'=>$usertype,'modules'=>$modules]);
    }

    /* 
     * function addPrivileges
     * It gives privileges to the users
     */
    public function addPrivileges()
    {
        $createId = $_POST['createId']; 
        $editId = $_POST['editId'];
        $viewId = $_POST['viewId'];
        $deleteId = $_POST['deleteId'];
        $concatUserRole=$_POST['concatUserRole'];
           $result= explode("-",$concatUserRole);
          $role=$result[0];
          $empId=$result[1];
          $moduleId=$_POST['moduleId'];

          /* DB::select('insert into user_privilege_module_role (emp_id,module_id,privilege_id,role_id) 
          values("'.$empId.'","'.$moduleId.'","'.$privilegeId.'","'.$role.'")'); */
        
        echo $editId; 
    }
}
