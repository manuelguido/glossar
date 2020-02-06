@extends('layouts.app')

@section('content')

@include('components.nav')

<div class="auth-wallpaper w-100 h-100">
    <div class="container-full bg-gradient1 py-5">
        <div class="container">
            <div class="row justify-content-center py-5 mt-3">
                <div class="col-12 col-lg-6">
                    @include('components.login_form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
