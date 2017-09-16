@extends('layout.backend')
@section('title','Items Space')
@section('content')


    <div class="portlet box green" >
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-comments"></i>Item Spec </div>
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
                        <th> <a href="{{ url('backend/item-space-form.html') }}" data-repeater-create="" class="btn btn-success mt-repeater-add">
                                <i class="fa fa-plus"></i> Add</a>
                        </th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($result as $row)
                        <tr>
                            <td>
                                <a href="{{ url("backend/item-space-edit.html/{$row->id}")}}"class="btn green btn-outline my-del"><i class="fa fa-edit"></i><span>Edit</span></a>
                                <a href="{{ url("backend/item-space-delete.html/{$row->id}")}}"class="btn red btn-outline my-del"><i class="fa fa-trash"></i><span>Delete</span></a>
                            </td>

                            </td>
                            <td>{{ \App\Models\ECBackend\ItemCategory::getTitle($row->category_id) }}</td>
                            <td>{{ $row->title }}</td>
                            <td>{{ $row->description }}</td>
                            <td>{{$row->option}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $result -> links () }}
        </div>
    </div>

@endsection
