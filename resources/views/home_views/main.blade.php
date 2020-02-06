@extends('home')

@section('panel_title', 'Home')

@section('home_content')

<div class="row">
    <div class="col-12 col-lg-3 mb-3">
        @include('components.cardlink', [
            'url' => 'user/glossary/new',
            'icon' => 'fas fa-plus',
            'label' => 'Create a new glossary'
        ])
    </div>
    <div class="col-12 col-lg-3 mb-3">
        @include('components.cardlink', [
            'url' => 'user/glossaries',
            'icon' => 'fas fa-th-list',
            'label' => 'Your glossaries'
        ])
    </div>
</div>

@endsection