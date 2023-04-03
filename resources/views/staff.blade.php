@extends('layouts.dash')

@section('content')
<div>
    <div class='empty-container'>
    </div>
    <div class='staffTable'>
        <div>
            <div class='heading'>
                <h1>Employee Details:</h1>
                <button type='button' class='addStaff'>Add Staff</button>
            </div>
            <div class='staff-overlay'>    
                <form>
                    <legend>Add Staff</legend>

                    <div class='form-content'>
                        <div class='items'>
                            <label for='name'>Name: </label>
                            <input type='text' id='fName' placeholder='Enter name'>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>

                        <div class='items'>
                            <label for='email'>Email: </label>
                            <input type='text' id='fEmail' placeholder='Enter email'>
                            <!-- <div class="error-span">
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">
                                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                    Please fill in the required fill
                                </strong>
                            </span>
                            </div> -->
                        </div>      
                        
                        <div class='items'>
                            <label for='authority'>Authority: </label>
                            <select id='authority'>
                                <option value='Admin'>Admin</option>
                                <option value='Staff'>Staff</option>
                            </select>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                        <div class='items'>
                            <label for='password'>Password:</label>
                            <input type='password' id='password' placeholder='Enter password'>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                            
                        <div class="items">
                            <label for="joiningDate">Joining Date</label>
                            <input id="joiningDate" type="date" name="joiningDate" />
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                        <div class='items'>
                            <label for='phone'>Phone:</label>
                            <input type='tel' id='phone' placeholder='01x-xxxxxxx' pattern="[0-9]{3}-[0-9]{7}" required>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                                
                        <div class='items'>
                            <label for='address'>Address: </label>
                            <input type='text' id='address' placeholder='Enter address'>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                        <div class='items'>
                            <label for='zipCode'>Zip Code: </label>
                            <input type='text' id='zipCode' placeholder='Enter zip code'>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                                
                        <div class='items'>
                            <label for='city'>City: </label>
                            <input type='text' id='city' placeholder='Enter city'>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                    </div>
                    <div class='button'>
                        <div class='submit-button'>
                            <button type='submit'>Add user</button>
                        </div>
                        <div class='close-button'>
                            <button>Close</button>
                        </div>
                    </div>
                    
                </form>
            </div>
            <hr>

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
            <div>
                <table>
                    <thead>
                        <tr class='first-row'>
                            <th class='column-1'>Staff No</th>
                            <th class='column-2'>Name</th>
                            <th class='column-3'>Email</th>
                            <th class='column-4'>Authority</th>
                            <th class='column-5'>Action</th>
                        </tr>
                    </thead>
                    
                    <tr>
                        <td class='column-1'>1</td>
                        <td>Chong Hau Yong</td>
                        <td>hauyong@gmail.com</td>
                        <td class='column-4'>Admin</td>
                        <td class='column-5'>
                            <button type='button' class='editStaff'>
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button type='button' class='viewStaff'>
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button type='button' class='deleteStaff'>
                                <i class="fa-sharp fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class='column-1'>1</td>
                        <td>Chong Hau Yong</td>
                        <td>hauyong@gmail.com</td>
                        <td class='column-4'>Admin</td>
                        <td class='column-5'>
                            <button type='button' class='editStaff'>
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button type='button' class='viewStaff'>
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button type='button' class='deleteStaff'>
                                <i class="fa-sharp fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class='column-1'>1</td>
                        <td>Chong Hau Yong</td>
                        <td>hauyong@gmail.com</td>
                        <td class='column-4'>Admin</td>
                        <td class='column-5'>
                            <button type='button' class='editStaff'>
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button type='button' class='viewStaff'>
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button type='button' class='deleteStaff'>
                                <i class="fa-sharp fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class='column-1'>1</td>
                        <td>Chong Hau Yong</td>
                        <td>hauyong@gmail.com</td>
                        <td class='column-4'>Admin</td>
                        <td class='column-5'>
                            <button type='button' class='editStaff'>
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button type='button' class='viewStaff'>
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button type='button' class='deleteStaff'>
                                <i class="fa-sharp fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                </table>

                <div class="pagination">
                
                <div class="pagination-button">
                <button id="previous">Previous</button>
                <div id="page-numbers"></div>
                <button id="next">Next</button>
                </div>
            </div>

            </div>

            <div id="editStaff-overlay" class='editStaff-overlay'>    
                <form>
                    <legend>Edit Staff</legend>

                    <div class='form-content'>
                        <div class='items'>
                            <label for='name'>Name: </label>
                            <input type='text' id='fName' placeholder='Enter name'>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                        <div class='items'>
                            <label for='email'>Email: </label>
                            <input type='text' id='fEmail' placeholder='Enter email'>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                    
                        <div class='items'>
                            <label for='authority'>Authority: </label>
                            <select id='authority'>
                                <option value='Admin'>Admin</option>
                                <option value='Staff'>Staff</option>
                            </select>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                        <div class='items'>
                            <label for='password'>Password:</label>
                            <input type='password' id='password' placeholder='Enter password'>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                        
                        <div class="items">
                            <label for="joiningDate">Joining Date</label>
                            <input id="joiningDate" type="date" name="joiningDate" />
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                        <div class='items'>
                            <label for='phone'>Phone:</label>
                            <input type='tel' id='phone' placeholder='01x-xxxxxxx' pattern="[0-9]{3}-[0-9]{7}" required>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                            
                        <div class='items'>
                            <label for='address'>Address: </label>
                            <input type='text' id='address' placeholder='Enter address'>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                        <div class='items'>
                            <label for='zipCode'>Zip Code: </label>
                            <input type='text' id='zipCode' placeholder='Enter zip code'>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                            
                        <div class='items'>
                            <label for='city'>City: </label>
                            <input type='text' id='city' placeholder='Enter city'>
                            <!-- FOR ERROR at dashboard.css-->
                            <!-- <div class="error-span">
                                <span class="invalid-feedback" role="alert">
                                    <strong class="error-message">
                                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                        Please fill in the required fill
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                    </div>
                    <div class='button'>
                        <div class='submit-button'>
                            <button type='submit'>Add user</button>
                        </div>
                        <div class='close-button'>
                            <button type='button'>Close</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="viewStaff-overlay" id='viewStaff-overlay'>
                <div class='view-container'>
                    <h2>Staff Information</h2>
                    <div class="form-content">
                        <div class="content">
                            <p id="staffName">Name <span></span></p>
                            <p id="staffEmail">Email <span></span></p>
                            <p id="staffAuthority">Authority <span></span></p>
                            <p id="staffPassword">Password <span></span></p>
                            <p id="staffJoiningDate">Joining Date <span></span></p>
                            <p id="staffPhone">Phone <span></span></p>
                            <p id="staffAddress">Address <span></span></p>
                            <p id="staffZipCode">Zip Code <span></span></p>
                            <p id="staffCity">City <span></span></p>
                        </div>
                    </div>
                    <div class="content-button">
                        <button class="close-button" id="viewCloseBtn">Close</i></button>
                    </div>
                </div>
                
            </div>

            <div class="deleteStaff-overlay" id="deleteStaff-overlay">
                <div class="delete-container">
                    <p>Confirm Delete?</p>
                    <button id="confirmDeleteBtn">Confirm Delete</button>
                    <button id="deleteCancelBtn">Cancel</button>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="/assets/js/staff.js"> </script>

@endsection
