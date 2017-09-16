@extends('layout.backend')
@section('title','Items ')
@section('content')

    <div class="portlet box green" >
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-comments"></i>All Product</div>
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
                        <th> <a href="{{ url('backend/item-form.html') }}" data-repeater-create="" class="btn btn-success mt-repeater-add">
                                <i class="fa fa-plus"></i> Add</a>
                        </th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Start Price</th>
                        <th>Promotion Price</th>
                        <th>Promotion Expire</th>
                        <th>Image</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($result as $row)
                        <?php
                        $imgs = json_decode($row->image_url);
                        $img = count($imgs)>0?$imgs[0]:'#';
                        ?>
                        <tr>
                            <td width="180px">
                                <a href="{{ url("backend/item-edit.html/{$row->id}")}}"class="btn green btn-outline my-del"><i class="fa fa-edit"></i><span>Edit</span></a>
                                <a href="{{ url("backend/item-delete.html/{$row->id}")}}"class="btn red btn-outline my-del delete_product "><i class="fa fa-trash"></i>
                                    <span>Delete</span></a>
                            </td>
                            <td>{{ $row->title }}</td>
                            <td>{{ \App\Models\ECBackend\ItemCategory::getTitle($row->category_id) }}</td>
                            <td>{{ \App\Models\ECBackend\ItemBrand::getTitle($row->brand_id) }}</td>
                            <td>{{ $row->start_price }}</td>
                            <td>{{ $row->promotion_price }}</td>
                            <td>{{ $row->promotion_expire_date }}</td>
                            <td>
                                <a href="{{ asset("uploads/files/$img") }}"><img src="{{ asset("uploads/files/tmp2/$img") }}" width="auto" height="40px"></a>
                            </td>
                            <td>{{ $row->status==1?'Active':'Inactive' }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $result -> links () }}
        </div>
    </div>
@endsection
@section('scrip')
    @parent
    <script>

        $(function () {

            $('.delete_product').on('click',function (e) {
                e.preventDefault();
                var url = $(this).prop('href');

                swal({
                        title: 'តើអ្នកប្រាកដទេដែលថាចង់លុបទិន្ន័យមួយនេះ?',
                        text: "",
                        type: 'warning',
                        showCancelButton: true,
                        showConfirmButton: true,
                        closeOnConfirm: true,
                        closeOnCancel: true,

                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                    },
                    function(isConfirm){
                        if (isConfirm){
                            alert(url);
                            location.href = url;
                        } else {

                        }
                    });



            });

        });


    </script>
    @endsection