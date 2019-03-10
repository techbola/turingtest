@extends('layouts.front.master')

@section('content')

    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9 order-2 order-lg-1">
                    <h1>Contact</h1>
                </div>
                <div class="col-lg-3 text-right order-1 order-lg-2">
                    <ul class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <main class="contact-page">
        <!-- Contact page-->
        <section class="contact">
            <div class="container">
                <header>
                    <p class="lead">
                        Are you curious about something? Do you have some kind of problem with our products?
                    </p>
                </header>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-icon">
                            <div class="icon icon-street-map"></div>
                        </div>
                        <h3>Address</h3>
                        <p>13/25 Allen Avenue<br>Ikeja,<br>Lagos, <strong>Nigeria</strong></p>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-icon">
                            <div class="icon icon-support"></div>
                        </div>
                        <h3>Call center</h3>
                        <p><strong>+234 806 684 9071</strong></p>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-icon">
                            <div class="icon icon-envelope"></div>
                        </div>
                        <h3>Electronic support</h3>
                        <p>Please feel free to write an email to us.</p>
                        <ul class="list-style-none">
                            <li><strong><a href="mailto:">support@techbolashop.com</a></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: -40px;">
            <div class="container">
                <header class="mb-5 text-center">
                    <h2 class="heading-line">Contact form</h2>
                </header>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form id="contact-form" method="post" action="{{ route('contact.store') }}" class="custom-form form">
                            {{ csrf_field() }}
                            <div class="controls">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Your firstname *</label>
                                            <input type="text" name="name" id="name" placeholder="Enter your name" value="{{ old('name') }}" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Your email *</label>
                                            <input type="email" name="email" id="email" placeholder="Enter your  email" value="{{ old('email') }}" required="required" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}" required="required" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="contact_message" class="form-label">Your message for us *</label>
                                    <textarea rows="4" name="contact_message" id="contact_message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-template">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>

@endsection