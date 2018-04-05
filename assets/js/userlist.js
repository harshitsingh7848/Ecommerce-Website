$(document).ready(function(){
    $('#example').DataTable();

  var vendorName="";
  var vendorRole="";
    $('#vendor').prop('disabled',true);
    $('#vendorNames').hide();
    $('#buttons').hide();
    $('#divbtn').hide();
    $('#myTable').hide();
    $('#privilege').prop('disabled',true);
 $(".usertype").change(function(){
  var concat = $(this).val();
  
   $(".modal-body #concatemailusertype").val( concat );
   
   /* $(".tab").tabs({ active: 1 }); */
    $("#myModal").modal();  
});  
$('#initial').click(function(){
  $('#label').show();
});



  $('#check').click(function() {
   var result= $('#concatemailusertype').val();
    var checkArray=result.split("-");
  if(checkArray[0]=="Vendor"){
    $('#vendor').prop('disabled',false);
  
    
  } 
  else{
    $('#privilege').prop('disabled',false);
    
    
  }
});
$('#privilege').click(function(){
$('#myTable').show();
$('#vendorNames').hide();
    $('#label').hide();
});

$('#vendor').click(function(){
  $('#label').hide();
  $('#vendorNames').show();
  $('#divbtn').hide();
  $(".vname").change(function(){
    
     vendorName = $(this).val();
    $('#inputVendor').val(vendorName);
   
    
    
     
  });

  $(".vrole").change(function(){
    
     vendorRole = $(this).val();
     
     if(vendorRole=="Admin"){
      $.ajax({
      url:"/Ecommerce/check-vendor-admin",
      method:"POST",
      data:{'vendorName':vendorName},
      success:function(response){
        if(response==1){
        alert('Admin already exists ');
        }
        else{
          $('#buttons').show();
        }
        
      },
      });
      }
      else{
        $('#buttons').show();
      }
    
     
  });
});
$('#previousbtn').click(function(){
    $('#vendorNames').hide();
    $('#buttons').hide();
    $('#divbtn').show();
    
});
$('#previousbtn2').click(function(){
  if(vendorName=="")
  {
    $('#vendorNames').hide();
    $('#buttons').hide();
    $('#divbtn').show();
    $('#vendor').prop('disabled',true);
    $('#privilege').prop('disabled',true);
    $('#myTable').hide();
  }
  else{
    $('#privilege').prop('disabled',true);
    $('#myTable').hide();
    $('#vendorNames').show();
    $('#buttons').show();
  }
});
$('#nextbtn').click(function(){
  
   $('#privilege').prop('disabled',false);
    $('#vendorNames').hide();
    $('#label').hide();
    $('#myTable').show();
    $('#buttons').hide();
});
$('#nextbtn2').click(function(){
  if(vendorName==""){
    $('#label').hide();
    $('#divbtn').hide();
    $('#privilege').prop('disabled',false);
    $('#myTable').show();
  }
  else{
    $('#vendorNames').show();
    $('#label').hide();
    $('#divbtn').hide();
    $('#buttons').show();
  }
    
});







$('.btn').click(function(){
var buttonId=$(this).attr('id');
var parentId=$(this).closest('td').parent().attr('id');

var checked = '';
$("#"+parentId+" input[name='checkbox[]']:checked").each(function ()
{
    checked += parseInt($(this).val());
checked +=' ';

});

var moduleId = buttonId;

var concatUserRole =$('#concatemailusertype').val();
console.log(vendorName);
if(!(vendorName))
{
 $.ajax({
url:'/Ecommerce/add-privileges',
method:'POST',
data:{'checkId':checked,'concatUserRole':concatUserRole,'moduleId':moduleId},
success:function(response){
    alert(response);
},
}); 
}
else{
  $.ajax({
url:'/Ecommerce/add-privileges',
method:'POST',
data:{'checkId':checked,'concatUserRole':concatUserRole,'moduleId':moduleId,'vendorName':vendorName,
'vendorRole':vendorRole},
success:function(response){
    alert(response);
},
});   
}

});


});

$(document).ready(function(){
 $('#nocheck').click(function(){
   $("#myModal").modal('toggle');
 })
});