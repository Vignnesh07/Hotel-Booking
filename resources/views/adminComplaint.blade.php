@extends('layouts.dash')

@section('content')

<div class="container">

    <div class="container-all-complaint">
        <div class="container-complaint-form">
            <div class="add-colour"></div>
            <br ><br><br>
            <h2 class="sub-title">Complaint Management</h2>
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
                        <input type="text" name="roomID" placeholder="Complaint Type" required/>
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
                                <td class="complaint-column6">
                                    @if($complaint['status'] == 'Unresolved')
                                        <span id="dateBtn"> 
                                            <button onclick="
                                                {{ Session::put('selectedComplaint', $complaint['id']) }}
                                            " class='resolve-btn'>Resolve</button>
                                        </span>
                                    @else
                                        {{$complaint['status']}}
                                    @endif
                                </td>
                                <td class="complaint-column7">
                                    @if($complaint['budget'] == '')
                                        -
                                    @else
                                        RM {{$complaint['budget']}}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $complaints->links('vendor.pagination.custom') !!}

                <div class="resolve-overlay" id="resolve-overlay">
                    <div class="resolve-container">
                        <form method="POST" action="/admin/complaints/update" label="{{ __('Resolve') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ session() -> get('selectedComplaint') }}">
                            <p>Complaint Resolve</p>
                            <div>
                                <label class="budget">Budget</label>
                                <input name="budget" type="number" class="budget" placeholder='Budget' required/>
                            </div>
                            <div class='resolveButtonBox'>
                                <button type="submit" id="resolveBtn">{{ __('Resolve') }}</button>
                                <button id="resolveCancelBtn">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
