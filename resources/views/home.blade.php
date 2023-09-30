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
                                        <label class="rounded-0 radius_top_right p-3 fw-bold male_head" for="radio-one"
                                            style="width: 50%;">ابحث عن زوج</label>
                                        <input type="radio" id="radio-two" name="switch-one" value="no" />
                                        <label class="rounded-0 radius_top_left p-3 fw-bold female_head" for="radio-two"
                                            style="width: 50%;">ابحث عن زوجة</label>
                                    </div>
                                    <div class="card">
                                        <div class="card-body pt-3 pb-7">
                                            <div class="ps-4 pb-5">
                                                <h4 class="fw-semibold mb-0 d-flex">اعثر على شريك حياتك </h4><br>
                                                <form method="POST" action="{{ route('members') }}">
                                                    @csrf
                                                    <h5 class="fw-semibold mb-1">الاسم</h5>
                                                    <input type="hidden" name="look_for" id="look_for_gender"
                                                        value="ذكر">
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
                                        <img class="width_couple_pic"
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
        @php
            $memebers_data = ['latest' => 'الأعضاء الجدد', 'online' => 'الأعضاء المتواجدون حاليًا'];
        @endphp
        <section class="scroll-section" dir="ltr" id="basic">
            @foreach ($memebers_data as $key => $data)
                <h2 class="d-flex" dir="rtl">
                    <span class="fw-bold fs-4">{{ $data }}</span>
                    <form action="{{ route('members') }}" method="POST">
                        @csrf
                        <input type="hidden" name="type" value="{{ $key }}">
                        <button class="transparent_btn">(عرض الكل)</button>
                    </form>

                    @if ($key == 'online')
                        <span class=" bi bi-arrow-clockwise cursor-pointer load_members" onclick="reloadMembers()"></span>
                        <div class="spinner-border spinner-border-sm load_members_spinner" style="display: none"
                            role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    @endif
                </h2>

                <div class="text-center {{ $key }}_members_spinner">
                    <div class="spinner-border" role="status"></div>
                </div>
                <div class="text-center {{ $key }}_no_members" style="display: none">
                    <img src="{{ asset('assets/img/' . $key . '_no_memebers.svg') }}" alt="">
                </div>
                <div class="slide-container swiper {{ $key }}_members_div" style="display: none">
                    <div class="{{ $key }}-slide-content slide-content">
                        <div class="card-wrapper swiper-wrapper {{ $key }}_members" style="height: unset">
                        </div>
                    </div>
                    <div class="{{ $key }}-swiper-button-next swiper-button-next swiper-navBtn"></div>
                    <div class="{{ $key }}-swiper-button-prev swiper-button-prev swiper-navBtn"></div>
                </div>
            @endforeach

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
        $('.male_head').on('click', function() {
            $('#look_for_gender').val('ذكر')
        });
        $('.female_head').on('click', function() {
            $('#look_for_gender').val('انثى')
        });

        function reloadMembers() {
            $('.load_members').hide()
            $('.load_members_spinner').show()
            load_members('online')
        }

        function load_members(type) {
            var url = '{{ route('home_members', ':id') }}';
            url = url.replace(':id', type);
            axios.get(url)
                .then(response => {

                    if (!response.data) {
                        $(`.${type}_members_spinner`).hide()
                        $(`.${type}_no_members`).show()
                        $(`.${type}_members_div`).hide()
                    } else {
                        $(`.${type}_no_members`).hide()
                        $(`.${type}_members_spinner`).hide()
                        $(`.${type}_members_div`).show()
                        $(`.${type}_members`).html(response.data)
                    }
                    stop_online_loading()
                })
                .catch(error => {
                    // Error handling is done in the response interceptor
                });
        }
        load_members('latest')
        load_members('online')

        function stop_online_loading() {
            $('.load_members').show()
            $('.load_members_spinner').hide()
        }
    </script>
@endsection
