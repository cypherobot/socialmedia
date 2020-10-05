<!DOCTYPE html>
<html>

<!--alwion/user-profile.html by Webshark web services, Thu, 19 Mar 2020 11:00:56 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Alwion : Meassaging</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    {{-- Laravel CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">

    <!-- CSS Files -->
    <link href=" {{asset('/css/material-kit.css?v=2.0.4')}}" rel="stylesheet" />
    <link href=" {{asset('/css/stylemsg.css')}}" rel="stylesheet" />

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

    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">



    <!-- materialize css & js  -->




    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">


    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

</head>


<body>
    @include('header')
    <!-- messaging part start  -->
    <div class="spaceup"></div>

    <div class="container-fluid">
        <div class="row">
            <style>
                .nav-pills .nav-item .nav-link {
                    min-width: 60px !important;
                    margin-right: 3px;
                    height: 95px;
                }

                .search-bar {
                    margin-top: 5px;
                }

                .search-bar form button {
                    position: absolute;
                    top: 10px !important;
                    right: 0;
                    background-color: #efefef;
                    width: 38px;
                    height: 53% !important;
                    border: 0;
                }
            </style>

            <div class="col-md-4">
                <div class="section-1">
                    <div class="tab-content">
                        <i id="icon-search" class="fas fa-search"></i>
                        <input type="text" placeholder="Search your friends" id="search-data" name="search-data" list="search-data-list">
                        <datalist id="search-data-list" >
                            @php( $connections = $user->connections()->where("status",2) )
                            @foreach ($connections as $connection)
                            <option>
                                <a href="{{ url("") }}">
                                    <div class="sgt-text">
                                        @php( $connection = App\User::find( $connection->user_two_id == $user->id ? $connection->user_one_id : $connection->user_two_id ) )
                                        {{-- @php( $latest_message = $user->latest_message( $connection->id ) ) --}}
                                        @php( $unread_messages_count = count( $user->unread_messages( $connection->id )->get() ) )
                                        <span class="inbox-message-name">{{ ucwords( $connection->name ) }}
                                        </span>
                                    </div>
                                </a>
                            </option>
                            @endforeach
                        </datalist>

                        <div class="clear"></div>

                        <div class="tab-pane active" id="dashboard-2">
                            <div class="messages-container-s1">
                                @php( $connections = $user->connections()->where("status",2) )
                                @foreach ($connections as $connection)
                                @php( $connection = App\User::find( $connection->user_two_id == $user->id ? $connection->user_one_id : $connection->user_two_id ) )

                                {{-- @php( $latest_message = $user->latest_message( $connection->id ) ) --}}

                                <div class="inbox-message js-get-user-chat" data-user-id="{{ $connection->id }}">
                                    <div class="inbox-message-left">
                                        <div class="inbox-message-image-container">
                                            <img class="inbox-message-image" src="{{ url("/storage/uploads/avatar/$connection->profile_image") }}">
                                        </div>
                                        <div class="inbox-message-love">
                                            <i class="fas fa-heart heart-selected"></i>
                                        </div>
                                    </div>
                                    <div class="inbox-message-right">
                                        @php( $unread_messages_count = count( $user->unread_messages( $connection->id )->get() ) )

                                        <span class="inbox-message-name">{{ ucwords( $connection->name ) }}
                                            @if ( $unread_messages_count )
                                            <span class="badge badge-success pull-right js-unread-message-count">{{ $unread_messages_count }}</span>
                                            @endif
                                        </span>
                                        {{-- <span class="inbox-message-time">{{ $latest_message->created_at }}</span> --}}
                                        {{-- <div class="inbox-message-subject">Meeting</div> --}}
                                        <div class="inbox-message-body">
                                            @php( $latest_message = $user->latest_message( $connection->id ) )
                                            {{ $latest_message && $latest_message != "" ? $latest_message->message_body : "" }}
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                {{-- <div class="inbox-message inbox-message-selected">
                                    <div class="inbox-message-left">
                                        <div class="inbox-message-image-container">
                                            <img class="inbox-message-image" src="https://image.ibb.co/cjZqGK/message_profile_4.jpg">
                                        </div>
                                        <div class="inbox-message-love">
                                            <i class="fas fa-heart heart-selected"></i>
                                        </div>
                                    </div>
                                    <div class="inbox-message-right">
                                        <span class="inbox-message-name">Nora Holloway</span>
                                        <span class="inbox-message-time">11:09 am</span>
                                        <div class="inbox-message-subject">New Portfolio</div>
                                        <div class="inbox-message-body">
                                            Suspendisse quis fermentum nisl. Aenean vel turpis ligula. Curabitur vel cursus nisl. Aliquam id diam vitae turpis feugiat fermentum.
                                        </div>
                                    </div>
                                </div>

                                <div class="inbox-message">
                                    <div class="inbox-message-left">
                                        <div class="inbox-message-image-container">
                                            <img class="inbox-message-image" src="https://image.ibb.co/mrscwK/message_profile_2.jpg">
                                        </div>
                                        <div class="inbox-message-love">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="inbox-message-right">
                                        <span class="inbox-message-name">Khloe Hicks</span>
                                        <span class="inbox-message-time">11 May 2018</span>
                                        <div class="inbox-message-subject">Project Update</div>
                                        <div class="inbox-message-body">
                                            Nulla tempus aliquam neque at elementum. Cras fringilla lorem sagittis, consequat erat ultrices, accumsan felis. Curabitur vestibulum sodales augue id fermentum.
                                        </div>
                                    </div>
                                </div>

                                <div class="inbox-message">
                                    <div class="inbox-message-left">
                                        <div class="inbox-message-image-container">
                                            <img class="inbox-message-image" src="https://image.ibb.co/n7FxwK/message_profile_1.jpg">
                                        </div>
                                        <div class="inbox-message-love">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="inbox-message-right">
                                        <span class="inbox-message-name">Lucy Williams</span>
                                        <span class="inbox-message-time">21 May 2018</span>
                                        <div class="inbox-message-subject">Moving Location</div>
                                        <div class="inbox-message-body">
                                            Curabitur dapibus euismod leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- livechat  -->
            <div class="col-md-8">
                <div class="section-2">
                    <div class="top-banner js-user-chat" data-user-id="">
                        <span class="name-s2"></span>
                        {{-- <span class="icon-online-status-s2"></span> --}}
                        {{-- <span class="status-s2">Online</span> --}}
                        {{-- <div class="last-seen-s2">Last seen 10 hours ago</div> --}}

                    </div>

                    <div class="messages-container-s2">
                        {{-- <!--                other message-->
                        <div class="inbox-message-s2">
                            <div class="inbox-message-left-s2">
                                <div class="inbox-message-image-container-s2">
                                    <img class="inbox-message-image-s2" src="https://image.ibb.co/cjZqGK/message_profile_4.jpg">
                                </div>
                            </div>
                            <div class="inbox-message-right-s2">
                                <div class="inbox-message-name-s2">Nora Holloway</div>
                                <div class="inbox-message-body-s2">
                                    Hey Zara!
                                </div>
                                <span class="inbox-message-time-s2">11:00 am</span>
                            </div>
                        </div>

                        <!--                your message-->
                        <div class="inbox-message-s2-you">
                            <div class="inbox-message-right-s2-you">
                                <div class="inbox-message-body-s2-you">
                                    Hello Nora, Pellentesque sit amet tempus?
                                </div>
                                <span class="inbox-message-time-s2-you">11:03 am</span>
                            </div>
                        </div> --}}
                    </div>
                    <div class="message-input">
                        <span><i id="icon-paperclip" class="fas fa-paperclip"></i></span>
                        <span><input id="text-message" type="text" placeholder="Type your message here"> </span>
                        <span>
                            <ion-icon id="icon-post" name="send" class="js-send-message" data-user-id=""></ion-icon>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/material-kit.js?v=2.0.7')}}" type="text/javascript"></script>


    <!--theme-layout end-->
    <script type="text/javascript" src="{{asset('/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/scroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/script.js')}}"></script>

    <!---- modal----->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

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

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on("click", ".js-get-user-chat", function() {
                to_user = $(this).data("user-id");

                if ($(".js-user-chat").data("user-id") != to_user) {
                    $(".js-send-message").data("user-id", to_user);
                    $(".js-user-chat").data("user-id", to_user);
                    var unread_message_count = $(this).find(".js-unread-message-count");
                    unread_message_count.fadeOut("slow", function() {
                        unread_message_count.remove();
                    });

                    user_img = $(this).find("img.inbox-message-image").attr("src");
                    user_name = $(this).find(".inbox-message-name").text();

                    $.ajax({
                        url: "{{ url('/api/mark-messages-read') }}",
                        type: "POST",
                        async: true,
                        data: {
                            "to_user": to_user
                        },
                    });

                    $.ajax({
                        url: "{{ url('/api/get-user-messages') }}",
                        type: "POST",
                        data: {
                            "to_user": to_user
                        },

                        success: function(response) {
                            if (response.success) {
                                conversations = response.conversations;
                                user = response.to_user;

                                $(".js-user-chat").find(".name-s2").html(user_name);

                                $(".team-player").find(".card-header-image").attr("src", user_img);
                                $(".team-player").find(".card-body .card-description").html(user.bio);

                                $(".messages-container-s2").empty();

                                conversations.forEach(message => {
                                    if (message.sender == to_user) {
                                        $(".messages-container-s2").prepend(`
                                        <div class="inbox-message-s2">
                                            <div class="inbox-message-left-s2">
                                                <div class="inbox-message-image-container-s2">
                                                    <img class="inbox-message-image-s2" src="${user_img}">
                                                </div>
                                            </div>
                                            <div class="inbox-message-right-s2">
                                                <div class="inbox-message-name-s2">${user_name}</div>
                                                <div class="inbox-message-body-s2">
                                                    ${message.message_body}
                                                </div>
                                                <span class="inbox-message-time-s2">${message.created_at}</span>
                                            </div>
                                        </div>
                                        `);
                                    } else {
                                        $(".messages-container-s2").prepend(`
                                        <div class="inbox-message-s2">
                                            <div class="inbox-message-right-s2-you pull-right">
                                                <div class="inbox-message-body-s2-you">
                                                    ${message.message_body}
                                                </div>
                                                <span class="inbox-message-time-s2-you">${message.created_at}</span>
                                            </div>
                                        </div>
                                        `);
                                    }
                                });

                                $(".messages-container-s2").animate({
                                    scrollTop: $(".messages-container-s2")[0].scrollHeight
                                }, 1000);
                            }
                        }
                    });
                }
            });

            $(document).on("click", ".js-send-message", function() {
                to_user = $(this).data("user-id");
                message_body = $("input#text-message").val();

                $("input#text-message").val('');

                $.ajax({
                    url: "{{ url('/api/send-message') }}",
                    type: "POST",
                    data: {
                        "receiver": to_user,
                        "message_body": message_body
                    },

                    success: function(response) {
                        if (response.success) {
                            message = response.data;
                            $(".messages-container-s2").append(`
                            <div class="inbox-message-s2">
                                <div class="inbox-message-right-s2-you pull-right">
                                    <div class="inbox-message-body-s2-you">
                                        ${message.message_body}
                                    </div>
                                    <span class="inbox-message-time-s2-you">${message.created_at}</span>
                                </div>
                            </div>
                            `);

                            $(`.js-get-user-chat[data-user-id='${message.receiver}']`).find(".inbox-message-right .inbox-message-body").html(`${message.message_body}`);;

                            $(".messages-container-s2").animate({
                                scrollTop: $(".messages-container-s2")[0].scrollHeight
                            }, 1000);

                            socket.emit("messenger", message);
                        }
                    }
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

</body>

</html>