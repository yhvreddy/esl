@extends('layouts.layout_page')
@section('title_name', 'State Details')

@section('content')

    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <form method="post" action="{{url('/sa/states/save')}}">
                    @csrf
                    <div class="card-header">
                        <h4>Add States</h4>
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
                            <label>State Name</label>
                            <input type="text" class="form-control" required="" name="state_name" placeholder="State Name Ex AndhraPradesh">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Save State</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-md-8 col-lg-8">
            <div class="card">

                <div class="card-header">
                    <h4>States List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped datatable" id="table-1">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Country Name</th>
                                <th>State Name</th>
                                <th>Created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($states as $key => $state)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$state->country_name}}</td>
                                        <td>{{$state->name}}</td>
                                        <td>{{date('d-m-Y',strtotime($state->created))}}</td>
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
