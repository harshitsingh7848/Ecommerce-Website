$(document).ready(function(){
    $('#button').click(function(){
      var vendorName = $('#name').val();
      $.ajax({
        url:'/Ecommerce/add-vendor',
        method:'POST',
        data:{'name':vendorName},
        success:function(response){
          alert(response);
           $("#myModal2").modal();
        },
      });
    });
    $('#check').click(function() {
       window.location='/Ecommerce/vendor';
         
});
     $('#nocheck').click(function() {
       window.location='/Ecommerce/admin';
         
});

  });