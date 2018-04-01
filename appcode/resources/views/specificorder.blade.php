
@extends('layouts.app')
 @section('title','Admin Dashboard')

        
     @section('content')
    <div class="container">
			@if(!empty($orderDetail))
    <div class="row">
        <div class="col-xs-6">
    		
    			<h5>Order Details of {{$orderDetail[0]->name}}</h5>
					<h6 class="pull-right">Order # {{$orderDetail[0]->order_number}} </h6>
    		</div>
				</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
							@if(!empty($billingDetails))
    				<strong>Billed To:</strong><br>
    					{{$billingDetails[0]->name}}<br>
    					{{$billingDetails[0]->address}},<br>
    					{{$billingDetails[0]->city}},{{$billingDetails[0]->state}},
              {{$billingDetails[0]->Pincode}}
    					@endif
    				</address>
    			</div>
					
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    						{{$orderDetail[0]->name}}<br>
    					{{$orderDetail[0]->address}},<br>
    					{{$orderDetail[0]->city}},{{$orderDetail[0]->state}},
              {{$orderDetail[0]->Pincode}}
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					{{ $orderDetail[0]->mode_of_payment }}<br>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					{{ $orderDetail[0]->order_date }}<br><br>
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
    								<td>{{ $orderDetail[0]->product_name }}</td>
    								<td class="text-center" id="price">{{ $orderDetail[0]->sellingprice }}</td>
    								<td class="text-center" id="quantity">{{ $orderDetail[0]->order_quantity }}</td>
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
				
					
				
			
    	</div>
    </div>
		@endif
</div>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

<script src="assets/js/specificorder.js">


 


</script>

@endsection