@extends('layouts.app')

@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="header">
    <div class="header-bg" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.2)), url('/assets/img/bookings_bg.png');"></div>
    <div class="container">
        <h1 class="text-background"> Booking Details at a Glance </h1>
    </div>
</div>

<div class="container">

    <h2 class="sub-title">Bookings List</h2>

    <div class="container-table">
        <div class="bookings-table">

            <div class="entries-search">
                <div class="show-entries">
                    <label for="entries-per-page-bookings">Show:</label>
                    <select id="entries-per-page-bookings" class="select-entries">
                        <option value="5">5</option>
                        <option value="10" selected>10</option>
                        <option value="15">15</option>
                    </select>
                    <span>entries</span>
                </div>
                <div class="search-section">
                    <div class="search">
                        <label class="search-label" for="search-bar-bookings">Search</label>
                        <input type="search" id="search-bar-bookings" class="search-bar" />
                    </div>
                    <button type="button" class="search-btn" id="search-btn-bookings">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <table id="bookings-table">
                <thead>
                    <tr class="table-head">
                        <th class="bookings-column1" id="c-bookings1">Booking ID.</th>
                        <th class="bookings-column2" id="c-bookings2">Room No.</th>
                        <th class="bookings-column3" id="c-bookings3">Room Type</th>
                        <th class="bookings-column4" id="c-bookings4">Booking Status</th>
                        <th class="bookings-column5" id="c-bookings5">Check In</th>
                        <th class="bookings-column6" id="c-bookings6">Check Out</th>
                        <th class="bookings-column7" id="c-bookings7">Payment</th>
                        <th class="bookings-column8" id="c-bookings8">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td class="bookings-column1" id="c-bookings1">{{ $booking['id'] }}</td>
                            <td class="bookings-column2" id="c-bookings2">{{ $booking['roomNumber'] }}</td>
                            <td class="bookings-column3" id="c-bookings3">
                                @if(strtolower($booking['roomType']) == 'single')
                                    Single Room
                                @elseif(strtolower($booking['roomType']) == 'double')
                                    Double Room
                                @elseif(strtolower($booking['roomType']) == 'triple')
                                    Triple Room
                                @elseif(strtolower($booking['roomType']) == 'queen')
                                    Queen Room
                                @elseif(strtolower($booking['roomType']) == 'king')
                                    King Room
                                @elseif(strtolower($booking['roomType']) == 'studio')
                                    Studio Room
                                @elseif(strtolower($booking['roomType']) == 'executive')
                                    Executive Suite
                                @else
                                    Presidential Suite
                                @endif
                            </td>
                            <td class="bookings-column4" id="c-bookings4">
                                @if($booking['bookingStatus'] == 'completed')
                                    <button class='history-btn bookings-btn' data-booking-id="{{ $booking['id'] }}">History</button>
                                @else
                                    <button class='booked-btn bookings-btn'>Booked</button>
                                @endif
                            </td>
                            <td class="bookings-column5" id="c-bookings5">{{ $booking['checkInDate'] }}</td>
                            <td class="bookings-column6" id="c-bookings6">{{ $booking['checkOutDate'] }}</td>
                            <td class="bookings-column7" id="c-bookings7">
                                @if($booking['paidAmount'] == $booking['bookingAmount'])
                                    RM {{ $booking['paidAmount'] }}
                                @else
                                    <button class='pay-btn bookings-btn' onclick="
                                        if (confirm('Confirm payment for booking ID ({{ $booking['id'] }})?') == true) {
                                            location.href='/bookings/pay/{{ $booking['id'] }}'
                                        }
                                    ">
                                        Pay
                                    </button>
                                @endif
                            </td>
                            <td class="bookings-column8" id="c-bookings8">
                                <div class="actions">
                                    @if($booking['bookingStatus'] != 'completed')
                                        <button class="editBtn" onclick="
                                            location.href='/bookings/update/{{ $booking['id'] }}'
                                        ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    @else 
                                        <button disabled class="editBtn"><i class="fa-solid fa-pen-to-square"></i></button>
                                    @endif
                                    <button class="viewBtn" data-booking-id="{{ $booking['id'] }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                    <button class="delete-btn" type="submit" onclick="
                                        if (confirm('Are you sure about deleting booking ID ({{ $booking['id'] }}) by: {{ $booking['fName'] }} {{ $booking['lName'] }}?') == true) {
                                            location.href='/bookings/delete/{{ $booking['id'] }}'
                                        }
                                    ">
                                        <i class="fa-sharp fa-solid fa-trash delete-btn"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pagination">
                <button onclick="location.href='/home#submitReservationForm'">Back to Reservations</button>
                {!! $bookings->links('vendor.pagination.custom', ['tableID' => 'bookings-table']) !!}
            </div>

        </div>
    </div>

    <div class="overlay" id="viewOverlay">
        <div class="popup" id="viewPopup">
            <h2>Customer Information</h2>
            <div class="content">
                <p id="popup-customername">Customer Name <span></span></p>
                <p id="popup-idcardnumber">ID Card Number <span></span></p>
                <p id="popup-emailaddress">Email Address <span></span></p>
                <p id="popup-phonenumber">Phone Number <span></span></p>
                <p id="popup-residentialaddress">Address <span></span></p>
                <p id="popup-city">City <span></span></p>
                <p id="popup-zipcode">Zip Code <span></span></p>
                <p id="popup-amount">Total Amount <span></span></p>
            </div>
            <div class="content-button">
                <button class="close-button" id="viewCloseBtn">Close</i></button>
            </div>
        </div>
    </div>

    <div class="overlay" id="historyOverlay">
        <div class="popup" id="historyPopup">
            <h2>Booking History</h2>
            <div class="content">
                <p id="popup-bookedAt">Booked At <span></span></p>
                <p id="popup-customername">Customer Name <span></span></p>
                <p id="popup-roomtype">Room Type <span></span></p>
                <p id="popup-roomnumber">Room Number <span></span></p>
                <p id="popup-checkindate">Check In <span></span></p>
                <p id="popup-checkoutdate">Check Out <span></span></p>
                <p id="popup-amount">Total Amount <span></span></p>
            </div>

            <div class="content-button">
                <button class="close-button" id="historyCloseBtn">Close</i></button>
            </div>
        </div>
    </div>
</div>

@endsection