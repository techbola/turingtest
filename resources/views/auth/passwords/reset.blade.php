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

                                <form method="POST" action="{{ route('password.update') }}">

                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group">
                                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="input-material{{ $errors->has('email') ? ' is-invalid' : '' }}" required>
                                        <label for="email" class="label-material">Email</label>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" name="password" class="input-material{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                        <label for="password" class="label-material">Password</label>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input id="password-confirm" type="password" class="input-material" name="password_confirmation" required>
                                        <label for="password-confirm" class="label-material">Confirm Password</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Reset Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection