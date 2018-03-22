@extends('layouts.app')

@section('content')
<h3> Add New Vendors </h3>

  <div class="container">
    <div class="row main">
      <div class="main-login main-center">
        <form class=""  id="vendor-form" >
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Vendor Name</label>
            <div class="cols-sm-10">
                <input type="text" class="form-control" name="name" id="name"  placeholder="Enter Vendor Name" required/>
            </div>
            <span class="help-block" id="error"></span>
            
          </div>
          <div class="form-group ">
            <input type="button"  id="button" value="Add Vendor" class="btn btn-primary btn-lg btn-block login-button"/>
          </div>
          <input type="hidden" value="{{ csrf_token() }}" name="_token">
        </form>
      </div>
    </div>
  </div>

  <div id="myModal2" class="modal fade" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3>Details regarding Vendor</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div id="wrapper">
            
           <label for="yes_no_radio">Do you want to Add another Vendor ?</label>
            
             <p>
              <input type="button" id="check" value="Yes" name="button"/>
              
                <input type="button" id="nocheck" value="No" name="yes_no" />
                
              </p>     
              
          </div>    
        </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> 
      </div>
    </div>
    </div>


        
        <script src="assets/js/jquery-1.11.2.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="assets/js/validatevendor.js"></script>
<script>
  $(document).ready(function(){
    $('#button').click(function(){
      var vendorName = $('#name').val();
      $.ajax({
        url:'/Ecommerce/add-vendor',
        method:'POST',
        data:{'name':vendorName},
        success:function(response){
          alert(response);
           $("#myModal2").modal();
        },
      });
    });
    $('#check').click(function() {
       window.location='/Ecommerce/vendor';
         
});
     $('#nocheck').click(function() {
       window.location='/Ecommerce/admin';
         
});

  });
</script>

@endsection