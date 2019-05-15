@extends('layouts.blog')
@section('introduction')
    <div class="container" >
        <div class="row"  >
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card-box-c foo" >
                    <div class="card-header-c d-flex">
                        <div class="card-title-c align-self-center col-md-12">
                            <div style="padding-top:20px" >
                                <a href="#"> <img  src="{{ asset('blog/img/coin.png') }}" style="width: 100px"></a>
                            </div>
                            <br>
                            <h2 class="title-c">درآمدزایی</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            برای آنهااست که به دنبال فرصتی برای بروز و ظهور می گردند و تاکنون مجالی پیدا نکرده اند تا توانایی های خود را بالفعل کرده وبه رخ بکشند.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <!-- <div class="card-box-ico">
                          <span class="fa fa-usd"></span>
                        </div>-->
                        <div class="card-title-c align-self-center col-md-12">
                            <div >
                                <a href="#"> <img  src="{{ asset('blog/img/learn.png') }}" style="width: 100px"></a>
                            </div>
                            <br>
                            <h4 class="title-c">آموزش</h4>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            آموزش بستر رشد استعداد ها شکوفا را فراهم می کند تا در مسیر درست به سوی هدف هایی متعالی حرکت کرده و ایده های خودرا عملیاتی کنند.
                        </p>
                    </div>
                    <!--<div class="card-footer-c">
                      <a href="#" class="link-c link-icon">بیشتر
                        <span class="ion-ios-arrow-forward"></span>
                      </a>
                    </div>-->

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <!-- <div class="card-box-ico">
                          <span class="fa fa-home"></span>
                        </div>-->
                        <div class="card-title-c align-self-center col-md-12">
                            <div >
                                <a href="#"> <img  src="{{ asset('blog/img/goal.png') }}" style="width: 100px"></a>
                            </div>
                            <br>
                            <h2 class="title-c">کشف استعداد</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            تمام ایده ها زمانی ارزش پیدا می کنند که تبدیل به محصولی دلخواه بازار شوند واز راه آنها در آمدزایی شود اینجا دقیقا محل درآمدزایی است شروع کنید.
                        </p>
                    </div>
                    <!--    <div class="card-footer-c">
                      <a href="#" class="link-c link-icon">بیشتر
                        <span class="ion-ios-arrow-forward"></span>
                      </a>
                    </div>-->

                </div>
            </div>
        </div>
    </div>
@stop
@section('section-agents section-t8')

@stop
@section('news')
    <div class="container">
        <div id="testimonial-carousel" class="owl-carousel owl-arrow">
            <div class="carousel-item-a">
                <div class="testimonials-box">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h3 style="text-align: center"> اساتید گروه کامپیوتر</h3>
                            <hr>
                            <div class="row">
                                <div class=" col-md-4">
                                    <div class="card-box-b card-shadow news-box">
                                        <div class="img-box-b">
                                            <img src="{{ asset('blog/img/agent-1.jpg') }}" alt="" class="img-b img-fluid">
                                        </div>
                                        <div class="card-overlay">
                                            <div class="card-header-b">
                                                <div class="card-category-b">

                                                </div>
                                                <div class="card-title-b">
                                                    <h2 class="title-2">
                                                        <a href="#">
                                                            <br></a>
                                                    </h2>
                                                </div>
                                                <div class="card-date">
                                                    <a href="#" class="category-b"> کاربر 1</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="card-box-b card-shadow news-box">
                                        <div class="img-box-b" >
                                            <img src="{{ asset('blog/img/picc1.jpg') }}" alt="" class="img-b img-fluid" >
                                        </div>
                                        <div class="card-overlay">
                                            <div class="card-header-b">
                                                <div class="card-category-b">

                                                </div>
                                                <div class="card-title-b">
                                                    <h2 class="title-2">
                                                        <a href="blog-single.html">
                                                            <br>  </a>
                                                    </h2>
                                                </div>
                                                <div class="card-date">
                                                    <a href="#" class="category-b">کاربر 2</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="card-box-b card-shadow news-box">
                                        <div class="img-box-b">
                                            <img src="{{ asset('blog/img/agent-6.jpg') }}" alt="" class="img-b img-fluid">
                                        </div>
                                        <div class="card-overlay">
                                            <div class="card-header-b">
                                                <div class="card-category-b">

                                                </div>
                                                <div class="card-title-b">
                                                    <h2 class="title-2">
                                                        <a href="blog-single.html">
                                                            <br>  </a>
                                                    </h2>
                                                </div>
                                                <div class="card-date">
                                                    <a  href="#" class="category-b">کاربر 3</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class=" col-md-4">
                                    <div class="card-box-b card-shadow news-box">
                                        <div class="img-box-b">
                                            <img src="{{ asset('blog/img/agent-2.jpg') }}" alt="" class="img-b img-fluid">
                                        </div>
                                        <div class="card-overlay">
                                            <div class="card-header-b">
                                                <div class="card-category-b">

                                                </div>
                                                <div class="card-title-b">
                                                    <h2 class="title-2">
                                                        <a href="blog-single.html">
                                                            <br>  </a>
                                                    </h2>
                                                </div>
                                                <div class="card-date">
                                                    <a href="blog-single.html" class="category-b">کاربر 4</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="card-box-b card-shadow news-box">
                                        <div class="img-box-b">
                                            <img src="{{ asset('blog/img/picc2.jpg') }}" alt="" class="img-b img-fluid">
                                        </div>
                                        <div class="card-overlay">
                                            <div class="card-header-b">
                                                <div class="card-category-b">

                                                </div>
                                                <div class="card-title-b">
                                                    <h2 class="title-2">
                                                        <a href="blog-single.html">
                                                            <br> </a>
                                                    </h2>
                                                </div>
                                                <div class="card-date">
                                                    <a href="#" class="category-b">کاربر 5</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="card-box-b card-shadow news-box">
                                        <div class="img-box-b">
                                            <img src="{{ asset('blog/img/picc3.jpg') }}" alt="" class="img-b img-fluid">
                                        </div>
                                        <div class="card-overlay">
                                            <div class="card-header-b">
                                                <div class="card-category-b">

                                                </div>
                                                <div class="card-title-b">
                                                    <h2 class="title-2">
                                                        <a href="blog-single.html">
                                                            <br> </a>
                                                    </h2>
                                                </div>
                                                <div class="card-date">
                                                    <a href="#" class="category-b">کاربر 6</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <!--<div class="col-sm-12 col-md-1 vertical" ></div>-->
                        <div class="col-sm-12 col-md-6">
                            <h3 style="text-align: center">اخبار</h3>
                            <hr>
                            <div id="demo" class="carousel slide" data-ride="carousel">

                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo" data-slide-to="1"></li>
                                    <li data-target="#demo" data-slide-to="2"></li>
                                </ul>



                                <!-- The slideshow -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('blog/img/plan3.jpg') }}" alt="Los Angeles">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('blog/img/plan1.jpg') }}" alt="Chicago">
                                        <br>
                                        <p style="text-align: right"> sfsfsfsdfsdf</p>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('blog/img/plan2.jpg') }}" alt="New York">
                                    </div>
                                </div>



                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                            <br>
                            <br>

                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
