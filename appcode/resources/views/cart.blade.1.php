@extends('homepage')

@section('body')
<div class="card mt-4">
            <div class="card-body">
            <h1>Shopping Cart</h1>
            <form id="orderform" action="get-quantity" method="POST">
            @if(!empty($productDetails))
            @foreach($productDetails as $i=>$j)
            <div class="products" id="{{$productDetails[$i]->id}}">
            <input type="hidden" id="price" value="{{$productDetails[$i]->sellingprice}}">
            
              <h3 class="card-title">{{ $productDetails[$i]->product_name}}</h3>
              <h4 >Price : {{$productDetails[$i]->sellingprice }} </h4>
              <table>
                <tr>
                  <td>  Warranty:
                  </td>
                  <td> {{ $productDetails[$i]->warranty_summary }} </td>
                  </tr>
                <tr>
                  <td>  Highlights :
                  </td>
                  <td> {{$productDetails[$i]->RAM}} | {{$productDetails[$i]->internal_storage}} ROM | 
                   Expandable Upto {{$productDetails[$i]->expandable_storage}}
                  </td>
                </tr>
                <tr>
                  
                <tr>
                  <td>  Description :
                  </td>
                  <td> {{ $productDetails[$i]->product_description }} </td>
                </tr>
                <tr>
                <td> Quantity:
                </td>
                
                <td>
                   
                  <div class="input-group">
                      <span class="input-group-btn">
                          <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                            <span class="glyphicon glyphicon-minus"></span>
                          </button>
                      </span>
                      <input type="text" id="quantity" name="quantity" class="form-control input-number" value="{{$quantity[$i]}}"  min="1" max="100">
                      <span class="input-group-btn">
                          <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                              <span class="glyphicon glyphicon-plus"></span>
                          </button>
                      </span>
                  </div>
                        
                </td>
  
              </tr>
              <td>Net Amount:
              </td>
              <td id="netAmount">
              </td>
              <td>
              <a href="" class="deletebtn" id="{{$productDetails[$i]->id."_". "1"}}">Delete Product</a>
              </td>
                
              </table>
              </br>
              </div>
              @endforeach
              @else
              <h3> You have no Products to Show </h3>
              @endif
              
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
          $.each(value, function( index1, value1 ) {
            console.log(index1+" --- "+value1);
          });
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
