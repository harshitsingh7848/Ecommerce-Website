// JavaScript Validation For Registration Page

$('document').ready(function()
{    
   // name validation
    var nameregex = /^[a-zA-Z ]+$/;
   
   $.validator.addMethod("validname", function( value, element ) {
       return this.optional( element ) || nameregex.test( value );
   }); 
    
   
   

   // valid mobile pattern
   var mregex = /^[6-9]\d{9}$/;
   
   $.validator.addMethod("validmobilenumber", function( value, element ) {
       return this.optional( element ) || mregex.test( value );
   });
   
   $("#buy_form1").validate({
     
    rules:
    {
    name: {
     required: true,
     validname: true,
     minlength: 3
    },
   
    bmobile: {
        required: true,
        validmobilenumber:true,
        minlength: 10,
        maxlength: 10
       },
    
    
     },
     messages:
     {
    name: {
     required: "Please Enter User Name",
     validname: "Name must contain only alphabets and space",
     minlength: "Your Name is Too Short"
       },
      
        bmobile: {
            required: "Please Enter Mobile Number",
            validmobilenumber: "Enter Valid Mobile Number",
            minlength:"Mobile Number is not of 10 digits"
             },
   
     },
     errorPlacement : function(error, element) {
     $(element).closest('.form-group').find('.help-block').html(error.html());
     },
     highlight : function(element) {
     $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
     },
     unhighlight: function(element, errorClass, validClass) {
     $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
     $(element).closest('.form-group').find('.help-block').html('');
     },
     
     submitHandler: function(form) {
                    form.submit();
                    ignoreTitle: true
     $("#buy_form1")[0].reset();
     
                }
     }); 
 })