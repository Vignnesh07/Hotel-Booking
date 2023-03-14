<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Prestige Co. Home</title>
    
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap">

        <!--Stylesheet-->
        <link rel="stylesheet" href="/assets/css/home.css" >
        <link rel="stylesheet" href="/assets/css/about.css" >
        <link rel="stylesheet" href="/assets/phone/css/intlTelInput.css" >
    </head>
    <body>
        <div class="header" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url('/assets/img/home_bg.png');">
            <nav>
                <div class="logo-title">
                    <img class="logo" src="/assets/img/logo.png">
                    <h2>Prestige Co.</h2>
                </div>

                <ul class="nav-links">
                    <li><a href='#' >Home</a></li>
                    <li><a href="#" >Bookings</a></li>
                    <li><a href="#" >About Us</a></li>
                    <li><a href="#" >Contacts</a></li>
                </ul>

                <div class="dropdown">

                    <button class="dropbtn"> User
                        <i class="fa-solid fa-caret-down"></i>
                    </button>

                    <div class="dropdown-content">
                        <a href="#"> Profile </a>
                        <a href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> Logout </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                </div>
            </nav>
            <div class="container">
                <h1> Book Luxury Stays Seamlessly </h1>
            </div>
        </div>

        @yield('content')
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="/assets/phone/js/intlTelInput.js"> </script>
        <script src="/assets/js/home.js"> </script>
    </body>
</html>