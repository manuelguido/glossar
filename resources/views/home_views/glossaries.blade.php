@extends('home')

@section('panel_title')
<nav aria-label="breadcrumb p-0 m-0">
    <ol class="breadcrumb p-0 m-0 bg-none">
      <li class="breadcrumb-item w400"><a href="/">Home</a></li>
      <li class="breadcrumb-item w400 active">My glossaries</li>
    </ol>
</nav>
@endsection

@section('home_content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            @if(count($glossaries) > 0)
            <div class="card mb-5">
                <div class="card-header">
                    List of your glossaries
                </div> 
                <div class="card-body">
                    <ul class="list-group">
                    @foreach ($glossaries as $glossary)
                        <a href="/user/glossary/show/{{$glossary->glossary_id}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-play black5 mr-3"></i>{{$glossary->name}}</span>
                        </a>
                    @endforeach
                    </ul>
                </div>
            </div>
            @else
                <h1 class="h4 black3">Currently you have no glossaries. <a href="/user/glossary/new">Create one</a> now.</h1>
            @endif
        </div>
    </div>
</div>
@endsection
