$(document).ready(function(){
  
    $('#btn').click(function(){
      
      var shippingAddress1="";
       if($('#{{$address[0]->id}}').prop("checked") == true){
        shippingAddress1= JSON.parse("{{$address[0]->id}}"); 
       }
       else{
        shippingAddress1= JSON.parse("{{$userAddress[0]->id}}"); 
       }
      $('#shipId').val(shippingAddress1);
       
          
    });
  });