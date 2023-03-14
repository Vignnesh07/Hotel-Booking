@extends('layouts.app')

@section('content')
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


@endsection