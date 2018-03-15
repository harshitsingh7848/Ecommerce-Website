@extends('homepage')

@section('body')

<form action="invoice" method="get">
<input type="hidden" value="{{$quantity}}" id="quantity" name="quantity">
<input type="hidden" value="{{$productId}}" name="productId" id="productId">
<input type="hidden" name="shipId" id="shipId" value="{{$shipId}}">
<input type="hidden" name="paymentMode" id="paymentMode">
<div id="payment">
<ul class="payment_methods methods">
<h1> Choose your Payment Method</h1>
<li class="payment_method_cash">
<input type="radio" data-order_button_text="" value="cash" name="payment_method" class="input-radio" id="payment_method_cash">
<label for="payment_method_cash">Cash on Delivery </label>
<div  class="payment_box payment_method_cash">
<p id="cash">Cash on Delivery</p>
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

</div>
</form>

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

<!-- <script>
$(document).ready(function(){
  $('place_order').click(function(){
 $('#paymentMode').val($('#cash').text());
  });
});
</script> -->

@endsection