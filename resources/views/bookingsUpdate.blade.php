@extends('layouts.app')

@section('content')
        
<div class="header">
    <div class="header-bg" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.2)), url('/assets/img/home_bg.png');"></div>
    <div class="container">
        <h1 class="text-background"> Book Luxury Stays Seamlessly </h1>
    </div>
</div>

<div class="container">
    <h2 class="sub-title">{{ $bookingDetails['fName'] }} {{ $bookingDetails['lName'] }}</h2>

    <div class="form-box">
        <form method="POST" label="{{ __('Update') }}" id="update-booking-form">
            @csrf
            <fieldset>
                <legend>Room Information</legend>
                <div class="columns">
                    <div class="item">
                        <input type="hidden" id='id' name="id" value="{{ $bookingDetails['id'] }}">
                        <label for="roomtype">Room Type</label>
                        <select id="roomtype" name="roomType" onchange="filterRooms()" required>
                            <option value="{{ strtolower($bookingDetails['roomType']) }}" selected>{{ ucfirst($bookingDetails['roomType']) }} (Previously selected)</option>
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
                        <select id="roomnumber" name="roomNumber" required>
                            <option value="{{ $bookingDetails['roomNumber'] }}" selected>{{ $bookingDetails['roomNumber'] }} (Previously selected)</option>
                        </select>
                    </div>
                </div>
                <!-- FOR ERROR -->
                <div class="columns ">
                    @error('roomType')
                    <div class="error-span">
                        <span class="invalid-feedback" role="alert">
                            <strong class="error-message">
                                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                Please fill in the required fill
                            </strong>
                        </span>
                    </div>
                    @enderror

                    @error('roomNumber')
                    <div class="error-span">
                        <span class="invalid-feedback" role="alert">
                            <strong class="error-message">
                                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                Please fill in the required fill
                            </strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="columns">
                    <div class="item">
                        <label for="checkindate">Check-in Date</label>
                        <div class="datepicker-container">
                            <input
                                id="checkindate"
                                type="text"
                                name="checkInDate"
                                readonly
                                placeholder="Select check-in date"
                                value="{{ $bookingDetails['checkInDate'] }}"
                                required
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
                                name="checkOutDate"
                                readonly
                                placeholder="Select check-out date"
                                value="{{ $bookingDetails['checkOutDate'] }}"
                                required
                            />
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                    </div>
                </div>
                <!-- FOR ERROR -->
                <div class="columns ">
                    @error('checkInDate')
                    <div class="error-span">
                        <span class="invalid-feedback" role="alert">
                            <strong class="error-message">
                                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                Please fill in the required fill
                            </strong>
                        </span>
                    </div>
                    @enderror

                    @error('checkOutDate')
                    <div class="error-span">
                        <span class="invalid-feedback" role="alert">
                            <strong class="error-message">
                                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                Please fill in the required fill
                            </strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <br>

                <div class="results">
                    <h3 id="stays">Total Stays:</h3>
                    <h3 id="prices">Prices:</h3>
                    <h3 id="amount">Total Amount:</h3>
                    <input type="hidden" id="bookingAmount-field" name="bookingAmount" value="{{ $bookingDetails['bookingAmount'] }}">
                </div>

                <br>
            </fieldset>

            <br><br>

            <fieldset>
                <legend>Customer Information</legend>
                <div class="columns">
                    <div class="item">
                        <label for="fname"> First Name </label>
                        <input id="fname" type="text" placeholder="First Name" name="fName" value="{{ $bookingDetails['fName'] }}" required/>
                    </div>
                    <div class="item">
                        <label for="lname"> Last Name </label>
                        <input id="lname" type="text" placeholder="Last Name" name="lName" value="{{ $bookingDetails['lName'] }}" required/>
                    </div>
                </div>
                <!-- FOR ERROR -->
                <div class="columns">
                    @error('fName')
                    <div class="error-span">
                        <span class="invalid-feedback" role="alert">
                            <strong class="error-message">
                                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                Please fill in the required fill
                            </strong>
                        </span>
                    </div>
                    @enderror

                    @error('lName')
                    <div class="error-span">
                        <span class="invalid-feedback" role="alert">
                            <strong class="error-message">
                                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                Please fill in the required fill
                            </strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="columns">
                    <div class="item">
                        <label for="idcard"> ID Card Number </label>
                        <input type="text" id="idcard" placeholder="ID Card Number" name="idCard" value="{{ $bookingDetails['idCard'] }}" required/>
                    </div>
                    <div class="item">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" placeholder="Email Address" name="email" value="{{ $bookingDetails['email'] }}" required/>
                    </div>
                </div>

                <!-- FOR ERROR -->
                <div class="columns">
                    @error('idCard')
                    <div class="error-span">
                        <span class="invalid-feedback" role="alert">
                            <strong class="error-message">
                                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                Please fill in the required fill
                            </strong>
                        </span>
                    </div>
                    @enderror

                    @error('email')
                    <div class="error-span">
                        <span class="invalid-feedback" role="alert">
                            <strong class="error-message">
                                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                Please fill in the required fill
                            </strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="columns">
                    <div class="item">
                        <label for="phone"> Phone Number </label>
                        <input type="tel" id="phone" placeholder="Phone Number" name="phone" value="{{ $bookingDetails['phone'] }}" required/>
                    </div>
                </div>
                <!-- FOR ERROR -->
                <div class="columns">
                    @error('phone')
                    <div class="error-span">
                        <span class="invalid-feedback" role="alert">
                            <strong class="error-message">
                                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                Please fill in the required fill
                            </strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="columns">
                    <div class="item special">
                        <label for="residentialaddress"> Residential Address </label>
                        <input type="text" id="residentialaddress" placeholder="Address" name="address" value="{{ $bookingDetails['address'] }}" required/>
                    </div>
                </div>
                <!-- FOR ERROR -->
                <div class="columns">
                    @error('address')
                    <div class="error-span">
                        <span class="invalid-feedback" role="alert">
                            <strong class="error-message">
                                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                Please fill in the required fill
                            </strong>
                        </span>
                    </div>
                    @enderror
                </div>

                <div class="columns">
                    <div class="item">
                        <label for="city">City</label>
                        <input id="city" type="text" placeholder="City" name="city" value="{{ $bookingDetails['city'] }}" required/>
                    </div>
                    <div class="item">
                        <label for="zipcode"> Zip Code </label>
                        <input type="text" id="zipcode" placeholder="Zip Code" name="zipCode" value="{{ $bookingDetails['zipCode'] }}" required/>
                    </div>
                </div>
                <!-- FOR ERROR -->
                <div class="columns ">
                    @error('city')
                    <div class="error-span">
                        <span class="invalid-feedback" role="alert">
                            <strong class="error-message">
                                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                Please fill in the required fill
                            </strong>
                        </span>
                    </div>
                    @enderror

                    @error('zipCode')
                    <div class="error-span">
                        <span class="invalid-feedback" role="alert">
                            <strong class="error-message">
                                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                Please fill in the required fill
                            </strong>
                        </span>
                    </div>
                    @enderror
                </div>
            </fieldset>

            <div class="btn-block">
                <button class="btn" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection