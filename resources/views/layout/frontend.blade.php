<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->

    <link rel="shortcut icon" type="image/x-icon" href="{{ $base_url_f }}/img/2.png">

    <!-- All css files are included here. -->
    <!-- animate css -->
    @section('css')
    <link rel="stylesheet" href="{{ $base_url_f }}/css/animate.min.css">
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ $base_url_f }}/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ $base_url_f }}/css/font-awesome.min.css">
    <!-- nivo-slider css -->
    <link rel="stylesheet" href="{{ $base_url_f }}/css/nivo-slider.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{ $base_url_f }}/css/owl.carousel.min.css">
    <!-- icofont css -->
    <link rel="stylesheet" href="{{ $base_url_f }}/css/icofont.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ $base_url_f }}/css/meanmenu.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" href="{{ $base_url_f }}/css/jquery-ui.min.css">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{ $base_url_f }}/css/magnific-popup.css">
    <!-- percircle css -->
    <link rel="stylesheet" href="{{ $base_url_f }}/css/percircle.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ $base_url_f }}/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ $base_url_f }}/css/responsive.css">
@show
    <!-- Modernizr JS -->

    <script src="{{ $base_url_f }}/js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body>
<!--[if lt IE 8

<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
@include('layout.frontend-head')
<!-- header end -->
@yield('content')

<!-- footer-area start -->

@include('layout.frontend-footer')

<!-- footer-area end -->

<!-- Placed js at the end of the document so the pages load faster -->
<!-- jquery latest version -->
<script src="{{ $base_url_f }}/js/vendor/jquery-1.12.4.min.js"></script>
<!-- magnific popup js -->
<script src="{{ $base_url_f }}/js/jquery.magnific-popup.min.js"></script>
<!-- mixitup js -->
<script src="{{ $base_url_f }}/js/jquery.mixitup.min.js"></script>
<!-- jquery-ui price-->
<script src="{{ $base_url_f }}/js/jquery-ui.min.js"></script>
<!-- ScrollUp Js -->
<script src="{{ $base_url_f }}/js/jquery.scrollUp.min.js"></script>
<!-- countDown Js -->
<script src="{{ $base_url_f }}/js/jquery.countdown.min.js"></script>
<!-- nivo slider js -->
<script src="{{ $base_url_f }}/js/jquery.nivo.slider.pack.js"></script>
<!-- mobail menu js -->
<script src="{{ $base_url_f }}/js/jquery.meanmenu.js"></script>
<!-- Bootstrap framework js -->
<script src="{{ $base_url_f }}/js/bootstrap.min.js"></script>
<!-- owl carousel js -->
<script src="{{ $base_url_f }}/js/owl.carousel.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="{{ $base_url_f }}/js/plugins.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{ $base_url_f }}/js/main.js"></script>

<script>

    function addTopCart(d) {
        console.log(d);
        var cc = '';
        var i = 0;
        $.each(d.items,function () {
            var item = $(this)[0];
            i += (item.quantity-0);


            cc +=   '                                            <div class="cart-item bb mt-10">\n' +
                '                                                <div class="cart-img">\n' +
                '                                                    <a href="{{url('detail')}}/'+item.id+'">\n' +
                '                                                        <img src="'+item.attributes.image+'" alt="" />\n' +
                '                                                    </a>\n' +
                '                                                </div>\n' +
                '                                                <div class="cart-content">\n' +
                '                                                    <a href="{{url('detail')}}/'+item.id+'">'+item.name+'</a>\n' +
                '                                                    <a href="#" data-id="'+item.id+'" class="pull-right cart-remove remove-cart"> <i class="fa fa-times"></i></a>\n' +
                '                                                    <span>'+item.quantity+' x $'+item.price+'</span>\n' +
                '                                                </div>\n' +
                '                                            </div>\n' ;
        });

        var c = '  <div class="cart">\n' +
            '                                    <i class="icofont icofont-bag"></i>\n' +
            '                                    <a href="#"> '+i+' Items - <strong>$'+d.cartTotal+' </strong>\n' +
            '                                        <i class="icofont icofont-rounded-down"></i>\n' +
            '                                    </a>\n' +
            '                                </div>\n' +
            '                                <ul>\n' +
            '                                    <li>\n' +
            '                                        <div class="cart-items">\n' +
            '\n' +
            '                                            \n' +
            cc+
            '\n' +
            '\n' +
            '                                            <div class="total mt-10">\n' +
            '                                                <span class="pull-left">Subtotal:</span>\n' +
            '                                                <span class="pull-right">$'+d.cartTotal+'</span>\n' +
            '                                            </div>\n' +
            '\n' +
            '                                            <div class="cart-btn mb-20">\n' +
            '                                                <a href="{{url('checkout')}}">view cart</a>\n' +
            '                                                <a href="{{url('checkout')}}">Checkout</a>\n' +
            '                                            </div>\n' +
            '                                        </div>\n' +
            '                                    </li>\n' +
            '                                </ul>';


        $('.top-cart').html(c);
    }

    $(function () {

        $.ajax({
            url: '{{url('all-cart')}}',
            data: {

            },
            dataType: 'JSON',
            type: 'GET',
            success: function (d) {
                addTopCart(d);
            },
            error: function () {

            }
        });

        $('body').delegate('.remove-cart','click',function (e) {

            e.preventDefault();
            var id = $(this).data('id');


            $.ajax({
                url: '{{url('remove-cart')}}',
                data: {
                    id: id
                },
                dataType: 'JSON',
                type: 'GET',
                success: function (d) {
                    addTopCart(d);
                },
                error: function () {

                }
            });
        });

    });

</script>
@section('script')

@show

</body>
</html>