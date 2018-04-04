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
            <form method="POST" action="updateaccount">
            @if(!empty($accountDetails))
            @foreach($accountDetails as $a)
                <div class="row">
                
                    <div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                    
                    <div>
                    <label for="name" >Name</label>
                    <input type="text" value="{{$a->empname}}" name="name" id="name">
                    <br>
                    <label for="email" >Email</label>
                    <input type="text" value="{{$a->emp_email}}" name="email" id="email">
                    <br>
                    <label for="contact" >Contact</label>
                    <input type="text" value="{{$a->emp_mobile}}" name="contact" id="contact">
                    <br>
                    <label for="address">Address</label>
                    <input type="text" value="{{$a->address}}" name="address" id="address">
                    <br>
                    <label for="city">City</label>
                    <input type="text" value="{{$a->city}}" name="city" id="city">
                    <br>
                    <label for="state">State</label>
                    <input type="text" value="{{$a->state}}" name="state" id="state">
                    <br>
                    <label for="pincode">Pincode</label>
                    <input type="text" value="{{$a->Pincode}}" name="pincode" id="pincode">
                    <br>
                    <label for="Country">Country</label>
                    <input type="text" value="{{$a->Country}}" name="Country" id="Country">   
                    </div>    
                
                    <div>
                    <button type="submit" id="btn" name="btn">Update Account</button>
                    </div>    
                              
                           
                            
                        <!-- Split button -->
                      
                    </div>
                    @endforeach
                    @endif
                </div>
                </form>   
            </div>
        </div>
    </div>
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection