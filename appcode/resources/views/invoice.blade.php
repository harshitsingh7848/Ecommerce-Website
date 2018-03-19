@extends('homepage')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
				<form method="POST" action="download">
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
				<div class="row align-items-end">
				<div class="col-md-6">
		
				<p>Click on the Download button if you want to download the invoice as pdf:<p>
				
				<button type="submit" id="btn">Download Invoice</button>
				
				
				
				</div>
				</form>	
				<div class="col-md-6">
				<p>Click the button to print the current page.<p>

			<button onclick="myFunction()">Print this page</button>
			</div>
			</div>
    	</div>
    </div>
</div>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  
     var price = $('#price').text();
 var quantity = $('#quantity').text();
 var total = price * quantity;
$('#total').text(total);
$('#subtotal').text(total);
var shippingcharge=120;
$('#shippingcharge').text(shippingcharge);
var totalamount = shippingcharge + total;
$('#totalamount').text(totalamount);

$('#btn').click(function(){
	var message=$('#g').html();
	$.ajax({
		url:'/Ecommerce/download',
		method:'POST',
		data:{'html': },
		
		success:function(response){
			alert(response);
		},
	}); 
});
 

});
</script>
<script>
function myFunction() {
    window.print();
}
</script>
@endsection