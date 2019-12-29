@extends('layouts.layout_page')
@section('title_name', 'Roles Details')

@section('content')

    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <form method="post" action="{{url('/home/saveSkills')}}">
                    @csrf
                    <div class="card-header">
                        <h4>Add Roles</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Role Name</label>
                            <input type="text" class="form-control" required="" name="roleName" placeholder="Add Role Name..">
                        </div>
                        <div class="form-group">
                            <label>Role ShortName</label>
                            <input type="text" class="form-control" required="" name="roleShortName" placeholder="Short Name Ex sa, a, pu..">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Save Role</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-md-8 col-lg-8">
            <div class="card">

                <div class="card-header">
                    <h4>Roles List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped datatable" id="table-1">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Role Name</th>
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
