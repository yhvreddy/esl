@extends('layouts.layout_page')
@section('title_name', 'Add Hospital')

@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-header">
                    <h4>Blood Banks List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped datatable" id="table-1">
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
                            @foreach($bloodBanks as $key => $bloodBank)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td align="center">
                                        @if($bloodBank->upload_image != '')
                                            <img src="{{asset($bloodBank->upload_image)}}" class="rounded-circle" width="30" height="30">
                                        @else
                                            --
                                        @endif
                                    </td>
                                    <td>{{$bloodBank->name}}</td>
                                    <td>
                                        @if(!empty($bloodBank->mobile))
                                            {{$bloodBank->mobile}}
                                        @else
                                            --
                                        @endif
                                    </td>
                                    <td>
                                        @if(!empty($bloodBank->phone))
                                            {{$bloodBank->phone}}
                                        @else
                                            --
                                        @endif
                                    </td>
                                    <td>
                                        @if(!empty($bloodBank->mail_id))
                                            {{$bloodBank->mail_id}}
                                        @else
                                            --
                                        @endif
                                    </td>
                                    <td>{{date('d-m-Y',strtotime($bloodBank->created))}}</td>
                                    <td>
                                        @if($bloodBank->verified == 0)
                                            <a href="#" class="text-warning" title="Not Verified" data-toggle="tooltip"><i class="fa fa-frown-o fa-c13" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                        @elseif($bloodBank->verified == 2)
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
