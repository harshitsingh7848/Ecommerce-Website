@extends('homepage')
    @section('title','BrandList')
    
    
    @section('head')
    <link rel="stylesheet" href="assets/css/brand-list.css">
    
   @endsection

 
 @section('body')
    
<div class="container" style="margin-top:30px;">
    <div class="row">
        <div class="col-md-4">
            <ul id="tree1">
                  @if(!empty($brandlists))
                    @foreach($brandlists as $brandlist)
                <li><a href="#">{{ $brandlist->brand_name }}</a>

                    <ul>
                    @foreach ($brandlist->product_name as $product_name)
                        <li><a href="{{ url('/product')}}{{'/'.$product_name}}">{{ $product_name}}</a></li>
                        @endforeach
                        <!-- <li>Employees
                            <ul>
                                <li>Reports
                                    <ul>
                                        <li>Report1</li>
                                        <li>Report2</li>
                                        <li>Report3</li>
                                    </ul>
                                </li>
                                <li>Employee Maint.</li>
                            </ul>
                        </li>
                        <li>Human Resources</li> -->
                    </ul>
                </li>
                
                @endforeach
                @endif
            </ul>
        </div>
        
        
   
                
                        
              <!--   <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/product-4.jpg" alt="">
                        </div>
                        <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                        <div class="product-carousel-price">
                            <ins>$899.00</ins> <del>$999.00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>                       
                    </div>
                </div>
            </div> -->
            
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div> -->
        </div>
    </div>


    
                
                
                
               
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="assets/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/brand-list.js"></script>
 @endsection