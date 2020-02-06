@extends('home')

@section('panel_title', 'New glossary')

@section('home_content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="card mb-5">
                <div class="card-header">
                    Your glossaries
                </div>
                <div class="card-body">
                    <ul class="list-group">
                    @foreach ($glossaries as $glossary)
                        <li class="list-group-item list-group-item-info d-flex justify-content-between align-items-center">
                            {{$glossary->name}}
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
