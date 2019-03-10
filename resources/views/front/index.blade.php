@extends('layouts.front.master')

@section('content')

    <!-- Hero Section-->
    @include('front.includes.hero')

    <!-- Men's Collection -->
    <section class="men-collection gray-bg">
        <div class="container">

            <header class="text-center">
                <h2 class="text-uppercase"><small>All Products</small></h2>
            </header>

            <div class="row">

                @foreach($products as $product)

                    <div class="col-sm-3">
                        <div class="item">
                            <div class="product is-gray">
                                <div class="image d-flex align-items-center justify-content-center">
                                    <img src="{{ asset($product->featured) }}" alt="{{ $product->name }}" class="img-fluid">
                                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                                        <div class="CTA d-flex align-items-center justify-content-center">
                                            <a href="{{ route('cart.edit', $product->id) }}" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="{{ route('product', $product->id) }}" class="visit-product active"><i class="icon-search"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <a href="{{ route('product', $product->id) }}">
                                        <h3 class="h6 text-uppercase no-margin-bottom">{{ $product->name }}</h3>
                                    </a><span class="price text-muted">${{ $product->price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

        </div>
    </section>

    <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>

@endsection