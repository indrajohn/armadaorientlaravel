<nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm">
    <div class="container">
        <div class="d-none d-sm-block">
            <p><i class="fa fa-phone"></i> +62 (0) 815 4841
                8500<br>
                <i class="fa fa-envelope"></i> michael@armadaorient.co
            </p>
        </div>
        <div class="mx-auto toolbar-image">
            <img src="{{ asset('assets/logo/logo.png') }}" width="200" />
        </div>
        <div>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto toolbar-list-right">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"> <i class="fas fa-search"></i> </a>
                </li>
                <li class="nav-item" style="cursor:default">
                    <div class="nav-link" href=""> | </div>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"> <i class="fas fa-user"></i> </a>
                </li>
                @else
                <li class="nav-item" style="cursor:default">
                    <div class="nav-link" href=""> | </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"> <i class="fas fa-shopping-cart"></i> </a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="navbar-expand-md container-fluid toolbar-nav-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto toolbar-link">
                        <li class="nav-item" style="cursor:default">
                            <a class="nav-link" href="{{ route('login') }}"> {{ __('Home') }}</i> </a>
                        </li>
                        <li class="nav-item" style="cursor:default">
                            <a class="nav-link" href="{{ route('login') }}"> {{ __('About Us') }}</i> </a>
                        </li>
                        <li class="nav-item" style="cursor:default">
                            <a class="nav-link" href="{{ route('login') }}"> {{ __('Product') }}</i> </a>
                        </li>
                        <li class="nav-item" style="cursor:default">
                            <a class="nav-link" href="{{ route('login') }}"> {{ __('Contact Us') }}</i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
