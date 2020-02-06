@extends('layouts.app')

@section('content')

<div class="welcome-wallpaper w-100 h-100">
    <div class="container-full bg-color2d pt-3 pt-lg-5">
        <div class="container">
            <div class="row justify-content-center py-5">
                <div class="col-12 col-lg-6">
                    <p class="h5 m-0 white2 text-shadow1">welcome to</p>
                    <h1 class="display-4 w600 ls04 white1 text-uppercase text-shadow1">Glossar</h1>
                    <p class="h5 my-4 w500 white2 text-shadow1">A mini-glossary application test</p>
                    <p class="h5 my-1 w500 white2 text-shadow1">Developed by <span class="w700 white1">Manuel Guido</span></p>
                    <p class="h5 mt-1 mb-5 w500 white2 text-shadow1">For a ProZ application test</p>
                </div>
                <div class="col-12 col-lg-6">
                    @include('components.login_form')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
