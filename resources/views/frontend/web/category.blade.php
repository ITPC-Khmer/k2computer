@extends('layout.frontend')
@section('title','Computer Accessory')
    @section('content')
        @parent
        <div class="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="woocommerce-breadcrumb mtb-15">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- product-vew area start -->
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="product box-shadow bg-fff">
                            <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                                <i class="fa fa-paper-plane-o icon bg-4"></i>
                                <h3>Products</h3>
                            </div>
                            <div class="product-active left-right-angle home2 owl-carousel owl-theme owl-loaded">
                            </div>
                            <div class="tab-area">
                                <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="tab1">
                                    <div class="row">
                                        @foreach($result as $row)
                                            <?php
                                            $image_url = json_decode($row->image_url);
                                            $img1 = isset($image_url[0])?asset("uploads/files/tmp1/$image_url[0]") :asset('no_image.jpg.png');
                                            /*$img2 = isset($image_url[1])?asset("uploads/files/tmp1/$image_url[1]") :$img1;*/
                                            ?>
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                            <div class="product-wrapper bg-fff mb-30 bl">
                                                <div class="product-img" style="box-shadow:0 0 10px #ddd;">
                                                    <div class="product-img">
                                                        <a href="{{ url("detail/{$row->id}") }}">
                                                            <img src="{{ $img1 }}" alt="{{ $row->title }}" class="primary"/>
                                                            {{--<img src="{{ $img2 }}" alt="{{ $row->title }}" class="secondary"/>--}}

                                                        </a>
                                                        <div class="product-icon c-fff hover-bg">
                                                            <ul><a href="{{ url("detail/{$row->id}") }}">
                                                                    <li  style="background:white; margin-top: -55px; padding: 2%;"><h3>{!!str_limit($row->title, 15)!!}</h3><p>{!! $row->description !!}</p></li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                        {{-- <span class="sale">Sale</span>--}}
                                                    </div>


                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="{{ url("detail/{$row->id}") }}">{!!str_limit($row->title, 20)!!}</a></h3>
                                                    <?php $_price = \App\Models\Frontend\Web::getItemPrice($row->start_price,$row->promotion_price,$row->promotion_expire_date); ?>
                                                    <span style="color: red">${{ number_format($_price[0]) }}</span>
                                                </div>
                                            </div>
                                        </div>

                                            @endforeach
                                    </div>
                                    <div class="tab-menu-area bg-fff mb-30 box-shadow">
                                        <div class="row">
                                            {{ $result->links() }}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        @endsection