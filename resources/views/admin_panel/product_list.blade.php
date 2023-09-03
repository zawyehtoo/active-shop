@extends('admin_panel.master2')
@section('style')
    background-color:#EFF3F7;max-height:100%
@endsection
@section('adminContent')
    <div class="p-4">
        <h1>Product Lists</h1>
        <div class="d-flex justify-content-end mb-2">
            <a href="{{route('addproduct')}}" class="btn btn-primary" >Add Products</a>
        </div>
        <div class="col-md-12 card rounded-3">
            <table class="table " id="myTable">
              <thead style="font-size:20px">
                <tr>
                    <td>ID</td>
                    <td>Image</td>
                    <td>Title</td>
                    <td>category</td>
                    <td>Price</td>
                    <td style="width:300px;">Description</td>
                    <td>Action</td>
                </tr>
              </thead>
              <tbody>
                @php $i=0; @endphp
                @foreach($products as $product)
                @if($product->is_deleted!=1)
                <tr>
                    <td>{{$i+=1}}</td>
                    <td><img width="100px" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a3761ea259c24630b6d1aeca00fb1ffa_9366/Designed_for_Gameday_Hoodie_Green_HI5695_21_model.jpg" alt=""></td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->category->categories}}</td>
                    <td>$<span>{{$product->price}}</span></td>
                    <td>{{Str::words($product->description,5)}}</td>
                    <td >
                        <form action="{{url('admin/edit/'.$product->id)}}" method="post">
                            @csrf 
                            <button class="btn btn-primary mb-2" style="width:70px">Edit</button>
                        </form>
                        <form action="{{url('admin/delete/'.$product->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
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
@section('data-table')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>
@endsection