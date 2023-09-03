    <p>shop by categories</p>
     <ul class="list-unstyled">
        @foreach($categories as $category)
            <li class="mb-2"><a href="{{url('shop/'.$category->id)}}" class="text-dark text-decoration-none ">{{$category->categories}}</a></li>
        @endforeach
    </ul>