@extends('homepage')

        
      @section('body')
        <h2> My Orders </h2>
    
 @if(!empty($orderDetail))
  @foreach($orderDetail as $orders)



          
          <div class="card mt-4">
          <div class="card-header">
          Order Number : {{$orders->order_number}}
          Order Placed On : {{$orders->order_date}}
          Order Status :{{$orders->order_status}}
          
           </div> 
            <div class="card-body">
              <div>
                <img src="/Ecommerce/assets/img/{{ $orders->image_url }}" width="100px">
                 Product Name:{{$orders->product_name}} 
               Product Price:{{$orders->sellingprice}}
               Product Quantity:{{$orders->order_quantity}}
               Payment Method:{{$orders->mode_of_payment}}
              </div>
              
            </div>
          </div>
          </div>
          

          
          @endforeach
          @endif


       
        @endsection