
<!DOCTYPE html>
<html>

<!--alwion/user-profile.html by Webshark web services, Thu, 19 Mar 2020 11:00:56 GMT -->
<head>
	<meta charset="UTF-8">
	<title>Alwion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css" >
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/custom-style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style media="screen">
	/* for mobile */
	@media screen and (max-width:600px){
		.la-ellipsis-v:before{
			margin-left:-20px !important;
		}
		.postbar-in-profile{
			width:95% !important;
			margin:auto 2.5% !important;
		}
		footer{
			margin-top:35% !important;
		}
		main{
			transform: translateY(0) !important;
		}
		.status-1-profile{
			padding-bottom:0px !important;
		}
		.tab-feed ul li{
			margin-right:5px !important;
		}
		.tab-feed ul li a img{
			width:20px !important;
		}
		.tab-feed ul li a span{
			font-size:10px !important;
		}
		.user-account{
			width:0 !important;
		}
		.user-pro-img{
			margin-top:-120px !important;
		}
		.user_pro_status{
			margin-top:40px !important;
		}
		.buttons-links{
			margin-top:15% !important;
		}
		.menu-options-in-profile{
			padding:5px !important;
			font-size: 10px !important;
		}
		.user-pro-img img{
			width:80px !important;
		}
		.profile-container{
			position: relative;
			top:300px !important;
			max-width:100% !important;
			padding-right:0 !important;
			padding-left:0 !important;
		}
		.profile-container .row .col-lg-12{
			padding-right:5px !important;
			padding-left:5px !important;
		}
		main{
			padding-bottom:30vh !important;
		}
		.menu-options-in-profile{
			background:#8860D0;
			padding:8px 40px;
			color:white !important;
			border-radius: 3px;
		}
		header{
			background:transparent;
		}
		.scrolling-search-button-fullopac{
			background:#efefef !important;
		}
		.scrolling-search-bar-fullopac{
			background:white !important;
		}
		.search-bar form input{
			background-color: rgba(255,255,255,0.4);
		}
		.search-bar form button {
	background-color: rgba(255,255,255,0);
}
		.header{
			background-image: linear-gradient(180deg, rgba(0,0,0,0.3) 35%, rgba(250,250,250,0) 100%) !important;
			text-shadow: 0 1px 5px #000 !important;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 1000000;
		}
		.activeheader{
			background:#40b7f5 !important;
			transition: all 0.2s ease-in-out;
		}
		.cover-sec img{
			height:90vh !important;
		}
	}
	/* end for mobile */
	/* for ipad */
	@media screen and (min-width:601px) and (max-width:991px){
		.profile-container{
			position: relative;
			top:-50px !important;
			max-width:100% !important;
		}
		.user_pro_status{
			margin-top:50px !important;
		}
		.profile-container{
			padding-right:0 !important;
			padding-left:0 !important;
		}
		.user-pro-img img{
			width:120px !important;
		}
		.cover-sec img{
			height:50vh !important;
		}
		.nogapscroll{
			transform: translateY(0) !important;
		}
		main{
			padding-bottom:0 !important;
		}
		.menu-options-in-profile{
			background:#8860D0;
			padding:8px 10px;
			color:white !important;
			border-radius: 3px;
			font-size:12px !important;
		}
		header{
			background:transparent;
		}
		.scrolling-search-button-fullopac{
			background:#efefef !important;
		}
		.scrolling-search-bar-fullopac{
			background:white !important;
		}
		.search-bar form input{
			background-color: rgba(255,255,255,0.4);
		}
		.search-bar form button {
	background-color: rgba(255,255,255,0);
}
		.header{
			background-image: linear-gradient(180deg, rgba(0,0,0,0.3) 35%, rgba(250,250,250,0) 100%) !important;
			text-shadow: 0 1px 5px #000 !important;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 1000000;
		}
		.activeheader{
			background:#40b7f5 !important;
			transition: all 0.2s ease-in-out;
		}
	}
	/* end for ipad */
	/* for desktop */
	@media screen and (min-width:992px){
		.profile-container{
			position: relative;
			top:-50px !important;
			max-width:100% !important;
		}
		.nogapscroll{
			transform: translateY(0) !important;
		}
		main{
			padding-bottom:0 !important;
		}
		.menu-options-in-profile{
			background:#8860D0;
			padding:8px 40px;
			color:white !important;
			border-radius: 3px;
		}
		header{
			background:transparent;
		}
		.scrolling-search-button-fullopac{
			background:#efefef !important;
		}
		.scrolling-search-bar-fullopac{
			background:white !important;
		}
		.search-bar form input{
			background-color: rgba(255,255,255,0.4);
		}
		.search-bar form button {
	background-color: rgba(255,255,255,0);
}
		.header{
			background-image: linear-gradient(180deg, rgba(0,0,0,0.3) 35%, rgba(250,250,250,0) 100%) !important;
			text-shadow: 0 1px 5px #000 !important;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 1000000;
		}
		.activeheader{
			background:#40b7f5 !important;
			transition: all 0.2s ease-in-out;
		}
		.cover-sec img{
			height:90vh !important;
		}
	}
	/* end for desktop */
	.main-ws-sec{
		display: none;
	}
	.showdetails{
		display:block !important;
	}
	.user-settingss{
		display:none;
	}
		.styleshow{
			display:block !important;
			position: absolute;
			opacity: 1;
			visibility: visible;
			z-index: 10000;
			display: none;
			top: 150%;
			right: 50%;
			width: 180px;
			background-color: white;
			border: 1px solid #e5e5e5;
			padding:10px 8px;
			box-shadow: 0 0 5px 0 grey;
		}
	header nav ul li span{
		font-size:15px;
		font-weight: 600;
	}
		.user_profile{
			border-radius: 7px !important;
			box-shadow: 0 0 10px 0 black;
		}
		.buttons-links{
			margin-top:3%;
		}
		.menu-options-in-profile{
			font-size:15px;
			font-family: 'Nunito Sans', sans-serif;
			color:blue;
		}
		.buttons-links{
			position: relative;
		}
		.buttons-links .visible{
			z-index:9999;
		}
		.profile-name{
			font-size:35px;
			color:#8860d0;
			font-weight:bold;
		}
		.profile-description{
			font-size:17px;
			line-height: 35px;
		}
		.postbar-in-profile{
			width:70%;
			margin:auto 15%;
			border-top:1px solid #e4e4e4;
		}
		.process-comm{
			padding-bottom:5% !important;
		}

	</style>
</head>



<body oncontextmenu="return false;" style="background-image: radial-gradient( #cafbfc , #caddfc, #f7dbff) !important;">
	<div class="wrapper">
		@include('header')


		<section class="cover-sec" data-scroll-speed="10" >
			<img src="images/resources/cover-img.jpg" alt="">
		</section>


		<main data-scroll-speed="3" style="transform: translateY(0) !important;" class="nogapscroll">
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
													<div class="col-6 px-1 px-md-auto">
														<a href="#" class="menu-options-in-profile" ><i class="fas fa-user-slash"></i> Not Familiar</a>
													</div>
													<div class="col-6 px-1 px-md-auto">

														<a href="#" class="menu-options-in-profile" ><i class="fas fa-envelope"></i> Message</a>
													</div>
												</div>
											</div>
											<div class="col-0 d-none d-md-block col-md-2 px-0 px-lg-auto">

											</div>
											<div class="col-6 col-md-5 px-0 px-lg-auto visible">
												<div class="row">
													<div class="col-5 col-lg-6 px-1 px-md-auto">
														<a href="#" class="menu-options-in-profile" ><i class="fas fa-user-plus"></i> Follow</a>
													</div>
													<div class="col-5 col-lg-5 px-1 px-md-auto">

														<a href="#" class="menu-options-in-profile" ><i class="fas fa-user"></i> About</a>
													</div>
													<div class="col-2 col-lg-1 pl-2 pr-md-4 pr-lg-4">

											      <div class="user-account">
											        <div class="user" style="text-align: right;">
																<i class="fas fa-ellipsis-v" style="color:black;" id="hiddenmenu"></i>
											        </div>
											        <div class="user-settingss" id="moreoptions">
																<p style="margin-bottom:7px;margin-top:5px;"><a href="#" class="menu-options-in-profile-sub" >Block</a></p>
																<p style="margin-bottom:7px;margin-top:5px;"><a href="#" class="menu-options-in-profile-sub" >Report</a></p>
																<p style="margin-bottom:7px;margin-top:5px;"><a href="#" class="menu-options-in-profile-sub" >Poke</a></p>
											        </div><!--user-account-settingss end-->
											      </div>

               								<script type="text/javascript">
							 									$(document).ready(function(){
               									$('#hiddenmenu').click(function () {
                 								$("#moreoptions").toggleClass('styleshow');
               									});

							 									$('#moredetails').click(function () {
                 									$("#mainprofile").toggleClass('showdetails');
               									});

							 									});

               								</script>



													</div>
												</div>
											</div>
										</div>
										<!-- options end -->

										<div class="user-pro-img">
											<img src="images/resources/user-pro-img.png" alt="">
										</div><!--user-pro-img end-->

										<div class="user_pro_status status-1-profile" style="border-bottom:none;">
											<span class="profile-name">John Doe</span><br>
											<span class="profile-description">I am a 10th class student and I want to become an engineer.</span>
										</div><!--user_pro_status end-->
										<div class="user_pro_status">
											<ul class="flw-hr">
												<li><a href="#" title="" class="flww"><i class="la la-plus"></i> Follow</a></li>
												<li id="moredetails"><a style="color:white" title="" class="flww"><i class="far fa-eye"></i></i> View Details</a></li>
											</ul>
											<ul class="flw-status">
												<li>
													<span>Following</span>
													<b>34</b>
												</li>
												<li>
													<span>Followers</span>
													<b>155</b>
												</li>
											</ul>
										</div><!--user_pro_status end-->

										<div class="main-ws-sec " id="mainprofile">

											<div class="product-feed-tab current" id="activity-dd">
												<div class="posts-section">
													<div class="post_topbar">

														<div class="user-tab-sec">
															<div class="tab-feed">
																<ul>
																	<li data-tab="activity-dd" class="active">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Activity</span>
																		</a>
																	</li>
																	<li data-tab="learning-dd">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Learnings</span>
																		</a>
																	</li>
																	<li data-tab="familiarities-dd">
																		<a href="#" title="">
																			<img src="images/ic5.png" alt="">
																			<span>Familiarities</span>
																		</a>
																	</li>
																	<li data-tab="media-dd">
																		<a href="#" title="">
																			<img src="images/ic3.png" alt="">
																			<span>Media</span>
																		</a>
																	</li>
																	<li data-tab="progress-dd">
																		<a href="#" title="">
																			<img src="images/review.png" alt="">
																			<span>Progress</span>
																		</a>
																	</li>
																	<li data-tab="contrubution-dd">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Contribution</span>
																		</a>
																	</li>
																	<li data-tab="personal-dd">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Personal</span>
																		</a>
																	</li>
																</ul>
															</div><!-- tab-feed end-->
														</div><!--user-tab-sec end-->
													</div>

													<div class="post-bar postbar-in-profile">
														<div class="post_topbar">
															<div class="usy-dt">
																<img src="images/resources/us-pic.png" alt="">
																<div class="usy-name">
																	<h3>John Doe</h3>
																	<span><img src="images/clock.png" alt="">3 min ago</span>
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
																<li><img src="images/icon8.png" alt=""><span>Programmer</span></li>
																<li><img src="images/icon9.png" alt=""><span>India</span></li>
															</ul>
															<ul class="bk-links">
																<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
																<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
															</ul>
														</div>
														<div class="job_descp">
															<img src="images/resources/adver-img.png" alt="" style="width:100%">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>

														</div>
														<div class="job-status-bar">
															<ul class="like-com">
																<li>
																	<a href="#"><i class="fas fa-heart" style="color:red;"></i> Like</a>
																	<img src="images/liked-img.png" alt="">
																	<span>25</span>
																</li>
																<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
															</ul>
														</div>

													</div><!--post-bar end-->
													<div class="process-comm">
														<div class="spinner">
															<div class="bounce1"></div>
															<div class="bounce2"></div>
															<div class="bounce3"></div>
														</div>
													</div><!--process-comm end-->
												</div><!--posts-section end-->
											</div><!--product-feed-tab end-->


											<div class="product-feed-tab" id="learning-dd">
												<div class="posts-section">
													<div class="post_topbar">

														<div class="user-tab-sec">
															<div class="tab-feed">
																<ul>
																	<li data-tab="activity-dd">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Activity</span>
																		</a>
																	</li>
																	<li data-tab="learning-dd"  class="active">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Learnings</span>
																		</a>
																	</li>
																	<li data-tab="familiarities-dd">
																		<a href="#" title="">
																			<img src="images/ic5.png" alt="">
																			<span>Familiarities</span>
																		</a>
																	</li>
																	<li data-tab="media-dd">
																		<a href="#" title="">
																			<img src="images/ic3.png" alt="">
																			<span>Media</span>
																		</a>
																	</li>
																	<li data-tab="progress-dd">
																		<a href="#" title="">
																			<img src="images/review.png" alt="">
																			<span>Progress</span>
																		</a>
																	</li>
																	<li data-tab="contrubution-dd">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Contribution</span>
																		</a>
																	</li>
																	<li data-tab="personal-dd">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Personal</span>
																		</a>
																	</li>
																</ul>
															</div><!-- tab-feed end-->
														</div><!--user-tab-sec end-->
													</div>

													<div class="post-bar postbar-in-profile" style="border:none;box-shadow:none;">

														<div class="user-profile-ov" style="border:1px solid #dbdbdb;text-align:left;box-shadow:0 0 10px 0 #9696ff;">
															<h3>English Language</h3>
															<h4>Beginner</h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
														</div><!--user-profile-ov end-->
														<div class="user-profile-ov" style="border:1px solid #dbdbdb;text-align:left;box-shadow:0 0 10px 0 #9696ff;">
															<h3>PHP</h3>
															<h4>Expert</h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
														</div><!--user-profile-ov end-->
														<div class="user-profile-ov" style="border:1px solid #dbdbdb;text-align:left;box-shadow:0 0 10px 0 #9696ff;">
															<h3>JAVA</h3>
															<h4>Expert</h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
														</div><!--user-profile-ov end-->


													</div><!--post-bar end-->
													<div class="process-comm">
														<div class="spinner">
															<div class="bounce1"></div>
															<div class="bounce2"></div>
															<div class="bounce3"></div>
														</div>
													</div><!--process-comm end-->
												</div><!--posts-section end-->
											</div><!--product-feed-tab end-->


											<div class="product-feed-tab" id="familiarities-dd">
												<div class="posts-section">
													<div class="post_topbar">

														<div class="user-tab-sec">
															<div class="tab-feed">
																<ul>
																	<li data-tab="activity-dd">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Activity</span>
																		</a>
																	</li>
																	<li data-tab="learning-dd"  class="active">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Learnings</span>
																		</a>
																	</li>
																	<li data-tab="familiarities-dd">
																		<a href="#" title="">
																			<img src="images/ic5.png" alt="">
																			<span>Familiarities</span>
																		</a>
																	</li>
																	<li data-tab="media-dd">
																		<a href="#" title="">
																			<img src="images/ic3.png" alt="">
																			<span>Media</span>
																		</a>
																	</li>
																	<li data-tab="progress-dd">
																		<a href="#" title="">
																			<img src="images/review.png" alt="">
																			<span>Progress</span>
																		</a>
																	</li>
																	<li data-tab="contrubution-dd">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Contribution</span>
																		</a>
																	</li>
																	<li data-tab="personal-dd">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Personal</span>
																		</a>
																	</li>
																</ul>
															</div><!-- tab-feed end-->
														</div><!--user-tab-sec end-->
													</div>

													<div class="post-bar postbar-in-profile">
														<div class="post_topbar">
															<div class="usy-dt">
																<img src="images/resources/us-pic.png" alt="">
																<div class="usy-name">
																	<h3>John Doe</h3>
																	<span><img src="images/clock.png" alt="">3 min ago</span>
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
																<li><img src="images/icon8.png" alt=""><span>Programmer</span></li>
																<li><img src="images/icon9.png" alt=""><span>India</span></li>
															</ul>
															<ul class="bk-links">
																<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
																<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
															</ul>
														</div>
														<div class="job_descp">
															<img src="images/resources/adver-img.png" alt="" style="width:100%">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>

														</div>
														<div class="job-status-bar">
															<ul class="like-com">
																<li>
																	<a href="#"><i class="fas fa-heart" style="color:red;"></i> Like</a>
																	<img src="images/liked-img.png" alt="">
																	<span>25</span>
																</li>
																<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
															</ul>
														</div>

													</div><!--post-bar end-->
													<div class="process-comm">
														<div class="spinner">
															<div class="bounce1"></div>
															<div class="bounce2"></div>
															<div class="bounce3"></div>
														</div>
													</div><!--process-comm end-->
												</div><!--posts-section end-->
											</div><!--product-feed-tab end-->


											<div class="product-feed-tab" id="media-dd">
												<div class="posts-section">
													<div class="post_topbar">

														<div class="user-tab-sec">
															<div class="tab-feed">
																<ul>
																	<li data-tab="activity-dd">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Activity</span>
																		</a>
																	</li>
																	<li data-tab="learning-dd"  class="active">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Learnings</span>
																		</a>
																	</li>
																	<li data-tab="familiarities-dd">
																		<a href="#" title="">
																			<img src="images/ic5.png" alt="">
																			<span>Familiarities</span>
																		</a>
																	</li>
																	<li data-tab="media-dd">
																		<a href="#" title="">
																			<img src="images/ic3.png" alt="">
																			<span>Media</span>
																		</a>
																	</li>
																	<li data-tab="progress-dd">
																		<a href="#" title="">
																			<img src="images/review.png" alt="">
																			<span>Progress</span>
																		</a>
																	</li>
																	<li data-tab="contrubution-dd">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Contribution</span>
																		</a>
																	</li>
																	<li data-tab="personal-dd">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Personal</span>
																		</a>
																	</li>
																</ul>
															</div><!-- tab-feed end-->
														</div><!--user-tab-sec end-->
													</div>

													<div class="post-bar postbar-in-profile">
														<div class="post_topbar">
															<div class="usy-dt">
																<img src="images/resources/us-pic.png" alt="">
																<div class="usy-name">
																	<h3>John Doe learn</h3>
																	<span><img src="images/clock.png" alt="">3 min ago</span>
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
																<li><img src="images/icon8.png" alt=""><span>Programmer</span></li>
																<li><img src="images/icon9.png" alt=""><span>India</span></li>
															</ul>
															<ul class="bk-links">
																<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
																<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
															</ul>
														</div>
														<div class="job_descp">
															<img src="images/resources/adver-img.png" alt="" style="width:100%">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>

														</div>
														<div class="job-status-bar">
															<ul class="like-com">
																<li>
																	<a href="#"><i class="fas fa-heart" style="color:red;"></i> Like</a>
																	<img src="images/liked-img.png" alt="">
																	<span>25</span>
																</li>
																<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
															</ul>
														</div>

													</div><!--post-bar end-->
													<div class="process-comm">
														<div class="spinner">
															<div class="bounce1"></div>
															<div class="bounce2"></div>
															<div class="bounce3"></div>
														</div>
													</div><!--process-comm end-->
												</div><!--posts-section end-->
											</div><!--product-feed-tab end-->


											<div class="product-feed-tab" id="progress-dd">
												<div class="posts-section">
													<div class="post_topbar">

														<div class="user-tab-sec">
															<div class="tab-feed">
																<ul>
																	<li data-tab="activity-dd">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Activity</span>
																		</a>
																	</li>
																	<li data-tab="learning-dd"  class="active">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Learnings</span>
																		</a>
																	</li>
																	<li data-tab="familiarities-dd">
																		<a href="#" title="">
																			<img src="images/ic5.png" alt="">
																			<span>Familiarities</span>
																		</a>
																	</li>
																	<li data-tab="media-dd">
																		<a href="#" title="">
																			<img src="images/ic3.png" alt="">
																			<span>Media</span>
																		</a>
																	</li>
																	<li data-tab="progress-dd">
																		<a href="#" title="">
																			<img src="images/review.png" alt="">
																			<span>Progress</span>
																		</a>
																	</li>
																	<li data-tab="contrubution-dd">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Contribution</span>
																		</a>
																	</li>
																	<li data-tab="personal-dd">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Personal</span>
																		</a>
																	</li>
																</ul>
															</div><!-- tab-feed end-->
														</div><!--user-tab-sec end-->
													</div>

													<div class="post-bar postbar-in-profile">
														<div class="post_topbar">
															<div class="usy-dt">
																<img src="images/resources/us-pic.png" alt="">
																<div class="usy-name">
																	<h3>John Doe</h3>
																	<span><img src="images/clock.png" alt="">3 min ago</span>
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
																<li><img src="images/icon8.png" alt=""><span>Programmer</span></li>
																<li><img src="images/icon9.png" alt=""><span>India</span></li>
															</ul>
															<ul class="bk-links">
																<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
																<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
															</ul>
														</div>
														<div class="job_descp">
															<img src="images/resources/adver-img.png" alt="" style="width:100%">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>

														</div>
														<div class="job-status-bar">
															<ul class="like-com">
																<li>
																	<a href="#"><i class="fas fa-heart" style="color:red;"></i> Like</a>
																	<img src="images/liked-img.png" alt="">
																	<span>25</span>
																</li>
																<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
															</ul>
														</div>

													</div><!--post-bar end-->
													<div class="process-comm">
														<div class="spinner">
															<div class="bounce1"></div>
															<div class="bounce2"></div>
															<div class="bounce3"></div>
														</div>
													</div><!--process-comm end-->
												</div><!--posts-section end-->
											</div><!--product-feed-tab end-->



											<div class="product-feed-tab" id="contrubution-dd">
												<div class="posts-section">
													<div class="post_topbar">

														<div class="user-tab-sec">
															<div class="tab-feed">
																<ul>
																	<li data-tab="activity-dd">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Activity</span>
																		</a>
																	</li>
																	<li data-tab="learning-dd"  class="active">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Learnings</span>
																		</a>
																	</li>
																	<li data-tab="familiarities-dd">
																		<a href="#" title="">
																			<img src="images/ic5.png" alt="">
																			<span>Familiarities</span>
																		</a>
																	</li>
																	<li data-tab="media-dd">
																		<a href="#" title="">
																			<img src="images/ic3.png" alt="">
																			<span>Media</span>
																		</a>
																	</li>
																	<li data-tab="progress-dd">
																		<a href="#" title="">
																			<img src="images/review.png" alt="">
																			<span>Progress</span>
																		</a>
																	</li>
																	<li data-tab="contrubution-dd">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Contribution</span>
																		</a>
																	</li>
																	<li data-tab="personal-dd">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Personal</span>
																		</a>
																	</li>
																</ul>
															</div><!-- tab-feed end-->
														</div><!--user-tab-sec end-->
													</div>

													<div class="post-bar postbar-in-profile" style="border:none;">
														<div class="user-profile-ov" style="border:1px solid #dbdbdb;text-align:left;box-shadow:0 0 10px 0 #9696ff;">
															<h3>Contrubution 1</h3>
															<h4>Master of Computer Science</h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
														</div><!--user-profile-ov end-->
														<div class="user-profile-ov" style="border:1px solid #dbdbdb;text-align:left;box-shadow:0 0 10px 0 #9696ff;">
															<h3>Contrubution 3</h3>
															<h4>Computer Science</h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
														</div><!--user-profile-ov end-->
														<div class="user-profile-ov" style="border:1px solid #dbdbdb;text-align:left;box-shadow:0 0 10px 0 #9696ff;">
															<h3>Contrubution 3</h3>
															<h4>Programming</h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
														</div><!--user-profile-ov end-->

													</div><!--post-bar end-->
													<div class="process-comm">
														<div class="spinner">
															<div class="bounce1"></div>
															<div class="bounce2"></div>
															<div class="bounce3"></div>
														</div>
													</div><!--process-comm end-->
												</div><!--posts-section end-->
											</div><!--product-feed-tab end-->




											<div class="product-feed-tab" id="personal-dd">
												<div class="posts-section">
													<div class="post_topbar">

														<div class="user-tab-sec">
															<div class="tab-feed">
																<ul>
																	<li data-tab="activity-dd">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Activity</span>
																		</a>
																	</li>
																	<li data-tab="learning-dd"  class="active">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Learnings</span>
																		</a>
																	</li>
																	<li data-tab="familiarities-dd">
																		<a href="#" title="">
																			<img src="images/ic5.png" alt="">
																			<span>Familiarities</span>
																		</a>
																	</li>
																	<li data-tab="media-dd">
																		<a href="#" title="">
																			<img src="images/ic3.png" alt="">
																			<span>Media</span>
																		</a>
																	</li>
																	<li data-tab="progress-dd">
																		<a href="#" title="">
																			<img src="images/review.png" alt="">
																			<span>Progress</span>
																		</a>
																	</li>
																	<li data-tab="contrubution-dd">
																		<a href="#" title="">
																			<img src="images/ic1.png" alt="">
																			<span>Contribution</span>
																		</a>
																	</li>
																	<li data-tab="personal-dd">
																		<a href="#" title="">
																			<img src="images/ic2.png" alt="">
																			<span>Personal</span>
																		</a>
																	</li>
																</ul>
															</div><!-- tab-feed end-->
														</div><!--user-tab-sec end-->
													</div>

													<div class="post-bar postbar-in-profile" style="border:none;box-shadow:none;">

														<div class="user-profile-ov" style="border:1px solid #dbdbdb;text-align:left;box-shadow:0 0 10px 0 #9696ff;">
															<h3>Education</h3>
															<h4>Master of Computer Science</h4>
															<span>2015 - 2018</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
														</div><!--user-profile-ov end-->
														<div class="user-profile-ov" style="border:1px solid #dbdbdb;text-align:left;box-shadow:0 0 10px 0 #9696ff;">
															<h3>Location</h3>
															<h4>India</h4>
															<p>151/4 BT Chownk, Delhi </p>
														</div><!--user-profile-ov end-->
														<div class="user-profile-ov" style="border:1px solid #dbdbdb;text-align:left;box-shadow:0 0 10px 0 #9696ff;">
															<h3>Skills</h3>
															<ul>
																<li><a href="#" title="">HTML</a></li>
																<li><a href="#" title="">PHP</a></li>
																<li><a href="#" title="">CSS</a></li>
																<li><a href="#" title="">Javascript</a></li>
																<li><a href="#" title="">Wordpress</a></li>
																<li><a href="#" title="">Photoshop</a></li>
																<li><a href="#" title="">Illustrator</a></li>
																<li><a href="#" title="">Corel Draw</a></li>
															</ul>
														</div><!--user-profile-ov end-->
														<div class="user-profile-ov" style="border:1px solid #dbdbdb;text-align:left;box-shadow:0 0 10px 0 #9696ff;">
															<h3>Other Social Media</h3>
															<a href="#"><i class="fab fa-facebook" style="font-size:30px;margin-right:10px;color:	#4267B2"></i></a>
															<a href="#"><i class="fab fa-linkedin-in" style="font-size:30px;margin-right:10px;color:#0e76a8"></i></a>
															<a href="#"><i class="fab fa-twitter" style="font-size:30px;margin-right:10px;color:#00C6FF"></i></a>
															<a href="#"><i class="fab fa-instagram" style="font-size:30px;margin-right:10px;color:#f2003c"></i></a>
														</div><!--user-profile-ov end-->

													</div><!--post-bar end-->
													<div class="process-comm">
														<div class="spinner">
															<div class="bounce1"></div>
															<div class="bounce2"></div>
															<div class="bounce3"></div>
														</div>
													</div><!--process-comm end-->
												</div><!--posts-section end-->
											</div><!--product-feed-tab end-->


										</div><!--main-ws-sec end-->



									</div><!--user_profile end-->

								</div><!--main-left-sidebar end-->
							</div>
						</div>
				</div>
			</div>
		</main>


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
						<img src="images/resources/np.png" alt="">
					</div>
					<input type="text" name="website-url" placeholder="htp://www.example.com">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->



	</div><!--theme-layout end-->


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

<!--alwion/user-profile.html by Webshark web services, Thu, 19 Mar 2020 11:00:58 GMT -->
</html>
