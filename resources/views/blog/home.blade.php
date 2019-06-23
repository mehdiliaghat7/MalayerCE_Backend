@extends('layouts.blog')
@section('content')
    <section id="sliderHead">
        <div id="slider2">

            <div class="slides active">
                <img src="{{asset('Blog/img/slide-3.jpg')}}">
            </div>

            <div class="slides">
                <img src="{{asset('Blog/img/slide-1.jpg')}}">
            </div>

            <div class="slides">
                <img src="{{asset('Blog/img/slide-2.jpg')}}">
            </div>

            <div id="dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

            <a href="#" class="prev">&#10094;</a>
            <a href="#" class="next">&#10095;</a>


        </div>
    </section>


    <!--/ Carousel end /-->
    <!--/ Services Star /-->
    <section class="section-services section-t8">
        <div class="containerEdit section-header" style=";display: flex;justify-content: center" >
            <div class="col-lg-10" style="text-align: center;width: 100%;">
                <h3 style="margin-top: 10px">معرفی گروه</h3>

                <p style="direction: rtl; text-align: justify">تابلوی اعلانات گروه کامپیوتر. کانال تلگرامی گروه کامپیوتر ر   از اساتید مجرب و نخبه کشور است. از مدت‌ها قبل توجه ویژه به تحصیلات تکمیلی از</p>
            </div>
        </div>
    </section>



    <br>
    <br>
    <br>
    <br>
    <br>

    <section class="carousel slider carousel-item-a" data-ride="carousel" id="postsCarousel">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right mb-4" style="z-index: 800; position:absolute; top: 243px">
                    <a class="btn btn-dark prevCardSlider" href="" title="go back">
                        <i class="fa fa-lg fa-chevron-left"></i></a>
                    <a class="btn btn-dark nextCardSlider" href="" title="go back"><i
                                class="fa fa-lg fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="container pt-0 mt-30 carousel-inner section-header" style="margin-left: 28px">
            <h3 style="margin-top: 10px ; text-align: center"> معرفی اساتید </h3>
            <br>
            <br>

            <div class="row row-equal carousel-item active mt-0">

                <center class="col-lg-4">

                    <div class="box" style="background-color: white; height: 500px;width: 70%">
                        <div>
                            <img class="imgBox" src="{{asset('Blog/img/mane.png')}}">
                        </div>
                        <div>
                            <h4 style="font-size:19px;margin-top: 10px ">میثم مرادی</h4>

                            <span style="color: #2f89fc;font-size: 13px">کارشناسی ارشد</span>
                            <div class="text">
                                 <p>کارشناسی ارشد مهندسی نرم افزار</p>
                                <a class="icon" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="icon" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="icon" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="icon" href="{{route('professor')}}"><i class="fab fa-google-plus-g"></i></a>
                            </div>

                        </div>
                    </div>

                </center>
                <center class="col-lg-4">

                    <div class="box" style="background-color: white; height: 500px;width: 70%">
                        <div>
                            <img class="imgBox" src="{{asset('Blog/img/wemane.png')}}">
                        </div>
                        <div>
                            <h4 style="font-size:19px;margin-top: 10px ">یعقوبرضوان ی</h4>

                            <span style="color: #2f89fc;font-size: 13px">کارشناسی ارشد</span>
                            <div class="text">
                                <p>کارشناسی ارشد هوش مصنوعی</p>
                                <a class="icon" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="icon" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="icon" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="icon" href="{{route('professor')}}"><i class="fab fa-google-plus-g"></i></a>
                            </div>

                        </div>
                    </div>

                </center>
                <center class="col-lg-4">

                    <div class="box" style="background-color: white; height: 500px;width: 70%">
                        <div>
                            <img class="imgBox" src="{{asset('Blog/img/mane.png')}}">
                        </div>
                        <div>
                            <h4 style="font-size:19px;margin-top: 10px ">علیرضا افتخاری</h4>

                            <span style="color: #2f89fc;font-size: 13px">دکترا</span>
                            <div class="text">
                                 <p>دکترای شبکه های کامپیوتری</p>
                                <a class="icon" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="icon" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="icon" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="icon" href="{{route('professor')}}"><i class="fab fa-google-plus-g"></i></a>
                            </div>

                        </div>
                    </div>

                </center>
            </div>
            <div class="row row-equal carousel-item mt-0">
                <center class="col-lg-4">

                    <div class="box" style="background-color: white; height: 500px;width: 70%">
                        <div>
                            <img class="imgBox" src="{{asset('Blog/img/mane.png')}}">
                        </div>
                        <div>
                            <h4 style="font-size:19px;margin-top: 10px ">داور گیوکی</h4>

                            <span style="color: #2f89fc;font-size: 13px">دکترا</span>
                            <div class="text">
                                <p>دکترای نرم افزار</p>
                                <a class="icon" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="icon" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="icon" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="icon" href="{{route('professor')}}"><i class="fab fa-google-plus-g"></i></a>
                            </div>

                        </div>
                    </div>

                </center>
                <center class="col-lg-4">

                    <div class="box" style="background-color: white; height: 500px;width: 70%">
                        <div>
                            <img class="imgBox" src="{{asset('Blog/img/mane.png')}}">
                        </div>
                        <div>
                            <h4 style="font-size:19px;margin-top: 10px ">صادق حسینی</h4>

                            <span style="color: #2f89fc;font-size: 13px">کارشناسی ارشد</span>
                            <div class="text">
                                <p>کارشناسی ارشد شبکه های کامپیوتری</p>
                                <a class="icon" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="icon" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="icon" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="icon" href="{{route('professor')}}"><i class="fab fa-google-plus-g"></i></a>
                            </div>

                        </div>
                    </div>

                </center>
                <center class="col-lg-4">

                    <div class="box" style="background-color: white; height: 500px;width: 70%">
                        <div>
                            <img class="imgBox" src="{{asset('Blog/img/wemane.png')}}">
                        </div>
                        <div>
                            <h4 style="font-size:19px;margin-top: 10px ">الهام فرجی</h4>

                            <span style="color: #2f89fc;font-size: 13px">کارشناسی ارشد</span>
                            <div class="text">
                                <p>کارشناسی ارشد نرم افزار</p>
                                <a class="icon" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="icon" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="icon" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="icon" href="{{route('professor')}}"><i class="fab fa-google-plus-g"></i></a>
                            </div>

                        </div>
                    </div>

                </center>
            </div>
        </div>
        <br>
        <br>
    </section>


    <section class="section-testimonials section-t8 nav-arrow-a ">
        <div class="container">
            <div id="testimonial-carousel" class="owl-carousel owl-arrow">

                <div class="testimonials-box">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h3 style="text-align: center">پست ها</h3>

                            <div class="row">
                                <div onmouseover="ShowButton()" onmouseout="HideButton()" class=" col-md-4">
                                    <div class="card-box-b card-shadow news-box">
                                        <div class="img-box-b">
                                            <img src="Blog/img/acm.jpg" alt="" class="img-b img-fluid"  style="width: 300px ; height: 270px">
                                        </div>
                                        <div class="card-overlay">
                                            <div class="card-header-b">
                                                <div class="card-category-b">
                                                    <div class="Btn_Post">
                                                        <div class="row">
                                                            <a class="col-lg-6" href="#"><i   class="eye far fa-eye"></i></a>
                                                            <a class="col-lg-6" href="#"><i   class="show fas fa-external-link-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-title-b">
                                                    <h2 class="title-2">
                                                        <a href="blog-single.html">
                                                            <br> </a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div onmouseover="ShowButton()" onmouseout="HideButton()" class=" col-md-4">
                                    <div class="card-box-b card-shadow news-box">
                                        <div class="img-box-b">
                                            <img src="Blog/img/mmm.jpg" alt="" class="img-b img-fluid"  style="width: 300px ;  height: 270px">
                                        </div>
                                        <div class="card-overlay">
                                            <div class="card-header-b">
                                                <div class="card-category-b">
                                                    <div class="Btn_Post">
                                                        <div class="row">
                                                            <a class="col-lg-6" href="#"><i class="far fa-eye"></i></a>
                                                            <a class="col-lg-6" href="#"><i
                                                                        class="fas fa-external-link-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-title-b">
                                                    <h2 class="title-2">
                                                        <a href="blog-single.html">
                                                            <br> </a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div onmouseover="ShowButton()" onmouseout="HideButton()" class=" col-md-4">
                                    <div class="card-box-b card-shadow news-box">
                                        <div class="img-box-b">
                                            <img src="Blog/img/ima.jfif" alt="" class="img-b img-fluid" style="width: 300px ;  height: 270px">
                                        </div>
                                        <div class="card-overlay">
                                            <div class="card-header-b">
                                                <div class="card-category-b">
                                                    <div class="Btn_Post">
                                                        <div class="row">
                                                            <a class="col-lg-6" href="#"><i class="far fa-eye"></i></a>
                                                            <a class="col-lg-6" href="#"><i
                                                                        class="fas fa-external-link-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-title-b">
                                                    <h2 class="title-2">
                                                        <a href="blog-single.html">
                                                            <br> </a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div onmouseover="ShowButton()" onmouseout="HideButton()" class=" col-md-4">
                                    <div class="card-box-b card-shadow news-box">
                                        <div class="img-box-b">
                                            <img src="Blog/img/imag.jfif" alt="" class="img-b img-fluid" style="width: 300px ;  height: 270px">
                                        </div>
                                        <div class="card-overlay">
                                            <div class="card-header-b">
                                                <div class="card-category-b">
                                                    <div class="Btn_Post">
                                                        <div class="row">
                                                            <a class="col-lg-6" href="#"><i class="far fa-eye"></i></a>
                                                            <a class="col-lg-6" href="#"><i
                                                                        class="fas fa-external-link-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-title-b">
                                                    <h2 class="title-2">
                                                        <a href="blog-single.html">
                                                            <br> </a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div onmouseover="ShowButton()" onmouseout="HideButton()" class=" col-md-4">
                                    <div class="card-box-b card-shadow news-box">
                                        <div class="img-box-b">
                                            <img src="Blog/img/sardar.jpg" alt="" class="img-b img-fluid" style="width: 300px ;  height: 270px">
                                        </div>
                                        <div class="card-overlay">
                                            <div class="card-header-b">
                                                <div class="card-category-b">
                                                    <div class="Btn_Post">
                                                        <div class="row">
                                                            <a class="col-lg-6" href="#"><i class="far fa-eye"></i></a>
                                                            <a class="col-lg-6" href="#"><i
                                                                        class="fas fa-external-link-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-title-b">
                                                    <h2 class="title-2">
                                                        <a href="blog-single.html">
                                                            <br> </a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div onmouseover="ShowButton()" onmouseout="HideButton()" class=" col-md-4">
                                    <div class="card-box-b card-shadow news-box">
                                        <div class="img-box-b">
                                            <img src="Blog/img/i.jfif" alt="" class="img-b img-fluid" style="width: 300px ;  height: 270px">
                                        </div>
                                        <div class="card-overlay">
                                            <div class="card-header-b">
                                                <div class="card-category-b">
                                                    <div class="Btn_Post">
                                                        <div class="row">
                                                            <a class="col-lg-6" href="#"><i class="far fa-eye"></i></a>
                                                            <a class="col-lg-6" href="#"><i
                                                                        class="fas fa-external-link-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-title-b">
                                                    <h2 class="title-2">
                                                        <a href="blog-single.html">
                                                            <br> </a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            d
                        </div>
                        <div class="SliderMain  col-md-6 col-sm-12">
                            <h3 style="text-align: center">اخبار</h3>
                            <div></div>
                            <div class="row" style="margin-top: 10px">

                                <div class="col-lg-9 col-md-8" id="slider">

                                    <div class="slide active">
                                        <center>
                                            <div>
                                                <img class="imageHead" src="Blog/img/slide-1.jpg">
                                            </div>
                                            <h3 style="text-align: right ; color: black">مسابقات acm</h3>
                                            <p style="direction: rtl;margin-right: 30px ; color: black">
                                                مسابقات acm غرب کشور در دانشگاه ملایر با همکاری گروه کامپیوتر دانشگاه ملایر و همچینی انجکن عملی دکامپیوتر دانشگاه ملایر با شرکت 20 تیم در تاریخ 28 فرودین ماه سا 98 در این محل نمایشگاه های های دائمی این دانشگاه برگزار گردید.
                                            </p>
                                        </center>
                                    </div>

                                    <div class="slide ">
                                        <center>
                                            <div>
                                                <img class="imageHead" src="Blog/img/slide-2.jpg">
                                            </div>
                                            <h3 style="text-align: right ; color: black">مسابقات acm</h3>
                                            <p style="direction: rtl;margin-right: 30px ; color: black">
                                                مسابقات acm غرب کشور در دانشگاه ملایر با همکاری گروه کامپیوتر دانشگاه ملایر و همچینی انجکن عملی دکامپیوتر دانشگاه ملایر با شرکت 20 تیم در تاریخ 28 فرودین ماه سا 98 در این محل نمایشگاه های های دائمی این دانشگاه برگزار گردید.
                                            </p>
                                        </center>
                                    </div>


                                    <div class="slide">
                                        <center>
                                            <div>
                                                <img class="imageHead" src="Blog/img/slide-3.jpg">
                                            </div>
                                            <h3 style="text-align: right ; color: black">مسابقات acm</h3>
                                            <p style="direction: rtl;margin-right: 30px ; color: black">
                                                مسابقات acm غرب کشور در دانشگاه ملایر با همکاری گروه کامپیوتر دانشگاه ملایر و همچینی انجکن عملی دکامپیوتر دانشگاه ملایر با شرکت 20 تیم در تاریخ 28 فرودین ماه سا 98 در این محل نمایشگاه های های دائمی این دانشگاه برگزار گردید.
                                            </p>
                                        </center>

                                    </div>


                                    <div class="slide">
                                        <center>
                                            <div>
                                                <img class="imageHead" src="Blog/img/acm.jpg">
                                            </div>
                                            <h3 style="text-align: right ; color: black">مسابقات acm</h3>
                                            <p style="direction: rtl;margin-right: 30px ; color: black">
                                                مسابقات acm غرب کشور در دانشگاه ملایر با همکاری گروه کامپیوتر دانشگاه ملایر و همچینی انجکن عملی دکامپیوتر دانشگاه ملایر با شرکت 20 تیم در تاریخ 28 فرودین ماه سا 98 در این محل نمایشگاه های های دائمی این دانشگاه برگزار گردید.
                                            </p>
                                        </center>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4" id="slider-list">

                                    <a href="#" class="img1 list-group-item active">
                                        <img class="img" src="{{asset('Blog/img/slide-1.jpg')}}">

                                    </a>

                                    <a href="#" class="img2 list-group-item">
                                        <img class="img" src="{{asset('Blog/img/slide-2.jpg')}}">

                                    </a>

                                    <a href="#" class="img3 list-group-item">
                                        <img class="img" src="{{asset('Blog/img/slide-3.jpg')}}">

                                    </a>


                                    <a href="#" class="img4 list-group-item">
                                        <img class="img" src="{{asset('Blog/img/acm.jpg')}}">

                                    </a>

                                </div>
                            </div>
                            <div ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="carousel-item-a" style="direction: rtl">
        <center class="container section-header">
            <h3 style="text-align: center; margin-top: 40px;margin-bottom: 40px">اطلاعیه ها </h3>
            <div class="col-lg-12 Notifications">
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12"
                     style=" background-color: #31b0d5; border-radius: 10px; ">
                    <h4 style="text-align: center;">اطلاعیه یک</h4>
                </div>
                <p style="text-align: justify">
                    قبل توجه ویژه به تحصیلات تکمیلی ازکامپیوتر موسسه آموزش عالی سلمان، متشکل از
                    اساتید مجرب و نخبه کشور است. از مدت‌ها قبل توجه ویژه به تحصیلات تکمیلی ازکامپیوتر
                    موسسه آموزش عالی سلمان، متشکل از اساتید مجرب و نخبه کشور است. از مدت‌ها
                    قبل توجه ویژه به تحصیلات تکمیلی ازکامپیوتر موسسه آموزش عالی سلمان، متشکل
                    متشکل از اساتید مجرب و نخبه کشور است. از مدت‌ها قبل توجه ویژه به تحصیلات تکمیلی از
                </p>
            </div>
            <div class="col-lg-12 Notifications">
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12" style=" background-color: #31b0d5; border-radius: 10px ">
                    <h4 style="text-align: center;">اطلاعیه یک</h4>
                </div>
                <p style="text-align: justify">
                    قبل توجه ویژه به تحصیلات تکمیلی ازکامپیوتر موسسه آموزش عالی سلمان، متشکل از
                    اساتید مجرب و نخبه کشور است. از مدت‌ها قبل توجه ویژه به تحصیلات تکمیلی ازکامپیوتر
                    موسسه آموزش عالی سلمان، متشکل از اساتید مجرب و نخبه کشور است. از مدت‌ها
                    قبل توجه ویژه به تحصیلات تکمیلی ازکامپیوتر موسسه آموزش عالی سلمان، متشکل
                    متشکل از اساتید مجرب و نخبه کشور است. از مدت‌ها قبل توجه ویژه به تحصیلات تکمیلی از
                </p>
            </div>
            <div class="col-lg-12 Notifications">
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12"
                     style=" box-sizing: border-box; background-color: #31b0d5; border-radius: 10px ">
                    <h4 class="" style="text-align: center;">اطلاعیه یک</h4>
                </div>
                <p style="text-align: justify">
                    قبل توجه ویژه به تحصیلات تکمیلی ازکامپیوتر موسسه آموزش عالی سلمان، متشکل از
                    اساتید مجرب و نخبه کشور است. از مدت‌ها قبل توجه ویژه به تحصیلات تکمیلی ازکامپیوتر
                    موسسه آموزش عالی سلمان، متشکل از اساتید مجرب و نخبه کشور است. از مدت‌ها
                    قبل توجه ویژه به تحصیلات تکمیلی ازکامپیوتر موسسه آموزش عالی سلمان، متشکل
                    متشکل از اساتید مجرب و نخبه کشور است. از مدت‌ها قبل توجه ویژه به تحصیلات تکمیلی از
                </p>
            </div>
        </center>
    </section>

    <section>
        <center>
            <form>
                <h1 style="margin-top: 15px">تماس با ما</h1>
                <input id="name" style="direction: rtl;margin-top: 20px" type="text" class="col-lg-5 form-control"
                       placeholder="نام و نام خانوادگی">
                <input style="direction: rtl;margin-top: 10px" type="text" class="col-lg-5 form-control"
                       placeholder="ایمیل">
                <input style="direction: rtl;margin-top: 10px" type="text" class="col-lg-5 form-control"
                       placeholder="کد کاربری">
                <textarea class="form-control col-lg-4" rows="9" cols="20"
                          style="direction: rtl;height: 300px; margin-top: 20px;margin-bottom: 30px" size="10">

            متن پیام

        </textarea>
                <button class="btn btn-success btn-lg">ثبت</button>
            </form>
        </center>
    </section>
    <br>
    <br>


@stop

