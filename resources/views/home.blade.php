<!DOCTYPE html>
<html lang="en">

<head>

    <title>Prestige Co. Home</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

     <!--Stylesheet-->
     <link href="/assets/css/home.css" rel="stylesheet">
     <link href="/assets/phone/css/intlTelInput.css" rel="stylesheet">


</head>

<body>
    <div class="header" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url('assets/img/home_bg.png');">
        <nav>

            <div class="logo-title">
                <img class="logo" src="assets/img/logo.png">
                <h2>Prestige Co.</h2>
            </div>

            <ul class="nav-links">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="bookings" >Bookings</a></li>
                <li><a href="about" >About Us</a></li>
                <li><a href="#" >Contacts</a></li>
            </ul>

            <div class="dropdown">

                <button class="dropbtn"> Li Jonn
                    <i class="fa-solid fa-caret-down"></i>
                </button>

                <div class="dropdown-content">
                    <a href="#"> Profile </a>
                    <a href="login"> Logout </a>
                </div>
            </div>

        </nav>

        <div class="container">
            <h1> Book Luxury Stays Seamlessly </h1>
        </div>

    </div>

    <div class="container">

        <h2 class="sub-title">Accomodation Reservations</h2>

        <div class="form-box">

            <form>

                <fieldset>

                    <legend>Room Information</legend>
                    <div class="columns">

                        <div class="item">
                            <label for="roomtype">Room Type</label>
                            <select id="roomtype" onchange="filterRooms()">
                                <option value="" disabled selected>Select Room Type</option>
                                <option value="single" >Single</option>
                                <option value="double">Double</option>
                                <option value="triple">Triple</option>
                                <option value="queen" >Queen</option>
                                <option value="king">King</option>
                                <option value="studio">Studio</option>
                                <option value="executive">Executive Suite</option>
                                <option value="presidential">Presidential Suite</option>
                            </select>
                        </div>

                        <div class="item">
                            <label for="roomnumber">Room Number</label>
                            <select id="roomnumber">

                                <!-- <option value="" disabled selected>Select Room No</option>
                                <option value="1" >SI001-SI010</option>
                                <option value="2">DO001-DO010</option>
                                <option value="3">TR001-TR005</option>
                                <option value="4" >QU001-QU010</option>
                                <option value="5">KI001-KI010</option>
                                <option value="6">ST001-ST010</option>
                                <option value="7">ES001-ES003</option>
                                <option value="8">PS001-PS003</option> -->
                            </select>
                        </div>

                    </div>

                    <div class="columns">

                        <div class="item">
                            <label for="checkindate">Check-in Date</label>
                            <input id="checkindate" type="date" name="checkindate" />
                            <i class="fas fa-calendar-alt"></i>
                        </div>

                        <div class="item">
                            <label for="checkoutdate">Check-out Date</label>
                            <input id="checkoutdate" type="date" name="checkoutdate"/>
                            <i class="fas fa-calendar-alt"></i>
                        </div>

                    </div>

                    <br>

                    <div class="results">
                        <h3> Total Days: </h3>
                        <h3> Prices: </h3>
                        <h3> Total Amount: </h3>
                    </div>
                    
                    <br>

                </fieldset>

                <br><br>

                <fieldset>

                    <legend>Customer Information</legend>
                    <div class="columns">

                        <div class="item">
                            <label for="fname"> First Name </label>
                            <input id="fname" type="text" placeholder="First Name" name="fname" />
                        </div>

                        <div class="item">
                            <label for="lname"> Last Name </label>
                            <input id="lname" type="text" placeholder="Last Name" name="lname" />
                        </div>

                    </div>

                    <div class="columns">
                        
                        <div class="item">
                            <label for="idcard"> ID Card Number </label>
                            <input type="tel" id="idcard" placeholder="ID Card Number" name="idcard">
                        </div>

                        <div class="item">
                            <label for="email">Email Address</label>
                            <input id="email" type="email" placeholder="Email Address"   name="email" />
                        </div>

                    </div>

                    <div class="columns">

                        <div class="item">
                            <label for="phone"> Phone Number </label>
                            <input type="tel" id="phone" placeholder="Phone Number" name="phone">
                        </div>

                    </div>

                    <div class="columns">

                        <div class="item special">
                            <label for="residentialaddress"> Residential Address </label>
                            <input type="text" id="residentialaddress" placeholder="Full Address" name="residentialaddress">
                        </div>

                    </div>

                    <div class="columns">
                        <div class="item">
                            <label for="city">City</label>
                            <input id="city" type="text" placeholder="City"   name="city" />
                        </div>
                        <div class="item">
                            <label for="zipcode"> Zip Code </label>
                            <input type="text" id="zipcode" placeholder="Zip Code" name="zipcode">
                        </div>
                    </div>

                </fieldset>

                <div class="btn-block">
                    <button class="btn" type="submit">
                        Book
                    </button>
                </div>


            </form>

        </div>


        <!--------------- Short About -------------->
        <!-- <h2 class="sub-title">About Prestige Co. </h2> -->
        <div class="short-about">
            <h2> About Prestige Co. </h2>
            <p>Prestige Co. is a luxury hotel chain known for providing exceptional 
                service, elegant accommodations, and world-class amenities to its 
                guests. With a strong focus on customer satisfaction, the company has 
                built a reputation for delivering unparalleled experiences that leave 
                a lasting impression. Prestige Co. is committed to innovation and staying at 
                the forefront of the hospitality industry, consistently raising the bar for what 
                guests can expect from a luxury hotel stay.
            </p>
        </div>

        <!--------------- Footer -------------->
        <div class="footer">
            <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://youtube.com"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a>
            <hr>
            <p>Copyright &copy; 2023, Prestige Co.</p>
        </div>

        </div>


    </div>

<script src="/assets/js/home.js"> </script>
<script src="/assets/phone/js/intlTelInput.js"> </script>
<script> 
    var input = document.querySelector("#phone");
    window.intlTelInput(input,{});
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
