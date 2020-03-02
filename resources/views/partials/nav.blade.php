<nav class="navbar navbar-dark navbar-expand-lg bg-primary navbar-red">
    <a class="navbar-brand" href="#">
        <img src="{{asset('img/icons/logo.png')}}"  width="60" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{request()->routeIs('inicio') ? 'active': ''}}">
                <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{request()->routeIs('pasteles') ? 'active': ''}}">
                <a class="nav-link" href="{{route('pasteles')}}">Pasteles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Galeria</a>
            </li>
            <li class="nav-item {{request()->routeIs('nosotros') ? 'active': ''}}">
                <a class="nav-link " href="{{route('nosotros')}}">Nosotros</a>
            </li>
            <!-- desde aqui-->




            <li class="nav-item {{request()->routeIs('registrarSucursal') ? 'active': ''}}">
                <a class="nav-link " href="{{route('registrarSucursal')}}">Register</a>
            </li>


            <li class="nav-item ">
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style="color:black; !important;" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a class="dropdown-item" style="color:black; !important;" href="{{ route('nosotros') }}">
                                    Datos
                                </a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>

                        </ul>
                    @else
                           <a href="{{route('cart')}}" class="p-2"><i class="fa fa-shopping-cart"></i> </a>
                            <a href="{{route('login')}}" > <i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar Sesión</a>
                            <a href="{{route('register')}}" ><i class="fa fa-user-circle-o" aria-hidden="true" ></i> Registrarse</a>
                    @endauth
                </div>
            @endif
        </ul>
    </div>
</nav>