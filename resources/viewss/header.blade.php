
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>

<script type="text/javascript">
$(window).on("scroll", function() {
	if($(window).scrollTop() > 300) {
			$(".header").addClass("activeheader");
			$(".scrolling-search-button").addClass("scrolling-search-button-fullopac");
			$(".scrolling-search-bar").addClass("scrolling-search-bar-fullopac");
	} else {
			//remove the background property so it comes transparent again (defined in your css)
		 $(".header").removeClass("activeheader");
		 $(".scrolling-search-button").removeClass("scrolling-search-button-fullopac");
		 $(".scrolling-search-bar").removeClass("scrolling-search-bar-fullopac");
	}
});
</script>

<header class="header" id="headerall">
  <div class="container">
    <div class="header-data">
      <div class="logo">
        <a href="/home" title=""><img src="images/logo.png" alt=""></a>
      </div><!--logo end-->
      <div class="search-bar">
        <form>
          <input type="text" name="search" placeholder="Search..." class="scrolling-search-bar">
          <button type="submit" class="scrolling-search-button"><i class="la la-search"></i></button>
        </form>
      </div><!--search-bar end-->



      <nav>
        <ul>

					@guest
							<li>
									<a href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
									<li>
											<a href="{{ route('register') }}">{{ __('Register') }}</a>
									</li>
							@endif
					@else


          <li>
            <a href="profiles.php" title="">
              <span><img src="images/icon5.png" alt=""></span>
              Learning
            </a>
          </li>
          <li>
            <a href="#" title="" class="not-box-open">
              <span><img src="images/icon7.png" alt=""></span>
              Notification
            </a>
            <div class="notification-box noti" id="notification">
              <div class="nt-title">
                <h4>Setting</h4>
                <a href="#" title="">Clear all</a>
              </div>
              <div class="nott-list">
                <div class="notfication-details">
                    <div class="noty-user-img">
                      <img src="images/resources/ny-img1.png" alt="">
                    </div>
                    <div class="notification-info">
                      <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                      <span>2 min ago</span>
                    </div><!--notification-info -->
                  </div>
                  <div class="notfication-details">
                    <div class="noty-user-img">
                      <img src="images/resources/ny-img2.png" alt="">
                    </div>
                    <div class="notification-info">
                      <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                      <span>2 min ago</span>
                    </div><!--notification-info -->
                  </div>
                  <div class="notfication-details">
                    <div class="noty-user-img">
                      <img src="images/resources/ny-img3.png" alt="">
                    </div>
                    <div class="notification-info">
                      <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                      <span>2 min ago</span>
                    </div><!--notification-info -->
                  </div>
                  <div class="notfication-details">
                    <div class="noty-user-img">
                      <img src="images/resources/ny-img2.png" alt="">
                    </div>
                    <div class="notification-info">
                      <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                      <span>2 min ago</span>
                    </div><!--notification-info -->
                  </div>
                  <div class="view-all-nots">
                    <a href="#" title="">View All Notification</a>
                  </div>
              </div><!--nott-list end-->
            </div><!--notification-box end-->
          </li>
					  @endguest
        </ul>
      </nav><!--nav end-->
      <div class="menu-btn">
        <a href="#" title=""><i class="fa fa-bars"></i></a>
      </div><!--menu-btn end-->
      <div class="user-account">
        <div class="user-info">
          <img src="images/resources/user.png" alt="">
          <a href="#" title="">{{ Auth::user()->name }}</a>
          <i class="la la-sort-down"></i>
        </div>
        <div class="user-account-settingss" id="users">
          <h3>Setting</h3>
          <ul class="us-links">
            <li><a href="/user-profile" title="">Profile</a></li>
            <li><a href="#" title="">Privacy</a></li>
            <li><a href="#" title="">Faqs</a></li>
            <li><a href="#" title="">Terms & Conditions</a></li>
          </ul>
          <h3 class="tc">
						<a href="{{ route('logout') }}"
							 onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
						</form>
					</h3>
        </div><!--user-account-settingss end-->
      </div>



    </div><!--header-data end-->
  </div>
</header><!--header end-->
