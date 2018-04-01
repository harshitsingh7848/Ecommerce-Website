$(document).ready(function(){
    $('.quantity-right-plus').click(function(e){
         alert('kdkk');
         // Stop acting like a button
         e.preventDefault();
         // Get the field name
         var quantity = parseInt($('#'+"quantity"+value.id+'').val());
         alert(quantity);
         // If is not undefined
             
             $('#'+"quantity"+value.id+'').val(quantity + 1);
             var price = $('#'+value.id+'').val();
             console.log(price);
             var quantity = $('#'+"quantity"+value.id+'').val();
             console.log(quantity);
             var total = price * quantity;
             console.log(total);
             
             $('#'+"net"+ value.id+'').text(total);
 
           
             // Increment
         
     });
 
      $('.quantity-left-minus').click(function(e){
         // Stop acting like a button
         e.preventDefault();
         // Get the field name
         var quantity = parseInt($('#'+"quantity"+value.id+'').val());
 
           
         
         // If is not undefined
       
             // Increment
             if(quantity>0){
             $('#'+"quantity"+value.id+'').val(quantity - 1);
             }
             var price = $('#'+value.id+'').val();
             console.log(price);
             var quantity = $('#'+"quantity"+value.id+'').val();
             console.log(quantity);
             var total = price * quantity;
             console.log(total);
             
             $('#'+"net"+ value.id+'').text(total);
     });
     

     var productsDetail="";
  var netTotal=0;
   if(localStorage.getItem('product')){   
            var productInfo = localStorage.getItem('product');
            var productsDetail = JSON.parse(productInfo);
          }
          //var count=0;
   $.ajax({
    url:'/Ecommerce/bindData',
    method:'POST',
    data:{'products':productsDetail},
    success:function(response){
      
     // console.log(response);
      var arr = JSON.parse(response);
      $.each(arr, function( index, value ) {
            //console.log(value.quantity);
            var res='<div><input type="hidden" id="'+value.id+'" value="'+value.sellingprice+'"><h3 class="card-title">'+value.product_name+'</h3><h4>Price :'+value.sellingprice+'</h4><table><tr><td> Warranty:</td><td> '+value.warranty_summary+' </td></tr><tr><td>  Highlights :</td><td> '+value.RAM+' | '+value.internal_storage+' ROM | Expandable Upto '+value.expandable_storage+'</td></tr><tr><tr><td>  Description :</td><td> '+value.product_description+' </td></tr><tr><td> Quantity:</td><td><div class="input-group"><span class="input-group-btn"><button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field=""><span class="glyphicon glyphicon-minus"></span></button></span><input type="text" id="'+"quantity"+value.id+'" name="'+"quantity"+value.id+'" class="form-control input-number" value='+value.quantity+' min="1" max="100"><span class="input-group-btn"><button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field=""><span class="glyphicon glyphicon-plus"></span></button></span></div></td></tr><td>Net Amount:</td><td id="'+"net"+value.id+'"></td><td><a href="" class="deletebtn" id="'+value.id+"-"+"1"+'">Delete Product</a></td></table></div>';     
            $("form").append(res);
            var price = $('#'+value.id+'').val();
            var quantity = $('#'+"quantity"+value.id+'').val();
            var total = price * quantity;
            netTotal=netTotal+total;
            $('#'+"net"+ value.id+'').text(total);
             $('.deletebtn').click(function(){
              var buttonId= $(this).attr('id');
              productId=buttonId.split('-');
              
               var product=[];
              var m=0;
              
               for(var i=0;i<productsDetail.length;i=i+2){
                 if(productsDetail[i]!=productId[0]){
                   product[m]=productsDetail[i];
                   m++;
                   product[m]=productsDetail[i+1];
                 }
               } 
               var count=0;
               localStorage.setItem('product',JSON.stringify(product));
               var productInfo1 = localStorage.getItem('product');
            var productsDetails = JSON.parse(productInfo1); 
               if(localStorage.getItem('product')){   
            var productInfo1 = localStorage.getItem('product');
            var productsDetails = JSON.parse(productInfo1);
            alert(productsDetails.length);
             console.log(productsDetails) ;
          //localStorage.removeItem('product');  
             for(var i=1;i<productsDetails.length;i=i+2){
               count=count+productsDetails[i];
             }
             
          }
          if(count==0){
            localStorage.removeItem('count');
          }
          else{
            localStorage.setItem('count',count);
          $('.product-count').text(count);  
          }
          
               
           
      }); 
      
      });
      $("form").append('<div><h3>Total Cart Value :'+netTotal+'</h3> </div>')
     
      
      
    }, 
    
   

  });
 
 
                       
           
     
});