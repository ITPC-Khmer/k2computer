@php
    $base_url = asset('them/backend');
@endphp
        <!DOCTYPE html>

<html lang="en">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>Price List </title>
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

            <div class="input-icon right">
                <i class="icon-magnifier"></i>
                <input type="text"  class="form-control search-item" placeholder="Filter by keywords">
            </div>
            <div class="table-scrollable">
                <table class="table table-striped table-hover">
                    <div id="sample_1_wrapper" class="dataTables_wrapper">
                        <thead>
                            <tr>
                                <th>Brand</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Dealer Price</th>
                                <th>Retail Price</th>
                                <th>Image</th>
                                <th>In stock</th>
                            </tr>
                        </thead>
                        <tbody class="show-result">
                            @foreach($result as $row)
                                <?php
                                $imgs = json_decode($row->image_url);
                                $img = count($imgs)>0?$imgs[0]:'#';
                                ?>
                                <tr>
                                    <td>{{ \App\Models\ECBackend\ItemBrand::getTitle($row->brand_id) }}</td>
                                    <td>
                                        <a href="{{ url("detail/{$row->id}") }}"> {{ $row->title }}</a>
                                    </td>
                                    <td>{{ \App\Models\ECBackend\ItemCategory::getTitle($row->category_id) }}</td>
                                    <td style="color: red">{{ $row->start_price }} $</td>
                                    <td style="color: red">{{ $row->promotion_price }} $</td>
                                    <td>
                                        <a href="{{ asset("uploads/files/$img") }}"><img src="{{ asset("uploads/files/tmp2/$img") }}" width="auto" height="40px"></a>
                                    </td>
                                    <td>{{ $row->status==1?'Active':'Inactive' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </div>
                </table>
            </div>
            {{ $result -> links () }}
        </div>

    </div>


    <div class="copyright"> Create by IT Norton </div>
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

    $(function () {

        $('.search-item').keydown(function () {

            $.ajax({
                url: '{{url('backend/search-item')}}',
                //async:true,
                data:{

                    q:$('.search-item').val(),
                    _token:'{{csrf_token()}}'
                },
                error:function () {
                    alert('save error !!');
                },
                dataType:'html', // html & json
                type:'get',
                success:function (d) {
                    $('.show-result').html(d);
                }
            });


        });

    });

</script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-37564768-1', 'auto');
        ga('send', 'pageview');
        // code for filter product



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



<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1/page_user_login_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 02:02:35 GMT -->
</html>