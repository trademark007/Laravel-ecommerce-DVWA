@extends('frontend.layouts.app')

@section('content')
<div class="container">

	<!-- ========================= SECTION MAIN END// ========================= -->
	<div class="row justify-content-center p-5 ">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body card-bordered">
					<form action="{{route('login')}}" method="POST">
						@CSRF
						<div class="form-group">
							<input id="email" type="text" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
							<br>
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong class="validation">{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Password">
							<br>
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong class="validation">{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<button type="submit" class="button small">Login</button>
					</form>
				</div>
				<div class="card-footer mt-1 text-center">
					<p style="font-size: 13px;">Don't have account? <a href="{{route('register')}}">Register now</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- ========================= SECTION MAIN END// ========================= -->

</div>
@endsection