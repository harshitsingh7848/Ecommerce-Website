$(document).ready(function(){
    /* localStorage.removeItem('count');
  localStorage.removeItem('product'); */  
  var product=new Array();
  $('#cart').click(function(){
     var quantity=1;
     var check=0;
     var count=0;
     var productId =$('#productwId').val();
    //var id ="p"+productId;
      if(localStorage.getItem('product')){   
      var productInfo = localStorage.getItem('product');
      var productsDetail = JSON.parse(productInfo);
      //alert(productsDetail.length);
        
    //localStorage.removeItem('product');  
        for(var i=0;i<productsDetail.length;i=i+2){
         
        if(productsDetail[i]==productId){
          productsDetail[i+1]=productsDetail[i+1]+quantity;
          check=1;
        }
      }
      if(check==0){
        productsDetail.push(productId);
        productsDetail.push(quantity);
        //count=count+quantity; 
      } 
      localStorage.setItem('product',JSON.stringify(productsDetail)); 
      for(var i=0;i<productsDetail.length;i++){
      //console.log(productsDetail[i]);
    }  
  } 
    else{
      product.push(productId);
      product.push(quantity);
      localStorage.setItem('product',JSON.stringify(product));      
    } 
    if(localStorage.getItem('product')){   
      var productInfo = localStorage.getItem('product');
      var productsDetail = JSON.parse(productInfo);
      alert(productsDetail.length);
       console.log(productsDetail) ;
    //localStorage.removeItem('product');  
       for(var i=1;i<productsDetail.length;i=i+2){
         count=count+productsDetail[i];
       }
       
    }
    localStorage.setItem('count',count);
    $('.product-count').text(count);  
  });
});