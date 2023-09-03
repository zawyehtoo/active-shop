@extends('template.master')

@section('content')
   <div class="yoga">
        <img class="slider" src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_1920,w_1920/enTH/Images/02-ss23-gucci-launch-non-confirmed-eplp-stament-d_tcm205-1008653.jpg" alt="">
        <div class="letter">
            <h1 >Active shop X Gucci</h1>
            <p>Sartorial streetwear meets sports heritage as <br> footwear icons of adidas and Gucci unite.</p>
            <br>
            <p>Shop the collection now.</p>
            <a href="{{route('shop')}}" class="btn btn-outline-dark">Shop Now</a>
        </div>
   </div>
   <div class="interested">
        <h1 class="px-2 my-5">Still interested?</h1>
        <div class="wrapper ">
            @foreach($products as $product)
            @if($product->is_deleted!=1)
                <div class="col-md-3 mx-2">
                <a href="{{route('productdetail',$product->id)}}" class="text-decoration-none">
                    <div class="card rounded-0">
                    <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/8b9bf6ac8ff1474c9410af8d00750d5c_9366/Ultraboost_23_Shoes_Orange_HP9205_01_standard.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->title}}<span><i class="bi bi-heart btn p-0" style="float:right"></i></span></h5>
                        <p class="card-text">$<span>{{$product->price}}</span></p>
                    </div>
                    </div>
                </a>
                </div>
            @endif
            @endforeach
        </div>
   </div>
    <div class="mt-5 mx-3">
        <h1 class="px-2">Who are you shopping for?</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            <div class="col">
                <div class="card h-100">
                    <h2 class="gender">Men</h2>
                   <a href="{{route('men-shop')}}"> <img style="width:100%;height:100%" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a3761ea259c24630b6d1aeca00fb1ffa_9366/Designed_for_Gameday_Hoodie_Green_HI5695_21_model.jpg" alt="..."></a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <h2 class="gender">Women</h2>
                   <a href="{{route('women-shop')}}"><img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/f9392d2d55c6428da1e5af1c01876ab6_9366/adidas_Los_Angeles_Crop_Tee_Green_HT3136_21_model.jpg" style="width:100%;height:100%" alt="..."></a> 
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <h2 class="gender">Kids</h2>
                   <a href="{{route('kids-shop')}}"><img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/2cffe4ed32304f259312af6d00c14bbf_9366/adidas_Adventure_Track_Jacket_Green_IC5433_21_model.jpg" style="width:100%;height:100%" alt="..."></a> 
                </div>
            </div>
        </div>
    </div>
@endsection