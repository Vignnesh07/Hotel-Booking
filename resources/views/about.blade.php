@extends('layouts.app')

@section('content')

<div class="header">
    <div class="header-bg" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url('/assets/img/home_bg.png');"></div>
    <div class="container">
        <h1> Book Luxury Stays Seamlessly </h1>
    </div>
</div>

<div class="container">

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

</div>
@endsection