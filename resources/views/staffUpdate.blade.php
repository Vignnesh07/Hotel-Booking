@extends('layouts.dash')

@section('content')

<div class="container">
    <div class="container-all-complaint">
        <div class="container-complaint-form">
            <div class="add-colour"></div>
            <br ><br><br>

            <h2 class="sub-title">{{ $staff['name'] }}</h2>

            <form method="POST" label="{{ __('Save') }}" id="submitComplaintForm">
                @csrf
                <h3>Edit Staff</h3>

                <hr>

                <input type="hidden" id='id' name="id" value="{{ $staff['id'] }}">
                <div class="columns c-column">
                    <div class="item">
                        <label for='name'>Name: </label>
                        <input type="text" name="name" placeholder="Enter Name" value="{{ $staff['name'] }}" required/>
                    </div>

                    <div class="item">
                        <label for='email'>Email: </label>
                        <input type='text' id='email' name='email' placeholder='Enter Email' value="{{ $staff['email'] }}" required>
                    </div>
                </div>
                <!-- FOR ERROR -->
                <div class="columns ">
                    @error('name')
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
                
                <div class="columns c-column">
                    <div class="item">
                        <label for='authority'>Authority: </label>
                        <select id='authority' name='authority' value="{{ $staff['role'] }}" required>
                            <option value='admin'>Admin</option>
                            <option value='clerk'>Clerk</option>
                        </select>
                    </div>

                    <div class="item">
                        <label for='phone'>Phone:</label>
                        <input type='tel' id='phone' name='phone' placeholder='+01xxxxxxxx' value="{{ $staff['phone'] }}" required>
                    </div>
                </div>
                <!-- FOR ERROR -->
                <div class="columns ">
                    @error('authority')
                    <div class="error-span">
                        <span class="invalid-feedback" role="alert">
                            <strong class="error-message">
                                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                                Please fill in the required fill
                            </strong>
                        </span>
                    </div>
                    @enderror

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

                <div class="columns c-column">
                    <div class="item">
                        <label for='address'>Address: </label>
                        <input type='text' id='address' name='address' placeholder='Enter address' value="{{ $staff['address'] }}"required>
                    </div>

                    <div class="item">
                        <label for="city">City</label>
                        <input id='city' type='test' name='city' value="{{ $staff['city'] }}" required>
                    </div>
                </div>
                <!-- FOR ERROR -->
                <div class="columns ">
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
                </div>

                <div class="columns c-column">
                    <div class="item">
                        <label for='zipCode'>Zip Code: </label>
                        <input type='text' id='zipCode' name='zipCode' placeholder='Enter zip code' value="{{ $staff['zipCode'] }}" required>
                    </div>
                    <div></div>
                </div>
                <!-- FOR ERROR -->
                <div class="columns ">
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
                <div class="button-complaint">
                    <button type="submit" class="submitComplaint">{{ __('Submit') }}</button>
                </div>
            </form>
        </div>
        <br>
    </div>
</div>

@endsection
