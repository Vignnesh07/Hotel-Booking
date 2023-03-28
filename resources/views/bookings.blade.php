@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class="sub-title">Bookings List</h2>
    <div class="container-table100">

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
                    <tr class="table100-head">
                        <th class="column1">Room No.</th>
                        <th class="column2">Room Type</th>
                        <th class="column3">Booking Status</th>
                        <th class="column4">Check In</th>
                        <th class="column5">Check Out</th>
                        <th class="column6">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- -----------Single Room---------- -->
                    <tr>
                        <td class="column1">SI001</td>
                        <td class="column2">Single Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">SI002</td>
                        <td class="column2">Single Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">SI003</td>
                        <td class="column2">Single Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">SI004</td>
                        <td class="column2">Single Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">SI005</td>
                        <td class="column2">Single Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">SI006</td>
                        <td class="column2">Single Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">SI007</td>
                        <td class="column2">Single Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">SI008</td>
                        <td class="column2">Single Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">SI009</td>
                        <td class="column2">Single Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">SI010</td>
                        <td class="column2">Single Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <!-- -----------Double Room---------- -->
                    <tr>
                        <td class="column1">DO001</td>
                        <td class="column2">Double Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">DO002</td>
                        <td class="column2">Double Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">DO003</td>
                        <td class="column2">Double Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">DO004</td>
                        <td class="column2">Double Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">DO005</td>
                        <td class="column2">Double Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">DO006</td>
                        <td class="column2">Double Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">DO007</td>
                        <td class="column2">Double Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">DO008</td>
                        <td class="column2">Double Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">DO009</td>
                        <td class="column2">Double Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                    <tr>
                        <td class="column1">DO010</td>
                        <td class="column2">Double Room</td>
                        <td class="column3">Booked</td>
                        <td class="column4">Checked In</td>
                        <td class="column5">Checked Out</td>
                        <td class="column6">(1) (2) (3)</td>
                    </tr>
                </tbody>
            </table>

            <div class="pagination">
                <button id="previous">Previous</button>
                <div id="page-numbers"></div>
                <button id="next">Next</button>
            </div>

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