@extends('template.master')
@section('content')
    <div class="container">
        <p class="my-3 "><span class="text-black-50">Home / </span>shop</p>
        <h1>All Products</h1>
        <hr>
        <div class="d-flex">
            <div class="col-md-2">
               @include('user_page.categories')
            </div>
            @if($products->isEmpty())
                <div class="col-md-12 m-auto">
                    <h2 class="text-center text-danger">There is no product available.</h2>
                </div>
            @endif
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach($products as $product)
                @if($product->is_deleted!=1)
                <a href="{{url('productdetail/'.$product->id)}}" class="text-decoration-none">
                    <div class="col">
                        <div class="card h-100">
                        <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/8b9bf6ac8ff1474c9410af8d00750d5c_9366/Ultraboost_23_Shoes_Orange_HP9205_01_standard.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <p class="card-text">$<span>{{$product->price}}</span></p>
                        </div>
                        </div>
                    </div>
                </a>
                @endif
                @endforeach
           
            </div>
        </div>
       
    </div>
@endsection