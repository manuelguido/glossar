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
                <p class="primary-dark h5 my-1"><span class="black2">Subject:</span> {{$glossary->name}}<p class="black4 h6">by {{$glossary->user()->name}}</p></p>
                <p class="black5 h6 m-0">
                    <span class="h6">Terms:</span>
                    @php $terms = $glossary->terms() @endphp
                    @foreach($terms as $term)
                    {{$term->name}},
                    @endforeach
                </p>
            </a>
            @endforeach
        </div>
        @else
            <p class="h4 black4">There is no results for <span class="primary">{{$search_data}}</span></p>
        @endif
    </div>
</div>

@endsection