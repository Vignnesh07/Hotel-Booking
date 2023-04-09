@extends('layouts.app')

@section('content')

<div class="header">
    <div class="header-bg" style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.3)), url('/assets/img/complaints_bg.png');"></div>
    <div class="container">
        <h1 class="text-background"> Let Us Hear Your Feedback </h1>
    </div>
</div>

<div class="container">

    <h2 class="sub-title">Complaint Management</h2>

    <div class="container-all-complaint">
        <div class="container-complaint-form">
            
            <form method="POST" label="{{ __('Submit') }}" id="submitComplaintForm">
                @csrf
                <h3>Complaint Form</h3>

                <hr>

                <div class="columns c-column">
                    <div class="item">
                        <label for="name">Your Name:</label>
                        <input type="text" name="name" placeholder="Your Name" required/>
                    </div>

                    <div class="item">
                        <label for="roomID">Room Number:</label>
                        <input type="text" name="roomID" placeholder="Room Number" required/>
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

                    @error('roomID')
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
                    <div class="item special">
                        <label for="complaint">Please Describe Your Complaints:</label>
                        <input type="text" name="complaint" placeholder="Complaint" required/>
                    </div>
                </div>
                <!-- FOR ERROR -->
                <div class="columns ">
                    @error('complaint')
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
                    <button type="button" class="resetComplaint">Reset</button>
                </div>
            </form>
        </div>
        <br>

        <div class="container-complaint-table">
            <h3>Complaint List</h3>
            <hr>

            <div class="complaints-table">
                <table id="complaints-table">
                    <thead>
                        <tr class="table-head">
                            <th class="complaint-column1" id="c-bookings1">#</th>
                            <th class="complaint-column2" id="c-bookings2">Complaint Name</th>
                            <th class="complaint-column3" id="c-bookings3">Room ID.</th>
                            <th class="complaint-column4" id="c-bookings4">Complaint</th>
                            <th class="complaint-column5" id="c-bookings5">Created Date</th>
                            <th class="complaint-column6" id="c-bookings6">Resolve</th>
                            <th class="complaint-column7" id="c-bookings7">Budget</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($complaints as $complaint)
                    <tr>
                        <td class="complaint-column1">{{$complaint['id']}}</td>
                        <td class="complaint-column2">{{$complaint['name']}}</td>
                        <td class="complaint-column3">{{$complaint['roomID']}}</td>
                        <td class="complaint-column4">{{$complaint['complaint']}}</td>
                        <td class="complaint-column5">{{$complaint['created_at'] -> format('d.m.Y')}}</td>
                        <td class="complaint-column6">{{$complaint['status']}}</td>
                        <td class="complaint-column7">
                            @if($complaint['budget'] == '')
                                -
                            @else
                                {{$complaint['budget']}}
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                {!! $complaints->links('vendor.pagination.custom', ['tableID' => 'complaints-table']) !!}
            </div>
        </div>
    </div>
</div>

@endsection