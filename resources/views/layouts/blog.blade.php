<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>گروه کامپیوتر</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('Blog/img/ShetabHub.png') }}" rel="icon">
    <link href="{{ asset('Blog/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fon ts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="{{ asset('Blog/css/fontawsameeee.css') }}" rel="stylesheet">
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

    <script src="{{ asset('Blog/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Blog/lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('Blog/lib/popper/popper.min.js') }}"></script>
    <script src="{{ asset('Blog/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Blog/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('Blog/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Blog/lib/scrollreveal/scrollreveal.min.js') }}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('Blog/contactform/contactform.js') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('Blog/js/main.js') }}"></script>
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
        <div class="col-md-1 col-sm-1 col-1">
            <img class="logo" src="img/ShetabHub.png" style="width: 170px">
        </div>
    </div>
    <div class="container">
        <ul class="menu-nav">
            <li>
                <div class="row login" style="direction: rtl">
                    <div class="col-md-3 col-sm-3 col-3">
                        <button type="button" class="btn btn-warning" style="margin-right: -10px">ثبت   نام</button>
                    </div>
                    <div class="verticalLine"></div>
                    <div class="col-md-2 col-sm-2 col-1" >
                        <a class="nav-link" style="float: right" href="{{route('login')}}">ورود</a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 active-pink-4 mb-4">
                        <input class="form-control" type="text" placeholder="جست وجو" aria-label="Search">
                    </div>
                </div>
            </li>
            <li>
                <div class="navbar-collapse collapse  " id="navbarDefault"   >
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">اساتید</a>
                        </li>
                        <div class="verticalLine"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">ارتباط باما</a>
                        </li>
                        <div class="verticalLine"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">اطلاعیه</a>
                        </li>
                        <div class="verticalLine"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">پست ها</a>
                        </li>
                        <div class="verticalLine"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="property-grid.html">اخبار</a>
                        </li>
                        <!--<li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Pages
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="property-single.html">Property Single</a>
                            <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                            <a class="dropdown-item" href="agents-grid.html">Agents Grid</a>
                            <a class="dropdown-item" href="agent-single.html">Agent Single</a>
                          </div>
                        </li>-->

                        <div class="verticalLine"></div>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">صفحه ی اصلی</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

        <!--<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
          aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <a class="navbar-brand text-brand" href="index.html">Estate<span class="color-b">Agency</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
          data-target="#navbarTogglerDemo01" aria-expanded="false">
          <span class="fa fa-search" aria-hidden="true"></span>
        </button>-->

    </div>
</nav>
<!--/ Nav End /-->
<!--/ Carousel Star /-->
<div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/computer.jpg)">
        </div>
    </div>
</div>
<!--/ Carousel end /-->
<!--/ Services Star /-->
<section class="section-services section-t8">
    @yield('introduction')
</section>

<section class="section-agents section-t8">

</section>

<section class="section-testimonials section-t8 nav-arrow-a">
    @yield('news')
 </section>
<!--/ Testimonials End /-->

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
                                <a href="#"> <img src="img/enamad.png" style="width: 120px"></a>
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
                                <a href="#"> <img src="img/resane.png" style="width: 100px"></a>
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
                                <a href="#"> <img src="img/vimeo.png" style="width: 50px"></a>
                            </li>
                            <br>
                            <li class="color-a">
                                <a href="#"> <img src="img/telegram.png" style="width: 50px"></a>
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
                                <a href="#"> <img src="img/google.png" style="width: 50px"></a>
                            </li>
                            <br>
                            <li class="color-a">
                                <a href="#"> <img src="img/facebook.png" style="width: 50px"></a>
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
                                <a href="#"> <img src="img/linkdin.png" style="width: 50px"> </a>
                            </li>
                            <br>
                            <li class="color-a">
                                <a href="#"> <img src="img/instagram.png" style="width: 50px"> </a>
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
                                <a  style="color: #ffffff" href="#">خدمات</a>
                            </li>
                            <br>
                            <li class="item-list-a">
                                <a style="color: #ffffff" href="#">اخبار</a>
                            </li>
                            <br>
                            <li class="item-list-a">
                                <a style="color: #ffffff" href="#">درباره شتاب</a>
                            </li>
                            <br>
                            <li class="item-list-a">
                                <a style="color: #ffffff" href="#">تماس با ما</a>
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
                                    <img src="img/ShetabHub.png" style="width: 100px">
                                </li>
                                <br>
                                <li class="item-list-a">
                                    <a style="color: #ffffff" href="#">صفحه ی اصلی</a>
                                </li>
                                <br>
                                <li class="item-list-a">
                                    <a style="color: #ffffff" href="#">کشف استعداد</a>
                                </li>
                                <br>
                                <li  class="item-list-a">
                                    <a style="color: #ffffff" href="#">آموزش مهارتی</a>
                                </li>
                                <br>
                                <li class="item-list-a">
                                    <a style="color: #ffffff" href="#">درآمدزایی</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>-->
    <!--<div class="socials-a">
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="#">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="#">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="#">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="#">
            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="#">
            <i class="fa fa-dribbble" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
    </div>
    </div>
    </div>
    </div>
    -->
</footer>
<!--/ Footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->


</body>
</html>
