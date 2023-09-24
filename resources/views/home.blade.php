@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        form h5 {
            display: flex;
            justify-content: start;
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
                                                <h4 class="fw-semibold mb-0 d-flex">اعثر على شريك حياتك </h4><br>
                                                <form method="POST" action="{{ route('members') }}">
                                                    @csrf
                                                    <h5 class="fw-semibold mb-1">الاسم</h5>
                                                    <input type="text" name="name" id="name"
                                                        value="{{ isset($name_search) ? $name_search : '' }}"
                                                        class="form-control input_background" placeholder="الاسم">
                                                    <div class="row mt-3">
                                                        <div class="col-md-6 ps-0">
                                                            <h5 class="fw-semibold mb-1">الجنسية</h5>
                                                            <select class="form-select width_input input_background"
                                                                name="nationality">
                                                                <option selected="selected" disabled>الجنسية</option>
                                                                @foreach ($countryNames as $countryName)
                                                                    <option value="{{ $countryName }}">{{ $countryName }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="fw-semibold mb-1">مكان الاقامة</h5>
                                                            <select class="form-select width_input input_background"
                                                                name="country_of_residence">
                                                                <option selected="selected" disabled>مكان الاقامة</option>
                                                                @foreach ($countryNames as $countryName)
                                                                    <option value="{{ $countryName }}">{{ $countryName }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-4 ps-0">
                                                            <h5 class="fw-semibold mb-1">العمر من </h5>
                                                            <input type="number" name="age_from" id="age_from"
                                                                class="form-control input_background"
                                                                placeholder="العمر من">
                                                        </div>
                                                        <div class="col-md-4 ps-0">
                                                            <h5 class="fw-semibold mb-1">العمر الى</h5>
                                                            <input type="number" name="age_to" id="age_to"
                                                                class="form-control input_background"
                                                                placeholder="العمر الى">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h5 class="fw-semibold mb-1"> الحالة الاجتماعية</h5>
                                                            <select class="form-select width_input input_background"
                                                                name="marital_status">
                                                                <option selected="selected" disabled>الحالة الاجتماعية
                                                                </option>
                                                                @foreach ($maritalStatusNames as $maritalStatusName)
                                                                    <option value="{{ $maritalStatusName }}">
                                                                        {{ $maritalStatusName }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-3 d-flex">
                                                            <button type="submit" class="btn btn-primary mt-3">ابدأ
                                                                البحث</button>
                                                            <a href="{{ route('advance_search') }}"
                                                                class="btn btn-light mt-3 me-2" type="button">بحث متقدم</a>
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
                        @foreach ($users as $user)
                            <div class="card swiper-slide" style="width: unset !important;">
                                @include('common.card')
                            </div>
                        @endforeach

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
