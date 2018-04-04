// JavaScript Validation For Registration Page

$('document').ready(function()
{    
   // name validation
    var nameregex = /^[a-zA-Z ]+$/;
   
   $.validator.addMethod("validname", function( value, element ) {
       return this.optional( element ) || nameregex.test( value );
   }); 
    
   // pin validation
   var pinregex =/^[1-9][0-9]{5}$/;
   $.validator.addMethod("validpin", function( value, element ) {
       return this.optional( element ) || pinregex.test( value );
   });

   // var address pattern
   var addregex=/^[#.0-9a-zA-Z\s,-]+$/;

   $.validator.addMethod("validadd", function( value, element ) {
       return this.optional( element ) || addregex.test( value );
   });
   

   // valid mobile pattern
   var mregex = /^[6-9]\d{9}$/;
   
   $.validator.addMethod("validmobilenumber", function( value, element ) {
       return this.optional( element ) || mregex.test( value );
   });
   
   $("#myacc").validate({
     
    rules:
    {
    name: {
     required: true,
     validname: true,
     minlength: 3
    },
   
    contact: {
        required: true,
        validmobilenumber:true,
        minlength: 10,
        maxlength: 10
       },
    pincode:{
         required:true,
         validpin:true,
       },
       city:{
         required:true,
         validname:true,
       },
       state:{
         required:true,
         validname:true,
       },
       Country:{
         required:true,
         validname:true,
       },
       address:{
         required:true,
         validadd:true,
       },
    
     },
     messages:
     {
    name: {
     required: "Please Enter User Name",
     validname: "Name must contain only alphabets and space",
     minlength: "Your Name is Too Short"
       },
      
        contact: {
            required: "Please Enter Mobile Number",
            validmobilenumber: "Enter Valid Mobile Number",
            minlength:"Mobile Number is not of 10 digits"
             },
             pincode:{
               required:"Please Enter Pincode",
               validpin:"Enter Valid Pincode",
             },
             city:{
               required:"Please Enter City",
               validname:"City must contain only alphabets and space",
             },
             state:{
               required:"Please Enter State",
               validname:"State must contain only alphabets and space",
             },
             Country:{
               required:"Please Enter Country",
               validname:"Country must contain only alphabets and space",
             },
             address:{
               required:"Please Enter Your Address",
               validname:"Please Enter Valid Address",
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
     $("#myacc")[0].reset();
     
                }
     }); 
 })