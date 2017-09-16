@php
    $base_url = asset('them/backend');
@endphp
<?php
$id = isset($row)?$row->id:0;
$title = isset($row)?$row->title:'';
$description = isset($row)?$row->description:'';
$parent = isset($row)?$row->parent:'';
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
    <form action="{{url('backend/item-category-save.html')}}" enctype="multipart/form-data" method="post" class="panel form-horizontal">
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{{$id}}">
        <div class="panel-heading">
            <span class="panel-title">Item Category </span>
        </div>
        <br/>
        <div class="row form-group">
            <label class="col-sm-4 control-label">Parent</label>
            <div class="col-sm-8">
                <select name="parent" class="form-control">
                    <option value="0"></option>
                    {!! \App\Models\ECBackend\ItemCategory::getParentOption($parent) !!}
                </select>
            </div>
        </div>
        <div class="panel-body">
            <div class="row form-group">
                <label class="col-sm-4 control-label">Title :</label>
                <div class="col-sm-8">
                    <input type="text" name="title" class="form-control" value="{{ $title }}" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">ភាសាខ្មែរ</label>
                <div class="col-sm-8">
                    <input name='option[lang][kh]' class="form-control" type="text" value="{{ $kh }}">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-sm-4 control-label">Description</label>
                <div class="col-sm-8">
                    <input name='description' class="form-control" type="text" value="{{ $description }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Image</label>
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