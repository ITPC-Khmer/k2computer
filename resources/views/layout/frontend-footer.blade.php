<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="brand-area mb-35">
    <div class="container blog-wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="brand-active  box-shadow p-15 bg-fff ">

                    @foreach(\App\Models\Frontend\Web::getHomeBrand() as $row)
                        <?php
                        $image_url = ($row->image_logo);
                        $img1 = isset($image_url)?asset("uploads/files/tmp1/$image_url") :asset('no_image.jpg.png');
                        ?>
                        <div class="single-brand marquee" >
                            <a href="{{ url("category.html?brand_id={$row->id}") }}">
                                <img src="{{  $img1 }}" alt="" />
                            </a>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>

</div>

<footer class="bg-fff bt">
    <div class="container">
        <div class="footer-top-area ptb-35 bb">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                    <div class="fb-page" data-href="https://www.facebook.com/mctcomputer/" data-tabs="timeline"  data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/mctcomputer/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/mctcomputer/">Modern Computer Technology</a></blockquote></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                    <div class="footer-widget">
                        <?php
                        $add = \App\Models\ECBackend\WebSetting::getSetting('address');
                        $phone = \App\Models\ECBackend\WebSetting::getSetting('phone_number');
                        $mail = \App\Models\ECBackend\WebSetting::getSetting('email');
                        ?>
                        <h3 class="footer-title bb mb-20 pb-15">About Us</h3>
                        <ul>
                            <li>
                                <div class="contuct-content">
                                    <div class="contuct-icon">
                                        <a href="https://www.google.com.kh/maps/place/MCT+Computer/@11.5709025,104.9077398,17z/data=!3m1!4b1!4m5!3m4!1s0x3109516bf76273d1:0x785fa0445a7a5c07!8m2!3d11.5709025!4d104.9099285"><i class="fa fa-map-marker"></i></a>
                                    </div>
                                    <div class="contuct-info">
                                        <span>{!! $add !!}</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contuct-content">
                                    <div class="contuct-icon">
                                        <i class="fa fa-fax"></i>
                                    </div>
                                    <div class="contuct-info">
                                        <span>{!! $phone !!}</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contuct-content">
                                    <div class="contuct-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="contuct-info">
                                        <span>{!! $mail !!}</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title bb mb-20 pb-15">My account</h3>
                        <div class="footer-menu home3-hover">
                            <ul>
                                <li><a href="{{ url('login') }}">My Account</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title bb mb-20 pb-15">Visitor</h3>
                        <div class="footer-menu"><a href="http://s11.flagcounter.com/more/43BE"><img src="//s11.flagcounter.com/count2/43BE/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
