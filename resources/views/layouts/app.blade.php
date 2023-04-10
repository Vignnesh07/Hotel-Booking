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
        <link rel="stylesheet" href="/assets/css/bookings.css" >
        <link rel="stylesheet" href="/assets/css/complaints.css" >
        <link rel="stylesheet" href="/assets/css/clerkProfile.css" >
        <link rel="stylesheet" href="/assets/phone/css/intlTelInput.css" >

        <!--preload/download image to reduce long rendering-->
        <link rel="preload" href="/assets/img/home_bg.png" as="image">
        <link rel="preload" href="/assets/img/about_bg.png" as="image">
        <link rel="preload" href="/assets/img/bookings_bg.png" as="image">
        <link rel="preload" href="/assets/img/complaints_bg.png" as="image">
        <link rel="preload" href="/assets/img/profile_bg.png" as="image">
    </head>
    <body>
        <nav class="clerk-nav">

            <a class="clerk-logo-title" href="home">               
                <img class="logo" src="/assets/img/logo.png">
                <h2>Prestige Co.</h2>
            </a>


            <ul class="nav-links" id="nav-links">
                <li><a class="{{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a></li>
                <li><a class="{{ Request::is('bookings*') ? 'active' : '' }}" href="/bookings">Bookings</a></li>
                <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="/about">About Us</a></li>
                <li><a class="{{ Request::is('complaints') ? 'active' : '' }}" href="/complaints">Complaints</a></li>
            </ul>

            <div class="dropdown">
                <button class="dropbtn"> {{ Auth::user() -> name }}
                    <i class="fa-solid fa-caret-down"></i>
                </button>

                <div class="dropdown-content">
                    <a href="/profile"> Profile </a>
                    <a href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> Logout </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>
            </div>
        </nav>

        <!-- To display flash session messages -->
        <x-flash admin="false"/>

        @yield('content')

        <!--------------- Footer -------------->
        <div class="footer">
            <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <div class="hr-box">
                <hr class="hr">
            </div>
            <p>Copyright &copy; 2023, Prestige Co.</p>
        </div>
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://unpkg.com/scrollreveal"></script>

        <script src="/assets/phone/js/intlTelInput.js"> </script>
        <script src="/assets/js/home.js"> </script>
        <script src="/assets/js/bookings.js"> </script>
        <script src="/assets/js/clerkComplaint.js"> </script>
        <script src="/assets/js/scrollReveal.js"> </script>
    </body>
</html>