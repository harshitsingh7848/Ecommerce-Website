$(document).ready(function(){
  
    $('#btn').click(function(){
     
      var shippingAddress1="";
        
          
            $(" input[name='checkbox[]']:checked").each(function ()
             {
              checkid=($(this).attr('id'));
              shippingAddress1=checkid;
            }); 
         
        
        
    
       if($('.checkbox1').prop("checked") == true){
         var checkid=$('.checkbox1').attr('id');
        shippingAddress1=checkid;
       }
       
      $('#shipId').val(shippingAddress1);
       
          
    });
     console.log($('#shipId').val()); 

     $('.delete').click(function(){
      var id=$(this).attr('id');
      
        $.ajax({
        type: 'get',
        url: '/Ecommerce/deleteAddress',
        data: {'id':id},
        success:function(response){
            alert(response);
            
        },
    });  
     });
  });