@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

@endsection
@section('content')
@if(!empty($vendorDetails))
<h2>Employee Details of {{$vendorDetails[0]->vendor_name}}</h2>
  <div>
    <table id="example" class="table table-striped table-advance table-hover">
      <thead>
        <tr>
          <th>Employee Name</th>
          <th> Employee Email  </th>
          <th> Employee Contact</th>
          <th> Employee Role </th>
        </tr>
      </thead>
      <tbody>
        @foreach($vendorDetails as $vendorDetail)
        <tr>
          <td> {{ $vendorDetail->empname }} </td>
          <td> {{$vendorDetail->emp_email }}</td>
          <td> {{$vendorDetail->emp_mobile }}</td>
          <td>{{$vendorDetail->vendor_role_name }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>    
  </div> 
@else
<h3> No employees to show</h3>
@endif
        
        <script src="assets/js/jquery-1.11.2.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     
      <script src="assets/js/dataTables.js">
         
      </script>

@endsection