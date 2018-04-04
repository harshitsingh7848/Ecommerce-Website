@extends('homepage')
@section('head')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link href="assets/css/myaccount.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->
@endsection

@section('body')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <form id="myacc" method="POST" action="updateaccount">
            @if(!empty($accountDetails))
            @foreach($accountDetails as $a)
                <div class="row">
                
                    <div class="col-sm-6 col-md-4">
                        <img src="assets/img/userimage.png" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                    
                    
                    <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Name</label>
                    <div class="cols-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa-user fa" aria-hidden="true"></i></span>
                    <input type="text" value="{{$a->empname}}" class="form-control" name="name" id="name"  placeholder="Enter your Name" required/>
                    </div>
                    <span class="help-block" id="error"></span>
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Email</label>
                    <div class="cols-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa-mobile fa" aria-hidden="true"></i></span>
                    <input type="text" value="{{$a->emp_email}}"class="form-control" name="email" id="email"  placeholder="Enter your Email" required/>
                    </div>
                    <span class="help-block" id="error"></span>
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="contact" class="cols-sm-2 control-label">Contact</label>
                    <div class="cols-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa- fa" aria-hidden="true"></i></span>
                    <input type="text" value="{{$a->emp_mobile}}"class="form-control" name="contact" id="contact"  placeholder="Enter your Contact Number" required/>
                    </div>
                    <span class="help-block" id="error"></span>
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="address" class="cols-sm-2 control-label">Address</label>
                    <div class="cols-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa- fa" aria-hidden="true"></i></span>
                    <input type="text" value="{{$a->address}}"class="form-control" name="address" id="address"  placeholder="Enter your Address" required/>
                    </div>
                    <span class="help-block" id="error"></span>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="city" class="cols-sm-2 control-label">City</label>
                    <div class="cols-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa- fa" aria-hidden="true"></i></span>
                    <input type="text" value="{{$a->city}}"class="form-control" name="city" id="city"  placeholder="Enter your City" required/>
                    </div>
                    <span class="help-block" id="error"></span>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="state" class="cols-sm-2 control-label">State</label>
                    <div class="cols-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa- fa" aria-hidden="true"></i></span>
                    <input type="text" value="{{$a->state}}"class="form-control" name="state" id="state"  placeholder="Enter your State" required/>
                    </div>
                    <span class="help-block" id="error"></span>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="pincode" class="cols-sm-2 control-label">Pincode</label>
                    <div class="cols-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa- fa" aria-hidden="true"></i></span>
                    <input type="text" value="{{$a->Pincode}}"class="form-control" name="pincode" id="pincode"  placeholder="Enter your pincode" required/>
                    </div>
                    <span class="help-block" id="error"></span>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="Country" class="cols-sm-2 control-label">Country</label>
                    <div class="cols-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon "><i class="fa fa- fa" aria-hidden="true"></i></span>
                    <input type="text" value="{{$a->Country}}"class="form-control" name="Country" id="Country"  placeholder="Enter your Country" required/>
                    </div>
                    <span class="help-block" id="error"></span>
                    </div>
                    </div>
                
                    <div>
                    <button type="submit" id="btn" name="btn">Update Account</button>
                    </div>    
                   
                    </div>
                    @endforeach
                    @endif
                </div>
                </form>   
            </div>
        </div>
    </div>
</div>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="assets/js/jquery-1.11.2.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/myaccountvalidate.js"></script>

@endsection