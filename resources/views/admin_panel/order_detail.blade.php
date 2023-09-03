@extends('admin_panel.master2')
@section('adminContent')
    <div class="p-4">
        <h1>Orders Detail</h1>
        <div class="col-md-12 card rounded-3">
            <table class="table">
              <thead style="font-size:25px">
                <tr>
                    <td>ID</td>
                    <td>Image</td>
                    <td>Title</td>
                    <td>Qty</td>
                    <td>Price</td>
                </tr>
              </thead>
              <tbody class="align-items-center">
                <tr>
                    <td>1</td>
                    <td><img width="100px" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a3761ea259c24630b6d1aeca00fb1ffa_9366/Designed_for_Gameday_Hoodie_Green_HI5695_21_model.jpg" alt=""></td>
                    <td>Green jacket</td>
                    <td>4</td>
                    <td>$42</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img width="100px" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/f9392d2d55c6428da1e5af1c01876ab6_9366/adidas_Los_Angeles_Crop_Tee_Green_HT3136_21_model.jpg" alt=""></td>
                    <td>light-blue shirt</td>
                    <td>1</td>
                    <td>$32</td>
                </tr>
              </tbody>
            </table>  
        </div>
        
    </div>
@endsection