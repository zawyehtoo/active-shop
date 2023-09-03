@extends('admin_panel.master2')
@section('style')
    background-color:#EFF3F7;max-height:100%
@endsection
@section('adminContent')
    <div class="p-5">
        <h1>Edit Product</h1>
    <form action="{{route('update',$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Product's name</label>
            <input type="text" name="title" value="{{$product->title}}" class="form-control" id="exampleFormControlInput1" >
                        </div>
                        <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$product->description}}</textarea>
                        </div>
                        <div class="mb-3 ">
                        <label for="exampleFormControlInput1" class="form-label">Price  </label>
                        <input type="text" name="price" class="mx-1 form-control" id="exampleFormControlInput1" value="{{$product->price}}" placeholder="Enter price">
                        </div>
                        <div class="mb-3 ">
                            <label for="" class="form-label">Category</label>
                            <select class="mx-1 form-select" name="category" aria-label="Default select example">
                            @foreach($categories as $category)
                            @php $selected_category=($category->id==$product->category_id)? "selected" : "" @endphp
                                <option value="{{$category->id}}" {{$selected_category}}>{{$category->categories}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="mb-3 d-flex">
                            <p>Gender - </p>
                            <div class="form-check">
                                @php $checked=($product->men==1)?"checked" : "" @endphp
                                <input class="form-check-input ms-1" name="men" type="checkbox" value="1" id="flexCheckDefault" {{$checked}}>
                                <label class="form-check-label" for="flexCheckDefault">
                                    men
                                </label>
                            </div>
                            <div class="form-check">
                                @php $checked=($product->women==1)?"checked" : "" @endphp
                                <input class="form-check-input ms-1" name="women" type="checkbox" value="1" id="flexCheckDefault" {{$checked}}>
                                <label class="form-check-label" for="flexCheckDefault">
                                    women
                                </label>
                            </div>
                            <div class="form-check">
                                @php $checked=($product->kids==1)?"checked" : "" @endphp
                                <input class="form-check-input ms-1" name="kids" type="checkbox" value="1" id="flexCheckDefault" {{$checked}}>
                                <label class="form-check-label" for="flexCheckDefault">
                                    kids
                                </label>
                            </div>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="formFile" class="form-label">Product's Image-</label>
                            <input class="form-control ms-1 w-75" value="{{$product->image}}" name="image" type="file" id="formFile">
                        </div>
                        <button class="btn btn-primary " style="float:right;width:150px">Add</button>
                    </form>

    </div>
@endsection