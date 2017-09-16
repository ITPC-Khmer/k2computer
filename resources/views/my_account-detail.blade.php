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

                            <table class="table">
                                <thead>
                                    <th>Item</th>
                                    <th>QTY</th>
                                    <th>Price</th>
                                    <th>Amount</th>
                                </thead>
                                <tbody>
                                    @php
                                        $mod = \App\Models\ECBackend\SaleOrderDetail::where('sale_order_id',$mo->id)
                                        ->join('items','items.id','=','sale_order_details.item_id')
                                        ->get();

                                        $total = 0;
                                    @endphp
                                    @if(count($mod)>0)
                                        @foreach($mod as $row)
                                            <tr>
                                                <td>{{$row->title}}</td>
                                                <td>{{$row->qty}}</td>
                                                <td>{{$row->price}}</td>
                                                <td>{{$row->qty*$row->price}}</td>
                                            </tr>
                                            @php
                                                $total += $row->qty*$row->price;
                                            @endphp
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" align="right">Total</td>
                                        <td>{{$total}}</td>
                                    </tr>
                                </tfoot>
                            </table>
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