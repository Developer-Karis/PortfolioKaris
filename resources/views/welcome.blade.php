<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Karis</title>
    <link rel="shortcut icon" href="https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/dev-512.png"
        type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar shadow p-3 mb-5 bg-white rounded navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger font-weight-bold" href="/">
                DevKaris</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger active" href="#page-top">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#carouselExampleIndicators">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#projects">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
                    </li>
                    @if (Route::has('login'))
                    @auth
                    @if (Auth::user()->role_id == 1)
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="btn btn-primary py-2 px-3 mr-3 ml-3"
                            style="border: 2px solid black;">Admin</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn-login-register">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn-login-register">Register</a>
                    </li>
                    @endif
                    @endauth
                    @endif

                    @auth
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a class="btn btn-danger py-2 px-3 mr-3 ml-2" style="border: 2px solid black;"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </form>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    {{-- Home Wallpaper Present --}}
    <div class="home">
        <div class="write">
            <h1 class="text-center">I am Karis Papadopoulos <br><span class="type"></span></h1>
        </div>
    </div>

    {{-- About Me --}}
    <div>

    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script>
        var typed = new Typed('.type', {
            strings: ['Web Developer', 'Front-End Developer', 'Back-End Developer'],
            typeSpeed: 60,
            backSpeed: 60,
            loop:true,
        });
    </script>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>