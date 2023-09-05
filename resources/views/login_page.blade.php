@extends('layouts.app')
@section('css')

@endsection
@section('content')
<main>
    <section class="scroll-section" id="helpText">

        <div class="row mb-5">
            <div class="col-sm-0 col-md-2"></div>
            <div class="col-sm-12 col-md-8">
                <div class="card">
                    <div class="card-body p-0">
                        <form>
                            <div class="container mt-5">
                                <div class="row  p-4" dir="rtl">
                                    <div class="col-12 d-flex">
                                        <p class="fw-bolder ms-auto">بيانات الدخول</p>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <!-- <i data-acorn-icon="user"></i> -->
                                        <p class="fw-bolder d-flex justify-content-start">اسم العضو</p>
                                        <input type="text" name="organization_name" id="organization_name"
                                            class="form-control input_background ">
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">البريد الالكتروني</p>
                                        <input type="password" name="password" id="password"
                                            class="form-control input_background">
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">كلمة المرور <i
                                                class="m-0" data-acorn-icon="eye"></i></p>
                                        <input type="email" name="email" id="email"
                                            class="form-control input_background">
                                    </div>


                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">الجنس
                                        </p>
                                        <select class="form-control input_background" name="gender"
                                            id="gender">
                                            <option value="other">اختر...</option>
                                            <option value="male">ذكر</option>
                                            <option value="female">انثى</option>
                                        </select>
                                    </div>
                                    <div id="passwordHelpBlock" class="text-danger form-text">
                                        حقل مطلوب
                                    </div>
                                </div>

                            </div>
                        </form>
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
                        <form>
                            <div class="container mt-5">
                                <div class="row  p-4" dir="rtl">
                                    <div class="col-12 d-flex">
                                        <p class="fw-bolder ms-auto">الجنسية والاقامة </p>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">الجنسية
                                        </p>
                                        <select class="form-control input_background" name="countries"
                                            id="gender">
                                            <option value="other" selected>اختر...</option>
                                            <option>اختر البلد...</option>
                                            <option>أوكرانيا</option>
                                            <option>اخر</option>
                                            <option>الاردن</option>
                                            <option>الامارات</option>
                                            <option>البحرين</option>
                                            <option>الجزائر</option>
                                            <option>السعودية</option>
                                            <option>السودان</option>
                                            <option>الصومال</option>
                                            <option>العراق</option>
                                            <option>الكويت</option>
                                            <option>المغرب</option>
                                            <option>اليمن</option>
                                            <option>ایران</option>
                                            <option>باكستان</option>
                                            <option>تونس</option>
                                            <option>جزر القمر</option>
                                            <option>جيبوتي</option>
                                            <option>دول غربية</option>
                                            <option>سوريا</option>
                                            <option>عُمان</option>
                                            <option>فلسطين</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">بلد الإقامة
                                        </p>
                                        <select class="form-control input_background" name="countries"
                                            id="gender">
                                            <option selected>اختر...</option>
                                            <option>الأردن</option>
                                            <option>مصر</option>
                                            <option>الجزائر</option>
                                            <option>السودان</option>
                                            <option>العراق</option>
                                            <option>المغرب</option>
                                            <option>اليمن</option>
                                            <option>سوريا</option>
                                            <option>الصومال</option>
                                            <option>تونس</option>
                                            <option>ليبيا</option>
                                            <option>فلسطين</option>
                                            <option>عمان</option>
                                            <option>الكويت</option>
                                            <option>موريتانيا</option>
                                            <option>قطر</option>
                                            <option>البحرين</option>
                                            <option>جيبوتي</option>
                                            <option>لبنان</option>
                                            <option>جزر القمر</option>
                                            <option>السعودية</option>
                                            <option>أوكرانيا</option>
                                            <option>الامارات</option>
                                            <option>ایران</option>
                                            <option>باكستان</option>
                                            <option>بريطاني</option>
                                            <option>إيران</option>



                                        </select>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">المدينة
                                        </p>
                                        <select class="form-control input_background" name="gender"
                                            id="gender">
                                            <option value="other">اختر...</option>
                                            <option>أوبوك</option>
                                            <option>الدوادمي</option>
                                            <option>المجمعة</option>
                                            <option>تاجورة</option>
                                            <option>جازان</option>
                                            <option>صامطة</option>
                                            <option>صبيا</option>
                                            <option>علايلي دادا</option>
                                            <option>الحسيمة</option>
                                            <option>الفنيدق</option>
                                            <option>اليوسفية</option>
                                            <option>جرادة</option>
                                            <option>جرسيف</option>
                                            <option>سلا الجديدة</option>
                                            <option>سوق السبت أولاد النمة</option>
                                            <option>شفشاون</option>
                                            <option>صفرو</option>
                                            <option>انتر</option>
                                            <option>طانطان</option>
                                            <option>محافظة الأحمدي</option>
                                            <option>محافظة الجهراء</option>
                                            <option>نبجرير</option>
                                            <option>ورزازات</option>
                                            <option>وزان</option>
                                            <option>أسفي</option>
                                            <option>أبها</option>
                                            <option>أبو نصير</option>
                                            <option>أبوظبي</option>
                                            <option>أجد عبر بارزونن</option>
                                            <option>أجد عبرين</option>
                                            <option>أحد رفيدة</option>
                                            <option>أحمد آباد</option>
                                            <option>آرتا</option>
                                            <option>أرخبيل سقطرى</option>
                                            <option>أسوان</option>
                                            <option>أسيوط</option>
                                            <option>التر</option>
                                            <option>أكادير</option>
                                            <option>أم القيوين</option>
                                            <option>أم درمان</option>
                                            <option>أوديسا</option>
                                            <option>إربد</option>
                                            <option>إيفانو فرانكيفسك</option>
                                            <option>اب ابين</option>
                                            <option>احد المسارحة</option>
                                            <option>اسکان</option>
                                            <option>اسكندريه</option>
                                            <option>اسلام آباد</option>
                                            <option>اصفهان</option>
                                            <option>اكادير</option>
                                            <option>الأبيض</option>
                                            <option>الأقصر</option>
                                            <option>الإسماعيلية الاحساء</option>
                                            <option>الاسماعيلية</option>
                                            <option>الباحة</option>
                                            <option>الباشا</option>
                                            <option>البحر الأحمر</option>
                                            <option>البحيرة</option>
                                            <option>البدع الشرقية</option>
                                            <option>البريمي</option>
                                            <option>البيضاء</option>
                                            <option>الجبيل</option>
                                        </select>
                                    </div>
                                    <div id="passwordHelpBlock" class="text-danger form-text">
                                        حقل مطلوب
                                    </div>
                                </div>

                            </div>
                        </form>
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
                        <form>
                            <div class="container mt-5">
                                <div class="row  p-4" dir="rtl">
                                    <div class="col-12 d-flex">
                                        <p class="fw-bolder ms-auto">الحالة الإجتماعية</p>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <!-- <i data-acorn-icon="user"></i> -->
                                        <p class="fw-bolder d-flex justify-content-start">نوع الزواج</p>
                                        <select class="form-control input_background" name="gender"
                                            id="gender">
                                            <option value="other">حدد الجنس </option>

                                        </select>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">الحالة الاجتماعية</p>
                                        <select class="form-control input_background" name="gender"
                                            id="gender">
                                            <option value="other">حدد الجنس </option>

                                        </select>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">العمر</p>
                                        <input type="text" name="email" id="email"
                                            class="form-control input_background">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">عدد الاطفال</p>
                                        <input type="email" name="email" id="email"
                                            class="form-control input_background">
                                    </div>

                                    <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">الجنس
                                        </p>
                                        <select class="form-control input_background" name="gender" id="gender">
                                  <option value="other">اختر...</option>
                                  <option value="male">ذكر</option>
                                  <option value="female">انثى</option>
                                </select>
                                    </div> -->
                                    <div id="passwordHelpBlock" class="text-danger form-text">
                                        حقل مطلوب
                                    </div>
                                </div>

                            </div>
                        </form>
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
                        <form>
                            <div class="container mt-5">
                                <div class="row  p-4" dir="rtl">
                                    <div class="col-12 d-flex">
                                        <p class="fw-bolder ms-auto">معلومات شخصية</p>
                                    </div>


                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">رقم الهاتف</p>
                                        <input type="text" name="email" id="email"
                                            class="form-control input_background">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">الوزن (كجم)</p>
                                        <input type="email" name="email" id="email"
                                            class="form-control input_background">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">الطول (سم)</p>
                                        <input type="text" name="email" id="email"
                                            class="form-control input_background">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">لون البشرة</p>
                                        <input type="email" name="email" id="email"
                                            class="form-control input_background">
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">بنية الجسم</p>
                                        <input type="text" name="email" id="email"
                                            class="form-control input_background">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">العمل</p>
                                        <input type="email" name="email" id="email"
                                            class="form-control input_background">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">الموهل العلمي</p>
                                        <input type="text" name="email" id="email"
                                            class="form-control input_background">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">الحاله المادية</p>
                                        <input type="email" name="email" id="email"
                                            class="form-control input_background">
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">الحالة الصحية</p>
                                        <input type="text" name="email" id="email"
                                            class="form-control input_background">
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">الالتزام الديني</p>
                                        <input type="email" name="email" id="email"
                                            class="form-control input_background">
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">عن نفسي</p>
                                        <textarea class="form-control input_background" name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <p class="fw-bolder d-flex justify-content-start">مواصفات الشريك الذي
                                            أرغب الإرتباط به</p>
                                        <textarea class="form-control input_background" name="" id="" cols="30" rows="10"></textarea>
                                    </div>

                                    <div id="passwordHelpBlock" class="text-danger form-text">
                                        حقل مطلوب
                                    </div>
                                </div>


                            </div>
                        </form>
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
                        <form>
                            <div class="container">
                                <div class=" p-4 fw-bold fs-6" dir="rtl">
                                    شروط وقوانين موقع تَوَافِيْق لجمع راسين بالحلال<br> <input type="checkbox"
                                        id="myCheckbox" name="myCheckbox"> لقد قرأت <span
                                        class="text-primary"> شروط الموقع و قوانينه </span> وأوافق على كل ما
                                    جاء فيه
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-0 col-md-2"></div>
        </div>

        <div class="row" dir="rtl">
            <div class="col-sm-0 col-md-2"></div>
            <div class="col-8 mt-4">
                <button class="btn btn-xl btn-primary" type="button">تسجيل</button>
            </div>
            <div class="col-sm-0 col-md-2"></div>

        </div>
    </section>
</main>
@endsection
