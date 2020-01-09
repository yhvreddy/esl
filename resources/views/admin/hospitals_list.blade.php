@extends('layouts.layout_page')
@section('title_name', 'Hospital\'s List')

@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-header">
                    <h4>Hospital's List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <?php //print_r($hospitals); ?>
                        <table class="table table-striped datatable" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th></th>
                                    <th>Reg id</th>
                                    <th>Hospital Name</th>
                                    <th>Mobile</th>
                                    <th>Phone Num</th>
                                    <th>Email id</th>
                                    <th>Created</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($hospitals as $key => $hospital)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td align="center">
                                            @if($hospital->upload_logo != '')
                                                <img src="{{asset($hospital->upload_logo)}}" class="rounded-circle" width="35" height="35">
                                                @else
                                                --
                                            @endif
                                        </td>
                                        <td><a href="#" style="text-decoration: none">{{$hospital->reg_id}}</a></td>
                                        <td>{{$hospital->name}}</td>
                                        <td>{{$hospital->mobile}}</td>
                                        <td>{{$hospital->phone}}</td>
                                        <td>{{$hospital->mail_id}}</td>
                                        <td>{{date('d-m-Y',strtotime($hospital->created))}}</td>
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
