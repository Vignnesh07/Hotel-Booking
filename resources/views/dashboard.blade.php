<!DOCTYPE html>
<html lang="en">

<head>

    <title>Prestige Co. Dashboard</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />

    <!--Stylesheet-->
    <link href="/assets/css/navigation.css" rel="stylesheet" >
    <link href="/assets/css/topNavigation.css" rel="stylesheet" >
    <link href="/assets/css/dashboard.css" rel="stylesheet" >

</head>
</head>
<body>

    <div class='flex-container'>
        <div>
            @include('topNavigation')
            @include('navigation')
        </div>

        <div class='dashboard-item'>
            <div class='item-row-1'>
                <div class ='item'>
                    <div>
                        <i class="fa-sharp fa-solid fa-bed"></i><br>
                        <b>21</b>
                        <h2>Total Rooms</h2>
                    </div>
                </div>
                <div class ='item'>
                    <div>
                        <i class="fa-sharp fa-solid fa-bookmark"></i><br>
                        <b>21</b> 
                        <h2>Reservation</h2>
                    </div>
                </div>
                <div class ='item'>
                    <div>
                        <i class="fa-sharp fa-solid fa-clipboard-user"></i><br>
                        <b>21</b>
                        <h2>Staffs</h2>
                    </div>
                </div>
                <div class ='item'>
                    <div>
                        <i class="fa-sharp fa-solid fa-comments"></i><br>
                        <b>21</b> 
                        <h2>Complaints</h2>
                    </div>
                </div>
            </div>
            <div class='item-row-2'>
                <div class ='item'>
                    <div>                    
                        <i class="fa-sharp fa-solid fa-money-bill"></i><br>
                        <b>21</b> 
                        <h2>Total revenue</h2>                   
                    </div>
                </div>
                <div class ='item'>
                    <div>                   
                        <i class="fa-sharp fa-solid fa-bars"></i><br>
                        <b>21</b> 
                        <h2>Booked Rooms</h2>
                    </div>
                </div>
                <div class ='item'>
                    <div>
                        <i class="fa-sharp fa-solid fa-circle-check"></i><br>
                        <b>21</b> 
                        <h2>Available Rooms</h2>
                    </div>
                </div>
                <div class ='item'>
                    <div>
                        <i class="fa-sharp fa-solid fa-check-double"></i><br>
                        <b>21</b> 
                        <h2>Checked in</h2>
                    </div>
                </div>
            </div>
            <div class='item-row-3'>
                <div class ='item'>
                    <div>
                        <i class="fa-sharp fa-solid fa-coins"></i><br>
                        <b>21</b> 
                        <h2>Total Pending Payments</h2>
                    </div>
                </div>
                <div class ='item'>
                    <div>
                        <i class="fa-sharp fa-solid fa-credit-card"></i><br>
                        <b>21</b> 
                        <h2>Pending Payments</h2>
                    </div>
                </div>
            </div>
            
            
            
            
        </div>
        
    </div>
    
</body>


