<!DOCTYPE html>
<html lang="en" style="overflow: hidden">

<head>
  <title>Alwion</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('css/home/homestyle.css')}}">

  <link rel="stylesheet" href="{{asset('css/home/open-iconic-bootstrap.min.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
  <link rel="stylesheet" href="{{asset('css/home/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/home/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/home/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('css/home/aos.css')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="{{asset('css/home/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/home/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{asset('css/home/jquery.timepicker.css')}}">
  <link rel="stylesheet" href="{{asset('css/home/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('css/home/icomoon.css')}}">

  <!-- bootstrap -->
  <link rel="stylesheet" href="{{asset('css/home/animate.css')}}">
  <link rel="stylesheet" href="{{asset('css/home/bootstrap.min.css')}}">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Goudy+Bookletter+1911&display=swap" rel="stylesheet">

  <!-- Animate on scroll  -->
  <!--	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/shishirraven/animate-on-scroll@v1.2/animation_utility.css">-->
  <!--	<script src="js/home/oyethemes_onscroll_animation.js"></script>-->
  <!-- loader -->
  <div style="background: #000;" id="ftco-loader" class="show fullscreen">
    <img class="loader rotate" src="images/home/brand-loading.png" width="60px" />
  </div>
  <style>

.bg-primary {
    background: #6927ff !important;
}

    @media (min-width: 767px) {
      .hidden-sm {
        display: none !important;
      }
    }

    @media (max-width: 767px) {
      .hidden-md {
        display: none !important;
      }

      .heading-block {
        padding-top: 50% !important;
      }

      .navbar-brand {
        margin-right: -8em !important;
        text-align: left !important;
      }

      .hero-wrap .slider-text {
        padding: 0px !important;
      }

      .heading-block {
        padding-top: 0 !important;
      }

      .mobile-margin {
        margin: 15em 0px 5em 0 !important;
      }

      .slide-1 img {
        left: 60% !important;
        width: 250px !important;
        height: 180px !important;
      }

      .slide {
        min-height: 75vh !important;
        padding: 45% 4% 0% 4% !important;
      }

      .back-boxshadow {
        border: 7px solid #fff !important;
      }

      .back-boxshadow1 {
        border: 7px solid #fff !important;
      }

      .loader {
        left: 44% !important;
      }

      .slide-2 img {
        margin-top: -210% !important;
        left: 60% !important;
        width: 250px !important;
        height: 180px !important;
      }

      .hero-wrap {
        height: 120vh !important;
      }

      .hero-wrap .slider-text {
        height: 115vh !important;
      }

      .why-choose-banner {
        display: none !important;
      }

      .y-us-section {
        background-size: 100% 100% !important;
      }

      .process-wrapp {
        width: 100% !important;
      }

      .process-wrapp li {
        display: block !important;
        margin-bottom: 15px !important;
      }

      iframe {
        height: 440vh !important;
      }

      .y-us-title h2 {
        font-size: 1.5em !important;
      }

      .ftco-partner .partner img {
        width: 50% !important;
      }

      .ftco-partner {
        text-align: center !important;
      }
    }

    @media (max-width: 365px) {
      .heading-block {
        padding-top: 70% !important;
      }

      .slide {
        padding: 55% 8% 0% 10% !important;
      }
    }
  </style>

</head>

<body>

  <style>
    .rotate {
      animation: rotation 18s infinite linear;
    }

    @keyframes rotation {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(359deg);
      }
    }


    .img-container {
      position: relative;
    }

    .img-container .top {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
    }

    html {
      scroll-behavior: smooth;
    }

    .hero-wrap {
      background-color: #000;
      color: blue;
    }

    .block-6 {
      margin-bottom: 40px;
      /* border: solid 1px #1C62BD; */
    }


    .content {
      padding: 20px;
    }
  </style>
  <div id="main-menu">
    <div class="container">
      <nav class="navbar navbar-expand-lg">



        <a class="navbar-brand" href="#"><img src="images/home/logo-1.png" width="60%"></a>
        <span class="logo-text">Alwion</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#slide1">Our Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Why Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>


  <div id="particles-js">
    <div class="content-particle">
    </div>
  </div>


  <div class="hero-wrap">
    <div class="overlay"></div>
    <div class="container-fluid">
      <div class="row slider-text align-items-center ">

        <div class="col-md-6 col-sm-12">
          <div class="img-container">
            <img class="top img-fluid" src="images\home\Internal-logo.png" alt="">
            <img class="bottom rotate img-fluid" src="images\home\Outer-circle.png" alt="">
          </div>
        </div>
        <div class="col-md-6 col-sm-12 pr-sm-5 pl-sm-5">
          <h1><span>Alwion</span></h1>
          <h5 class="sub-heading mb-4" style="margin-top: 20px;">You learning companion...</h5>
          <p class="text-white text-justify">Get ready for the learning experience like never before, meet your own personal AI learning companion. Get in to begin your journey of effortless learning with exciting games, animation and memorizing techniques with 24x7 uninterrupted support. </p>
          <p class="text-white text-justify mb-4">Also gain an opportunity for your talent recognition with the help of our specialized tools and earn money directly in your bank account.</p>
          <p>
            <a href="#" class="btn btn-primary px-4 py-3 hidden-md" data-toggle="modal" data-target="#LoginModal">Login In / Sign Up</a>
            <a href="#" class="btn btn-primary px-4 py-3 hidden-sm" data-toggle="modal" data-target="#AskModal">Login In / Sign Up</a>
            <a href="#" class="btn btn-primary px-4 py-3">Explore</a></p>
          <!--					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#LoginModal">Open Modal</button>-->
        </div>
      </div>
    </div>
  </div>


  <section class="parallax">
    <div class="inner-parallax">
      <div class="container-fluid no-padding">
        <div class="row">
          <div class="col-md-12">
            <div id="slide1" class="slide slide-1">
              <div class="row">
                <div class="col-md-6"><img src="images/home/slide-2-img.jpg" class="img-1"><img src="images/home/slide-2-img.jpg" class="img-2">
                </div>

                <div class="col-lg-6 p-4 mobile-margin scrollanimation animated fadeInRightBig back-boxshadow">
                  <div class="heading-block hlarge">
                    <h3>A team of expert and experienced teachers to explain the topics.</h3>
                  </div>
                  <p class="para-text text-justify">We have a team of subject based teachers who provide personalized teachings along with video explanation that can be referred any time by the students. We provide specialized tools based on the subject to help teachers explain the subject interactively, which are also available to the students to explore & learn.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid no-padding">
        <div class="row">
          <div class="col-md-12">
            <div id="slide2" class="slide slide-2">
              <div class="row">

                <div class="col-lg-6 p-4 mobile-margin back-boxshadow1 scrollanimation animated fadeInLeftBig">
                  <div class="heading-block hlarge">
                    <h3>Exciting 3D games to help you explain the subject & visual learning.</h3>
                  </div>
                  <p class="text-white text-justify">Who doesn't like to play games, but we can't play it more because it consumes your time. So we solve this problem and merged education with the games. This made learning effortless and interesting like never before.</p>
                </div>


                <div class="col-md-6"><img src="images/home/slide-3-img.jpg" class="img-1"><img src="images/home/slide-3-img.jpg" class="img-2">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid no-padding">
        <div class="row">
          <div class="col-md-12">
            <div id="slide3" class="slide slide-1">
              <div class="row">

                <div class="col-md-6"><img src="images/home/slide-2-img.jpg" class="img-1"><img src="images/home/slide-2-img.jpg" class="img-2">
                </div>
                <div class="col-lg-6 p-4 mobile-margin mobile-margin back-boxshadow scrollanimation animated fadeInRightBig">
                  <div class="heading-block hlarge">
                    <h3>Interactive & simulation models to help you with your learning.</h3>
                  </div>
                  <p class="para-text text-justify">Instead of looking at static objects in your text book or video lectures, here you get to interact with them. You can click, zoom and explore every object that you were only able to see before. Try & See for yourself...</p>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid no-padding">
        <div class="row">
          <div class="col-md-12">
            <div id="slide4" class="slide slide-2">
              <div class="row">
                <div class="col-lg-6 p-4 mobile-margin scrollanimation animated fadeInLeftBig back-boxshadow1">
                  <div class="heading-block hlarge">
                    <h3>Powered with artificial intelligence to assist you in your learning journey...</h3>
                  </div>
                  <p class="text-white text-justify">Alwion is an AI that is able to solve a variety of questions from various subjects & topics with in the counts of seconds. You don't have to ever wait to get your questions answered by someone. It acts like a true companion & makes you self dependent. Get in and start interacting with it now...</p>
                </div>


                <div class="col-md-6"><img src="images/home/slide-2-img.jpg" class="img-1"><img src="images/home/slide-2-img.jpg" class="img-2">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid no-padding">
        <div class="row">
          <div class="col-md-12">
            <div id="slide5" class="slide slide-1">
              <div class="row">

                <div class="col-md-6"><img src="images/home/slide-2-img.jpg" class="img-1"><img src="images/home/slide-2-img.jpg" class="img-2">
                </div>
                <div class="col-lg-6 p-4 mobile-margin back-boxshadow scrollanimation animated fadeInRightBig">
                  <div class="heading-block hlarge">
                    <h3>An opportunity to earn while you learn...</h3>
                  </div>
                  <p class="para-text text-justify" id="why-us">If you think you are creative and can make interesting and informative videos explaining students about a topic that you are good at, then you can earn a lot of money with that skill. We encourage you to post your videos about the topics we have listed and based on the views on your video you get paid directly in bank your account.</p>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>





    </div>
  </section>





  <!-- desktop  -->
  <!-- The Modal -->
  <div class="modal" id="LoginModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="backbox">
                <div class="loginMsg">
                  <div class="textcontent">
                    <p class="title">Don't have an account?</p>
                    <p>Sign up to save all your graph.</p>
                    <button id="switch1">Sign Up</button>
                  </div>
                </div>
                <div class="signupMsg visibility">
                  <div class="textcontent">
                    <p class="title">Have an account?</p>
                    <p>Log in to see all your collection.</p>
                    <button id="switch2">LOG IN</button>
                  </div>
                </div>
              </div>
              <!-- backbox -->

              <div class="frontbox">
                <div class="login">
                  <h2>LOG IN</h2>
                  <h2 class="para-text">Welcome Back</h2>
                  <div class="inputbox">

                    <form method="POST" action="{{ route('login') }}">
                      @csrf
                      <div class="inputbox">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="  EMAIL">
                        @error('email')
                        <span class="invalid-feedback" role="alert" style="top:-45%;font-size:12px !important;width:90% !important;color:red !important;">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="  PASSWORD">
                        @error('password')
                        <span class="invalid-feedback" role="alert" style="top:-45%;font-size:12px !important;width:90% !important;color:red !important;">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label class="checkbox para-text">
                          <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                        </label><br>


                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="para-text">{{ __('Forgot Your Password?') }}</a>
                        @endif
                        <br />

                        <button type="submit">{{ __('Login') }}</button>
                      </div>
                    </form>
                    <div class="login-resources">
                      <h4>Login Via Social Account</h4>
                      <ul>
                        <li><a href="{{ route('social.oauth', 'google') }}" title="" class="tw"><i class="fab fa-google"></i></a></li>
                        <li><a href="{{ route('social.oauth', 'facebook') }}" title="" class="fb"><i class="fab fa-facebook-square"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="signup hide">
                  <h2>SIGN UP</h2>
                  <h2 class="para-text">Welcome</h2>
                  <div class="inputbox">


                    <form method="POST" action="{{ route('register') }}">
                      @csrf
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder=" Enter Full Name">
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="  EMAIL">
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone" placeholder="  Phone Number">
                      @error('phone')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="  Create Password">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="  Confirm Password">


                      <label class="checkbox para-text check-text">
                        <input type="checkbox" value="remember-me" name="cc" id="c2"> Yes , I Understand and agree to the Alwion Terms & Conditions.
                      </label><br>

                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-8 no-padding">
                        <div class="login-resources mt-0 text-left">
                          <ul class="mb-0">
                            <li><a href="{{ route('social.oauth', 'google') }}" title="" class="tw"><i class="fab fa-google"></i></a></li>
                            <li><a href="{{ route('social.oauth', 'facebook') }}" title="" class="fb"><i class="fab fa-facebook-square"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-4">
                        <button type="submit" value="submit">{{ __('SIGN UP') }}</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- frontbox -->
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- Mobile  only -->
  <!-- Ask login and sign up mobile Modal -->
  <div class="modal" id="AskModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="text-center w-100">
                <div class="">
                  <button onclick="topFunction()" class="btn btn-primary" data-toggle="modal" data-target="#MobileSignupModal" onclick="$('#AskModal').modal('hide');">Sign Up</button>
                </div>
                <p class="or-text">OR</p>
                <div class="">
                  <button onclick="topFunction()" class="btn btn-primary" data-toggle="modal" data-target="#MobileLoginModal" onclick="$('#AskModal').modal('hide');">LOG IN</button>
                </div>
              </div>
              <!-- backbox -->

            </div>
            <!-- frontbox -->
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- login mobile Modal -->
  <div class="modal" id="MobileLoginModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="login" style="width:100%">
                <h2>LOG IN</h2>
                <p>Welcome Back</p>
                <div class="inputbox">

                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="inputbox">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="  EMAIL">
                      @error('email')
                      <span class="invalid-feedback" role="alert" style="top:-45%;font-size:12px !important;width:90% !important;color:red !important;">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="  PASSWORD">
                      @error('password')
                      <span class="invalid-feedback" role="alert" style="top:-45%;font-size:12px !important;width:90% !important;color:red !important;">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror


                      <label class="checkbox para-text">
                        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> {{ __('Remember Me') }}
                      </label><br>

                      @if (Route::has('password.request'))
                      <a href="{{ route('password.request') }}" class="para-text">{{ __('Forgot Your Password?') }}</a>
                      @endif
                      <br />
                    </div>
                    <button type="submit">{{ __('Login') }}</button>
                  </form>

                  <div class="login-resources">
                    <h4>Login Via Social Account</h4>
                    <ul>
                      <li><a href="{{ route('social.oauth', 'google') }}" title="" class="tw"><i class="fab fa-google"></i></a></li>
                      <li><a href="{{ route('social.oauth', 'facebook') }}" title="" class="fb"><i class="fab fa-facebook-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- frontbox -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- sign up mobile Modal -->
  <div class="modal" id="MobileSignupModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="signup">
                <h2>SIGN UP</h2>
                <p class="para-text">Welcome</p>
                <div class="inputbox">

                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder=" Enter Full Name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="  EMAIL">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone" placeholder="  Phone Number">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="  Create Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="  Confirm Password">


                    <label class="checkbox para-text check-text">
                      <input type="checkbox" value="remember-me" name="cc" id="c2"> Yes , I Understand and agree to the Alwion Terms & Conditions.
                    </label><br>
                    <button type="submit" value="submit">{{ __('SIGN UP') }}</button>
                  </form>

                  <div class="login-resources">
                    <h4>Sign up Via Social Account</h4>
                    <ul>
                      <li><a href="{{ route('social.oauth', 'google') }}" title="" class="tw"><i class="fab fa-google"></i></a></li>
                      <li><a href="{{ route('social.oauth', 'facebook') }}" title="" class="fb"><i class="fab fa-facebook-square"></i></a></li>
                    </ul>
                  </div>

                </div>
                <!-- frontbox -->
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- including another page  -->
    @include('welcome-part')

  <script src="https://cdn.jsdelivr.net/npm/lax.js"></script>
  <script>
    window.onload = function() {
      lax.setup() // init

      const updateLax = () => {
        lax.update(window.scrollY)
        window.requestAnimationFrame(updateLax)
      }

      window.requestAnimationFrame(updateLax)
    }
  </script>

  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script>
    particlesJS("particles-js", {
      "particles": {
        "number": {
          "value": 200,
          "density": {
            "enable": true,
            "value_area": 1200
          }
        },
        "color": {
          "value": "#ffffff"
        },
        "shape": {
          "type": "circle",
          "stroke": {
            "width": 0,
            "color": "#000000"
          },
          "polygon": {
            "nb_sides": 5
          },
          "image": {
            "src": "img/github.svg",
            "width": 100,
            "height": 100
          }
        },
        "opacity": {
          "value": 0.2,
          "random": false,
          "anim": {
            "enable": false,
            "speed": 1,
            "opacity_min": 0.1,
            "sync": false
          }
        },
        "size": {
          "value": 3,
          "random": true,
          "anim": {
            "enable": false,
            "speed": 40,
            "size_min": 0.1,
            "sync": false
          }
        },
        "line_linked": {
          "enable": true,
          "distance": 160,
          "color": "#ffffff",
          "opacity": 0.3,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 3,
          "direction": "none",
          "random": false,
          "straight": false,
          "out_mode": "out",
          "bounce": false,
          "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
          }
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "grab"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          },
          "resize": true
        },
        "modes": {
          "grab": {
            "distance": 140,
            "line_linked": {
              "opacity": 1
            }
          },
          "bubble": {
            "distance": 400,
            "size": 40,
            "duration": 2,
            "opacity": 3,
            "speed": 3
          },
          "repulse": {
            "distance": 100,
            "duration": 0.4
          },
          "push": {
            "particles_nb": 4
          },
          "remove": {
            "particles_nb": 2
          }
        }
      },
      "retina_detect": true
    });
  </script>

  <style>
    .content-particle {
      /* position: absolute; */
    }

    #particles-js {
      width: 100vw;
      height: 100vh;
      background: #000000;
      position: absolute;
      background-image: url("");
      background-repeat: no-repeat;
      background-size: cover;
    }

    /* ---- stats.js ---- */

    .count-particles {
      background: #000022;
      position: absolute;
      top: 48px;
      left: 0;
      width: 80px;
      color: #1a6813;
      color: #441c8f;
      font-size: .8em;
      text-align: left;
      text-indent: 4px;
      line-height: 14px;
      padding-bottom: 2px;
      font-family: Helvetica, Arial, sans-serif;
      font-weight: bold;
    }

    .js-count-particles {
      font-size: 1.1em;
      color: #ebe9f0;
    }

    #stats,
    .count-particles {
      -webkit-user-select: none;
      margin-top: 5px;
      margin-left: 5px;
      color: #ebe9f0;
    }

    #stats {
      border-radius: 3px 3px 0 0;
      color: #ebe9f0;
      overflow: hidden;
    }

    .count-particles {
      border-radius: 0 0 3px 3px;
    }
  </style>
  <style>
    .cardme {
      background-color: whitesmoke;
      height: 40vh;
      width: 100%;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .cardup {
      margin-top: 45px;

    }

    body {
      /*start ------------*/
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #ffffff), color-stop(1, #011742)) !important;
      background: -moz-linear-gradient(top, #000000 12%, #ffffff 80%) !important;
      background: -webkit-linear-gradient(top, #000000 12%, #ffffff 80%) !important;
      background: -o-linear-gradient(top, #ffffff 12%, #ffffff 80%) !important;
      background: -ms-linear-gradient(top, #000000 12%, #ffffff 80%) !important;
      background: linear-gradient(top, #000000 12%, #ffffff 80%) !important;
    }
  </style>



  <script src="{{asset('js/home/jquery.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="{{asset('js\home\jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js\home\popper.min.js')}}"></script>
  <script src="{{asset('js/home/bootstrap.min.js')}}"></script>
  <script src="{{asset('js\home\jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js\home\jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js\home\jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js\home\owl.carousel.min.js')}}"></script>
  <script src="{{asset('js\home\jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js\home\aos.js')}}"></script>
  <script src="{{asset('js\home\jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('js\home\bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('js\home\scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('js\home\google-map.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
  <script src="{{asset('js\home\main.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="{{asset('js/home/rellax.js')}}"></script>

  <script>
    new WOW().init();
  </script>
  <script>
    $(document).on('click', 'a[href^="#"]', function(event) {
      event.preventDefault();

      $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
      }, 500);
    });
  </script>
  <script>
    var $loginMsg = $('.loginMsg'),
      $login = $('.login'),
      $signupMsg = $('.signupMsg'),
      $signup = $('.signup'),
      $frontbox = $('.frontbox');

    $('#switch1').on('click', function() {
      $loginMsg.toggleClass("visibility");
      $frontbox.addClass("moving");
      $signupMsg.toggleClass("visibility");

      $signup.toggleClass('hide');
      $login.toggleClass('hide');
    })

    $('#switch2').on('click', function() {
      $loginMsg.toggleClass("visibility");
      $frontbox.removeClass("moving");
      $signupMsg.toggleClass("visibility");

      $signup.toggleClass('hide');
      $login.toggleClass('hide');
    })

    setTimeout(function() {
      $('#switch1').click()
    }, 1000)

    setTimeout(function() {
      $('#switch2').click()
    }, 3000)
  </script>
  <!-- animate on scroll   -->
  <script src="https://cdn.jsdelivr.net/gh/shishirraven/animate-on-scroll@v1.0/oyethemes_onscroll_animation.js"></script>
  <style>
    @font-face {
      font-family: "Flaticon";
      src: url("fonts/fonts/flaticon/font/Flaticon.eot");
      src: url("fonts/fonts/flaticon/font/Flaticon-1.eot") format("embedded-opentype"), url("fonts/fonts/flaticon/font/Flaticon.woff") format("woff"), url("../fonts/fonts/flaticon/font/Flaticon.ttf") format("truetype"), url("../fonts/fonts/flaticon/font/Flaticon.svg") format("svg");
      font-weight: normal;
      font-style: normal;
    }

    @media screen and (-webkit-min-device-pixel-ratio:0) {
      @font-face {
        font-family: "Flaticon";
        src: url("fonts/fonts/flaticon/font/Flaticon.svg") format("svg");
      }
    }

    [class^="flaticon-"]:before,
    [class*=" flaticon-"]:before,
    [class^="flaticon-"]:after,
    [class*=" flaticon-"]:after {
      font-family: Flaticon;
      font-style: normal;
      font-weight: normal;
      font-variant: normal;
      text-transform: none;
      line-height: 1;
      /* Better Font Rendering =========== */
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .flaticon-server:before {
      content: "\f100";
    }

    .flaticon-cloud:before {
      content: "\f101";
    }

    .flaticon-cloud-computing:before {
      content: "\f102";
    }

    .flaticon-settings:before {
      content: "\f103";
    }

    .flaticon-database:before {
      content: "\f104";
    }

    .flaticon-life-insurance:before {
      content: "\f105";
    }

    .flaticon-customer-service:before {
      content: "\f106";
    }
  </style>

  <style>
    @font-face {
      font-family: 'icomoon';
      src: url('fonts/fonts/icomoon/icomoon.eot');
      src: url('fonts/fonts/icomoon/icomoon.eot') format('embedded-opentype'),
        url('fonts/fonts/icomoon/icomoon.ttf') format('truetype'),
        url('fonts/fonts/icomoon/icomoon.woff') format('woff'),
        url('fonts/fonts/icomoon/icomoon.svg') format('svg');
      font-weight: normal;
      font-style: normal;
    }

    [class^="icon-"],
    [class*=" icon-"] {
      /* use !important to prevent issues with browser extensions that change fonts */
      font-family: 'icomoon' !important;
      speak: none;
      font-style: normal;
      font-weight: normal;
      font-variant: normal;
      text-transform: none;
      line-height: 1;

      /* Better Font Rendering =========== */
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
  </style>

</body>

</html>