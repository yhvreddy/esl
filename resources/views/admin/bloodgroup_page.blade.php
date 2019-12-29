@extends('layouts.layout_page')
@section('title_name', 'Blood Group Details')

@section('content')

    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <form method="post" action="{{url('/home/saveSkills')}}">
                    @csrf
                    <div class="card-header">
                        <h4>Add Blood Groups</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Blood Group</label>
                            <input type="text" class="form-control" required="" name="roleName" placeholder="Add Blood Group..">
                        </div>
                        <div class="form-group">
                            <label>Blood Group ShortName</label>
                            <input type="text" class="form-control" required="" name="roleShortName" placeholder="Short Name Ex A+, B+, AB+..">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Save Blood Group</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-md-8 col-lg-8">
            <div class="card">

                <div class="card-header">
                    <h4>Blood Groups List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped datatable" id="table-1">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Blood Group</th>
                                <th>Short Name</th>
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
