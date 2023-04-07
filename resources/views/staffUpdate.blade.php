@extends('layouts.dash')

@section('content')

<form id="editStaffForm" method='POST' action="editStaff">
    @csrf
    <legend>Edit Staff</legend>
    <div class=' edit-form-content'>
        <input type="hidden" id='id' name="id" value="{{$user['id']}}">
        <div class='items'>
            <label for='name'>Name: </label>
            <input type='text' id='name' name="name" placeholder='Enter name' value="{{$user['name']}}" required>
        </div>
        <div class='items'>
            <label for='email'>Email: </label>
            <input type='text' id='email' name='email' placeholder='Enter email' value="{{$user['email']}}" required>
        </div>
        <div class='items'>
            <label for='authority'>Authority: </label>
            <select id='authority' name='authority' value="{{$user['authority']}}" required>
                <option value='Admin'>Admin
                </option>
                <option value='Clerk'>Clerk
                </option>
            </select>
        </div>
        <div class='items'>
            <label for='password'>Password:</label>
            <input type='password' id='password' name='password' placeholder='Enter password' required>
        </div>
        <div class='items'>
            <label for='conf_password'>Confirm Password:</label>
            <input type='password' id='conf_password' name='conf_password' placeholder='Confirm password' required>
        </div>
        <div class=" items">
            <label for="salary">Salary</label>
            <input id='salary' type='number' name='salary' value="{{$user['salary']}}" required>
        </div>
        <div class='items'>
            <label for='phone'>Phone:</label>
            <input type='tel' id='phone' name='phone' placeholder='01x-xxxxxxx' pattern='[0-9]{3}-[0-9]{7}'
                value="{{$user['phone']}}" required>
        </div>
        <div class=' items'>
            <label for='address'>Address: </label>
            <input type='text' id='address' name='address' placeholder='Enter address' value="{{$user['address']}}"
                required>
        </div>
        <div class='items'>
            <label for='zipCode'>Zip Code: </label>
            <input type='text' id='zipCode' name='zipCode' placeholder='Enter zip code' value="{{$user['zipCode']}}"
                required>
        </div>
    </div>
    <div class='edit-button'>
        <div class='submit-button'>
            <button type='submit'>Save</button>
        </div>

    </div>
</form>

<script src="/assets/js/staff.js"></script>

@endsection