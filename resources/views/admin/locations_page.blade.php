@extends('layouts.layout_page')
@section('title_name', 'Location Details')

@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <form method="post" action="{{url('/sa/locations/save')}}">
                    @csrf
                    <div class="card-header">
                        <h4>Add Locations</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 form-group">
                                <label>Select Country</label>
                                <select class="form-control" name="country_id" required="required">
                                    <option value="">Select Country name</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label>Select State Name</label>
                                <select class="form-control" name="state_id" required="required">
                                    <option value="">Select State name</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label>Select District Name</label>
                                <select class="form-control" name="district_id" required="required">
                                    <option value="">Select District name</option>
                                    @foreach($districts as $district)
                                        <option value="{{$district->id}}">{{$district->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label>Select City Name</label>
                                <select class="form-control" name="city_id" required="required">
                                    <option value="">Select City name</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label>Location Name</label>
                                <input type="text" class="form-control" required="" name="location_name" placeholder="Location Name Ex Jm.Puram,etc...">
                            </div>
                            <div class="col-3 form-group">
                                <label>Area Pincode</label>
                                <input type="tel" maxlength="6" class="form-control" required="" name="pin_code" placeholder="Area Pincode Ex 522415">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Save Location</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-header">
                    <h4>Locations List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped datatable" id="table-1">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Country</th>
                                <th>State</th>
                                <th>District</th>
                                <th>City</th>
                                <th>Location</th>
                                <th>Pincode</th>
                                <th>Created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($locations as $key => $location)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$location->country_name}}</td>
                                        <td>{{$location->state_name}}</td>
                                        <td>{{$location->district_name}}</td>
                                        <td>{{$location->city_name}}</td>
                                        <td>{{$location->name}}</td>
                                        <td>{{$location->pincode}}</td>
                                        <td>{{date('d-m-Y',strtotime($location->created))}}</td>
                                        <td>
                                            <a href="#"><i class="fa fa-edit fa-c13"></i></a>&nbsp;&nbsp;
                                            <a href="#"><i class="fa fa-trash fa-c13"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
