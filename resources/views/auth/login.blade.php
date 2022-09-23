@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="FoodMystro - Online ordering platform">
	<meta name="author" content="FoodMystro">
	<title>Back Office | Papa Nadox Kitchen | Powered by FoodMystro</title>
	
	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('')}}assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('')}}assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('')}}assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('')}}assets/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('')}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('')}}assets/css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{asset('')}}assets/css/order-sign_up.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('')}}assets/css/custom.css" rel="stylesheet">
    
</head>

<body id="register_bg">
	
	<div id="register">
		<aside>
			<figure>
				<a href="index.html"><img src="{{asset('')}}assets/img/logo_sticky.svg" width="140" height="35" alt=""></a>
			</figure>
			<div class="access_social">
				<h4 class="text-center">Log in to your Back Office</h4><br>
			</div>
            <form method="POST" action="{{ route('login') }}">
                        @csrf
				<div class="form-group">
                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
                <input id="password" type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-start">	
                        <label class="container_check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                {{ __('Remember Me') }}
                                <input type="checkbox">
                                <span class="checkmark"></span>
						</label>
					</div>
					<!-- <div class="float-end"><a id="forgot" href="#0">Forgot Password?</a></div> -->
				</div>
                <button href="https://backend.foodmystro.com" target="_blank" class="btn_1 gradient full-width">

                                    {{ __('Login Now!') }}
                 </button>
                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
				<!-- <div class="text-center mt-2"><small>Don't have an acccount? <strong><a href="register.html">Sign Up</a></strong></small></div> -->
			</form>
			<div class="copy">© Papa Nadox Kitchen | Powered by <a href="https://foodmystro.com" target="_blank"><b>FoodMystro</b></a></div>
		</aside>
	</div>
	<!-- /login -->
	
	<!-- COMMON SCRIPTS -->  
    <script src="{{asset('')}}assets/js/common_scripts.min.js"></script>
    <script src="{{asset('')}}assets/js/common_func.js"></script>
    <script src="{{asset('')}}assets/assets/validate.js"></script>

  
</body>
</html>

@endsection
