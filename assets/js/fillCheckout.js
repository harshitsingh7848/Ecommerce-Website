$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
    if($(this).prop("checked") == true){
    fillDetails1();
    
    }
    });
    
    
    function fillDetails1()
    {
    $('#scity').val($('#bcity').val());
    $('#shstate').val($('#bstate').val());
    $('#spin').val($('#bpin').val());
    $('#shippingaddress').val($('#billingaddress').val());
    $('#smobile').val($('#bmobile').val());
    $('#sname').val($('#name').val());   
    $('#scountry').val($('#bcountry').val());               
    }
    
    });
    