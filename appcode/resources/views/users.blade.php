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
  <h1> User Details</h1>
  <div>
    <table id="example" class="table table-striped table-advance table-hover">
      <thead>
        <tr>
          <th><i class="fas fa-id-card"></i>User Name</th>
          <th><i class="fa fa-user"></i>User Email</th>
          <th><i class="fas fa-envelope"></i> Contact</th>
          <th><i class="fas fa-envelope"></i> Billing Address</th>
          
          
        </tr>
      </thead>
      <tbody>
      @if(!empty($userList))
        @foreach($userList as $userLists)
        <tr>
          <td> {{ $userLists->empname }} </td>
          <td> {{ $userLists->emp_email }} </td>
          <td> {{ $userLists->emp_mobile }} </td>
          
          <td> 
          @if(!empty($userLists->address))
          <address>
    					{{$userLists->address}},<br>
    					{{$userLists->city}},{{$userLists->state}},
              {{$userLists->Pincode}}
    				</address> 
                    @endif
         </td>
         
        </tr>
        @endforeach
        @endif
      </tbody>
    </table>    
  </div> 

  

    
   
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      

   <script src="assets/js/dataTables.js">
        
    </script>


@endsection