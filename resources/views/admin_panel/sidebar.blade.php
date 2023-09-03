<nav class="navbar py-4 " style="max-height:100%">
    <a class="navbar-brand " style="font-size:35px" href="{{route('homepage')}}">Active shop</a>
    <ul class="nav flex-column">
        <li class="nav-item my-2 ">
        <a class="nav-link text-dark " href="{{route('overview')}}"><span><i class="fa-sharp fa-solid fa-chart-simple"></i></span> Overview</a>
        </li>
        <li class="nav-item my-2 ">
        <a class="nav-link text-dark" href="{{route('showproducts')}}"><span><i class="fa-solid fa-basket-shopping"></i></span> Products</a>
        </li>
        <li class="nav-item my-2 ">
        <a class="nav-link text-dark" href="{{route('customers')}}"><span><i class="fa-solid fa-user"></i></span> Customers</a>
        </li>
        <li class="nav-item my-2 ">
        <a class="nav-link text-dark" href="{{route('orders')}}"><span><i class="fa-solid fa-bars"></i></span> Orders</a>
        </li>
    </ul>
</nav>