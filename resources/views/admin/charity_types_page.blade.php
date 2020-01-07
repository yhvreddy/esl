@extends('layouts.layout_page')
@section('title_name', 'Charity Type\'s Details')

@section('content')

    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <div class="card">
                <form method="post" action="{{url('/sa/charity/types/save')}}">
                    @csrf
                    <div class="card-header">
                        <h4>Add Charity Type</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Charity Type</label>
                            <input type="text" class="form-control" required="" name="charity_type_name" placeholder="Add Charity Type..">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Save Charity Type</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-md-8 col-lg-8">
            <div class="card">

                <div class="card-header">
                    <h4>Charity Type List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped datatable" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Charity Type</th>
                                    <th>Created</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($charitypes as $key => $charitype)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$charitype->name}}</td>
                                        <td>{{date('d-m-Y',strtotime($charitype->created))}}</td>
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
