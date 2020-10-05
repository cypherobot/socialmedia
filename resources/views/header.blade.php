
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.5/socket.io.min.js"></script>
<script src="{{ url('\js\custom-socket.js') }}"></script>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<!-- CSS Files -->
<link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
<link href="{{asset('/css/vivify.min.css')}}" rel="stylesheet" type="text/css" />

<script type="text/javascript">
  $(window).on("scroll", function() {
    if ($(window).scrollTop() > 360) {
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



  $(window).on("scroll", function() {
    if ($(window).scrollTop() > 300) {
      $(".header").addClass("s");
    } else {
      //remove the background property so it comes transparent again (defined in your css)
      $(".header").removeClass("s");
    }


  });
</script>

<header>
  <div class="headcolor" style=" height:56px"></div>
</header>
<header class="header md-toolbar md-absolute md-theme-default md-elevation-0 md-white " id="headerall">

  <div class="container ">
    <div class="navbar-translate ">
      <div class="header-data screen-shader head12">
        <div class="logo logo1">
          <a href="/home" title=""><img src="{{asset('/images/logo.png')}}" alt=""></a>
        </div>
        <!--logo end-->
        <div class="search-bar">
          <form class="fmsearch" action="{{ url('search') }}">
            <input type="text" name="search" placeholder="Search..." class="scrolling-search-bar">
            <button type="submit" class="scrolling-search-button"><i class="la la-search"></i></button>
          </form>
        </div>
        <!--search-bar end-->



        <nav class=" navbar-transparent navbar-color-on-scroll" color-on-scroll="100">
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


            <li class="shade">
              <a href="profiles.php" title="">
                <div class="d-flex justify-content-start">
                  <span class="mr-2"><i class="fa fa-briefcase"></i></span>

                  <span id="myid">Learning</span>
                </div>
              </a>
            </li>




            <li>
              <btn class="not-box-open" class="btn9" style="background-color: Transparent !important;
                background-repeat:no-repeat !important; 
                border: none !important;
                cursor:pointer !important;">
                <div class="d-flex justify-content-start">
                  <span class="mr-2"><i class="fa fa-bolt"></i></span>
                  @php( $notifications = Auth::user()->notifications->where( 'seenstatus' , 0 ) )
                  <span>Notifications </span>
                  <!-- <span class='badge badge-light ml-1 {{ count($notifications) <= 0 ? "d-none" : "" }}'>{{count($notifications)}}</span> -->

                </div>
              </btn>


              <div class="notification-box noti" id="notification">
                <div class="nt-title">
                  <h4>Notifications</h4>
                  <a href="" title="">Clear all</a>
                </div>


                <div class="nott-list">
                  @foreach ($notifications as $notification)
                  @php( $sender = App\User::find( $notification->notifyby_id ) )

                  @if ( $notification->type == "connection_request" )
                  <a href="{{url("/userprofile/$sender->id")}}">
                    <div class="notfication-details">
                      <div class="noty-user-img">
                        <img src="{{ url("/storage/uploads/avatar/$sender->profile_image") }}" alt="">
                      </div>

                      <div class="notification-info">
                        <h3>{{ $notification->text }}</h3>

                        <!-- <span>on {{ $notification->datetime }}</span> -->
                      </div>
                      <!--notification-info -->
                    </div>
                  </a>
                  @else
                  <a href="{{url("/userprofile/$sender->id")}}">
                    <div class="notfication-details">
                      <div class="noty-user-img">
                        <img src="{{ url("/storage/uploads/avatar/$sender->profile_image") }}" alt="">
                      </div>

                      <div class="notification-info">
                        <h3>{{ $notification->text }}</h3>

                        <!-- <span>on {{ $notification->datetime }}</span> -->
                      </div>
                      <!--notification-info -->
                    </div>
                  </a>
                  @endif
                  @endforeach
                  <div class="view-all-nots">
                    <a href="{{ url('notifications') }}" title="">View All Notification</a>
                  </div>
                </div>
                <!--nott-list end-->
              </div>
              <!--notification-box end-->
            </li>
            @endguest


            <li class="margin97">
              <button href="#" style="background-color: Transparent !important;
                background-repeat:no-repeat !important; 
                border: none !important;
                cursor:pointer !important;">
                <div class="d-flex justify-content-end margin97">
                  <span>{{ auth()->user()->name }}</span>
                </div>
              </button>
            </li>

          </ul>
        </nav>
        <!--nav end-->

        <style>
          .margin97 {
            padding-right: 3px !important;
          }
        </style>



        <div class="menu-btn ">
          <a href="#" title=""><i class="fa fa-bars"></i></a>
        </div>
        <!--menu-btn end-->
        <div class="user-account">
          <div class="user-info">

            @if ( auth()->user()->profile_image != NULL && $user->profile_image != "")
            <img src="{{asset("/storage/uploads/avatar/auth()->user()->profile_image")}}" style="width: 33px;"  alt="profile_image">

            @elseif (auth()->user()->profile_image == NULL && $user->profile_image == "" && $user->avatar != NULL && $user->avatar != "" )
            <img src="{{ auth()->user()->avatar }}" style="width: 33px;" alt="avatar">

            @elseif(auth()->user()->avatar == NULL && $user->avatar == "" )
            <img src="{{asset("/storage/uploads/avatar/user.png")}}" style="width: 33px;" alt="default">
            @endif

            <!-- <img src="{{asset("/storage/uploads/avatar/$user->profile_image")}}" alt=""> -->
            <!-- <a href="#" title="">{{ Auth::user()->name }}</a> -->
            <i style="padding-left: 3px; font-size:17px;" class="fa fa-angle-double-down btnh"></i>
          </div>
          <div class="user-account-settingss" id="users">
            <h3>Setting</h3>
            <ul class="us-links">
              <li><a href="{{url("/userprofile")}}" title="">Profile</a></li>
              <li><a href="#" title="">Privacy</a></li>
              <li><a href="#" title="">Faqs</a></li>
              <li><a href="#" title="">Terms & Conditions</a></li>
            </ul>
            <h3 class="tc">
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </h3>
          </div>
          <!--user-account-settingss end-->
        </div>



      </div>
      <!--header-data end-->
    </div>

</header>

<!--header end-->


<style>
.user-account{

  width: 100px !important;
}

.user-info>i{
  right: 25px !important;
}


  /* .logo {
    float: left;
    width: 128px!important;
    margin-right: 14px;
    margin-top: 13px !important;
}
nav {
    float: left;
    width: 52% !important;
    text-align: right;
    padding-right: 3px;
} */



  .nott-list .notification-info span {
    bottom: -5px !important;
  }

  .btn9 {
    background-color: Transparent !important;
    background-repeat: no-repeat !important;
    border: none !important;
    cursor: pointer !important;
  }

  button:active {
    background-color: Transparent !important;
    background-repeat: no-repeat !important;
    border: none !important;
    cursor: pointer !important;
  }


  header {
    background-image: rgba(0, 0, 0, 0.2) !important;
    position: fixed !important;
    top: 0;
    left: 0;
    z-index: 1000000;
  }


  nav {
    padding-right: 3px !important;
  }

  .user-info {
    float: left;
    width: 90%;
    padding: 11px 0px;
    position: relative;
    /* border: solid;
    border-color: #fff;
    border-radius: 20px; */

  }

  .user-info img {
    border: solid;
    border-color: #fff;
    border-radius: 20px;
    border-width: 2px;
  }

  /* .la-sort-desc,
  .la-sort-down {
    border: solid;
    border-color: #fff;
    border-radius: 5px;
    border-width: 2px;
  } */
  header nav ul li span {
    font-size: 13px;
    font-weight: 600;
    font-family: 'Oxygen';
    padding-top: 5px;
    text-shadow: 0px 1px 3px #000;
  }

  header nav ul li span:hover {
    font-size: 13px;
    font-weight: 600;
    font-family: 'Oxygen';
    padding-top: 5px;
    color: #fff !important;
    text-shadow: 0px 1px 3px #000;

  }


  header nav ul li span:active {
    font-size: 13px;
    font-weight: 600;
    font-family: 'Oxygen';
    padding-top: 5px;
    color: #fff !important;
    text-shadow: 0px 1px 3px #000;
  }

  /* a:active {
    color: #fff !important;

  }

  a:not( :hover) {
    color: #fff;

  } */

  header nav ul li span:not( :hover) {
    color: #fff;
    text-shadow: 0px 1px 3px #000;
  }

  header nav ul li.active span {
    font-size: 13px;
    font-weight: 600;
    font-family: 'Oxygen';
    padding-top: 5px;
    color: #fff !important;

  }

  /* new */
  .search-bar form input {
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid #dee2e6;
    height: 34px;
    color: black;
    font-size: 14px;
  }

  .search-bar {
    margin-top: 11px;
  }

  .search-bar form button {
    background-color: rgba(255, 255, 255, 0.3);
  }


  .activeheader {
    /* background: #00bcd4 !important; */
    -webkit-box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 12px -5px rgba(0, 188, 212, .46) !important;
    box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 12px -5px rgba(0, 188, 212, .46) !important;
    background-image: none !important;
  }


  .header {
    background: transparent;
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3) 35%, rgba(250, 250, 250, 0) 100%);
    /* text-shadow: 0px 1px 3px #000; */
  }

  .shade {
    color: red;
  }

  .shade:hover {
    /* transition: opacity 0.1s ease 0s; */
    opacity: 0.9;
    color: red;
  }
</style>


<style>
  @media (max-width: 576px) {
    .logo {
      width: 25% !important;
      text-align: center;
    }

    /* .search-bar form input {
    width: 54%  !important;} */


    .fmsearch {
      width: 54% !important;
    }

    .head12 {
      display: flex !important;
    }

    .btnh {
      display: flex !important;

    }

    .menu-btn {
      display: block !important;
      margin-top: 5px;
    }

    .search-bar {
      margin-top: 10px;
    }

    .user-info img {
      border-width: 0px;
    }

    .user-info>i {
      position: absolute;
      top: 112% !important;
      right: 58px !important;
      color: #fff;
    }

    .menu-btn a {
      font-size: 24px;
      color: #fff;
      display: inline-block;
      padding-top: 10px;
      padding-left: 20px;
    }


    .user-account-settingss {
      right: unset;
      left: -288px;
    }
  }

  @media screen and (min-width:520px) and (max-width:1080px) {

    .btnh {
      display: flex !important;

    }

    .user-info>i {
      position: absolute;
      top: 101% !important;
      right: 58px !important;
      color: #fff;

    }

    .menu-btn {
      display: block !important;
      margin-top: 5px;
    }

    .user-info img {
      border-width: 0px;
    }

    .user-account-settingss {
      right: unset;
      left: -288px;
    }

  }

  @media screen and (min-width:541px) and (max-width:973px) {
    .btnh {
      display: flex !important;

    }

    .user-info>i {
      position: absolute;
      top: 53% !important;
      right: 19px !important;
      color: #fff;
    }

    .menu-btn {
      display: block !important;
      margin-top: 5px;
    }

    .user-info img {
      border-width: 2px;
    }

    .user-account-settingss {
      right: unset;
      left: -288px;
    }
  }

  @media screen and (min-width:541px) and (max-width:973px) {
    .btnh {
      display: flex !important;
    }

    .user-info>i {
      position: absolute;
      top: 49% !important;
      right: 19px !important;
      color: #fff;
    }
  }

  @media screen and (min-width:541px) and (max-width:552px) {
    .user-info>i {
      position: absolute;
      top: 113% !important;
      right: 19px !important;
      color: #fff;
    }

    .user-account {
      float: right;
      width: 90px !important;
      border-left: none;
      border-right: none;
      box-sizing: border-box;
      position: relative;
    }
  }

  @media screen and (min-width:974px) and (max-width:1080px) {
    .user-account {
      float: right;
      width: 90px !important;
      border-left: none;
      border-right: none;
      box-sizing: border-box;
      position: relative;
    }

    .user-info>i {
      position: absolute;
      top: 49% !important;
      right: 7px !important;
    }
  }

  @media screen and (min-width:974px) and (max-width:1080px) {
    .user-info>i {
      top: 43% !important;
      right: 10px !important;
    }
  }

  @media screen and (min-width:1080px) and (max-width:1200px) {
    .menu-btn {
      display: block;
      margin-top: 7px !important;
    }
  }

  @media screen and (min-width:1200px) and (max-width:1350px) {
    .user-account {
      margin-top: -34px !important;
    }

    .user-info {
      float: left;
      width: 100%;
      padding: 1px 0px;
      position: relative;
      margin-left: 80px;
      margin-top: -6px;
    }
  }
</style>
<style>
  .headcolor.sticky {
    background-color: #00bcd4;
    -webkit-animation: slide-down 0.3s;
    -moz-animation: slide-down 0.3s;
    animation: slide-down 0.3s;

  }



  @-webkit-keyframes slide-down {
    0% {
      opacity: 0;
      transform: translateY(-100%);
    }

    100% {
      opacity: 0.9;
      transform: translateY(0);
    }
  }

  @-moz-keyframes slide-down {
    0% {
      opacity: 0;
      transform: translateY(-100%);
    }

    100% {
      opacity: 0.9;
      transform: translateY(0);
    }
  }

  @keyframes slide-down {
    0% {
      opacity: 0;
      transform: translateY(-100%);
    }

    100% {
      opacity: 0.9;
      transform: translateY(0);
    }
  }
</style>

<script>
  $(document).scroll(function(e) {
    var scrollTop = $(document).scrollTop();
    if (scrollTop > 300) {
      //console.log(scrollTop);
      $('.headcolor').addClass('sticky');
    } else {
      $('.headcolor').removeClass('sticky');
    }
  });
</script>