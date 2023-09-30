@extends('layouts.app')
@section('content')
    <div class="container pt-5" style="margin-top:70px">
        <section class="scroll-section" dir="ltr" id="basic">
            <h2 class="d-flex justify-content-start" dir="rtl">
                <span class="fw-bold fs-4">
                    @if ($type == 'latest')
                        الأعضاء الجدد
                    @elseif ($type == 'online')
                        الأعضاء المتواجدون حاليًا
                    @else
                        @if (isset($page))
                            القائمة المفضلة
                        @else
                            قائمة الأعضاء
                        @endif
                    @endif
                </span>
            </h2>
            @if (!isset($page))
                <div class="card mb-5" dir="rtl">
                    <div class="p-4">
                        <form class="row gy-2 gx-3 align-items-center" method="POST" action="{{ route('members') }}">
                            @csrf
                            <input type="hidden" name="type" value="{{ $type }}">
                            <div class="col-sm-12 col-md">
                                <input type="hidden" name="look_for" value="{{ $look_for }}">
                                <label class="d-flex" for="name">الاسم</label>
                                <input type="text" class="form-control width_input input_background" name="name"
                                    id="name" value="{{ isset($name_search) ? $name_search : '' }}"
                                    placeholder="الاسم">
                            </div>
                            <div class="col-sm-12 col-md">
                                <label class="d-flex" for="nationality">الجنسية</label>
                                <select class="form-select width_input input_background" name="nationality">
                                    <option selected="selected" disabled>الجنسية</option>
                                    @foreach ($countryNames as $countryName)
                                        <option value="{{ $countryName }}"
                                            {{ $nationality_search == $countryName ? 'selected' : '' }}>{{ $countryName }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 col-md">
                                <label class="d-flex" for="place_of_residence">مكان الاقامة
                                </label>
                                <select class="form-select width_input input_background" name="country_of_residence">
                                    <option selected="selected" disabled>مكان الاقامة</option>
                                    @foreach ($countryNames as $countryName)
                                        <option value="{{ $countryName }}"
                                            {{ $country_of_residence_search == $countryName ? 'selected' : '' }}>
                                            {{ $countryName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 col-md">
                                <label class="d-flex" for="age_from">العمر من</label>
                                <div class="input-group">
                                    <input type="number" class="form-control width_input input_background"
                                        value="{{ $age_from_search != null ? $age_from_search : '' }}" name="age_from"
                                        placeholder="العمر من">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md">
                                <label class="d-flex" for="age_to">العمر الى
                                </label>
                                <div class="input-group">
                                    <input type="number" class="form-control width_input input_background"
                                        value="{{ $age_to_search != null ? $age_to_search : '' }}" name="age_to"
                                        placeholder="العمر الى">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md">
                                <label class="d-flex" for="autoSizingSelect">الحالة الاجتماعية
                                </label>
                                <select class="form-select width_input input_background" name="marital_status">
                                    <option selected="selected" disabled>الحالة الاجتماعية</option>
                                    @foreach ($maritalStatusNames as $maritalStatusName)
                                        <option value="{{ $maritalStatusName }}"
                                            {{ $marital_status_search == $maritalStatusName ? 'selected' : '' }}>
                                            {{ $maritalStatusName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 col-md d-flex">
                                <button type="submit" class="btn btn-primary mt-3">بحث</button>
                                @if (request()->isMethod('post'))
                                    <a href="{{ route('members', ['look_for' => $look_for]) }}"
                                        class="btn btn-outline-primary mt-3 me-1">مسح البحث</a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            @endif

            <div class="row mt-5 mb-5 d-flex justify-content-center" dir="rtl">
                @forelse ($users as $user)
                    {{-- @dd($user) --}}
                    <div class="col-sm-12 col-md-md-3 card swiper-slide m-md-3 p-0 mb-3" style="max-width: 350px;">
                        @include('common.card')
                    </div>
                @empty
                    <img src="{{ asset('assets/img/nosearch.png') }}" style="width: 20%" alt="">
                    <span class="fw-bold fs-4 text-primary">لم يتم العثور على نتائج</span>
                @endforelse
            </div>
            {{ $users->links() }}
        </section>
    </div>
@endsection
@section('js')
    <script></script>
@endsection
