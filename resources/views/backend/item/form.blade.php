@php
    $base_url = asset('them/backend');
@endphp
<?php
$id = isset($row)?$row->id:0;
$code = isset($row)?$row->code:'';
$url_detail = isset($row)?$row->url_detail:'';
$title = isset($row)?$row->title:'';
$category_id = isset($row)?$row->category_id:'';
$brand_id = isset($row)?$row->brand_id:'';
$description = isset($row)?$row->description:'';
$option = isset($row)?json_decode($row->option):[];
//option[lang][kh]
$kh = isset($option->lang->kh)?$option->lang->kh:'';
$start_price = isset($row)?$row->start_price:'';
$promotion_price = isset($row)?$row->promotion_price:'';
$promotion_expire = isset($row)?$row->promotion_expire:'';
$status = isset($row)?$row->status:'';

$rows_sp = $id>0? \App\Models\ECBackend\ItemSpaceDetail::where('item_id',$id)->get():[];

?>
@extends('layout.backend')
@section('title','Product')
@section('css')
    @parent
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ $base_url }}/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ $base_url }}/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ $base_url }}/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    @endsection
@section('content')
    <form action="{{url('backend/item-save.html')}}" enctype="multipart/form-data" method="post" class="panel form-horizontal" id="fileupload">
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{{$id}}">
        <div class="panel-heading">
            <span class="panel-title">Item Feature </span>
        </div>
        <br/>

        <div class="panel-body">
                        <div class="row form-group">
                <label class="col-sm-2 control-label">Category :</label>
                <div class="col-sm-10">
                    <select name="category_id" required="please select" class="category_id form-control" id="category_id">
                        <option value="0">Please Select</option>
                        {!! \App\Models\ECBackend\ItemCategory::getParentOption($category_id) !!}
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-sm-2 control-label">Brand</label>
                <div class="col-sm-10">
                    <select name="brand_id" required="please select" class="brand_id form-control" id="brand_id">
                        <option value="0">Please Select</option>
                        <?php
                        $result_cat = \App\Models\ECBackend\ItemBrand::all();
                        ?>
                        @foreach($result_cat as $rc)
                            <option {!! $brand_id==$rc->id?' selected="selected" ':'' !!} value="{{$rc->id}}">{{$rc->brand_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-sm-2 control-label">Title <span style="color: red;">*</span> :</label>
                <div class="col-sm-10">
                    <input type="text" required="Please Input title" name="title" class="form-control" value="{{ $title }}" placeholder="Name of product ..." >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">ភាសាខ្មែរ</label>
                <div class="col-sm-10">
                    <input name='option[lang][kh]' class="form-control" type="text" value="{{ $kh }}">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-sm-2 control-label">Code</label>
                <div class="col-sm-10">
                    <input type="text" name="code" class="form-control" value="{{ $code }}" >
                </div>
            </div>
            <div class="row form-group">
                <label class="col-sm-2 control-label">URL Detail</label>
                <div class="col-sm-10">
                    <input type="url_detail" name="url_detail" class="form-control" value="{{ $url_detail }}" placeholder="សូម Copy អោយបានត្រឹមត្រូវ" >
                </div>
            </div>

            <div class="my-sp">

                @if(count($rows_sp)>0)
                    @foreach($rows_sp as $row_sp)
                        <div class="row form-group">
                            <label class="col-sm-2 control-label">{{ \App\Models\ECBackend\ItemSpace::getTitle($row_sp->spec_id) }}</label>
                            <div class="col-sm-10">
                                <input type="hidden" value="{{ $row_sp->spec_id }}" name="spec_id[{{ $row_sp->spec_id }}]">
                                <input  class="form-control" value="{{ $row_sp->spec_value }}" type="text" name="spec_value[{{ $row_sp->spec_id }}]">
                                </div>
                            </div>
                     @endforeach
                @endif

            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Retail Price</label>
                <div class="col-sm-10">
                    <input name='start_price' class="form-control" type="number" value="{{ $start_price }}">
                </div>
            </div><div class="form-group">
                <label class="col-sm-2 control-label"> Dealer Price</label>
                <div class="col-sm-10">
                    <input name='promotion_price' class="form-control" type="number" value="{{ $promotion_price }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Promotion Expire</label>
                <div class="col-md-10">
                    <input name='promotion_expire' class="form-control form-control-inline input-medium date-picker"
                           type="text" value="{{ $promotion_expire }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-control" name="status">
                        <option  {!! $status== 1?' selected="selected" ':'' !!} value="1">Active</option>
                        <option  {!! $status== 0?' selected="selected" ':'' !!} value="0">Inactive</option>
                    </select>
                </div>
            </div>

            <?php $imgs =  isset($row->image_url)? json_decode($row->image_url):[]; ?>
            @if(count($imgs)>0)
            <div class="form-group">
                <label class="col-sm-2 control-label">Photo</label>
                <div class="col-sm-10">
                    <table role="presentation" class="table table-striped clearfix">
                        <tbody>

                        @foreach($imgs as $img)
                        <tr class="template-download fade in">
                            <td>
                                    <span class="preview">
                                    <input class="my-image_url" type="hidden" name="image_url[]"
                                           value="{{ $img }}">
                                        <a href="{{ asset("uploads/files/$img") }}"
                                           title="{{ $img }}" download="{{ $img }}" data-gallery="">
                                            <img src="{{ asset("uploads/files/tmp2/$img") }}">
                                        </a>  </span>
                            </td>
                            <td>
                                <p class="name">
                                    <a href="{{ asset("uploads/files/$img") }}"
                                       title="{{ $img }}" download="{{ $img }}" data-gallery="">{{ $img }}</a>
                                </p></td>
                            <td>
                                <span class="size"></span>
                            </td>
                            <td>
                                <button class="btn red delete btn-sm" data-type="DELETE"
                                        data-url="{{ url("backend/post-delete-img/$img") }}">
                                    <i class="fa fa-trash-o"></i>
                                    <span>Delete</span>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            @endif

            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="row">
                <label class="col-sm-2 control-label">Image</label>
                <div class="col-sm-10">
                    <div>
                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                        <div class="row fileupload-buttonbar">
                            <div class="col-lg-7">
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <span class="btn green fileinput-button">
                                                <i class="fa fa-plus"></i>
                                                <span> Add files... </span>
                                                <input type="file" name="files[]" multiple=""> </span>
                                <button type="submit" class="btn blue start">
                                    <i class="fa fa-upload"></i>
                                    <span> Start upload </span>
                                </button>
                                <!-- The global file processing state -->
                                <span class="fileupload-process"> </span>
                            </div>
                            <!-- The global progress information -->
                            <div class="col-lg-5 fileupload-progress fade">
                                <!-- The global progress bar -->
                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-success" style="width:0%;"> </div>
                                </div>
                                <!-- The extended global progress information -->
                                <div class="progress-extended"> &nbsp; </div>
                            </div>
                        </div>
                        <!-- The table listing the files available for upload/download -->
                        <table role="presentation" class="table table-striped clearfix">
                            <tbody class="files"> </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- The blueimp Gallery widget -->
            <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                <div class="slides"> </div>
                <h3 class="title"></h3>
                <a class="prev"> ‹ </a>
                <a class="next"> › </a>
                <a class="close white"> </a>
                <a class="play-pause"> </a>
                <ol class="indicator"> </ol>
            </div>
            <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
            <script id="template-upload" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
                            <tr class="template-upload fade">
                                <td>
                                    <span class="preview"></span>
                                </td>
                                <td>
                                    <p class="name">{%=file.name%}</p>
                                    <strong class="error text-danger label label-danger"></strong>
                                </td>
                                <td>
                                    <p class="size">Processing...</p>
                                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                    </div>
                                </td>
                                <td> {% if (!i && !o.options.autoUpload) { %}
                                    <button class="btn blue start" disabled>
                                        <i class="fa fa-upload"></i>
                                        <span>Start</span>
                                    </button> {% } %} {% if (!i) { %}
                                    <button class="btn red cancel">
                                        <i class="fa fa-ban"></i>
                                        <span>Cancel</span>
                                    </button> {% } %} </td>
                            </tr> {% } %} </script>
            <!-- The template to display files available for download -->
            <script id="template-download" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
                            <tr class="template-download fade">
                                <td>
                                    <span class="preview"> {% if (file.thumbnailUrl) { %}
                                    <input class="my-image_url" type="hidden" name="image_url[]" value="{%=file.b_name%}">
                                        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery>
                                            <img src="{%=file.thumbnailUrl%}">
                                        </a> {% } %} </span>
                                </td>
                                <td>
                                    <p class="name"> {% if (file.url) { %}
                                        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a> {% } else { %}
                                        <span>{%=file.name%}</span> {% } %} </p> {% if (file.error) { %}
                                    <div>
                                        <span class="label label-danger">Error</span> {%=file.error%}</div> {% } %} </td>
                                <td>
                                    <span class="size">{%=o.formatFileSize(file.size)%}</span>
                                </td>
                                <td> {% if (file.deleteUrl) { %}
                                    <button class="btn red delete btn-sm" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
                                        <i class="fa fa-trash-o"></i>
                                        <span>Delete</span>
                                    </button>
                                    <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
                                    <button class="btn yellow cancel btn-sm">
                                        <i class="fa fa-ban"></i>
                                        <span>Cancel</span>
                                    </button> {% } %} </td>
                            </tr> {% } %} </script>
            <!-- End form Upload -->

            <div class="row form-group">
                <label class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea type="text" name="description" id="summernote_1">{{ $description }}</textarea>
                </div>
            </div>


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
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ $base_url }}/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ $base_url }}/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    @endsection
@section('scrip')
    @parent
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    {{--<script src="{{ $base_url }}/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>--}}
    <script src="{{ $base_url }}/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
   {{-- <script src="{{ $base_url }}/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
    <script src="{{ $base_url }}/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
   --}}
    <!-- END PAGE LEVEL PLUGINS -->
    {{--<script src="{{ $base_url }}/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>--}}
    <script src="{{ $base_url }}/assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ $base_url }}/assets/pages/scripts/form-fileupload.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ $base_url }}/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script>
        $.fn.datepicker.defaults.format = "yyyy/mm/dd";
        $(function () {

            $('.date-picker').datepicker();

            $('.category_id').select2();
            $('.brand_id').select2();

            $('body').delegate('[name=category_id]','change',function () {
                var category_id = $(this).val();

                $.ajax({
                    url: '{{url('backend/item-category-get-space.html')}}',
                    async:true,
                    data:{
                        category_id:category_id,
                        _token:'{{csrf_token()}}'
                    },
                    error:function () {
                        alert('save error !!');
                    },
                    dataType:'json', // html & json
                    type:'GET',
                    success:function (d) {
                        var html = '';
                        $.each(d,function () {
                            if($(this)[0]){
                                var sp = $(this)[0];
                                html += '<div class="row form-group">' +
                                    '<label class="col-sm-4 control-label">'+sp.title+'</label>' +
                                    '<div class="col-sm-8">' +
                                    '<input type="hidden" value="'+sp.id+'" name="spec_id['+sp.id+']">' +
                                    '<input  class="form-control" type="text" name="spec_value['+sp.id+']">' +
                                    '</div>' +
                                    '</div>';


                            }
                        });

                        $('.my-sp').html(html);

                    }
                });

            });


        });
    </script>

    @endsection