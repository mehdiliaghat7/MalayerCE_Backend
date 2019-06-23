@extends('layouts.manager')
@section('title')
    <title>پنل مدیر گروه</title>
@stop
@section('link')

@stop
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <h1>ثبت کاربر</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">ثبت کاربر</a></li>
                                <li class="active">کاربر</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#header -->
    <!-- Content -->
    <center>
        <div class="breadcrumbs ">


            <input class="BtnStudent btn btn-primary" type="submit" value="دانشجو"  onclick="hidestudent('profssor');    showProfessor('student')">
            <input class="BtnProfssor btn btn-primary" type="submit" value="استاد"   onclick="hideProfessor('student'); showstudent('profssor')">
        </div>
    </center>
    <div class="content">
        <div class="animated fadeIn">
            <div class="buttons">

                <div class="row">
                    <center>
                        <div class="profssor col-md-7" id="profssor">

                            <div class="card" style="direction: rtl">
                                <div class="card-header Header_card">
                                    <center>
                                        <strong>ثبت استاد</strong>
                                    </center>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="post" action="{{route('login')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group" >
                                            <select name="type" class="User-Type-L col-lg-12 col-xs-12" title="نوع کاربر">
                                                <option value="professor" style="border-radius: 20px">مدیرگروه</option>
                                                <option value="student" style="border-radius: 20px">دانشجو</option>
                                                <option value="professor" style="border-radius: 20px">استاد</option>
                                            </select>
                                        </div>

                                        <div class=" form-group  inputWithiconLogin">
                                            <input name="user_code" type="text" class="usernameL col-lg-12 col-xs-12" placeholder="نام کاربری..." required >
                                            <span class="borderL"></span>
                                            <i class="fas fa-user"></i>
                                        </div>

                                        <div class=" form-group inputWithiconPassword">
                                            <input name="password" type="text" class="passwordL col-lg-12 col-xs-12" placeholder="رمز عبور..." required >
                                            <span class="borderPL"></span>
                                            <i class="fas fa-lock"></i>
                                        </div>
                                        <p class="col-md-12 textL">رمز عبور خود را فراموش کرده اید؟</p>
                                        <div class="col-lg-12 col-sm-12 col-xs-12"
                                             style="display: flex ;justify-content: center">
                                            <div class=" form-group col-lg-7 col-md-7 col-sm-8">
                                                <button type="submit" class="ُSubmitL text-center col-lg-12 col-md-10 col-sm-10 col-xs-12">تایید

                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="row">

                                            {{ csrf_field() }}
                                            <div class="col-md-6">
                                                <label style="float: right;display: inline-block"> نام و نام خانوادگی
                                                    :</label><br/>
                                                <input type="text" class="form-control col-md-12"
                                                       aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                            <div class="col-md-6">
                                                <label style="float: right"> کد ملی :</label><br>
                                                <input type="text" class="form-control col-md-12" aria-label="Username"
                                                       aria-describedby="addon-wrapping">
                                            </div>
                                            <div class="col-md-6">
                                                <label style="float: right;display: inline-block">شماره تلفن
                                                    :</label><br/>
                                                <input type="text" class="form-control col-md-12"
                                                       aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                            <div class="col-md-6">
                                                <label style="float: right;display: inline-block">جنسیت
                                                    :</label><br/>
                                                <select class="form-control col-md-12">
                                                    <option>مرد</option>
                                                    <option>زن</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label style="float: right"> کد استاد :</label><br>
                                                <input type="text" class="form-control col-md-12" aria-label="Username"
                                                       aria-describedby="addon-wrapping">
                                            </div>
                                            <div class="col-md-6">
                                                <label style="float: right;display: inline-block">سطح دسترسی
                                                    :</label><br/>
                                                <select class="form-control col-md-12">
                                                    <option>مسئول سیستم</option>
                                                    <option>مدیر</option>
                                                    <option>استاد</option>
                                                </select></div>
                                            <div class="col-md-6">
                                                <label style="float: right;display: inline-block">تحصیلات
                                                    :</label><br/>
                                                <input type="text" class="form-control col-md-12"
                                                       aria-label="Username" aria-describedby="addon-wrapping">

                                            </div>
                                            <div class="col-md-6">
                                                <label style="float: right;display: inline-block">نوع کاربری
                                                    :</label><br/>
                                                <select class="form-control col-md-12">
                                                    <option>رسمی</option>
                                                    <option>حق تدریس</option>
                                                    <option>مدیرگروه</option>
                                                </select></div>
                                            <div class="col-md-6">
                                                <label style="float: right;display: inline-block">زمان حضور
                                                    :</label><br/>
                                                <input type="text" class="form-control col-md-12"
                                                       aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                            <div class="col-md-6">
                                                <label style="float: right;display: inline-block">رمزعبور
                                                    :</label><br/>
                                                <input type="text" class="form-control col-md-12"
                                                       aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                            <div class="col-md-6">
                                                <label style="float: right;display: inline-block">ایمیل
                                                    :</label><br/>
                                                <input type="text" class="form-control col-md-12"
                                                       aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label style="float: right;display: inline-block">انتخاب عکس
                                                    :</label><br/>
                                                <input type="file" class="form-control col-md-12">
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" class="submitCreateUser col-md-2 btn btn-primary" value="ثبت">
                                            </div>




                                    </div>
                                </div>


                                </div>

                            </div>

                            </div><!-- /# card -->
                        </div>
                        <div class="student col-md-7" id="student" >

                            <div class="card" style="direction: rtl">
                                <div class="card-header Header_card">
                                    <center>
                                        <strong>ثبت دانشجو</strong>
                                    </center>
                                </div>
                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <label style="float: right;display: inline-block"> نام و نام خانوادگی
                                                :</label><br/>
                                            <input type="text" class="form-control col-md-12"
                                                   aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="col-md-6">
                                            <label style="float: right"> کدملی :</label><br>
                                            <input type="text" class="form-control col-md-12" aria-label="Username"
                                                   aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="col-md-6">
                                            <label style="float: right;display: inline-block"> نام پدر
                                                :</label><br/>
                                            <input type="text" class="form-control col-md-12"
                                                   aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="col-md-6">
                                            <label style="float: right"> کد دانشجویی :</label><br>
                                            <input type="text" class="form-control col-md-12" aria-label="Username"
                                                   aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="col-md-6">
                                            <label style="float: right;display: inline-block"> شماره تلفن
                                                :</label><br/>
                                            <input type="text" class="form-control col-md-12"
                                                   aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="col-md-6">
                                            <label style="float: right;display: inline-block">جنسیت
                                                :</label><br/>
                                            <select class="form-control col-md-12">
                                                <option>مرد</option>
                                                <option>زن</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label style="float: right"> ایمیل :</label><br>
                                            <input type="text" class="form-control col-md-12" aria-label="Username"
                                                   aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="col-md-6">
                                            <label style="float: right;display: inline-block">کلمه عبور
                                                :</label><br/>
                                            <input type="text" class="form-control col-md-12"
                                                   aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label style="float: right;display: inline-block">انتخاب عکس
                                                :</label><br/>
                                            <input type="file" class="form-control col-md-12">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" class="submitCreateUser col-md-2 btn btn-primary" value="ثبت">
                                        </div>
                                    </div>
                                </div>

                            </div><!-- /# card -->
                        </div>
                    </center>
                </div>

            </div><!-- .row -->
        </div> <!-- .buttons -->
    </div>

    <!-- /.content -->
    <div class="clearfix"></div>

@stop
@section('script')
    <script src="{{asset('panel/assets/js/Create_User.js')}}"></script>
@stop