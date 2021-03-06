@php
    $base_url = asset('them/backend');
@endphp
        <!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->


<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1/page_user_login_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 02:02:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>User Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ $base_url }}/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $base_url }}/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ $base_url }}/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ $base_url }}/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ $base_url }}/assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo" style="margin: 3px auto 0px;">
    <a href="{{ url('/') }}">
        <?php
        $logo = \App\Models\ECBackend\WebSetting::getSetting('logo');
        ?>
        <img style="max-height: 80px;" src="{{ asset('uploads/files/'.$logo) }}" alt="">
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="{{ url('login') }}" method="post">
        {!! csrf_field() !!}
        <h3 class="form-title font-green">Sign In</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter any username and password. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="email" /> </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
        <div class="form-actions">
            <button type="submit" class="btn green uppercase">Login</button>
            {{--<label class="rememberme check mt-checkbox mt-checkbox-outline">
                <input type="checkbox" name="remember" value="1" />Remember
                <span></span>
            </label>
            <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>--}}
        </div>
    </form>
</div>
<!--[if lt IE 9]>
<script src="{{ $base_url }}/assets/global/plugins/respond.min.js"></script>
<script src="{{ $base_url }}/assets/global/plugins/excanvas.min.js"></script>
<script src="{{ $base_url }}/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ $base_url }}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="{{ $base_url }}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ $base_url }}/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="{{ $base_url }}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="{{ $base_url }}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="{{ $base_url }}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ $base_url }}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{ $base_url }}/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="{{ $base_url }}/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ $base_url }}/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ $base_url }}/assets/pages/scripts/login.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
<!-- Google Code for Universal Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-37564768-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- End -->

<!-- Google Tag Manager -->
<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-W276BJ"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W276BJ');</script>
<!-- End -->
</body>
</html>