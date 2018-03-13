@extends('homepage')

@section('head')


@endsection

@section('body')


<div class="container">
			<div class="row main">
				<div class="main-login main-center">
       <div class="card col-md-6">
  <div class="card-header">
    Delivery Address
  </div>
  <div class="card-body ">
    @if(!empty($userAddress))
    <h5 class="card-title">Add a new Delivery Address</h5>
    <form class=""  id="register-form" method="post" action="register">
						
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
							<label for="Mobile" class="cols-sm-2 control-label">Mobile Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fas fa-phone" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="mobile" id="mobile"  placeholder="Enter your Mobile Number" required/>
								</div>
								<span class="help-block" id="error"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="pin" class="cols-sm-2 control-label">Pincode</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input type="text" class="form-control" name="pin" id="pin"  placeholder="Pincode"/>
								</div>
								<span class="help-block" id="error"></span>
							</div>
						</div>
            <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="address" >Address</label>	
                    	<div class="cols-sm-10">
								      <div class="input-group">
									    <span class="input-group-addon"></span>
                      <textarea placeholder="Area/Street" class="form-control" id="address" name="address" ></textarea> 
                      </div>
                    <span class="help-block" id="error"></span>                    
                  </div>
                  </div>

            <div class="form-group">
							<label for="city" class="cols-sm-2 control-label">City</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input type="text" class="form-control" name="city" id="city"  placeholder="City" required="required"/>
								</div>
								<span class="help-block" id="error"></span>
							</div>
						</div>

            <div class="form-group">
							<label for="state" class="cols-sm-2 control-label">State</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input type="text" class="form-control" name="state" id="state"  placeholder="State" required="required"/>
								</div>
								<span class="help-block" id="error"></span>
							</div>
						</div>

						<div class="form-group ">
								<input type="submit"  id="button" value="Save and Deliver Here" class="btn btn-primary btn-lg btn-block login-button"/>
						</div>
						<input type="hidden" value="{{ csrf_token() }}" name="_token">
					</form>
          @else
           <a href="" id="change" class="btn btn-primary">Change</a>
          <form class="d-none"  id="buy_form2" method="post" action="register">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon "><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" value="{{$userDetail[0]->empname}}" name="name" id="name"  placeholder="Enter your Name" required/>
								</div>
								<span class="help-block" id="error"></span>
							</div>
						</div>

            	<div class="form-group">
							<label for="Mobile" class="cols-sm-2 control-label">Mobile Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fas fa-phone" aria-hidden="true"></i></span>
									<input type="text" class="form-control" value="{{$userDetail[0]->emp_mobile}}" name="mobile" id="mobile"  placeholder="Enter your Mobile Number" required/>
								</div>
								<span class="help-block" id="error"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="pin" class="cols-sm-2 control-label">Pincode</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input type="text" class="form-control" value="{{$userAddress[0]->Pincode }}" name="pin" id="pin"  placeholder="Pincode"/>
								</div>
								<span class="help-block" id="error"></span>
							</div>
						</div>
            <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="address" >Address</label>	
                    	<div class="cols-sm-10">
								      <div class="input-group">
									    <span class="input-group-addon"></span>
                      <textarea placeholder="Area/Street" class="form-control" id="address" name="address" >
                      {{$userAddress[0]->address}}
                      </textarea> 
                      </div>
                    <span class="help-block" id="error"></span>                    
                  </div>
                  </div>

            <div class="form-group">
							<label for="city" class="cols-sm-2 control-label">City</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input type="text" value="$userAddress[0]->city" class="form-control" name="city" id="city"  placeholder="City" required="required"/>
								</div>
								<span class="help-block" id="error"></span>
							</div>
						</div>

            <div class="form-group">
							<label for="state" class="cols-sm-2 control-label">State</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"></span>
									<input type="text" value="$userAddress[0]->state" class="form-control" name="state" id="state"  placeholder="State" required="required"/>
								</div>
								<span class="help-block" id="error"></span>
							</div>
						</div>

						<div class="form-group ">
								<input type="submit"  id="button" value="Save and Deliver Here" class="btn btn-primary btn-lg btn-block login-button"/>
						</div>
						<input type="hidden" value="{{ csrf_token() }}" name="_token">
					</form>

          @endif
  </div>
</div>
    
				
				</div>
        <div class="card col-md-6">
  <h5 class="card-header">Order Summary</h5>
  <div class="card-body">   
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card col-md-6">
  <h5 class="card-header">Payment Options</h5>
  <div class="card-body"> 
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
			</div>
		</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
  $('#change').click(function(e){
    e.preventDefault();
    $('#buy_form2').removeClass("d-none");
  });
  $('')
});
</script>
    @endsection