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
});