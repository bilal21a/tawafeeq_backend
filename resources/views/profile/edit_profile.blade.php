@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <main>
        {{-- @dd($user) --}}
        <section class="scroll-section" id="helpText">
            <form method="POST" action="{{ route('update_profile', $id) }}" id="your-form-id">
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
                                                class="form-control input_background"
                                                value="{{ isset($user) ? $user->name : old('name') }}" autocomplete="name"
                                                autofocus>
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
                                                class="form-control input_background"
                                                value=" {{ isset($user) ? $user->email : old('email') }}"
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
                                                class="form-control input_background" value="" autocomplete="password"
                                                autofocus>
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
                                            <select class="form-select width_input input_background" name="gender"
                                                id="gender">
                                                <option value="" selected disabled>اختر...</option>
                                                <option value="ذكر"
                                                    {{ isset($user) && $user->gender === 'ذكر' ? 'selected' : (old('gender') === 'ذكر' ? 'selected' : '') }}>
                                                    ذكر</option>
                                                <option value="انثى"
                                                    {{ isset($user) && $user->gender === 'انثى' ? 'selected' : (old('gender') === 'انثى' ? 'selected' : '') }}>
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

                                            <select class="form-select width_input input_background" name="nationality"
                                                id="nationality">
                                                <option value="" disabled {{ isset($user) ? '' : 'selected' }}>اختر
                                                    البلد...</option>
                                                @foreach ($nationality as $national)
                                                    <option value="{{ $national }}"
                                                        {{ $user->nationality == $national ? 'selected' : '' }}>
                                                        {{ $national }}</option>
                                                @endforeach
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
                                            <select class="form-select width_input input_background"
                                                name="country_of_residence" id="country_of_residence">
                                                <option value="" disabled>اختر...</option>
                                                @foreach ($nationality as $national)
                                                    <option
                                                        value="{{ $national }}"{{ $user->country_of_residence == $national ? 'selected' : '' }}>
                                                        {{ $national }}</option>
                                                @endforeach
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
                                            <select class="form-select width_input input_background" name="city"
                                                id="city">
                                                <option selected disabled>اختر...</option>
                                                @foreach ($cities as $city)
                                                    <option
                                                        value="{{ $city }}"{{ $user->city == $city ? 'selected' : '' }}>
                                                        {{ $city }}</option>
                                                @endforeach
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
                                            {{-- <label class="d-flex" for="type_of_marriage">نوع الزواج</label> --}}
                                            <select class="form-select width_input input_background"
                                                name="type_of_marriage" id="type_of_marriage">
                                                <option selected="selected" disabled>اختر...</option>
                                                @foreach ($type_of_marriages as $type_of_marriage)
                                                    <option value="{{ $type_of_marriage }}"
                                                        {{ $user->profile->type_of_marriage == $type_of_marriage ? 'selected' : '' }}>
                                                        {{ $type_of_marriage }}</option>
                                                @endforeach
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
                                            <select class="form-select width_input input_background" name="marital_status"
                                                id="marital_status">
                                                <option selected="selected" disabled>اختر...</option>
                                                @foreach ($maritalStatusNames as $maritalStatusName)
                                                    <option value="{{ $maritalStatusName }}"
                                                        {{ $user->profile->marital_status == $maritalStatusName ? 'selected' : '' }}>
                                                        {{ $maritalStatusName }}</option>
                                                @endforeach
                                            </select>
                                            @error('marital_status')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">العمر</p>
                                            <input type="number" name="age" id="age"
                                                class="form-control input_background"
                                                value="{{ isset($user) ? $user->profile->age : old('age') }}"
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
                                                class="form-control input_background"
                                                value=" {{ isset($user) ? $user->profile->no_of_childs : old('no_of_childs') }}"
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
                                                class="form-control input_background"
                                                value="{{ isset($user) ? $user->profile->phone : old('phone') }}"
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
                                                class="form-control input_background"
                                                value="{{ isset($user) ? $user->profile->weight : old('weight') }}"
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
                                                class="form-control input_background"
                                                value="{{ isset($user) ? $user->profile->weight : old('height') }}"
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
                                            <select class="form-select width_input input_background" name="skin_color"
                                                id="skin_color">
                                                <option selected="selected" disabled>اختر...</option>
                                                @foreach ($sikinColors as $sikinColor)
                                                    <option value="{{ $sikinColor }}"
                                                        {{ $user->profile->skin_color == $sikinColor ? 'selected' : '' }}>
                                                        {{ $sikinColor }}</option>
                                                @endforeach
                                            </select>
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
                                                class="form-control input_background"
                                                value="{{ isset($user) ? $user->profile->physique : old('physique') }}"
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
                                                class="form-control input_background"
                                                value="{{ isset($user) ? $user->profile->job : old('job') }}"
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

                                            <select class="form-select width_input input_background" name="qualification"
                                                id="qualification">
                                                <option selected="selected" disabled>اختر...</option>
                                                @foreach ($qualifications as $qualification)
                                                    <option value="{{ $maritalStatusName }}"
                                                        {{ $user->profile->qualification == $qualification ? 'selected' : '' }}>
                                                        {{ $qualification }}</option>
                                                @endforeach
                                            </select>
                                            @error('qualification')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">الحاله المادية</p>
                                            <select class="form-select width_input input_background"
                                                name="financial_condition" id="financial_condition">
                                                <option selected="selected" disabled>اختر...</option>
                                                @foreach ($financial_conditions as $financial_condition)
                                                    <option value="{{ $financial_condition }}"
                                                        {{ $user->profile->financial_condition == $financial_condition ? 'selected' : '' }}>
                                                        {{ $financial_condition }}</option>
                                                @endforeach
                                            </select>
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
                                                class="form-control input_background"
                                                value="{{ isset($user) ? $user->profile->health_status : old('health_status') }}"
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
                                            <select class="form-select width_input input_background"
                                                name="religious_commitment" id="religious_commitment">
                                                <option selected="selected" disabled>اختر...</option>
                                                @foreach ($religiousOptions as $religiousOption)
                                                    <option value="{{ $religiousOption }}"
                                                        {{ $user->profile->religious_commitment == $religiousOption ? 'selected' : '' }}>
                                                        {{ $religiousOption }}</option>
                                                @endforeach
                                            </select>
                                            @error('religious_commitment')
                                                <span>
                                                    <strong
                                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <p class="fw-bolder d-flex justify-content-start">عن نفسي</p>
                                            <textarea class="form-control input_background" name="about" id="" cols="30" rows="10">{{ isset($user) ? $user->profile->about : old('about') }}</textarea>
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
                                                rows="10">{{ isset($user) ? $user->profile->specification_of_partner : old('specification_of_partner') }} </textarea>
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
                <div class="row justify-content-center mt-3">
                    <div class="alert alert-success col-md-8" role="alert" id="success-alert" style="display: none;">
                        تم تحديث البروفايل بنجاح
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
@section('js')
    <script>
        // Get a reference to the form element
        const form = document.getElementById('your-form-id'); // Replace 'your-form-id' with the actual form's ID

        // Get a reference to the success alert element
        const successAlert = document.getElementById('success-alert');

        // Add a submit event listener to the form
        form.addEventListener('submit', async (e) => {
            e.preventDefault(); // Prevent the default form submission

            // Perform your form submission logic here (e.g., using AJAX)

            // Once the form is successfully submitted:
            // 1. Show the success alert
            successAlert.style.display = 'block';

            // 2. Optionally, reset the form or redirect the user
            // form.reset(); // To reset the form fields

            // You can redirect the user to another page after a delay if needed
            // setTimeout(() => {
            //   window.location.href = '/success-page';
            // }, 3000); // Redirect after 3 seconds (adjust the delay as needed)
        });
    </script>
@endsection
