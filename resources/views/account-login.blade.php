@extends('layout.frontend')
@section('title'.'Add chat')

@section('content')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-title mb-20 text-center">
                        <br>
                        <br>
                        <h1>My Account</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-heading mb-25">
                        <h2>Login</h2>
                    </div>
                    <div class="account-form form-style p-20 mb-30 bg-fff box-shadow">
                        <form action="{{url('account-login')}}" method="post">
                            {!! csrf_field() !!}
                            <b>Email address <span>*</span></b>
                            <input name="email"  type="text" required>
                            <b>Password <span>*</span></b>
                            <input name="password" type="password" required>

                        <div class="login-button">
                            <button>Login</button>
                           {{-- <input type="checkbox">--}}
                           {{-- <b>Remember me </b>--}}
                           {{-- <a href="#">Lost your password?</a>--}}
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-heading mb-25">
                        <h2>Register</h2>
                    </div>
                    <div class="account-form form-style p-20 mb-30 bg-fff box-shadow">
                        <form action="{{url('account-register')}}" method="post">
                            {!! csrf_field() !!}
                            <b>First Name  <span>*</span></b>
                            <input name="first_name" type="text" required>

                            <b>Last name  <span>*</span></b>
                            <input name="last_name" type="text" required>

                            <b>Phone  <span>*</span></b>
                            <input name="phone" type="text" required>

                            <b>Email address  <span>*</span></b>
                            <input name="email" type="email" required>

                            <b>Password <span>*</span></b>
                            <input name="password" type="password" required>

                            <b>Company name </b>
                            <input name="company_name" type="text">

                            <b>Address </b>
                            <input name="address" type="text">

                            <div class="login-button">
                                <button>register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection