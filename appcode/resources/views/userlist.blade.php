<!-- <!doctype html>
<html lang="en">
<head> -->
<!-- Required meta tags -->
<!-- <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<!-- <title>Employee Details</title> -->

<!-- </head>
<body> -->

@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="assets/css/userlist.css">
@endsection

@section('content')
  <h1> Employee Details</h1>
  <div>
    <table id="example" class="table table-striped table-advance table-hover">
      <thead>
        <tr>
          <th><i class="fas fa-id-card"></i> Name</th>
          <th><i class="fa fa-envelope"></i> Email</th>
          <th><i class="fas fa-mobile"></i> Contact</th>
          <th><i class=" fa fa-edit"></i>Role</th>
          
          
        </tr>
      </thead>
      <tbody>
        @foreach($result as $results)
        <tr>
          <td> {{ $results->empname }} </td>
          <td> {{ $results->emp_email }} </td>
          <td> {{ $results->emp_mobile }} </td>
          <td>
          @if(empty($results->role_name))
            <select class="usertype">
            <option>Employee Role </option>
              @foreach($dropdown as $d)
              <option value="{{ $d->role_name . "-" . $results->empid  }}"> {{ $d->role_name }}</option>
              @endforeach
            </select>
            @else
            @if($results->role_name==="Vendor")
            {{ $results->vendor_role_name }}
            @else
             {{ $results->role_name }}
             @endif
            @endif
          </td>
          
        </tr>
        @endforeach
      </tbody>
    </table>    
  </div> 

  

    <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body">
          <div id="wrapper">
            <div class="tab">
              <button class="tablinks" id="initial" >Assign Role</button>
              <button class="tablinks" id="vendor" >Vendors Name</button>
              <button class="tablinks" id="privilege">Privileges</button>
            </div>
            <div id="label">
            <label for="yes_no_radio">Do you want to update Employee Role ?</label>
            <input type="hidden" id="concatemailusertype" />
             <p>
              <input type="button" id="check" value="Yes" name="button"/>
              
                <input type="button" id="nocheck" value="No" name="yes_no" />
                
              </p>
              </div>
              <div id="divbtn">
              <button class="float-right" id="nextbtn2">Next &raquo;</button>
              </div>
              <div id="vendorNames">
              
                <select class="vname">
                <option>Vendor Names</option>
              @foreach($vendors as $vendor)
              <option > {{ $vendor->vendor_name }}</option>
              @endforeach
            </select> 
            
            
            <select class="vrole">
            <option>User Roles</option>
            @foreach($vendorRoles as $vrole)
              <option > {{ $vrole->vendor_role_name }}</option>
              @endforeach
            </select> 
            </div>
            <div id="buttons">
            <input type="hidden" id="inputVendor">
                <div>
                  <button id="previousbtn">&laquo; Previous</button>
                  <button class="float-right" id="nextbtn">Next &raquo;</button>
                </div>
                </div>
                <div id="myTable">
                <button id="previousbtn2">&laquo; Previous</button>
                <table class="table table-striped table-advance table-hover">
      <thead>
        <tr> 
          <th><i class="fa fa-gears"></i>Modules
          <th><i class=" fa fa-gears"></i>Permissions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($modules as $module)
        <input type="hidden" id="moduleId" value="{{ $module->id }}">
        <tr id="row-{{ $module->id}}">
          <td> {{ $module->module_name }} </td>         
          <td >
            <label for="checkbox1">Create</label>
            <input type="checkbox" name="checkbox[]"id="{{ $module->id."_". "1" }}" value="1">
            <label for="checkbox2">Edit</label>
            <input type="checkbox" name="checkbox[]"id="{{$module->id."_". "2"}}" value="2">
            <label for="checkbox3">View</label>
            <input type="checkbox" name="checkbox[]"id="{{$module->id."_". "3"}}" value="3">
            <label for="checkbox4">Delete</label>
            <input type="checkbox" name="checkbox[]"id="{{$module->id."_". "4"}}" value="4">
            <label for="checkbox5">All</label>
            <input type="checkbox" name="checkbox[]"id="{{$module->id."_". "5"}}" value="5">
          </td>
          <td>
            <button type="button" class="btn" id="{{$module->id}}" name="btn" >Update</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>  
    </div> 
          </div>    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
    </div>

   
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/userlist.js"></script>


@endsection