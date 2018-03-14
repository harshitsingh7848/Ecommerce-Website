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

<form class=""  id="buy_form1" >
<span>Add a new Billing address</span>
<div class="woocommerce-billing-fields">
<h3>Billing  Address Details</h3>
<input type="hidden" value="1" name="addType" id="addType">
<input type="hidden" value="{{$userDetail[0]->empid }}" name="userId" id="userId">
<div class="form-group">
<label for="name" class="cols-sm-2 control-label">Your Name</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon "><i class="fa fa-user fa" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required/>
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group">
<label for="bmobile" class="cols-sm-2 control-label">Mobile Number</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"><i class="fas fa-phone" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="bmobile" id="bmobile"  placeholder="Enter your Mobile Number" required/>
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group">
<label for="bpin" class="cols-sm-2 control-label">Pincode</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<input type="text" class="form-control" name="bpin" id="bpin"  placeholder="Pincode"/>
</div>
<span class="help-block" id="error"></span>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="billingaddress" >Address</label>	
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<textarea placeholder="Area/Street" class="form-control" id="billingaddress" name="billingaddress" ></textarea> 
</div>
<span class="help-block" id="error"></span>                    
</div>
</div>

<div class="form-group">
<label for="bcity" class="cols-sm-2 control-label">City</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<input type="text" class="form-control" name="bcity" id="bcity"  placeholder="City" required="required"/>
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group">
<label for="bstate" class="cols-sm-2 control-label">State</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<input type="text" class="form-control" name="bstate" id="bstate"  placeholder="State" required="required"/>
</div>
<span class="help-block" id="error"></span>
</div>
</div>
<div class="form-group ">
<input type="button" name="bbutton" id="bbutton" value="Save and Deliver Here" class="btn btn-primary btn-lg btn-block login-button"/>
</div>
<input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>    

<input type="checkbox" id="check-address">
<span>Check this box if Shipping Address and Billing Address are the same.</span>
<a href="/Ecommerce/select-shipping-details?userId={{$userDetail[0]->empid }}">Add new Address </a>
<form class=""  id="ship_form1" method="get" action="select-shipping-details" >    
<div id="customer_details" class="col2-set">
<div class="col-1">
<div class="woocommerce-billing-fields">
<h3>Shipping  Address Details</h3>
<button type="submit" id="newBtn" name="newBtn">Shipping Address</button> 
<input type="hidden" value="2" name="addType" id="addType">
<input type="hidden" value="{{$userDetail[0]->empid }}" name="userId" id="userId">                         
<div class="form-group">
<label for="sname" class="cols-sm-2 control-label">Your Name</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon "><i class="fa fa-user fa" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="sname" id="sname"  placeholder="Enter your Name" />
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group">
<label for="smobile" class="cols-sm-2 control-label">Mobile Number</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"><i class="fas fa-phone" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="smobile" id="smobile"  placeholder="Enter your Mobile Number" />
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group">
<label for="spin" class="cols-sm-2 control-label">Pincode</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<input type="text" class="form-control" name="spin" id="spin"  placeholder="Pincode"/>
</div>
<span class="help-block" id="error"></span>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="shippingaddress" >Address</label>	
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<textarea placeholder="Area/Street" class="form-control" id="shippingaddress" name="shippingaddress" ></textarea> 
</div>
<span class="help-block" id="error"></span>                    
</div>
</div>

<div class="form-group">
<label for="scity" class="cols-sm-2 control-label">City</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<input type="text" class="form-control" name="scity" id="scity"  placeholder="City" />
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group">
<label for="shstate" class="cols-sm-2 control-label">State</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<input type="text" class="form-control" name="shstate" id="shstate"  placeholder="State" />
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group ">
<input type="submit" name="sbutton"  id="sbutton" value="Save and Deliver Here" class="btn btn-primary btn-lg btn-block login-button"/>
</div>
<input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
</div>
</div>                         
</div>
</div>


<h3 id="order_review_heading">Your order</h3>
<div id="order_review" style="position: relative;">
<table class="shop_table">
<thead>
<tr>
<th class="product-name">Product</th>
<th class="product-total">Total</th>
</tr>
</thead>
<tbody>
<tr class="cart_item">
<td class="product-name">
{{$productDetails [0]->product_name}}  <strong class="product-quantity">× </strong> </td>
<td class="product-total">
<span class="amount"></span> </td>
</tr>
</tbody>
<tfoot>

<tr class="shipping">
<th>Shipping and Handling</th>
<td>
<input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
</td>
</tr>


<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount"></span></strong> </td>
</tr>

</tfoot>
</table>


<div id="payment">
<ul class="payment_methods methods">
<li class="payment_method_bacs">
<input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
<label for="payment_method_bacs">Direct Bank Transfer </label>
<div class="payment_box payment_method_bacs">
<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
</div>
</li>
<li class="payment_method_cheque">
<input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
<label for="payment_method_cheque">Cheque Payment </label>
<div style="display:none;" class="payment_box payment_method_cheque">
<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
</div>
</li>
<li class="payment_method_paypal">
<input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">
<label for="payment_method_paypal">PayPal <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"><a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">What is PayPal?</a>
</label>
<div style="display:none;" class="payment_box payment_method_paypal">
<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
</div>
</li>
</ul>

<div class="form-row place-order">

<input type="submit" data-value="Place order" value="Place order" id="place_order" name="woocommerce_checkout_place_order" class="button alt">


</div>

<div class="clear"></div>

</div>
</div>
</form>

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

<div class="col-md-3 col-sm-6">
<div class="footer-menu">
<h2 class="footer-wid-title">User Navigation </h2>
<ul>
<li><a href="">My account</a></li>
<li><a href="">Order history</a></li>
<li><a href="">Wishlist</a></li>
<li><a href="">Vendor contact</a></li>
<li><a href="">Front page</a></li>
</ul>                        
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-menu">
<h2 class="footer-wid-title">Categories</h2>
<ul>
<li><a href="">Mobile Phone</a></li>
<li><a href="">Home accesseries</a></li>
<li><a href="">LED TV</a></li>
<li><a href="">Computer</a></li>
<li><a href="">Gadets</a></li>
</ul>                        
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-newsletter">
<h2 class="footer-wid-title">Newsletter</h2>
<p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
<div class="newsletter-form">
<input type="email" placeholder="Type your email">
<input type="submit" value="Subscribe">
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
$('#change').click(function(e){
alert('scc');

/*   e.preventDefault();
$('#buy_form2').removeClass("d-none"); */
});
$('#bbutton').click(function(){
var data=$('#bmobile').val();
alert(data);
$.ajax({
url:'/Ecommerce/add-billing-details',
method:'get',
data: $('#buy_form1').serialize(),
success: function (response) {
alert(response);
}
}); 
});

$('input[type="checkbox"]').click(function(){
if($(this).prop("checked") == true){
fillDetails1();

}
});
$('#newBtn').click(function(){
var user_id = $('#userId').val();

$.ajax({     
url:'/Ecommerce/select-shipping-details',
data:{'userId':user_id},
method:'get', 
success: function (response) {
$('#displayAddresses').html(response);
}
});      
});

function fillDetails1()
{
$('#scity').val($('#bcity').val());
$('#shstate').val($('#bstate').val());
$('#spin').val($('#bpin').val());
$('#shippingaddress').val($('#billingaddress').val());
$('#smobile').val($('#bmobile').val());
$('#sname').val($('#bname').val());               
}

});

</script>
</body>
</html>