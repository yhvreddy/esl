@extends('layouts.layout_page')
@section('title_name', 'Add Hospital')

@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <?php //print_r($charities); ?>
                <div class="card-header">
                    <h4>Charity List</h4>
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
                                 @foreach($charities as $key => $charity)
                                     <tr>
                                         <td>{{$key+1}}</td>
                                         <td align="center">
                                             @if($charity->upload_image != '')
                                                 <img src="{{asset($charity->upload_image)}}" class="rounded-circle" width="25" height="25">
                                             @else
                                                 --
                                             @endif
                                         </td>
                                         <td>{{$charity->name}}</td>
                                         <td>
                                             @if(!empty($charity->mobile))
                                                 {{$charity->mobile}}
                                             @else
                                                 --
                                             @endif
                                         </td>
                                         <td>
                                             @if(!empty($charity->phone))
                                                 {{$charity->phone}}
                                             @else
                                                 --
                                             @endif
                                         </td>
                                         <td>
                                             @if(!empty($charity->mail_id))
                                                 {{$charity->mail_id}}
                                             @else
                                                 --
                                             @endif
                                         </td>
                                         <td>{{date('d-m-Y',strtotime($charity->created))}}</td>
                                         <td>
                                             @if($charity->verified == 0)
                                                 <a href="#" class="text-warning" title="Not Verified" data-toggle="tooltip"><i class="fa fa-frown-o fa-c13" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                             @elseif($charity->verified == 2)
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
