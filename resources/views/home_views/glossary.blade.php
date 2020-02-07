@extends('home')

@section('panel_title')
<nav aria-label="breadcrumb p-0 m-0">
    <ol class="breadcrumb p-0 m-0 bg-none">
      <li class="breadcrumb-item w400"><a href="/">Home</a></li>
      <li class="breadcrumb-item w400"><a href="/user/glossaries">My glossaries</a></li>
      <li class="breadcrumb-item w400 active">Glossary</li>
    </ol>
</nav>
@endsection

@section('home_content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="card mb-5">
                <div class="card-header">
                    Subject: <span class="primary">{{$glossary->name}}</span>
                </div>
                <div class="card-body">
                    <h2 class="h5 mb-3">Glossary terms:</h2>
                    <p class="h6 text-capitalize">
                    @foreach ($terms as $term)
                        {{$term->name}},
                    @endforeach
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
