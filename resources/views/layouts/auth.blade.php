<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Prestige Co. Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap">

        <!--Stylesheet-->
        <link rel="stylesheet" href="/assets/css/login.css" >

        <!--preload/download image to reduce long rendering-->
        <link rel="preload" href="/assets/img/login_bg.png" as="image">
    </head>

    <body>
        <nav class="auth-nav">
            <div class="dropdown">
                <button class="dropbtn">
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-caret-down"></i>
                </button>

                <div class="dropdown-content">
                    <a href="admin"> Admin </a>
                    <a href="clerk"> Clerk </a>
                </div>
            </div>
        </nav>

        <!-- To display flash session messages -->
        <x-flash admin="false"/>

        @yield('loginContent')
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="/assets/js/scrollReveal.js"> </script>
    </body>
</html>
