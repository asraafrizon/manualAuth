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
	
	<form class="form-signin" method="POST" action=" {{ route('post.login') }} ">
		{{ csrf_field() }}
		<h1 class="h3 mb-3 font-weight-normal">Login {{config('app.name')}} </h1>
		<label for="inputEmail" class="sr-only">Email Address</label>
		<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me">Remember me
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>

	</form>
	

</body>
</html>