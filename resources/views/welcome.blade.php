@extends('layouts.websiteLayout')


@section('content')
    <div class="container mt-3">

        @if(Session::has('status'))
            <div class="alert alert-success">
                {{ Session::get('status')}}
            </div>
        @endif

        <form  method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-12 col-md-3 ">


                    <div class="profile-image mb-3 " >
                        <img   src="{{ asset('images/user.png') }}" width="200" alt="">

                        <div class="img-position">
                            <label for="profile_image">
                                <img src="{{ asset('images/camera_icon.png') }}" width="40px" alt="">
                            </label>
                            <input type="file" class="image-upload" id="profile_image"  name="profile_image" value="">
                        </div>
                    </div>

                    <p >
                        Score Confirmation Email
                    </p>

                    <div >
                       <input class="mx-1" type="radio"  name="score_email_confirmation" value="1">
                       <label for="yes">Yes</label>
                        <br> <br>
                       <input class="mx-1" type="radio"  name="score_email_confirmation" value="0">
                       <label for="no">No</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9">
                    <h1 class="text-center">EDIT PROFILE</h1>

                     <div class="row">
                         <div class="col-md-6">
                             <div class="mb-3">
                                 <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                                 <input type="text" class="@error('fname') is-invalid @enderror form-control"  name="fname" placeholder="Your First Name"  >
                                 @error('fname')
                                 <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>

                             <div class="mb-3">
                                 <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                 <input type="email" class="@error('email') is-invalid @enderror form-control"  name="email"   required>
                                 @error('email')
                                 <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="mb-3">
                                 <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                                 <input type="text" class="@error('lname') is-invalid @enderror form-control"  name="lname" placeholder="Your Last Name" required>
                                 @error('lname')
                                 <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>
                         </div>
                     </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="address_line_1" class="form-label">Address Line 1 <span class="text-danger">*</span></label>
                                <input type="text" class="@error('address_line_1') is-invalid @enderror form-control"  name="address_line_1"   required>
                                @error('address_line_1')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                <input type="text" class="@error('city') is-invalid @enderror form-control"  name="city"  required>
                                @error('city')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="zip_code" class="form-label">Zip Code <span class="text-danger">*</span></label>
                                <input type="text" id="zip_code" class="@error('zip_code') is-invalid @enderror form-control"  name="zip_code"   />
                                @error('zip_code')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="address_line_2" class="form-label">Address Line 2</label>
                                <input type="text" class="@error('address_line_2') is-invalid @enderror form-control"  name="address_line_2"   required>
                            </div>

                            <div class="mb-3">
                                <label for="state" class="form-label">State <span class="text-danger">*</span></label>
                                <select type="text" class="@error('state') is-invalid @enderror form-control"  name="state"  >
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                </select>

                                @error('state')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="home_court" class="form-label">Preferred Home Court <span class="text-danger">*</span></label>
                                <select type="text" class="@error('home_court') is-invalid @enderror form-control"  name="home_court"   >
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                </select>

                                @error('home_court')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <a href="#"> + Cant Find Your Court Click Here</a>
                        </div>
                    </div>

                    <div  class="mt-5">
                        @error('availability')
                        <span class="text-danger">{{ $message }}</span> <br>
                        @enderror
                        Playing Time Availability <span class="text-danger">*</span> <i>( Select * that apply)</i>

                        <div>
                            <input type="checkbox" class="form-check-input m-2" name="availability[]" value="weekends" checked>
                            <label for="weekends">Weekends</label>
                            <br>
                            <input type="checkbox" class="form-check-input m-2" name="availability[]" value="week_day_morning" >
                            <label for="week_day_morning">Weekday Morning</label>

                            <br>
                            <input type="checkbox" class="form-check-input m-2" name="availability[]" value="week_day_afternoon">
                            <label for="week_day_afternoon">Weekday Afternoon</label>

                            <br>
                            <input type="checkbox" class="form-check-input m-2" name="availability[]" value="week_day_evening" >
                            <label for="week_day_evening">Weekday Evening</label>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="theme-btn btn rounded-pill">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
