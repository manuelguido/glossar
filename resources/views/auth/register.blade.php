@extends('layouts.app')

@section('content')

@include('components.nav')

<div class="auth-wallpaper w-100 h-100">
    <div class="container-full bg-gradient1 py-5">
        <div class="container">
            <div class="row justify-content-center py-5 mt-3">
                <div class="col-12 col-lg-6">
                    <form method="POST" action="{{ route('register') }}" class="card text-left border border-light p-5">
                        @csrf
                        <p class="h4 mb-5 text-center black3">Create a New Account</p>
                        <div class="form-group row">
                            <div class="col">
                                <label>Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter your full name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label>Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Create a password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label>Password confirmation</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter your password again" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0 pt-4">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-block btn-rounded waves-effect">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <hr class="mt-5">
                        <!-- Register -->
                        <p class="h6 text-center">Already have an account?
                            <a href="/login">Sign in</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
