@extends('frontend.layouts.app')

@section('content')
<div class="container">


<!-- ========================= SECTION MAIN// ========================= -->
<section class="section-main padding-y">

<!-- ============================ COMPONENT REGISTER   ================================= -->
<div class="card mx-auto" style="max-width:520px; margin-top:40px;">
      <article class="card-body">
		<header class="mb-4"><h4 class="card-title">Sign up</h4></header>
		<form method="POST" action="{{ route('register') }}">
            @CSRF
            <div class="form-row">
                <div class="col form-group">
                    <label>First name</label>
                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> <!-- form-group end.// -->
                <div class="col form-group">
                    <label>Last name</label>
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> <!-- form-group end.// -->
            </div> <!-- form-row end.// -->
            <div class="form-group">
                <label>Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div> <!-- form-group end.// -->
            <div class="form-group">
                <label class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" checked="" type="radio" name="gender" value="option1">
                    <span class="custom-control-label"> Male </span>
                </label>
                <label class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" name="gender" value="option2">
                    <span class="custom-control-label"> Female </span>
                </label>
            </div> <!-- form-group end.// -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>City</label>
                    <input id="city" type="city" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city">

                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> <!-- form-group end.// -->
                <div class="form-group col-md-6">
                    <label>Country</label>
                    <select id="inputState" class="form-control">
                    <option> Choose...</option>
                        <option>Uzbekistan</option>
                        <option>Russia</option>
                        <option selected="">United States</option>
                        <option>India</option>
                        <option>Afganistan</option>
                    </select>
                </div> <!-- form-group end.// -->
            </div> <!-- form-row.// -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Create password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> <!-- form-group end.// --> 
                <div class="form-group col-md-6">
                    <label>Repeat password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div> <!-- form-group end.// -->  
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Register  </button>
            </div> <!-- form-group// -->      
            <div class="form-group"> 
                <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> I am agree with <a href="#">terms and contitions</a>  </div> </label>
            </div> <!-- form-group end.// -->           
        </form>
		</article><!-- card-body.// -->
    </div> <!-- card .// -->
    <p class="text-center mt-4">Have an account? <a href="{{route('login')}}">Log In</a></p>
    <br><br>
<!-- ============================ COMPONENT REGISTER  END.// ================================= -->


</section>
<!-- ========================= SECTION MAIN END// ========================= -->

</div>
@endsection