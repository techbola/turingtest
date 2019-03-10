@extends('layouts.front.master')

@section('content')

    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9 order-2 order-lg-1">
                    <h1>{{ $product->name }}</h1>
                </div>
                <div class="col-lg-3 text-right order-1 order-lg-2">
                    <ul class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('shop') }}">Shop</a></li>
                        <li class="breadcrumb-item active">{{ $product->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="product-images col-lg-6">
                    <div class="owl-carousel items-slider owl-drag">
                        <div class="item">
                            <img src="{{ asset($product->featured) }}" alt="{{ $product->name }}">
                        </div>
                    </div>
                </div>
                <div class="details col-lg-6">
                    <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
                        <ul class="price list-inline no-margin">
                            <li class="list-inline-item current">{{ $product->price }}</li>
                        </ul>
                    </div>
                    <p>
                        {{ str_limit(strip_tags($product->description), 150) }}
                    </p>
                    {{--<div class="d-flex align-items-center justify-content-center justify-content-lg-start">--}}
                        {{--<div class="quantity d-flex align-items-center">--}}
                            {{--<div class="dec-btn">-</div>--}}
                            {{--<input type="text" value="1" class="quantity-no">--}}
                            {{--<div class="inc-btn">+</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <ul class="CTAs list-inline">
                        <li class="list-inline-item"><a href="{{ route('cart.edit', $product->id) }}" class="btn btn-template wide"> <i class="icon-cart"></i>Add to Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="product-description no-padding">
        <div class="container">
            <ul role="tablist" class="nav nav-tabs flex-column flex-sm-row">
                <li class="nav-item"><a data-toggle="tab" href="#description" role="tab" class="nav-link active">Description</a></li>
            </ul>
            <div class="tab-content">
                <div id="description" role="tabpanel" class="tab-pane active">
                    <p>
                        {!! $product->description !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>

@endsection