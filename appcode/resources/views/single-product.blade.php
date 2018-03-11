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
    <link href="assets/css/shop-item.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- font awesome icons CSS -->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-4">
          <h2 class="my-4">{{ $productName}}</h2>
          <div class="list-group ">
           <img src="assets/img/product-1.jpg" alt="">
           <div>
           <a href="{{ url('cart')}}" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> ADD TO CART
        </a>
           <a href="{{url('buy') }}" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> BUY NOW
        </a>
           </div>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-8">

          <div class="card mt-4">
            <div class="card-body">
              <h3 class="card-title">{{ $productName}}</h3>
              <h4>Price : Rs 11,999.00 </h4>
              <table>
                <tr>
                  <td>  Warranty :
                  </td>
                  <td> Lorem ipsum </td>
                  </tr>
                <tr>
                  <td>  Highlights :
                  </td>
                  <td> Lorem ipsum  </td>
                </tr>
                <tr>
                  <td>  Seller:
                  </td>
                  <td> Lorem ipsum </td>
                </tr>  
                <tr>
                  <td>  Description :
                  </td>
                  <td> Lorem ipsum </td>
                </tr>
                <tr>
                  <td>  Payment Options :
                  </td>
                  <td> Lorem ipsum </td>
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
                  <td>  In the Box :
                  </td>
                  <td> Lorem ipsum </td>
                  </tr>
                <tr>
                  <td>  Model Number :
                  </td>
                  <td> Lorem ipsum  </td>
                </tr>
                <tr>
                  <td>  Model Name:
                  </td>
                  <td> Lorem ipsum </td>
                </tr>  
                <tr>
                  <td>  Color :
                  </td>
                  <td> Lorem ipsum </td>
                </tr>
              </table>

              <table>
                <thead><h3>Camera Features</h3> </thead>
                <tr>
                  <td>  Secondary Camera :
                  </td>
                  <td> Lorem ipsum </td>
                  </tr>
                <tr>
                  <td>  Primary Camera :
                  </td>
                  <td> Lorem ipsum  </td>
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