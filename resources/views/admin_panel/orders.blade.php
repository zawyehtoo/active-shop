@extends('admin_panel.master2')
@section('style')
    background-color:#EFF3F7;height:100vh
@endsection
@section('adminContent')
    <div class="p-4">
        <h1>Orders</h1>
        <div class="col-md-12 card rounded-3">
            <table class="table">
              <thead style="font-size:25px">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Image</td>
                    <td>Items</td>
                    <td>Qty</td>
                    <td>Total</td>
                    <td>Action</td>
                </tr>
              </thead>
              <tbody>
                @php $i=0; @endphp
                @foreach($orders as $order)
                @if($order->is_confirmed!=1)
                <tr>
                    <td>{{$i+=1}}</td>
                    <td>{{$order->user->name}}</td>
                    <td ><img height="100px" width="100px" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/8b9bf6ac8ff1474c9410af8d00750d5c_9366/Ultraboost_23_Shoes_Orange_HP9205_01_standard.jpg" alt=""></td>
                    <td>{{$order->product->title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>${{$order->total_price}}</td>
                    <td>
                        <form action="{{url('admin/orders/'.$order->id)}}" method="get">
                            @csrf
                            <button class="btn btn-success">Comfirm</button>
                        </form>
                    </td>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>  
        </div>
    </div>
@endsection