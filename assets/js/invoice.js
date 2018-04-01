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

/* $('#btn').click(function(){
   var message=$('#g').html();
   $.ajax({
       url:'/Ecommerce/download',
       method:'POST',
       data:{'html': },
       
       success:function(response){
           alert(response);
       },
   }); 
}); */

function myFunction() {
    window.print();
}

});