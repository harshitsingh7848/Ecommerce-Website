@extends('layouts.app')
		
@section('title','Admin Dashboard')

    @section('head')
       
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- font awesome icons CSS -->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <!-- morris charts css -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">    

    <!-- Custom styles for this template -->
    <!-- <link href="assets/css/simple-sidebar.css" rel="stylesheet"> -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/jumbotron.css" rel="stylesheet">    
    
	@endsection

    
	
    @section('body')
    

        <!-- Sidebar -->
      
        <!-- /#sidebar-wrapper -->
    <!-- Nav bar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" id="menu-toggle"> <i class="fas fa-bars"></i> Gadget Maniac</a>
                
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
              
                @if (!empty($name))
                    
                    <li><a class="nav-link" href="{{ url('/logout') }}">Logout</a></li>      
                @endif
            </ul>
           
        </div>
    </nav>

        <!-- Page Content -->
        <div class="container">
            <div class="container-fluid">
                <div class="jumbotron">
                    <h1 class="">Add New Products</h1>
                    <hr class="my-4">
                </div>
              <form class=""  id="productForm" >
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="product_name" >Product Name</label>	
                  <input class="col-sm-10 form-control"  class="col-sm-10 form-control" type="text"name="product_name" id="product_name"  placeholder="Enter Product Name"  />
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="product_description" >Product Description</label>	
                    <textarea id="product_description" class="col-sm-10 form-control" name="product_description" >
                    </textarea>  
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="product_sprice" >Product Selling Price</label>	
                      <input class="col-sm-10 form-control" type="text"  name="product_sprice" id="product_sprice"  placeholder="Enter Product Selling Price"  />
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="product_aprice" >Product Actual Price</label>	
                      <input class="col-sm-10 form-control" type="text"  name="product_aprice" id="product_aprice"  placeholder="Enter Product Actual Price"  />
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="product_weight" >Product Weight</label>	
                      <input class="col-sm-10 form-control" type="text"  name="product_weight" id="product_weight"  placeholder="Enter Product weight"  />
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="product_color" >Product Color</label>	
                      <input class="col-sm-10 form-control" type="textarea"  name="product_color" id="product_color"  placeholder="Enter Product Color"  />
                </div>
                 <div class="form-group row"> 
                   <label class="col-sm-2 col-form-label" for="file" > Upload Product Image</label>	
                        <input class="col-sm-10 form-control" type="file" name="file" id="file">
                </div>
                <!-- <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="box" >What is in Box?</label>	
                      <input class="col-sm-10 form-control" type="text"  name="box" id="box"  placeholder="what is in box "  />
                </div> -->
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="warranty" >Warranty Details</label>	
                      <input class="col-sm-10 form-control" type="text"  name="warranty" id="warranty"  placeholder="warranty of product "  />
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="os" >Operating System</label>	
                      <input class="col-sm-10 form-control" type="text"  name="os" id="os"  placeholder="OS of the product  "  />
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="processtype" >Processor Type</label>	
                      <input class="col-sm-10 form-control" type="text"  name="processtype" id="processtype"  placeholder="Processor of the product  "  />
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="pcore" >Processor Core</label>	
                      <input class="col-sm-10 form-control" type="text"  name="pcore" id="pcore"  placeholder="Processor Core of the product  "  />
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="ram" >RAM</label>	
                      <input class="col-sm-10 form-control" type="text"  name="ram" id="ram"  placeholder="RAM of the product  "  />
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="istorage" >Internal Storage</label>	
                      <input class="col-sm-10 form-control" type="text"  name="istorage" id="istorage"  placeholder="Internal Storage of the product  "  />
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="estorage" >Expandable Storage</label>	
                      <input class="col-sm-10 form-control" type="text"  name="estorage" id="estorage"  placeholder="Expandable Storage of the product  "  />
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="dsize" >Display Size</label>	
                      <input class="col-sm-10 form-control" type="text"  name="dsize" id="dsize"  placeholder="Display Size of the product  "  />
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="resolution" >Resolution</label>	
                      <input class="col-sm-10 form-control" type="text"  name="resolution" id="resolution"  placeholder="Resolution of the product  "  />
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="dcolors" >Display Colors</label>	
                  <input class="col-sm-10 form-control" type="text"  name="dcolors" id="dcolors"  placeholder="Display Colors of the product  "  />
                  
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="dim" >Dimension</label>	
                      <input class="col-sm-10 form-control" type="text"  name="dim" id="dim"  placeholder="Dimension of the product  "  />
                </div>

                 <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="ntype" >Network Type</label>	
                      <input class="col-sm-10 form-control" type="text"  name="ntype" id="ntype"  placeholder="Network Type of the product  "  />
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="snetworks" >Supported Networks</label>	
                      <input class="col-sm-10 form-control" type="text"  name="snetworks" id="snetworks"  placeholder="Supported Networks of the product  "  />
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="gprs" >GPRS</label>	
                      <input class="col-sm-10 form-control" type="text"  name="gprs" id="gprs"  placeholder="Gprs setting of the product  "  />
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="cfeatures" > Primary Camera Pixel</label>	
                      <input class="col-sm-10 form-control" type="text"  name="cfeatures" id="cfeatures"  placeholder=" Primary Camera Pixel setting of the product  "  />
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="scfeatures" > Secondary Camera Pixel</label>	
                      <input class="col-sm-10 form-control" type="text"  name="scfeatures" id="scfeatures"  placeholder=" Secondary Camera Pixel setting of the product  "  />
                </div>   
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="battcapac" > Battery Capacity</label>	
                      <input class="col-sm-10 form-control" type="text"  name="battcapac" id="battcapac"  placeholder="  Battery Capacity of the product  "  />
                </div>    
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="simsize" > Sim Size</label>	
                      <input class="col-sm-10 form-control" type="text"  name="simsize" id="simsize"  placeholder="   Sim Size of the product  "  />
                </div>  

               
                 <div>
                 <label for="show_users"> Show Products to Users</label>
                     <!--  <input  type="checkbox" value="show_user" name="show_user" id="show_user"/> -->
                     <input type="checkbox" name="show_users" value="1" id="show_users" >
                </div>
                <div>
                 <label for="show_backend"> Show Products to Backend</label>
                     <!--  <input  type="checkbox" value="show_user" name="show_user" id="show_user"/> -->
                     <input type="checkbox" name="show_backend" value="1" id="show_backend" >
                </div>
                
                
                <div class="form-group row">
                  <input type="submit" class="btn btn-success" name="btn" value="add product" id="btn"/>
                </div>
              </form>
              <div id="addbtn">
              </div>
            </div>
        </div>
        <!-- /#container -->

          <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> -->
        <div class="modal-body">
          <div id="wrapper">
            <label  for="yes_no_radio">Do you want to add Another Product ?</label>
            
             <p>
              <input type="button" id="check" value="Yes" name="button"/>
              
                <input  type="button" id="nocheck" value="No" name="yes_no" />
              </p>
          </div>    
        </div>
        </div>    
        </div>
        </div>

   
    <!-- /#wrapper -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/addproduct.js" ></script>
    <script>

    $(document).ready(function() {
      $('#productForm').submit(function(e){
        
        e.preventDefault();

        


       
  /* var ext = name.split('.').pop().toLowerCase();
  alert(name);
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
   if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
    */
    alert('jdkd');
$.ajax({
  type: 'get',
  url: '/Ecommerce/add-product',
  data:$(this).serialize(),
  processData: false,
  contentType: false,
  cache: false,
  success: function (response) {
    alert(response);
  }
});


});
});
    
      //TODO remove these with awesome formdata
    /*  $(document).ready(function(){
         $('#btn').click(function(){

              var productName = $('#product-name').val();
             var productDescription =   $('#product-description').val();
             var sp = $('#product-sprice').val();
             var ap = $('#product-aprice').val();
             var weight =   $('#product-weight').val();
             var color =   $('#product-color').val();
             var inbox = $('#box').val();
             var warranty = $('#warranty').val();
             var os =   $('#os').val();
              var processtype = $('#processtype').val();
             var processcore =   $('#pcore').val();
             var ram = $('#ram').val();
             var istorage = $('#istorage').val();
             var estorage =   $('#estorage').val();
             var displaysize = $('#dsize').val();
             var resolution = $('#resolution').val();
             var dcolors =   $('#dcolors').val();
             var dim =   $('#dim').val();
             var networktype = $('#ntype').val();
             var supportednet = $('#snetworks').val();
             var gprs =   $('#gprs').val();
             var primarycam =   $('#cfeatures').val();
             var secondarycam = $('#scfeatures').val();
             var battery = $('#battcapac').val();
             var simSize =   $('#simsize').val();
             var dateFirstAvail =   $('#dtfirst').val();
             var showUser = +$('#show_user')[0].checked;
             var showInDb = +$('#show_backend')[0].checked;
             
            $.ajax({
          url:"/Ecommerce/add-product",
          type:"get",
          data:{'product-name':productName,'product-desc':productDescription,'showuser':showUser,'showindb':showInDb
          ,'sp':sp,'ap':ap,'weight':weight,'color':color,'inbox':inbox,'warranty':warranty,'os':os
          ,'processType':processtype,'processCore':processcore,'ram':ram,'istorage':istorage,'estorage':estorage
          ,'displaysize':displaysize,'resolution':resolution,'dcolors':dcolors,'dim':dim,'networktype':networktype
          ,'supportednet':supportednet,'gprs':gprs,'primaryCam':primarycam,'secondaryCam':secondarycam
          ,'battery':battery,'simSize':simSize,'dateFirstAvail':dateFirstAvail},
          success: function (response) {
          alert(response);  
          $("#myModal").modal('show');
        },
        }) ;  
        });
        $('#check').click(function(){
                window.location='/Ecommerce/view-add-products';
        });
        $('#nocheck').click(function(){
                window.location='/Ecommerce/view-products';
        });
      });*/
    </script>
    <!-- Menu Toggle Script -->
   

    
	@endsection



