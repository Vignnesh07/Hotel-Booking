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
                        <p> Room Type </p>
                        <select>
                            <option value="" disabled selected>Select Room Type</option>
                            <option value="1" >Single</option>
                            <option value="2">Double</option>
                            <option value="3">Triple</option>
                            <option value="4" >Queen</option>
                            <option value="5">King</option>
                            <option value="6">Studio</option>
                            <option value="7">Executive Suite</option>
                            <option value="8">Presidential Suite</option>
                        </select>
                    </div>

                    <div class="item">
                        <p> Room No </p>
                        <select>
                            <option value="" disabled selected>Select Room No</option>
                            <option value="1" >SI001-SI010</option>
                            <option value="2">DO001-DO010</option>
                            <option value="3">TR001-TR005</option>
                            <option value="4" >QU001-QU010</option>
                            <option value="5">KI001-KI010</option>
                            <option value="6">ST001-ST010</option>
                            <option value="7">ES001-ES003</option>
                            <option value="8">PS001-PS003</option>
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
                    
                    <!--partially done-->
                    <div class="item">
                        <label for="phonenumber"> Phone Number </label>
                        <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="phonenumber">
                    </div>

                    <div class="item">
                        <label for="testing"> Testing </label>
                        <input id="testing" type="testing" placeholder="Testing" name="testing" />
                    </div>

                </div>

            </fieldset>
        </form>

    </div>



    <!--------------- Ignore First section -------------->
    <h2 class="sub-title">---Ignore Everthing below---</h2>

    <h2 class="sub-title">Well-Appointed Room In A <br> Vibrant City</h2>
    <p class="sub-description">Prestige Co. offers 125 rooms and suites spread over 9 floors, with a taste of luxury, and views of the city.
        <br>Each room has its own unique charm and comes with an oversized soaking tub, or relaxation pool, offering perfection for modern 
        <br>travellers looking for a stylish urban getaway.</p>

    <div class="roomtype">

        <div>
            <img class="room-img" src="assets/img/room_1.png">
            <span>
                <h3>Single</h3>
            </span>
        </div>
        <div>
            <img  class="room-img" src="assets/img/room_1.png">
            <span>
                <h3>Double</h3>
            </span>
        </div>
        <div>
            <img class="room-img" src="assets/img/room_1.png">
            <span>
                <h3>Triple</h3>
            </span>
        </div>
        <div>
            <img class="room-img" src="assets/img/room_1.png">
            <span>
                <h3>Queen</h3>
            </span>
        </div>
        <div>
            <img class="room-img" src="assets/img/room_1.png">
            <span>
                <h3>King</h3>
            </span>
        </div>
        <div>
            <img class="room-img" src="assets/img/room_1.png">
            <span>
                <h3>Studio</h3>
            </span>
        </div>
        <div>
            <img class="room-img" src="assets/img/room_1.png">
            <span>
                <h3>Executive Suite</h3>
            </span>
        </div>
        <div>
            <img class="room-img" src="assets/img/room_1.png">
            <span>
                <h3>Presidential Suite</h3>
            </span>
        </div>

    </div>


    <!--------------- Customer's Feedback section -------------->
    <h2 class="sub-title">Customer's Feedback</h2>
    <div class="">
        <div>
            <img class="room-img" src="assets/img/room_1.png" style="width: 150px">
            <h3>Presidential Suite</h3>
        </div>
    </div>


    <!--------------- Short About -------------->
    <h2 class="sub-title">Short About</h2>
    <div class="">
        <div>
            <img class="room-img" src="assets/img/room_1.png" style="width: 150px">
            <h3>Presidential Suite</h3>
        </div>
    </div>

    <!--------------- Footer -------------->
    <h2 class="sub-title">Footer</h2>
    <div class="">
        <div>
            <img class="room-img" src="assets/img/room_1.png" style="width: 150px">
            <h3>Presidential Suite</h3>
        </div>
    </div>


</div>
@endsection