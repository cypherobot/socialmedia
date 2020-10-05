<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Messaging Application PSD TO HTML</title>
    <link rel="stylesheet" href="{{asset('css/stylemsg.css')}}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <!DOCTYPE HTML>
    <html>

    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

    </head>

    <body>

        <div class="wrapper">

            <!--        Left Navigation -->
            <div class="navigation-left">
                <div class="profile-image">
                    <div class="icon-online-status"></div>
                    <img id="my-profile-image" src="https://image.ibb.co/fEW4bK/main_profile.jpg">

                </div>

                <div class="icon selected">
                    <i class="fas fa-inbox"></i>
                </div>

                <div class="icon">
                    <!-- <i class="fab fa-telegram-plane"></i> -->
                </div>

                <div class="icon">
                    <!-- <i class="fas fa-comments"></i> -->
                </div>

                <div class="icon">
                    <i class="far fa-trash-alt"></i>
                </div>

                <div id="icon-signout" class="icon">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
            </div>


            <div class="section-1">
                <i id="icon-search" class="fas fa-search"></i>
                <input type="text" placeholder="Search">

                <div class="sort">
                    Sort :
                    <select name="sort">
                        <option value="newest">Newest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="unread">Unread First</option>
                    </select>
                </div>

                <div class="clear"></div>

                <div class="messages-container-s1">
                    <div class="inbox-message">
                        <div class="inbox-message-left">
                            <div class="inbox-message-image-container">
                                <img class="inbox-message-image" src="https://image.ibb.co/jZTHwK/message_profile_3.jpg">

                            </div>
                            <div class="inbox-message-love">
                                <i class="fas fa-heart heart-selected"></i>
                            </div>
                        </div>
                        <div class="inbox-message-right">
                            <span class="inbox-message-name">Bethany White</span>
                            <span class="inbox-message-time">2h ago</span>
                            <div class="inbox-message-subject">Meeting</div>
                            <div class="inbox-message-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque in nibh non tristique
                            </div>
                        </div>
                    </div>

                    <div class="inbox-message inbox-message-selected">
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
                    </div>


                </div>
                <div class="icon-plus-circle">
                    <i id="icon-plus" class="fas fa-plus"></i>
                </div>
            </div>

            <div class="section-2">
                <div class="top-banner">
                    <span class="name-s2">Nora Holloway</span>
                    <span class="icon-online-status-s2"></span>
                    <span class="status-s2">Online</span>
                    <span class="icons-s2">
                        <!-- <span id="icon-phone" ><i class="fas fa-phone fa-flip-horizontal"></i></span>
                    <span id="icon-video"><i class="fas fa-video"></i></span> -->
                        <span id="icon-ellipsis"><i class="fas fa-ellipsis-h"></i></span>
                    </span>
                    <div class="last-seen-s2">Last seen 10 hours ago</div>

                </div>

                <div class="messages-container-s2">
                    <!--                other message-->
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
                    </div>

                    <!--                other message-->
                    <div class="inbox-message-s2">
                        <div class="inbox-message-left-s2">
                            <div class="inbox-message-image-container-s2">
                                <img class="inbox-message-image-s2" src="https://image.ibb.co/cjZqGK/message_profile_4.jpg">
                            </div>
                        </div>
                        <div class="inbox-message-right-s2">
                            <div class="inbox-message-name-s2">Nora Holloway</div>
                            <div class="inbox-message-body-s2">
                                Morbi tempor interdum velit lobortis sodales.
                            </div>
                            <span class="inbox-message-time-s2">11:06 am</span>
                        </div>
                    </div>

                    <!--                your message-->
                    <div class="inbox-message-s2-you">
                        <div class="inbox-message-right-s2-you">
                            <div class="inbox-message-body-s2-you">
                                Proin interdum sed mauris at hendrerit. Sed ornare placerat justo, at sodales erat venenatis vitae.
                            </div>
                            <span class="inbox-message-time-s2-you">11:09 am</span>
                        </div>
                    </div>

                    <!--                other message-->
                    <div class="inbox-message-s2">
                        <div class="inbox-message-left-s2">
                            <div class="inbox-message-image-container-s2">
                                <img class="inbox-message-image-s2" src="https://image.ibb.co/cjZqGK/message_profile_4.jpg">
                            </div>
                        </div>
                        <div class="inbox-message-right-s2">
                            <div class="inbox-message-name-s2">Nora Holloway</div>
                            <div class="inbox-message-body-s2">
                                Proin eu nunc et purus imperdiet rutrum eget in tortor.
                            </div>
                            <span class="inbox-message-time-s2">11:06 am</span>
                        </div>
                    </div>

                    <!--                your message-->
                    <div class="inbox-message-s2-you">
                        <div class="inbox-message-right-s2-you">
                            <div class="inbox-message-body-s2-you">
                                Duis ultricies egestas massa non consequat. Nunc interdum sit.
                            </div>
                            <span class="inbox-message-time-s2-you">11:09 am</span>
                        </div>
                    </div>

                </div>
                <div class="message-input">
                    <span><i id="icon-paperclip" class="fas fa-paperclip"></i></span>
                    <span><input id="text-message" type="text" placeholder="Type your message here"> </span>
                    <span>
                        <ion-icon id="icon-post" name="send"></ion-icon>
                    </span>
                </div>

            </div>



            <div class="profile-right">
                <div class="profile-image-right">
                    <div class="icon-online-status-right"></div>
                    <img id="profile-image-right" src="https://image.ibb.co/cjZqGK/message_profile_4.jpg">
                </div>
                <div class="profile-right-name">Nora Holloway</div>
                <div class="profile-right-web">Ceo coder.com</div>
                <div class="profile-right-detail">View Detail</div>
                <div class="profile-right-social">
                    <span><img id="icon-linkden" src="https://image.ibb.co/f7iT3z/linkedin_circle.png"></span>
                    <span><img id="icon-facebook" src="https://image.ibb.co/iDgsVe/facebook_circle_512.png"></span>
                    <span><img id="icon-google" src="https://image.ibb.co/gnrsVe/google_circle.png"></span>
                </div>
                <div class="activity-text-right">Activity in Google +</div>
                <div class="activity-right" id="activity-1"></div>
                <div class="activity-right" id="activity-2"></div>
            </div>

        </div>

        <script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
    </body>

    </html>

    <!--Developer Martin Brown-->
    <!--Desiger: https://dribbble.com/shots/3019352-Day-UI-Challenge-013-Direct-Messaging/attachments/632051-->
    <!-- partial -->

</body>

</html>