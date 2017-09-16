@php
    $base_url = asset('them/backend');
@endphp
<?php
$id = isset($row)?$row->id:0;
$title = isset($row)?$row->slide_title:'';
$description = isset($row)?$row->description:'';
$video_url = isset($row)?$row->video_url:'';
$status = isset($row)?$row->status:'';
?>
@extends('layout.backend')
@section('title','Slide')
@section('css')
@parent
    @endsection
@section('content')
    <form action="{{url('backend/slide-save.html')}}" enctype="multipart/form-data" method="post" class="panel form-horizontal">
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{{$id}}">
        <div class="panel-heading">
            <span class="panel-title">Slide Name</span>
        </div>
        <div class="panel-body">
            <div class="row form-group">
                <label class="col-sm-4 control-label">Name:</label>
                <div class="col-sm-8">
                    <input type="text" name="slide_title" class="form-control" value="{{ $title }}" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Videos URL</label>
                <div class="col-sm-8">
                    <input name='video_url' class="form-control" type="text" value="{{ $video_url }}">
                </div>
            </div>

            <div class="row form-group">
                <label class="col-sm-4 control-label">Description</label>
                <div class="col-sm-8">
                    <input type="text" name="description" class="form-control" value="{{ $description }}" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Slide Image</label>
                <div class="col-sm-8">
                    <input name='slide_image' type="file" accept="image/*" >

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">status</label>
                <div class="col-sm-8">
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