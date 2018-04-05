@extends('homepage')

@section('body')
<div class="card mt-4">
  <h1>Shopping Cart</h1>
  <div class="card-body">
    <form id="orderform" action="get-quantity" method="POST">
    </form>
    
    <div id="totalcartvalue">

    </div>
  <div>
  <a id="test" href="" class="btn btn-info btn-lg">
    Proceed to CheckOut
  </a>
</div>
          <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script src="/Ecommerce/assets/js/cart.js"></script>

  
@endsection
