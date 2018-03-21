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
<a href="/Ecommerce/select-shipping-details?userId={{$userAddress[0]->user_id }}">Add new Address </a>
@if(!empty($address))
<div>
<input type="checkbox" id="{{$userAddress[0]->id}}" name="check" checked>
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
@foreach($address as $a=>$d)
<div>
<input type="checkbox" id="{{$address[0]->id}}" name="check">
  <p id="para{{$address[0]->id}}">
  {{ $address[$a]->name}}
  <br>
  {{ $address[$a]->address}}
  <br>
  {{ $address[$a]->city}},{{$address[$a]->state}},{{$address[$a]->Pincode}}
  <br>
  Phone number : {{$address[$a]->mobile_number}}
  <br>
  <a href=""> Edit Address </a> | <a href="">Delete Address</a>
  </p>
</div>
@endforeach
@endif
</br>
  <button type="submit" id="btn" name="btn" > Confirm Address</button>
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

<script>
$(document).ready(function(){
  
  $('#btn').click(function(){
    
    var shippingAddress1="";
     if($('#{{$address[0]->id}}').prop("checked") == true){
      shippingAddress1= JSON.parse("{{$address[0]->id}}"); 
     }
     else{
      shippingAddress1= JSON.parse("{{$userAddress[0]->id}}"); 
     }
    $('#shipId').val(shippingAddress1);
     
        
  });
});
</script>
@endsection