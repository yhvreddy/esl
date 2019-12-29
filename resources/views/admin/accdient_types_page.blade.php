@extends('layouts.layout_page')
@section('title_name', 'Accident Type Details')

@section('content')

    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <form method="post" action="{{url('/home/saveSkills')}}">
                    @csrf
                    <div class="card-header">
                        <h4>Add Accident Type</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Accident Type</label>
                            <input type="text" class="form-control" required="" name="accidentTypeName" placeholder="Add Accident Type..">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Save Accident Type</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-md-8 col-lg-8">
            <div class="card">

                <div class="card-header">
                    <h4>Accident Type List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped datatable" id="table-1">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Accident Type</th>
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
