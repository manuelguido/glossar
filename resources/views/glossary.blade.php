@extends('home')

@section('panel_title', 'Glossary')

@section('home_content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="card mb-5">
                <div class="card-header">
                    Subject: <span class="primary">{{$glossary->name}}</span>
                </div>
                <div class="card-body">
                    <h2 class="h5 mb-3">Terms</h2>
                    <ul class="list-group">
                    @foreach ($terms as $term)
                        <li class="list-group-item">{{$term->name}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
