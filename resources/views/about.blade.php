@extends('layouts.app')

@section('content')

<div class="header">
    <div class="header-bg" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.3)), url('/assets/img/about_bg.png');"></div>
    <div class="container">
        <h1 class="text-background"> Discover Our Story </h1>
    </div>
</div>

<div class="container">

    <div class="about-subtitle">
        <h2 class="sub-title">Well-Appointed Room In A <br> Vibrant City</h2>
        <p class="sub-description">Prestige Co. offers 125 rooms and suites spread over 9 floors, with a taste of luxury, and views of the city.
            <br>Each room has its own unique charm and comes with an oversized soaking tub, or relaxation pool, offering perfection for modern 
            <br>travellers looking for a stylish urban getaway.</p>
    </div>
    
    <div class="about-roomtype roomtype-grid1">
        <div class="roomtype-card">
            <div class="roomtype-image">
                <img class="room-img" src="assets/img/room/room1.png">
            </div>
            
            <div class="roomtype-information">
                <h5 class="roomtype-title">Prestige - Single</h5>
                <p class="roomtype-description">A cozy single room perfect for solo travelers, 
                    offering modern amenities and a comfortable space for a restful stay</p>
                <div class="roomtype-list-container">
                    <ul class="roomtype-list">
                        <li class="list-pax">
                            <div><i class="fa-solid fa-people-group fa"></i><span>1</span></div>
                        </li>
                        <li class="list-bed">
                            <div><i class="fa-solid fa-bed fa"></i><span>Single</span></div>
                        </li>
                        <li class="list-sqft">
                            <div><ion-icon class="fa" name="move"></ion-icon>25-30 sqm / 314-360 sqft</div>
                        </li>
                        <li class="list-city">
                            <div><i class="fa-sharp fa-solid fa-city fa"></i>City</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="roomtype-card">
            <div class="roomtype-image">
                <img class="room-img" src="assets/img/room/room2.png">
            </div>
            <div class="roomtype-information">
                <h5 class="roomtype-title">Prestige - Double</h5>
                <p class="roomtype-description">Experience a comfortable stay in our spacious double room, 
                    designed for two guests seeking style and convenience in the city.</p>
                <div class="roomtype-list-container">
                    <ul class="roomtype-list">
                        <li class="list-pax">
                            <div><i class="fa-solid fa-people-group fa"></i><span>2</span></div>
                        </li>
                        <li class="list-bed">
                            <div><i class="fa-solid fa-bed fa"></i><span>Double</span></div>
                        </li>
                        <li class="list-sqft">
                            <div><ion-icon class="fa" name="move"></ion-icon>32-38 sqm / 344-409 sqft</div>
                        </li>
                        <li class="list-city">
                            <div><i class="fa-sharp fa-solid fa-city fa"></i>City</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="roomtype-card">
            <div class="roomtype-image">
                <img class="room-img" src="assets/img/room/room3.png">
            </div>
            <div class="roomtype-information">
                <h5 class="roomtype-title">Prestige - Triple</h5>
                <p class="roomtype-description">Designed for three guests, our triple room offers 
                    ample space and modern amenities to ensure a pleasant and enjoyable stay.</p>
                <div class="roomtype-list-container">
                    <ul class="roomtype-list">
                        <li class="list-pax">
                            <div><i class="fa-solid fa-people-group fa"></i><span>3</span></div>
                        </li>
                        <li class="list-bed">
                            <div><i class="fa-solid fa-bed fa"></i><span>Triple</span></div>
                        </li>
                        <li class="list-sqft">
                            <div><ion-icon class="fa" name="move"></ion-icon>42-60 sqm / 452-646 sqft</div>
                        </li>
                        <li class="list-city">
                            <div><i class="fa-sharp fa-solid fa-city fa"></i>City</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="about-roomtype roomtype-grid2 ">
        <div class="roomtype-card">
            <div class="roomtype-image">
                <img class="room-img" src="assets/img/room/room4.png">
            </div>
            <div class="roomtype-information">
                <h5 class="roomtype-title">Prestige - Executive</h5>
                <p class="roomtype-description">Indulge in luxury with our executive room, featuring a 
                    king-size bed, upscale amenities, and a serene view of the city and courtyard.</p>
                <div class="roomtype-list-container">
                    <ul class="roomtype-list">
                        <li class="list-pax">
                            <div><i class="fa-solid fa-people-group fa"></i><span>2</span></div>
                        </li>
                        <li class="list-bed">
                            <div><i class="fa-solid fa-bed fa"></i><span>King</span></div>
                        </li>
                        <li class="list-sqft">
                            <div><ion-icon class="fa" name="move"></ion-icon>113 sqm / 1,216 sqft</div>
                        </li>
                        <li class="list-city">
                            <div><i class="fa-sharp fa-solid fa-city fa"></i>City<div class="space"><i class="fa-solid fa-tree-city fa"></i>Courtyard</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="roomtype-card">
            <div class="roomtype-image">
                <img class="room-img" src="assets/img/room/room5.png">
            </div>
            <div class="roomtype-information">
                <h5 class="roomtype-title">Prestige - Presidential</h5>
                <p class="roomtype-description">Experience unparalleled opulence in our presidential suite, 
                    complete with a king-size bed, lavish amenities, and stunning city and courtyard views.</p>
                <div class="roomtype-list-container">
                    <ul class="roomtype-list">
                        <li class="list-pax">
                            <div><i class="fa-solid fa-people-group fa"></i><span>2</span></div>
                        </li>
                        <li class="list-bed">
                            <div><i class="fa-solid fa-bed fa"></i><span>King</span></div>
                        </li>
                        <li class="list-sqft">
                            <div><ion-icon class="fa" name="move"></ion-icon>319 sqm / 3,424 sqft</div>
                        </li>
                        <li class="list-city">
                            <div><i class="fa-sharp fa-solid fa-city fa"></i>City<div class="space"></div><i class="fa-solid fa-tree-city fa"></i>Courtyard</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="roomtype-card">
            <div class="roomtype-image">
                <img class="room-img" src="assets/img/room/room6.png">
            </div>
            <div class="roomtype-information">
                <h5 class="roomtype-title">Prestige - Studio</h5>
                <p class="roomtype-description">Enjoy the comfort and functionality of our studio room, 
                    perfect for guests seeking a stylish and well-equipped space for their urban getaway.</p>
                <div class="roomtype-list-container">
                    <ul class="roomtype-list">
                        <li class="list-pax">
                            <div><i class="fa-solid fa-people-group fa"></i><span>2</span></div>
                        </li>
                        <li class="list-bed">
                            <div><i class="fa-solid fa-bed fa"></i><span>Queen</span></div>
                        </li>
                        <li class="list-sqft">
                            <div><ion-icon class="fa" name="move"></ion-icon>64-72 sqm / 678-775 sqft</div>
                        </li>
                        <li class="list-city">
                            <div><i class="fa-sharp fa-solid fa-city fa"></i>City</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="about-roomtype roomtype-grid-special">
        <div class="roomtype-card special">
            <div class="roomtype-image">
                <img class="room-img" src="assets/img/room/room7.png">
            </div>
            <div class="roomtype-information">
                <h5 class="roomtype-title">Prestige - King</h5>
                <p class="roomtype-description">Relax in our spacious king room, boasting a 
                    luxurious king-size bed and modern amenities to make your stay memorable and enjoyable.</p>
                <div class="roomtype-list-container">
                    <ul class="roomtype-list">
                        <li class="list-pax">
                            <div><i class="fa-solid fa-people-group fa"></i><span>2</span></div>
                        </li>
                        <li class="list-bed">
                            <div><i class="fa-solid fa-bed fa"></i><span>King</span></div>
                        </li>
                        <li class="list-sqft">
                            <div><ion-icon class="fa" name="move"></ion-icon>72-76 sqm / 775-818 sqft</div>
                        </li>
                        <li class="list-city">
                            <div><i class="fa-sharp fa-solid fa-city fa"></i>City</div>
                        </li>
                    </ul>
                </div>
            </div>

            </div>

            <div class="roomtype-card special">
                <div class="roomtype-image">
                    <img class="room-img" src="assets/img/room/room8.png">
                </div>
                <div class="roomtype-information">
                    <h5 class="roomtype-title">Prestige - Queen</h5>
                    <p class="roomtype-description">Unwind in our elegant queen room, designed to provide a 
                        perfect blend of comfort and style for discerning travelers.</p>
                    <div class="roomtype-list-container">
                        <ul class="roomtype-list">
                            <li class="list-pax">
                                <div><i class="fa-solid fa-people-group fa"></i><span>2</span></div>
                            </li>
                            <li class="list-bed">
                                <div><i class="fa-solid fa-bed fa"></i><span>Queen</span></div>
                            </li>
                            <li class="list-sqft">
                                <div><ion-icon class="fa" name="move"></ion-icon>68-74 sqm / 726-775 sqft</div>
                            </li>
                            <li class="list-city">
                                <div><i class="fa-sharp fa-solid fa-city fa"></i>City</div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="about-extra-container">
    <h2 class="sub-title about-extra-subtitle">United by Vision, Driven by Passion</h2>
    <p class="sub-description about-extra-description">Prestige Co. is a team of passionate hospitality professionals 
        dedicated to providing unparalleled luxury and service <br>to our guests. From stunningly 
        designed rooms to personalized service, we are committed to excellence <br>in everything we do. 
        Come and experience the sophistication of our hotel for yourself.
    </p>

    <div class="container-our-team">
        <div class="team-container">
            <div class="team1">
                <div class="card2">
                    <img class="team-image" src="assets/img/team/team1.png" style="width:100%">
                    <div class="middle">
                        <h3 class="card-text">Voo Keat Vun</h3>
                        <p class="card-text">Sales Manager</p>
                    </div>
                </div>
            </div>

            <div class="team2">
                <div class="card2">
                    <img class="team-image" src="assets/img/team/team2.png" style="width:100%">
                    <div class="middle">
                        <h3 class="card-text">Vignnesh Ravindran</h3>
                        <p class="card-text">Co-Founder</p>
                    </div>
                </div>
            </div>

            <div class="team3">
                <div class="card2">
                    <img class="team-image" src="assets/img/team/team3.png" style="width:100%">
                    <div class="middle">
                        <h3 class="card-text">Yong Li Jonn</h3>
                        <p class="card-text">CEO & Founder</p>
                    </div>
                </div>
            </div>

            <div class="team4">
                <div class="card2">
                    <img class="team-image" src="assets/img/team/team4.png" style="width:100%">
                    <div class="middle">
                        <h3 class="card-text">Joanne Lim</h3>
                        <p class="card-text">General Manager</p>
                    </div>
                </div>
            </div>

            <div class="team5">
                <div class="card2">
                    <img class="team-image" src="assets/img/team/team5.png" style="width:100%">
                    <div class="middle">
                        <h3 class="card-text">Chong Hau Yong</h3>
                        <p class="card-text">Marketing Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection