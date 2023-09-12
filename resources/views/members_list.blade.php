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
                @foreach ($users as $user)
                    <div class="col-md-3 card swiper-slide m-md-3 p-0" style="max-width: 350px;">
                        @include('common.card')
                    </div>
                @endforeach
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
