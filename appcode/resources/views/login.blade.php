@extends('layouts.sample')

	@section('tile','Login Page')	
	@section('head')
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="assets/css/login.css" rel="stylesheet">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@endsection
@section('body')

	<div class="container">    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue to GadgetManiac</h1>
            <div class="account-wall">
                
                <form class="form-signin" method="post" action="verification" >
									
								<img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                <input type="text" class="form-control" name="username" placeholder="Username" required >
                <input type="password" class="form-control" name="pass" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Forgot Password? </a><span class="clearfix"></span>
								<input type="hidden" value="{{ csrf_token() }}" name="_token">	
							  </form>
            </div>
            <a href="{{ url('signup') }}" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>


@endsection
