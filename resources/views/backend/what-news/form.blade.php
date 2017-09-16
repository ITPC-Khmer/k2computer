@php
    $base_url = asset('them/backend');
@endphp
<?php
$id = isset($row)?$row->id:0;
$title = isset($row)?$row->title:'';
$description = isset($row)?$row->description:'';
$video_url = isset($row)?$row->video_url:'';
$option = isset($row)?json_decode($row->option):[];
//option[lang][kh]
$kh = isset($option->lang->kh)?$option->lang->kh:'';
$image = isset($row)?$row->image_url:'';
$status = isset($row)?$row->status:'';
?>
@extends('layout.backend')
@section('title','Test')
@section('css')
    @parent

    @endsection
@section('content')
    <form action="{{url('backend/what-news-save')}}" enctype="multipart/form-data" method="post" class="panel form-horizontal">
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{{$id}}">
        <div class="panel-heading">
            <span class="panel-title">What news? </span>
        </div>
        <br/>

        <div class="panel-body">
            <div class="row form-group">
                <label class="col-sm-2 control-label">Title <span style="color: red;">*</span> :</label>
                <div class="col-sm-10">
                    <input type="text" required name="title" class="form-control" value="{{ $title }}" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">ភាសាខ្មែរ</label>
                <div class="col-sm-10">
                    <input name='option[lang][kh]' class="form-control" type="text" value="{{ $kh }}">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-sm-2 control-label">Videos URL</label>
                <div class="col-sm-10">
                    <input name='video_url' class="form-control" type="tex" value="{{ $video_url }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Image</label>
                <div class="col-sm-10">
                    <input name='image'type="file"  required accept="image/*" value="{{ $image }}">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea name='description' class="form-control" type="text" >{{ $description }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">status</label>
                <div class="col-sm-10">
                        <select class="form-control" name="status">
                            <option  {!! $status== 1?' selected="selected" ':'' !!} value="1">Active</option>
                            <option  {!! $status== 0?' selected="selected" ':'' !!} value="0">Inactive</option>
                        </select>
                </div>
            </div>
        </div>
        <div class="panel-footer text-right">
            <button class="btn btn-primary">Insert</button>
        </div>
    </form>

@endsection
@section('scrip')
    @endsection