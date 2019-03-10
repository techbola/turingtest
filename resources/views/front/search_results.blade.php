@extends('layouts.front.master')

@section('content')

    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9 order-2 order-lg-1">
                    <h1>Search Results</h1>
                </div>
                <div class="col-lg-3 text-right order-1 order-lg-2">
                    <ul class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Search Results</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="row">

                <!-- Grid -->
                <div class="products-grid col-xl-9 col-lg-8 sidebar-right">
                    <div class="row">
                    @if(!empty($products))
                        <!-- item-->
                            @foreach($products as $product)
                                <div class="item col-xl-4 col-md-6">
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
                                            <small class="text-muted">Men Wear</small>
                                            <a href="{{ route('product', $product->id) }}">
                                                <h3 class="h6 text-uppercase no-margin-bottom">{{ $product->name }}</h3>
                                            </a>
                                            <span class="price text-muted">${{ $product->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @else
                        
                            <h4 class="text-blue">No result found!</h4>

                        @endif

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            {{ $products->links() }}
                        </div>
                    </div>

                </div>
                <!-- / Grid End-->
                <!-- Sidebar-->
                <div class="sidebar col-xl-3 col-lg-4 sidebar-right">
                    <div class="block">
                        <h6 class="text-uppercase">Product Categories</h6>
                        <ul class="list-unstyled">
                            @if(!empty($products))
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('category', $category->id) }}" class="d-flex justify-content-between align-items-center">
                                            <span>{{ $category->name }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- /Sidebar end-->

            </div>
        </div>
    </main>

    <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>

@endsection