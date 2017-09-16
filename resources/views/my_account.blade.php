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
                        <div class="col-lg-12 col-md-12">
                            <table class="table bg-fff">
                                <thead>
                                    <th>Date</th>
                                    <th>Total QTY</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>
                                    <th>Note</th>
                                    <th></th>
                                </thead>
                                <tbody>

                                    @if(count($mo)>0)
                                        @foreach($mo as $row)
                                            <tr>
                                                <td>{{$row->order_date}}</td>
                                                <td>{{$row->total_qty}}</td>
                                                <td>{{$row->total_amount}}</td>
                                                <td>{{$row->order_status!=1?'Complete':'Pending'}}</td>
                                                <td>{{$row->note}}</td>
                                                <td>
                                                    <a href="{{url('/my-account/product-detail?id='.$row->id)}}">Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- woocommerce-pagination-area -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="woocommerce-pagination-area bg-fff box-shadow ptb-10 mb-30">
                                <div class="woocommerce-pagination text-center hover-bg">
                                    {!! $mo->links() !!}
                                </div>
                            </div>
                        </div>
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