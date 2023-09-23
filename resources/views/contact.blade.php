@extends('layouts.app')
@section('css')
@endsection
@section('content')
<main>
    <div id="root" class="pt-md-7">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-0"></div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 me-md-7">
                <div class="container">
                    <div class="page-title-container">
                        <div class="mb-5 mt-5">
                            <div class="row custom-row">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 pb-3 p-sm-0">
                                    <div class="card">
                                        <div class="card-body pb-7">
                                            <div class="ps-4 pb-7">
                                                <h5 class="fw-semibold color_green mb-0">تواصل معنا</h5><br>
                                                <div class="d-flex"> <i data-acorn-icon="phone" class="ms-2" data-acorn-size="17"></i>
                                                    <p>+971 55 505 5911</p>
                                                </div>
                                                <div class="d-flex"> <i data-acorn-icon="email" class="ms-2" data-acorn-size="17"></i>
                                                    <p>info@hudhood.com</p>
                                                </div>
                                                <div class="d-flex"> <i data-acorn-icon="pin" class="ms-2" data-acorn-size="17"></i>
                                                    <p>الامارات - دبي</p>
                                                </div>
                                                <h5 class="fw-semibold text-primary mb-0">
                                                    تابعنا على مواقع التواصل الاجتماعي
                                                </h5><br>
                                                <div class="pt-3">
                                                    <i data-acorn-icon="facebook" class="ms-2" data-acorn-size="24"></i>
                                                    <i data-acorn-icon="twitter" class="ms-2" data-acorn-size="24"></i>
                                                    <i data-acorn-icon="instagram" class="ms-2" data-acorn-size="24"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 p-sm-0">
                                    <div class="card">
                                        <div class="card-body pb-1">
                                            <div class="ps-4 pb-2">
                                                <h5 class="fw-semibold color_green mb-0">أرسل رسالة</h5><br>
                                                <form action="">
                                                    <p class="fw-bolder fs-6 text-black d-flex justify-content-start">الموضوع:*
                                                    </p>
                                                    <input type="text" name="topic" id="topic" class="form-control input_background">
                                                    <p class="fw-bolder fs-6 text-black d-flex justify-content-start">المحتوى:*
                                                    </p>
                                                    <textarea class="form-control form-control-sm  input_background" name="content" id="" cols="30" rows="5"></textarea>
                                                    <input class="btn color_green_button mt-4" type="submit" value="تسجيل الدخول" style="background-color: #1ED67A;">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-0"></div>
            </div>
        </div>
</main>
@endsection
