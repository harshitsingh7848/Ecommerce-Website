@extends('layouts.app')

@section('head')

<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Website CSS style -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

		<!-- Website Font style -->
		<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/style1.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

@endsection

@section('content')

<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				@if(!empty($name))
				<form class=""  id="register-form" method="post" action="admin/register">
				@else
					<form class=""  id="register-form" method="post" action="register">
						@endif
						<input type="hidden" value={{$selectId}} id="selectId" name="selectId">
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
								
    					@if ($errors->has('mobile'))
    						<div class="error">{{ $errors->first('mobile') }}</div>
							@endif
									
								<span class="help-block" id="error"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
								
    						@if ($errors->has('email'))
    							<div class="error">{{ $errors->first('email') }}</div>
								@endif
									
								<span class="help-block" id="error"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required="required"/>
								</div>
								<span class="help-block" id="error"></span>
							</div>
						</div>

							<div class="form-group">
								<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
									</div>
									<span class="help-block" id="error"></span>
								</div>
							</div>

						<div class="form-group ">
								<input type="submit"  id="button" value="Register" class="btn btn-primary btn-lg btn-block login-button"/>
						</div>
						<input type="hidden" value="{{ csrf_token() }}" name="_token">
					</form>
				</div>
			</div>
		</div>
	
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	
		 <script src="assets/js/jquery-1.11.2.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
    
	<script src="assets/js/register.js"></script>


@endsection