@extends('layout.backend')
@section('title','What news?')
@section('content')


    <div class="portlet box green" >
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-comments"></i>what news?</div>
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
                        <th style="width: 250px;"> <a href="{{ url('backend/what-news-form') }}" data-repeater-create="" class="btn btn-success mt-repeater-add">
                                <i class="fa fa-plus"></i> Add</a>
                        </th>
                        <th>Title</th>
                        <th>Option</th>
                        <th>Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($result as $row)
                        <?php
                        $imgs = ($row->image_url);
                        //$img = count($imgs)>0?$imgs[0]:'#';
                        ?>
                        <tr>
                            <td>
                                <a href="{{ url("backend/what-news-edit/{$row->id}")}}"class="btn green btn-outline my-del"><i class="fa fa-edit"></i><span>Edit</span></a>
                                <a href="{{ url("backend/what-news-delete/{$row->id}")}}"class="btn red btn-outline my-del"><i class="fa fa-trash"></i><span>Delete</span></a>
                            </td>
                            </td>
                            <td>{{ $row->title }}</td>
                            <td>{{ \App\Models\ECBackend\ItemCategory::getTitle($row->category_id) }}</td>
                            <td>
                                <a href="{{ asset("uploads/files/$imgs") }}"><img src="{{ asset("uploads/files/tmp2/$imgs") }}" width="auto" height="40px"></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $result -> links () }}
        </div>
    </div>
@endsection
