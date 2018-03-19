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
@endsection

@section('content')
  <h1> New User Details</h1>
  <div>
    <table id="example" class="table table-striped table-advance table-hover">
      <thead>
        <tr>
          <th><i class="fas fa-id-card"></i> EmployeeId</th>
          <th><i class="fa fa-user"></i> Name</th>
          <th><i class="fas fa-envelope"></i> Email</th>
          <th><i class=" fa fa-edit"></i> UserType</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach($name as $names)
        <tr>
          <td> {{ $names->empid }} </td>
          <td> {{ $names->empname }} </td>
          <td> {{ $names->emp_email }} </td>
          <td>
            <select class="usertype">
              @foreach($dropdown as $d)
              <option value="{{ $d->role_name . "-" . $names->empid  }}"> {{ $d->role_name }}</option>
              @endforeach
            </select> 
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
        <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> -->
        <div class="modal-body">
          <div id="wrapper">
            <label for="yes_no_radio">Do you want to update Employee type ?</label>
            <input type="text" id="concatemailusertype" />
             <p>
              <input type="button" id="check" value="Yes" name="button"/>
              
                <input type="button" id="nocheck" value="No" name="yes_no" />
                
              </p>
          </div>    
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      </div>
    </div>

    <div id="myModal2" class="modal fade" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
          <div id="wrapper">
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
        <tr>
          <td> {{ $module->module_name }} </td>         
          <td>
            <label for="checkbox1">Create</label>
            <input type="checkbox" name="checkbox1"id="{{ $module->id }}">
            <label for="checkbox2">Edit</label>
            <input type="checkbox" name="checkbox2"id="{{$module->id."_". "2"}}">
            <label for="checkbox3">View</label>
            <input type="checkbox" name="checkbox3"id="{{$module->id."_". "3"}}">
            <label for="checkbox4">Delete</label>
            <input type="checkbox" name="checkbox4"id="{{$module->id."_". "4"}}">
            
          </td>
          <td>
            <button type="button" id="btn" name="btn" >Update</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>   
                
              
          </div>    
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
<script>

  $(document).ready(function(){
        $('#example').DataTable();
    $(".usertype").change(function(){
      var concat = $(this).val();
       $(".modal-body #concatemailusertype").val( concat );
        $("#myModal").modal();  
    });
  });

    $(document).ready(function(){
      $('#check').click(function() {
        $("#myModal2").modal();
         
});


    });
    $(document).ready(function(){
 
$('#btn').click(function(){
  var moduleId = $('#moduleId').val();
  var createId = +$('#{{ $module->id  }}').is( ':checked' );
  alert(createId);
  var viewId =+$('#{{$module->id . "_" . "3"}}').is( ':checked' );
  var editId =+$('#{{$module->id . "_" . "2"}}').is( ':checked' );
  var deleteId =+$('#{{$module->id . "_" . "4"}}').is( ':checked' );
  var concatUserRole =$('#concatemailusertype').val();
  $.ajax({
    url:'/Ecommerce/add-privileges',
    method:'POST',
    data:{'createId':createId,'viewId':viewId,'editId':editId,
      'deleteId':deleteId,'concatUserRole':concatUserRole,'moduleId':moduleId},
    success:function(response){
        alert(response);
    },
  });
  
  
});
    });

   $(document).ready(function(){
     $('#nocheck').click(function(){
       $("#myModal").modal('toggle');
     })
   });
</script>

@endsection