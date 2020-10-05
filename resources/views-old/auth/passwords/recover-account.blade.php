<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Sign Up Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel="stylesheet" href="{{asset('css/style2017.css')}}">


    <style>
        .box {
            background: linear-gradient(135deg, #5680e9eb 0%, #5680e966 100%);
        }

        button.proceed {
            background: linear-gradient(135deg, #5680e97a 0%, #5680e9 100%);
        }

        #toggle-tabs .tab#toggle-register {
            color: white;
            background: #84ceebd1;
        }

        .mytitle {
            margin-bottom: -8%;
            font-size: 25px;
            color: white;
            font-family: initial;
        }

        ::placeholder {
            font-size: 13px;
            color: #a1aba6;
        }

        body {
            background: url("https://i.pinimg.com/originals/0b/35/71/0b35711f903742a0623698cc9ce7ec65.gif");
            background-size: cover;
            font-family: 'Proxima Nova', Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="page-wrapper">
        <div id="modal-wrapper">
            <div id="modal">
                <div id="cards">
                    <div class="card" id="login">
                        <div class="box">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="84px" height="70px" viewBox="0 0 600 332" enable-background="new 0 0 600 332" xml:space="preserve">
                                <path id="SVGID_1_" d="M48.207,322.346H2.201l195.546-296.91l29.083,24.881L48.207,322.346L48.207,322.346z M366.916,323.3L184.581,45.545l22.235-34.362l182.337,277.754L366.916,323.3L366.916,323.3z M206.816,322.346c0,0-32.511-50.283-67.621-102.999c-7.233-10.859-14.576-21.821-21.768-32.47c-0.586-0.867,14.985-46.926,21.658-36.678c7.217,11.086,14.388,22.232,21.347,33.138c36.734,57.58,67.509,108.465,67.509,108.465L206.816,322.346L206.816,322.346z M313.043,162.238l-39.053,59.399c-31.744,48.284-57.467,87.41-57.467,87.41l-31.942-22.019c0,0,29.998-44.644,67.215-101.253c5.132-7.806,10.351-15.742,15.577-23.694c4.91-7.47,9.831-14.953,14.699-22.356C321.356,79.969,366.42,11.184,366.42,11.184h45.049C411.469,11.184,353.769,100.292,313.043,162.238L313.043,162.238z M375.986,309.048l-29.083-24.882L526.486,11.184h45.046L375.986,309.048L375.986,309.048z"></path>
                            </svg>
                            <div class="mytitle">Forgot Password</div>
                        </div>
                        <form id="login-form">

                            <label>Recover your account

                            </label>
                            <input type="password" id="login-password" class="textbox" placeholder="Enter your Email / Phone Number">

                        </form>
                        <button type="submit" class="proceed">Next <i class="ion-ios-arrow-thin-right"></i></button>
                    </div>
                    <div class="card" id="register">
                        <div class="box">
                            <div id="branding-small">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="42px" height="35px" viewBox="0 0 600 332" enable-background="new 0 0 600 332" xml:space="preserve">
                                    <path id="SVGID_1_" d="M48.207,322.346H2.201l195.546-296.91l29.083,24.881L48.207,322.346L48.207,322.346z M366.916,323.3L184.581,45.545l22.235-34.362l182.337,277.754L366.916,323.3L366.916,323.3z M206.816,322.346c0,0-32.511-50.283-67.621-102.999c-7.233-10.859-14.576-21.821-21.768-32.47c-0.586-0.867,14.985-46.926,21.658-36.678c7.217,11.086,14.388,22.232,21.347,33.138c36.734,57.58,67.509,108.465,67.509,108.465L206.816,322.346L206.816,322.346z M313.043,162.238l-39.053,59.399c-31.744,48.284-57.467,87.41-57.467,87.41l-31.942-22.019c0,0,29.998-44.644,67.215-101.253c5.132-7.806,10.351-15.742,15.577-23.694c4.91-7.47,9.831-14.953,14.699-22.356C321.356,79.969,366.42,11.184,366.42,11.184h45.049C411.469,11.184,353.769,100.292,313.043,162.238L313.043,162.238z M375.986,309.048l-29.083-24.882L526.486,11.184h45.046L375.986,309.048L375.986,309.048z"></path>
                                </svg>
                            </div>
                            <div class="box-header">Register</div>
                            <form id="register-form">
                                <label>Email</label>
                                <input type="password" id="password" class="textbox">
                                <label>Password</label>
                                <input type="password" id="password2" class="textbox">
                                <label>Confirm Password</label>
                                <input type="password" id="register-password-conf" class="textbox">
                            </form>
                        </div>
                        <button type="submit" class="proceed">Create an account <i class="ion-ios-arrow-thin-right"></i></button>
                    </div>
                </div>
                <div id="toggle-tabs">
                    <div class="tab" style="    cursor: initial;" id=""></div>
                    <div class="tab" style="    cursor: initial;" id=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{assets('js/script2017.js')}}"></script>

</body>

</html>