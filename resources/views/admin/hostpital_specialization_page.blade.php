@extends('layouts.layout_page')
@section('title_name', 'Specialization\'s Type Details')

@section('content')

    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <form method="post" action="{{url('/sa/hospital/specializations/save')}}">
                    @csrf
                    <div class="card-header">
                        <h4>Add Specialization Type</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Hospital Specialization</label>
                            <input type="text" class="form-control" required="" name="Specialization_name" placeholder="Add Specialization Type..">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Save Specialization Type</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-md-8 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4>Specialization List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped datatable" id="table-1">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Specialization's</th>
                                <th>Created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($hospitalSpecializations as $key => $hospitalSpecialization)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$hospitalSpecialization->name}}</td>
                                        <td>{{date('d-m-Y',strtotime($hospitalSpecialization->created))}}</td>
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
