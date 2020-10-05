
<!DOCTYPE html>
<html>

<!--alwion/sign-in.html by Webshark web services, Thu, 19 Mar 2020 11:01:45 GMT -->
<head>
	<meta charset="UTF-8">
	<title>Alwion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
	<linkrel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css" >
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<style media="screen">
		footer{
			background:transparent;
		}
		footer ul li a{
			color:white !important;
		}
		footer p{
			color:white !important;
		}
	</style>
	<style>
		input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}



		.sign-control {
			float: left;
			width: 100%;
			text-align: center;
			padding-right: 20px;
			margin-top: 44px;
			margin-bottom: 44px;
		}
		.sign-control li a {
			padding: 12px 38px;
		}
		.tw {
   			background-color: #ea4335;
		}
	</style>

</head>


<body class="sign-in" oncontextmenu="return false;" style="rgb(64, 183, 245);">


	<div class="wrapper">

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
									<img src="images/wd-logo.png" alt=""><h3 style="font-size: 37px; line-height: 2.1em; letter-spacing: 0px; margin-left: 70px;">Alwion</h3>
									<p>Alwion,  is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p>
								</div><!--cm-logo end-->
								<img src="images/cm-main-img.png" alt="">
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control">
									<li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>
									<li data-tab="tab-2"><a href="#" title="">Sign up</a></li>
								</ul>
								<div class="sign_in_sec current" id="tab-1">

									<h3>Sign in</h3>
									<form method="POST" action="{{ route('login') }}">
										@csrf
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">

													@error('email')
															<span class="invalid-feedback" role="alert" style="top:-45%;font-size:12px !important;width:90% !important;color:red !important;">
																	<strong>{{ $message }}</strong>
															</span>
													@enderror
													<i class="la la-user"></i>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">

													@error('password')
															<span class="invalid-feedback" role="alert" style="top:-45%;font-size:12px !important;width:90% !important;color:red !important;">
																	<strong>{{ $message }}</strong>
															</span>
													@enderror
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<div class="fgt-sec">
														<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

														<label class="form-check-label" for="remember">
															<span></span>	{{ __('Remember Me') }}
														</label>
													</div><!--fgt-sec end-->
													@if (Route::has('password.request'))
															<a class="" href="{{ route('password.request') }}">
																	{{ __('Forgot Your Password?') }}
															</a>
													@endif
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<button type="submit">{{ __('Login') }}</button>
											</div>
										</div>
									</form>
									<div class="login-resources">
										<h4>Login Via Social Account</h4>
										<ul>
											<li><a href="#" title="" class="tw"><i class="fa fa-google"></i>Login Via Google</a></li>
											<li><a href="#" title="" class="fb"><i class="fa fa-facebook"></i>Login Via Facebook</a></li>
										</ul>
									</div><!--login-resources end-->
								</div><!--sign_in_sec end-->
								<div class="sign_in_sec" id="tab-2">
									<!--signup-tab end-->
									<div class="dff-tab current" id="tab-3">
										<h3>Sign Up</h3>
										<form method="POST" action="{{ route('register') }}">
											@csrf
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Full Name">

														@error('name')
																<span class="invalid-feedback" role="alert">
																		<strong>{{ $message }}</strong>
																</span>
														@enderror
														<i class="la la-user"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">

														@error('email')
																<span class="invalid-feedback" role="alert">
																		<strong>{{ $message }}</strong>
																</span>
														@enderror
														<i class="la la-envelope"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone" placeholder="Enter Your Phone">

														@error('phone')
																<span class="invalid-feedback" role="alert">
																		<strong>{{ $message }}</strong>
																</span>
														@enderror
														<i class="la la-phone"></i>

													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Create Password">

														@error('password')
																<span class="invalid-feedback" role="alert">
																		<strong>{{ $message }}</strong>
																</span>
														@enderror
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c2">
															<label for="c2">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the Alwion Terms & Conditions.</small>
														</div><!--fgt-sec end-->
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">{{ __('Register') }}</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
									<div class="dff-tab" id="tab-4">
										<form>
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="company-name" placeholder="Company Name">
														<i class="la la-building"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="country" placeholder="Country">
														<i class="la la-globe"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="repeat-password" placeholder="Repeat Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c3">
															<label for="c3">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the Alwion Terms & Conditions.</small>
														</div><!--fgt-sec end-->
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Get Started</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
								</div>
							</div><!--login-sec end-->
						</div>
					</div>
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->

			@include('footer')


		</div><!--sign-in-page end-->


	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

<!--alwion/sign-in.html by Webshark web services, Thu, 19 Mar 2020 11:01:46 GMT -->
</html>
