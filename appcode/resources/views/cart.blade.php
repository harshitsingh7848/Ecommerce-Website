@extends('homepage')

@section('body')
<div class="card mt-4">
            <div class="card-body">
            <h1>Shopping Cart</h1>
            <form id="orderform" action="get-quantity" method="POST">
            
              
              </form>
             
            </div>
          </div>
          <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);
            var price = $('#price').val();
            var quantity = $('#quantity').val();
            var total = price * quantity;
            $('#netAmount').text(total);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

          
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
             var price = $('#price').val();
            var quantity = $('#quantity').val();
            var total = price * quantity;
            $('#netAmount').text(total);
    });
    
});
</script>
<script>
$(document).ready(function(){
  var productsDetail="";
   if(localStorage.getItem('product')){   
            var productInfo = localStorage.getItem('product');
            var productsDetail = JSON.parse(productInfo);
          }
          var count=0;
   $.ajax({
    url:'/Ecommerce/bindData',
    method:'POST',
    data:{'products':productsDetail},
    success:function(response){
      
      console.log(response);
      var arr = JSON.parse(response);
      $.each(arr, function( index, value ) {
        //console.log(value.id);
         var res='<div><h3>'+value.product_name+'</h3></div>';
         $("form").append(res);
      });
      //var str=JSON.parse(response);
      //alert(str);
      
      
    }, 

  });
            /* var productId=localStorage.getItem('productsId');
             var myUrl="/Ecommerce/viewcart?products="+productId;
             var encodeUrl=encodeURIComponent(myUrl); 
             window.history.pushState("", "", encodeUrl); */
            var price = $('#price').val();
            var quantity = $('#quantity').val();
            
            var total = price * quantity;
            
            $('#netAmount').text(total);

            $('.deletebtn').click(function(){
               var buttonId=$(this).attr('id');
              var parentId=$(this).closest('div').attr('id');
              
               /* if (localStorage.getItem('productsId')){
                 var products=localStorage.getItem('productsId');
                  var result=products.split(",");
                  var productConcat=parentId+"-"+"1";
                  var productId="";
                 for(var i=0;i<result.length;i++){
                   if(result[i]!=productConcat){
                     if(i==(result.length-1)){
                       productId=productId+result[i];
                     }
                     else
                     {
                       productId=productId+result[i]+",";
                     }
                   }
                 }
                 localStorage.removeItem('productsId');
                 localStorage.getItem('order');
                 alert(productId);
                   localStorage.setItem('productsId',productId);
               } */
            });
     
});
</script>
  
@endsection
