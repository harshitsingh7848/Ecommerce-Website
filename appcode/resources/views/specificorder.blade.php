@extends(layouts.app)

 @section('title','Admin Dashboard')

        @section('head')
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/simple-sidebar.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        @endsection
     @section('content')
    <div class="container">
    <div class="row">
        <div class="col-xs-12">
				
    		<div class="invoice-title">
    			<h2>Your Order</h2><h3 >Order # {{$productDetails[0]->order_number}} </h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					{{$billingAddress[0]->name}}<br>
    					{{$billingAddress[0]->address}},<br>
    					{{$billingAddress[0]->city}},{{$billingAddress[0]->state}},
              {{$billingAddress[0]->Pincode}}
    					
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    						{{$shippingAddress[0]->name}}<br>
    					{{$shippingAddress[0]->address}},<br>
    					{{$shippingAddress[0]->city}},{{$shippingAddress[0]->state}},
              {{$shippingAddress[0]->Pincode}}
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					{{ $productDetails[0]->mode_of_payment }}<br>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					{{ $productDetails[0]->order_date }}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>

     <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Total</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td>{{ $productDetails[0]->product_name }}</td>
    								<td class="text-center" id="price">{{ $productDetails[0]->sellingprice }}</td>
    								<td class="text-center" id="quantity">{{ $productDetails[0]->order_quantity }}</td>
    								<td class="text-right" id="total" ></td>
    							</tr>
                               
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center" ><strong>Subtotal</strong></td>
    								<td class="thick-line text-right" id="subtotal"></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center" ><strong>Shipping</strong></td>
    								<td class="no-line text-right" id="shippingcharge"></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center" ><strong>Total</strong></td>
    								<td class="no-line text-right" id="totalamount"></td>
    							</tr>
    						</tbody>
    					</table>
              </div>
							
    				</div>
    			</div>
     @endsection   