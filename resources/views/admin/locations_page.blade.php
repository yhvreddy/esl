@extends('layouts.layout_page')
@section('title_name', 'Location Details')

@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <form method="post" action="{{url('/home/saveSkills')}}">
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
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label>Select State Name</label>
                                <select class="form-control" name="state_id" required="required">
                                    <option value="">Select State name</option>
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label>Select District Name</label>
                                <select class="form-control" name="district_id" required="required">
                                    <option value="">Select District name</option>
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label>Select City Name</label>
                                <select class="form-control" name="city_id" required="required">
                                    <option value="">Select City name</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label>Location Name</label>
                                <input type="text" class="form-control" required="" name="locationName" placeholder="Location Name Ex Jm.Puram,etc...">
                            </div>
                            <div class="col-3 form-group">
                                <label>Area Pincode</label>
                                <input type="text" class="form-control" required="" name="pincode" placeholder="Area Pincode Ex 522415">
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
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
