@php
    $base_url = asset('them/backend');
@endphp
<?php
$id = isset($row)?$row->id:0;
$title = isset($row)?$row->title:'';
$description = isset($row)?$row->description:'';
$option = isset($row)?$row->option:'';
?>
@extends('layout.backend')
@section('title','item space')
    @section('css')
        @parent
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ $base_url }}/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ $base_url }}/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ $base_url }}/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="{{ $base_url }}/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ $base_url }}/assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('content')
    <form action="{{url('backend/item-space-save.html')}}" enctype="multipart/form-data" method="post" class="panel form-horizontal">
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{{$id}}">
        <div class="panel-heading">
            <span class="panel-title">Item space </span>
        </div>
        <br/>

        <div class="panel-body">
            <div class="row form-group">
                <label class="col-sm-4 control-label">Category :</label>
                <div class="col-sm-8">
                    <select name="category_id"  class="category_id form-control" id="category_id">
                        <option value="0">-</option>
                        <?php
                        $result_cat = \App\Models\ECBackend\ItemCategory::all();
                        ?>
                        @foreach($result_cat as $rc)
                            <option value="{{$rc->id}}">{{$rc->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-sm-4 control-label">Title :</label>
                <div class="col-sm-8">
                    <input type="text" name="title" class="form-control" value="{{ $title }}" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Option</label>
                <div class="col-sm-8">
                    <input name='option' class="form-control" type="text" value="{{ $option }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Description</label>
                <div class="col-sm-8">
                    <input name='description' class="form-control" type="text" value="{{ $description }}">
                </div>
            </div>

            <!--<div class="row form-group">
                <label class="col-sm-4 control-label">Description</label>
                <div class="col-sm-8">
                    <input type="text" name="description" id="summernote_1" value="{{ $description }}" >
                </div>
            </div>-->
        </div>
        <div class="panel-footer text-right">
            <button class="btn btn-primary">Insert</button>
        </div>
    </form>
@endsection
@section('js')
    @parent
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ $base_url }}/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    @endsection
@section('scrip')
    @parent
    <script src="{{ $base_url }}/assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    @endsection