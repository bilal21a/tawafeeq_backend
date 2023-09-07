@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('css')
    <style>
        .backgound_1 {
            background-image: url('{{ asset('assets/img/tawfeeq_background_1.png') }}');
            background-repeat: round;
        }

        .backgound_2 {
            background-image: url('{{ asset('assets/img/tawfeeq_background_2.png') }}');
            background-repeat: round;
        }
    </style>
@endsection
@section('content')
    <main>
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-0"></div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 me-md-7">
                <div class="container">
                    <div class="page-title-container">
                        <div class="mb-5 mt-5">
                            <div class="row custom-row">

                                <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 pb-3 p-sm-0">
                                    <div class="switch-field mb-0">
                                        <input type="radio" id="radio-one" name="switch-one" value="yes" checked />
                                        <label class="rounded-0 radius_top_right p-3 fw-bold" for="radio-one"
                                            style="width: 50%;">ابحث عن زوج</label>
                                        <input type="radio" id="radio-two" name="switch-one" value="no" />
                                        <label class="rounded-0 radius_top_left p-3 fw-bold" for="radio-two"
                                            style="width: 50%;">ابحث عن زوجة</label>
                                    </div>
                                    <div class="card">
                                        <div class="card-body pt-3 pb-7">

                                            <div class="ps-4 pb-5">
                                                <h4 class="fw-semibold mb-0">اعثر على شريك حياتك </h4><br>
                                                <form action="">
                                                    <h5 class="fw-semibold mb-1">الاسم</h5>
                                                    <input type="text" name="topic" id="topic"
                                                        class="form-control input_background" placeholder="الاسم">
                                                    <div class="row mt-3">
                                                        <div class="col-6 ps-0">
                                                            <h5 class="fw-semibold mb-1">الجنسية</h5>
                                                            <input type="text" name="topic" id="topic"
                                                                class="form-control input_background" placeholder="الجنسية">
                                                        </div>
                                                        <div class="col-6">
                                                            <h5 class="fw-semibold mb-1">مكان الاقامة</h5>
                                                            <input type="text" name="topic" id="topic"
                                                                class="form-control input_background"
                                                                placeholder="مكان الاقامة">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-4 ps-0">
                                                            <h5 class="fw-semibold mb-1">العمر من </h5>
                                                            <input type="text" name="topic" id="topic"
                                                                class="form-control input_background"
                                                                placeholder="العمر من">
                                                        </div>
                                                        <div class="col-4 ps-0">
                                                            <h5 class="fw-semibold mb-1">العمر الى</h5>
                                                            <input type="text" name="topic" id="topic"
                                                                class="form-control input_background"
                                                                placeholder="العمر الى">
                                                        </div>
                                                        <div class="col-4">
                                                            <h5 class="fw-semibold mb-1"> الحالة الاجتماعية</h5>
                                                            <input type="text" name="topic" id="topic"
                                                                class="form-control input_background"
                                                                placeholder="الحالة الاجتماعية">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <button class="btn btn-xl btn-primary mt-3"
                                                                type="button">تسجيل</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 p-sm-0">
                                    <div class="">
                                        <img class="width_couple_pic" width="400px"
                                            src="{{ asset('assets/img/find_partner.png') }}" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-0"></div>
            </div>
        </div>
        <section class="scroll-section" dir="ltr" id="basic">
            <h2 class="" dir="rtl"><span class="fw-bold fs-4">الأعضاء الجدد</span>(عرض الكل)</h2>
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper" style="height: unset">
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/man.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" green_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/woman.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/woman.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" green_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/man.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/woman.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/man.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">

                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/woman.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" green_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/man.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/woman.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/man.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/woman.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/man.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
            </div>
            <h2 class="" dir="rtl"><span class="fw-bold fs-4">الأعضاء المتواجدون حاليًا</span>(عرض
                الكل)</h2>
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper " style="height: unset">
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/man.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" green_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/woman.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/woman.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" green_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/man.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">

                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/woman.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/man.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/woman.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" green_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/man.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">

                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/woman.png') }}"
                                            class="card-img-top" alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">

                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/man.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/woman.png') }}"
                                            class="card-img-top" alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide" style="width: unset !important;">
                            <div class=" p-0 width_silder ">
                                <div class="card" dir="rtl">
                                    <div>
                                        <span
                                            class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style=" font-size: 9px;">منذ دقيقة</span>
                                        <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
                                        </div>
                                        <span
                                            class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                                            style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                                            30 دقيقة</span>
                                        <img src="{{ asset('assets/img/homepage_img/man.png') }}" class="card-img-top"
                                            alt="card image" />
                                    </div>
                                    <div class="card-body pb-2">
                                        <h5 class="card-title fw-bold">بومحمد _44</h5>
                                        <div class="star-row">
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                            <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                                        </div>
                                        <p class="card-text mb-1" style="font-size: 13px;">29 سنة أبوظبي -
                                            الامارات</p>
                                        <p class="mb-0">أبحث عن:يكون اماراتي.. غير مدخن ....</p>
                                    </div>
                                    <div class="d-flex justify-content-between ps-4 pb-3">
                                        <div class="me-3">
                                            <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                                            <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
                                        </div>
                                        <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
            </div>
            <h2 class="" dir="rtl"><span class="fw-bold fs-4">خدماتنا</span>(عرض الكل)</h2>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card h-100 hover-scale-up  backgound_1 background_color">
                        <div class="card-body pb-0">
                            <div class="d-flex flex-column">
                                <div class="display-4"> خدمات تجهيز الأفراح </div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-column">
                                    <p class="line_height fw-light">المحامي الاقرب لك للحصول على استشارة المستشار القانوني
                                        المختص في الاحوال الشخصية في حدوث اي خلاف بعقد النجاح او مشاكل زوجية او مشاكل عائلية
                                        لمعرفة ما لك وما عليك في قانون دولتك. إخلاء مسؤولية: ( أي معاملة مع مزودي الخدمات
                                        على مسؤوليتك الخاصة )
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                    <div class="card h-100 hover-scale-up backgound_2 background_color pe-3">
                        <div class="card-body pb-0">
                            <div class="d-flex flex-column">
                                <div class="display-4"> خدمة مراكز الفحص الطبي </div>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-column">
                                    <p class="line_height fw-light">المحامي الاقرب لك للحصول على استشارة المستشار
                                        القانوني المختص في الاحوال الشخصية في حدوث اي خلاف بعقد النجاح او مشاكل
                                        زوجية او مشاكل عائلية لمعرفة ما لك وما عليك في قانون دولتك. إخلاء مسؤولية: (
                                        أي معاملة مع مزودي
                                        الخدمات على مسؤوليتك الخاصة )
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>
    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 5,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
@endsection
