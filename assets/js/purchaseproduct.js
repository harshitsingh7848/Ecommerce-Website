$(document).ready(function(){
 
var prices=[];
var quant=[];
var total=[];
var totalamount=0;
$(" td[name='price[]']").each(function ()
             {
              var productId=(($(this).attr('id')));
              var price=($('#'+productId).text());
              prices.push(price);
              
              }); 
               $(" td[name='quantity[]']").each(function ()
             {
              var productId=(($(this).attr('id')));
               var quantity=($('#'+productId).text());
               quant.push(quantity);
            }); 
            

            for(var i=0;i<prices.length;i++)
            {
              total[i]=prices[i]*quant[i];
            }
              //console.log(total);
              var j=0;
              $(" td[name='total[]']").each(function ()
             {
              var productId=(($(this).attr('id')));
              $('#'+productId).text(total[j]);
              totalamount=totalamount+total[j];
               j++;
            }); 
           


$('#totalamount').text(totalamount); 




});