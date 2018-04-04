$(document).ready(function(){

/* $.ajax({
    url:'/Ecommerce/bindData',
    method:'POST',
    data:{'products':productDetail},
    success:function(response){
      
     // console.log(response);
      var arr = JSON.parse(response);
      $.each(arr, function( index, value ) {

            //console.log(value.quantity);
            var res='<div class="input-group"><span class="input-group-btn"><button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field=""><span class="glyphicon glyphicon-minus"></span></button></span><input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"  min="1" max="100"><span class="input-group-btn"><button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field=""><span class="glyphicon glyphicon-plus"></span> </button></span></div>';     
            
            $("#quantity").append(res);
      });
    }, 
  }); */

    

    var quantity=0;
       $('.quantity-right-plus').click(function(e){
            
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
                
                $('#quantity').val(quantity + 1);
                localStorage.setItem('quantity',quantity);
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
                localStorage.setItem('quantity',quantity);
                 var price = $('#price').val();
                var quantity = $('#quantity').val();
                var total = price * quantity;
                $('#netAmount').text(total);
        });
        
    });
    
    $(document).ready(function(){
      
                var price = $('#price').val();
                var quantity = $('#quantity').val();
                var total = price * quantity;
                $('#netAmount').text(total);
         
    });