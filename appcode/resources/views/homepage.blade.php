<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <title>@yield('title')</title>

     <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/Ecommerce/assets/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/Ecommerce/assets/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/Ecommerce/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/Ecommerce/assets/css/style.css">
    <link rel="stylesheet" href="/Ecommerce/assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      @section('head')

      @show
    
  </head>
  
  <body>
   <div class="header-area">
        <div class="container">
            <div class="row">
                <input type="hidden" id="productId" name="productId" >
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="{{ url('/account') }}"><i class="fa fa-user"></i> My Account</a></li>
                            <!-- <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li> -->
                            <!-- <li><a href="{{ url('cart') }}"><i class="fa fa-user"></i> My Cart</a></li> -->
                           <!--  <li><a href="{{ url('checkout') }}"><i class="fa fa-user"></i> Checkout</a></li> -->
                            <li><a href="{{ url('/brand-category') }}">Category</a></li>
                            
                            @if($role===3)
                                   <li><a href="{{ url('/my-orders') }}">My Orders</a></li>  
                            @endif
                            
                            @if (!empty($name))
                           Hello {{  $name }}
                             <li><a href="{{ url('/logout') }}"><i class="fa fa-user"></i>Logout</a></li>
                             @if($role!==3)
                             <li><a href="{{ url('/admin') }}"><i class="fa fa-user"></i>My Dashboard</a></li>
                             @endif   
                            @else
                             <li><a href="{{ url('login') }}"><i class="fa fa-user"></i>LogIn</a></li>or
                             <li><a href="{{ url('signup') }}"><i class="fa fa-user"></i>Signup</a></li>
                           @endif
                          
                        </ul>
                    </div>
                </div>
                
                
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="/Ecommerce"><img src="/Ecommerce/assets/img/gm.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                    
                        
                    
                        <a id="anchor" href="">My Cart<i class="fa fa-shopping-cart"></i> <span class="product-count"></span></a>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                
            </div>
        </div>
    </div>
      @section('body')

      @show

      <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Gadget<span>Maniac</span></h2>
                        <p>A website for every age groups. Everything is easy to use. Happy Shopping</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                
                
                
                
                

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2018 GadgetManiac. All Rights Reserved. </p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script>
    $(document).ready(function(){
             if (localStorage.getItem('count')) {
               var totalCount = localStorage.getItem('count');
                $('.product-count').text(totalCount);
                
                
             }
             });
            $(document).ready(function(){
                
                $('#anchor').mouseover(function(){
                    if (localStorage.getItem('productsId')) {
                    var productId=localStorage.getItem('productsId');
                    var myUrl="/Ecommerce/viewcart?products="+productId;
                    var encodeUrl=encodeURIComponent(myUrl);
                    $('#anchor').attr("href",myUrl); 
                    
                    }
                });
                
    
   
});
    </script>

  </body>

  </html>