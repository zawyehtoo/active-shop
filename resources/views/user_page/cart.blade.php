@extends('template.master')
@section('content')
    <div class="container">
        <div class="d-flex">
            <div class="col-md-12">
                <p class="my-3 "><span class="text-black-50">Home / </span>shopping Cart</p>
                <div class="d-flex justify-content-between">
                    <h2>Your BAG</h2>
                    <h2>Total - ${{$totalprice}}</h2>
                </div>  
                <hr>
                <!-- Products here -->
                @if($orders->where('user_id', Auth::user()->id)->count() == 0)
                    <h1>No orders yet</h1>
                @else
                @foreach($orders as $order)
                @if($order->user_id == Auth::user()->id )
                <div class="row">
                    <div class="col-md-6 row">
                        <div class="col-md-4">
                            <img height="100%" width="100%" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/8b9bf6ac8ff1474c9410af8d00750d5c_9366/Ultraboost_23_Shoes_Orange_HP9205_01_standard.jpg" alt="">
                        </div>
                        <div class="col-md-8 px-5">
                            <h5 >{{$order->product->title}}</h5>
                            <p >Color: <span>{{$order->color->color_name}}</span></p>
                            <p class=" mb-3">Size: <span>{{$order->size->size}}</p>
                            <form action="{{route('destroy',$order->id)}}" method="post" class="d-inline-block">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{route('edit',$order->id)}}" class="btn btn-primary px-3">Edit</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <p>Quantity- <span>{{$order->quantity}}</span></p>
                        <p>Each of price - $<span>{{$order->product->price}}</span></p>
                    </div>
                    <div class="col-md-3 ">
                        <p>Total - $<span>{{$order->total_price}}</span></p>
                    </div>
                </div>
                <hr>
                @endif
                @endforeach
              @endif
                <div style="float:right" class="mb-3">
                    <a href="" class="btn btn-primary">Buy Now</a>
                    <a href="{{route('shop')}}" class="text-decoration-none">Continue shopping</a>
                </div>
            </div>
            
        </div>
      

    </div>
@endsection