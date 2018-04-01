@extends('layouts.app')
		
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
                    <div class="col-md-3">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Roles</div>
                            <div class="card-body">
                                <h5 class="card-title">Primary card title</h5>
                                <p class="card-text">2000 <i class="fas fa-arrow-up"></i></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- graph -->
                <div class="row">
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
                </div>

                <!-- footer -->
                <footer class="footer">
                    <div class="container">
                        <span class="text-muted">Place sticky footer content here.</span>
                    </div>
                </footer>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>  
    <script src="assets/js/morris_chart.js"></script>  
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



