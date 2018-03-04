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

@extends('admindashboard')

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
          <th><i class=" fa fa-gears"></i>Permissions</th>
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
              <option value="{{ $d->user_type . "-" . $names->emp_email  }}"> {{ $d->user_type }}</option>
              @endforeach
            </select> 
          </td>
          <td >
            <button class="btn  btn-xs"><i class="fas fa-eye"></i></button>
            <button class="btn  btn-xs"><i class="fas fa-edit"></i></button>
            <button class="btn  btn-xs"><i class="far fa-trash-alt"></i></button>
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

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script>

  $(document).ready(function(){
    $(".usertype").change(function(){
      var concat = $(this).val();
       $(".modal-body #concatemailusertype").val( concat );
        $("#myModal").modal();  
    });
  });

    $(document).ready(function(){
      $('#check').click(function() {
        
         var emailusertype = $('#concatemailusertype').val();
          $.ajax({
          url:"addusertype",
          type:"get",
          data:{'concatemailusertype':emailusertype},
          success: function (response) {
           $('.btn  btn-xs').show();
           //alert(response);
        },
        })   
});
    });

   $(document).ready(function(){
     $('#nocheck').click(function(){
       $("#myModal").modal('toggle');
     })
   });
</script>

@endsection