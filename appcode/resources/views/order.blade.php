@extends('homepage')

@section('body')
<div class="card mt-4">
            <div class="card-body">
            <h1> Order Details</h1>
            <form id="orderform" action="buy" method="POST">
            <input type="hidden" id="price" value="{{$productDetails[0]->sellingprice}}">
            <input type="hidden" value="{{$productDetails[0]->id }}" name="productId" 
            id="productId">
              <h3 class="card-title">{{ $productDetails[0]->product_name}}</h3>
              <h4 >Price : {{$productDetails[0]->sellingprice }} </h4>
              <table>
                <tr>
                  <td>  Description:
                  </td>
                  <td> {{ $productDetails[0]->warranty_summary }} </td>
                  </tr>
                <tr>
                  <td>  Highlights :
                  </td>
                  <td> {{$productDetails[0]->RAM}} | {{$productDetails[0]->internal_storage}} ROM | 
                   Expandable Upto {{$productDetails[0]->expandable_storage}}
                  </td>
                </tr>
                <tr>
                  
                <tr>
                  <td>  Description :
                  </td>
                  <td> {{ $productDetails[0]->product_description }} </td>
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
                      <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"  min="1" max="100">
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
                
              </table>
              </br>
              <button type="submit" id="btn" name="btn" > Confirm Order</button>
              
              </form>
             
            </div>
          </div>
          <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){

var quantitiy=0;
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
  
            var price = $('#price').val();
            var quantity = $('#quantity').val();
            var total = price * quantity;
            $('#netAmount').text(total);
     
});
</script>
  <!-- /Ecommerce/buy?productId={{$productDetails[0]->id }} -->
@endsection