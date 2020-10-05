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
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <script src="https://kit.fontawesome.com/a06a967094.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>
  <link href="{{ asset('\css\jquery.filer.css') }}" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="{{ asset('\js\jquery.filer.min.js') }}" defer></script>

  <script type="text/javascript">
    $(document).ready(function(e) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('.js-like-btn').on('click', function() {
        var post_id = $(this).data("post-id");

        $.ajax({
          url: "{{ url('/like-user-post') }}",
          type: "POST",
          data: {post_id: post_id},
          success: function(response) {
            console.log(response);
            if (response.success == true)
            {
              // alert(response.message);
              $("#hear-id-"+post_id).addClass('text-danger');
              // socket.emit("user_notification", response.notification);

            }
            else
            {
              $("#hear-id-"+post_id).removeClass('text-danger');
            }
          }
        });
      });

      $(".js-follow-btn").on('click', function() {
        var id = $(this).data("user-id");

        var btn_html = $(this).html();
        $(this).html(`
				Loading &nbsp;
				<div class="spinner-border spinner-border-sm" role="status">
					<span class="sr-only">Loading...</span>
				</div>
				`);

        $.ajax({
          url: `{{ url('/follow-user') }}/${id}`,
          context: this,
          type: "POST",

          success: function(response) {
            alert(response.message);
            if (response.success) {
              $(this).html(`Following`);
              location.reload();
            } else {
              $(this).html(btn_html);
            }
          }
        });
      });

      $(".select2-class").select2();

      $("input[name='attachments[]']").filer({
        types: 'Image, Audio, Video', //Type of file that are allowed, just for alert
        limit: 10, //Max files can be uploaded, can be null.
        maxSize: 5, //Max File Size in MB's, can be null.
        extensions: ['jpg', 'jpeg', 'png', 'gif', 'mp3', 'mp4', 'wmv'], //Type of files ('jpg','jpeg','png','mp3','wmv','zip','psd'...), can be null.
        newExt: ['zip', 'psd'], //Allows you to create thumbs for this type of file with the same image title *.png.
        changeInput: true, //Change Input? : boolean, string
        showThumbs: true, //Create thumbs after choosing files?
        iconPath: './images/', //Path to icons.
        appendTo: '#post_attachments', //Append Thumbs div to..., if null then will append after input
        maxChar: 15, //Title char limit
        removeFiles: true, //Can I Remove Files?
        template: '<img src="%image-url%" title="%original-name%" /><em>%title%</em> %remove-icon%', //Template: %title%, %original-name%, %type%, %size%, %extension%, %image-url%, %index%, %remove-icon%
        uploadFile: false, //Upload each file after choose?
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
  </style>
</head>

@php
$data=DB::table('users')
        ->join('post_comments','post_comments.commented_by','users.id')
        ->where('post_comments.commented_by','users.id')
        ->select('post_comments.*','users.id','users.profile_image')
        ->get();
@endphp

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

                          <!-- 165px size profile_image/avatar/default -->
                          @if ( $user->profile_image != NULL && $user->profile_image != "")
                          <img src="{{asset("/storage/uploads/avatar/$user->profile_image")}}" style="width: 165px;" alt="profile_image">

                          @elseif ($user->profile_image == NULL && $user->profile_image == "" && $user->avatar != NULL && $user->avatar != "" )
                          <img src="{{ $user->avatar }}" style="width: 165px;" alt="avatar">

                          @elseif($user->avatar == NULL && $user->avatar == "" )
                          <img src="{{asset("/storage/uploads/avatar/user.png")}}" style="width: 165px;" alt="default">
                          @endif

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
                          <a href="{{ url("/userprofile/$suggestion->id") }}">
                            {{-- <span><i class="la la-plus"></i></span> --}}
                            <span class="bt">Not Familiar</span>
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
              <div class="col-lg-6 col-md-8 no-pd">
                <div class="main-ws-sec">
                  <div class="post-topbar">
                    <div class="user-picy">
                      <img src="{{asset("/storage/uploads/avatar/$user->profile_image")}}" alt="">
                    </div>
                    <div class="post-st">
                      <ul>
                        <li><a class="post-jb active" href="#" title="">Whats going on</a></li>
                      </ul>
                    </div>
                    <!--post-st end-->
                  </div>
                  <!--post-topbar end-->
                  <div class="posts-section">
                    @foreach(App\Post::with('likes','comments')->latest()->get() as $key => $post)
                    @php
                    $likecount =  App\PostLike::where('post_id','=',auth()->user()->id)->where('post_id','=',$post->post_id)->count();
                    $commentcount =  App\PostComment::where('post_id','=',$post->post_id)->get();
                    @endphp

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
                      
                      </div>
                      <div class="job_descp">
                        @if ( $post->type == "multimedia" )
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            @foreach ($post->attachments as $index => $attachment)
                            <div class="carousel-item {{ $index == 0 ? "active" : "" }}">
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
                        <ul class="like-com" id="like-post{{$post->post_id}}">
                          <li>
                            
                              <i id="hear-id-{{$post->post_id}}" class="fas fa-heart   @if(isset($post->likes->liked_by)) {{'text-danger'}}  @endif"style='font-size:2em;'></i> Like</a>
                            
                          
                          </li>

                          {{-- {{ count($post->comments) }} --}}
                          <li><a  data-toggle="collapse" onclick="getComments({{$post->post_id}})s" href="#collapseExample{{$post->post_id}}" role="button" aria-expanded="false" aria-controls="collapseExample" class="com" style="margin-left: 25em; font-size: 1em;"><i class="fas fa-comment-alt"></i> Comment ({{count($commentcount)}})</a></li>

                          <div class="collapse" id="collapseExample{{$post->post_id}}">
                            <br />
                           <div class="row">

                            <div class="col-2">
                              
                             </div>

                             <div class="col-8">
                              <div class="row">
                              
                               <img src="{{asset('images/users/user11.png')}}" width="35px" style="margin-left: -3em; margin-right: 1em;">
                              <input type="text" placeholder="Add a comment..." class="form-control"  style="color: black; width: 20em;border-radius: 3em;" name="comment_text" id="comment_text{{$post->post_id}}" >
                              
                              </div>
                             </div> 

                              <div class="col-2">
                                <button type="button" onclick="AddCommentSave({{$post->post_id}})"  class="btn btn-sm btn-primary">Comment</button>
                              </div>
                            </div>
                              <br />
                          <div class="card card-body" id="comment-section{{$post->post_id}}">
                             @foreach($post->comments as $key=>$vals)
                                <?php  $posts= App\User::where(['id'=>$vals->commented_by])->first(); ?>
                                    <h4>{{$posts->name}}</h4>
                                    <p class="text-success"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$vals->comment}}</p><br />
                              @endforeach
                            </div>
                          </div>

                        </ul>
                      </div>

                    </div>
                    <!--post-bar end-->
                    <!-- end single post -->

                    @if ( $key == 0 )
                    <div class="top-profiles">
                      <div class="pf-hd">
                        <h3>Top Profiles</h3>
                        <i class="la la-ellipsis-v"></i>
                      </div>
                      <div class="profiles-slider">
                        @foreach ($suggestions as $suggestion)
                        {{-- <div class="user-profy">
																<img src="{{ asset("/storage/uploads/avatar/$suggestion->profile_image") }}" alt="">
                        <h3>{{ $suggestion->name }}</h3>
                        <span>{{ $suggestion->bio }}</span>
                        <ul>
                          <li><a href="{{ url("/userprofile/$suggestion->id") }}" title="" class="followw">Connect</a></li>
                          <!-- <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li> -->
                        </ul>
                        <a href="#" title="">View Profile</a>
                      </div> --}}
                      <!--user-profy end-->
                      <div class="user-profy">
                        <img src="{{ asset("/storage/uploads/avatar/$suggestion->profile_image") }}" width="40px" alt="">
                        <h3>{{ $suggestion->name }}</h3>
                        <span>{{ $suggestion->bio }}</span>
                        <ul>
                          <li><a href="{{ url("/userprofile/$suggestion->id") }}" title="" class="followw">Not Familiar</a></li>
                          <!-- <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li> -->

                        </ul>
                        <a href="{{ url("/userprofile/$suggestion->id") }}" title="">View Profile</a>
                      </div>
                      <!--user-profy end-->
                      @endforeach
                    </div>
                    <!--profiles-slider end-->
                  </div>
                  <!--top-profiles end-->
                  @endif
                  @endforeach

                  {{-- <div class="posty">
											<div class="post-bar no-margin">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/us-pc2.png" alt="">
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
														<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
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
													<a href="#"><i class="fas fa-eye"></i>Views 50</a>
												</div>
											</div><!--post-bar end-->
											<div class="comment-section">
												<a href="#" class="plus-ic">
													<i class="la la-plus"></i>
												</a>
												<div class="comment-sec">
													<ul>
														<li>
															<div class="comment-list">
																<div class="bg-img">
																	<img src="images/resources/bg-img1.png" alt="">
																</div>
																<div class="comment">
																	<h3>John Doe</h3>
																	<span><img src="images/clock.png" alt=""> 3 min ago</span>
																	<p>Lorem ipsum dolor sit amet, </p>
																	<a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
																</div>
															</div><!--comment-list end-->
															<ul>
																<li>
																	<div class="comment-list">
																		<div class="bg-img">
																			<img src="images/resources/bg-img2.png" alt="">
																		</div>
																		<div class="comment">
																			<h3>John Doe</h3>
																			<span><img src="images/clock.png" alt=""> 3 min ago</span>
																			<p>Hi John </p>
																			<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
																		</div>
																	</div><!--comment-list end-->
																</li>
															</ul>
														</li>
														<li>
															<div class="comment-list">
																<div class="bg-img">
																	<img src="images/resources/bg-img3.png" alt="">
																</div>
																<div class="comment">
																	<h3>John Doe</h3>
																	<span><img src="images/clock.png" alt=""> 3 min ago</span>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
																	<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
																</div>
															</div><!--comment-list end-->
														</li>
													</ul>
												</div><!--comment-sec end-->
												<div class="post-comment">
													<div class="cm_img">
														<img src="images/resources/bg-img4.png" alt="">
													</div>
													<div class="comment_box">
														<form>
															<input type="text" placeholder="Post a comment">
															<button type="submit">Send</button>
														</form>
													</div>
												</div><!--post-comment end-->
											</div><!--comment-section end-->
										</div><!--posty end-->
										<div class="process-comm">
											<div class="spinner">
												<div class="bounce1"></div>
												<div class="bounce2"></div>
												<div class="bounce3"></div>
											</div>
										</div><!--process-comm end--> --}}
                </div>
                <!--posts-section end-->
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
              <div class="form-group">
                <select name="tag_connections[]" id="" class="form-control select2-class" multiple="multiple">
                  @foreach ($user->connections() as $connection)
                  @if( $connection->user_one_id == $user->id )
                  @php($id = $connection->user_two_id)
                  @else
                  @php($id = $connection->user_one_id)
                  @endif
                  <option value="{{ $id }}">{{ ucwords(App\User::find( $id )->name) }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>


          <div class="row my-3">
            <div class="col-12">
              <div id="post_attachments"></div>
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


  {{-- Will be uncommented once messenger is ready --}}
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

    function AddCommentSave(id){
     var parameters ='comment_text='+$("#comment_text"+id).val();
         parameters+='&post_id='+id;

        var html='';
        html+='<h4>{{auth()->user()->name}}</h4>';
        html+='<p class="text-success"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+$("#comment_text"+id).val()+'</p><br />';
       
        $("#comment-section"+id).append(html);

         $.ajax({
               type:'POST',
               url:'{{route('save-comment')}}',
               data:parameters,
               success:function(data)
               {

               }
            });
    }

    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function getComments(id){
       
        }

        $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
            var id = $(this).parents(".panel").data('id');
            var c = $('#'+this.id+'-bs3').html();
            var cObjId = this.id;
            var cObj = $(this);


            $.ajax({
               type:'POST',
               url:'/ajaxRequest',
               data:{id:id},
               success:function(data){
                  if(jQuery.isEmptyObject(data.success.attached)){
                    $('#'+cObjId+'-bs3').html(parseInt(c)-1);
                    $(cObj).removeClass("like-post");
                  }else{
                    $('#'+cObjId+'-bs3').html(parseInt(c)+1);
                    $(cObj).addClass("like-post");
                  }
               }
            });


        });      


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