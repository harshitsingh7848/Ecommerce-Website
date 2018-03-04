@extends('layouts.app')
		
@section('title','Admin Dashboard')

    @section('head')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
        <link href="assets/css/vertical-menu.css" rel="stylesheet">
	@endsection

    
	
    @section('body')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="new-user" href="{{ url('newUsers') }}">New Users</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" id="new-user" href="#">Add Product</a>
                </li>

                @if (!empty($name))
                          <!--  Hello {{  $name }} -->
                             <li class="nav-item"><a class="nav-link"  href="{{ url('/') }}"> Logout</a></li>      
                           @endif
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div id="tableusers">
            @yield('content')
    </div>

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
