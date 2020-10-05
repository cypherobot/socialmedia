<!DOCTYPE html>
<html>

<!--alwion/user-profile.html by Webshark web services, Thu, 19 Mar 2020 11:00:56 GMT -->

<head>
	<meta charset="UTF-8">
	<title>Alwion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	{{-- Laravel CSRF Token --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

	<!-- CSS Files -->
	<link href=" {{asset('/css/material-kit.css?v=2.0.4')}}" rel="stylesheet" />

	<!-- <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/line-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/line-awesome-font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/custom-style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">


	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />


	<style media="screen">
		.flw-status li span {
			font-size: 17px !important;
		}

		.profiletxt {
			font-size: 17px !important;
			font-weight: 600px !important;
		}

		.modal-title {
			font-size: 17px !important;
			font-weight: 600px !important;
			font-style: bold;
			font-weight: bold !important;
		}

		.pp {
			font-size: 14px;
			line-height: 24px;
			padding: 2px;
		}

		.pp:hover {
			background-color: #eeeeee;
			font-size: 14px;
			line-height: 24px;
			padding: 2px;
		}

		.pp:active {
			color: lightgray;
		}

		.user-pro-img img {
			border-radius: 100%;
			border: 5px solid #fff !important;
			box-shadow: -1px 14px 20px 0 #00000047 !important;
			/* box-shadow: 0px 2px 10px 0px !important; */
		}

		.nav-tabs .nav-item .nav-link,
		.nav-tabs .nav-item .nav-link:hover,
		.nav-tabs .nav-item .nav-link:focus {
			border: 0 !important;
			color: #333 !important;
			font-weight: 500;
		}

		.btn {
			font-size: 14px !important;
			font-weight: 600 !important;

		}

		a {
			color: #000;

		}




		.line {

			border: 2px;
			border-color: #f7dbff;
			border-style: solid;
		}


		/* for mobile */
		@media screen and (max-width:600px) {
			.meq {
				margin-right: -6px !important;
			}

			.sp {
				display: none;
			}

			.btn.btn-primary {
				background-color: #5969FC !important;
				border-color: #5969FC !important;
				width: 59px;
				height: 44px;
				margin: 8px;
				margin-left: 8px;
				font-size: -1px;
			}


			.styleshow {
				width: 100px !important;
			}

			.user-profile-ov {
				margin-right: 4px;
				/* border: 0px solid #dbdbdb; */
				text-align: left;
				/* box-shadow: 0 0 0px 0 #9696ff; */
				background-color: cornflowerblue;
				box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3), -3px -3px 6px rgba(255, 255, 255, 0.3),
					inset 8px 2px 5px rgba(255, 255, 255, 0.5),
					inset -2px -2px 5px rgba(0, 0, 0, 0.3);

			}

			.user-profile-ov h3 {
				color: #fff;
				font-size: 13px;
				font-weight: 300;
				margin-bottom: 12px;
				font-family: 'Roboto Slab', serif;
				/* font-family: 'Oxygen'; */
			}

			.user-profile-ov p {
				color: #fff;
				font-weight: 300;
				margin-top: 5px;
				font-family: 'Dosis', sans-serif;
				/* font-family: 'Oxygen'; */
			}


			.tab1 {
				background-color: #bae0e3;
				width: 100px !important;
				height: auto;
				padding: 13px !important;
				border-radius: 5px;
				border-style: solid;
				/* margin: -9px !important; */
				margin-right: 7px !important;
				margin-left: 7px !important;
				margin-top: 7px !important;
			}

			.btn {
				font-size: 10px !important;
				font-weight: 400 !important;
				padding: 8px 7px !important;
			}


			.user_profile {
				margin-top: -420px !important;
			}


			.parallax-mirror {
				height: 100% !important;
			}

			.btab {
				padding: 0px 30px;
			}


			.btnnew {
				background: linear-gradient(45deg, #9304c7, #0511b5);
				padding: 8px 20px;
				font-size: 9px !important;
				font-weight: 600 !important;
				color: white !important;
				border-radius: 0px;
			}

			.btnnew:hover {
				background: #1a0996;
			}

			.la-ellipsis-v:before {
				margin-left: -20px !important;
			}

			.postbar-in-profile {
				width: 95% !important;
				margin: auto 2.5% !important;
			}

			footer {
				margin-top: 35% !important;
			}

			main {
				transform: translateY(0) !important;
			}

			.status-1-profile {
				padding-bottom: 0px !important;
			}

			.tab-feed ul li {
				margin-right: 5px !important;
			}

			.tab-feed ul li a img {
				width: 20px !important;
			}

			.tab-feed ul li a span {
				font-size: 10px !important;
			}

			.user-account {
				width: 0 !important;
			}

			.user-pro-img {
				margin-top: -90px !important;
			}

			.user_pro_status {
				margin-top: 40px !important;
			}

			.buttons-links {
				margin-top: 15% !important;
			}

			.menu-options-in-profile {
				padding: 10px;
				font-size: 12px;
			}



			.user-pro-img img {
				border-radius: 100%;
				width: 80px !important;
				margin-top: -90px !important;
				margin-bottom: 32px !important;
				border: 5px solid #fff !important;
				box-shadow: -1px 14px 20px 0 #00000047 !important;
				/* box-shadow: 0px 2px 10px 0px !important; */
			}

			.profile-container {
				position: relative;
				top: 300px !important;
				max-width: 100% !important;
				padding-right: 0 !important;
				padding-left: 0 !important;
			}

			.profile-container .row .col-lg-12 {
				padding-right: 5px !important;
				padding-left: 5px !important;
			}

			main {
				padding-bottom: 30vh !important;
			}



			.menu-options-in-profile {
				/* background: #6a00ff; */
				background: linear-gradient(45deg, #9304c7, #0511b5);

				padding: 8px 50px;
				font-size: 13px;
				color: white !important;
				border-radius: 0px;
				font-size: 26px;
				font-weight: 200;
				font-family: 'Oxygen';
			}



			.flw-hr li a {
				background: linear-gradient(45deg, #0511b5, #9304c7);
				color: #fff;
				border: 4px solid #fff;
				font-size: 12px;
				font-weight: 200;
				font-family: 'Oxygen';
				padding: 18px 50px;
			}



			.scrolling-search-button-fullopac {
				background: #efefef !important;
			}

			.scrolling-search-bar-fullopac {
				background: white !important;
			}

			/* 
			.activeheader {
				background: #40b7f5 !important;
				transition: all 0.2s ease-in-out !important;
			} */

			.header {
				background: transparent;
			}

			.cover-sec img {
				height: 60vh !important;
				transform: translate3d(0px, 0px, 0px) !important;
			}
		}


		@media screen and (min-width:575px) and (max-width:600px) {
			.user-pro-img img {
				border-radius: 100%;
				width: 120px !important;
				margin-top: -87px !important;
				border: 5px solid #fff !important;
				box-shadow: -1px 14px 20px 0 #00000047 !important;
				/* box-shadow: 0px 2px 10px 0px !important; */
			}

			section {
				float: left;
				width: 100%;
				position: relative;
				height: 140px;
			}

			.styleshow {

				width: 100px !important;
			}


			.cover-sec img {
				height: 50vh !important;
				transform: translate3d(0px, 0px, 0px) !important;
			}
		}

		/* end for mobile */
		/* for ipad */
		@media screen and (min-width:601px) and (max-width:991px) {
			.user-profile-ov {
				margin-right: 5px;
				/* border: 0px solid #dbdbdb; */
				text-align: left;
				/* box-shadow: 0 0 0px 0 #9696ff; */
				background-color: cornflowerblue;
				box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3), -3px -3px 6px rgba(255, 255, 255, 0.3),
					inset 8px 2px 5px rgba(255, 255, 255, 0.5),
					inset -2px -2px 5px rgba(0, 0, 0, 0.3);

			}

			.user-profile-ov h3 {
				color: #fff;
				font-size: 15px;
				font-weight: 400;
				margin-bottom: 14px;
				font-family: 'Roboto Slab', serif;
				/* font-family: 'Oxygen'; */
			}

			.user-profile-ov p {
				color: #fff;
				font-weight: 400;
				margin-top: 6px;
				font-family: 'Dosis', sans-serif;
				/* font-family: 'Oxygen'; */
			}


			/* .tab1 {
    background-color: #bae0e3;
    width: 100px !important;
    height: auto;
    padding: 13px !important;
    border-radius: 5px;
    border-style: solid;
    margin-right: 7px !important;
    margin-left: 7px !important;
	margin-top: 7px !important;
} */



			.btn {
				font-size: 11px !important;
				font-weight: 400 !important;
				padding: 9px 15px !important;
			}

			.btnnew {
				background: linear-gradient(45deg, #9304c7, #0511b5);
				padding: 10px 25px;
				font-size: 12px !important;
				font-weight: 500 !important;
				color: white !important;
				border-radius: 0px;
			}

			.btnnew:hover {
				background: #1a0996;
			}

			/* .activeheader {
				background: #40b7f5 !important;
				transition: all 0.2s ease-in-out;
			} */

			.header {
				background: transparent;
			}


			.profile-container {
				position: relative;
				top: -50px !important;
				max-width: 100% !important;
			}

			.user_pro_status {
				margin-top: 50px !important;
				border-bottom: 0px solid #e5e5e5 !important;
			}

			.profile-container {
				padding-right: 0 !important;
				padding-left: 0 !important;
			}

			.tab-feed ul li {
				margin: 16px !important;
			}

			.tab-feed ul li {
				margin-bottom: 39px !important;
				width: 23px !important;
			}


			.user-pro-img img {
				border-radius: 100%;
				width: 120px !important;
				margin-top: -57px !important;
				border: 5px solid #fff !important;
				box-shadow: -1px 14px 20px 0 #00000047 !important;
				/* box-shadow: 0px 2px 10px 0px !important; */
			}

			.cover-sec img {
				height: 70vh !important;
				transform: translate3d(0px, 0px, 0px) !important;
			}

			.buttons-links {
				margin-top: 13% !important;
			}

			.nogapscroll {
				/* transform: translateY(0) !important; */
				transform: translate3d(0px, 0px, 0px) !important;
			}

			main {
				padding-bottom: 0 !important;
			}

			.menu-options-in-profile {
				/* background: #6a00ff; */
				background: linear-gradient(45deg, #9304c7, #0511b5);

				padding: 14px 50px;
				font-size: 13px;
				color: white !important;
				border-radius: 0px;
				font-size: 26px;
				font-weight: 200;
				font-family: 'Oxygen';
			}


			.flw-hr li a {
				background: linear-gradient(45deg, #0511b5, #9304c7);
				color: #fff;
				border: 4px solid #fff;
				font-size: 12px;
				font-weight: 200;
				font-family: 'Oxygen';
				padding: 18px 50px;
			}



			.scrolling-search-button-fullopac {
				background: #efefef !important;
			}

			.scrolling-search-bar-fullopac {
				background: white !important;
			}

			/* .activeheader {
				background: #40b7f5 !important;
				transition: all 0.2s ease-in-out !important;
			} */

			.header {
				background: transparent;
			}
		}

		/* end for ipad */
		/* for desktop */
		@media screen and (min-width:992px) {

			.user-profile-ov {
				/* border: 0px solid #dbdbdb; */
				text-align: left;
				/* box-shadow: 0 0 0px 0 #9696ff; */
				background-color: cornflowerblue;
				box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3), -3px -3px 6px rgba(255, 255, 255, 0.3),
					inset 8px 2px 5px rgba(255, 255, 255, 0.5),
					inset -2px -2px 5px rgba(0, 0, 0, 0.3);

			}



			.user-profile-ov h3 {
				color: #fff;
				font-size: 18px;
				font-weight: 500;
				margin-bottom: 18px;
				font-family: 'Roboto Slab', serif;
				/* font-family: 'Oxygen'; */
			}


			.user-profile-ov p {
				color: #fff;
				font-weight: 400;
				margin-top: 6px;
				font-family: 'Dosis', sans-serif;
				/* font-family: 'Oxygen'; */
			}


			/* .activeheader {
				background: #40b7f5 !important;
				transition: all 0.2s ease-in-out;
			} */

			.header {
				background: transparent;
			}


			.profile-container {
				position: relative;
				top: -50px !important;
				max-width: 100% !important;
			}

			.nogapscroll {
				/* transform: translateY(0) !important; */
				transform: translate3d(0px, 0px, 0px) !important;
			}

			main {
				padding-bottom: 0 !important;
			}

			.menu-options-in-profile {
				/* background: #6a00ff; */
				background: linear-gradient(45deg, #9304c7, #0511b5);

				padding: 14px 50px;
				color: white !important;
				border-radius: 0px;
				font-size: 14px !important;
				font-weight: 600;
				font-family: 'Oxygen';
			}

			.menu-options-in-profile:hover {
				background: #1a0996;
				padding: 14px 50px;
				font-size: 14px;
				color: white !important;
				border-radius: 0px;
			}

			.btnnew {
				background: linear-gradient(45deg, #9304c7, #0511b5);
				padding: 12px 30px;
				font-size: 14px !important;
				font-weight: 600 !important;
				color: white !important;
				border-radius: 0px;
			}

			.btnnew:hover {
				background: #1a0996;
			}



			.connect {
				background: linear-gradient(45deg, #9304c7, #0511b5);

				padding: 14px 50px;
				font-size: 14px;
				color: white !important;
				border-radius: 0px;
				font-size: 26px;
				font-weight: 200;
				font-family: 'Oxygen';

			}


			.flw-hr li a {
				/* background: linear-gradient(45deg, #0511b5, #9304c7); */
				color: #fff;
				border: 4px solid #fff;
				font-size: 12px;
				font-weight: 200;
				font-family: 'Oxygen';
				margin-top: 0px;
				padding: 18px 50px;
			}


			.user_profile {
				border-radius: 10px !important;
				box-shadow: 0 0 10px 0 black;
			}

			.butx {
				padding: 14px;
				border: solid;
			}



			.scrolling-search-button-fullopac {
				background: #efefef !important;
			}

			.scrolling-search-bar-fullopac {
				background: white !important;
			}


			.header {
				height: 56px !important;
			}

			/* 
			.user-pro-img img {
				width: 110px !important;
				padding-top: 0px;
				border-width: 5px;
				border-style: solid;
				border-color: #fff;
			} */

			.user-pro-img {
				float: left;
				width: 100%;
				text-align: center;
				margin-bottom: 20px;
				margin-top: -150px;
				position: relative;
			}


			/* .activeheader {
				background: #40b7f5 !important;
				transition: all 0.2s ease-in-out !important;
			} */

			.header {
				background: transparent;
			}

			.cover-sec img {
				height: 87vh !important;
				transform: translate3d(0px, -1px, 0px) !important
			}


		}

		/* end for desktop */

		.pr-lg-4,
		.px-lg-4 {
			padding-right: 1.8rem !important;
			padding-top: 20px !important;
		}



		.showdetails {
			display: block !important;
		}

		.user-settingss {
			display: none;
		}

		.styleshow {
			display: block !important;
			position: absolute;
			opacity: 1;
			visibility: visible;
			z-index: 10000;
			display: none;
			top: 20px;
			right: 0%;
			width: 144px;
			background-color: white;
			border: 1px solid #e5e5e5;
			padding: 10px 8px;
			box-shadow: 0 0 5px 0 grey;
		}

		.para {
			font-size: 16px;
			font-weight: 400;
		}

		header nav ul li span {
			font-size: 14px;
			font-weight: 600;
		}

		.user_profile {
			border-radius: 10px !important;
			box-shadow: 0 0 10px 0 black;

		}

		.flw-hr li a {
			color: #fff;
			border: 4px solid #fff;
			font-size: 14px !important;
			font-weight: 600;
		}

		a.flww {
			color: #fff;
			border: 4px solid #fff;
			font-size: 16px;
		}

		.buttons-links {
			margin-top: 3%;
		}

		.menu-options-in-profile {
			font-size: 13px;
			font-family: 'Nunito Sans', sans-serif;
		}

		.buttons-links {
			position: relative;
		}

		.buttons-links .visible {
			z-index: 100;
		}

		.profile-name {
			font-size: 1.5625rem;
			line-height: 1.4em;
			color: #000000;
			font-weight: 700;
			font-family: "Roboto Slab", "Times New Roman", serif;
		}

		.profile-description {
			font-size: 14px;
			margin: 0 0 10px;
			font-family: "Roboto", "Helvetica", "Arial", sans-serif;
			font-weight: 300;
			line-height: 1.5em;
		}

		.postbar-in-profile {
			width: 86%;
			margin: auto 6%;
			border-top: 1px solid #e4e4e4;
			display: inline-block;
		}

		.process-comm {
			padding-bottom: 5% !important;
		}

		.topspace {
			margin-top: 50px;
			margin-left: -13px;
			margin-right: -13px;
			height: 175px;
			background: rgba(53, 52, 52, 0.836);
		}

		.myhdcl {
			background-color: rgb(255, 255, 255);
		}

		.mybtn {
			float: right;
			color: #9304c7;
			padding: 5px 20px !important;
			border-radius: 1%;
			margin-bottom: 15px;
		}

		.user-pro-imgss {
			float: left;
			width: 100%;
			margin-left: 13px;
			text-align: left;
			margin-bottom: 10px;
			margin-top: -110px;
			position: relative;
			border: 4px solid #fff;
			box-shadow: 0px 2px 10px 0px;
		}

		.myfield {
			background-color: #CFD8DC;
			padding: 5px 0px;
			width: 100%;
			margin: 3% 0;
			border-color: #fff;
			border-style: solid;
			border-radius: 10px;
		}

		.myinput {
			border: 0px;
			padding-left: 25px;
			background-color: rgba(159, 168, 218, 0.5);
			border-bottom: 1px;
			border-top: 0px;
			border-width: 2px;
			border-color: #37474F;
			border-style: solid;

			margin-top: 5px;
			margin-bottom: -6px;
			width: 100%;
			padding: 9px;
		}

		.mytitle {
			font-size: 18px;
			padding-left: 20px;
			padding-bottom: 3px;
		}

		.ico1 {
			color: #304FFE;
		}

		.user_profile {
			border-radius: 6px !important;
			box-shadow: -1px 14px 20px 0 #00000047 !important;
		}

		select {
			-webkit-appearance: button !important;
			-moz-appearance: button !important;
			margin-left: 0px !important;
			color: black;
			padding: 2px 30px !important;
			width: min-content;
		}
	</style>
</head>

<body oncontextmenu="return false;" style="background-image: radial-gradient( #cafbfc , #caddfc, #f7dbff) !important;">
	<div class="wrapper">
		@include('header')
		<script>
			var rellax = new Rellax('.rellax');
		</script>

		<!-- <section class="cover-sec" data-scroll-speed="10" data-parallax="true">
			<img class="parallax-window" data-parallax="scroll" data-image-src="{{asset("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSHlK1qdXMgn42bUr6drjlHxqYPu6JD4nbBV8pSvMVDEEMC2ak9&usqp=CAU")}}" alt="">
		</section> -->
		<!-- <main data-scroll-speed="1" rellax data-rellax-speed="10" style="transform: translate3d(0px, 0px, 0px) !important;" class="nogapscroll"> -->

		@if ( $user->cover_image != "" )
		<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset("/storage/uploads/avatar/$user->cover_image")}}');">
				<div>
									<label for="cover-image">
										@if ( $user->cover_image != NULL && $user->cover_image != "" )
										<img src="{{asset("/storage/uploads/avatar/$user->cover_image")}}" width="100%" alt="">
										@else
										<img src="{{asset("/images/resources/cover-img.jpg")}}" width="100%" alt="">
										@endif

										<img src="{{asset('/images/camera.png')}}" style="width: 3em; float: right;margin-top: -35em; margin-right: 2em;" >
									</label>
									<input type="file" id="cover-image" name="cover-image" hidden>
								</div>
		</div>
		@else
		<label for="cover-image">
		<div class="page-header header-filter" data-parallax="true" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSHlK1qdXMgn42bUr6drjlHxqYPu6JD4nbBV8pSvMVDEEMC2ak9&usqp=CAU');">
				<div>
													
										@if ( $user->cover_image != NULL && $user->cover_image != "" )
										<img src="{{asset("/storage/uploads/avatar/$user->cover_image")}}" width="100%" alt="">
										@else
										<img src="{{asset("/images/resources/cover-img.jpg")}}" width="100%" alt="">
										@endif
										<img src="{{asset('/images/camera.png')}}" style="width: 3em;  float: right; margin-top: -35em; margin-right: 2em;">	
										
									</label>
									<input type="file" id="cover-image" name="cover-image" hidden >
								</div>
		</div>
		@endif
		<div class="main main-raised">


			<main>
				<div class="main-section">
					<div class="container profile-container">
						<div class="row">
							<div class="col-lg-12">
								<div class="main-left-sidebar">
									<div class="user_profile">

										<!-- options -->
										<div class="row buttons-links">
											<div class="col-6 col-md-5 px-0 px-lg-auto visible">
												<div class="row">
													<div class="col-6 px-1 px-md-auto btab">
            
                                                        @if ( Auth::user() )
														@if ( Auth::user()->id != $user->id )
														@php
														$auth_user = Auth::user();
														$request = $auth_user->requested_connection( $user->id );
														@endphp

														@if ( $request && $request->count() > 0 )
														@if ( $request->status == 1 ) {{-- This means request is pending --}}
														<button class="btn btn-primary js-connection-btn" data-task="cancel-connection-request" data-user-id="{{ $user->id }}">
															<i class="la la-minus"></i><span class="sp"> Cancel Request</span>
														</button>
														@else
														@if ( $request->status == 2 ) {{-- This means request is accepted --}}
														<button class="btn btn-primary js-connection-btn" data-task="remove-connection" data-user-id="{{ $user->id }}">
															<i class='la la-minus'></i> Familiar
														</button>

														{{-- <select id="familiar-as" data-user-id="{{ $user->id }}" style="margin-left: -17px;color:black;padding: 11px 15px;width:min-content">
														<option class="opt" value="" selected>Add as</option>
														<option class="opt" value="Teacher">Teacher</option>
														<option class="opt" value="Student">Student</option>
														<option class="opt" value="Colleague">Colleague</option>
														<option class="opt" value="Friend">Friend</option>
														<option class="opt" value="Family">Family</option>
														<option class="opt" value="Other">Other</option>
														</select> --}}
														@endif
														@endif
														@else
														@php( $requested = $auth_user->request_recieved( $user->id ) )

														@if ( $requested && $requested->count() )
														@if ( $requested->status == 1 ) {{-- This means request is pending --}}
														<button class="btn btn-primary js-connection-btn" data-task="decline-connection-request" data-user-id="{{ $user->id }}">
															<i class="la la-minus"></i> Decline
														</button>

														<button class="btn btn-primary js-connection-btn" data-task="accept-connection-request" data-user-id="{{ $user->id }}">
															<i class="la la-plus"></i> Accept
														</button>
														@else
														@if ( $requested->status == 2 ) {{-- This means request is accepted --}}
														<button class="btn btn-primary js-connection-btn" data-task="remove-connection" data-user-id="{{ $user->id }}">
															<i class='la la-minus'></i> Familiar
														</button>

														{{-- <select id="familiar-as" data-user-id="{{ $user->id }}" style="margin-left: -17px;color:black;padding: 11px 15px;width:min-content">
														<option class="opt" value="" selected>Add as</option>
														<option class="opt" value="Teacher">Teacher</option>
														<option class="opt" value="Student">Student</option>
														<option class="opt" value="Colleague">Colleague</option>
														<option class="opt" value="Friend">Friend</option>
														<option class="opt" value="Family">Family</option>
														<option class="opt" value="Other">Other</option>
														</select> --}}
														@endif
														@endif
														@else
														<button class="btn btn-primary js-connection-btn" data-task="request-connection" data-user-id="{{ $user->id }}">
															<i class="fas fa-user-slash"></i><span class="sp">&nbsp; &nbsp; Not Familiar</span>
														</button>
														@endif
														@endif
														@endif
														@else
														<button class="btn btn-primary js-connection-btn" data-task="request-connection" data-user-id="{{ $user->id }}">
															<i class="fas fa-user-slash"></i><span class="sp">&nbsp; &nbsp; Not Familiar</span>
														</button>
														@endif
														{{-- <button class="btn btn-primary js-connection-btn" data-task="request-connection" data-user-id="{{ $user->id }}">
														<i class="fas fa-user-slash"></i><span class="sp">&nbsp; &nbsp; Not Familiar</span>
														</button> --}}
													</div>

													<div class="col-6 px-1 px-md-auto btab">
														@if ( Auth::user()->id != $user->id )
														<a href="message">
															<button class="btn btn-primary">
																<i class="fas fa-envelope"></i><span class="sp">&nbsp; &nbsp; Message</span>
															</button>
														</a>
														@endif
													</div>
												</div>
											</div>
											<div class="col-0 d-none d-md-block col-md-2 px-0 px-lg-auto">

											</div>
											<div class="col-6 col-md-5 px-0 px-lg-auto visible">
												<div class="row">
													<div class="col-5 col-lg-6 px-1 px-md-auto">
														@if ( Auth::user()->id != $user->id )
														{{-- {{ count(Auth::user()->following( $user->id )) }} --}}
														@if ( Auth::user()->following( $user->id ) == null )
														<button class="btn btn-primary js-follow-btn" data-task="follow-user" data-user-id="{{ $user->id }}">
															Follow
														</button>
														@else
														<button class="btn btn-primary js-follow-btn" data-task="unfollow-user" data-user-id="{{ $user->id }}">
															Unfollow
														</button>
														@endif
														@endif
													</div>
													<div class="col-5 col-lg-5 px-1 px-md-auto">
														<button class="btn btn-primary" data-toggle="modal" data-target="#user-info">
															<i class="fas fa-user"></i><span class="sp mrq">&nbsp; &nbsp; About</span>
														</button>
													</div>
													<div class="col-2 col-lg-1 pl-2 pr-md-4 pr-lg-4">

														<div class="user-account">
															<div class="user" style="text-align: right;">
																<i class="fas fa-ellipsis-v threed" style="color:black;" id="hiddenmenu"></i>
																<!-- <button type="button" class="btn btn-primary"> </button> -->
															</div>
															<div class="cover">
																<div class="user-settingss" id="moreoptions">
																	@if ( Auth::user()->id != $user->id )
																	<p style="margin-bottom:7px;margin-top:5px;"><a class="para js-block-user-btn" data-task="{{ Auth::user()->isBlocked( $user->id ) == null ? "block-user" : "unblock-user" }}" data-user-id="{{ $user->id }}">{{ Auth::user()->isBlocked( $user->id ) == null ? "Block" : "Unblock" }}</a></p>
																	<p style="margin-bottom:7px;margin-top:5px;"><a class="para" data-toggle="modal" data-target="#report-user-modal">Report</a></p>
																	<p style="margin-bottom:7px;margin-top:5px;"><a class="para">Poke</a></p>
																	@else
																	<p style="margin-bottom:7px;margin-top:5px;" data-toggle="modal" data-target="#myModal"><a class="para">Edit Profile</a></p>
																	@endif
																</div>
															</div>
															<!--user-account-settingss end-->
														</div>
													</div>
												</div>
											</div>

										
										</div>
										<!-- options end -->

										<style>.threed{
											/* margin-top: 34px; */
										}</style>

										<div class="user-pro-img">
											<label for="profile-image">

											@if ( $user->profile_image != NULL && $user->profile_image != "")
											<img src="{{asset('images/users/user7.png')}}" style="width: 190px;" alt="profile_image">

											@elseif ($user->profile_image == NULL && $user->profile_image == "" && $user->avatar != NULL && $user->avatar != "" )
											<img src="{{ $user->avatar }}" style="width: 190px;" alt="avatar">

											@elseif($user->avatar == NULL && $user->avatar == "" )
											<img src="{{asset("/storage/uploads/avatar/user.png")}}" style="width: 190px;" alt="default">
											@endif
											<img src="{{asset('/images/camera.png')}}" style="margin-top: -30px;width: 30px;">
											</label>
									<input type="file" id="profile-image" name="profile-image" hidden>
								</div>

























											<!-- <img src="{{asset("/storage/uploads/avatar/$user->profile_image")}}" alt=""> -->


										
										<!--user-pro-img end-->

										<div class="user_pro_status status-1-profile" style="border-bottom:none;">
											<span class="profile-name">{{ $user->name }}</span><br>
											<span class="profile-description">{{ $user->bio }}</span>
										</div>



										<ul class="flw-status spc2">
											<li>
												<span class="line222"></span>
											</li>
										</ul>
										<style>
											.line222 {
												width: 300px;
												border-bottom: 1px solid #e5e5e5;
											}
										</style>


										<div class="container">
											<a href="javascript:;" class="btn btn-just-icon btn-link">
												<i class="fa fa-twitter-square"></i>
											</a>
											<a href="javascript:;" class="btn btn-just-icon btn-link">
												<i class="fa fa-facebook-square"></i>
											</a>
											<a href="javascript:;" class="btn btn-just-icon btn-link">
												<i class="fa fa-google-plus-square"></i>
											</a>
											<a href="javascript:;" class="btn btn-just-icon btn-link">
												<i class="fa fa-linkedin-square"></i>
											</a>
											<a href="javascript:;" class="btn btn-just-icon btn-link">
												<i class="fa fa-youtube-square"></i>
											</a>
										</div>




										<style>
											.fa-facebook-square:hover {
												color: #43609C;
											}

											.fa-twitter-square:hover {
												color: #1DA1F2;
											}

											.fa-google-plus-square:hover {
												color: #DC5246;
											}

											.fa-youtube-square:hover {
												color: #FF0000;
											}

											.fa-linkedin-square:hover {
												color: #0073B0;
											}


											.fa-facebook-square {
												color: #999999;
											}

											.fa-twitter-square {
												color: #999999;
											}

											.fa-google-plus-square {
												color: #999999;
											}

											.fa-youtube-square {
												color: #999999;
											}

											.fa-linkedin-square {
												color: #999999;
											}
										</style>




										<!-- <div class="user_pro_status">
										<div class="container">
											<div class="row">
												<div class="col-lg-4 col-md-4 mx-auto">
													<div class="card spc1">
														<div class="card-body">
															<div class="social-line">
																<span style="font-size: 18px; font-weight:400;">Connections</span>
																<b style="font-size: 18px; font-weight: 600;">&nbsp; &nbsp; 314</b>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> -->
										<ul class="flw-status spc2">
											<li>
												<b>Following</b>
												<span class="spc3">{{ count($user->followings) }}</span>
											</li>
											<li>
												<b>Followers</b>
												<span class="spc3">{{ count($user->followers) }}</span>
											</li>
										</ul>
										<style>
											.flw-status li b {
												font-size: 17px !important;
											}

											.flw-status li span {
												font-size: 17px !important;
											}

											.spc2 {
												padding-top: 20px;
												padding-bottom: 0px;
											}

											.spc3 {
												padding-top: 7px;
											}
										</style>

										<ul class="flw-status spc2">
											<li>
												<span class="line221"></span>
											</li>
										</ul>
										<style>
											.line221 {
												width: 600px;
												border-bottom: 1px solid #e5e5e5;
											}

											.tab-feed ul li.active img {
												filter: none !important;
											}

											.tab-feed ul li img {
												filter: none !important;


											}

											.btn.btn-danger {
												background-color: #5969FC !important;
												border-color: #5969FC !important;
											}

											.btn.btn-danger:hover {
												background-color: #4857db !important;
												border-color: #4857db !important;
											}

											.btn.btn-primary {
												background-color: #5969FC !important;
												border-color: #5969FC !important;
												color: #fff !important;
											}

											.btn.btn-primary:hover {
												background-color: #4857db !important;
												border-color: #4857db !important;
											}

											.tab-feed ul li img {
												width: 25px !important;
												height: 25px !important;
											}

											.tab-feed ul li.active span {
												color: #fff !important;
											}


											.tab-feed ul li span {
												color: #000 !important;
											}

											.tab1 {
												background-color: #00BCD4;
												width: 111px;
												height: auto;
												padding: 13px;
												border-radius: 5px;
												border-style: solid;
												margin: -14px;
											}

											.tab1:hover {
												background-color: #d0d7d8;
											}

											.tab-feed ul li.active div {
												color: #5ab9ea;
												background-color: #007f9c;
											}

											.spc1 {
												margin-top: 0px !important;
												margin-bottom: 0px !important;
											}

											.user_pro_status {
												border-bottom: 0px solid #999999 !important;
											}

											.user_profile {
												padding-bottom: 25px !important;
											}

											.tab123 {
												display: inline-flex !important;
											}
										</style>

										<div class="col-12 col-md-12 col-sm-6 ml-auto mr-auto">
											<div class="profile-tabs">
												<ul class="nav nav-pills nav-pills-icons justify-content-center  tab123" role="tablist">

													<li class="nav-item">
														<a class="nav-link active" href="#dashboard1" role="tab" data-toggle="tab">
															<i class="mate material-icons">view_list</i>Timeline
														</a>
													</li>

													<li class="nav-item">
														<a class="nav-link" href="#dashboard3" role="tab" data-toggle="tab">
															<i class="mate material-icons">school</i> Learning
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#dashboard4" role="tab" data-toggle="tab">
															<i class="mate material-icons">family_restroom</i> Familiarities
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#dashboard5" role="tab" data-toggle="tab">
															<i class="mate material-icons">photo_library</i> Media
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#dashboard6" role="tab" data-toggle="tab">
															<i class="mate material-icons">hourglass_bottom</i> Progress
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#dashboard7" role="tab" data-toggle="tab">
															<i class="mate  material-icons">public</i> Contribution
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#dashboard8" role="tab" data-toggle="tab">
															<i class="mate material-icons">account_box</i> Personal
														</a>
													</li>

													<li class="nav-item">
														<a class="nav-link " href="#dashboard2" role="tab" data-toggle="tab">
															<i class="mate material-icons">text_snippet</i> Activity
														</a>
													</li>
												</ul>


												<div class="main-ws-sec">
													<div class="user-tab-sec">
														<div class="tab-feed">
															<div class="tab-content tab-space">

																<div class="tab-pane active" id="dashboard1">
																	<div class="post-bar postbar-in-profile" style="border:none;box-shadow:none;">
																		@foreach ($user->myPosts as $key => $post)
																		@php( $posted_by = App\User::find( $post->user_id ) )
																		<!-- single post -->
																		<div class="post-bar">
																			<div class="post_topbar">
																				<div class="usy-dt">
																					<img src="{{asset("/storage/uploads/avatar/$posted_by->profile_image")}}" width="50px" alt="">
																					<div class="usy-name">
																						<h3>{{ $posted_by->name }}</h3>
																						<span><img src="images/clock.png" alt="">{{ date( "d M, Y H:i A", strtotime( $posted_by->updated_at ) ) }}</span>
																					</div>
																				</div>
																				<div class="ed-opts">
																					<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
																					<ul class="ed-options">
																						<li><a href="#" title="">Add as Friend</a></li>
																						<li><a href="#" title="">Report Post</a></li>
																						<li><a href="#" title="">Not Intrested</a></li>
																					</ul>
																				</div>
																			</div>
																			<div class="epi-sec mb-3">
																				@if ( $post->tag_connections != "" )
																				<ul class="descp">
																					<li><span>Tagged : </span></li>
																					@foreach ( json_decode( $post->tag_connections ) as $tagged_user_id)
																					<li><a href="{{ url("/userprofile/$tagged_user_id") }}" title="">{{ ucwords(App\User::find( $tagged_user_id )->name) }}</a></li>
																					@endforeach
																				</ul>
																				@endif
																				{{-- <li><img src="images/icon8.png" alt=""><span>Programmer</span></li>
																						<li><img src="images/icon9.png" alt=""><span>India</span></li> --}}
																				<ul class="bk-links">
																					<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
																					<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
																				</ul>
																			</div>
																			<div class="job_descp">
																				@if ( $post->type == "multimedia" )
																				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
																					<div class="carousel-inner">
																						@foreach ($post->attachments as $key => $attachment)
																						<div class="carousel-item {{ $key == 0 ? "active" : "" }}">
																							@if ( $attachment->type == "image" )
																							<img src="{{ asset("/storage/post_attachments/$attachment->attachment") }}" alt="" style="width:100%">
																							@endif

																							@if ( $attachment->type == "video" )
																							<video width="100%" controls>
																								<source src="{{ asset("/storage/post_attachments/$attachment->attachment") }}" type="video/mp4">
																								Your browser does not support the video tag.
																							</video>
																							@endif
																						</div>
																						@endforeach
																					</div>

																					@if ( count( $post->attachments ) > 1 )
																					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
																						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																						<span class="sr-only">Previous</span>
																					</a>

																					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
																						<span class="carousel-control-next-icon" aria-hidden="true"></span>
																						<span class="sr-only">Next</span>
																					</a>
																					@endif
																				</div>
																				@endif
																				<p>{{ $post->post_body }}</a></p>

																			</div>
																			<div class="job-status-bar">
																				<ul class="like-com">
																					<li>
																						<a class="js-like-btn" data-post-id="{{ $post->post_id }}"><i class="fas fa-heart" style="color:red;"></i> Like</a>
																						<img src="images/liked-img.png" alt="">
																						<span>{{ count((array)$post->likes) }}</span>
																					</li>
																					<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment ({{ count($post->comments) }})</a></li>
																				</ul>
																			</div>

																		</div>
																		@endforeach
																	</div>
																</div>

																<div class="tab-pane" id="dashboard3">
																	<div class="product-feed-tab p-3 current" id="activity-dd">
																		<div class="post-bar postbar-in-profile" style="border:none;box-shadow:none;">
																			<div class="row">
																				<div class="user-profile-ov">
																					<h3>English Language</h3>
																					<h4>Beginner</h4>
																					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
																				</div>
																				<!--user-profile-ov end-->
																				<div class="user-profile-ov">
																					<h3>PHP</h3>
																					<h4>Expert</h4>
																					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
																				</div>
																				<!--user-profile-ov end-->
																				<div class="user-profile-ov">
																					<h3>JAVA</h3>
																					<h4>Expert</h4>
																					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>




																<div class="tab-pane" id="dashboard4">
																	<div class="product-feed-tab p-3 current" id="activity-dd">
																		<div class="post-bar postbar-in-profile" style="border:none;box-shadow:none;">
																			<div class="row">
																				@php( $familiarities_array = $user->familiarities() )
																				@php( $familiarities = [ "Teacher", "Student", "Colleague", "Friend", "Family", "Others", "Uncategorized" ] )
																				<ul class="nav nav-tabs" id="myTab" role="tablist">
																					@foreach ($familiarities as $key => $familiarity)
																					<li class="nav-item" role="presentation">
																						<a class="nav-link {{ $key == 0 ? "active" : "" }}" id="{{ $familiarity }}-tab" data-toggle="tab" href="#familiar_as_{{ $familiarity }}" role="tab" aria-controls="familiar_as_{{ $familiarity }}" aria-selected="true">{{ $familiarity }}</a>
																					</li>
																					@endforeach
																				</ul>
																				<div class="tab-content" id="myTabContent">
																					@foreach ($familiarities as $key => $familiarity)
																					<div class="tab-pane p-3 fade show {{ $key == 0 ? "active" : "" }}" id="familiar_as_{{ $familiarity }}" role="tabpanel" aria-labelledby="{{ $familiarity }}-tab">
																						<div class="row">
																							@if ( array_key_exists( $familiarity , $familiarities_array ) )
																							@foreach ($familiarities_array[$familiarity] as $key => $connection)
																							@if ( $connection->user_one_id == $user->id )
																							@php( $connected_user = App\User::find( $connection->user_two_id ) )
																							@else
																							@php( $connected_user = App\User::find( $connection->user_one_id ) )
																							@endif
																							<div class="col-sm-4">
																								<a href='{{ url("/userprofile/$connected_user->id") }}'>
																									<div class="suggestion-usd">
																										<img src="{{asset("/storage/uploads/avatar/$connected_user->profile_image")}}" width="35px" alt="">
																										<div class="sgt-text">
																											<h4>{{ $connected_user->name }}</h4>
																											<p>{{ $connected_user->bio }}</p>
																										</div>
																									</div>
																								</a>
																							</div>
																							@endforeach
																							@else
																							<div class="col-12">
																								<p class="text-center">No {{ $familiarity }} available</p>
																							</div>
																							@endif
																						</div>
																					</div>
																					@endforeach
																				</div>
																			</div>
																		</div>
																	</div>
																</div>








																<div class="tab-pane" id="dashboard5">
																	<div class="product-feed-tab p-3 current" id="activity-dd">
																		<div class="post-bar postbar-in-profile" style="border:none;box-shadow:none;">
																			<div class="row">

																				@foreach ($user->media_files as $file)
																				<div class="col-sm-6 pb-4">
																					@if ( $file->type == "image" )
																					<img src="{{ asset("/storage/post_attachments/$file->attachment") }}" width="100%" alt="">
																					@endif

																					@if ( $file->type == "video" )
																					<video width="100%" controls>
																						<source src="{{ asset("/storage/post_attachments/$file->attachment") }}" type="video/mp4">
																						Your browser does not support the video tag.
																					</video>
																					@endif
																				</div>
																				@endforeach

																			</div>
																		</div>
																	</div>
																</div>



																<div class="tab-pane" id="dashboard6">
																	<div class="product-feed-tab p-3 current" id="activity-dd">
																		<div class="post-bar postbar-in-profile" style="border:none;box-shadow:none;">
																			<div class="row">

																				<div class="posts-section">
																					<div class="post-bar postbar-in-profile">
																						<div class="post_topbar">
																							<div class="usy-dt">
																								<img src="{{asset("/images/resources/us-pic.png")}}" alt="">
																								<div class="usy-name">
																									<h3>John Doe</h3>
																									<span><img src="{{asset("/images/clock.png")}}" alt="">3 min ago</span>
																								</div>
																							</div>
																							<div class="ed-opts">
																								<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
																								<ul class="ed-options">
																									<li><a href="#" title="">Add as Friend</a></li>
																									<li><a href="#" title="">Report Post</a></li>
																									<li><a href="#" title="">Not Intrested</a></li>
																								</ul>
																							</div>
																						</div>
																						<div class="epi-sec">
																							<ul class="descp">
																								<li><img src="{{asset("/images/icon8.png")}}" alt=""><span>Programmer</span></li>
																								<li><img src="{{asset("/images/icon9.png")}}" alt=""><span>India</span></li>
																							</ul>
																							<ul class="bk-links">
																								<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
																								<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
																							</ul>
																						</div>
																						<div class="job_descp">
																							<img src="{{asset("/images/resources/adver-img.png")}}" alt="" style="width:100%">
																							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>

																						</div>
																						<div class="job-status-bar">
																							<ul class="like-com">
																								<li>
																									<a href="#"><i class="fas fa-heart" style="color:red;"></i> Like</a>
																									<img src="{{asset("/images/liked-img.png")}}" alt="">
																									<span>25</span>
																								</li>
																								<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
																							</ul>
																						</div>

																					</div>
																					<!--post-bar end-->
																					<div class="process-comm">
																						<div class="spinner">
																							<div class="bounce1"></div>
																							<div class="bounce2"></div>
																							<div class="bounce3"></div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>






																<div class="tab-pane" id="dashboard7">
																	<div class="product-feed-tab p-3 current" id="activity-dd">
																		<div class="post-bar postbar-in-profile" style="border:none;box-shadow:none;">
																			<div class="row">
																				<div class="posts-section">
																					<div class="post-bar postbar-in-profile" style="border:none;">
																						<div class="user-profile-ov">
																							<h3>Contrubution 1</h3>
																							<h4>Master of Computer Science</h4>
																							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
																						</div>
																						<!--user-profile-ov end-->
																						<div class="user-profile-ov">
																							<h3>Contrubution 3</h3>
																							<h4>Computer Science</h4>
																							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
																						</div>
																						<!--user-profile-ov end-->
																						<div class="user-profile-ov">
																							<h3>Contrubution 3</h3>
																							<h4>Programming</h4>
																							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
																						</div>
																						<!--user-profile-ov end-->

																					</div>
																					<!--post-bar end-->
																					<div class="process-comm">
																						<div class="spinner">
																							<div class="bounce1"></div>
																							<div class="bounce2"></div>
																							<div class="bounce3"></div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>






																<div class="tab-pane" id="dashboard8">
																	<div class="product-feed-tab p-3 current" id="activity-dd">
																		<div class="post-bar postbar-in-profile" style="border:none;box-shadow:none;">
																			<div class="row">

																				<div class="post-bar postbar-in-profile" style="border:none;box-shadow:none;">
																					@if ( Auth::user()->id == $user->id )
																					<div class="row justify-content-end mb-3">
																						<button class="btn" style="background:#40b7f5; color:white;" data-toggle="modal" data-target="#add_note_form_container"> <b><i class="la la-plus"></i></b> Add Note</button>
																					</div>
																					@endif

																					<div class="row" id="user-notes">
																						@foreach ($user->notes as $note)
																						@include("components.user_note", [ "note" => $note ] )
																						@endforeach
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>



																<div class="tab-pane" id="dashboard2">
																	<div class="post-bar postbar-in-profile" style="border:none;box-shadow:none;">
																		<div class="row">
																			@foreach ($user->activities as $activity)
																			<div class="col-sm-6 col-md-4">
																				<div class="user-profile-ov">
																					<h3>{{ ucwords( str_replace( '_' , " ", $activity->type ) ) }}</h3>
																					<div class="line"></div>
																					@if ( $activity->type == "post_created" )
																					<p>{{ $user->name }} added a post on {{ date("d M, Y H:i A",strtotime($activity->created_at)) }}</p>
																					@endif

																					@if ( $activity->type == "post_liked" )
																					<p>{{ $user->name }} liked a post on {{ date("d M, Y H:i A",strtotime($activity->created_at)) }}</p>
																					@endif

																					@if ( $activity->type == "requested_connection" )
																					<p>{{ $user->name }} requested a connection on {{ date("d M, Y H:i A",strtotime($activity->created_at)) }}</p>
																					@endif

																					@if ( $activity->type == "connection_request_cancelled" )
																					<p>{{ $user->name }} cancelled a connection request on {{ date("d M, Y H:i A",strtotime($activity->created_at)) }}</p>
																					@endif

																					@if ( $activity->type == "connection_request_declined" )
																					<p>{{ $user->name }} declined a connection request on {{ date("d M, Y H:i A",strtotime($activity->created_at)) }}</p>
																					@endif

																					@if ( $activity->type == "connection_request_accepted" )
																					<p>{{ $user->name }} accepted a connection request on {{ date("d M, Y H:i A",strtotime($activity->created_at)) }}</p>
																					@endif

																					@if ( $activity->type == "connection_removed" )
																					<p>{{ $user->name }} removed a connection on {{ date("d M, Y H:i A",strtotime($activity->created_at)) }}</p>
																					@endif

																					@if ( $activity->type == "familiarity_updated" )
																					<p>{{ $user->name }} updated familiarity with "{{ App\User::find( json_decode($activity->activity_object)->with_user )->name }}" on {{ date("d M, Y H:i A",strtotime($activity->created_at)) }}</p>
																					@endif
																				</div>
																			</div>
																			@endforeach
																		</div>
																	</div>
																</div>



															</div>
														</div>

													</div>
												</div>
											</div>
















											{{-- loader --}}
											{{-- <div class="process-comm">
											<div class="spinner">
												<div class="bounce1"></div>
												<div class="bounce2"></div>
												<div class="bounce3"></div>
											</div>
										</div> --}}
										</div>
										<!--main-ws-sec end-->

									</div>
									<!--user_profile end-->

								</div>
								<!--main-left-sidebar end-->
							</div>
						</div>
					</div>
				</div>
			</main>

			<!---------- modal start       --------->
			<div class="container" style="margin-top: 60px;">

				<!-- Button to Open the Modal -->

				<div class="modal" id="user-info">
					<div class="modal-dialog  modal-md">
						<div class="modal-content" style="margin-top: 70px; z-index:999999999;">

							<!-- Modal Header -->
							<div class=" modal-header myhdcl">
								<p class="modal-title profiletxt  profilep">User Profile
									<span class="btn pull-right p-0" data-dismiss="modal">&nbsp;&nbsp;&times;&nbsp;&nbsp;</span>
								</p>
							</div>


							<!-- Modal body -->
							<div class="modal-body">
								<div class="row mb-3">
									<div class="">
										@if ( $user->cover_image != NULL && $user->cover_image != "" )
										<img src="{{asset("/storage/uploads/avatar/$user->cover_image")}}" width="100%" alt="">
										@else
										<img src="{{asset("/images/resources/cover-img.jpg")}}" width="100%" alt="">
										@endif
									</div>
									<div class="pull-left ml-3" style="width: 25%">
										<!-- 90px size profile_image/avatar/default  -->
										@if ( $user->profile_image != NULL && $user->profile_image != "")
										<img src="{{asset("/storage/uploads/avatar/$user->profile_image")}}" style="width: 90px; border-radius: 100%;" alt="profile_image">

										@elseif ($user->profile_image == NULL && $user->profile_image == "" && $user->avatar != NULL && $user->avatar != "" )
										<img src="{{ $user->avatar }}" style="width: 90px; border-radius: 100%;" alt="avatar">

										@elseif($user->avatar == NULL && $user->avatar == "" )
										<img src="{{asset("/storage/uploads/avatar/user.png")}}" style="width: 90px; border-radius: 100%;" alt="default">
										@endif
										<!-- <img src="{{asset("/storage/uploads/avatar/$user->profile_image")}}" width="100%" style="margin-top: -50%;margin-top: -50%;border-radius: 50%;border: 5px solid white;" alt=""> -->
									</div>
								</div>

								<!-- / -->
								<div class="card">
									<div class="card-header">
										<div class="card-text">
											<p class="category"><i class="fa fa-user ico1"></i>&nbsp; &nbsp;Name</p>
										</div>
									</div>
									<div class="card-body">
										<i class="info">{{ $user->name }}</i>
									</div>
								</div>
								<br>

								<!--  -->
								<div class="card">
									<div class="card-header">
										<div class="card-text">
											<p class="category"><i class="fa fa-id-card-o ico1"></i>&nbsp; &nbsp; Bio</p>
										</div>
									</div>
									<div class="card-body">
										<i class="info">{{ $user->bio }}</i>
									</div>
								</div>
								<br>

								<!--  -->
								<div class="card">
									<div class="card-header ">
										<div class="card-text">
											<p class="category"><i class="fa fa-phone-square ico1"></i>&nbsp; &nbsp; Phone</p>
										</div>
									</div>
									<div class="card-body">
										<i class="info">{{ $user->phone }}</i>
									</div>
								</div>

								<br>

								<!--  -->
								<div class="card">
									<div class="card-header ">
										<div class="card-text">
											<p class="category"><i class="fa fa-university ico1"></i>&nbsp; &nbsp;College Name</p>
										</div>
									</div>
									<div class="card-body">
										<i class="info">{{ $user->college_name }}</i>
									</div>
								</div>
								<br>


								<!--  -->
								<div class="card">
									<div class="card-header">
										<div class="card-text">
											<p class="category"><i class="fa fa-map-marker ico1"></i>&nbsp; &nbsp;City</p>
										</div>
									</div>
									<div class="card-body">
										<i class="info">{{ $user->city }}</i>
									</div>
								</div>
								<!--  -->
								<br>


								<div class="card">
									<div class="card-header">
										<div class="card-text">
											<p class="category"><i class="fa fa-globe ico1"></i>&nbsp; &nbsp;Website</p>
										</div>
									</div>
									<div class="card-body">
										<i class="info">{{ $user->website }}</i>
									</div>
								</div>

								<!--  -->
								<br>

								<div class="card">
									<div class="card-header">
										<div class="card-text">
											<p class="category"><i class="fa fa-graduation-cap ico1"></i>&nbsp; &nbsp;School Name</h4>
										</div>
									</div>
									<div class="card-body">
										<i class="info">{{ $user->school_name }}</i>
									</div>
								</div>
								<br>

								<!--  -->
								<div class="card">
									<div class="card-header ">
										<div class="card-text">
											<p class="category"><i class="fa fa-university ico1"></i>&nbsp; &nbsp;College Name</p>
										</div>
									</div>
									<div class="card-body">
										@if ( $user->college_name != "" )
										<i class="info">{{ $user->college_name }}</i>
										@endif
									</div>
								</div>
								<br>

								<!--  -->
								<div class="card">
									<div class="card-header">
										<div class="card-text">
											<p class="category"><i class="fa fa-calendar ico1"></i>&nbsp; &nbsp;Date of Birth</p>
										</div>
									</div>
									<div class="card-body">
										<i class="info">{{ date("d M, Y",strtotime($user->dob)) }}</i>
									</div>
								</div>

							</div>
						</div>

						<!-- Modal footer -->


					</div>
				</div>
			</div>



			{{-- report user modal --}}
			<div class="modal" id="report-user-modal">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content" style="margin-top: 70px; z-index:999999999;">
						<p class="modal-title px-3"><span class="btn pull-right p-0" data-dismiss="modal">&times;</span></p>
						<form id="report_user_form" class="m-3">

							<input type="hidden" id="user-id" value="{{ $user->id }}">

							<div class="row my-3">
								<div class="col-12">
									<div class="form-group mt-2">
										<select name="problems[]" id="problems" class="form-control select2-class" multiple="multiple" required>
											<option value="Pretending to be someone">Pretending to be someone</option>
											<option value="Fake Account">Fake Account</option>
											<option value="Fake Name">Fake Name</option>
											<option value="Posting inappropriate Things">Posting inappropriate Things</option>
											<option value="Something else">Something else</option>
										</select>
									</div>
								</div>
							</div>

							<div class="row my-3">
								<div class="col-12">
									<div class="form-group">
										<textarea class="form-control" id="comment" rows="5" placeholder="Add a comment ..."></textarea>
									</div>
								</div>
							</div>

							<div class="row my-3">
								<div class="col-12">
									<input type="submit" value="Report" class="btn btn-primary btn-block">
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>

			<div class="modal" id="add_note_form_container">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content" style="margin-top: 70px; z-index:999999999;">
						<p class="modal-title px-3"><span class="btn pull-right p-0" data-dismiss="modal">&times;</span></p>
						<form id="add_note_form" class="m-3">
							<div class="form-group">
								<input type="text" class="form-control" id="note_title" placeholder="Title" required>
							</div>

							<div class="form-group">
								<textarea class="form-control" id="note_body" rows="5" placeholder="Add a note ..."></textarea>
							</div>

							<input type="submit" value="Add" class="btn btn-primary btn-block">
						</form>
					</div>
				</div>
			</div>



			<!-- The Modal -->
			<div class="modal" id="myModal">
				<div class="modal-dialog  modal-md">
					<div class="modal-content" style="margin-top: 70px; z-index:999999999;">

						<!-- Modal Header -->
						<div class=" modal-header myhdcl">
							<p class="modal-title profiletxt">Edit Profile
								<span class="btn pull-right p-0" data-dismiss="modal">&nbsp;&nbsp;&times;&nbsp;&nbsp;</span></p>
							</p>
						</div>


						<!-- Modal body -->
						<div class="modal-body">
							<div class="row mb-3">
								<div>
									<label for="cover-image">
										@if ( $user->cover_image != NULL && $user->cover_image != "" )
										<img src="{{asset("/storage/uploads/avatar/$user->cover_image")}}" width="100%" alt="">
										@else
										<img src="{{asset("/images/resources/cover-img.jpg")}}" width="100%" alt="">
										@endif

										<img src="{{asset('/images/camera.png')}}" style="margin-top: -53%;margin-left: -10px;width: 35px;">
									</label>
									<input type="file" id="cover-image" name="cover-image" hidden>
								</div>
								<div class="pull-left ml-3" style="width: 25%">
									<label for="profile-image">

										<!-- 90px size profile_image/avatar/default  -->
										@if ( $user->profile_image != NULL && $user->profile_image != "")
										<img src="{{asset("/storage/uploads/avatar/$user->profile_image")}}" style="width: 90px; border-radius: 100%;" alt="profile_image">

										@elseif ($user->profile_image == NULL && $user->profile_image == "" && $user->avatar != NULL && $user->avatar != "" )
										<img src="{{ $user->avatar }}" style="width: 90px; border-radius: 100%;" alt="avatar">

										@elseif($user->avatar == NULL && $user->avatar == "" )
										<img src="{{asset("user.png")}}" style="width: 90px; border-radius: 100%;" alt="default">
										@endif
										<!-- <img src="{{asset("/storage/uploads/avatar/$user->profile_image")}}" width="100%" style="margin-top: -50%;margin-top: -50%;border-radius: 50%;border: 5px solid white;" alt=""> -->


										<img src="{{asset('/images/camera.png')}}" style="margin-top: -30px;width: 30px;">
									</label>
									<input type="file" id="profile-image" name="profile-image" hidden>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="main-left-sidebar">
										<div class="">

											<!-- options -->
											<div class="row buttons-links">
												<div class="col-6 col-md-5 px-0 px-lg-auto visible">
													<div class="row">
													</div>
												</div>

												<div class="col-6 col-md-5 px-0 px-lg-auto visible">
													<div class="row">

														<script type="text/javascript">
															var resize = null;
															// Changing image on front-end
															function add_new_image(resize, cover_image = false) {
																resize.croppie('result', {
																	type: 'canvas',
																	size: 'viewport'
																}).then(function(img) {
																	$.ajax({
																		url: "{{url('/update-user-profile')}}",
																		type: "POST",
																		data: {
																			"cover_image": cover_image,
																			"image": img
																		},
																		success: function(response) {
																			if (response.success) {
																				if (cover_image) {
																					$("#myModal #cover-image").siblings("label").find("img").attr("src", response.src);
																					$("body #image-upload").remove();
																				} else {
																					$("#myModal #profile-image").siblings("label").find("img").attr("src", response.src);
																					$("body #image-upload").remove();
																				}

																				location.reload();
																			}
																		}
																	});
																});
															}
															$(document).ready(function() {
																$('#hiddenmenu').mouseover(function() {
																	$("#moreoptions").toggleClass('styleshow');

																});

																$(".select2-class").select2({
																	width: "100%",
																	placeholder: "Please select a problem to continue"
																});

																$(document).click(function(e) {
																	if ($(e.target).closest(".cover").length ===
																		0) {
																		$("#moreoptions").removeClass('styleshow');

																	}
																});

																$('#moredetails').click(function() {
																	$("#mainprofile").toggleClass('showdetails');
																});

																$.ajaxSetup({
																	headers: {
																		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
																	}
																});

																// For changing profile image in userprfile page
																$(document).on("change", "#myModal #profile-image", function(e) {
																	$("body").append(`
																		<div id="image-upload" style="width:100%; height:100vh; position:fixed; top:0; background-color:rgba(0,0,0,0.9); z-index:9999999;">
																			<div class="row">
																				<div class="col d-flex justify-content-center" >
																					<div class="upload-profile-image"></div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col d-flex justify-content-center" >
																					<input type="button" class="btn btn-danger" value="Close" onclick="$('body #image-upload').remove()">
																					<input type="button" class="btn btn-success" value="Save Profile Image" onclick="add_new_image( resize )">
																				</div>
																			</div>
																		</div>
																		`);
																	resize = $('body #image-upload .upload-profile-image').croppie({
																		enableExif: true,
																		enableOrientation: true,
																		viewport: { // Default { width: 100, height: 100, type: 'square' } 
																			width: 200,
																			height: 200,
																			type: 'square' //square
																		},
																		boundary: {
																			width: 300,
																			height: 300
																		}
																	});

																	var reader = new FileReader();
																	reader.onload = function(e) {
																		resize.croppie('bind', {
																			url: e.target.result
																		}).then(function() {});
																	}

																	reader.readAsDataURL(this.files[0]);
																});

																// For changing cover image in userprfile page
																$(document).on("change", "#myModal #cover-image", function(e) {
																	$("body").append(`
																	<div id="image-upload" style="width:100%; height:100vh; position:fixed; top:0; background-color:rgba(0,0,0,0.9); z-index:9999999;">
																		<div class="row">
																			<div class="offset-sm-2 col-sm-8" >
																				<div class="upload-cover-image"></div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col d-flex justify-content-center" >
																				<input type="button" class="btn btn-danger" value="Close" onclick="$('body #image-upload').remove()">
																				<input type="button" class="btn btn-success" value="Save Cover Image" onclick="add_new_image( resize , true )">
																			</div>
																		</div>
																	</div>
																	`);
																	resize = $('body #image-upload .upload-cover-image').croppie({
																		enableExif: true,
																		enableOrientation: true,
																		viewport: { // Default { width: 100, height: 100, type: 'square' } 
																			width: 600,
																			height: 300,
																			// type: 'square' //square
																		},
																		boundary: {
																			width: 600,
																			height: 300
																		}
																	});

																	var reader = new FileReader();
																	reader.onload = function(e) {
																		resize.croppie('bind', {
																			url: e.target.result
																		}).then(function() {});
																	}

																	reader.readAsDataURL(this.files[0]);
																});

																// For adding notes
																$(document).on("submit", "#add_note_form", function(e) {
																	e.preventDefault();

																	var title = $(this).find("#note_title");
																	var body = $(this).find("#note_body");

																	$.ajax({
																		url: "{{ url('/user-notes') }}",
																		type: "POST",
																		data: {
																			"title": title.val(),
																			"body": body.val(),
																		},

																		success: function(response) {
																			if (response.success == true) {
																				title.val("");
																				body.val("");
																				$("#dashboard8 #user-notes").prepend(response.note);
																			} else {
																				alert(response.message);
																			}
																		}
																	});
																});

																$(document).on("click", ".delete_note_btn", function() {
																	if (confirm("Do you really want to delete?")) {
																		var note_id = $(this).data("note-id");

																		$.ajax({
																			url: `{{ url('/user-notes/') }}/${note_id}`,
																			context: this,
																			type: "POST",
																			data: {
																				"_method": "DELETE"
																			},

																			success: function(response) {
																				if (response.success == true) {
																					var note = $(this).parents(".user-profile-ov");
																					note.slideUp("slow", function() {
																						note.remove();
																					});
																				} else {
																					alert(response.message);
																				}
																			}
																		});
																	}
																});

																$(document).on("click", ".js-connection-btn", function() {
																	var task = $(this).data("task");
																	var user_id = $(this).data("user-id");

																	var button_text = $(this).html();
																	$(this).html(`
																	Loading &nbsp;
																	<div class="spinner-border spinner-border-sm" role="status">
																		<span class="sr-only">Loading...</span>
																	</div>
																	`);

																	$.ajax({
																		url: `{{url("")}}/${task}/${user_id}`,
																		context: this,
																		type: "POST",

																		success: function(response) {
																			if (response.success == true) {
																				if (task == "request-connection") {
																					$(this).data("task", "cancel-connection-request");
																					$(this).html("<i class='la la-minus'></i> Cancel Request");
																				} else if (task == "cancel-connection-request") {
																					$(this).data("task", "request-connection");
																					$(this).html(`<i class="fas fa-user-slash"></i><span class="sp">&nbsp; &nbsp; Not Familiar</span>`);
																				} else if (task == "decline-connection-request") {
																					$(this).data("task", "request-connection");
																					$(this).html(`<i class="fas fa-user-slash"></i><span class="sp">&nbsp; &nbsp; Not Familiar</span>`);

																					$(this).parents().find("button[data-task='accept-connection-request']").remove();
																				} else if (task == "accept-connection-request") {
																					$(this).data("task", "request-connection");
																					$(this).html("<i class='la la-minus'></i> Familiar");

																					$(this).append(`

																					`);

																					$(this).parents().find("button[data-task='decline-connection-request']").remove();
																				} else if (task == "remove-connection") {
																					$(this).data("task", "request-connection");
																					$(this).html(`<i class="fas fa-user-slash"></i><span class="sp">&nbsp; &nbsp; Not Familiar</span>`);
																				}
																			} else {
																				alert(response.message);

																				$(this).html(button_text);
																			}
																		}
																	});
																});

																$(document).on("change", "#familiar-as", function() {
																	var user_id = $(this).data("user-id");
																	var familiar_as = $(this).val();
																	console.log("reached");

																	if (familiar_as != "") {
																		$.ajax({
																			url: `{{ url('/update-familiarity') }}/${user_id}`,
																			type: "POST",
																			data: {
																				familiar_as: familiar_as,
																			},

																			success: function(response) {

																				if (response.success) {
																					location.reload();
																				} else {
																					alert(response.message);
																				}
																			}
																		});
																	}
																});

																$(".js-follow-btn").on('click', function() {
																	var id = $(this).data("user-id");
																	var task = $(this).data("task");

																	var btn_html = $(this).html();
																	$(this).html(`
																	Loading &nbsp;
																	<div class="spinner-border spinner-border-sm" role="status">
																		<span class="sr-only">Loading...</span>
																	</div>
																	`);

																	$.ajax({
																		url: `{{ url('') }}/${task}/${id}`,
																		context: this,
																		type: "POST",

																		success: function(response) {
																			if (response.success) {
																				if (task == "follow-user") {
																					$(this).html(`Unfollow`);
																				} else {
																					$(this).html(`Follow`);
																				}
																				location.reload();
																			} else {
																				alert(response.message);

																				$(this).html(btn_html);
																			}
																		}
																	});
																});

																$(document).on("click", ".js-block-user-btn", function() {
																	let task = $(this).data("task");
																	if (task == "block-user") {
																		if (!confirm("Do you really want to block this user?")) {
																			return;
																		}
																	} else {
																		if (!confirm("Do you really want to unblock this user?")) {
																			return;
																		}
																	}

																	let user_id = $(this).data("user-id");

																	$.ajax({
																		url: `{{ url("") }}/${task}/${user_id}`,
																		context: this,
																		type: "POST",

																		success: function(response) {
																			if (response.success) {
																				if (task == "block-user") {
																					$(this).html("Unblock");
																					$(this).data("task", "unblock-user");
																				} else {
																					$(this).html("Block");
																					$(this).data("task", "block-user");
																				}
																			} else {
																				alert(response.message);
																			}
																		}
																	});
																});

																$(document).on("submit", "#report_user_form", function(e) {
																	e.preventDefault();

																	let problems = $(this).find("#problems").val();
																	let comment = $(this).find("#comment").val();
																	let user_id = $(this).find("#user-id").val();

																	$.ajax({
																		url: `{{ url('/report-user') }}`,
																		context: this,
																		type: "POST",
																		data: {
																			"problems": problems,
																			"comment": comment,
																			"user_id": user_id,
																		},

																		success: function(response) {
																			alert(response.message);
																			// location.reload();
																		}
																	});

																});
															});
														</script>

													</div>
												</div>
											</div>
											<!-- options end -->





											<form enctype="multipart/form-data" action="{{url("/users/$user->id")}}" method="POST">

												@if ( isset( $user ) )
												@method("PUT")
												@endif
												@csrf


												<!-- edit details -->

												<!-- / -->
												<div class="card">
													<div class="card-header">
														<div class="card-text">
															<p class="category"><i class="fa fa-user ico1"></i>&nbsp; &nbsp;Name</p>
														</div>
													</div>
													<div class="card-body">
														<input class="form-control" class="myinput" type="text" name="username" placeholder="Name" value="{{ old('username') ? old('username') : $user->name }}">
														@error('name')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
												</div>



												<!--  -->
												<div class="card">
													<div class="card-header">
														<div class="card-text">
															<p class="category"><i class="fa fa-id-card-o ico1"></i>&nbsp; &nbsp; Bio</p>
														</div>
													</div>
													<div class="card-body">
														<input type="text" class=" form-control" height="50px" name="bio" placeholder="{{ old('bio') ? old('bio') : $user->bio }}"></input>
														@error('bio')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
												</div>


												<!--  -->
												<div class="card">
													<div class="card-header">
														<div class="card-text">
															<p class="category"><i class="fa fa-map-marker ico1"></i>&nbsp; &nbsp;City</p>
														</div>
													</div>
													<div class="card-body">
														<input class="form-control" type="text" name="city" placeholder="" value="{{ old('city') ? old('city') : $user->city }}">
														@error('city')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
												</div>



												<!--  -->


												<div class="card">
													<div class="card-header">
														<div class="card-text">
															<p class="category"><i class="fa fa-globe ico1"></i>&nbsp; &nbsp;Website</p>
														</div>
													</div>
													<div class="card-body">

														<input type="text" class="form-control" name="website" placeholder="" value="{{ old('website') ? old('website') : $user->website }}">
														@error('website')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
												</div>

												<!--  -->

												<div class="card">
													<div class="card-header">
														<div class="card-text">
															<p class="category"><i class="fa fa-graduation-cap ico1"></i>&nbsp; &nbsp;School Name</h4>
														</div>
													</div>
													<div class="card-body">
														<input type="text" class="form-control" name="school_name" placeholder="" value="{{ old('school_name') ? old('school_name') : $user->school_name }}">
														@error('school_name')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
												</div>


												<!--  -->
												<div class="card">
													<div class="card-header ">
														<div class="card-text">
															<p class="category"><i class="fa fa-university ico1"></i>&nbsp; &nbsp;College Name</p>
														</div>
													</div>
													<div class="card-body">
														<input type="text" class="form-control" name="college_name" placeholder="" value="{{ old('college_name') ? old('college_name') : $user->college_name }}">
														@error('college_name')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
												</div>







												<!--  -->
												<div class="card">
													<div class="card-header">
														<div class="card-text">
															<p class="category"><i class="fa fa-calendar ico1"></i>&nbsp; &nbsp;Date of Birth</p>
														</div>
													</div>
													<div class="card-body">
														<!-- input with datetimepicker -->
														<div class="form-group">
															<label class="label-control">Datetime Picker</label>

															<input class="form-control datetimepicker" type="date" name="dob" placeholder="" value="{{ old('dob') ? old('dob') : $user->dob }}">
															@error('dob')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
															@enderror
														</div>
													</div>
												</div>



										</div>
									</div>
									<script>
										$('.datetimepicker').datetimepicker({
											icons: {
												time: "fa fa-clock-o",
												date: "fa fa-calendar",
												up: "fa fa-chevron-up",
												down: "fa fa-chevron-down",
												previous: 'fa fa-chevron-left',
												next: 'fa fa-chevron-right',
												today: 'fa fa-screenshot',
												clear: 'fa fa-trash',
												close: 'fa fa-remove'
											}
										});
									</script>








									<div class="modal-footer">
										<button type="submit" class="btn mybtn">Update</button>
										<button style="float: left;" type="button" class="btn mybtn" data-dismiss="modal">Close</button>
									</div>
									</form>

								</div>
								<!--user_profile end-->

							</div>
							<!--main-left-sidebar end-->
						</div>
					</div>
				</div>

				<!-- Modal footer -->


			</div>
		</div>
	</div>

	</div>
	<!---------- modal end       --------->


	@include('footer')
	<!--footer end-->


	<div class="overview-box" id="create-portfolio">
		<div class="overview-edit">
			<h3>Create Portfolio</h3>
			<form>
				<input type="text" name="pf-name" placeholder="Portfolio Name">
				<div class="file-submit">
					<input type="file" name="file">
				</div>
				<div class="pf-img">
					<img src="{{asset("/images/resources/np.png")}}" alt="">
				</div>
				<input type="text" name="website-url" placeholder="htp://www.example.com">
				<button type="submit" class="save">Save</button>
				<button type="submit" class="cancel">Cancel</button>
			</form>
			<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
		</div>
		<!--overview-edit end-->
	</div>
	<!--overview-box end-->



	</div>
	<!--theme-layout end-->


	<script type="text/javascript" src="{{asset('/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/scroll.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/script.js')}}"></script>

	<!---- modal----->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!------modal-------->

	<!-- relax js  -->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.0.0/rellax.min.js"></script>

	<script type="text/javascript" src="{{asset('/js/parallax.min.js')}}"></script>


	<script src="{{asset('/js/')}}" type="text/javascript"></script>

	<!--   Core JS Files   -->
	<script src="{{asset('/js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/js/popper.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/js/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/js/moment.min.js')}}../assets/js/plugins/moment.min.js"></script>
	<script src="{{asset('/js/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
	<script src="{{asset('/js/nouislider.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/js/material-kit.js?v=2.0.7')}}" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js" defer></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>


</body>
</body>

<!--alwion/user-profile.html by Webshark web services, Thu, 19 Mar 2020 11:00:58 GMT -->

</html>