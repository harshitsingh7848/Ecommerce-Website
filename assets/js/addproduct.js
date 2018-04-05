// JavaScript Validation For Add Products Page

$('document').ready(function()
{  
    var nameregex = /^[a-zA-Z ]+$/;
    $.validator.addMethod("validname", function( value, element ) {
        return this.optional( element ) || nameregex.test( value );
    });   

    var price = /^(\d*([.,](?=\d{3}))?\d+)+((?!\2)[.,]\d\d)?$/;
    $.validator.addMethod("validprice", function( value, element ) {
        return this.optional( element ) || price.test( value );
    });

    var weight = /^(0|[1-9]\d*)(,\d+)?$/;
    $.validator.addMethod("validweight", function( value, element ) {
        return this.optional( element ) || weight.test( value );
    });

    var processorType = /^[a-zA-Z0-9_]*$/;
    $.validator.addMethod("validprocessor", function( value, element ) {
        return this.optional( element ) || processorType.test( value );
    });   

    var networktype =/^[A-Z0-9]+((,\s|-)[A-Z0-9]+)*[A-Z0-9]+$/;
    $.validator.addMethod("validnet", function( value, element ) {
        return this.optional( element ) || networktype.test( value );
    });  
   
   $("#productForm").validate({
     
    rules:
    {
    product_name: {
     required: true,
     validprocessor: true,
    },
    product_description:{
        required: true,
    },
    product_aprice: {
     required: true,
     validprice: true
    },
    product_sprice: {
        required: true,
        validprice: true
       },
    product_weight: {
        required: true,
        validweight:true,
       },
    warranty: {
     required: true,
     maxlength: 30
    },
    os: {
     required: true,
     validname: true,
    },
    processtype: {
        required: true,
        validprocessor: true,
       },
       pcore: {
        required: true,
        validprocessor: true,
       },
       ram: {
        required: true,
        validprocessor: true,
       },
       istorage: {
        required: true,
        validprocessor: true,
       },
       estorage: {
        required: true,
        validprocessor: true,
       },
       dsize: {
        required: true,
        validprocessor: true,
       },
       resolution: {
        required: true,
        validprocessor: true,
       },
       ntype: {
        required: true,
        validnet: true,
       },
       snetworks: {
        required: true,
        validnet: true,
       },
       gprs: {
        required: true,
        validnet: true,
       },
       cfeatures: {
        required: true,
        validprocessor: true,
       },
       scfeatures: {
        required: true,
        validprocessor: true,
       },
       battcapac: {
        required: true,
        validprocessor: true,
       },
       simsize: {
        required: true,
        validprocessor: true,
       }
    
       
       
     },
     messages:
     {
    product_name: {
     required: "Please Enter Product Name",
     validprocessor: "Name must contain only alphabets ,space and numeric",
       },
       product_description: {
       required: "Please Enter Product Description",
        },
        product_sprice: {
            required: "Please Enter Selling Price",
            validprice: "Enter Valid Price",
             },
             product_aprice: {
                required: "Please Enter Actual Price",
                validprice: "Enter Valid Price",
                 },
                 product_weight: {
                required: "Please Enter product Weight",
                validprice: "Enter Valid weight",
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
     $("#product-form")[0].reset();
     alert('Successfully Added Product');
                }
     }); 
 })