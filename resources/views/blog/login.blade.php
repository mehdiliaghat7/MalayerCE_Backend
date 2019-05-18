<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="{{ asset('login/css/Style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('login/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('login/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('login/css/iransans.css') }}" rel="stylesheet">



</head>
<body>

<div class="container main">


    <div class="row">
        <div style="display: flex;justify-content: center;">
            <!--<div class="col-lg-3 col-md-2 col-sm-1 col-xs-3"></div>-->
            <div class="image hidden-xs col-sm-5 col-md-5 col-lg-4">
                <img class="image2 col-lg-12 col-md-12 col-sm-12 col-xs-12" src="{{ asset('login/image/wordpress-bruteforce.png') }}">
            </div>
            <div class="Input  col-xs-9 col-sm-4 col-md-4 col-lg-3   ">

                <div class="button">

                    <div class="col-lg-10 col-md-11 col-sm-12 col-xs-12">

                        <button type="button" onclick="hideRegister('Register'); showLogin('Login');"
                                class="login col-lg-6 col-md-5 col-xs-6">ورود
                        </button>
                        <button type="button" onclick="hideLogin('Login'); showRegister('Register');"
                                class="register col-lg-6 col-md-5 col-xs-6"> ثبت نام
                        </button>


                    </div>

                </div>
                <form role="form" action="{{route('login')}}" method="post">
                    <div id="Login">
                        <div class="form-group inputWithiconLogin">
                            <input type="text" class="usernameL col-lg-12 col-xs-12" placeholder="نام کاربری..."/>
                            <span class="borderL"></span>
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="form-group inputWithiconPassword">
                            <input type="text" class="passwordL col-lg-12 col-xs-12" placeholder="رمز عبور..."/>
                            <span class="borderPL"></span>
                            <i class="fas fa-lock"></i>
                        </div>
                        <p class="col-md-12 textL">رمز عبور خود را فراموش کرده اید؟</p>
                        <div class="col-lg-12 col-sm-12 col-xs-12"
                             style="display: flex ;justify-content: center">
                            <div class="col-lg-7 col-md-7 col-sm-8">
                                <button type="submit" class="ُSubmitL text-center col-lg-12 col-md-10 col-sm-10 col-xs-12">تایید

                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <form role="form" action="{{route('login')}}" method="post">
                    <div id="Register">
                        <div class="inputWithicon_name">
                            <input type="text" class="name col-lg-12 col-md-12 col-sm-12 col-xs-12 "
                                   placeholder="نام و نام خانوادگی"/>
                            <span class="borderN"></span>
                            <i class="fas fa-address-card"></i>
                        </div>
                        <br>

                        <div class="inputwithicon_username">
                            <input type="text" class="username col-lg-12 col-md-12 col-sm-12 col-xs-12 "
                                   placeholder="نام کاربری"/>
                            <span class="borderU"></span>
                            <i class="fa fa-user"></i>
                        </div>

                        <br>

                        <div class="inputWithicon_Email">
                            <input type="text" class="Email col-lg-12 col-md-12 col-sm-12 col-xs-12 "
                                   placeholder="پست الکترونیک"/>
                            <span class="borderE"></span>
                            <i class="fas fa-envelope-open-text"></i>
                        </div>

                        <br>

                        <div class="inputWithicon_Companyname">
                            <input type="text" class="companyname col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                   placeholder="نام شرکت"/>
                            <span class="borderC"></span>
                            <i class="fas fa-building"></i>
                        </div>

                        <br>
                        <div class="inputwithicon_password">
                            <input type="text" class="password col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                   placeholder="رمزعبور"/>
                            <span class="borderP"></span>
                            <i class="fa fa-lock"></i>
                        </div>

                        <div class="col-lg-12 col-sm-12 col-xs-12"
                             style="display: flex ;justify-content: center">
                            <div class="col-lg-7 col-md-7 col-sm-8">
                                <button type="submit" class="ُSubmit text-center col-lg-12 col-md-10 col-sm-10 col-xs-12">تایید

                                </button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>

        </div>
    </div>

</div>

<script>
    function hideRegister(id) {
        if (document.getElementById) {
            obj = document.getElementById(id);
            if (obj.style.display == "block") {
                obj.style.display = "none";
            } else {
                obj.style.display = "none";
            }
        }
    }
    function showLogin(id) {
        if (document.getElementById) {
            obj = document.getElementById(id);
            if (obj.style.display == "none") {
                obj.style.display = "block";
            } else {
                obj.style.display = "block";
            }
        }

    }

    function hideLogin(id) {
        if (document.getElementById) {
            obj = document.getElementById(id);
            if (obj.style.display == "block") {
                obj.style.display = "none";
            } else {
                obj.style.display = "none";
            }
        }
    }
    function showRegister(id) {
        if (document.getElementById) {
            obj = document.getElementById(id);
            if (obj.style.display == "none") {
                obj.style.display = "block";
            } else {
                obj.style.display = "block";
            }
        }

    }


</script>
<script src="{{ asset('login/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('login/js/bootstrap.min.js') }}"></script>
</body>
</html>