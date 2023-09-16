@extends('layouts.app')
@section('content')
    <div class="container pt-5" style="margin-top:70px">
        <section class="scroll-section" dir="ltr" id="basic">
            <h2 class="d-flex justify-content-start" dir="rtl">
                <span class="fw-bold fs-4">قائمة الأعضاء
            </h2>
            <div class="card mb-5" dir="rtl">
                <div class="p-4">
                    <form class="row gy-2 gx-3 align-items-center" method="POST" action="{{ route('members') }}">
                        @csrf
                        <div class="col">
                            <label class="d-flex" for="name">الاسم</label>
                            <input type="text" class="form-control width_input input_background" id="name"
                                placeholder="الاسم">
                        </div>
                        <div class="col">
                            <label class="d-flex" for="nationality">الجنسية</label>

                            <select class="form-select width_input input_background" name="nationality">
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
                        <div class="col">
                            <label class="d-flex" for="place_of_residence">مكان الاقامة
                            </label>
                            <select class="form-select width_input input_background" name="country_of_residence">
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
                        <div class="col">
                            <label class="d-flex" for="autoSizingInputGroup">العمر من</label>
                            <div class="input-group">
                                <input type="number" class="form-control width_input input_background"
                                    name="age_from" placeholder="العمر من">
                            </div>
                        </div>
                        <div class="col">
                            <label class="d-flex" for="autoSizingInputGroup">العمر الى
                            </label>
                            <div class="input-group">
                                <input type="number" class="form-control width_input input_background"
                                    name="age_to" placeholder="العمر الى">
                            </div>
                        </div>
                        <div class="col">
                            <label class="d-flex" for="autoSizingSelect">الحالة الاجتماعية
                            </label>
                            <select class="form-select width_input input_background" name="marital_status">
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
                        <div class="col d-flex">
                            <button type="submit" class="btn btn-primary mt-3">بحث</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-5 mb-5 d-flex justify-content-center">
                @foreach ($users as $user)
                    <div class="col-md-3 card swiper-slide m-md-3 p-0 mb-3" style="max-width: 350px;">
                        @include('common.card')
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection

