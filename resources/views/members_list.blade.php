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

        <section class="scroll-section" dir="ltr" id="basic">
            <h2 class="" dir="rtl">
                <span class="fw-bold fs-4">قائمة الأعضاء
            </h2>

            <div class="row mt-5 mb-5 d-flex justify-content-center">
                <div class="col-md-3 card swiper-slide m-md-3 p-0" style="max-width: 350px;">
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
                <div class="col-md-3 card swiper-slide m-md-3 p-0" style="max-width: 350px;">
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
                <div class="col-md-3 card swiper-slide m-md-3 p-0" style="max-width: 350px;">
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
                <div class="col-md-3 card swiper-slide m-md-3 p-0" style="max-width: 350px;">
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
                <div class="col-md-3 card swiper-slide m-md-3 p-0" style="max-width: 350px;">
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
                <div class="col-md-3 card swiper-slide m-md-3 p-0" style="max-width: 350px;">
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
                <div class="col-md-3 card swiper-slide m-md-3 p-0" style="max-width: 350px;">
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
