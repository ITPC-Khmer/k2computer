@extends('layout.frontend')
@section('title','K2 Computer')
@section('content')
<?php
$row_slides =\App\Models\Frontend\Web::getHomeSlide();
?>
    <!-- slider area start -->

    <div class="slider-area">
        <div id="slider-active">
            @foreach($row_slides as $row_slide)
                <?php
                $image_url =($row_slide -> slide_image);
                $image = isset($image_url)?asset("uploads/files/$image_url") :asset('no_image.jpg.png');
                ?>
                <img src="{{ $image }}" alt="" title="#active{{ $row_slide->id }}"/>
            @endforeach
        </div>
        @foreach($row_slides as $row_slide)
        <div id="active{{ $row_slide->id }}" class="nivo-html-caption">
            <div class="container" style="display: none;">
                <div class="row">
                    <div class="col-md-10 col-md-offset-2 col-sm-11 col-sm-offset-1 hidden-xs ">
                        <div class="slide1-text home2-slide1-text text-left">
                            <div class="middle-text">
                                <div class="cap-dec animated">
                                    <h1>{{$row_slide->slide_title}} </h1>
                                </div>
                                <div class="cap-title animated text-uppercase">
                                    <h3>Digital camera kit</h3>
                                </div>
                                <div class="cap-dec animated">
                                    <p>{{$row_slide->description}}</p>
                                </div>
                                <div class="cap-readmore animated">
                                    <a href="#">View Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-progress"></div>
        </div>
        @endforeach
    </div>

    <div class="product-area mtb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                    <div class="product box-shadow bg-fff">
                        <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                            <i class="fa fa-paper-plane-o icon bg-4"></i>
                            <h3>New Products</h3>
                        </div>
                        <div class="product-active left-right-angle home2">
                            @foreach(\App\Models\Frontend\Web::getNewProduct() as $row)
                                <?php
                                $image_url = json_decode($row->image_url);
                                $img1 = isset($image_url[0])?asset("uploads/files/tmp1/$image_url[0]") :asset('no_image.jpg.png');
                                /*$img2 = isset($image_url[1])?asset("uploads/files/tmp1/$image_url[1]") :$img1;*/

                                ?>
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="{{ url("detail/{$row->id}") }}">
                                        <img src="{{ $img1 }}" alt="{{ $row->title }}" class="primary"/>
                                        {{--<img src="{{ $img2 }}" alt="{{ $row->title }}" class="secondary"/>--}}

                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul><a href="{{ url("detail/{$row->id}") }}">
                                            <li  style="background:white; margin-top: -55px; padding: 2%;"><h5>{{ $row->title }}</h5><p>{!! $row->description !!} Read more ... </p></li>
                                            </a>
                                        </ul>
                                    </div>
                                   {{-- <span class="sale">Sale</span>--}}
                                </div>
                                <div class="product-content">
                                    <h3><a href="{{ url("detail/{$row->id}") }}">{!!str_limit($row->title, 18)!!}</a></h3>
                                    <ul>

                                    </ul>
                                    <?php $_price = \App\Models\Frontend\Web::getItemPrice($row->start_price,$row->promotion_price,$row->promotion_expire_date); ?>
                                    <span style="color: red">${{ number_format($_price[0]) }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area end -->

    <?php
    $product_category = \App\Models\ECBackend\WebSetting::getSettingArray('product-category');
    ?>
    @if(count($product_category)> 0)
    <!-- tab-area start -->
    <div class="tab-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab box-shadow bg-fff">
                        <div class="product-title home2-bg-1 home2-product-title text-uppercase">
                            <i class="fa fa-check-square-o icon bg-4"></i>
                            <h3>Products category</h3>
                            <div class="tab-menu home2-tab-menu floatright hidden-xs">
                                <ul>
                                    @foreach($product_category as $p_cat_id)
                                    <li @if($loop->first) class="active" @endif><a style="color: #fff;" href="#product_category_{{ $p_cat_id }}" data-toggle="tab">{{ \App\Models\ECBackend\ItemCategory::getTitle($p_cat_id) }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            @foreach($product_category as $p_cat_id)
                                <div role="tabpanel" class="tab-pane  @if($loop->first) active @else fade @endif" id="product_category_{{ $p_cat_id }}">
                                    <div class="tab-active home2 left-right-angle">

                                        @foreach(\App\Models\Frontend\Web::getHomeCateProduct($p_cat_id) as $row)
                                            <?php
                                            $image_url = json_decode($row->image_url);
                                            $img1 = isset($image_url[0])?asset("uploads/files/tmp1/$image_url[0]") :asset('no_image.jpg.png');
                                            /*$img2 = isset($image_url[1])?asset("uploads/files/tmp1/$image_url[1]") :$img1;*/
                                            ?>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="{{ url("detail/{$row->id}") }}">
                                                    <img src="{{ $img1 }}" alt="{{ $row->title }}" class="primary"/>
                                                    {{--<img src="{{ $img2 }}" alt="{{ $row->title }}" class="secondary"/>--}}
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul><a href="{{ url("detail/{$row->id}") }}">
                                                            <li  style="background:white; margin-top: -55px; padding: 2%;"><h5>{{ $row->title }}</h5><p>{!! $row->description !!}Read more ...</p></li>
                                                        </a>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="{{ url("detail/{$row->id}") }}">{!!str_limit($row->title, 18)!!}</a></h3>
                                                <?php $_price = \App\Models\Frontend\Web::getItemPrice($row->start_price,$row->promotion_price,$row->promotion_expire_date); ?>
                                                <span style="color: red">${{ number_format($_price[0]) }}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tab-area end -->
    @endif
<!-- mostviewed-area start -->
    <?php
    $home_category = \App\Models\ECBackend\WebSetting::getSettingArray('home-category');
    ?>
    @if(count($home_category)>0)
    @foreach($home_category as $cat_id)
    <?php $rows = \App\Models\Frontend\Web::getHomeCateProduct($cat_id,18); ?>
        @if(count($rows)>0)
        <div class="mostviewed-area mt-35 ">
            <div class="container">
                <div class="products-category  box-shadow bg-fff">
                    <div class="product-title home2-product-title home2-bg-1 text-uppercase">
                        <i class="fa fa-paperclip icon bg-4"></i>
                        <a href="{{ url("category.html?category_id={$cat_id}") }}">
                            <h3>{{ \App\Models\ECBackend\ItemCategory::getTitle($cat_id) }}</h3>
                        </a>
                    </div>
                    <div class="row">
                        <div class="mostviewed">
                            <div class="col-lg-3  col-md-4 hidden-sm hidden-xs">
                                <div class="single-banner">
                                    <a href="{{ url("category.html?category_id={$cat_id}") }}">
                                      <img src="{{ asset('uploads/files/tmp1/'.\App\Models\ECBackend\ItemCategory::getImage($cat_id)) }}" class="primary"/>  {{--//---------------------IMAGES---------------//--}}
                                    </a>

                                </div>
                            </div>
                            <div class="col-lg-9  col-md-8 col-sm-12 col-xs-12">
                                <div class="mostviewed-active-2 home2 left-right-angle">


                                    @foreach ($rows->chunk(3) as $chunk)
                                    <div class="featured-wrapper">
                                        @foreach ($chunk as $row)
                                            <?php
                                            $image_url = json_decode($row->image_url);
                                            $img1 = isset($image_url[0])?asset("uploads/files/tmp2/$image_url[0]") :asset('no_image.jpg.png');
                                            $img2 = isset($image_url[1])?asset("uploads/files/tmp2/$image_url[1]") :$img1;

                                            ?>
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="{{ url("detail/{$row->id}") }}">
                                                    <img src="{{ $img1 }}" alt="{{ $row->title }}" class="primary"/>
                                                    <img src="{{ $img2 }}" alt="{{ $row->title }}" class="secondary"/></a>
                                                </a>
                                            </div>
                                            <div class="product-content floatleft">
                                                <h3><a href="{{ url("detail/{$row->id}") }}">{!!str_limit($row->title, 18)!!}</a></h3>
                                                <?php $_price = \App\Models\Frontend\Web::getItemPrice($row->start_price,$row->promotion_price,$row->promotion_expire_date); ?>
                                                <span style="color: red">${{ number_format($_price[0]) }}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
    @endif
    <!-- mostviewed-area end -->

    <div class="blog-test-area mt-35">
        <div class="container">
            <div class="row">
                <!-- blog-area start -->
                <div class="col-lg-12">
                    <div class="blog-area box-shadow bg-fff mb-35">
                        <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                            <i class="fa fa-comments-o icon bg-4"></i>
                            <h3> What's News ?</h3>
                        </div>
                        <div class="home2-blog-active home2 left-right-angle">
                            @foreach(\App\Models\Frontend\Web::getNews() as $row)
                                <?php
                                $description = ($row->description);
                                $image_url = ($row->image_url);
                                $img1 = isset($image_url)?asset("uploads/files/tmp1/$image_url") :asset('no_image.jpg.png');
                                ?>
                            <div class="blog-wrapper">
                                <div class="blog-img mb-30">
                                    <a href="{{ url("what_news_detail/{$row->id}") }}">
                                        <img src="{{  $img1 }}" alt="" />
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="{{ url("what_news_detail/{$row->id}") }}">{!! $row->title !!}</a></h3>
                                    <p>{!!str_limit($description, 200)!!}</p>
                                </div>
                            </div>
                                @endforeach

                        </div>
                    </div>
                </div>
                <!-- blog-area end -->
            </div>
        </div>
    </div>

        <!-- brand-area start -->

    </div>



@endsection

@section('script')

    <script>
        $(function () {
            // tab-active ///
            $('.tab-active').owlCarousel({
                smartSpeed:1000,
                margin:1,
                nav:true,
                navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            });

        });
    </script>

@endsection