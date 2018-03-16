@extends('homepage')
@section('title','Checkout Page')


@section('body')




<div class="product-big-title-area">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="product-bit-title text-center">
<h2>Check Out Page</h2>
</div>
</div>
</div>
</div>
</div>


<div class="single-product-area">
<div class="zigzag-bottom"></div>
<div class="container">
<div class="row">
<div class="col-md-4">                                    
</div>

<div class="col-md-8">
<div class="product-content-right">
<div class="woocommerce">

<form class=""  id="buy_form1" >
<span>Add a new Billing address</span>
<div class="woocommerce-billing-fields">
<h3>Billing  Address Details</h3>
<input type="hidden" value="1" name="addType" id="addType">
<input type="hidden" value="{{$userDetail[0]->empid }}" name="userId" id="userId">
<div class="form-group">
<label for="name" class="cols-sm-2 control-label">Your Name</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon "><i class="fa fa-user fa" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required/>
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group">
<label for="bmobile" class="cols-sm-2 control-label">Mobile Number</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"><i class="fas fa-phone" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="bmobile" id="bmobile"  placeholder="Enter your Mobile Number" required/>
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group">
<label for="bpin" class="cols-sm-2 control-label">Pincode</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<input type="text" class="form-control" name="bpin" id="bpin"  placeholder="Pincode"/>
</div>
<span class="help-block" id="error"></span>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="billingaddress" >Address</label>	
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<textarea placeholder="Area/Street" class="form-control" id="billingaddress" name="billingaddress" ></textarea> 
</div>
<span class="help-block" id="error"></span>                    
</div>
</div>

<div class="form-group">
<label for="bcity" class="cols-sm-2 control-label">City</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<input type="text" class="form-control" name="bcity" id="bcity"  placeholder="City" required="required"/>
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group">
<label for="bstate" class="cols-sm-2 control-label">State</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<input type="text" class="form-control" name="bstate" id="bstate"  placeholder="State" required="required"/>
</div>
<span class="help-block" id="error"></span>
</div>
</div>
<div class="form-group ">
<input type="button" name="bbutton" id="bbutton" value="Save and Deliver Here" class="btn btn-primary btn-lg btn-block login-button"/>
</div>
<input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>    

<input type="checkbox" id="check-address">
<span>Check this box if Shipping Address and Billing Address are the same.</span>
<a href="/Ecommerce/select-shipping-details?userId={{$userDetail[0]->empid }}">Add new Address </a>


<form class=""  id="ship_form1" method="get" action="select-shipping-details" >    
<div class="woocommerce-billing-fields">

<h3>Shipping  Address Details</h3>
<button type="submit" id="newBtn" name="newBtn">Shipping Address</button> 
<input type="hidden" value="2" name="addType" id="addType">
<input type="hidden" value="{{$userDetail[0]->empid }}" name="userId" id="userId">                         
<div class="form-group">
<label for="sname" class="cols-sm-2 control-label">Your Name</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon "><i class="fa fa-user fa" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="sname" id="sname"  placeholder="Enter your Name" />
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group">
<label for="smobile" class="cols-sm-2 control-label">Mobile Number</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"><i class="fas fa-phone" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="smobile" id="smobile"  placeholder="Enter your Mobile Number" />
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group">
<label for="spin" class="cols-sm-2 control-label">Pincode</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<input type="text" class="form-control" name="spin" id="spin"  placeholder="Pincode"/>
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label" for="shippingaddress" >Address</label>	
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<textarea placeholder="Area/Street" class="form-control" id="shippingaddress" name="shippingaddress" ></textarea> 
</div>
<span class="help-block" id="error"></span>                    
</div>
</div>

<div class="form-group">
<label for="scity" class="cols-sm-2 control-label">City</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<input type="text" class="form-control" name="scity" id="scity"  placeholder="City" />
</div>
<span class="help-block" id="error"></span>
</div>
</div>


<div class="form-group">
<label for="shstate" class="cols-sm-2 control-label">State</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"></span>
<input type="text" class="form-control" name="shstate" id="shstate"  placeholder="State" />
</div>
<span class="help-block" id="error"></span>
</div>
</div>

<div class="form-group ">
<input type="submit" name="sbutton"  id="sbutton" value="Save and Deliver Here" class="btn btn-primary btn-lg btn-block login-button"/>
</div>
<input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>


















</div>                       
</div>                    
</div>
</div>
</div>
</div>








<!-- Latest jQuery form server -->
<!-- <script src="https://code.jquery.com/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="assets/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="assets/js/main.js"></script>

<script>
$(document).ready(function(){
$('#change').click(function(e){
alert('scc');

/*   e.preventDefault();
$('#buy_form2').removeClass("d-none"); */
});
$('#bbutton').click(function(){
var data=$('#bmobile').val();
alert(data);
$.ajax({
url:'/Ecommerce/add-billing-details',
method:'get',
data: $('#buy_form1').serialize(),
success: function (response) {
alert(response);
}
}); 
});

$('input[type="checkbox"]').click(function(){
if($(this).prop("checked") == true){
fillDetails1();

}
});
$('#newBtn').click(function(){
var user_id = $('#userId').val();

$.ajax({     
url:'/Ecommerce/select-shipping-details',
data:{'userId':user_id},
method:'get', 
success: function (response) {
$('#displayAddresses').html(response);
}
});      
});

function fillDetails1()
{
$('#scity').val($('#bcity').val());
$('#shstate').val($('#bstate').val());
$('#spin').val($('#bpin').val());
$('#shippingaddress').val($('#billingaddress').val());
$('#smobile').val($('#bmobile').val());
$('#sname').val($('#bname').val());               
}

});

</script>
@endsection