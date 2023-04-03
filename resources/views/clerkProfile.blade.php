@extends('layouts.app')

@section('content')

<div class="header">
    <div class="header-bg" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url('/assets/img/clerk_bg.png');"></div>
    <div class="container-clerk">
        <div class="container-overlay">
            <div class="left-image">
                <img class="profile-image" src="/assets/img/profile.png">

            </div>
            <div class="right-information">
                <div class="columns">
                    <div class="item special item-clerk">
                        <label for="clerk-name">Name</label>
                        <p  class="clerk-name">Yong Li Jonn</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="item item-clerk">
                        <label for="clerk-authority">Authority</label>
                        <p  class="clerk-authority">Clerk</p>
                    </div>

                    <div class="item item-clerk">
                        <label for="clerk-joindate">Joining Date</label>
                        <p class="clerk-joindate">2023-4-3</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="item item-clerk">
                        <label for="clerk-email">Email</label>
                        <p class="clerk-email">yonglijonn07@hotmail.com</p>
                    </div>
                    <div class="item item-clerk">
                        <label for="clerk-phone">Phone</label>
                        <p  class="clerk-phone">+60123245698</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="item special item-clerk">
                        <label for="clerk-address">Residential Address</label>
                        <p class="clerk-address">No.90, Lorong Pokok Sekat 9</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="item item-clerk">
                        <label for="clerk-city">City</label>
                        <p class="clerk-city">Kuala Lumpur</p>
                    </div>
                    <div class="item item-clerk">
                        <label for="clerk-zipcode">Zip Code</label>
                        <p  class="clerk-zipcode">45450</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">

<!--------------- Short About -------------->
    <div class="short-about about-clerk">
        <h2> Hospitality at Its Finest </h2>
        <p>As a valued member of the Prestige Co. team, our dedicated clerk brings a wealth of 
            hospitality experience and commitment to customer service. With a friendly and professional 
            demeanor, they strive to provide each guest with a memorable and enjoyable stay. Whether you 
            need assistance with check-in, recommendations for local activities, or anything in between, our 
            clerk is always ready to assist you with a smile. Their attention to detail and commitment to 
            excellence ensure that every guest at Prestige Co. receives the highest level of service possible.
        </p>
    </div>


</div>
@endsection