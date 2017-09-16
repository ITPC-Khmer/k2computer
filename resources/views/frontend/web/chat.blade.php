@extends('layout.frontend')
@section('title'.'Add chat')
    @section('content')
        <div class="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="checkout-title text-center mtb-20">

                        </div>
                    </div>
                </div>
                <div class="checkout-area">
                    <div class="row">
                        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                            <div class="returning-customer-area p-20 mb-20">

                                <h1>Checkout</h1>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="customer-details-area">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="additional-information mb-50">
                                <div class="customer-details-title mb-10">
                                    <h2>Additional Information</h2>
                                </div>

                                <div class="checkout-order-area mb-35">
                                    <div class="order-title pb-10 mb-20 text-uppercase">
                                        <h3>Your order</h3>
                                    </div>
                                    <div class="order_review table-responsive">
                                        <table>
                                            <tbody><tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-name">Qty</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                            @foreach($items as $item)
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <strong class="product-quantity">{{$item->name}}</strong>
                                                    </td>
                                                    <td class="product-name">
                                                        <strong class="product-quantity">{{$item->quantity}}</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span>$ {{$item->price}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>

                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>

                                                </td><td>
                                                    <strong><span>$ {{$cartTotal}}</span></strong>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <br>
                                        {{--<div class="coupon mb-10 floatleft">
                                            <input class="button" name="apply_coupon" value="Apply Coupon" type="submit">
                                        </div>--}}
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="customer-details mb-50">
                                <div class="customer-details-title mb-10">
                                    <h2>Billing Details</h2>
                                </div>
                                <div class="customer-details-form account-form p-20 clear">
                                    <form action="{{url('checkout')}}" method="post">

                                        {{ csrf_field() }}
                                        @if(!(session('m_id')>0))

										<span class="form-row-first">
											<b>First Name <span class="required">*</span></b>
											<input name="first_name" type="text" required>
										</span>
                                        <span class="form-row-last">
											<b>Last Name <span class="required">*</span></b>
											<input name="last_name" type="text" required>
										</span>
                                        <span class="form-row-first">
											<b>Phone Number <span class="required">*</span></b>
											<input name="phone" type="text" required>
										</span>
                                        <span class="form-row-last">
											<b>Email Address <span class="required">*</span></b>
											<input name="email" type="email" required>
										</span>

                                        <span class="form-row-first">
											<b>Password <span class="required">*</span></b>
											<input name="password" type="password" required>
										</span>

                                        <span class="form-row-last">
											<b>Company Name </b>
											<input name="company_name" type="text">
										</span>
                                        <span>
											<b>Address <span class="required">*</span></b>
											<input name="address" placeholder="Street address" type="text">
										</span>

                                        @endif
                                        <span>
											<b>Order Notes</b>
											<textarea name="note" id="#" style="width: 100%;" rows="5" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            			</span>

                                        <input class="button" name="apply_coupon" value="Checkout" type="submit">

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection