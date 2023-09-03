@extends('template.master')
@section('content')
    <div class="container">
        <h3 class="my-3 ">Edit Product</h3>
        <div class="d-flex col-md-12">
            <div class="col-md-6">
                <img width="100%" class="p-5" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a3761ea259c24630b6d1aeca00fb1ffa_9366/Designed_for_Gameday_Hoodie_Green_HI5695_21_model.jpg" alt="">
            </div>
            <div class="col-md-6 p-5">
                <h4>{{$order->product->title}}</h4>
                <p>${{$order->product->price}}</p>
                <p>{{$order->product->description}}</p>
                <p class="badge text-bg-dark">In Stock</p><br>
                
                <form action="{{url('edited/'.$order->product->id.'/'.$order->id)}}" method="post">
                    @csrf
                    @method('put')
                    <label for="size">Size:</label>
                    <select name="size" class="form-select w-25 d-inline mx-2">
                        @foreach($sizes as $size)
                        @php $selected_size=($size->id==$order->size_id)? "selected" : "" @endphp
                        <option value="{{$size->id}}" {{$selected_size}}>{{$size->size}}</option>
                        @endforeach
                    </select><br>
                    <label for="color" class="mt-4">Color:</label>
                    <select name="color" class="form-select w-25 d-inline">
                    @foreach($colors as $color)
                    @php $selected_color=($color->id==$order->color_id)? "selected" : "" @endphp
                        <option value="{{$color->id}}" {{$selected_color}}>{{$color->color_name}}</option>
                    @endforeach
                    </select>
                    <div class="d-flex col-md-6 mt-3">
                        <button type="button" class="btn btn-dark decrease-btn" ><i class="fa-solid fa-minus"></i></button>
                        <input type="text" name="quantity" class="form-control w-50 mx-2 item-count" value="{{$order->quantity}}" readonly>
                        <button type="button" class="btn btn-dark increase-btn"><i class="fa-solid fa-plus"></i></button>
                    </div>
                    <input type="submit" class="btn btn-dark w-100 mt-3" value="Edit">
                   
                </form>
                

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        const decreaseBtn = document.querySelector(".decrease-btn");
        const increaseBtn = document.querySelector(".increase-btn");
        const itemCount = document.querySelector(".item-count");

        // Set the initial item count to 1
        let count = JSON.parse('@json($order->quantity)');

        // Add click event listeners to the buttons
        decreaseBtn.addEventListener("click", decreaseItemCount);
        increaseBtn.addEventListener("click", increaseItemCount);

        // Function to decrease the item count
        function decreaseItemCount() {
        // Check if the count is already at 1, and if so, do nothing
        if (count === 1) {
            return;
        }
        
        // Decrease the count by 1 and update the input value
        count--;
        itemCount.value = count;
        }

        // Function to increase the item count
        function increaseItemCount() {
        // Increase the count by 1 and update the input value
        count++;
        itemCount.value = count;
        }
    </script>
@endsection