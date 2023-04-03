@extends('layouts.dash')

@section('content')
<div class='admin'>
    <div class='container'>

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
</div>
@endsection