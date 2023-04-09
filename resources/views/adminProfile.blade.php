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
                            <p  class="clerk-name">{{ $userData['name'] }}</p>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="item item-clerk">
                            <label for="clerk-authority">Authority</label>
                            <p  class="clerk-authority">{{ ucfirst($userData['role']) }}</p>
                        </div>

                        <div class="item item-clerk">
                            <label for="clerk-joindate">Joining Date</label>
                            <p class="clerk-joindate">{{ $userData['created_at'] -> format('d.m.Y') }}</p>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="item item-clerk">
                            <label for="clerk-email">Email</label>
                            <p class="clerk-email">{{ $userData['email'] }}</p>
                        </div>
                        <div class="item item-clerk">
                            <label for="clerk-phone">Phone</label>
                            <p  class="clerk-phone">{{ $userData['phone'] }}</p>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="item special item-clerk">
                            <label for="clerk-address">Residential Address</label>
                            <p class="clerk-address">{{ $userData['address'] }}</p>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="item item-clerk">
                            <label for="clerk-city">City</label>
                            <p class="clerk-city">{{ $userData['city'] }}</p>
                        </div>
                        <div class="item item-clerk">
                            <label for="clerk-zipcode">Zip Code</label>
                            <p  class="clerk-zipcode">{{ $userData['zipCode'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection