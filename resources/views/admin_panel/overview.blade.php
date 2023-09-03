@extends('admin_panel.master2')

@section('adminContent')
    <div class="p-4" >
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col-md-3">
                <div class=" rounded-4 card text-bg-primary py-4" style="max-width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title text-center">Active Customers</h4>
                        <h1 class="card-text text-center">3</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card rounded-4  text-bg-warning py-4" style="max-width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title text-center">Active Products</h4>
                        <h1 class="card-text text-center">10</h1>
                    </div>
                </div>
            </div>
           
            <div class="col-md-3">
            <div class="card rounded-4  text-bg-danger py-4" style="max-width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title text-center">Total Income</h4>
                        <h1 class="card-text text-center">$342.00</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h2 class="mt-3">Latest Orders</h2>
            <div class="card rounded-3 text-bg-white mt-3" >
              
                <table class="table table-striped">
                    <thead style="font-size:20px">
                        <tr>
                            <td>No</td>
                            <td>Customers</td>
                            <td>Products</td>
                            <td>Total</td>
                            <td>Created at</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-primary">user1@gmail.com</td>
                            <td>4items</td>
                            <td>$230</td>
                            <td>12:00</td>
                            <td>
                                <button class="btn btn-primary">Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-primary">user2@gmail.com</td>
                            <td>4items</td>
                            <td>$230</td>
                            <td>12:00</td>
                            <td>
                                <button class="btn btn-primary">Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection