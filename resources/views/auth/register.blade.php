@extends('layouts.app')
@section('content')
    {{-- @dd($errors) --}}
    <main>
        <section class="scroll-section" id="helpText">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row mb-5">
                    <div class="col-sm-0 col-md-2"></div>
                    <div class="col-sm-12 col-md-8">
                        <div class="card">
                            <div class="card-body p-0">

                                <div class="container mt-5">
                                    <div class="row  p-4" dir="rtl">
                                        <div class="col-12 d-flex">
                                            <p class="fw-bolder ms-auto">بيانات الدخول</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <!-- <i data-acorn-icon="user"></i> -->
                                            <p class="fw-bolder d-flex justify-content-start">اسم العضو</p>
                                            <input type="text" name="name" id="name"
                                                class="form-control input_background" value="{{ old('name') }}"
                                                autocomplete="name" autofocus>
                                            @error('name')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">البريد الالكتروني</p>
                                            <input type="email" name="email" id="email"
                                                class="form-control input_background" value="{{ old('email') }}"
                                                autocomplete="email" autofocus>
                                            @error('email')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">كلمة المرور <i class="m-0"
                                                    data-acorn-icon="eye"></i></p>
                                            <input type="password" name="password" id="password"
                                                class="form-control input_background" value="{{ old('password') }}"
                                                autocomplete="password" autofocus>
                                            @error('password')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الجنس
                                            </p>
                                            <select class="form-control input_background" name="gender" id="gender">
                                                <option value="" selected disabled>اختر...</option>
                                                <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>ذكر
                                                </option>
                                                <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>
                                                    انثى</option>
                                            </select>
                                            @error('gender')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
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
                <div class="row mb-5">
                    <div class="col-sm-0 col-md-2"></div>
                    <div class="col-sm-12 col-md-8">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="container mt-5">
                                    <div class="row  p-4" dir="rtl">
                                        <div class="col-12 d-flex">
                                            <p class="fw-bolder ms-auto">الجنسية والاقامة </p>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الجنسية
                                            </p>
                                            <select class="form-control input_background" name="nationality"
                                                id="nationality">
                                                <option value="" disabled
                                                    {{ old('nationality') === null ? 'selected' : '' }}>اختر البلد...
                                                </option>
                                                <option value="أوكرانيا"
                                                    {{ old('nationality') === 'أوكرانيا' ? 'selected' : '' }}>أوكرانيا
                                                </option>
                                                <option value="اخر"
                                                    {{ old('nationality') === 'اخر' ? 'selected' : '' }}>
                                                    اخر</option>
                                                <option value="الاردن"
                                                    {{ old('nationality') === 'الاردن' ? 'selected' : '' }}>الاردن</option>
                                                <option value="" disabled
                                                    {{ old('nationality') === null ? 'selected' : '' }}>اختر البلد...
                                                </option>
                                                <option value="أوكرانيا"
                                                    {{ old('nationality') === 'أوكرانيا' ? 'selected' : '' }}>أوكرانيا
                                                </option>
                                                <option value="اخر"
                                                    {{ old('nationality') === 'اخر' ? 'selected' : '' }}>اخر</option>
                                                <option value="الاردن"
                                                    {{ old('nationality') === 'الاردن' ? 'selected' : '' }}>الاردن</option>
                                                <option value="الامارات"
                                                    {{ old('nationality') === 'الامارات' ? 'selected' : '' }}>الامارات
                                                </option>
                                                <option value="البحرين"
                                                    {{ old('nationality') === 'البحرين' ? 'selected' : '' }}>البحرين
                                                </option>
                                                <option value="الجزائر"
                                                    {{ old('nationality') === 'الجزائر' ? 'selected' : '' }}>الجزائر
                                                </option>
                                                <option value="السعودية"
                                                    {{ old('nationality') === 'السعودية' ? 'selected' : '' }}>السعودية
                                                </option>
                                                <option value="السودان"
                                                    {{ old('nationality') === 'السودان' ? 'selected' : '' }}>السودان
                                                </option>
                                                <option value="الصومال"
                                                    {{ old('nationality') === 'الصومال' ? 'selected' : '' }}>الصومال
                                                </option>
                                                <option value="العراق"
                                                    {{ old('nationality') === 'العراق' ? 'selected' : '' }}>العراق</option>
                                                <option value="الكويت"
                                                    {{ old('nationality') === 'الكويت' ? 'selected' : '' }}>الكويت</option>
                                                <option value="المغرب"
                                                    {{ old('nationality') === 'المغرب' ? 'selected' : '' }}>المغرب</option>
                                                <option value="اليمن"
                                                    {{ old('nationality') === 'اليمن' ? 'selected' : '' }}>اليمن</option>
                                                <option value="ایران"
                                                    {{ old('nationality') === 'ایران' ? 'selected' : '' }}>ایران</option>
                                                <option value="باكستان"
                                                    {{ old('nationality') === 'باكستان' ? 'selected' : '' }}>باكستان
                                                </option>
                                                <option value="تونس"
                                                    {{ old('nationality') === 'تونس' ? 'selected' : '' }}>تونس</option>
                                                <option value="جزر القمر"
                                                    {{ old('nationality') === 'تونس' ? 'selected' : '' }}>جزر القمر
                                                </option>
                                                <option value="جيبوتي"
                                                    {{ old('nationality') === 'جيبوتي' ? 'selected' : '' }}>جيبوتي</option>
                                                <option value="دول غربية"
                                                    {{ old('nationality') === 'دول غربية' ? 'selected' : '' }}>دول غربية
                                                </option>
                                                <option value="سوريا"
                                                    {{ old('nationality') === 'سوريا' ? 'selected' : '' }}>سوريا</option>
                                                <option value="عُمان"
                                                    {{ old('nationality') === 'عُمان' ? 'selected' : '' }}>عُمان</option>
                                                <option value="فلسطين"
                                                    {{ old('nationality') === 'فلسطين' ? 'selected' : '' }}>فلسطين</option>
                                            </select>
                                            @error('nationality')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">بلد الإقامة
                                            </p>
                                            <select class="form-control input_background" name="country_of_residence"
                                                id="country_of_residence">
                                                <option value="" disabled
                                                    {{ old('country_of_residence') === null ? 'selected' : '' }}
                                                    {{ old('country_of_residence') === null ? 'autocomplete="country_of_residence" autofocus' : '' }}>
                                                    اختر...</option>
                                                <option value="المغرب"
                                                    {{ old('country_of_residence') === 'المغرب' ? 'selected' : '' }}>المغرب
                                                </option>
                                                <option value="اليمن"
                                                    {{ old('country_of_residence') === 'اليمن' ? 'selected' : '' }}>اليمن
                                                </option>
                                                <option value="ایران"
                                                    {{ old('country_of_residence') === 'ایران' ? 'selected' : '' }}>ایران
                                                </option>
                                                <option value="باكستان"
                                                    {{ old('country_of_residence') === 'باكستان' ? 'selected' : '' }}>
                                                    باكستان</option>
                                                <option value="تونس"
                                                    {{ old('country_of_residence') === 'تونس' ? 'selected' : '' }}>تونس
                                                </option>
                                                <option value="جزر القمر"
                                                    {{ old('country_of_residence') === 'جزر القمر' ? 'selected' : '' }}>جزر
                                                    القمر</option>
                                                <option value="جيبوتي"
                                                    {{ old('country_of_residence') === 'جيبوتي' ? 'selected' : '' }}>جيبوتي
                                                </option>
                                                <option value="دول غربية"
                                                    {{ old('country_of_residence') === 'دول غربية' ? 'selected' : '' }}>دول
                                                    غربية</option>
                                                <option value="سوريا"
                                                    {{ old('country_of_residence') === 'سوريا' ? 'selected' : '' }}>سوريا
                                                </option>
                                                <option value="عُمان"
                                                    {{ old('country_of_residence') === 'عُمان' ? 'selected' : '' }}>عُمان
                                                </option>
                                                <option value="فلسطين"
                                                    {{ old('country_of_residence') === 'فلسطين' ? 'selected' : '' }}>فلسطين
                                                </option>
                                            </select>
                                            @error('country_of_residence')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">المدينة
                                            </p>
                                            <select class="form-control input_background" name="city" id="city">
                                                <option selected disabled>اختر...</option>
                                                <option value="أوبوك" {{ old('city') === 'أوبوك' ? 'selected' : '' }}>
                                                    أوبوك</option>
                                                <option value="الدوادمي"
                                                    {{ old('city') === 'الدوادمي' ? 'selected' : '' }}>الدوادمي</option>
                                                <option value="المجمعة" {{ old('city') === 'المجمعة' ? 'selected' : '' }}>
                                                    المجمعة</option>
                                                <option value="تاجورة" {{ old('city') === 'تاجورة' ? 'selected' : '' }}>
                                                    تاجورة</option>
                                                <option value="جازان" {{ old('city') === 'جازان' ? 'selected' : '' }}>
                                                    جازان</option>
                                                <option value="صامطة" {{ old('city') === 'صامطة' ? 'selected' : '' }}>
                                                    صامطة</option>
                                                <option value="صبيا" {{ old('city') === 'صبيا' ? 'selected' : '' }}>صبيا
                                                </option>
                                                <option value="علايلي دادا"
                                                    {{ old('city') === 'علايلي دادا' ? 'selected' : '' }}>علايلي دادا
                                                </option>
                                                <option value="الحسيمة" {{ old('city') === 'الحسيمة' ? 'selected' : '' }}>
                                                    الحسيمة</option>
                                                <option value="الفنيدق" {{ old('city') === 'الفنيدق' ? 'selected' : '' }}>
                                                    الفنيدق</option>
                                                <option value="اليوسفية"
                                                    {{ old('city') === 'اليوسفية' ? 'selected' : '' }}>اليوسفية</option>
                                                <option value="جرادة" {{ old('city') === 'جرادة' ? 'selected' : '' }}>
                                                    جرادة</option>
                                                <option value="جرسيف" {{ old('city') === 'جرسيف' ? 'selected' : '' }}>
                                                    جرسيف</option>
                                                <option value="سلا الجديدة"
                                                    {{ old('city') === 'سلا الجديدة' ? 'selected' : '' }}>سلا الجديدة
                                                </option>
                                                <option value="سوق السبت أولاد النمة"
                                                    {{ old('city') === 'سوق السبت أولاد النمة' ? 'selected' : '' }}>سوق
                                                    السبت أولاد النمة</option>
                                                <option value="شفشاون" {{ old('city') === 'شفشاون' ? 'selected' : '' }}>
                                                    شفشاون</option>
                                                <option value="صفرو" {{ old('city') === 'صفرو' ? 'selected' : '' }}>صفرو
                                                </option>
                                                <option value="انتر" {{ old('city') === 'انتر' ? 'selected' : '' }}>انتر
                                                </option>
                                                <option value="طانطان" {{ old('city') === 'طانطان' ? 'selected' : '' }}>
                                                    طانطان</option>
                                                <option value="محافظة الأحمدي"
                                                    {{ old('city') === 'محافظة الأحمدي' ? 'selected' : '' }}>محافظة الأحمدي
                                                </option>
                                                <option value="محافظة الجهراء"
                                                    {{ old('city') === 'محافظة الجهراء' ? 'selected' : '' }}>محافظة الجهراء
                                                </option>
                                                <option value="نبجرير" {{ old('city') === 'نبجرير' ? 'selected' : '' }}>
                                                    نبجرير</option>
                                                <option value="ورزازات" {{ old('city') === 'ورزازات' ? 'selected' : '' }}>
                                                    ورزازات</option>
                                                <option value="وزان" {{ old('city') === 'وزان' ? 'selected' : '' }}>وزان
                                                </option>
                                                <option value="أسفي" {{ old('city') === 'أسفي' ? 'selected' : '' }}>أسفي
                                                </option>
                                                <option value="أبها" {{ old('city') === 'أبها' ? 'selected' : '' }}>أبها
                                                </option>
                                                <option value="أبو نصير"
                                                    {{ old('city') === 'أبو نصير' ? 'selected' : '' }}>أبو نصير</option>
                                                <option value="أبوظبي" {{ old('city') === 'أبوظبي' ? 'selected' : '' }}>
                                                    أبوظبي</option>
                                                <option value="أجد عبر بارزونن"
                                                    {{ old('city') === 'أجد عبر بارزونن' ? 'selected' : '' }}>أجد عبر
                                                    بارزونن</option>
                                                <option value="أجد عبرين"
                                                    {{ old('city') === 'أجد عبرين' ? 'selected' : '' }}>أجد عبرين </option>

                                            </select> @error('city')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
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
                <div class="row mb-5">
                    <div class="col-sm-0 col-md-2"></div>
                    <div class="col-sm-12 col-md-8">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="container mt-5">
                                    <div class="row  p-4" dir="rtl">
                                        <div class="col-12 d-flex">
                                            <p class="fw-bolder ms-auto">الحالة الإجتماعية</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <!-- <i data-acorn-icon="user"></i> -->
                                            <p class="fw-bolder d-flex justify-content-start">نوع الزواج</p>
                                            <select class="form-control input_background" name="type_of_marriage"
                                                id="type_of_marriage">
                                                <option value="" selected disabled>اختر...</option>
                                                <option value="male"
                                                    {{ old('type_of_marriage') === 'male' ? 'selected' : '' }}>ذكر
                                                </option>
                                                <option value="female"
                                                    {{ old('type_of_marriage') === 'female' ? 'selected' : '' }}>
                                                    انثى</option>
                                            </select>
                                            @error('type_of_marriage')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الحالة الاجتماعية</p>
                                            <select class="form-control input_background" name="marital_status"
                                                id="marital_status">
                                                <option value="" selected disabled>اختر...</option>
                                                <option value="male"
                                                    {{ old('marital_status') === 'male' ? 'selected' : '' }}>ذكر
                                                </option>
                                                <option value="female"
                                                    {{ old('marital_status') === 'female' ? 'selected' : '' }}>
                                                    انثى</option>
                                            </select>
                                            @error('marital_statuss')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">العمر</p>
                                            <input type="text" name="age" id="age"
                                                class="form-control input_background" value="{{ old('age') }}"
                                                autocomplete="age" autofocus>
                                            @error('age')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">عدد الاطفال</p>
                                            <input type="text" name="no_of_childs" id="no_of_childs"
                                                class="form-control input_background" value="{{ old('no_of_childs') }}"
                                                autocomplete="no_of_childs" autofocus>
                                            @error('no_of_childs')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
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
                <div class="row mb-5">
                    <div class="col-sm-0 col-md-2"></div>
                    <div class="col-sm-12 col-md-8">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="container mt-5">
                                    <div class="row  p-4" dir="rtl">
                                        <div class="col-12 d-flex">
                                            <p class="fw-bolder ms-auto">معلومات شخصية</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">رقم الهاتف</p>
                                            <input type="text" name="phone" id="phone"
                                                class="form-control input_background" value="{{ old('phone') }}"
                                                autocomplete="phone" autofocus>
                                            @error('phone')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الوزن (كجم)</p>
                                            <input type="number" name="weight" id="weight"
                                                class="form-control input_background" value="{{ old('weight') }}"
                                                autocomplete="weight" autofocus>
                                            @error('weight')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الطول (سم)</p>
                                            <input type="number" name="height" id="height"
                                                class="form-control input_background" value="{{ old('height') }}"
                                                autocomplete="height" autofocus>
                                            @error('height')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">لون البشرة</p>
                                            <input type="text" name="skin_color" id="skin_color"
                                                class="form-control input_background" value="{{ old('skin_color') }}"
                                                autocomplete="skin_color" autofocus>
                                            @error('skin_color')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">بنية الجسم</p>
                                            <input type="text" name="physique" id="physique"
                                                class="form-control input_background" value="{{ old('physique') }}"
                                                autocomplete="physique" autofocus>
                                            @error('physique')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">العمل</p>
                                            <input type="text" name="job" id="job"
                                                class="form-control input_background" value="{{ old('job') }}"
                                                autocomplete="job" autofocus>
                                            @error('job')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الموهل العلمي</p>
                                            <input type="text" name="qulification" id="qulification"
                                                class="form-control input_background" value="{{ old('qulification') }}"
                                                autocomplete="qulification" autofocus>
                                            @error('qulification')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الحاله المادية</p>
                                            <input type="text" name="financial_condition" id="financial_condition"
                                                class="form-control input_background"
                                                value="{{ old('financial_condition') }}"
                                                autocomplete="financial_condition" autofocus>
                                            @error('financial_condition')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الحالة الصحية</p>
                                            <input type="text" name="health_status" id="helth_status"
                                                class="form-control input_background" value="{{ old('health_status') }}"
                                                autocomplete="health_status" autofocus>
                                            @error('health_status')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الالتزام الديني</p>
                                            <input type="text" name="religious_commitment" id="religious_commitment"
                                                class="form-control input_background"
                                                value="{{ old('religious_commitment') }}"
                                                autocomplete="religious_commitment" autofocus>
                                            @error('religious_commitment')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">عن نفسي</p>
                                            <textarea class="form-control input_background" name="about" id="" cols="30" rows="10">{{ old('about') }}</textarea>
                                            @error('about')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">مواصفات الشريك الذي
                                                أرغب الإرتباط به</p>
                                            <textarea class="form-control input_background" name="specification_of_partner" id="" cols="30"
                                                rows="10">{{ old('specification_of_partner') }}</textarea>
                                            @error('specification_of_partner')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
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
                <div class="row mb-5">
                    <div class="col-sm-0 col-md-2"></div>
                    <div class="col-sm-12 col-md-8">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class=" p-4 fw-bold fs-6" dir="rtl">
                                    شروط وقوانين موقع تَوَافِيْق لجمع راسين بالحلال<br> <input type="checkbox"
                                        id="myCheckbox" name="myCheckbox"> لقد قرأت <span class="text-primary"> شروط
                                        الموقع و قوانينه </span> وأوافق على كل ما
                                    جاء فيه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-0 col-md-2"></div>
                </div>
                <div class="row" dir="rtl">
                    <div class="col-sm-0 col-md-2"></div>
                    <div class="row mb-0">
                        <div class="col-md-5 d-flex justify-content-center offset-md-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                {{ __('تسجيل') }}
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-0 col-md-2"></div>
                </div>
            </form>

        </section>
    </main>
@endsection
