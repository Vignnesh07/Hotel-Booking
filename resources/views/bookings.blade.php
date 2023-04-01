@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class="sub-title">Bookings List</h2>
    <div class="container-table">

        <div class="bookings-table">

            <div class="entries-search">
                <div class="show-entries">
                    <label for="entries-per-page">Show:</label>
                    <select id="entries-per-page" class="select-entries">
                        <option value="5">5</option>
                        <option value="10" selected>10</option>
                        <option value="15">15</option>
                    </select>
                    <span>entries</span>
                </div>
                <div class="search-section">
                    <div class="search">
                        <label class="search-label" for="search-bar">Search</label>
                        <input type="search" id="search-bar" class="search-bar" />
                    </div>
                    <button type="button" class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <table id="my-table">
                <thead>
                    <tr class="table-head">
                        <th class="column1">Booking ID.</th>
                        <th class="column2">Room No.</th>
                        <th class="column3">Room Type</th>
                        <th class="column4">Booking Status</th>
                        <th class="column5">Check In</th>
                        <th class="column6">Check Out</th>
                        <th class="column7">Payment</th>
                        <th class="column8">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- ----------- new bookings will be added here ---------- -->
                    
                </tbody>
            </table>

            <div class="pagination">
                <button id="previous">Previous</button>
                <div id="page-numbers"></div>
                <button id="next">Next</button>
            </div>
        </div>
    </div>

    <div class="overlay" id="paymentConfirmationOverlay">
      <div class="popup" id="paymentConfirmationPopup">
        <p>Confirm Payment?</p>
        <button id="confirmPaymentBtn">Confirm Payment</button>
        <button id="paymentCancelBtn">Cancel</button>
      </div>
    </div>

    <div class="overlay" id="editOverlay">
      <div class="popup" id="editPopup">
        
        <div>
          <span id="popup-fname-label">First Name: </span>
          <input type="text" id="popup-fname-input" style="display: none" />
          <i class="fa-solid fa-pen-to-square" id="editFNameIcon"></i>
        </div>

        <div>
          <span id="popup-lname-label">Last Name: </span>
          <input type="text" id="popup-lname-input" style="display: none" />
          <i class="fa-solid fa-pen-to-square" id="editLNameIcon"></i>
        </div>

        <div>
          <span id="popup-idcard-label">ID Card Number: </span>
          <input type="text" id="popup-idcard-input" style="display: none" />
          <i class="fa-solid fa-pen-to-square" id="editIdCardIcon"></i>
        </div>

        <div>
          <span id="popup-email-label">Email Address: </span>
          <input type="email" id="popup-email-input" style="display: none" />
          <i class="fa-solid fa-pen-to-square" id="editEmailIcon"></i>
        </div>

        <div>
          <span id="popup-phonenumber-label">Phone Number: </span>
          <input type="number" id="popup-phonenumber-input" style="display: none" />
          <i class="fa-solid fa-pen-to-square" id="editPhoneNumberIcon"></i>
        </div>

        <div>
          <span id="popup-residentialaddress-label">Residential Address: </span>
          <input type="text" id="popup-residentialaddress-input" style="display: none" />
          <i class="fa-solid fa-pen-to-square" id="editResidentialAddressIcon"></i>
        </div>

        <div>
          <span id="popup-city-label">City: </span>
          <input type="text" id="popup-city-input" style="display: none" />
          <i class="fa-solid fa-pen-to-square" id="editCityIcon"></i>
        </div>

        <div>
          <span id="popup-zipcode-label">Zip Code: </span>
          <input type="text" id="popup-zipcode-input" style="display: none" />
          <i class="fa-solid fa-pen-to-square" id="editZipCodeIcon"></i>
        </div>

        <button id="editSaveBtn">Save</button>
        <button id="editCancelBtn">Cancel</button>
      </div>
    </div>

    <div class="overlay" id="viewOverlay">
      <div class="popup" id="viewPopup">
        <p>Customer Information:</p>
        <p id="popup-customername">Customer Name:</p>
        <p id="popup-idcardnumber">ID Card Number:</p>
        <p id="popup-emailaddress">Email Address:</p>
        <p id="popup-phonenumber">Phone Number:</p>
        <p id="popup-residentialaddress">Residential Address:</p>
        <p id="popup-city">City:</p>
        <p id="popup-zipcode">Zip Code:</p>
        <p id="popup-amount">Total Amount:</p>
        <button id="viewCloseBtn">Close</button>
      </div>
    </div>

    <div class="overlay" id="historyOverlay">
      <div class="popup" id="historyPopup">
        <p>Bookings History:</p>
        <p id="popup-customername">Customer Name:</p>
        <p id="popup-roomtype">Room Type:</p>
        <p id="popup-roomnumber">Room Number:</p>
        <p id="popup-checkindate">Check In:</p>
        <p id="popup-checkoutdate">Check Out:</p>
        <p id="popup-stays">Total Stays:</p>
        <p id="popup-prices">Prices:</p>
        <p id="popup-amount">Total Amount:</p>
        <button id="historyCloseBtn">Close</button>
      </div>
    </div>



    <!--------------- Footer -------------->
    <div class="footer">
        <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
        <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <hr>
        <p>Copyright &copy; 2023, Prestige Co.</p>
    </div>


</div>
@endsection