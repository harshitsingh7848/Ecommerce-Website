$(document).ready(function(){
  
    var price = $('#price').text();
var quantity = $('#quantity').text();
var total = price * quantity;
$('#total').text(total);


//$('#totalamount').text(totalamount);
});