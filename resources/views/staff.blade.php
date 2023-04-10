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
                <form method='POST' action="{{ route('add.staff') }}" label="{{ __('Add Staff') }}">
                    @csrf
                    <legend>Add Staff</legend>

                    <div class='form-content'>
                        <div class='items'>
                            <label for='name'>Name: </label>
                            <input type='text' id='name' name="name" placeholder='Enter name' required>

                        </div>
                        <div class='items'>
                            <label for='email'>Email: </label>
                            <input type='email' id='email' name="email" placeholder='Enter email' required>

                        </div>
                        <div class='items'>
                            <label for='authority'>Authority: </label>
                            <select id='authority' name='authority' required>
                                <option value='admin'>Admin</option>
                                <option value='clerk'>Clerk</option>
                            </select>
                        </div>
                        <div class='items'>
                            <label for='password'>Password:</label>
                            <input type='password' id='password' name="password" minlength="6" placeholder='Enter password' required>
                        </div>
                        <div class='items'>
                            <label for='phone'>Phone:</label>
                            <input type='tel' id='phone' name="phone" placeholder='+x01xxxxxxxx' required>
                        </div>
                        <div class='items'>
                            <label for='address'>Address: </label>
                            <input type='text' id='address' name="address" placeholder='Enter address' required>
                        </div>
                        <div class="items">
                            <label for="city">City</label>
                            <input type="test" id="city" name="city" placeholder='Enter city' required />
                        </div>
                        <div class='items'>
                            <label for='zipCode'>Zip Code: </label>
                            <input type='text' id='zipCode' name="zipCode" placeholder='Enter zip code' required>
                        </div>
                    </div>
                    <div class='button'>
                        <div class='submit-button'>
                            <button type='submit'>{{ __('Add Staff') }}</button>
                        </div>
                        <div class='close-button'>
                            <button>Close</button>
                        </div>
                    </div>
                </form>
            </div>

            <hr><br>

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
                    @foreach($staffs as $staff)
                        <tr>
                            <td class='column-1'>{{ $staff['id']  }}</td>
                            <td class='column-2'>{{ $staff['name']  }}</td>
                            <td class='column-3'>{{ $staff['email']  }}</td>
                            <td class='column-4'>{{ ucfirst($staff['role'])  }}</td>
                            <td class='column-5'>
                                <button type='button' class='editStaff' style="margin-right: 0px; margin-left: 0px;" onclick="
                                    window.location='{{ route('edit.staff', ['id' => $staff['id']]) }}'
                                ">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button type='button' class='viewStaff' style="margin-right: 0px; margin-left: 0px;" data-user-id="{{ $staff['id'] }}">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button type='button' class='deleteStaff' style="margin-right: 0px; margin-left: 0px;" onclick="
                                    if (confirm('Are you sure about deleting staff ID ({{ $staff['id'] }}): {{ $staff['name'] }}?') == true) {
                                        location.href='/admin/deleteStaff/{{ $staff['id'] }}'
                                    }
                                ">
                                    <i class="fa-sharp fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </table>
                
                {!! $staffs->links('vendor.pagination.custom') !!}
            </div>

            <div class="viewStaff-overlay" id='viewStaff-overlay'>
                <div class='view-container'>
                    <h2>Staff Information</h2>
                    <div class="form-content">
                        <div class="content">
                            <p id="staffName">Name <span></span></p>
                            <p id="staffEmail">Email <span></span></p>
                            <p id="staffAuthority">Authority <span></span></p>
                            <p id="staffPhone">Phone <span></span></p>
                            <p id="staffAddress">Address <span></span></p>
                            <p id="staffCity">City <span></span></p>
                            <p id="staffZipCode">Zip Code <span></span></p>
                        </div>
                    </div>
                    <div class="content-button">
                        <button class="close-button" id="viewCloseBtn">Close</i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="/assets/js/staff.js"></script>
<script src="/assets/js/staffFunctions.js"></script>

@endsection