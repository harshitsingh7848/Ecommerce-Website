@extends('layouts.app')
@section('head')

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

<!-- Optional theme -->

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" /> -->
@endsection
		
@section('title','Admin Dashboard')

    
@section('content')
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Dashboard</h1>
                <input type="hidden" value="{{$privilegeDetails[0]->vendor_role_id}}" id="vendorId">
                <p>
                @if(!empty($name))
                    Hello {{$name}}
                @endif     
                Welcome to the Gadget Maniac dashboard. Very soon you will see cool widgets here!!!!
                </p>

                <!-- widgets -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Users</div>
                            <div class="card-body">
                                
                                <p class="card-text" id="result"> <i class="fas fa-arrow-down"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"><div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Products</div>
                            <div class="card-body">
                                
                                <p class="card-text" id="products" > <i class="fas fa-arrow-down"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Orders</div>
                            <div class="card-body">
                                
                                <p class="card-text" id="orders"> <i class="fas fa-arrow-down"></i></p>
                                
                            </div>
                        </div>
                    </div>
                    

                <!-- graph -->
                 <div class="row">
                <!-- strat date for orders -->
                <div class='col-md-2'>
                <div class="form-group">
                <div class='input-group date' id='datetimepicker6'>
                <input type='text' class="form-control" placeholder="order-star-date"/>
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>
                </div>
                </div>

                 <!-- end date for orders -->
                <div class='col-md-2'>
                <div class="form-group">
                <div class='input-group date' data-provide="datepicker" id='datetimepicker7'>
                <input type='text' class="form-control" placeholder="order-end-date"/>
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>
                </div>
                </div>

                 <!-- apply button for orders -->
                <div class='col-md-2'>
                <input type="button" class="btn btn-primary" id="apply" name="apply" value="apply"/>
                </div>

                <!-- start date for users -->
                <div class='col-md-2'>
                <div class="form-group">
                <div class='input-group date' data-provide="datepicker-inline" id='datetimepicker8'>
                <input type='text' class="form-control" placeholder="user-start-date"/>
                <div class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                </div>
                </div>
                </div>
                </div>
                <!-- end date for users -->
                <div class='col-md-2'>
                <div class="form-group">
                <div  id='datetimepicker9'>
                <input type='text' class="form-control" placeholder="user-end-date"/>
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>
                </div>
                </div>
                <!-- apply button for users -->
                <div class='col-md-2'>
                <input type="button" class="btn btn-primary" id="applyuser" name="applyuser" value="apply"/>
                </div>
                <!-- order chart -->
                <div class='col-md-6' style="height:40vh; width:40vw">
                <canvas id="orderchart" style="position: relative;"></canvas>
                </div>
                <!-- user chart -->
                <div class='col-md-6' style="height:40vh; width:40vw">
                <canvas id="userchart" style="position: relative;"></canvas>
                </div>
                </div>

                <!-- Dropdown for product -->
 
                <div class='col-md-2'>
                <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Category
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                <li><a id="selected" href="#">Brand Name</a></li>
                </ul>
                </div>
                </div>

                <!-- product chart -->
                <div class='col-md-6' style="height:40vh; width:40vw">
                <canvas id="productchart" style="position: relative;"></canvas>
                </div>
                </div>    


                </div>
        </div>

               <!--  <div class="row">
                    <div class="col-md-8" style="text-align:center">
                        <div id="myfirstchart" ></div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://dummyimage.com/286x180/00000f/0011ff.png&text=top+performances" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- footer -->
               <!--  <footer class="footer">
                    <div class="container">
                        <span class="text-muted">Place sticky footer content here.</span>
                    </div>
                </footer> -->
            
        <!-- /#page-content-wrapper -->

    
    <!-- /#wrapper -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>  
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    
   <!--  <script src="assets/js/morris_chart.js"></script>   -->
    <script src="assets/js/brand-list.js"></script>
    <script src="assets/js/orders.js"></script>
    <script src="assets/js/getproduct.js"></script>
    
    <!-- Menu Toggle Script -->
    <script>
    
    </script>

    <!-- <div id="tableusers">
            @yield('content')
    </div> -->
       
       


<script src="assets/js/admin.js">
/* var vendorId=document.getElementById('vendorId').value; */

/* if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("/Ecommerce/getdetails");
    source.onmessage = function(event) {
        document.getElementById("result").innerHTML = event.data ;
     };
} */
    


</script>

    
	@endsection



