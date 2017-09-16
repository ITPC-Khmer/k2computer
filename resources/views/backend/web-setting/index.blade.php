<?php
$base_url = asset('them/backend');
?>
@extends('layout.backend')

@section('title','Web Setting')
@section('css')
    @parent
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ $base_url }}/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
@endsection

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
    </div>
    <div class="form-body">
            @foreach( $rows as $row)
                <tr>
                    <td>{{ $row->title }}</td>
                    <td>
                        @if($row->key_type == 'text')
                            <div class="form-group form-md-line-input has-success">
                                <input data-id="{{$row->id}}" class="form-control txt-web-setting" id="form_control_1" value="{{$row->key_value}}" type="text">

                            </div>
                        @elseif($row->key_type == 'select')

                            <div class="form-group form-md-line-input has-success">
                                <select data-id="{{$row->id}}" name="category_id[]"  class="txt-web-setting form-control category_id" multiple="multiple">
                                    <option value="0"></option>
                                    {!! \App\Models\ECBackend\ItemCategory::getParentOptionMulti($row->key_value) !!}
                                </select>
                            </div>

                        @elseif($row->key_type == 'file')
                        <?php $img = $row->key_value != ''?asset("uploads/files/$row->key_value"):asset("uploads/files/ajax_loader.gif") ?>
                             <form target="my_iframe" action="{{url('backend/web-setting-save-file')}}" method="post" enctype="multipart/form-data" class=" form-group form-md-line-input has-success">
                            {!! csrf_field() !!}
                                <input type="hidden" name="id" value="{{$row->id}}">
                                <input type="file" name="my_file" accept="image/*"><button type="submit">Upload</button>
                             </form>
                            <img src="{{$img}}" height="100px" id="my_image_{{$row->id}}">

            @endif

                    </td>
                </tr>
        @endforeach
            <br/>
        <iframe name="my_iframe" id="my_iframe" style="display: none;"></iframe>

    </div>

@endsection


@section('js')
    @parent
@endsection

@section('scrip')

    <script src="{{ $base_url }}/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script>
        function showMyImage(id,image) {
            $('#my_image_'+id).prop('src',image);

        }

        $(function () {
            $('.category_id').select2();

            $('.txt-web-setting').on('change',function () {
                var key_value = $(this).val();
                var id =$(this).data('id');
                $.ajax({
                    url: '{{url('backend/web-setting-save-text')}}',
                    async:true,
                    data:{
                        id:id,
                        key_value:key_value,
                        _token:'{{csrf_token()}}'
                    },
                    error:function () {
                        alert('save error !!');
                    },
                    dataType:'json', // html & json
                    type:'POST',
                    success:function (d) {
                        if(d.error - 0 >0){
                            alert('save error')
                        }
                    }
                });

            });
        })
    </script>
    @endsection



