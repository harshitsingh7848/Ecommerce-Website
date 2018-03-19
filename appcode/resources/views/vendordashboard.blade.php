@extends('layouts.app')
		
@section('title','Admin Dashboard')

    @section('head')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/vertical-menu.css">
	@endsection

    
	
    @section('body')
    


            

    
    

        
        <div class="vertical-menu">
  <a href="#" class="active">Dashboard</a>
  <a href="#"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Orders</a>
  <a href="#"><i class="fas fa-warehouse"></i> Products</a>
  <a href="#"><i class="fas fa-money-bill-alt"></i> Earnings</a>
  <a href="#"> <i class="fas fa-edit"></i> Add Products</a>
  <a href="#"> <i class="fas fa-user"></i> Profile</a>
  <a href="#"> <i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- <script>
        $(document).ready(function(){
           $('#new-user').click(function(){
            $.ajax({
          url:"newUsers",
          type:"get",
          data:{'concatemailusertype':emailusertype},
          success: function (response) {
           //$('.btn  btn-xs').show();
           $('#tableusers').html(response);
        },
        })   
           })  ;   
        });
    </script> -->

    
	@endsection
