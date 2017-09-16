@extends('layout.frontend')
@section('content')
    <div class="main-conatiner shop-bg">
        <div class="container">
            <?php
            $image_url = ($row->image_url);
            $description=($row->description);
            $img1 = isset($image_url)?asset("uploads/files/tmp1/$image_url") :asset('no_image.jpg.png');
            ?>
            <div class="row">
                <!--- single-blog-start -->

                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="blog-wrapper bg-fff box-shadow">
                        <div class="blog-img single-blog-img mb-25 symple-product box-shadow bg-fff p-15 mb-30">
                            @section('title')
                                {{ $row->title }}
                            @endsection
                          <img src="{{  $img1 }}" alt="" style="max-width:500px; float:left; margin-right:10px;}" class="box-shadow " />
                                <h2>{{$row->title}} </h2><br>
                                <p >{!! $description !!}</p>
                        </div>
                    </div>
                    <!-- comments-area -->
                    <div class="comments-2-area bg-fff box-shadow p-30-20 mtb-50">
                        <div class="single-blog-form">
                            <h3 class="single-blog-title bb">Leave a Reply </h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <div class="message-wrapper mb-30">
                                <form action="#">
                                    <span>Comment</span>
                                    <textarea name="#" id="comment" cols="30" rows="10"></textarea>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-info">
                                        <form action="#">
                                            <span>Name *</span>
                                            <input type="text">
                                            <span>Website *</span>
                                            <input type="text">
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-info">
                                        <form action="#">
                                            <span>Email *</span>
                                            <input type="email">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-btn">
                                <input value="post comment" type="submit">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection