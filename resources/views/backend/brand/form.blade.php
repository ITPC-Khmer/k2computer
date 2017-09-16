@php
    $base_url = asset('them/backend');
@endphp
<?php
$id = isset($row)?$row->id:0;
$title = isset($row)?$row->title:'';
$note=isset($row)?$row->note:'';
$option = isset($row)?$row->option:'';
$image = isset($row)?$row->image:'';
$status = isset($row)?$row->status:'';
?>
@extends('layout.backend')
@section('title','Test')
@section('css')
@parent
    @endsection
@section('content')
    <form action="{{url('backend/brand-save.html')}}" enctype="multipart/form-data" method="post" class="panel form-horizontal">
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{{$id}}">
        <div class="panel-heading">
            <span class="panel-title">Item Brand </span>
        </div>
        <div class="panel-body">
            <div class="row form-group">
                <label class="col-sm-4 control-label">Name:</label>
                <div class="col-sm-8">
                    <input type="text" name="title" class="form-control" value="{{ $title }}" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Note</label>
                <div class="col-sm-8">
                    <input name='note' class="form-control" type="text" value="{{ $note }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Option</label>
                <div class="col-sm-8">
                    <input name='option' class="form-control" type="text" value="{{ $option }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Logo</label>
                <div class="col-sm-8">
                    <input name='image'type="file" accept="image/*" value="{{ $image }}">

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