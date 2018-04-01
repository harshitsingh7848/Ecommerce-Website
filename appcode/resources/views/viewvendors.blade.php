@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

@endsection
@section('content')
<h1>Vendor Details</h1>
  <div>
    <table id="example" class="table table-striped table-advance table-hover">
      <thead>
        <tr>
          <th><i class="fas fa-id-card"></i>Vendor Name</th>
          <th> Details</th>
        </tr>
      </thead>
      <tbody>
        @foreach($vendorDetails as $vendorDetail)
        <tr>
          <td> {{ $vendorDetail->vendor_name }} </td>
          <td> <a href="/Ecommerce/vendor-details?vendorId={{$vendorDetail->id}}">Details </a> </td>
        </tr>
        @endforeach
      </tbody>
    </table>    
  </div> 


        
        <script src="assets/js/jquery-1.11.2.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     
        <script src="assets/js/dataTables.js">
         
         </script>

@endsection