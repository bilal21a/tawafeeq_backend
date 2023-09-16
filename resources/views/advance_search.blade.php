@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <div id="root">
        <main>
            <div dir="rtl">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8" style="box-shadow: 0 3px 6px var(--theme-ui-colors-textTransparent,#00000029);">
                        <div class="p-4">
                            <form>
                                <h4 class="fw-light letter_spacing">ابحث عن شريك حياتك المسلم</h4>
                                <div class="row gy-2 gx-3 align-items-center mb-md-5">
                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="name">الاسم</label>
                                        <input type="text" class="form-control width_input input_background"
                                            id="name" placeholder="الاسم">
                                    </div>
                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="marital_status">أبحث عن</label>
                                        <select class="form-select width_input input_background" id="autoSizingSelect">
                                            <option selected="selected" disabled>أبحث عن</option>
                                            <option value="زوج">زوج</option>
                                            <option value="زوجة">زوجة</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="nationality">الجنسية</label>
                                        <select class="form-select width_input input_background" id="nationality">
                                            <option selected="selected" disabled>الجنسية</option>
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
                                            <option value="ايران">ايران</option>
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
                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="place_of_residence">مكان الاقامة
                                        </label>
                                        <select class="form-select width_input input_background" id="place_of_residence">
                                            <option selected="selected" disabled>مكان الاقامة</option>
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
                                            <option value="ايران">ايران</option>
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
                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="city">المدينة</label>
                                        <select class="form-select width_input input_background" id="city">
                                            <option selected="selected" disabled>المدينة</option>
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
                                            <option value="ايران">ايران</option>
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

                                </div>
                                <div class="row gy-2 gx-3 align-items-center mb-md-5">
                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="age_from">العمر من</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control width_input input_background"
                                                id="age_from" placeholder="العمر من">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="age_to">العمر الى
                                        </label>
                                        <div class="input-group">
                                            <input type="number" class="form-control width_input input_background"
                                                id="age_to" placeholder="العمر الى">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="marital_status">نوع الزواج</label>
                                        <select class="form-select width_input input_background" id="marital_status">
                                            <option selected="selected" disabled>نوع الزواج</option>
                                            <option value="الزواج الأول">الزواج الأول</option>
                                            <option value="الزواج الثاني">الزواج الثاني</option>
                                            <option value="الزواج الثالث">الزواج الثالث</option>
                                            <option value="الزواج الرابع">الزواج الرابع</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="marital_status">الحالة الاجتماعية
                                        </label>
                                        <select class="form-select width_input input_background" id="marital_status">
                                            <option selected="selected" disabled>الحالة الاجتماعية</option>
                                            <option value="1">أعزب</option>
                                            <option value="2">متزوج</option>
                                            <option value="3">مطلق</option>
                                            <option value="4">أرمل</option>
                                            <option value="5">مطلقة</option>
                                            <option value="6">أرملة</option>
                                            <option value="7">عزباء</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row gy-2 gx-3 align-items-center mb-md-5">
                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="weight_from">الوزن من</label>
                                        <input type="number" class="form-control width_input input_background"
                                            id="name" placeholder="الوزن من">
                                    </div>
                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="Weight_to">الوزن إلى</label>
                                        <input type="number" class="form-control width_input input_background"
                                            id="Weight_to" placeholder="الوزن إلى">
                                    </div>
                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="length_from">أبحث عن</label>
                                        <input type="number" class="form-control width_input input_background"
                                            id="length_from" placeholder="أبحث عن">
                                    </div>
                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="length_to">الطول الى</label>
                                        <input type="number" class="form-control width_input input_background"
                                            id="length_to" placeholder="الطول الى">
                                    </div>

                                    <div class="col-sm-12 col-md ">
                                        <label class="d-flex" for="qualification">المؤهل العلمي</label>
                                        <select class="form-select width_input input_background" id="qualification">
                                            <option selected="selected" disabled>المؤهل العلمي</option>
                                            <option value="دراسة متوسطة">دراسة متوسطة</option>
                                            <option value="التعليم الثانوي">التعليم الثانوي</option>
                                            <option value="دراسة جامعية">دراسة جامعية</option>
                                            <option value="دكتوراه">دكتوراه</option>
                                            <option value="السيرة الذاتية">السيرة الذاتية</option>
                                            <option value="التعليم الابتدائي">التعليم الابتدائي</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-primary mt-3">بحث</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
@endsection
