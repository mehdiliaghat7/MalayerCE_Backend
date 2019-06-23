@extends('layouts.manager')
@section('title')
    <title>پنل مدیر گروه</title>
@stop
@section('link')
    <link rel="stylesheet" href="{{asset('panel/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
@stop
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <h1>لیست دانشجو</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">لیست دانشجو</a></li>
                                <li class="active">دانشجو</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#header -->
    <!-- Content -->

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">لیست دانشجویان</strong>
                        </div>
                        <div class="card-body" style="direction: rtl;text-align: center">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered"
                                   style="direction: rtl">
                                <thead style="text-align: center">
                                <tr>
                                    <th>تصویر</th>
                                    <th>نام کاربر</th>
                                    <th>کد کاربر</th>
                                    <th> نوع کاربر</th>
                                    <th> </th>
                                </tr>
                                </thead>
                                <tbody style="text-align: center">
                                <tr>
                                    <td></td>
                                    <td>رضا فارسی</td>
                                    <td>369745285</td>
                                    <td>369745285</td>

                                    <td>
                                        <button class="btn btn-outline-danger btn-small">حذف</button>
                                        <button class="btn btn-outline-primary btn-small">ویرایش</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>رضا فارسی</td>
                                    <td>369745285</td>
                                    <td>369745285</td>

                                    <td>
                                        <button class="btn btn-outline-danger btn-small">حذف</button>
                                        <button class="btn btn-outline-primary btn-small">ویرایش</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>رضا فارسی</td>
                                    <td>369745285</td>
                                    <td>369745285</td>

                                    <td>
                                        <button class="btn btn-outline-danger btn-small">حذف</button>
                                        <button class="btn btn-outline-primary btn-small">ویرایش</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>رضا فارسی</td>
                                    <td>369745285</td>
                                    <td>369745285</td>

                                    <td>
                                        <button class="btn btn-outline-danger btn-small">حذف</button>
                                        <button class="btn btn-outline-primary btn-small">ویرایش</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>رضا فارسی</td>
                                    <td>369745285</td>
                                    <td>369745285</td>

                                    <td>
                                        <button class="btn btn-outline-danger btn-small">حذف</button>
                                        <button class="btn btn-outline-primary btn-small">ویرایش</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>رضا فارسی</td>
                                    <td>369745285</td>
                                    <td>369745285</td>

                                    <td>
                                        <button class="btn btn-outline-danger btn-small">حذف</button>
                                        <button class="btn btn-outline-primary btn-small">ویرایش</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>محمد فارسی</td>
                                    <td>369745285</td>
                                    <td>369745285</td>

                                    <td>
                                        <button class="btn btn-outline-danger btn-small">حذف</button>
                                        <button class="btn btn-outline-primary btn-small">ویرایش</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>علی فارسی</td>
                                    <td>369745285</td>
                                    <td>369745285</td>

                                    <td>
                                        <button class="btn btn-outline-danger btn-small">حذف</button>
                                        <button class="btn btn-outline-primary btn-small">ویرایش</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>مرتضی فارسی</td>
                                    <td>369745285</td>
                                    <td>369745285</td>

                                    <td>
                                        <button class="btn btn-outline-danger btn-small">حذف</button>
                                        <button class="btn btn-outline-primary btn-small">ویرایش</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>رضا فارسی</td>
                                    <td>369745285</td>
                                    <td>369745285</td>

                                    <td>
                                        <button class="btn btn-outline-danger btn-small">حذف</button>
                                        <button class="btn btn-outline-primary btn-small">ویرایش</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div>

    <!-- /.content -->
    <div class="clearfix"></div>

@stop
@section('script')
    <script src="{{asset('panel/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('panel/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('panel/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('panel/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('panel/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('panel/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('panel/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('panel/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('panel/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('panel/assets/js/init/datatables-init.js')}}"></script>
    <script src="{{asset('panel/assets/js/init/weather-init.js')}}"></script>
    <script src="{{asset('panel/assets/js/main.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>
@stop