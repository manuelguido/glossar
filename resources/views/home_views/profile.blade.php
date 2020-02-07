@extends('home')

@section('panel_title')
<nav aria-label="breadcrumb p-0 m-0">
    <ol class="breadcrumb p-0 m-0 bg-none">
      <li class="breadcrumb-item w400"><a href="/">Home</a></li>
      <li class="breadcrumb-item w400 active">Profile</li>
    </ol>
</nav>
@endsection

@section('home_content')

<div class="container">
    <div class="row">
        <div class="col-10">
            <p class="h4">Hello!</p>
            <p class="h5">Here is your user data</p>
        </div>
        <div class="col-10 mt-4">
            <p class="h6 mb-0">{{Auth::user()->name}}</p>
            <p class="h6">{{Auth::user()->email}}</p>
            <p class="h6">User type: <span class="primary-dark">{{Auth::user()->status()}}</span>@if(Auth::user()->is_paid)<i class="fas fa-star warning ml-1"></i>@endif</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-10">
            @if(Auth::user()->is_paid)
            
                <span class="mr-4 h5 black3">Do you want downgrade your account?</span>
                <button type="button" class="btn btn-primary btn-sm btn-rounded w800 ls05" data-toggle="modal" data-target="#modal">
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
                <button type="button" class="btn btn-primary btn-sm btn-rounded w800 ls05" data-toggle="modal" data-target="#modal">
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
