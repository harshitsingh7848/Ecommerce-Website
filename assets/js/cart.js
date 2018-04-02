$(document).ready(function(){
   var test=0;
   var netTotal=0;
   var count=0;
   
   window.deletebtn = function(tt){
            if(localStorage.getItem('product')){   
            var productInfo1 = localStorage.getItem('product');
            var productsDetail1 = JSON.parse(productInfo1);
          }
              //console.log(tt.id);
              var productId=tt.id.split('-');
              console.log(productId[1]);
               var product=[];
               var m=0;
              //console.log(productsDetail1);
               for(var i=0;i<productsDetail1.length;i=i+2){
                 if(productsDetail1[i]!=productId[1]){
                   product[m]=productsDetail1[i];
                   m++;
                   product[m]=productsDetail1[i+1];
                 }
               } 
               var count=0;
               //console.log(product); 
                localStorage.setItem('product',JSON.stringify(product));
               
               if(localStorage.getItem('product')){   
            var productInfo2 = localStorage.getItem('product');
            var productsDetails = JSON.parse(productInfo2);
            //alert(productsDetails.length);
             //console.log(productsDetails) ;
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
          var total=$('#'+"net"+ productId[1]+'').text();
         // console.log(total);
          //console.log(parseInt(netTotal));
           netTotal=parseInt(netTotal)-parseInt(total);
          //console.log(netTotal);
          $('#'+'div-'+productId[1]+'').remove(); 
          
          $("#totalcartvalue").html('<div><h3>Total Cart Value :'+netTotal+'</h3> </div>'); 
            
   }
  window.myFunction = function(tt) {
            
             var productId=tt.id.split('-');
             
              count=localStorage.getItem('count');
             var quantity = parseInt($('#'+"quantity"+productId[1]+'').val());
             count=count-quantity;
             //console.log(count);
             var price = $('#'+productId[1]+'').val();
             var oldTotal=quantity*price;
             
             $('#'+"quantity"+productId[1]+'').val(quantity + 1);
             
             var quantity = $('#'+"quantity"+productId[1]+'').val();
              var productsDetail="";
             if(localStorage.getItem('product')){   
            var proInfo = localStorage.getItem('product');
            var proDetail = JSON.parse(proInfo);
          }
          console.log(proDetail);
          
            for(i=0;i<proDetail.length;i=i+2){
              if(proDetail[i]==productId[1]){
                proDetail[i+1]=parseInt(quantity);
              }
            }
            console.log(proDetail);
            //$('#'+'div-'+productId[1]+'').remove(); 
              localStorage.setItem('product',JSON.stringify(proDetail));  
             count=parseInt(quantity) + parseInt(count);
             console.log(count);
               localStorage.setItem('count',count);
             $('.product-count').text(count);   
                
              netTotal=netTotal-oldTotal;
             var total = price * quantity;
             //console.log(total);
             netTotal=total+netTotal;
             
             $('#'+"net"+ productId[1]+'').text(total);
              $("#totalcartvalue").html('<div><h3>Total Cart Value :'+netTotal+'</h3> </div>'); 
            
    
  }
  window.subtract = function(tt) {
    var productId=tt.id.split('-');
    var quantity = parseInt($('#'+"quantity"+productId[1]+'').val());
    var price = $('#'+productId[1]+'').val();
    var oldTotal=quantity*price;
             if(quantity>0){
             $('#'+"quantity"+productId[1]+'').val(quantity - 1);
             }
             netTotal=netTotal-oldTotal;
            // console.log(price);
             var quantity = $('#'+"quantity"+productId[1]+'').val();
             //console.log(quantity);
             var total = price * quantity;
             
             netTotal=total+netTotal;
             $('#'+"net"+ productId[1]+'').text(total);
          $("#totalcartvalue").html('<div><h3>Total Cart Value :'+netTotal+'</h3> </div>');
  }
 
    
     

      
  var productDetail="";
   if(localStorage.getItem('product')){   
            var productInfo = localStorage.getItem('product');
            var productDetail = JSON.parse(productInfo);
          }
          //var count=0;
         // console.log(productDetail);
   $.ajax({
    url:'/Ecommerce/bindData',
    method:'POST',
    data:{'products':productDetail},
    success:function(response){
      
     // console.log(response);
      var arr = JSON.parse(response);
      $.each(arr, function( index, value ) {

            //console.log(value.quantity);
            var res='<div id="'+"div"+"-"+value.id+'"><input type="hidden" id="'+value.id+'" value="'+value.sellingprice+'"><h3 class="card-title">'+value.product_name+'</h3><h4>Price :'+value.sellingprice+'</h4><table><tr><td> Warranty:</td><td> '+value.warranty_summary+' </td></tr><tr><td>  Highlights :</td><td> '+value.RAM+' | '+value.internal_storage+' ROM | Expandable Upto '+value.expandable_storage+'</td></tr><tr><tr><td>  Description :</td><td> '+value.product_description+' </td></tr><tr><td> Quantity:</td><td><div class="input-group"><span class="input-group-btn"><button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="" id="'+"minus"+"-"+value.id+'" onclick="subtract(this)"><span class="glyphicon glyphicon-minus"></span></button></span><input type="text" id="'+"quantity"+value.id+'" name="'+"quantity"+value.id+'" class="form-control input-number" value='+value.quantity+' min="1" max="100"><span class="input-group-btn"><button type="button" id="'+"plus"+"-"+value.id+'" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="" onclick="myFunction(this)"><span class="glyphicon glyphicon-plus"></span></button></span></div></td></tr><td>Net Amount:</td><td id="'+"net"+value.id+'"></td><td><button type="button" class="btn btn-danger"  id="'+"delete"+"-"+value.id+'" onclick="deletebtn(this)">Delete Product</button></td></table></div>';     
            
            $("form").append(res);
            $("form").append('<hr>');
            test=value.id;
            var price = $('#'+value.id+'').val();
            var quantity = $('#'+"quantity"+value.id+'').val();
            var total = price * quantity;
            netTotal=netTotal+total;
            $('#'+"net"+ value.id+'').text(total);
            
      
      });
     
     //console.log(netTotal);
     $("#totalcartvalue").html('<div><h3>Total Cart Value :'+netTotal+'</h3> </div>');
      
    }, 
    
   

  });

  
   
     
      
});