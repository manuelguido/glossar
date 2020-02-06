@extends('layouts.app')

@section('content')

@include('components.nav', ['nav_type' => 'navbar-light bg-white1'])

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-12">
            <p class="h5">Hello!</p>
            <p class="h6">Here is your user data</p>
        </div>
        <div class="col-12 mt-4">
            <p class="black3 mb-0">{{Auth::user()->name}}</p>
            <p class="black3">{{Auth::user()->email}}</p>
            <p class="black3">User type: {{Auth::user()->status()}}<i class="fas fa-star warning-dark ml-1"></i></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            @if(Auth::user()->is_paid)
            
                <span class="mr-4 h5 black3">Do you want downgrade your account?</span>
                <button type="button" class="btn btn-primary btn-sm btn-rounded" data-toggle="modal" data-target="#modal">
                    Become a free user
                </button>
                @include('components.modal', [
                    'modal_title' => 'Become a free user',
                    'modal_message' => 'If you continue, you no longer will have to pay for a monthly subscription.',
                    'modal_link' => '/user/gofree'
                    ])
            @else

                <span class="mr-4 h5 black3">Do you want to go pro?</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm btn-rounded" data-toggle="modal" data-target="#modal">
                    Get pro today!
                </button>
                @include('components.modal', [
                    'modal_title' => 'Become a pro user',
                    'modal_message' => 'Pro users have to pay a monthly subscription. <br>Do you agree to do it?',
                    'modal_link' => '/user/gopro'
                    ])
            
            @endif
        </div>
    </div>
</div>
@endsection
