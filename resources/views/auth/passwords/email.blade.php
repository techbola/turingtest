@extends('layouts.admin.access')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="page login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
                <div class="row">
                    <!-- Logo & Information Panel-->
                    <div class="col-lg-6">
                        <div class="info d-flex align-items-center">
                            <div class="content">
                                <div class="logo">
                                    <h1>Reset Password</h1>
                                </div>
                                <p>Admin Dashboard</p>
                            </div>
                        </div>
                    </div>
                    <!-- Form Panel    -->
                    <div class="col-lg-6 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">

                                @include('admin.includes.errors')

                                <form method="POST" action="{{ route('password.email') }}">

                                    @csrf

                                    <div class="form-group">
                                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="input-material{{ $errors->has('email') ? ' is-invalid' : '' }}" required>
                                        <label for="email" class="label-material">Enter Your Registered E-Mail Address</label>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection