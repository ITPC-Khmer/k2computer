<header>
    <!--<div class="header-top-area bb hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="language-menu dropdown">
                        <ul>
                            <li><a href="#">eng <i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="#">France</a></li>
                                    <li><a href="#">Germany</a></li>
                                    <li><a href="#">Japanese</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="header-top-right">
                        <p class="pull-left h2-color mtb-10 hidden-sm hidden-xs"> Welcome to k2computer! </p>
                        <div class="account-menu text-right pull-right mt-10">
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->


    <div class="header-top-area ptb-30">
        <div class="container">
            <div class="header-middle-area ptb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <?php
                                        $logo = \App\Models\ECBackend\WebSetting::getSetting('logo');
                                    ?>
                                    <img style="max-height: 80px" src="{{ asset('uploads/files/'.$logo) }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                            <div class="search-box">
                                <form action="{{ url('search') }}" method="get">
                                    <select name="category_id" id="select">
                                        <option value="0">All</option>
                                        {!! \App\Models\ECBackend\ItemCategory::getParentOption((isset($category_id)?$category_id:0)) !!}
                                    </select>
                                    <input type="text" value="{{ isset($q)?$q:'' }}" name="q" placeholder="Search Products...">
                                    <button><i class="fa fa-search"></i></button>
                                </form>

                            </div>
                        </div>

                        <div class="col-lg-2  col-md-3 col-sm-4  col-xs-12">
                            <div class="top-cart bg-5">
                                <div class="cart">
                                    <i class="icofont icofont-bag"></i>
                                    <a href="#"> 0Items - <strong>$0.00 </strong>
                                        <i class="icofont icofont-rounded-down"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li>
                                        <div class="cart-items">


                                            <div class="total mt-10">
                                                <span class="pull-left">Subtotal:</span>
                                                <span class="pull-right">$0.00</span>
                                            </div>

                                            <div class="cart-btn mb-20">
                                                <a href="#">view cart</a>
                                                <a href="#">Checkout</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        </div>
    </div>
    <div class="header-bottom home3-bg">
        <div class="container">
            <div class="row">

                <?php
                $all_cat = \App\Models\ECBackend\ItemCategory::where('parent',0)->limit(4)->get();
                $all_br = \App\Models\ECBackend\ItemBrand::limit(12)->get();
                ?>


                <div class="col-lg-12 col-md-9 hidden-xs hidden-sm">
                    <div class="mainmenu hover-bg home3-bg2 dropdown">
                        <nav>
                            <ul>
                                <li><a href="{{ url('/') }}">Homes</a></li>
                                @if(count($all_cat)>0)
                                    @foreach($all_cat as $r_cat)
                                        <?php
                                        $all_cat_sub = \App\Models\ECBackend\ItemCategory::where('parent',$r_cat->id)->orderBy('id','ASC')->get();
                                        ?>
                                            @if(count($all_cat_sub)> 0)
                                                <li><a href="{{ url("category.html") }}">{{ $r_cat->title }} <i class="fa fa-caret-down"></i></a>
                                                    <div class="megamenu">

                                                        @foreach ($all_cat_sub->chunk(4) as $chunk)
                                                                <span>
                                                                    @foreach ($chunk as $product)
                                                                    <a class="mega-title" href="{{ url("category.html?category_id={$product->id}") }}">{{ $product->title }}</a>
                                                                    @endforeach
                                                                </span>
                                                        @endforeach
                                                    </div>
                                                </li>
                                            @else
                                                <li><a href="{{ url("category.html?category_id={$r_cat->id}") }}">{{ $r_cat->title }}</a></li>
                                            @endif
                                    @endforeach
                                @endif

                                @if(count($all_br)>0)
                                                <li><a href="#">Brand <i class="fa fa-caret-down"></i></a>
                                                    <div class="megamenu">

                                                        @foreach ($all_br->chunk(4) as $chunk)
                                                                <span>
                                                                    @foreach ($chunk as $product)
                                                                    <a class="mega-title" href="{{ url("category.html?brand_id={$product->id}") }}">{{ $product->brand_name }}</a>
                                                                    @endforeach
                                                                </span>
                                                        @endforeach
                                                    </div>
                                                </li>
                                @endif


                                <li><a href="{{ url("what_news") }}">What's New</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobail-menu-area">
            <div class="container">
                <div class="row">
                    <?php
                    $all_cat = \App\Models\ECBackend\ItemCategory::where('parent',0)->limit(4)->get();
                    $all_br = \App\Models\ECBackend\ItemBrand::limit(12)->get();
                    ?>
                    <div class="col-lg-12 hidden-lg hidden-md col-sm-6">
                        <div class="mobail-menu-active">
                            <nav>
                                <ul>
                                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                    @if(count($all_cat)>0)
                                        @foreach($all_cat as $r_cat)
                                            <?php
                                            $all_cat_sub = \App\Models\ECBackend\ItemCategory::where('parent',$r_cat->id)->orderBy('id','ASC')->get();
                                            ?>
                                            @if(count($all_cat_sub)> 0)
                                                <li><a href="{{ url('category.html') }}">{{ $r_cat->title }}</a>
                                                    <ul>
                                                        <div class="mega-title">

                                                            @foreach ($all_cat_sub->chunk(4) as $chunk)
                                                                <span>
                                                                    @foreach ($chunk as $product)
                                                                    <li><a class="mega-title" href="#">{{ $product->title }}</a></li>
                                                                    @endforeach
                                                                </span>
                                                            @endforeach
                                                        </div>
                                                    </ul>

                                                </li>
                                            @else
                                                <li><a href="{{ url("category.html?category_id={$r_cat->id}") }}">{{ $r_cat->title }}">{{ $r_cat->title }}</a></li>
                                            @endif
                                        @endforeach
                                    @endif
                                    @if(count($all_br)>0)
                                        <li><a href="#">Brand</a>
                                            <ul>
                                                <div class="mega-title">

                                                    @foreach ($all_br->chunk(4) as $chunk)
                                                        <span>
                                                                    @foreach ($chunk as $product)
                                                         <li><a class="mega-title" href="{{ url("category.html?brand_id={$product->id}") }}">{{ $product->brand_name }}</a></li>
                                                            @endforeach
                                                                </span>
                                                    @endforeach
                                                </div>
                                            </ul>

                                        </li>
                                    @endif
                                    <li><a href="{{ url("what_news") }}">What's New </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>