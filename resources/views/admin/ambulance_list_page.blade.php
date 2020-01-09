@extends('layouts.layout_page')
@section('title_name', 'Add Hospital')

@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-header">
                    <h4>Locations List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered datatable" id="table-1">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th></th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Phone Num</th>
                                <th>Email id</th>
                                <th>Created</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($ambulancelist as $key => $ambulancelist)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td align="center">
                                            @if($ambulancelist->upload_image != '')
                                                <img src="{{asset($ambulancelist->upload_image)}}" class="rounded-circle" width="30" height="30">
                                            @else
                                                --
                                            @endif
                                        </td>
                                        <td>{{$ambulancelist->name}}</td>
                                        <td>
                                            @if(!empty($ambulancelist->mobile))
                                                {{$ambulancelist->mobile}}
                                                @else
                                                --
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($ambulancelist->phone))
                                                {{$ambulancelist->phone}}
                                            @else
                                                --
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($ambulancelist->mail_id))
                                                {{$ambulancelist->mail_id}}
                                            @else
                                                --
                                            @endif
                                        </td>
                                        <td>{{date('d-m-Y',strtotime($ambulancelist->created))}}</td>
                                        <td>
                                            @if($ambulancelist->verified == 0)
                                                <a href="#" class="text-warning" title="Not Verified" data-toggle="tooltip"><i class="fa fa-frown-o fa-c13" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                            @elseif($ambulancelist->verified == 2)
                                                <a href="#" class="text-danger" title="Deactivated" data-toggle="tooltip"><i class="fa fa-ban fa-c13" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                            @else
                                                <a href="#" class="text-success" title="Active" data-toggle="tooltip"><i class="fa fa-smile-o fa-c13" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                            @endif
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
