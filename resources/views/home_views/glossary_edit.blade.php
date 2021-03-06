@extends('home')

@section('panel_title', 'New glossary')

@section('home_content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="card mb-5">
                <div class="card-header">
                    Create a new glossary
                </div>
                <div class="card-body">
                    <form method="POST" action="/user/glossary/update/{{$glossary->glossary_id}}">
                        @csrf
                        <p class="primary mb-2">Rules</p>
                        <p class="h6 black3 my-0">A glossary must consists of a minimum of 3 terms and a maximum of 5 terms</p>
                        <p class="h6 black3 my-01">A glossary must have a subject</p>
                        <hr>
                        <!-- Term 1 -->
                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label>Subject</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Write a subject" name="name" value="{{ $glossary->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Term 1 -->
                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label>Term 1</label>
                                <input id="term1" type="text" class="form-control @error('term1') is-invalid @enderror" placeholder="Term number 1" name="term1" value="{{ $terms[0]->name }}" required autocomplete="term1" autofocus>

                                @error('term1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Term 2 -->
                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label>Term 2</label>
                                <input id="term2" type="text" class="form-control @error('term2') is-invalid @enderror" placeholder="Term number 2" name="term2" value="{{ $terms[1]->name }}" required autocomplete="term2" autofocus>

                                @error('term2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Term 3 -->
                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label>Term 3</label>
                                <input id="term3" type="text" class="form-control @error('term3') is-invalid @enderror" placeholder="Term number 3" name="term3" value="{{ $terms[2]->name }}" required autocomplete="term3" autofocus>

                                @error('term3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Term 4 -->
                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label>Term 4</label>
                                <input id="term4" type="text" class="form-control @error('term4') is-invalid @enderror" placeholder="Term number 4" name="term4" value="{{ $terms[3]->name }}" autocomplete="term4" autofocus>

                                @error('term4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Term 1 -->
                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label>Term 5</label>
                                <input id="term5" type="text" class="form-control @error('term5') is-invalid @enderror" placeholder="Term number 5" name="term5" value="{{ $terms[4]->name }}" autocomplete="term5" autofocus>

                                @error('term5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0 mt-5">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block btn-rounded waves-effect">
                                    Save glossary
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
