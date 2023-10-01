<div class="row mb-5">
    <div class="col-sm-0 col-md-2"></div>
    <div class="col-sm-12 col-md-8">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">تحديث الملف الشخصي!</h4>
                <p>
                    التفاصيل الخاصة بك الآن محدثة.
                </p>
                <hr>
                <p class="mb-0">اكتشف التطابقات المحتملة وانطلق في رحلة جميلة نحو السعادة الزوجية.</p>
            </div>
        @endif
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
                            <input type="text" name="name" id="name" class="form-control input_background"
                                value="{{ isset($user) ? $user->name : old('name') }}" autocomplete="name">
                            @error('name')
                                <span>
                                    <strong class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- @dd($user) --}}
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <p class="fw-bolder d-flex justify-content-start">البريد الالكتروني</p>
                            <input type="email" id="email" class="form-control input_background"
                                value=" {{ isset($user) ? $user->email : old('email') }}" name="email"
                                autocomplete="email" {{ isset($user) ? 'disabled="disabled"' : '' }}>
                            @error('email')
                                <span>
                                    <strong class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <p class="fw-bolder d-flex justify-content-start">كلمة المرور
                                <i data-acorn-icon="eye" class="eye_icon m-0" onclick="hidePassword()"
                                    style="display: none;"></i>
                                <i data-acorn-icon="eye-off" class="eye_off_icon m-0" onclick="showPassword()"></i>
                            </p>
                            <input type="password" name="password" id="password"
                                class="form-control input_background password_field" value="{{ old('password') }}"
                                autocomplete="password">
                            @error('password')
                                <span>
                                    <strong class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <p class="fw-bolder d-flex justify-content-start">الجنس
                            </p>
                            <select class="form-select width_input input_background" name="gender" id="gender">
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
                                    <strong class="global_errors d-flex justify-content-start">{{ $message }}</strong>
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
                                @foreach ($countries as $country)
                                    <option
                                        value="{{ $country->country }}"{{ (isset($user) ? $user->nationality : old('nationality')) == $country->country ? 'selected' : '' }}>
                                        {{ $country->country }}
                                    </option>
                                @endforeach
                            </select>
                            @error('nationality')
                                <span>
                                    <strong class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <p class="fw-bolder d-flex justify-content-start">بلد الإقامة
                            </p>
                            <select class="form-select width_input input_background" name="country_of_residence"
                                id="country_of_residence">
                                <option value="" disabled>اختر...</option>
                                @foreach ($countries as $country)
                                    <option
                                        value="{{ $country->country }}"{{ (isset($user) ? $user->country_of_residence : old('country_of_residence')) == $country->country ? 'selected' : '' }}>
                                        {{ $country->country }}
                                    </option>
                                @endforeach
                            </select>
                            @error('country_of_residence')
                                <span>
                                    <strong class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <p class="fw-bolder d-flex justify-content-start">المدينة
                            </p>
                            <select class="form-select width_input input_background" name="city" id="city">
                                <option selected disabled>اختر...</option>
                            </select> @error('city')
                                <span>
                                    <strong class="global_errors d-flex justify-content-start">{{ $message }}</strong>
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
                        {{-- @dd($user->profile->type_of_marriage) --}}
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <p class="fw-bolder d-flex justify-content-start">نوع الزواج</p>
                            <select class="form-select width_input input_background" name="type_of_marriage"
                                id="type_of_marriage">
                                <option selected="selected" disabled>اختر...</option>
                                @foreach ($type_of_marriages as $type_of_marriage)
                                    <option value="{{ $type_of_marriage }}"
                                        {{ (isset($user) ? $user->profile->type_of_marriage : old('type_of_marriage')) == $type_of_marriage ? 'selected' : '' }}>
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
                                        {{ (isset($user) ? $user->profile->marital_status : old('marital_status')) == $maritalStatusName ? 'selected' : '' }}>
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
                            <input type="text" name="age" id="age" onkeypress="return isNumeric(event)"
                                class="form-control input_background"
                                value="{{ isset($user) ? $user->profile->age : old('age') }}" autocomplete="age">
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
                                autocomplete="no_of_childs" onkeypress="return isNumeric(event)">
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
                                value="{{ isset($user) ? $user->phone : old('phone') }}"
                                autocomplete="phone" {{ isset($user) ? 'disabled="disabled"' : '' }}>
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
                                autocomplete="weight">
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
                                autocomplete="height">
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
                                        {{ (isset($user) ? $user->profile->skin_color : old('skin_color')) == $sikinColor ? 'selected' : '' }}>
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
                                autocomplete="physique">
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
                                value="{{ isset($user) ? $user->profile->job : old('job') }}" autocomplete="job">
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
                                    <option value="{{ $qualification }}"
                                        {{ (isset($user) ? $user->profile->qualification : old('qualification')) == $qualification ? 'selected' : '' }}>
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
                            <select class="form-select width_input input_background" name="financial_condition"
                                id="financial_condition">
                                <option selected="selected" disabled>اختر...</option>
                                @foreach ($financial_conditions as $financial_condition)
                                    <option value="{{ $financial_condition }}"
                                        {{ (isset($user) ? $user->profile->financial_condition : old('financial_condition')) == $financial_condition ? 'selected' : '' }}>
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
                                autocomplete="health_status">
                            @error('health_status')
                                <span>
                                    <strong
                                        class="global_errors d-flex justify-content-start">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <p class="fw-bolder d-flex justify-content-start">الالتزام الديني</p>
                            <select class="form-select width_input input_background" name="religious_commitment"
                                id="religious_commitment">
                                <option selected="selected" disabled>اختر...</option>
                                @foreach ($religiousOptions as $religiousOption)
                                    <option value="{{ $religiousOption }}"
                                        {{ (isset($user) ? $user->profile->religious_commitment : old('religious_commitment')) == $religiousOption ? 'selected' : '' }}>
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
@if (!isset($user))
    <div class="row mb-5">
        <div class="col-sm-0 col-md-2"></div>
        <div class="col-sm-12 col-md-8">
            <div class="card">
                <div class="card-body p-0">
                    <div class=" p-4 fw-bold fs-6" dir="rtl">
                        شروط وقوانين موقع تَوَافِيْق لجمع راسين بالحلال<br> <input type="checkbox" id="myCheckbox"
                            name="myCheckbox" required> لقد قرأت <a href="{{ route('termcondition') }}" class="text-primary"> شروط
                            الموقع و قوانينه </a> وأوافق على كل ما
                        جاء فيه
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-0 col-md-2"></div>
    </div>
@endif
<div class="row" dir="rtl">
    <div class="col-sm-0 col-md-2"></div>
    <div class="row mb-0">
        <div class="col-md-5 d-flex justify-content-center offset-md-4">
            <button type="submit" class="btn btn-primary btn-lg">
                {{ isset($user) ? 'تحديث' : 'تسجيل' }}
            </button>
        </div>
    </div>
    <div class="col-sm-0 col-md-2"></div>
</div>
