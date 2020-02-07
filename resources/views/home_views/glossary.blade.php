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
                <div class="card-body">
                    <p class="primary-dark h5 my-1"><span class="black2">Subject:</span> {{$glossary->name}}<p class="black4 h6">by {{$glossary->user()->name}}</p></p>
                    <p class="black5 h6 m-0">
                        <span class="h6">Terms:</span>
                        @php $terms = $glossary->terms() @endphp
                        @foreach($terms as $term)
                        {{$term->name}},
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
