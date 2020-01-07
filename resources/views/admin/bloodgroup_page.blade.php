@extends('layouts.layout_page')
@section('title_name', 'Blood Group Details')

@section('content')

    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <form method="post" action="{{url('/sa/bloodbanks/groups/save')}}">
                    @csrf
                    <div class="card-header">
                        <h4>Add Blood Groups</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Blood Group</label>
                            <input type="text" class="form-control" required="" name="blood_group_name" placeholder="Add Blood Group..">
                        </div>
                        <div class="form-group">
                            <label>Blood Group ShortName</label>
                            <input type="text" class="form-control" required="" name="blood_group_short_name" placeholder="Short Name Ex A+, B+, AB+..">
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
                                <th>Created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($bloodgroups as $key => $bloodgroup)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$bloodgroup->name}}</td>
                                        <td>{{$bloodgroup->short_code}}</td>
                                        <td>{{date('d-m-Y',strtotime($bloodgroup->created))}}</td>
                                        <td class="text-center">
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
