// JavaScript Validation For Registration Page

$('document').ready(function()
{    
   // name validation
    var nameregex = /^[a-zA-Z ]+$/;
   
   $.validator.addMethod("validname", function( value, element ) {
       return this.optional( element ) || nameregex.test( value );
   }); 
    
   
   // valid email pattern
   var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   
   $.validator.addMethod("validemail", function( value, element ) {
       return this.optional( element ) || eregex.test( value );
   });

   // valid mobile pattern
   var mregex = /^[6-9]\d{9}$/;
   
   $.validator.addMethod("validmobilenumber", function( value, element ) {
       return this.optional( element ) || mregex.test( value );
   });
   
   $("#register-form").validate({
     
    rules:
    {
    name: {
     required: true,
     validname: true,
     minlength: 3
    },
    email: {
     required: true,
     validemail: true,
    },
    mobile: {
        required: true,
        validmobilenumber:true,
        minlength: 10,
        maxlength: 10
       },
    password: {
     required: true,
     minlength: 8,
     maxlength: 15
    },
    confirm: {
     required: true,
     equalTo: '#password'
    },
     },
     messages:
     {
    name: {
     required: "Please Enter User Name",
     validname: "Name must contain only alphabets and space",
     minlength: "Your Name is Too Short"
       },
       email: {
       required: "Please Enter Email Address",
       validemail: "Enter Valid Email Address",
        },
        mobile: {
            required: "Please Enter Mobile Number",
            validmobilenumber: "Enter Valid Mobile Number",
            minlength:"Mobile Number is not of 10 digits"
             },
    password:{
     required: "Please Enter Password",
     minlength: "Password at least have 8 characters"
     },
    cpassword:{
     required: "Please Retype your Password",
     equalTo: "Password Did not Match !"
     }
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
                    
     $("#register-form")[0].reset();
     
                }
     }); 
 })