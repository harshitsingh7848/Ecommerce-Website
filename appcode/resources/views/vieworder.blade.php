@extends('layouts.app')
            
    @section('title','Admin Dashboard')

        @section('head')
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
   <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />  -->
        <!-- font awesome icons CSS -->
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

        <!-- morris charts css -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">    

        <!-- Custom styles for this template -->
        <link href="assets/css/simple-sidebar.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/jumbotron.css" rel="stylesheet">

        @endsection

@section('content')


 <div id="page-content-wrapper">
               <div class="jumbotron">
                    <h1 class="">Orders</h1>         
                    <hr class="my-4">
                </div>
         
                <table id="example" class="display"  >
                    <thead>
                        <tr>
                            <th>Order Number</th>
                            <th>Order Quantity</td>
                            <th>Order Date</td> 
                            <th>Mode of Payment</th>
                            <th>Order Description</th>
                            <th> Order Status</th>
                            <th> Order Details</th>    
                        </tr>
                    </thead>
                    
                    <tbody>
                    @if(!empty($orders))
                    @foreach($orders as $order)
                        <tr>
                            <td>
                            {{ $order->order_number }}
                            </td>
                            <td>
                            {{ $order->order_quantity}}
                            </td>
                            <td>
                            {{ $order->order_date }}
                            </td>
                            <td>
                            {{ $order->mode_of_payment }}
                            </td>
                            <td>
                            Product Name : {{$order->product_name}}<br>
                            Product Quantity : {{$order->order_quantity}}
                            </td>
                            <td>
                            {{$order->order_status}}
                            </td>
                            <td>
                               <a href="/Ecommerce/specific-order-details?orderNumber={{$order->order_number}}">
                               View Order Details </a> 
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
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      
  
  
 
    
        
        <!-- Menu Toggle Script -->
        


  <script src="assets/js/dataTables.js">
         
         </script>
      
       

@endsection