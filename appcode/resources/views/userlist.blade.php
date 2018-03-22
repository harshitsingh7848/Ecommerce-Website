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
              <div id="vendorNames">
                <select class="vname">
              @foreach($vendors as $vendor)
              <option > {{ $vendor->vendor_name }}</option>
              @endforeach
            </select> 
            <input type="hidden" id="inputVendor">
                <div>
                  <button id="previousbtn">&laquo; Previous</button>
                  <button class="float-right" id="nextbtn">Next &raquo;</button>
                </div>
                </div>
                <div id="myTable">
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
<script>

  $(document).ready(function(){
        $('#example').DataTable();
      var vendorName="";
        $('#vendor').prop('disabled',true);
        $('#vendorNames').hide();
        $('#myTable').hide();
        $('#privilege').prop('disabled',true);
     $(".usertype").change(function(){
      var concat = $(this).val();
      
       $(".modal-body #concatemailusertype").val( concat );
        $("#myModal").modal();  
    });  
    $('#initial').click(function(){
      $('#label').show();
    });
  });

    $(document).ready(function(){
      $('#check').click(function() {
       var result= $('#concatemailusertype').val();
        var checkArray=result.split("-");
      if(checkArray[0]=="Vendor"){
        $('#vendor').prop('disabled',false);
        
      } 
      else{
        $('#privilege').prop('disabled',false);
        $('#vendorNames').hide();
        $('#myTable').show();
      }
});
    $('#nextbtn').click(function(){
      
      $(".vname").change(function(){
        
         vendorName = $(this).val();
         alert(vendorName);
        $('#inputVendor').val(vendorName);
         $('#privilege').prop('disabled',false);
        $('#vendorNames').hide();
        $('#myTable').show();
      });
    });
$('#vendor').click(function(){
          $('#label').hide();
          $('#vendorNames').show();
        });


    });
    $(document).ready(function(){
 
$('.btn').click(function(){
  var buttonId=$(this).attr('id');
  var parentId=$(this).closest('td').parent().attr('id');
  
  var checked = '';
 $("#"+parentId+" input[name='checkbox[]']:checked").each(function ()
{
    checked += parseInt($(this).val());
    checked +=' ';
    
});

  var moduleId = buttonId;
  
  var concatUserRole =$('#concatemailusertype').val();
  $.ajax({
    url:'/Ecommerce/add-privileges',
    method:'POST',
    data:{'checkId':checked,'concatUserRole':concatUserRole,'moduleId':moduleId,'vendorName':vendorName},
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