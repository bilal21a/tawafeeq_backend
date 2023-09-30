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
                                        <p class="fw-bolder fs-4 ms-auto">بيانات الدخول</p>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder fs-6 d-flex justify-content-start">البريد
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

                                        <p class="fw-bolder d-flex justify-content-start">كلمة المرور
                                            <i data-acorn-icon="eye" class="eye_icon m-0" onclick="hidePassword()"
                                                style="display: none;"></i>
                                            <i data-acorn-icon="eye-off" class="eye_off_icon m-0"
                                                onclick="showPassword()"></i>
                                        </p>
                                        <input type="password" name="password" id="password"
                                            class="form-control input_background password_field"
                                            value="{{ old('password') }}" required autocomplete="password" >
                                        @error('password')
                                            <span class="invalid-feedback" role="alert"  style="justify-content: start;display: flex;">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <input type="hidden" name="remember" value="1">
                                    </div>
                                </div>
                                <div class="mb-3 pe-4">
                                    <div class="d-flex">
                                        <label class="fw-bolder form-check-label ps-3" for="remember">
                                            تذكرني                            </label>
                                        <input class="form-check-input mt-0" type="checkbox" name="remember" id="remember">
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
                    <p class="fw-bolder d-flex justify-content-start">لا تملك حساب؟<a
                            href="{{ route('register') }}">سجّل
                            الآن</a></p>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row" dir="rtl">
                <div class="col-2"></div>
                <div class="col-8 mt-4 d-flex ">
                    <button class="btn btn-xl btn-primary" type="submit">تسجيل الدخول</button>
                    <div class="me-3 d-flex align-items-center">
                        {{-- <p class="fw-bolder d-flex justify-content-start mb-0"><a href="#">نسيت كلمة
                                المرور؟</a></p> --}}
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </form>
    </section>
</main>
@endsection
