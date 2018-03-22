@extends('layouts.app')

@section('content')
<h1>Vendor Details</h1>
  <div>
    <table id="example" class="table table-striped table-advance table-hover">
      <thead>
        <tr>
          <th><i class="fas fa-id-card"></i>Vendor Name</th>
          <th><i class="fa fa-user"></i>Vendor Id</th>
          <th><i class="fas fa-envelope"></i>Employee Name</th>   
        </tr>
      </thead>
      <tbody>
        @foreach($name as $names)
        <tr>
          <td> {{ $names->empid }} </td>
          <td> {{ $names->empname }} </td>
          <td> {{ $names->emp_email }} </td>
          <td>   
        </tr>
        @endforeach
      </tbody>
    </table>    
  </div> 


        
        <script src="assets/js/jquery-1.11.2.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     


@endsection