@extends('layouts.app')

@section('content')
        
<div class="header">
    <div class="header-bg" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.2)), url('/assets/img/home_bg.png');"></div>
    <div class="container">
        <h1 class="text-background"> Book Luxury Stays Seamlessly </h1>
    </div>
</div>

<div class="container">

    <h2 class="sub-title">Accomodation Reservations</h2>

    <div class="form-box">

        <form  id="submitReservationForm" method="post">

            <fieldset>

                <legend>Room Information</legend>
                <div class="columns">

                    <div class="item">
                        <label for="roomtype">Room Type</label>
                        <select id="roomtype"  name="roomtype" onchange="filterRooms()">
                            <option value="" disabled selected>Select Room Type</option>
                            <option value="single">Single</option>
                            <option value="double">Double</option>
                            <option value="triple">Triple</option>
                            <option value="queen">Queen</option>
                            <option value="king">King</option>
                            <option value="studio">Studio</option>
                            <option value="executive">Executive Suite</option>
                            <option value="presidential">Presidential Suite</option>
                        </select>
                    </div>
                    <div class="item">
                        <label for="roomnumber">Room Number</label>
                        <select id="roomnumber" name="roomnumber">

                        </select>
                    </div>
                </div>
                
                <!-- FOR ERROR -->
                <div class="columns ">
                    <!-- <div class="error-span">
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">
                                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                    Please fill in the required fill
                                </strong>
                            </span>
                    </div>
                    <div class="error-span">
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">
                                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                    Please fill in the required fill
                                </strong>
                            </span>
                    </div> -->
                </div>

                <div class="columns">

                    <div class="item">
                        <label for="checkindate">Check-in Date</label>
                        <div class="datepicker-container">
                            <input
                            id="checkindate"
                            type="text"
                            name="checkindate"
                            readonly
                            placeholder="Select check-in date"
                            />
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        
                    </div>

                    <div class="item">
                        <label for="checkoutdate">Check-out Date</label>
                        <div class="datepicker-container">
                            <input
                            id="checkoutdate"
                            type="text"
                            name="checkoutdate"
                            readonly
                            placeholder="Select check-out date"
                            />
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                    </div>

                </div>

                <!-- FOR ERROR -->
                <div class="columns ">
                    <!-- <div class="error-span">
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">
                                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                    Please fill in the required fill
                                </strong>
                            </span>
                    </div>
                    <div class="error-span">
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">
                                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                    Please fill in the required fill
                                </strong>
                            </span>
                    </div> -->
                </div>

                <br>

                <div class="results">
                    <h3 id="stays">Total Stays:</h3>
                    <h3 id="prices">Prices:</h3>
                    <h3 id="amount">Total Amount:</h3>
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
                <!-- FOR ERROR -->
                <div class="columns ">
                    <!-- <div class="error-span">
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">
                                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                    Please fill in the required fill
                                </strong>
                            </span>
                    </div>
                    <div class="error-span">
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">
                                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                    Please fill in the required fill
                                </strong>
                            </span>
                    </div> -->
                </div>

                <div class="columns">

                    <div class="item">
                        <label for="idcard"> ID Card Number </label>
                        <input type="text" id="idcard" placeholder="ID Card Number" name="idcard">
                    </div>

                    <div class="item">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" placeholder="Email Address" name="email" />
                    </div>

                </div>

                <!-- FOR ERROR -->
                <div class="columns ">
                    <!-- <div class="error-span">
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">
                                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                    Please fill in the required fill
                                </strong>
                            </span>
                    </div>
                    <div class="error-span">
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">
                                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                    Please fill in the required fill
                                </strong>
                            </span>
                    </div> -->
                </div>

                <div class="columns">

                    <div class="item">
                        <label for="phone"> Phone Number </label>
                        <input type="tel" id="phone" placeholder="Phone Number" name="phone">
                    </div>

                </div>

                <!-- FOR ERROR -->
                <div class="columns ">
                    <!-- <div class="error-span">
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">
                                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                    Please fill in the required fill
                                </strong>
                            </span>
                    </div> -->
                </div>

                <div class="columns">

                    <div class="item special">
                        <label for="residentialaddress"> Residential Address </label>
                        <input type="text" id="residentialaddress" placeholder="Address" name="residentialaddress">
                    </div>

                </div>

                <!-- FOR ERROR -->
                <div class="columns ">
                    <!-- <div class="error-span">
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">
                                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                    Please fill in the required fill
                                </strong>
                            </span>
                    </div> -->
                </div>

                <div class="columns">
                    <div class="item">
                        <label for="city">City</label>
                        <input id="city" type="text" placeholder="City" name="city" />
                    </div>
                    <div class="item">
                        <label for="zipcode"> Zip Code </label>
                        <input type="text" id="zipcode" placeholder="Zip Code" name="zipcode">
                    </div>
                </div>

                <!-- FOR ERROR -->
                <div class="columns ">
                    <!-- <div class="error-span">
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">
                                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                    Please fill in the required fill
                                </strong>
                            </span>
                    </div>
                    <div class="error-span">
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">
                                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                    Please fill in the required fill
                                </strong>
                            </span>
                    </div> -->
                </div>

            </fieldset>

            <div class="btn-block">
                <button class="btn" type="submit">
                    Book
                </button>
            </div>


        </form>

        <div id="overlay" class="overlay">
            <div class="popup">

                <h2>Booking Summary</h2>
                <div class="confirm-box">
                    <p class="confirm-message">
                        Please confirm your submission:
                    </p>
                </div>

                <div class="content">
                    <p id="popup-name">Name <span></span></p>
                    <p id="popup-roomtype">Type <span></span></p>
                    <p id="popup-roomnumber">Room Number <span></span></p>
                    <p id="popup-checkindate">Check In <span></span></p>
                    <p id="popup-checkoutdate">Check Out <span></span></p>
                    <p id="popup-stays">Total Stays <span></span></p>
                    <p id="popup-prices"> Prices <span></span></p>
                    <p id="popup-amount"> Total Amount <span></span></p>
                </div>
                <div class="content-button">
                    <button class="confirmBtn" id="confirmBtn" type="submit" >Confirm</button>
                    <button class="close-btn" id="close-btn"><i class="fa-solid fa-xmark"></i></button>
                </div>
                

            </div>
        </div>

    </div>


    <!--------------- Short About -------------->
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

</div>


</div>


@endsection