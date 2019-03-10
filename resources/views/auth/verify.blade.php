@extends('layouts.admin.access')

@section('content')

    <div class="page login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
                <div class="row">
                    <!-- Logo & Information Panel-->
                    <div class="col-lg-6">
                        <div class="info d-flex align-items-center">
                            <div class="content">
                                <div class="logo">
                                    <h1>
                                        Before proceeding, please check your email for a verification link.
                                    </h1>
                                </div>
                                <p>Admin Dashboard</p>
                            </div>
                        </div>
                    </div>
                    <!-- Form Panel    -->
                    <div class="col-lg-6 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">

                                <form>

                                    <div class="form-group">
                                        {{ __('If you did not receive the email') }},
                                        <a class="text-blue" href="{{ route('verification.resend') }}">
                                            {{ __('click here to request another') }}
                                        </a>.
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection