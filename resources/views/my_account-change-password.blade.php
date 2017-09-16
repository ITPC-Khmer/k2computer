@extends('layout.frontend')
@section('title'.'Add chat')

@section('content')

    <div class="main-container">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="woocommerce-breadcrumb mtb-15">
                    <div class="menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single-blog start -->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <!-- Search-area -->

                <!-- categories-area start -->
                <div class="categories-area box-shadow  bg-fff">
                    <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>My Account</h3>
                    </div>
                    <div class="shop-categories-menu p-20">
                        <ul>
                            <li><a href="{{url('my-account')}}">View Cart</a></li>
                            <li><a href="{{url('/my-account/change-password')}}">Change Password</a></li>
                            <li>{{session('m_first_name')}} {{session('m_last_name')}}</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="blog-area">
                    <div class="row">
                        <div class="col-lg-12">
                                            <div class="account-form form-style p-20 mb-30 bg-fff box-shadow">
                                <form action="{{url('/my-account/change-password')}}" method="post">
                                    {!! csrf_field() !!}
                                    <b>Old Password <span>*</span></b>
                                    <input name="password_old" type="password" required="">
                                    <b>New Password <span>*</span></b>
                                    <input name="password_new" type="password" required="">

                                    <div class="login-button">
                                        <button>Change Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- woocommerce-pagination-area -->

                    </div>
                    <!-- woocommerce-pagination-area -->
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('script')

@endsection