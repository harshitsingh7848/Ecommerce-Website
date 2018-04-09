<?php

namespace App\Http\Controllers;

use App\ecommerce;
use App\Mapping;
use App\dropdownbind;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class PrivilegesController extends Controller
{
    
    /* 
     * function myAccount 
     * It displays details of the Users
     */
    public function myAccount()
    {
        $roleId= Session::get('userRole');
        $userId=Session::get('userid');
        $name=Session::get('username');
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"');
        $accountDetails=DB::select('select user_details.empname,user_details.emp_email,user_details.emp_mobile,
        store_address.address,store_address.city,store_address.Pincode,
        store_address.state,store_address.Country from user_details left join store_address on
        user_details.empid=store_address.user_id where user_details.empid="'.$userId.'"
        and (store_address.address_type="1" or isNull(store_address.address))');
        /* echo '<pre/>';
        print_r($accountDetails);exit;  */   
        return view('myaccount',['role'=>$roleId,'privilegeDetails'=>$privilegeDetails,
        'name'=>$name,'accountDetails'=>$accountDetails]);
    }

    /* 
     * function updateAccount
     * It updates users account details
     */
    public function updateAccount(Request $request)
    {
        $userId=Session::get('userid');
        $name=$request->input('name');
        $address=$request->input('address');
        $city=$request->input('city');
        $state=$request->input('state');
        $pincode=$request->input('pincode');
        $country=$request->input('Country');
        $email=$request->input('email');
        $mobile=$request->input('contact');
        
        DB::select('update user_details set empname="'.$name.'",emp_email="'.$email.'",
        emp_mobile="'.$mobile.'" where empid="'.$userId.'" ');
        $billAdd=DB::select('select * from store_address where user_id="'.$userId.'"');
        
        if(empty($billAdd)){
            DB::select('insert into store_address (address,address_type,user_id,Pincode,city,state,mobile_number,name,show_backend,
            Country) values("'.$address.'","1","'.$userId.'","'.$pincode.'",
            "'.$city.'","'.$state.'","'.$mobile.'","'.$name.'","1","'.$country.'")');
        }
        else{
            DB::select('update store_address set address="'.$address.'",city="'.$city.'",
        state="'.$state.'",Pincode="'.$pincode.'",Country="'.$country.'" where user_id="'.$userId.'"  and store_address.address_type="1"');
        }
        

        /* echo "Account Details Updated"; */
        Session::flash('message', "Account Details Updated");
        return Redirect::back();
        /* return redirect('/myaccount'); */
    }
    
    /* 
     * function index
     * Redirects to userlist page
     */

    public function index()
    {
         $userRole = Session::get('userRole');
        $userId=Session::get('userid');
        $name=Session::get('username');
        
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"');
        if($userRole==1 || $userRole==2)
        { 
        /* $res    = DB::table('user_details')
        ->leftjoin('user_privilege_module_role', 'user_details.empid', '=', 'user_privilege_module_role.emp_id')
        ->leftjoin('roles', 'user_privilege_module_role.role_id', '=', 'roles.id')
        ->wherenull('user_privilege_module_role.role_id')
        ->get();  */
        $res= DB::select('select DISTINCT (user_details.empid),user_details.empname,user_details.emp_mobile,vendor_names.vendor_name,
            vendor_roles.vendor_role_name,user_details.emp_email,roles.role_name,vendor_roles.vendor_role_name from user_details 
            left join map_vendor_user on user_details.empid=map_vendor_user.user_id
            left join vendor_names on vendor_names.id=map_vendor_user.vendor_id
            left join user_privilege_module_role on user_details.empid = user_privilege_module_role.emp_id 
            left join roles on roles.id=user_privilege_module_role.role_id
            left join vendor_roles on user_privilege_module_role.vendor_role_id= vendor_roles.id 
            where (isNull(user_privilege_module_role.role_id) || roles.id<>3) && (user_details.empid<>
            "'.$userId.'") ');
        }
        else{
            $vendor=DB::select('select vendor_names.id,vendor_names.vendor_name from vendor_names join map_vendor_user on vendor_names.id=
            map_vendor_user.vendor_id left join user_details on map_vendor_user.user_id=user_details.empid
            where user_details.empid="'.$userId.'"');
            $vendorId= $vendor[0]->id;
           $res= DB::select('select DISTINCT (user_details.empid),user_details.empname,user_details.emp_mobile,vendor_names.vendor_name,
            vendor_roles.vendor_role_name,user_details.emp_email,roles.role_name,vendor_roles.vendor_role_name from user_details 
            left join map_vendor_user on user_details.empid=map_vendor_user.user_id
            left join vendor_names on vendor_names.id=map_vendor_user.vendor_id
            left join user_privilege_module_role on user_details.empid = user_privilege_module_role.emp_id 
            left join roles on roles.id=user_privilege_module_role.role_id
            left join vendor_roles on user_privilege_module_role.vendor_role_id= vendor_roles.id 
            where vendor_names.id="'.$vendorId.'" and user_details.empid<>"'.$userId.'"');
        
        }
        /* echo '<pre/>';
        print_r($res);exit;
     */
        
        $usertype = DB::select('select role_name from roles where id<>3');
        
        $vendors = DB::select('select * from vendor_names');
        
        $modules = DB::table('modules')->get();
        $vendorRoles=DB::select('select * from vendor_roles');

        
        return view('userlist',['result'=>$res,'dropdown'=>$usertype,'modules'=>$modules,
        'vendors'=>$vendors,'vendorRoles'=>$vendorRoles,'role'=>$userRole,'privilegeDetails'=>$privilegeDetails
        ,'name'=>$name]);
    }

    /* 
     * function addPrivileges
     * It gives privileges to the users
     */
    public function addPrivileges(Request $request)
    {   $vendorId="";
        $vendorRoleId="";
         if(isset($_POST['vendorName'])){
             //echo 'hi';
            $vendorName=$_POST['vendorName'];
            $vendor=DB::select('select id from vendor_names where vendor_name="'.$vendorName.'"');
            $vendorId=$vendor[0]->id;
        }   
        $checkId = trim($_POST['checkId']);
         $privilege=explode(" ",$checkId); 
         $concatUserRole=$_POST['concatUserRole'];
           $result= explode("-",$concatUserRole);
            
          $role=$result[0];
          //echo $role;
          $roles = DB::select('select id from roles where role_name = "'.$role.'"');

          $roleId=$roles[0]->id;
         // echo $roleId;
           if(isset($_POST['vendorRole'])){
          $vendorRole= $_POST['vendorRole'];
          $vendorRoles=DB::select('select id from vendor_roles where vendor_role_name
          ="'.$vendorRole.'"');
            $vendorRoleId=$vendorRoles[0]->id;
          } 
          
          
          $empId=$result[1];
          $moduleId=$_POST['moduleId']; 
           
          $str="";
             if($roleId==4 && !empty($vendorRoleId))
            {
                foreach($privilege as $p=>$v)
           {     
            $str.='("'.$empId.'", "'.$moduleId.'", "'.$privilege[$p].'", "'.$roleId.'","'.$vendorRoleId.'") ,';
           }
           
           
            DB::select('insert into user_privilege_module_role (emp_id,module_id,privilege_id,role_id,
            vendor_role_id) 
          values '.rtrim( $str, ' , '));
            }
            
            else
            {
           foreach($privilege as $p=>$v)
           {     
            $str.='("'.$empId.'", "'.$moduleId.'", "'.$privilege[$p].'", "'.$roleId.'") ,';
           }
           
            DB::select('insert into user_privilege_module_role (emp_id,module_id,privilege_id,role_id) 
          values '.rtrim( $str, ' , '));
            } 

          if(!empty($vendorId)){
             $userId= DB::select('select user_id from map_vendor_user where user_id="'.$empId.'"');
          if(empty($userId)){
          DB::select('insert into map_vendor_user (vendor_id,user_id) values("'.$vendorId.'"
          ,"'.$empId.'") ');
          }
          } 
         echo 'Privilege Saved Successfully';
         
    }
    /* 
     * function addVendor
     * It redirects to a view where we can add a new vendor
     */
    public function addVendor()
    {
         $userRole = Session::get('userRole');
        $userId=Session::get('userid');
        $name=Session::get('username');
        
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"'); 
        return view('addvendor',['role'=>$userRole,'privilegeDetails'
        =>$privilegeDetails,'name'=>$name]);
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
        $userRole = Session::get('userRole');
        $userId=Session::get('userid');
        $name=Session::get('username');
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"'); 
        $vendorDetails=DB::select('select distinct (vendor_names.id),vendor_names.vendor_name
         from  vendor_names 
');

        return view('viewvendors',['vendorDetails'=>$vendorDetails,'role'=>$userRole,'privilegeDetails'
        =>$privilegeDetails,'name'=>$name]);
    }
    /* 
     * function userList
     * It gives the list of the users on our Ecommerce Website
     */
    public function userList()
    {
        $userRole = Session::get('userRole');
        $userId=Session::get('userid');
        $userList="";
        $name=Session::get('username');
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"'); 
        if($userRole===1 || $userRole===2)
        {
            $userList=DB::select('select DISTINCT(user_details.empid), user_details.empname,user_details.emp_mobile,
            user_details.emp_email,store_address.address,store_address.Pincode,
            store_address.city,store_address.state from user_details left join 
            store_address on user_details.empid=store_address.user_id
            left join user_privilege_module_role on user_details.empid =user_privilege_module_role.emp_id
            left join roles on user_privilege_module_role.role_id=roles.id where roles.id="3" and
             (store_address.address_type=1 ||isnull( store_address.address_type))');
             
        }
        else{
             $productId=DB::select('select id from products where added_by="'.$userId.'"');
            $orderId="";
            if(!empty($productId)){
            $orderId=DB::select('select order_id from map_product_order where product_id=
            "'.$productId[0]->id.'"');
            }
            if(!empty($orderId)){
            for($i=0;$i<sizeof($orderId);$i++){
            $empId=DB::select('select user_id from map_user_order where order_id ="'.$orderId
            [$i]->order_id.'"');
            }
            
            
            $userList=DB::select('select DISTINCT(user_details.empid),user_details.empname,user_details.emp_email,
            user_details.emp_mobile
            ,store_address.address,store_address.Pincode,
            store_address.city,store_address.state from user_details left join 
            store_address on user_details.empid=store_address.user_id
            left join user_privilege_module_role on user_details.empid =user_privilege_module_role.emp_id
            left join roles on user_privilege_module_role.role_id=roles.id where roles.id="3" and
             (store_address.address_type=1 || isnull( store_address.address_type))
             and empid="'.$empId[0]->user_id.'"
             ');
            }

        }
        return view('users',['userList'=>$userList,'role'=>$userRole,'privilegeDetails'=>$privilegeDetails
        ,'name'=>$name]);
    }

    /* 
     * function vendorDetails
     * This function shows the different details corresponding the vendor
     */
    public function vendorDetails(Request $request)
    {
        $userRole = Session::get('userRole');
        $userId=Session::get('userid');
        $userList="";
        $name=Session::get('username');
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"'); 
        $vendorId=$request->input('vendorId');
         $vendorDetails=DB::select('select distinct (user_details.empid),(user_details.empname),user_details.emp_mobile,
         user_details.emp_email,vendor_names.vendor_name,
        vendor_roles.vendor_role_name from user_details
        left join user_privilege_module_role on user_details.empid=user_privilege_module_role.emp_id
        left join roles on roles.id=user_privilege_module_role.role_id
        left join map_vendor_user on user_details.empid=map_vendor_user.user_id
        left join vendor_names on vendor_names.id=map_vendor_user.vendor_id
        left join vendor_roles on vendor_roles.id=user_privilege_module_role.vendor_role_id
        where vendor_names.id="'.$vendorId.'" ');

         /* echo '<pre/>';
        print_r($vendorDetails);exit;  */
        return view('vendordetails',['vendorDetails'=>$vendorDetails,'name'=>$name,'role'=>
        $userRole,'privilegeDetails'=>$privilegeDetails]);
    }

    /* 
     * function checkVendorAdmin
     * It checks if the particular vendor has an admin or not
     */
    public function checkVendorAdmin(Request $request)
    {
        $vendorName=$request->input('vendorName');
       
         $response=0; 
         $vendorId= DB::select('select id from vendor_names where vendor_name="'.$vendorName.'"');
        
        
         $userId=DB::select('select user_id from map_vendor_user where vendor_id="'.$vendorId[0]->id.'"'); 

        
            
            
        
          for($i=0;$i<sizeof($userId);$i++){
             $vendorAdmin=DB::select('select user_privilege_module_role.vendor_role_id from  
        user_privilege_module_role left join vendor_roles on 
        user_privilege_module_role.vendor_role_id=vendor_roles.id 
         where (user_privilege_module_role.emp_id="'.$userId[$i]->user_id.'" and user_privilege_module_role.vendor_role_id=1)');
            if(!empty($vendorAdmin)){
                $response=1;
            }
        } 
        echo $response; 
       
        
    }
    /* 
     * function newUsers
     * It adds newUsers to Database
     */
    public function newUsers()
    {
        $name=Session::get('username');
        $userId=Session::get('userid');
        $selectId=Session::get('selectId');
        $role=Session::get('userRole');
        $privilegeDetails=DB::select('select * from user_privilege_module_role where emp_id ="'.$userId.'"'); 
        return view('newUsers',['name'=>$name,'selectId'=>$selectId,'role'=>$role,
        'privilegeDetails'=>$privilegeDetails]);
    }

}
