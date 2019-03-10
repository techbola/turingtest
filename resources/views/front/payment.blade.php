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

                    <div class="block-body order-summary">
                        <h6 class="text-uppercase">Personal Details</h6>
                        <ul class="order-menu list-unstyled">
                            <li class="d-flex justify-content-between"><span>Full Name </span><strong>{{ $name }}</strong></li>
                            <li class="d-flex justify-content-between"><span>Email address </span><strong>{{ $email }}</strong></li>
                            <li class="d-flex justify-content-between"><span>Phone number </span><strong>{{ $phone }}</strong></li>
                            <li class="d-flex justify-content-between"><span>Address </span><strong>{{ $address }}</strong></li>

                        </ul>
                    </div>
                    <br>

                    <form action="{{ route('make.pay') }}" method="post">
                        @csrf

                        <input type="hidden" value="{{ $name }}" name="name">
                        <input type="hidden" value="{{ $email }}" name="email">
                        <input type="hidden" value="{{ $phone }}" name="phone">
                        <input type="hidden" value="{{ $address }}" name="address">

                        <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_4YiKFTwgWS5rsUCHf1NSRv8l"
                                data-amount="{{ Cart::subtotal() * 100 }}"
                                data-name="techBola Shop"
                                data-description="Test"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto">
                        </script>

                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="block-body order-summary">
                        <h6 class="text-uppercase">Order Summary</h6>
                        <ul class="order-menu list-unstyled">
                            <li class="d-flex justify-content-between"><span>Order Subtotal </span><strong>${{ Cart::subtotal() }}</strong></li>
                            <li class="d-flex justify-content-between"><span>Total</span><strong class="text-primary price-total">${{ Cart::subtotal() }}</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>

@endsection