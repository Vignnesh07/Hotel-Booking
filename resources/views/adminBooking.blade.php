@extends('layouts.dash')

@section('content')

<div class='booking-sizing'>
    <div class="container">

        <div class="add-colour"></div>
        <br ><br><br>
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
                        <!-- ----------- new bookings will be added here ---------- -->

                    </tbody>
                </table>

                <div class="pagination">

                    <div class="pagination-button">
                        <button id="previous">Previous</button>
                        <div id="page-numbers"></div>
                        <button id="next">Next</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay" id="paymentConfirmationOverlay">
            <div class="popup-payment" id="paymentConfirmationPopup">
                <p>Confirm Payment?</p>
                <button id="confirmPaymentBtn">Confirm Payment</button>
                <button id="paymentCancelBtn">Cancel</button>
            </div>
        </div>

        <div class="overlay" id="deleteConfirmationOverlay">
            <div class="popup-delete" id="deleteConfirmationPopup">
                <p>Confirm Delete?</p>
                <button id="confirmDeleteBtn">Confirm Delete</button>
                <button id="deleteCancelBtn">Cancel</button>
            </div>
        </div>

        <div class="overlay" id="editOverlay">
            <div class="popup" id="editPopup">
                <h2>Edit Customer Information</h2>

                <div class="content">
                    <div class="inputdiv">
                        <div class="flexLabelInput">
                            <label id="popup-fname-label">First Name: <span class="addThings"></span></label>
                            <input type="text" id="popup-fname-input" style="display: none" />
                        </div>
                        <div class="flexPen">
                            <i class="fa-solid fa-pen-to-square" id="editFNameIcon"></i>
                        </div>
                    </div>

                    <div class="inputdiv">
                        <div class="flexLabelInput">
                            <label id="popup-lname-label">Last Name: <span class="addThings"></span></label>
                            <input type="text" id="popup-lname-input" style="display: none" />
                        </div>
                        <div class="flexPen">
                            <i class="fa-solid fa-pen-to-square" id="editLNameIcon"></i>
                        </div>
                    </div>

                    <div class="inputdiv">
                        <div class="flexLabelInput">
                            <label id="popup-idcard-label">ID Card Number: <span class="addThings"></span></label>
                            <input type="text" id="popup-idcard-input" style="display: none" />
                        </div>
                        <div class="flexPen">
                            <i class="fa-solid fa-pen-to-square" id="editIdCardIcon"></i>
                        </div>
                    </div>

                    <div class="inputdiv">
                        <div class="flexLabelInput">
                            <label id="popup-email-label">Email Address: <span class="addThings"></span></label>
                            <input type="email" id="popup-email-input" style="display: none" />
                        </div>
                        <div class="flexPen">
                            <i class="fa-solid fa-pen-to-square" id="editEmailIcon"></i>
                        </div>
                    </div>

                    <div class="inputdiv">
                        <div class="flexLabelInput">
                            <label id="popup-phonenumber-label">Phone Number: <span class="addThings"></span></label>
                            <input type="number" id="popup-phonenumber-input" style="display: none" />
                        </div>
                        <div class="flexPen">
                            <i class="fa-solid fa-pen-to-square" id="editPhoneNumberIcon"></i>
                        </div>
                    </div>

                    <div class="inputdiv">
                        <div class="flexLabelInput">
                            <label id="popup-residentialaddress-label">Residential Address: <span class="addThings"></span></label>
                            <input type="text" id="popup-residentialaddress-input" style="display: none" />
                        </div>
                        <div class="flexPen">
                            <i class="fa-solid fa-pen-to-square" id="editResidentialAddressIcon"></i>
                        </div>
                    </div>

                    <div class="inputdiv">
                        <div class="flexLabelInput">
                            <label id="popup-city-label">City: <span class="addThings"></span></label>
                            <input type="text" id="popup-city-input" style="display: none" />
                        </div>
                        <div class="flexPen">
                            <i class="fa-solid fa-pen-to-square" id="editCityIcon"></i>
                        </div>
                    </div>

                    <div class="inputdiv">
                        <div class="flexLabelInput">
                            <label id="popup-zipcode-label">Zip Code: <span class="addThings"></span></label>
                            <input type="text" id="popup-zipcode-input" style="display: none" />
                        </div>
                        <div class="flexPen">
                            <i class="fa-solid fa-pen-to-square" id="editZipCodeIcon"></i>
                        </div>
                    </div>
                </div>

                <div class="popup-edit">
                    <button id="editSaveBtn">Save</button>
                    <button id="editCancelBtn">Cancel</button>
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
                    <p id="popup-customername">Customer Name <span></span></p>
                    <p id="popup-roomtype">Room Type <span></span></p>
                    <p id="popup-roomnumber">Room Number <span></span></p>
                    <p id="popup-checkindate">Check In <span></span></p>
                    <p id="popup-checkoutdate">Check Out <span></span></p>
                    <p id="popup-stays">Total Stays <span></span></p>
                    <p id="popup-prices">Prices <span></span></p>
                    <p id="popup-amount">Total Amount <span></span></p>
                </div>

                <div class="content-button">
                    <button class="close-button" id="historyCloseBtn">Close</i></button>
                </div>

            </div>
        </div>

    </div>
</div>


@endsection