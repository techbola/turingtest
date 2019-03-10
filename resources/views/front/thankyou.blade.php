@extends('layouts.front.master')

@section('content')

    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9 order-2 order-lg-1">
                    <h1>Thank you for your purchase</h1>
                </div>
                <div class="col-lg-3 text-right order-1 order-lg-2">
                    <ul class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
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

                    <h4>Thank you for your purchase, we will contact you shortly.</h4>
                    <a href="{{ route('shop') }}" class="btn btn-success">Continue Shopping</a>

                </div>
            </div>
        </div>
    </section>

    <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>

@endsection