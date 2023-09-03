@extends('admin_panel.master2')
@section('style')
  background-color:#EFF3F7;height:100vh
@endsection
@section('adminContent')
    <div class="p-4">
        <h1>Our Customers</h1>
        <div class="col-md-12 card rounded-3">
            <table class="table">
              <thead style="font-size:25px">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email address</td>
                    <td>Created at</td>
                    <td>Action</td>
                </tr>
              </thead>
              <tbody>
                @foreach($customers as $customer)
                @if($customer->role_name!=1)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td class="text-primary">{{$customer->email}}</td>
                    <td>{{$customer->created_at}}</td>
                    <td>
                        <a href="" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>  
        </div>
    </div>
@endsection