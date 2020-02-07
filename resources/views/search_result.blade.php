@extends('home')

@section('panel_title')
<nav aria-label="breadcrumb p-0 m-0">
    <ol class="breadcrumb p-0 m-0 bg-none">
      <li class="breadcrumb-item w400"><a href="/">Home</a></li>
      <li class="breadcrumb-item w400 active">Search results for: <span class="primary">{{$search_data}}</span></li>
    </ol>
</nav>
@endsection

@section('home_content')

<div class="row justify-content-center">
    <div class="col-12 col-lg-9 mb-3">
        @if(count($glossaries) > 0)
        <div class="list-group">
            @foreach ($glossaries as $glossary)
            <a href="/user/glossary/show/{{$glossary->glossary_id}}" class="py-3 list-group-item list-group-item-action">
                <span class="black2"><p class="h5 m-0">{{$glossary->name}}:</p><p class="h5 m-0"></p></span>
            </a>
            @endforeach
        </div>
        @else
            <p class="h4 black4">There is no results for <span class="primary">{{$search_data}}</span></p>
        @endif
    </div>
</div>

@endsection