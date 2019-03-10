@extends('layouts.front.master')

@section('content')


    <section class="hero hero-page gray-bg padding-small">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9 order-2 order-lg-1">
                    <h1>Shopping cart</h1><p class="lead text-muted">You currently have {{ Cart::count() }} items in your shopping cart</p>
                </div>
                <div class="col-lg-3 text-right order-1 order-lg-2">
                    <ul class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Shopping cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section-->
    <section class="shopping-cart">
        <div class="container">
            <div class="basket">
                <div class="basket-holder">
                    <div class="basket-header">
                        <div class="row">
                            <div class="col-5">Product</div>
                            <div class="col-2">Price</div>
                            <div class="col-2">Quantity</div>
                            <div class="col-2">Total</div>
                            <div class="col-1 text-center">Remove</div>
                        </div>
                    </div>
                    <div class="basket-body">

                        @foreach($cartItems as $cartItem)
                            <div class="item">
                            <div class="row d-flex align-items-center">
                                <div class="col-5">
                                    <div class="d-flex align-items-center">
                                        <div class="title">
                                            <a href="#">
                                                <h5>{{ $cartItem->name }}</h5></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"><span>${{ $cartItem->price }}</span></div>
                                <div class="col-2">
                                    <div class="d-flex align-items-center">
                                        <div class="quantity d-flex align-items-center">
                                            {{ $cartItem->qty }}
                                        </div>
                                    </div>
                                    <br>
                                    <form method="post" action="{{ route('cart.update',$cartItem->rowId) }}">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <input type="text" name="qty" value="{{ $cartItem->qty }}" style="width: 35px;">
                                        <input type="submit" class="btn btn-xs btn-warning text-white m-1" value="update">
                                    </form>
                                </div>
                                <div class="col-2"><span>${{ $cartItem->price * $cartItem->qty }}</span></div>
                                <div class="col-1 text-center">
                                    <form action="{{ route('cart.destroy',$cartItem->rowId) }}" method="post">

                                        {{ csrf_field() }}

                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-sm btn-danger" type="submit"><i class="delete fa fa-trash"></i></button>

                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row">
                <a href="{{ route('shop') }}" class="btn btn-template-outlined wide">Continue Shopping</a>
                <a href="{{ route('checkout') }}" class="btn btn-template wide">Proceed to Checkout</a></div>
        </div>
    </section>

    <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>

@endsection