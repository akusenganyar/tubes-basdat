<nav class="navbar navbar-expand-lg navbar-light bg-white">

    <!-- brand "AsikJuGa" -->
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{asset('assets\img\Asikjuga.png')}}" height="60" width="100%" class="d-inline-block align-top" />
    </a>

    <!-- responsive button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <!-- regular menu -->
            <li class="nav-item">
                <a class="nav-link" href="#">Akomodasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pesawat + Hotel<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pesawat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hotel</a>
            </li>

            <!-- dropdown -->
            <li class="nav-item">
                <div class="dropdown show">
                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu Lainnya
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </li>

        </ul>
    </div>

    <!-- end navbar -->
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/openmoji/292/flag-indonesia_1f1ee-1f1e9.png" height="25" width="25" alt="" />
            </a>
        </li>
        @if (Route::has('login'))
            @auth
                <li class="nav-item">
                    @if (Auth::user()->is_admin == 1)
                        <a href="{{route('dashboard')}}" class="nav-link">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{url('/')}}" class="nav-link">{{ Auth::user()->name }}</a>
                    @endif
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Masuk</a>
                </li>

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" role="button" class="btn btn-outline-primary">Buat Akun</a>
                    </li>
                @endif
            @endauth
        @endif
    </ul>
</nav>
