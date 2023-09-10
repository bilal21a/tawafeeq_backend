@extends('layouts.app')

@section('content')
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
                                            <input type="text" required name="name" id="name"
                                                class="form-control input_background ">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">البريد الالكتروني</p>
                                            <input type="email" required name="email" id="email"
                                                class="form-control input_background">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">كلمة المرور <i class="m-0"
                                                    data-acorn-icon="eye"></i></p>
                                            <input type="password" required name="password" id="password"
                                                class="form-control input_background">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الجنس
                                            </p>
                                            <select class="form-control input_background" required name="gender" id="gender">
                                                <option value="" selected disabled>اختر...</option>
                                                <option value="male">ذكر</option>
                                                <option value="female">انثى</option>
                                            </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div id="passwordHelpBlock" class="text-danger form-text">
                                            حقل مطلوب
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
                                            <select class="form-control input_background" required name="nationality"
                                                id="nationality">
                                                <option selected disabled>اختر البلد...</option>
                                                <option value="أوكرانيا">أوكرانيا</option>
                                                <option value="اخر">اخر</option>
                                                <option value="الاردن">الاردن</option>
                                                <option value="الامارات">الامارات</option>
                                                <option value="البحرين">البحرين</option>
                                                <option value="الجزائر">الجزائر</option>
                                                <option value="السعودية">السعودية</option>
                                                <option value="السودان">السودان</option>
                                                <option value="الصومال">الصومال</option>
                                                <option value="العراق">العراق</option>
                                                <option value="الكويت">الكويت</option>
                                                <option value="المغرب">المغرب</option>
                                                <option value="اليمن">اليمن</option>
                                                <option value="ایران">ایران</option>
                                                <option value="باكستان">باكستان</option>
                                                <option value="تونس">تونس</option>
                                                <option value="جزر القمر">جزر القمر</option>
                                                <option value="جيبوتي">جيبوتي</option>
                                                <option value="دول غربية">دول غربية</option>
                                                <option value="سوريا">سوريا</option>
                                                <option value="عُمان">عُمان</option>
                                                <option value="فلسطين">فلسطين</option>

                                            </select>

                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">بلد الإقامة
                                            </p>
                                            <select class="form-control input_background" required name="country_of_residence"
                                                id="country_of_residence">
                                                <option selected disabled>اختر...</option>
                                                <option value="المغرب">المغرب</option>
                                                <option value="اليمن">اليمن</option>
                                                <option value="ایران">ایران</option>
                                                <option value="باكستان">باكستان</option>
                                                <option value="تونس">تونس</option>
                                                <option value="جزر القمر">جزر القمر</option>
                                                <option value="جيبوتي">جيبوتي</option>
                                                <option value="دول غربية">دول غربية</option>
                                                <option value="سوريا">سوريا</option>
                                                <option value="عُمان">عُمان</option>
                                                <option value="فلسطين">فلسطين</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">المدينة
                                            </p>
                                            <select class="form-control input_background" required name="city" id="city">
                                                <option selected disabled>اختر...</option>
                                                <option value="أوبوك">أوبوك</option>
                                                <option value="الدوادمي">الدوادمي</option>
                                                <option value="المجمعة">المجمعة</option>
                                                <option value="تاجورة">تاجورة</option>
                                                <option value="جازان">جازان</option>
                                                <option value="صامطة">صامطة</option>
                                                <option value="صبيا">صبيا</option>
                                                <option value="علايلي دادا">علايلي دادا</option>
                                                <option value="الحسيمة">الحسيمة</option>
                                                <option value="الفنيدق">الفنيدق</option>
                                                <option value="اليوسفية">اليوسفية</option>
                                                <option value="جرادة">جرادة</option>
                                                <option value="جرسيف">جرسيف</option>
                                                <option value="سلا الجديدة">سلا الجديدة</option>
                                                <option value="سوق السبت أولاد النمة">سوق السبت أولاد النمة</option>
                                                <option value="شفشاون">شفشاون</option>
                                                <option value="صفرو">صفرو</option>
                                                <option value="انتر">انتر</option>
                                                <option value="طانطان">طانطان</option>
                                                <option value="محافظة الأحمدي">محافظة الأحمدي</option>
                                                <option value="محافظة الجهراء">محافظة الجهراء</option>
                                                <option value="نبجرير">نبجرير</option>
                                                <option value="ورزازات">ورزازات</option>
                                                <option value="وزان">وزان</option>
                                                <option value="أسفي">أسفي</option>
                                                <option value="أبها">أبها</option>
                                                <option value="أبو نصير">أبو نصير</option>
                                                <option value="أبوظبي">أبوظبي</option>
                                                <option value="أجد عبر بارزونن">أجد عبر بارزونن</option>
                                                <option value="أجد عبرين">أجد عبرين</option>
                                                <option value="أحد رفيدة">أحد رفيدة</option>
                                                <option value="أحمد آباد">أحمد آباد</option>
                                                <option value="آرتا">آرتا</option>
                                                <option value="أرخبيل سقطرى">أرخبيل سقطرى</option>
                                                <option value="أسوان">أسوان</option>
                                                <option value="أسيوط">أسيوط</option>
                                                <option value="التر">التر</option>
                                                <option value="أكادير">أكادير</option>
                                                <option value="أم القيوين">أم القيوين</option>
                                                <option value="أم درمان">أم درمان</option>
                                                <option value="أوديسا">أوديسا</option>
                                                <option value="إربد">إربد</option>
                                                <option value="إيفانو فرانكيفسك">إيفانو فرانكيفسك</option>
                                                <option value="اب ابين">اب ابين</option>
                                                <option value="احد المسارحة">احد المسارحة</option>
                                                <option value="اسکان">اسکان</option>
                                                <option value="اسكندريه">اسكندريه</option>
                                                <option value="اسلام آباد">اسلام آباد</option>
                                                <option value="اصفهان">اصفهان</option>
                                                <option value="اكادير">اكادير</option>
                                                <option value="الأبيض">الأبيض</option>
                                                <option value="الأقصر">الأقصر</option>
                                                <option value="الإسماعيلية الاحساء">الإسماعيلية الاحساء</option>
                                                <option value="الاسماعيلية">الاسماعيلية</option>
                                                <option value="الباحة">الباحة</option>
                                                <option value="الباشا">الباشا</option>
                                                <option value="البحر الأحمر">البحر الأحمر</option>
                                                <option value="البحيرة">البحيرة</option>
                                                <option value="البدع الشرقية">البدع الشرقية</option>
                                                <option value="البريمي">البريمي</option>
                                                <option value="البيضاء">البيضاء</option>
                                                <option value="الجبيل">الجبيل</option>
                                            </select>
                                        </div>
                                        <div id="passwordHelpBlock" class="text-danger form-text">
                                            حقل مطلوب
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
                                            <select class="form-control input_background" required name="type_of_marriage"
                                                id="type_of_marriage">
                                                <option>حدد الجنس </option>

                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الحالة الاجتماعية</p>
                                            <select class="form-control input_background" required name="marital_status"
                                                id="marital_status">
                                                <option>حدد الجنس </option>

                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">العمر</p>
                                            <input type="text" required name="age" id="age"
                                                class="form-control input_background">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">عدد الاطفال</p>
                                            <input type="text" required name="no_of_childs" id="no_of_childs"
                                                class="form-control input_background">
                                        </div>
                                        <div id="passwordHelpBlock" class="text-danger form-text">
                                            حقل مطلوب
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
                                            <input type="text" required name="phone" id="phone"
                                                class="form-control input_background">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الوزن (كجم)</p>
                                            <input type="number" required name="weight" id="weight"
                                                class="form-control input_background">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الطول (سم)</p>
                                            <input type="number" required name="height" id="height"
                                                class="form-control input_background">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">لون البشرة</p>
                                            <input type="text" required name="skin_color" id="skin_color"
                                                class="form-control input_background">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">بنية الجسم</p>
                                            <input type="text" required name="physique" id="physique"
                                                class="form-control input_background">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">العمل</p>
                                            <input type="text" required name="job" id="job"
                                                class="form-control input_background">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الموهل العلمي</p>
                                            <input type="text" required name="qulification" id="qulification"
                                                class="form-control input_background">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الحاله المادية</p>
                                            <input type="text" required name="financial_condition" id="financial_condition"
                                                class="form-control input_background">
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الحالة الصحية</p>
                                            <input type="text" required name="health_status" id="helth_status"
                                                class="form-control input_background">
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الالتزام الديني</p>
                                            <input type="text" required name="religious_commitment" id="religious_commitment"
                                                class="form-control input_background">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">عن نفسي</p>
                                            <textarea class="form-control input_background" required name="about" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">مواصفات الشريك الذي
                                                أرغب الإرتباط به</p>
                                            <textarea class="form-control input_background" required name="specification_of_partner" id="" cols="30"
                                                rows="10"></textarea>
                                        </div>

                                        <div id="passwordHelpBlock" class="text-danger form-text">
                                            حقل مطلوب
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
                                <div class="container">
                                    <div class=" p-4 fw-bold fs-6" dir="rtl">
                                        شروط وقوانين موقع تَوَافِيْق لجمع راسين بالحلال<br> <input type="checkbox"
                                            id="myCheckbox" required name="myCheckbox"> لقد قرأت <span class="text-primary"> شروط
                                            الموقع و قوانينه </span> وأوافق على كل ما
                                        جاء فيه
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-0 col-md-2"></div>
                </div>
                <div class="row" dir="rtl">
                    <div class="col-sm-0 col-md-2"></div>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-0 col-md-2"></div>
                </div>
            </form>

        </section>
    </main>
@endsection
