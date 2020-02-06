@extends('layouts.app')

@section('content')

@include('components.nav', ['nav_type' => 'navbar-light bg-white1'])

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col">
            Hello
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
