<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- font awesome icons CSS -->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <!-- morris charts css -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">    

    <!-- Custom styles for this template -->
    <link href="assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    @section('head')

    @show
      
    
  </head>
  
  <body>


     <div id="wrapper" class="toggled">

<!-- Sidebar -->
<div id="sidebar-wrapper" >
     <ul class="sidebar-nav" id="tree1">
        <li>
            <a href="{{url('/')}}">Gadget Maniac</a>
        </li>

        <li>
            <a href="{{url('view-products') }}">Products</a>
        </li>

        <li>
            <a href="{{url('view-orders')}}">Orders</a>
        </li>
        
        <li>
            <a href="#">Users</a>
                
            
            <ul>
            
           @if($role===1 || (!empty($privilegeDetails) && $privilegeDetails[0]->vendor_role_id===1) )
           <li><a href="new-users">Add New Users</a></li>
           
           
           
           <li><a href="employees">List of Employees</a></li>
           @endif
           <li><a href="users">List of Users</a></li>
          
       </ul>
       
        </li>
        @if($role===1)
        <li>
            <a href="#">Vendors</a>
            
            <ul>
                <li><a href="vendor">Add Vendors</a> </li>
                <li><a href="list-of-vendors">View Vendors</a> </li>      
            </ul>    
        </li>    
        @endif
        @if($role===1 || $role===2 )
        <li>
            <a href="#">Roles</a>
        </li> 
        
        @endif
    </ul>
</div>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" id="menu-toggle"> <i class="fas fa-bars"></i> Gadget Maniac</a>
                
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('admin')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                 
              
                @if (!empty($name))
                    
                    <li><a class="nav-link" href="{{ url('/logout') }}">Logout<span class="sr-only">(current)</span></a></li>      
                @endif
            </ul>
            <!-- form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>
    @section('content')

    @show
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
  </body>


  </html>