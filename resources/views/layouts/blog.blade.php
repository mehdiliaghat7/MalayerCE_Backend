<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>گروه کامپیوتر</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <!--<link href="img/favicon.png" rel="icon">-->
    <link href="{{ asset('Blog/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700') }} rel="stylesheet">
    <link  href="{{ asset('https://use.fontawesome.com/releases/v5.8.2/css/all.css') }}" rel="stylesheet">
    <!--<link href="css/fontawsameeee.css" rel="stylesheet">-->
    <!-- Bootstrap CSS File -->
    <link href="{{ asset('Blog/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('Blog/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Blog/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Blog/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Blog/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('Blog/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('Blog/css/shetab.css') }}" rel="stylesheet">
    <link href="{{ asset('Blog/css/iransans.css') }}" rel="stylesheet">
    <link href="{{ asset('Blog/css/Slider.css') }}" rel="stylesheet">
    <link href="{{ asset('Blog/css/post.css') }}" rel="stylesheet">
    <link href="{{ asset('Blog/css/SliderHead.css') }}" rel="stylesheet">
    <link href="{{ asset('Blog/css/StyleBox.css') }}" rel="stylesheet">
    <link href="{{ asset('Blog/css/card.css') }}" rel="stylesheet" >
    <!--<link rel="stylesheet" href="css/styleB.css">-->
</head>


<body>

<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
        <form class="form-a">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label for="Type">Keyword</label>
                        <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="Type">Type</label>
                        <select class="form-control form-control-lg form-control-a" id="Type">
                            <option>All Type</option>
                            <option>For Rent</option>
                            <option>For Sale</option>
                            <option>Open House</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="city">City</label>
                        <select class="form-control form-control-lg form-control-a" id="city">
                            <option>All City</option>
                            <option>Alabama</option>
                            <option>Arizona</option>
                            <option>California</option>
                            <option>Colorado</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="bedrooms">Bedrooms</label>
                        <select class="form-control form-control-lg form-control-a" id="bedrooms">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="garages">Garages</label>
                        <select class="form-control form-control-lg form-control-a" id="garages">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="bathrooms">Bathrooms</label>
                        <select class="form-control form-control-lg form-control-a" id="bathrooms">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="price">Min Price</label>
                        <select class="form-control form-control-lg form-control-a" id="price">
                            <option>Unlimite</option>
                            <option>$50,000</option>
                            <option>$100,000</option>
                            <option>$150,000</option>
                            <option>$200,000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-b">Search Property</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!--/ Form Search End /-->

<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="row">
<<<<<<< HEAD
        <div class="col-md-1 col-sm-1 col-1">
            <img class="logo" src="{{ asset('Blog/img/ShetabHub.png') }}" style="width: 170px">
=======
        <div class="col-md-12 col-sm-1 col-1">
            <img class="col-md-12 col-sm-1 col-1 logo" src="Blog/img/ShetabHub.png" style="width: 170px">
>>>>>>> 6e77e09adb79e7325684d425ca8ca4ca9b27cac7
        </div>
    </div>
    <div class="container">
        <ul class="menu-nav">
            <li>

                <div class="navbar-collapse collapse  " id="navbarDefault">
                    <div class="row" style="margin-bottom: 10px; margin-right: 217px;direction: rtl">
                        <div class="col-md-9 col-sm-3 col-3">
                            <button type="button" class="btn btn-warning" style="">ثبت نام
                            </button>
                        </div>
                        <div class="verticalLine"></div>
                        <div class="col-md-1 col-sm-2 col-1">
                            <a class="nav-link" style="float: right" href="{{route('login')}}">ورود</a>
                        </div>
                    </div>
                    <div>
                        <ul class="col-md-12 navbar-nav" style="margin-right: 38px; margin-top:-12px">
                            <li>
                                <div class="col-md-12 login" style="direction: rtl">
                                    <input class="form-control" type="text"
                                           placeholder="جستوجو کنید"
                                           aria-label="Search">

                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="dropdown-toggle navbar-nav" data-toggle="dropdown">
                        <div class="verticalLine"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">اساتید</a>
                        </li>
                        <div class="verticalLine"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">ارتباط با ما</a>
                        </li>
                        <div class="verticalLine"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="property-grid.html">اطلاعیه</a>
                        </li>
                        <div class="verticalLine"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-grid.html">پست ها</a>
                        </li>
                        <div class="verticalLine"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-grid.html">اخبار</a>
                        </li>
                        <div class="verticalLine"></div>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">صفحه ی اصلی</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>


    </div>
</nav>
<!--/ Nav End /-->
<!--/ Carousel Star /-->

<!--/ Carousel end /-->

<!--/ content Star /-->
 @yield('content')
<!--/ content end /-->


<!--/ footer Star /-->

<footer style="background-color: #222222">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-2">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand"></h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">

                        </p>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <br>
                            <br>
                            <li class="color-a">
                                <a href="#"> <img src="Blog/img/enamad.png" style="width: 120px"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-2">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand"></h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">

                        </p>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <br>
                            <br>
                            <li class="color-a">
                                <a href="#"> <img src="Blog/img/resane.png" style="width: 100px"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-1">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand"></h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">

                        </p>
                    </div>
                    <div class="w-footer-a">
                        <br>
                        <br>
                        <ul class="list-unstyled">
                            <li class="color-a">
                                <a href="#"> <img src="Blog/img/vimeo.png" style="width: 50px"></a>
                            </li>
                            <br>
                            <li class="color-a">
                                <a href="#"> <img src="Blog/img/telegram.png" style="width: 50px"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-1">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand"></h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">

                        </p>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <br>
                            <br>
                            <li class="color-a">
                                <a href="#"> <img src="Blog/img/google.png" style="width: 50px"></a>
                            </li>
                            <br>
                            <li class="color-a">
                                <a href="#"> <img src="Blog/img/facebook.png" style="width: 50px"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-1">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand"></h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">

                        </p>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <br>
                            <br>
                            <li class="color-a">
                                <a href="#"> <img src="Blog/img/linkdin.png" style="width: 50px"> </a>
                            </li>
                            <br>
                            <li class="color-a">
                                <a href="#"> <img src="Blog/img/instagram.png" style="width: 50px"> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-2 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand"></h3>
                    </div>
                    <div class="w-body-a">
                        <ul class="list-unstyled">
                            <br>
                            <br>
                            <br>
                            <li class="item-list-a">
                                <a  style="color: #ffffff" href="#"> ارتباط با ما</a>
                            </li>
                            <br>
                            <li class="item-list-a">
                                <a style="color: #ffffff" href="#">اساتید</a>
                            </li>
                            <br>
                            <li class="item-list-a">
                                <a style="color: #ffffff" href="#"> </a>
                            </li>
                            <br>
                            <li class="item-list-a">
                                <a style="color: #ffffff" href="#"> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand"></h3>
                    </div>
                    <div class="w-body-a">
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <img src="Blog/img/ShetabHub.png" style="width: 100px">
                                </li>
                                <br>
                                <li class="item-list-a">
                                    <a style="color: #ffffff" href="#">صفحه اصلی</a>
                                </li>
                                <br>
                                <li class="item-list-a">
                                    <a style="color: #ffffff" href="#"> اخبار</a>
                                </li>
                                <br>
                                <li  class="item-list-a">
                                    <a style="color: #ffffff" href="#">پست ها </a>
                                </li>
                                <br>
                                <li class="item-list-a">
                                    <a style="color: #ffffff" href="#"> اطلاعیه</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ Footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="{{asset('Blog/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('Blog/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('Blog/lib/popper/popper.min.js')}}"></script>
<script src="{{asset('Blog/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Blog/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('Blog/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('Blog/lib/scrollreveal/scrollreveal.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{asset('contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('Blog/js/Script.js')}}"></script>
<script src="{{asset('Blog/js/main.js')}}"></script>
<script src="{{asset('Blog/js/SliderHead.js')}}"></script>
<script src="{{asset('Blog/js/popper.min.js')}}"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
</body>
<script>
    (function ($) {
        "use strict";
        $('.nextCardSlider').click(function () {
            $('.carousel').carousel('next');
            return false;
        });
        $('.prevCardSlider').click(function () {
            $('.carousel').carousel('prev');
            return false;
        });
    })

    (jQuery);


</script>


</body>
</html>
