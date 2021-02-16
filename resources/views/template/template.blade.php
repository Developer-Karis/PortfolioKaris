<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Karis</title>
    <link rel="shortcut icon" href="https://cdn3.iconfinder.com/data/icons/logos-and-brands-adobe/512/84_Dev-512.png"
        type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    {{-- AOS SMOOTH DISPLAY --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Jquery & Bootstrap --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
</head>

<body id="page-top">

    <div id="preloader"></div>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
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
                        <a class="nav-link js-scroll-trigger" href="#aboutme">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
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
                        <a href="{{ route('login') }}" class="get-started-btn">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="get-started-btn">Register</a>
                    </li>
                    @endif
                    @endauth
                    @endif

                    @auth
                    <div class="ml-4 dropdown show">
                        <a class="btn btn-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('img/avatardefault.png')}}" alt="" height="40" class="mr-1">
                            <span class="user-name">{{Auth::user()->name}}</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="profile">
                                <i class="fas fa-user fa-lg"></i>
                                <span>Profile</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-newspaper fa-lg"></i>
                                <span>Add Post</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-bell fa-lg"></i>
                                <span>Notifications</span>
                                <span class="badge badge-primary ml-2" style="padding: 5px !important;">4</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-envelope fa-lg"></i>
                                <span>Messages</span>
                                <span class="badge badge-danger ml-2"
                                    style="padding: 5px !important; margin-left: 25px !important;">4</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cog fa-lg"></i>
                                <span>Settings</span>
                            </a>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="dropdown-item text-dark text-decoration-none" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-lg"></i>
                                    <span> {{ __('Logout') }}</span>
                                </a>
                            </form>
                        </div>
                    </div>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        var typed = new Typed('.type', {
            strings: ['Web Developer', 'Front-End Developer', 'Back-End Developer'],
            typeSpeed: 60,
            backSpeed: 60,
            loop:true,
        });
    </script>
    <script>
        // Init AOS
        function aos_init() {
            AOS.init({
            duration: 1000,
            once: true
            });
        }
        $(window).on('load', function() {
            aos_init();
        });
    </script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/button.js')}}"></script>
</body>

</html>