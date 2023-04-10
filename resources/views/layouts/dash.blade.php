<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Prestige Co. DashBoard</title>
    
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />

        <!--Stylesheet-->
        <link rel="stylesheet" href="/assets/css/dashboard.css" >
        <link rel="stylesheet" href="/assets/css/navigation.css" >
        <link rel="stylesheet" href="/assets/css/staffSection.css" >
        <link rel="stylesheet" href="/assets/css/staffEdit.css" >
        <link rel="stylesheet" href="/assets/css/adminComplaint.css" >
        <link rel="stylesheet" href="/assets/css/bookings.css" >
        <link rel="stylesheet" href="/assets/css/adminBooking.css" >
        <link rel="stylesheet" href="/assets/css/adminProfile.css" >
        <link rel="stylesheet" href="/assets/phone/css/intlTelInput.css" >
    </head>
    <body class="dashboard-body">
        <div>
            <div class='topNav'>
                <a href='/admin/dashboard' class="logo-title">               
                    <img class="logo" src="/assets/img/logo.png">
                    <h2>Prestige Co.</h2>
                </a>

                <div class="dropdown">
                    <div class="dropbtn">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="dropdown-content">
                        <a href="/admin/profile"> Profile </a>
                        <a href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> Logout </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            

            <div class='sidebar'>
                <ul class ='nav-links'>
                    <li>
                        <a href='/admin/dashboard'>
                            <i class="ionicons ion-grid"></i>
                            <span class='link_name'>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/staff'>
                            <i class="ionicons ion-ios-people"></i>
                            <span class='link_name'>Staff Section</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/bookings'>
                            <i class="ionicons ion-ios-list"></i>
                            <span class='link_name'>Booking List</span>
                        </a>
                    </li>
                    <li>
                        <a href='/admin/complaints'>
                            <i class="ionicons ion-ios-chatbubble"></i>
                            <span class='link_name'>Complaints</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- To display flash session messages -->
        <x-flash admin="true"/>
        
        @yield('content')

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="/assets/phone/js/intlTelInput.js"> </script>
        <script src="/assets/js/home.js"> </script>
        <script src="/assets/js/bookings.js"> </script>
        <script src="/assets/js/adminComplaint.js"> </script>
    </body>
</html>