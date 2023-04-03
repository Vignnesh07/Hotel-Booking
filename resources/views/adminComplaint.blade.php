@extends('layouts.dash')

@section('content')

<div class="container">

    <div class="container-all-complaint">
        <div class="container-complaint-form">
            <div class="add-colour"></div>
            <br ><br><br>
            <h2 class="sub-title">Complaint Management</h2>
            <form id="submitComplaintForm">
                <h3>Complaint Form</h3>

                <hr>

                <div class="columns c-column">
                    <div class="item">
                        <label for="cName">Complaint Name:</label>
                        <input type="text" name="cName" placeholder="Complaint Name" />
                    </div>

                    <div class="item">
                        <label for="cType">Complaint Type:</label>
                        <input type="text" name="cType" placeholder="Complaint Type" />
                    </div>
                </div>

                <div class="columns c-column">
                    <div class="item special">
                        <label for="cDescription">Please Describe Your Complaints:</label>
                        <input type="text" name="cDescription" placeholder="Complaint" />
                    </div>
                </div>

                <div class="button-complaint">
                    <button type="submit" class="submitComplaint">Submit</button>
                    <button type="button" class="resetComplaint">Reset</button>
                </div>

            </form>

        </div>

        <br>


        <div class="container-complaint-table">

            <h3>Complaint List</h3>
            <hr>

            <div class="complaints-table">

                <div class="entries-search">
                    <div class="show-entries">
                        <label for="entries-per-page-complaints">Show:</label>
                        <select id="entries-per-page-complaints" class="select-entries">
                            <option value="5">5</option>
                            <option value="10" selected>10</option>
                            <option value="15">15</option>
                        </select>
                        <span>entries</span>
                    </div>
                    <div class="search-section">
                        <div class="search">
                            <label class="search-label" for="search-bar-complaints">Search</label>
                            <input type="search" id="search-bar-complaints" class="search-bar" />
                        </div>
                        <button type="button" class="search-btn" id="search-btn-complaints">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <table id="complaints-table">
                    <thead>
                        <tr class="table-head">
                            <th class="complaint-column1" id="c-bookings1">#</th>
                            <th class="complaint-column2" id="c-bookings2">Complaint Name</th>
                            <th class="complaint-column3" id="c-bookings3">Complaint Type</th>
                            <th class="complaint-column4" id="c-bookings4">Complaint</th>
                            <th class="complaint-column5" id="c-bookings5">Created Date</th>
                            <th class="complaint-column6" id="c-bookings6">Resolve</th>
                            <th class="complaint-column7" id="c-bookings7">Budget</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="complaint-column1">1</td>
                        <td class="complaint-column2">Chong Hau Yong</td>
                        <td class="complaint-column3">Room Windows</td>
                        <td class="complaint-column4"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </td>
                        <td class="complaint-column5">Jul 16 2020</td>
                        <td class="complaint-column6">
                            <span id="dateBtn">
                                <button class='resolve-btn bookings-btn'>Resolve</button>
                            </span>
                        </td >
                        <td class="complaint-column7">Budget</td>
                    </tr>
                    <tr>
                        <td class="complaint-column1">1</td>
                        <td class="complaint-column2">Chong Hau Yong</td>
                        <td class="complaint-column3">Room Windows</td>
                        <td class="complaint-column4"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </td>
                        <td class="complaint-column5">Jul 16 2020</td>
                        <td class="complaint-column6">
                            <span id="dateBtn">
                                <button class='resolve-btn'>Resolve</button>
                            </span>
                        </td >
                        <td class="complaint-column7">Budget</td>
                    </tr>
                                            <!-- ----------- new complaints will be added here ---------- -->
                                            
                    </tbody>
                </table>

                <div class="pagination">
                    <div></div>
                    <div class="pagination-button">
                        <button id="previous">Previous</button>
                        <div id="page-numbers"></div>
                        <button id="next">Next</button>
                    </div>
                    
                </div>

                <div class="resolve-overlay" id="resolve-overlay">
                    <div class="resolve-container">
                        <p>Complaint Resolve</p>
                        <div>
                            <label class="budget">Budget</label>
                            <input type="number" class="budget" placeholder='Budget'/>
                        </div>
                        <div class='resolveButtonBox'>
                            <button id="resolveBtn">Resolve</button>
                            <button id="resolveCancelBtn">Cancel</button>
                        </div>
                        
                    </div>
                </div>
                
            </div>

        </div>

    </div>

</div>

@endsection
