@extends('layouts.front.master')

@section('content')

    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9 order-2 order-lg-1">
                    <h1>Checkout</h1><p class="lead">You currently have {{ Cart::count() }} item(s) in your basket</p>
                </div>
                <div class="col-lg-3 text-right order-1 order-lg-2">
                    <ul class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout Forms-->
    <section class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div id="address" class="active tab-block">

                            @include('admin.includes.errors')

                            <form action="{{ route('make.payment') }}" method="post">
                                @csrf
                                <h4>Fill in the details below</h4>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input id="name" type="text" name="name" placeholder="Enter your name" value="{{  old('name') }}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input id="email" type="email" name="email" placeholder="enter your email address" value="{{  old('email') }}" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="address" class="form-label">Full Address</label>
                                        <input id="address" type="text" name="address" placeholder="Your street name" value="{{  old('address') }}" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input id="phone" type="tel" name="phone" placeholder="Your phone number" value="{{  old('phone') }}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                                    <button type="submit" class="btn btn-template wide next">Make Payment<i class="fa fa-angle-right"></i></button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="block-body order-summary">
                        <h6 class="text-uppercase">Order Summary</h6>
                        <ul class="order-menu list-unstyled">
                            <li class="d-flex justify-content-between"><span>Order Subtotal </span><strong>${{ Cart::subtotal() }}</strong></li>
                            {{--<li class="d-flex justify-content-between"><span>Tax </span><strong>${{ Cart::tax() }}</strong></li>--}}
                            <li class="d-flex justify-content-between"><span>Total</span><strong class="text-primary price-total">${{ Cart::subtotal() }}</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>

@endsection