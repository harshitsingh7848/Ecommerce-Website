    @extends('layouts.app')
            
    @section('title','Admin Dashboard')

        @section('head')
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
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
            <style>
                .jumbotron {
                    padding: 10px 5px 10px 5px;
                    background: none;
                }
                .jumbotron a, .jumbotron h1 {
                    display: inline-block;
                }
                .jumbotron a{
                    float: right;
                }

            </style>
            <!-- Page Content -->
            <div id="page-content-wrapper">
               <div class="jumbotron">
                    <h1 class="">Products</h1>
                    <a class="pull-right btn btn-success btn-lg" href="#" role="button">
                        <i class="fa fa-plus"></i>
                        Add new product</a>
                    <hr class="my-4">
                </div>
         
                <table id="example" class="display"  >
                    <thead>
                        <tr>
                            <th>Product ID</td>
                            <th>Product Name</td>
                            <th>Product Description</td> 
                        </tr>
                    </thead>
                    
                    <tbody>
                    @if(!empty($productDetails))
                    @foreach($productDetails as $productDetail)
                        <tr>
                            <td>
                            {{ $productDetail->product_id }}
                            </td>
                            <td>
                            {{ $productDetail->product_name}}
                            </td>
                            <td>
                            {{ $productDetail->product_description }}
                            </td>
                        </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            <!-- /#page-content-wrapper -->

    
        <!-- /#wrapper -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    
        
        <!-- Menu Toggle Script -->
        <script>
        function redirect()
        {
            window.location='/Ecommerce/view-add-products';
        }
        </script>

        <script>
        $(document).ready(function(){
        $('#example').DataTable();
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
        //alert (value);
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
    </script>

        
        @endsection



