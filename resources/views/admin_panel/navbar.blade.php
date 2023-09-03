<nav class="navbar navbar-expand-lg bg-body-white">
        <div class="d-flex justify-content-between col-md-12">
            <div class="col-md-10"></div>
            <div class="col-md-2 d-flex align-items-center">
                <div class="col-md-4">
                    <img style="width:50px;height:50px;border-radius:50px;object-fit:cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5ZelXxYLCCEGYY_kbIx8cywPH3Isy4g0vjA&usqp=CAU" alt="">
                </div>
                <div class="col-md-8">
                <ul class="navbar-nav">
                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            </ul>
                </div>
            </div>
        </div>
</nav>