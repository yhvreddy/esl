@extends('layouts.layout_page')
@section('title_name', 'District Details')

@section('content')

    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <form method="post" action="{{url('/home/saveSkills')}}">
                    @csrf
                    <div class="card-header">
                        <h4>Add Districts</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Select Country</label>
                            <select class="form-control" name="country_id" required="required">
                                <option value="">Select Country name</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select State Name</label>
                            <select class="form-control" name="state_id" required="required">
                                <option value="">Select State name</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>District Name</label>
                            <input type="text" class="form-control" required="" name="districtName" placeholder="District Name Ex Gunter,etc...">
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
