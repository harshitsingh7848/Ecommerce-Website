@extends('homepage')

@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
@endsection

@section('body')


<h1> Add a new Address</h1>

<form id="addForm" method="post" action="add-shipping-details" >    
  
    
        <h3>Shipping  Address Details</h3>
          
        <input type="hidden" value="2" name="addType" id="addType">
        @if(!empty($userId))
        <input type="hidden" value="{{$userId}}" name="userId" id="userId">
        @endif
        
                          
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

            <div class="form-group">
                <label for="scountry" class="cols-sm-2 control-label">Country</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input type="text" class="form-control" name="scountry" id="scountry"  placeholder="State" />
                    </div>
                    <span class="help-block" id="error"></span>
                </div>
            </div>

            <div class="form-group ">
                    <input type="submit" name="sbutton"  id="sbutton" value="Save and Deliver Here" class="btn btn-primary btn-lg btn-block login-button"/>
            </div>
            <input type="hidden" value="{{ csrf_token() }}" name="_token">
        </form>


 




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="assets/js/jquery-1.11.2.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="assets/js/addShip.js">
/* $(document).ready(function(){
  $('#sbutton').click(function(){

alert(data);
$.ajax({
url:'/Ecommerce/add-shipping-details',
method:'get',
data: $('#addForm').serialize(),
success: function (response) {
alert(response);
}
}); 
});
}); */
</script>

@endsection

