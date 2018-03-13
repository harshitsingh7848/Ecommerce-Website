<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item </title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="/Ecommerce/assets/css/shop-item.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- font awesome icons CSS -->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">


  </head>

  <body>

    <!-- Navigation -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Gadget Maniac</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-4">
          <h2 class="my-4">{{ $productDetails[0]->product_name}}</h2>
          <div class="list-group ">
           <img src="/Ecommerce/assets/img/{{ $productDetails[0]->image_url }}" alt="">
           <div>
           <a href="{{ url('cart')}}" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> ADD TO CART
        </a>
           <a href="/Ecommerce/buy?productId={{$productDetails[0]->id }}" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> BUY NOW
        </a>
           </div>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-8">

          <div class="card mt-4">
            <div class="card-body">
              <h3 class="card-title">{{ $productDetails[0]->product_name}}</h3>
              <h4>Price : {{$productDetails[0]->sellingprice }} </h4>
              <table>
                <tr>
                  <td>  Warranty :
                  </td>
                  <td> {{ $productDetails[0]->warranty_summary }} </td>
                  </tr>
                <tr>
                  <td>  Highlights :
                  </td>
                  <td> {{$productDetails[0]->RAM}} | {{$productDetails[0]->internal_storage}} ROM | 
                   Expandable Upto {{$productDetails[0]->expandable_storage}}
                  </td>
                </tr>
                <tr>
                  <td>  Seller:
                  </td>
                  <td> Flash Mart </td>
                </tr>  
                <tr>
                  <td>  Description :
                  </td>
                  <td> {{ $productDetails[0]->product_description }} </td>
                </tr>
                <tr>
                  <td>  Payment Options :
                  </td>
                  <td> Cash on Delivery </td>
                </tr>
              </table>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Product Specifications
            </div>
            <div class="card-body">
               <table>
                <thead><h3> General</h3> </thead>
                <tr>
                  <td>  Model Number :
                  </td>
                  <td> {{$productDetails[0]->id }}  </td>
                </tr>
                <tr>
                  <td>  Model Name:
                  </td>
                  <td> {{$productDetails[0]->model_name }} </td>
                </tr>  
                <tr>
                  <td>  Color :
                  </td>
                  <td> {{$productDetails[0]->color}} </td>
                </tr>
              </table>

              <table>
                <thead><h3>Camera Features</h3> </thead>
                <tr>
                  <td>  Secondary Camera :
                  </td>
                  <td> {{$productDetails[0]->secondary_camera}}  </td>
                  </tr>
                <tr>
                  <td>  Primary Camera :
                  </td>
                  <td> {{$productDetails[0]->primary_camera}}   </td>
                </tr>
                
              </table>

             

              <table>
                <thead><h3>Display Features</h3> </thead>
                <tr>
                  <td>  Display Size :
                  </td>
                  <td> {{$productDetails[0]->display_size}}  </td>
                  </tr>
                <tr>
                  <td>  Resolution :
                  </td>
                  <td> {{$productDetails[0]->resolution}}   </td>
                </tr>
                <tr>
                  <td>  Display Colors :
                  </td>
                  <td> {{$productDetails[0]->display_colors}}   </td>
                </tr>
                
              </table>

              <table>
                <thead><h3>OS & Processor Features</h3> </thead>
                <tr>
                  <td>  Operating System :
                  </td>
                  <td> {{$productDetails[0]->os}}  </td>
                  </tr>
                <tr>
                  <td>  Processor Type :
                  </td>
                  <td> {{$productDetails[0]->processor_type}}   </td>
                </tr>
                <tr>
                  <td>  Processor Core :
                  </td>
                  <td> {{$productDetails[0]->processor_core}}   </td>
                </tr>
                
              </table>

              <table>
                <thead><h3>Memory & Storage Features</h3> </thead>
                <tr>
                  <td>  RAM :
                  </td>
                  <td> {{$productDetails[0]->RAM}}  </td>
                  </tr>
                <tr>
                  <td>  Internal Storage :
                  </td>
                  <td> {{$productDetails[0]->internal_storage}}   </td>
                </tr>
                <tr>
                  <td>  Expandable Storage :
                  </td>
                  <td> {{$productDetails[0]->expandable_storage}}   </td>
                </tr>
                
              </table>

              <table>
                <thead><h3>Connectivity Features</h3> </thead>
                <tr>
                  <td>  Network Type :
                  </td>
                  <td> {{$productDetails[0]->network_type}}  </td>
                  </tr>
                <tr>
                  <td>  Supported Networks :
                  </td>
                  <td> {{$productDetails[0]->supported_networks}}   </td>
                </tr>
                <tr>
                  <td>  GPRS :
                  </td>
                  <td> {{$productDetails[0]->gprs}}   </td>
                </tr>
                
              </table>

              <table>
                <thead><h3>Battery Features</h3> </thead>
                <tr>
                  <td>  Network Type :
                  </td>
                  <td> {{$productDetails[0]->battery_capacity}}  </td>
                  </tr>
          
              </table>

              <table>
                <thead><h3>Additional Features</h3> </thead>
                <tr>
                  <td>  Sim Size :
                  </td>
                  <td> {{$productDetails[0]->sim_size}}  </td>
                  </tr>
               
                
              </table>

              
             
            </div>
          </div>

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Product Reviews
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <a href="#" class="btn btn-success">Leave a Review</a>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-8 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Gadget Maniac</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="assets/shop/jquery/jquery.min.js"></script>
    <script src="assets/shop/bootstrap/js/bootstrap.bundle.min.js"></script>
 -->
  </body>

</html>