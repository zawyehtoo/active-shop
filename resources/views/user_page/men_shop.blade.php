@extends('template.master')
@section('content')
    <div class="container">
        <p class="my-3 "><span class="text-black-50">Home / Shop / </span>Men</p>
        <h1>Mens' Products</h1>
        <hr>
        <div class="d-flex">
            <div class="col-md-2">
                <p>shop by categories</p>
                <ul class="list-unstyled">
                    @foreach($categories as $category)
                        <li class="mb-2"><a href="{{url('men-shop/'.$category->id)}}" class="text-dark text-decoration-none ">{{$category->categories}}</a></li>
                    @endforeach
                </ul>
            </div>
            @if($products->isEmpty())
                <div class="col-md-12 m-auto">
                    <h2 class="text-center text-danger">There is no product available.</h2>
                </div>
            @endif
            <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach($products as $product)
            @if($product->is_deleted!=1)
            <a href="{{route('productdetail',$product->id)}}" class="text-decoration-none">
                <div class="col">
                    <div class="card h-100">
                    <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a3761ea259c24630b6d1aeca00fb1ffa_9366/Designed_for_Gameday_Hoodie_Green_HI5695_21_model.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->title}}</h5>
                        <p class="card-text">${{$product->price}}</p>
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