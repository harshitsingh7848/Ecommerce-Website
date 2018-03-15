<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Checkout Page - Ustora Demo</title>

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">                    
<!-- Font Awesome -->
<link rel="stylesheet" href="assets/css/font-awesome.min.css">                   
<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">


</head>
<body>
<div class="header-area">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="user-menu">
<ul>
<li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
<li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
<li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>
<li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
<li><a href="#"><i class="fa fa-user"></i> Login</a></li>
</ul>
</div>
</div>

<div class="col-md-4">
<div class="header-right">
<ul class="list-unstyled list-inline">
<li class="dropdown dropdown-small">
<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="#">USD</a></li>
<li><a href="#">INR</a></li>
<li><a href="#">GBP</a></li>
</ul>
</li>

<li class="dropdown dropdown-small">
<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="#">English</a></li>
<li><a href="#">French</a></li>
<li><a href="#">German</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</div> <!-- End header area -->

<div class="site-branding-area">
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="logo">
<h1><a href="./"><img src="assets/img/logo.png"></a></h1>
</div>
</div>

<div class="col-sm-6">
<div class="shopping-item">
<a href="cart.html">Cart - <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"></span></a>
</div>
</div>
</div>
</div>
</div> <!-- End site branding area -->

<div class="mainmenu-area">
<div class="container">
<div class="row">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div> 

</div>
</div>
</div> <!-- End mainmenu area -->

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
<form id="submitaddress" action="show-payment" method="get" >
<input type="hidden" value="{{$quantity}}" id="quantity" name="quantity">
<input type="hidden" value="{{$productDetails[0]->id }}" name="productId" id="productId">
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

<div class="footer-top-area">
<div class="zigzag-bottom"></div>
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6">
<div class="footer-about-us">
<h2>u<span>Stora</span></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
<div class="footer-social">
<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>

</div>
</div>
</div>
<div class="footer-bottom-area">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="copyright">
<p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
</div>
</div>

<div class="col-md-4">
<div class="footer-card-icon">
<i class="fa fa-cc-discover"></i>
<i class="fa fa-cc-mastercard"></i>
<i class="fa fa-cc-paypal"></i>
<i class="fa fa-cc-visa"></i>
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
</body>
</html>