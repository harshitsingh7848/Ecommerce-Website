@extends('homepage')

@section('body')
<form action="show-payment" method="post" >

<input type="hidden" name="shipId" id="shipId" value="{{$shippingAddress[0]->id}}">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Purchase Details</h2><h3 class="pull-right">invoice # {{$invoiceNumber}} </h3>
    		</div>
    		<hr>
    		<div class="row">
    		
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
    					<table class="table table-condensed" >
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
									@if(!empty($productDetails))
									@foreach($productDetails as $i=>$v)
    							<tr>
    								<td >{{ $productDetails[$i]->product_name }}</td>
    								<td class="text-center" name="price[]" class="price" id="{{$productDetails[$i]->id}}">{{ $productDetails[$i]->sellingprice }}</td>
    								<td class="text-center" name="quantity[]" id="{{"quantity".$productDetails[$i]->id}}">{{ $quantity[$i] }}</td>
    								<td class="text-right" name="total[]" id="{{"total".$productDetails[$i]->id}}" ></td>
    							</tr>
                    @endforeach
									@endif           
    								
    							
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
          <button type="submit" >Select Payment</button>
    		</div>
    	</div>
    </div>
</div>
</form>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="assets/js/purchaseproduct.js">

  
    
</script>
@endsection