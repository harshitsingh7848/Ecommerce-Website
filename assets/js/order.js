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
    
    $(document).ready(function(){
      
                var price = $('#price').val();
                var quantity = $('#quantity').val();
                var total = price * quantity;
                $('#netAmount').text(total);
         
    });