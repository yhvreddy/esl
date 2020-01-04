@extends('layouts.layout_page')
@section('title_name', 'District Details')

@section('content')

    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <form method="post" action="{{url('/sa/districts/save')}}">
                    @csrf
                    <div class="card-header">
                        <h4>Add Districts</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Select Country</label>
                            <select class="form-control" name="country_id" required="required">
                                <option value="">Select Country name</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select State Name</label>
                            <select class="form-control" name="state_id" required="required">
                                <option value="">Select State name</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>District Name</label>
                            <input type="text" class="form-control" required="" name="district_name" placeholder="District Name Ex Gunter,etc...">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Save District</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-md-8 col-lg-8">
            <div class="card">

                <div class="card-header">
                    <h4>Districts List</h4>
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
                                <th>Created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($districts as $key => $district)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$district->country_name}}</td>
                                        <td>{{$district->state_name}}</td>
                                        <td>{{$district->name}}</td>
                                        <td>{{date('d-m-Y',strtotime($district->created))}}</td>
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
