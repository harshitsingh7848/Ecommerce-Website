@extends('homepage')

        @section('head')
        
        

        
        
        @endsection
      @section('body')
        
    <div class="card">
  <div class="card-header">
  @foreach($orderDetail as $orders)
    Order Number : {{$orders->order_number}}
  </div>
  <div class="card-body">
    
  </div>
  @endforeach
</div>
       
        @endsection