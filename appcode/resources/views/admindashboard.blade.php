@extends('layouts.app')
		
@section('title','Admin Dashboard')

    @section('body')
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
                   @if($role===1 || $role===4)
                   <li><a href="new-users">Add New Users</a></li>
                   
                   @endif
                   
                   <li><a href="employees">List of Employees</a></li>
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
        <!-- /#sidebar-wrapper -->
    <!-- Nav bar -->
      @endsection
@section('content')
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Dashboard</h1>
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
                                <h5 class="card-title">Total Number of Users</h5>
                                <p class="card-text" id="result"> <i class="fas fa-arrow-down"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"><div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Products</div>
                            <div class="card-body">
                                <h5 class="card-title">New Products added</h5>
                                <p class="card-text" >335 <i class="fas fa-arrow-down"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Orders</div>
                            <div class="card-body">
                                <h5 class="card-title">Primary card title</h5>
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
    
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

    <!-- <div id="tableusers">
            @yield('content')
    </div> -->
       
       


<script>
/* if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("/Ecommerce/getdetails");
    source.onmessage = function(event) {
        document.getElementById("result").innerHTML = event.data ;
     };
} */
    timedCount();
    

function timedCount() {
  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 ) {
         document.getElementById("result").innerHTML=this.responseText;
      }
    };  

      xhttp.open("GET", "/Ecommerce/getdetails",true);
      xhttp.send(); 
     
     //postMessage(i);
     setTimeout("timedCount()",1000);
}


</script>

    
	@endsection



