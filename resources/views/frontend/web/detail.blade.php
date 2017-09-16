@extends('layout.frontend')
    @section('content')

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=1987545828143412";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

<div class="simple-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="woocommerce-breadcrumb mtb-15">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php
                $image_url = json_decode($row->image_url);
                $img1 = isset($image_url[0])?asset("uploads/files/tmp1/$image_url[0]") :asset('no_image.jpg.png');

                ?>
                    <div class="product box-shadow bg-fff">
                    <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                        <i class="fa fa-paper-plane-o icon bg-4"></i>
                        <h3>Products</h3>
                    </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="symple-product mb-20">
                            <div class="single-banner">
                                <div class="tab-content">
                                    @if(count($image_url)>0)
                                        @foreach($image_url as $img)
                                            <div role="tabpanel" class="tab-pane @if($loop->first)  active @endif" id="img_v{{ $loop->index }}">
                                                <a class="popup" href="{{ asset("uploads/files/{$img}") }}">
                                                    <img src="{{ asset("uploads/files/tmp1/{$img}") }}" alt="" @if($loop->first)  class="primary" @endif  >
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                    <br/>
                                </div>
                            </div>
                            <div class="single-product-menu mb-30 box-shadow">
                                <div class="single-product-active clear owl-carousel owl-theme owl-loaded " style="background-color: #ffffff">
                                    <div class="single-banner">
                                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 896px;">
                                            @if(count($image_url)>0)
                                                @foreach($image_url as $img)
                                                    <div class="owl-item active" style="width: 112px; margin-right: 0px;">
                                                        <div class="single-banner floatleft">
                                                            <a href="#img_v{{ $loop->index }}" data-toggle="tab">
                                                                <img src="{{ asset("uploads/files/tmp2/{$img}") }}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>

                                    </div>


                                    <div class="owl-controls">
                                        <div class="owl-nav">
                                            <div class="owl-prev" style="display: none;">
                                                <i class="fa fa-angle-left"></i>
                                            </div>
                                            <div class="owl-next" style="display: none;">
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="owl-dots" style="">
                                            <div class="owl-dot active">
                                                <span></span>
                                            </div>
                                            <div class="owl-dot">
                                                <span></span>
                                            </div>
                                            <div class="owl-dot">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">

                        <div class="symple-product box-shadow bg-fff p-15 mb-30">
                            @section('title')
                            {{ $row->title }}
                            @endsection
                            <br>
                                <a href="{{ $row->url_detail }}" data-toggle="tooltip" data-original-title="Full detail"><h1>{{ $row->title }}</h1></a>
                                <div class="product-content simple-product-content mb-10">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <?php $_price = \App\Models\Frontend\Web::getItemPrice($row->start_price,$row->promotion_price,$row->promotion_expire_date); ?>
                                <H1 style="color: #A61206;">${{ number_format($_price[0]) }}</H1>
                            </div>
                            <?php
                            $spec_details = \App\Models\ECBackend\ItemSpace::getSpecDetail($row->id);
                            ?>
                            @if(count($spec_details)> 0)
                            <p>
                                @foreach($spec_details as $sp)
                                    <b>{{ $sp->title }}</b> : {{ $sp->spec_value }} <br>
                                @endforeach
                            </p>
                            @endif
                            <div class="simple-product-form contuct-form mtb-20">
                                {{--<form action="{{  url("chat") }}">--}}
                                    <input min="1" max="100" name="quantity" class="quantity" value="1" type="number">
                                    <button class="add-to-cart"
                                            data-id="{{$row->id}}"
                                            data-name="{{$row->title}}"
                                            data-price="{{isset($_price[0])?$_price[0]:0}}"
                                            data-image = {{isset($img)?asset("uploads/files/tmp1/{$img}"):'' }}

                                    >Add to cart</button>
                                {{--</form>--}}
                            </div>
                            {{--<div class="simple-product-icon c-fff hover-bg pb-20 mb-10 bb">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Browser Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-comments"></i></a></li>
                                </ul>
                            </div>--}}
                            <div class="product_meta">
                                <b>Brand: </b> <span>{{ \App\Models\ECBackend\ItemBrand::getTitle($row->brand_id) }}</span><br>
                                <b>Category: </b><span>{{ \App\Models\ECBackend\ItemCategory::getTitle($row->category_id) }}</span>
                                <div class="footer-content pt-15 text-uppercase">
                                    <p>Share this product</p>
                                    <ul>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Twetter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Instagram"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Google-Plus"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="tooltip" title="" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-product-tab box-shadow">
                            <div class="simple-product-tab-menu clear">
                                <ul>
                                    <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                                    <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
                                </ul>
                            </div>
                            <div class="tab-content  bg-fff">
                                <div class="tab-pane active" id="description">
                                    <div class="product-description p-20 bt">
                                        <h2 style="color: blue">Product Description</h2>
                                        <p>{!! $row -> description !!}</p>
                                        </div>
                                </div>
                                <div class="tab-pane" id="reviews">
                                    <div class="product-reviews p-20 bt">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="review-area">
                                                    <h2>{{ $row->title }}</h2>
                                                    <div id="fb-root"></div>
                                                    <div id="fb-root"></div>
                                                    <div class="fb-like" data-href="<?php echo "http://" .$_SERVER['REQUEST_URI']?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                                    <div class="fb-comments" data-href="<?php echo "http://localhost:8000"?>" data-numposts="5"></div>
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

        </div>
    </div>
</div>
    @endsection
@section('script')
    @parent


    <script>

        $(function () {


            $('body').delegate('.add-to-cart','click',function (e) {
                e.preventDefault();

                var id = $(this).data('id');
                var name = $(this).data('name');
                var price = $(this).data('price');
                var image = $(this).data('image');
                var quantity = $('.quantity').val();

                $.ajax({
                    url: '{{url('add-cart')}}',
                    data: {
                        id: id,
                        name: name,
                        price: price,
                        quantity: quantity,
                        image: image,
                    },
                    dataType: 'JSON',
                    type: 'GET',
                    success: function (d) {
                        addTopCart(d);
                    },
                    error: function () {
                        
                    }
                });

            })
        });


    </script>


@endsection