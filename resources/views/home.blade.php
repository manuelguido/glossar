@extends('layouts.app')

@section('content')

@include('components.nav', ['nav_type' => 'navbar-dark bg-black3'])

<div class="container-fluid">
    <div class="row justify-content-center">
        <!-- Left panel menu -->
        <div class="panel-sidebar pt-5">
            <h2 class="h5 w500 mt-5 mb-4 pl-3 black3">Hello {{Auth::user()->name}}!</h2>
            <ul class="list-group border-none">
                <a href="/" class="list-group-item list-group-item-action border-none">Home</a>
                <a href="/user/glossary/new" class="list-group-item list-group-item-action border-none">New glossary</a>
                <a href="/user/glossaries" class="list-group-item list-group-item-action border-none">My glossaries</a>
                <a href="/user/profile" class="list-group-item list-group-item-action border-none">Profile</a>
            </ul>
        </div>
        <!-- /.Left panel menu -->
        <!-- Panel content -->
        <div id="panel-container" class="col p-0">
            <header class="panel-header mt-5 pt-2">
                <div class="card-body">
                    <h1 id="panel-title" class="my-0 px-3">@yield('panel_title')</h1>
                </div>
            </header>
            <div class="py-5 px-lg-5 px-2 w-100">
                @yield('home_content')
            </div>
        </div>
        <!-- /.Panel content -->
    </div>
</div>

@endsection
