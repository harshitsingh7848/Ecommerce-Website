// JavaScript Validation For Add Products Page
$(document).ready(function()
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

    var processorType = /^[a-zA-Z 0-9_]*$/;
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
        validweight:true
       },
    product_color: {
        required: true,
        validname:true
       },   
    warranty: {
     required: true,
     maxlength: 30
    },
    os: {
     required: true,
     validname: true
    },
    processtype: {
        required: true,
        validprocessor: true
       },
       pcore: {
        required: true,
        validprocessor: true
       },
       ram: {
        required: true,
        validprocessor: true
       },
       istorage: {
        required: true,
        validprocessor: true
       },
       estorage: {
        required: true,
        validprocessor: true
       },
       dsize: {
        required: true,
        validprocessor: true
       },
       resolution: {
        required: true,
        validprocessor: true
       },
       ntype: {
        required: true,
        validnet: true
       },
       snetworks: {
        required: true,
        validnet: true
       },
       gprs: {
        required: true,
        validnet: true
       },
       cfeatures: {
        required: true,
        validprocessor: true
       },
       scfeatures: {
        required: true,
        validprocessor: true
       },
       battcapac: {
        required: true,
        validprocessor: true
       },
       simsize: {
        required: true,
        validprocessor: true
       }  
     },
     messages:
     {
    product_name: {
     required: "Please Enter Product Name",
     validprocessor: "product Name must contain only alphabets ,space and numeric",
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
        validweight: "Enter Valid weight",
        },
    product_color: {
        required: "Please Enter product color",
        validname: "color name can only have spaces and letters",
        },
    warranty: {
    required: "Please enter warranty details",
    maxlength:"Length should not be more than 30",   
        },
    os: {
    required:"Please enter os name",
    validname:"OS name must only contain alphabets and spaces",   
        },
    processtype: {
    required:"Please enter processor name" ,
    validprocessor:"Enter valid processor name",
        },
    pcore: {
    required:"Please enter processor core name",
    validprocessor: "Please enter valid processor core name"
        },
    ram: {
    required:"Please enter RAM configuration",
    validprocessor: "RAM should contain numerics and alphabets only"
    },
    istorage: {
    required:"Please enter internal storage details",
    validprocessor: "Internal storage should contain alphabets and numerics only"
    },
    estorage: {
    required: "Please enter expandable storage details",
    validprocessor: "Expandable storage should contain alphabets and numerics only"
    },
    dsize: {
    required: "Please enter display size",
    validprocessor: "Display size should contain alphabets and numerics only"
    },
    resolution: {
    required:"Please enter resolution",
    validprocessor: "Resolution details should contain alphabets and numerics only"
    },  
    ntype: {
    required: "Please enter network type",
    validnet: "Network Type should contain letters spaces and numerics  only"
    },
    snetworks: {
    required: "Please Enter Supported Networks",
    validnet: " Supported Networks should contain letters spaces and numerics only"
    },
    gprs: {
    required: "Enter gprs",
    validnet: "gprs should contain letters spaces and numerics only"
    },   
    cfeatures: {
    required: "Please enter primary camera feature",
    validprocessor: "Camera feature should contain letters spaces and numerics only"
    },
    scfeatures: {
    required: "Please enter secondary camera features",
    validprocessor: "Secondary Camera feature should contain letters spaces and numerics only"
    },
    battcapac: {
    required: "Please enter battery capacity",
    validprocessor: "Battery feature should contain letters spaces and numerics only"
    },
    simsize: {
    required: "Please enter sim size",
    validprocessor: "Sim Size should contain letters spaces and numerics only"
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
     $("#product-form")[0].reset();
     alert('Successfully Added Product');
                }
     }); 
 })