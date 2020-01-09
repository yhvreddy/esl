@extends('layouts.layout_page')
@section('title_name', 'Add Hospital')

@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <form method="post" action="{{url('/sa/dashboard/hospitals/AddHospital/save')}}">
                    @csrf
                    <div class="card-header">
                        <h4>Add Ambulance</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                                <label>Enter Ambulance Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required="" name="hospital_name" placeholder="Enter Hospital Name..">
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                                <label>Select Ambulance Type <span class="text-danger">*</span></label>
                                <select class="form-control" name="country_id" required="required">
                                    <option value="">Select Ambulance Type</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                                <label>Enter Mobile Number<span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" maxlength="10" required="" name="mobile_number" placeholder="Mobile Number..">
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                                <label>Enter Phone Number</label>
                                <input type="text" class="form-control" name="phone_number" placeholder="Phone Number..">
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                                <label>Enter Mail Id <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" required="" name="hospital_email" placeholder="Enter Mail id..">
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                                <label>Enter Vehicle id <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required="" name="hospital_name" placeholder="Enter vehicle id..">
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                                <label>Select Country <span class="text-danger">*</span></label>
                                <select class="form-control" name="country_id" required="required">
                                    <option value="">Select Country name</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                                <label>Select State Name <span class="text-danger">*</span></label>
                                <select class="form-control" name="state_id" required="required">
                                    <option value="">Select State name</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                                <label>Select District Name <span class="text-danger">*</span></label>
                                <select class="form-control" name="district_id" required="required">
                                    <option value="">Select District name</option>
                                    @foreach($districts as $district)
                                        <option value="{{$district->id}}">{{$district->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                                <label>Select City Name <span class="text-danger">*</span></label>
                                <select class="form-control" name="city_id" required="required">
                                    <option value="">Select City name</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                                <label>Location Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required="" name="location_name" placeholder="Location Name Ex Jm.Puram,etc...">
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                                <label>Area Pincode <span class="text-danger">*</span></label>
                                <input type="tel" min="6" class="form-control" required="" name="pin_code" placeholder="Area Pincode Ex 522415">
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 form-group">
                                <label>Get GeoLocation <span class="text-danger">*</span> <small id="locationStatus" style="padding: 0px 0px 0px 10px"></small></label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" required="required" id="showGeoLocation" placeholder="latitude, longitude" name="geo_location" aria-label="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" id="getGeoLocation" type="button"> <i class="fa fa-location-arrow"></i> Location</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Save Hospital Details</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
