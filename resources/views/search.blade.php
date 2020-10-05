<!DOCTYPE html>
<html>

<!--alwion/ by Webshark web services, Thu, 19 Mar 2020 10:52:43 GMT -->

<head>
	<meta charset="UTF-8">
	<title>Alwion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	{{-- Laravel CSRF Token --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- CSS Files -->
	<link href=" {{asset('/css/material-kit.css?v=2.0.4')}}" rel="stylesheet" />

	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/custom-style.css">
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<link rel="stylesheet" href="https://www.hiquik.com/common_assests/emojis/newemoji.css">
	<link rel="stylesheet" type="text/css" href="https://www.hiquik.com/common_assests/css/imagemodal.css">
	<link rel="stylesheet" type="text/css" href="https://www.hiquik.com/common_assests/css/uploadimg_others.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<script src="https://kit.fontawesome.com/a06a967094.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<link href="https://www.hiquik.com/common_assests/post_img_upload_css/jquery.filer.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="https://www.hiquik.com/common_assests/post_img_upload_js/jquery.filer.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(e) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$('.js-like-btn').on('click', function() {
				var post_id = $(this).data("post-id");

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$.ajax({
					url: "{{ url('/like-user-post') }}",
					type: "POST",
					data: {
						post_id: post_id,
					},

					success: function(response) {
						if (response.success == true) {
							alert(response.message);

							socket.emit("user_notification", response.notification);
						}
					}
				});
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
				console.log( "reached" );
				
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
							}
							else{
								alert(response.message);
							}
						}
					});
				}
			});

			//Basic Options
			$('input[name="file[]"]').filer();

			//Custom Options
			$('input[name="file2[]"]').filer({
				types: 'Image, Audio, Video', //Type of file that are allowed, just for alert
				limit: 10, //Max files can be uploaded, can be null.
				maxSize: 50, //Max File Size in MB's, can be null.
				extensions: ['jpg', 'jpeg', 'png', 'gif', 'mp3', 'mp4', 'wmv'], //Type of files ('jpg','jpeg','png','mp3','wmv','zip','psd'...), can be null.
				newExt: ['zip', 'psd'], //Allows you to create thumbs for this type of file with the same image title *.png.
				changeInput: true, //Change Input? : boolean, string
				showThumbs: true, //Create thumbs after choosing files?
				iconPath: './images/', //Path to icons.
				appendTo: null, //Append Thumbs div to..., if null then will append after input
				maxChar: 15, //Title char limit
				removeFiles: true, //Can I Remove Files?
				template: '<img src="%image-url%" title="%original-name%" /><em>%title%</em> %remove-icon%', //Template: %title%, %original-name%, %type%, %size%, %extension%, %image-url%, %index%, %remove-icon%
				uploadFile: null, //Upload each file after choose?
				dragDrop: null, //Enable drag and drop to input.
				beforeShow: function(e, parent) {
					console.log('before function');
					return true;
				}, //Before show thumbs, must return true;
				onSelect: function(e, parent, appendBox) {
					console.log('onSelect function');
				}, //On Select function
				onRemove: function(e, parent) {
					console.log('onRemove function');
					return true;
				}, //on Remove element, must return true
				inputText: {
					choose: 'Choose',
					feedback: 'Choose files',
					feedback2: 'files were chosen',
					feedback3: 'No file chosen'
				}
			});

			var rData = '';

			//Options+
			$('input[name="file3[]"]').filer({
				changeInput: '<div class="dragDropBox"><span class="message">Click or Drop files here to upload.</span></div>',
				appendTo: '.dragDropBox',
				template: '<img src="%image-url%" title="%original-name%" /><em>%title%</em>',
				uploadFile: {
					url: 'uploadEachFile.php', //url to upload each file
					data: {}, //ajax data
					beforeSend: function(parent) {
						parent.append('<div class="progress-bar" />');
					}, //ajax berfore send
					success: function(data, parent, progress) {
						rData += data;
					}, //ajax success
					error: function(e, parent, progress) {}, //ajax error
					progressEnd: function(progress) {
						progress.addClass('done-erase');
					}, //ajax progress end
					onUploaded: function(parent) {
						alert(rData);
					} //when all files were uplaoded
				},
				dragDrop: {
					dropBox: '.dragDropBox', //Drop box, can be null
					dragOver: function(e, parent) {
						$('.dragDropBox').addClass('hover');
					}, //Drag function
					dragOut: function(e, parent) {
						$('.dragDropBox').removeClass('hover');
					}, //DragOut function
					drop: function(e, formData, parent) {
						$('.dragDropBox').removeClass('hover');
					}, //Drop function
				},
				onEmpty: function(parent, appendBox) {
					$(appendBox).removeClass('done');
				},
				onSelect: function(e, parent, appendBox) {
					$(appendBox).addClass('done');
				}, //On Select function
			});
		});
	</script>
	<style>
		.dragDropBox {
			position: relative;
			display: block;
			min-height: 200px;
			width: 500px;
			background-color: #f3f3f3;
			border: 2px dashed #aaa;
		}

		.dragDropBox span.message {
			color: #333;
			font-family: sans-serif;
			position: absolute;
			left: 50%;
			margin-left: -105px;
			top: 45%;
		}

		.dragDropBox:not(.done):hover,
		.dragDropBox.hover {
			opacity: 0.7;
			filter: alpha(opacity=70);
			cursor: pointer;
		}

		.scoretext {
			font-family: 'Righteous', cursive;
		}

		.magic {
			font-family: 'Righteous', cursive;
		}

		.ui-block {
			margin-bottom: 0px;
			border-bottom: none;
		}

		.bt {
			color: #1976D2;
			padding: 5px;
			padding-left: 7px;
			padding-right: 7px;
			border-color: #1976D2;
			border-width: 2px;
			border-style: solid;
			border-radius: 0px;
		}

		.bt:hover {
			background-color: #1976D2;
			color: #fff;
			padding: 5px;
			padding-left: 7px;
			padding-right: 7px;
			border-color: #1976D2;
			border-width: 2px;
			border-style: solid;
			border-radius: 0px;
		}
	</style>
	<style>
		.emojionearea .emojionearea-editor {
			padding: 1rem !important;
		}

		.emojionearea-picker {
			z-index: 5 !important;
		}

		.emojionearea-button {
			z-index: 6 !important;
			opacity: 1;
			margin-top: 0.60rem;
		}

		.suggestion-usd {
			border-top: 0px solid #e5e5e5 !important;
			border-left: 0px solid #e5e5e5 !important;
			border-right: 0px solid #e5e5e5 !important;
			border-bottom: 1px solid #e5e5e5 !important;
			border-color: #e5e5e5 !important;
		}

		.suggestion-usd>span {
			float: right;
			margin-top: 10px !important;
			position: relative;
		}

		.suggestions-list {
			float: left;
			width: 100%;
			padding: 0px 0 30px 0 !important;
		}

		.widget {
			width: 100% !important;
		}

		.profileround {
			height: 50px;
			width: 38px;
		}
	</style>
</head>

<body oncontextmenu="return false;" style="background-image: radial-gradient( #cafbfc , #caddfc, #f7dbff) !important;">
	@include('header')
	<div class="wrapper">
		<main>
			<div class="main-section">
				<div class="container-fluid">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3 col-md-4 pd-left-none no-pd">
								<div class="main-left-sidebar no-margin">
									<div class="user-data full-width">
										<div class="user-profile">
											<div class="username-dt">
												<div class="usr-pic">
													<img src="{{asset("/storage/uploads/avatar/$user->profile_image")}}" alt="">
												</div>
											</div>
											<!--username-dt end-->
											<div class="user-specs">
												<h3>{{ $user->name }}</h3>
												<span>{{ $user->bio }}</span>
											</div>
										</div>
										<!--user-profile end-->
										<!-- <div class="user_pro_status">
											<div class="container">
												<div class="row" style="display: contents;">
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
												padding-bottom: 20px;
											}

											.spc3 {
												padding-top: 7px;
											}
										</style>

										<ul class="user-fw-status">


											<li>
												<a href="{{ url("/userprofile") }}" title="">View Profile</a>
											</li>
										</ul>
									</div>
									<!--user-data end-->


									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>Suggestions</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
										<!--sd-title end-->
										<div class="suggestions-list">
											@foreach ($suggestions as $suggestion)
											<div class="suggestion-usd">
												<a href="{{ url("/userprofile/$suggestion->id") }}">

													<img src="{{ asset("/storage/uploads/avatar/$suggestion->profile_image") }}" width="35px" alt="">
													<div class="sgt-text">
														<h4>{{ $suggestion->name }}</h4>
														<span>{{ $suggestion->bio }}</span>
														<!-- <span>Details</span> -->
													</div>

													<!-- {{-- <span><i class="la la-plus"></i></span> --}} -->
													<!-- <span class="bt">Connect</span> -->


												</a>
												<span>
													<a href="{{ url("#") }}">
														{{-- <span><i class="la la-plus"></i></span> --}}
														<span class="bt">Connect</span>
													</a>
												</span>
											</div>


											@endforeach
											{{-- <div class="suggestion-usd">
												<img src="images/resources/s2.png" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s3.png" alt="">
												<div class="sgt-text">
													<h4>Poonam</h4>
													<span>Wordpress Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s4.png" alt="">
												<div class="sgt-text">
													<h4>Bill Gates</h4>
													<span>C & C++ Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s5.png" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s6.png" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div> --}}
											<div class="view-more">
												<a href="#" title="">View More</a>
											</div>
										</div>
										<!--suggestions-list end-->
									</div>
									<!--suggestions end-->
								</div>
								<!--main-left-sidebar end-->
							</div>
							<style>
								.line222 {
									border-bottom: 1px solid #e5e5e5;
								}

								.line221 {
									width: 450px;
									border-bottom: 1px solid #e5e5e5;
								}

								.spc21 {
									padding-top: 20px;
									padding-bottom: 0px;
								}
							</style>
							<div class="col-lg-6 col-md-8 no-pd">
								<div class="main-ws-sec">
									<div class="post-topbar">
										<h3><small>Search results for "{{ $_GET["search"] }}"</small></h3>
										<ul class="flw-status spc21">
											<li>

											</li>
										</ul>
										<!-- Tabs with icons on Card -->
										<div class="card card-nav-tabs">
											<div class="card-body ">
												<div class="tab-content text-center">
													<div class="tab-pane active" id="profile">
														<div class="container-fluid">

															@foreach ($search_results as $result)
																<div class="row line222 justify-content-between">
																	<div class="">
																		<div class="profileround">
																			<img src="{{ url("/storage/uploads/avatar/$result->profile_image") }}">
																		</div>
																	</div>
																	<div class="flex-fill text-left px-5">
																		<br>
																		<a href="{{ url("/userprofile/$result->id") }}" style="font-size: 16px;font-weight: 600;">
																			{{ ucwords($result->name) }}
																		</a>
																	</div>
																	<div class="flex-fill">
																		@if ( Auth::user() )
																			@if ( Auth::user()->id != $result->id )
																				@php
																					$auth_user = Auth::user();
																					$request = $auth_user->requested_connection( $result->id );
																				@endphp

																				@if ( $request && $request->count() > 0 )
																					@if ( $request->status == 1 ) {{-- This means request is pending --}}
																						<button class="btn btn-primary js-connection-btn" style="font-size: 0.65rem !important;" data-task="cancel-connection-request" data-user-id="{{ $result->id }}">
																							<i class="la la-minus"></i><span class="sp"> Cancel Request</span>
																						</button>
																					@else
																						@if ( $request->status == 2 ) {{-- This means request is accepted --}}
																							<button class="btn btn-primary js-connection-btn" style="font-size: 0.65rem !important;" data-task="remove-connection" data-user-id="{{ $result->id }}">
																								<i class='la la-minus'></i>&nbsp; &nbsp; Familiar &nbsp; &nbsp;
																							</button>
																						@endif
																					@endif
																				@else
																					@php( $requested = $auth_user->request_recieved( $result->id ) )
																					
																					@if ( $requested && $requested->count() )
																						@if ( $requested->status == 1 ) {{-- This means request is pending --}}
																							<button class="btn btn-primary js-connection-btn" style="font-size: 0.65rem !important;" data-task="decline-connection-request" data-user-id="{{ $result->id }}">
																								<i class="la la-minus"></i> Decline
																							</button>

																							<button class="btn btn-primary js-connection-btn" style="font-size: 0.65rem !important;" data-task="accept-connection-request" data-user-id="{{ $result->id }}">
																								<i class="la la-plus"></i> Accept
																							</button>
																						@else
																							@if ( $requested->status == 2 ) {{-- This means request is accepted --}}
																								<button class="btn btn-primary js-connection-btn" style="font-size: 0.65rem !important;" data-task="remove-connection" data-user-id="{{ $result->id }}">
																									<i class='la la-minus'></i>&nbsp; &nbsp; Familiar &nbsp; &nbsp;
																								</button>
																							@endif
																						@endif
																					@else
																						<button class="btn btn-primary js-connection-btn" style="font-size: 0.65rem !important;" data-task="request-connection" data-user-id="{{ $result->id }}">
																							<i class="fas fa-user-slash"></i><span class="sp">&nbsp; &nbsp; Not Familiar</span>
																						</button>
																					@endif
																				@endif
																			@endif
																		@else
																			<button class="btn btn-primary js-connection-btn" style="font-size: 0.65rem !important;" data-task="request-connection" data-user-id="{{ $result->id }}">
																				<i class="fas fa-user-slash"></i><span class="sp">&nbsp; &nbsp; Not Familiar</span>
																			</button>
																		@endif
																	</div>
																</div>
															@endforeach


															{{-- <div class="row line222">

																<div class="col-md-2">
																	<div class="profileround">
																		<img src="{{asset('/images/users/user1.png')}}">
																	</div>
																</div>
																<div class="col-md-6">
																	<br>
																	<h3><small>User Name</small></h3>
																</div>
																<div class="col-md-4">
																	<br>
																	<h3><small>Programmer</small></h3>
																</div>
															</div> --}}
														</div>
													</div>
													<div class="tab-pane" id="messages">
														<div class="container-fluid">
															<div class="row">
																<div class="col-md-2">
																<div class="profileround">
																		<img src="{{asset('/images/users/user8.png')}}">
																	</div>
																</div>
																<div class="col-md-8">
																	<h3><small>User Name</small></h3>
																</div>
																<div class="col-md-2">
																	<h3><small>Option</small></h3>
																</div>
															</div>
														</div>
														<ul class="flw-status spc21">
															<li>
																<span class="line221"></span>
															</li>
														</ul>
													</div>
													<div class="tab-pane" id="settings">
														<div class="container-fluid">

															<div class="row">
																<div class="col-md-2">
																<div class="profileround">
																		<img src="{{asset('/images/users/user8.png')}}">
																	</div>
																</div>
																<div class="col-md-8">
																	<h3><small>User Name</small></h3>
																</div>
																<div class="col-md-2">
																	<h3><small>Option</small></h3>
																</div>
															</div>
														</div>
														<ul class="flw-status spc21">
															<li>
																<span class="line221"></span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<!-- End Tabs with icons on Card -->
									</div>
									<!--post-topbar end-->

								</div>
								<!--main-ws-sec end-->
							</div>
							<div class="col-lg-3 pd-right-none no-pd">
								<div class="right-sidebar">
									<div class="widget widget-about">
										<img src="images/wd-logo.png" alt="">
										<h3>Find New Friends on Alwion</h3>
										<span>Find only the People You Like</span>
										<div class="sign_link">
											<h3><a href="sign-in.html" title="">Sign up</a></h3>
											<a href="#" title="">Learn More</a>
										</div>
									</div>
									<!--widget-about end-->
									<div class="widget widget-jobs">
										<div class="sd-title">
											<h3>Top Posts</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
										<div class="jobs-list">
											<div class="job-info">
												<div class="job-details">
													<h3>Sailesh</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>2K <i class="fas fa-heart" style="color:red;"></i></span>
												</div>
											</div>
											<!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>jithin</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>3k <i class="fas fa-heart" style="color:red;"></i></span>
												</div>
											</div>
											<!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>sadath</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>3k <i class="fas fa-heart" style="color:red;"></i></span>
												</div>
											</div>
											<!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior PHP Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>3k <i class="fas fa-heart" style="color:red;"></i></span>
												</div>
											</div>
											<!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior Developer Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>3k <i class="fas fa-heart" style="color:red;"></i></span>
												</div>
											</div>
											<!--job-info end-->
										</div>
										<!--jobs-list end-->
									</div>

									<!--widget-jobs end-->








								</div>
								<!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>




		<div class="post-popup pst-pj">
			<div class="post-project">
				<h3>Post a project</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-12">
								<div class="price-sec">
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
									<span>To</span>
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div>
			<!--post-project end-->
		</div>
		<!--post-project-popup end-->

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>New Post</h3>
				<div class="post-project-fields">
					<form enctype="multipart/form-data" action="{{ url("/posts") }}" method="POST">
						@csrf
						<div class="row">
							<div class="col-12">
								<textarea name="description" id="emojionearea1" placeholder="What's on your mind!"></textarea>
							</div>
						</div>

						<div class="row my-3">
							<div class="col-12">
								<div class="custom-file">
									<input type="file" name="attachments[]" multiple="multiple" class="custom-file-input d-none" id="customFile" accept="video/*,  video/x-m4v, video/webm, video/x-ms-wmv, video/x-msvideo, video/3gpp, video/flv, video/x-flv, video/mp4, video/quicktime, video/mpeg, video/ogv, .ts, .mkv, image/*, image/heic, image/heif" />

									<label class="custom-file-label" for="customFile">Choose file</label>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<ul class="d-flex justify-content-between">
									<li class="d-inline"><a href="#" title="">Cancel</a></li>
									<li class="d-inline"><button class="active" type="submit" value="post">Post</button></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div>
			<!--post-project end-->
		</div>
		<!--post-project-popup end-->



		{{-- <div class="chatbox-list">
			<div class="chatbox">
				<div class="chat-mg">
					<a href="#" title=""><img src="images/resources/usr-img1.png" alt=""></a>
					<span>2</span>
				</div>
				<div class="conversation-box">
					<div class="con-title mg-3">
						<div class="chat-user-info">
							<img src="images/resources/us-img1.png" alt="">
							<h3>John Doe <span class="status-info"></span></h3>
						</div>
						<div class="st-icons">
							<a href="#" title=""><i class="la la-cog"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
						</div>
					</div>
					<div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
						<div class="chat-msg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
							<span>Sat, Aug 23, 1:10 PM</span>
						</div>
						<div class="date-nd">
							<span>Sunday, August 24</span>
						</div>
						<div class="chat-msg st2">
							<p>Cras ultricies ligula.</p>
							<span>5 minutes ago</span>
						</div>
						<div class="chat-msg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
							<span>Sat, Aug 23, 1:10 PM</span>
						</div>
					</div>
					<!--chat-list end-->
					<div class="typing-msg">
						<form>
							<textarea placeholder="Type a message here"></textarea>
							<button type="submit"><i class="fa fa-send"></i></button>
						</form>
						<ul class="ft-options">
							<li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
							<li><a href="#" title=""><i class="la la-camera"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
						</ul>
					</div>
					<!--typing-msg end-->
				</div>
				<!--chat-history end-->
			</div>
			<div class="chatbox">
				<div class="chat-mg bx">
					<a href="#" title=""><img src="images/chat.png" alt=""></a>
					<span>2</span>
				</div>
				<div class="conversation-box">
					<div class="con-title">
						<h3>Messages</h3>
						<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
					</div>
					<div class="chat-list">
						<div class="conv-list active">
							<div class="usrr-pic">
								<img src="images/resources/usy1.png" alt="">
								<span class="active-status activee"></span>
							</div>
							<div class="usy-info">
								<h3>John Doe</h3>
								<span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
							</div>
							<div class="ct-time">
								<span>1:55 PM</span>
							</div>
							<span class="msg-numbers">2</span>
						</div>
						<div class="conv-list">
							<div class="usrr-pic">
								<img src="images/resources/usy2.png" alt="">
							</div>
							<div class="usy-info">
								<h3>John Doe</h3>
								<span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
							</div>
							<div class="ct-time">
								<span>11:39 PM</span>
							</div>
						</div>
						<div class="conv-list">
							<div class="usrr-pic">
								<img src="images/resources/usy3.png" alt="">
							</div>
							<div class="usy-info">
								<h3>John Doe</h3>
								<span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
							</div>
							<div class="ct-time">
								<span>0.28 AM</span>
							</div>
						</div>
					</div>
					<!--chat-list end-->
				</div>
				<!--conversation-box end-->
			</div>
		</div> --}}
		<!--chatbox-list end-->

	</div>
	<!--theme-layout end-->
	@include('footer')

	<script type="text/javascript">
		$(window).on("scroll", function() {
			if ($(window).scrollTop() > 60) {
				$(".header").addClass("activeheader");
			} else {
				//remove the background property so it comes transparent again (defined in your css)
				$(".header").removeClass("activeheader");
			}
		});
	</script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/popper.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/scrollbar.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="http://www.hiquik.in/common_assests/emojis/insuseemoji.js"></script>

	<!--<script type="text/javascript" src="slider/js/script.js"></script>-->
	<script type="text/javascript" src="http://www.hiquik.in/common_assests/js/others/img_modal.js"></script>
	<script type="text/javascript" src="http://www.hiquik.in/common_assests/js/others/upload_image_post_sec.js"></script>
	<script>
		$("#emojionearea1").emojioneArea({

			pickerPosition: "right",
			tonesStyle: "bullet",
			events: {
				keyup: function(editor, event) {
					console.log(editor.html());
					console.log(this.getText());
					var postvalue1 = this.getText();
					if (postvalue1 != "") {
						$("#post1").prop("disabled", false);
					} else {
						$("#post1").prop("disabled", "disabled");
					}
				}
			}
		});
	</script>
</body>

<!--alwion/ by Webshark web services, Thu, 19 Mar 2020 10:53:31 GMT -->

</html>