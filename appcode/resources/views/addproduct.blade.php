@extends('layouts.app')
		
@section('title','Admin Dashboard')

    @section('head')
       
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- font awesome icons CSS -->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <!-- morris charts css -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">    

    <!-- Custom styles for this template -->
    <link href="assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    
    
	@endsection

    
	
    @section('body')
    

        <!-- Sidebar -->
      
        <!-- /#sidebar-wrapper -->
    <!-- Nav bar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" id="menu-toggle"> <i class="fas fa-bars"></i> Gadget Maniac</a>
                
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
              
                @if (!empty($name))
                    
                    <li><a class="nav-link" href="{{ url('/logout') }}">Logout</a></li>      
                @endif
            </ul>
           
        </div>
    </nav>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
              <form class=""  id="register-form" >
                <div>
                  <label for="product-name" >Product Name</label>	
                      <input type="text"  name="product-name" id="product-name"  placeholder="Enter Product Name" required/>
                </div>
                <div>
                  <label for="product-description" >Product Description</label>	
                      <input type="text"  name="product-description" id="product-description"  placeholder="Enter Product Description" required/>
                </div>
                 <div>
                  
                      <input type="checkbox"  name="show_user" id="show_user"/>
                      <label for="show_user" > Show Product to Users</label>	
                </div>
                <div>
                  
                      <input type="checkbox"  name="show_backend" id="show_backend"/>
                      <label for="show_backend" > Show Products in BackEnd</label>	
                </div>

                <div>
                  <input type="button"  name="btn" value="add product" id="btn"/>
                </div>
              </form>
              <div id="addbtn">
              </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

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
            <label for="yes_no_radio">Do you want to add Another Product ?</label>
            
             <p>
              <input type="button" id="check" value="Yes" name="button"/>
              
                <input type="button" id="nocheck" value="No" name="yes_no" />
              </p>
          </div>    
        </div>
        </div>    
        </div>
        </div>

   
    <!-- /#wrapper -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script>
    
      $(document).ready(function(){
         $('#btn').click(function(){
             var productName = $('#product-name').val();
             var productDescription =   $('#product-description').val();
             var showUser = +$('#show_user')[0].checked;
             var showInDb = +$('#show_backend')[0].checked;
             
            $.ajax({
          url:"/Ecommerce/add-product",
          type:"get",
          data:{'product-name':productName,'product-desc':productDescription,'showuser':showUser,'showindb':showInDb},
          success: function (response) {
          alert(response);  
          $("#myModal").modal('show');
        },
        }) ; 
        });
        $('#check').click(function(){
                window.location='/Ecommerce/view-add-products';
        });
        $('#nocheck').click(function(){
                window.location='/Ecommerce/view-products';
        });
      });
    </script>
    <!-- Menu Toggle Script -->
   

    
	@endsection



