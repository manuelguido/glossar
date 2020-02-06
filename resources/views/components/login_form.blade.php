<!-- Default form login -->
<form method="POST" action="{{ route('login') }}" class="card text-left border border-light p-5">
    @csrf                        
    <p class="h4 mb-4 text-center">Sign in</p>

    <!-- Email -->
    <div class="form-group row">
        <div class="col">
            <label>Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <!-- Password -->
    <div class="form-group row">
        <div class="col">
            <label>Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row my-3">
        <div class="col text-center">
            <div class="form-check custom-control custom-checkbox">
                <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="custom-control-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block btn-rounded waves-effect">
                {{ __('Log in') }}
            </button>
        </div>
    </div>
    <hr class="mt-5">
    <!-- Register -->
    <p class="h6 text-center">Not a member?
        <a href="/register">Sign up</a>
    </p>
</form>
<!-- Default form login -->