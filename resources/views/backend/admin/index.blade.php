@extends('layout.backend')
@section('title','Admin')
@section('content')


    <div class="portlet box green" >
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-comments"></i>Form User </div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-scrollable">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th> <a href="{{ url('backend/user-form') }}" data-repeater-create="" class="btn btn-success mt-repeater-add">
                                <i class="fa fa-plus"></i> Add</a>
                        </th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($result as $row)
                        <tr>
                            <td>
                                <a href="{{ url("backend/user-delete/{$row->id}")}}"class="btn red btn-outline my-del"><i class="fa fa-trash"></i><span>Delete</span></a>
                            </td>

                            </td>
                            <td>{{$row->name}}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->role }}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $result -> links () }}
        </div>
    </div>

@endsection
