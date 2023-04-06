@extends('layouts.dash')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                <form method='POST' action='{{ route("add.staff") }}'>
                    @csrf
                    <legend>Add Staff</legend>

                    <div class='form-content'>
                        <div class='items'>
                            <label for='name'>Name: </label>
                            <input type='text' id='name' name="name" placeholder='Enter name' required>

                        </div>

                        <div class='items'>
                            <label for='email'>Email: </label>
                            <input type='text' id='email' name="email" placeholder='Enter email' required>

                        </div>

                        <div class='items'>
                            <label for='authority'>Authority: </label>
                            <select id='authority' name='authority' equired>
                                <option value='Admin'>Admin</option>
                                <option value='Clerk'>Clerk</option>
                            </select>

                        </div>
                        <div class='items'>
                            <label for='password'>Password:</label>
                            <input type='password' id='password' name="password" placeholder='Enter password' required>

                        </div>
                        <div class='items'>
                            <label for='conf_password'>Confirm Password:</label>
                            <input type='password' id='conf_password' name="conf_password"
                                placeholder='Confirm password' required>

                        </div>

                        <div class="items">
                            <label for="salary">Salary</label>
                            <input id="salary" type="number" name="salary" required />

                        </div>
                        <div class='items'>
                            <label for='phone'>Phone:</label>
                            <input type='tel' id='phone' name="phone" placeholder='01x-xxxxxxx'
                                pattern="[0-9]{3}-[0-9]{7}" required>

                        </div>

                        <div class='items'>
                            <label for='address'>Address: </label>
                            <input type='text' id='address' name="address" placeholder='Enter address' required>

                        </div>
                        <div class='items'>
                            <label for='zipCode'>Zip Code: </label>
                            <input type='text' id='zipCode' name="zipCode" placeholder='Enter zip code' required>

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
                    @foreach($users as $user)
                    <tr>
                        <td class='column-1'>{{$user->id}}</td>
                        <td class='column-2'>{{$user->name}}</td>
                        <td class='column-3'>{{$user->email}}</td>
                        <td class='column-4'>{{$user->authority}}</td>
                        <td class='column-5'>
                            <button type='button' class='editStaff' data-user-id='{{$user->id}}'
                                onclick="window.location='{{ route("edit.staff", ['id' => $user->id]) }}'">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button type='button' class='viewStaff' data-user-id='{{$user->id}}'>
                                <i class="fa-solid fa-eye"></i>
                            </button>
                            <button type='button' class='deleteStaff' data-user-id='{{$user->id}}'>
                                <i class="fa-sharp fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </table>

                <div class="pagination">


                    {{ $users->links('pagination::bootstrap-4') }}

                </div>

            </div>

            <div class="viewStaff-overlay" id='viewStaff-overlay'>
                <div class='view-container'>
                    <h2>Staff Information</h2>
                    <div class="form-content">
                        <div class="content">
                            <p id="staffName">Name <span></span></p>
                            <p id="staffEmail">Email <span></span></p>
                            <p id="staffAuthority">Authority <span></span></p>
                            <p id="staffSalary">Salary <span></span></p>
                            <p id="staffPhone">Phone <span></span></p>
                            <p id="staffAddress">Address <span></span></p>
                            <p id="staffZipCode">Zip Code <span></span></p>
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

                    <button id="confirmDeleteBtn"
                        onclick="window.location.href='{{ url ("/admin/deleteStaff/{$user->id}")}}'">
                        Confirm
                        Delete</button>
                    <button id=" deleteCancelBtn"
                        onclick="window.location.href='{{ url ("/admin/staff")}}'">Cancel</button>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="/assets/js/staff.js"></script>
<script src="/assets/js/staffFunctions.js"></script>

@endsection