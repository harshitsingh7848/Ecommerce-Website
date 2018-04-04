@extends('homepage')
@section('title','Checkout Page ')




@section('body')

<div class="product-big-title-area">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="product-bit-title text-center">
<h2>Check Out Page</h2>
</div>
</div>
</div>
</div>
</div>


<div class="single-product-area">
<div class="zigzag-bottom"></div>
<div class="container">
<div class="row">
<div class="col-md-4">                                    
</div>

<div class="col-md-8">
<div class="product-content-right">
<div class="woocommerce">
<form id="submitaddress" action="select-product" method="post" >

<input type="hidden" name="shipId" id="shipId">
<h1>Your Addresses</h1>
<a href="/Ecommerce/select-shipping-details">Add new Address </a>

<div>
@if(!empty($userAddress))
<input type="checkbox" id="{{$userAddress[0]->id}}" class="checkbox1" name="check" checked>

  <p id="para{{$userAddress[0]->id}}">
  {{ $userAddress[0]->name}}
  <br>
  {{ $userAddress[0]->address}}
  <br>
  {{ $userAddress[0]->city}},{{$userAddress[0]->state}},{{$userAddress[0]->Pincode}}
  <br>
  Phone number : {{$userAddress[0]->mobile_number}}
  <br>
  </p>
</div>
@endif
@if(!empty($address))
@foreach($address as $a=>$d)
<div >
<input type="checkbox" id="{{$address[$a]->id}}" class="checkbox" name="checkbox[]">

  <p id="para{{$address[$a]->id}}">
  {{ $address[$a]->name}}
  <br>
  {{ $address[$a]->address}}
  <br>
  {{ $address[$a]->city}},{{$address[$a]->state}},{{$address[$a]->Pincode}}
  <br>
  Phone number : {{$address[$a]->mobile_number}}
  <br>
  <a href="/Ecommerce/viewUpdateAddress?shipId={{ $address[$a]->id }}"> Edit Address </a> | <a class="delete" id="{{$address[$a]->id}}" href="">Delete Address</a>
  </p>
 
</div>
@endforeach
@endif
</br>
  <button type="submit" id="btn" name="btn" > Confirm Address</button>
  @if ($errors->has('ship'))
    						<div class="error">{{ $errors->first('ship') }}</div>
							@endif
</form>
</div>


</div>                       
</div>                    
</div>
</div>
</div>
</div>








<!-- Latest jQuery form server -->
<!-- <script src="https://code.jquery.com/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="assets/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="assets/js/main.js"></script>
<script src="assets/js/fillCheckout2.js"></script>


@endsection