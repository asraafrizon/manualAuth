<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Signin Page</title>

	<link rel="stylesheet" href=" {{asset('css/app.css')}} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('css/signin.css') }} ">
</head>
<body class="text-center">
	<div class="container">
	<form class="form-signin" method="POST" action=" {{ route('register') }} ">
		{{ csrf_field() }}
		<h1 class="h3 mb-3 font-weight-normal">Register {{config('app.name')}} </h1>
		<label for="inputUsername" class="sr-only">Username</label>
		<input type="text" name="name" id="inputUsername" class="form-control has-feedback{{ $errors->has('name') ? 'has-error' : ''}}" placeholder="Username" value="{{old('name')}}" required autofocus>
		@if ($errors->has('name'))
			<span class="help-block">
				<p>{{$errors->first('name')}}</p>
			</span>
		@endif

		<label for="inputEmail" class="sr-only">Email Address</label>
		<input type="email" name="email" id="inputEmail" class="form-control has-feedback{{ $errors->has('email') ? 'has-error' : ''}}" placeholder="Email Address" value="{{old('email')}}" required>
		@if ($errors->has('email'))
			<span class="help-block">
				<p>{{$errors->first('email')}}</p>
			</span>
		@endif

		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name="password" id="inputPassword" class="form-control has-feedback{{ $errors->has('password') ? 'has-error' : ''}}" placeholder="Password" required>
		@if ($errors->has('password'))
			<span class="help-block">
				<p>{{$errors->first('password')}}</p>
			</span>
		@endif

		<label for="inputPassword" class="sr-only">Confirmation Password</label>
		<input type="password" name="password_confirmation" id="inputPassword" class="form-control has-feedback{{ $errors->has('password_confirmation') ? 'has-error' : ''}}" placeholder="Password Confirmation" required>
		@if ($errors->has('password_confirmation'))
			<span class="help-block">
				<p>{{$errors->first('password_confirmation')}}</p>
			</span>
		@endif
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
	</form>
	</div>

</body>
</html>