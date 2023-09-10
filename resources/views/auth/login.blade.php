@extends('layouts.app')

@section('content')
<main>
    <section class="scroll-section" id="helpText">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row mb-5 mt-xl-7">
                <div class=" col-md-2"></div>
                <div class="col-sm-12 col-md-8">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="container mt-5">
                                <div class="row  p-4" dir="rtl">
                                    <div class="col-12 d-flex">
                                        <p class="fw-bolder fs-4 text-black ms-auto">بيانات الدخول</p>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder fs-6 text-black d-flex justify-content-start">البريد
                                            الالكتروني</p>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert"  style="justify-content: start;display: flex;">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">


                                        <p class="fw-bolder fs-6 text-black d-flex justify-content-start">كلمة المرور <i
                                                class="m-0" data-acorn-icon="eye"></i></p>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert"  style="justify-content: start;display: flex;">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-0 col-md-2"></div>
            </div>
            <div class="row" dir="rtl">
                <div class="col-2"></div>
                <div class="col-8 mt-4">
                    <p class="fw-bolder  text-black d-flex justify-content-start">لا تملك حساب؟<a
                            href="register.html">سجّل
                            الآن</a></p>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row" dir="rtl">
                <div class="col-2"></div>
                <div class="col-8 mt-4 d-flex ">
                    <button class="btn btn-xl btn-primary" type="submit">تسجيل الدخول</button>
                    <div class="me-3 d-flex align-items-center">
                        <p class="fw-bolder text-black d-flex justify-content-start mb-0"><a href="#">نسيت كلمة
                                المرور؟</a></p>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </form>
    </section>
</main>
@endsection
