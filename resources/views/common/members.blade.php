<div class="tab-pane fade active show" id="first" role="tabpanel">
    <div class="d-grid gap-2 d-md-flex justify-content-between">
        <div class="d-grid gap-2 d-flex">
            <button class="btn btn-primary fs-5" type="button"><i data-acorn-icon="pen"
                    class="me-2 ms-3" data-acorn-size="17"></i>تعديل</button>
            <button class="btn btn-primary fs-5" type="button"><i data-acorn-icon="share"
                    class="me-2 ms-3" data-acorn-size="17"></i>تعديل</button>
        </div>
        <div>
            <button type="button" class="btn btn-danger mb-1"><i data-acorn-icon="bin"
                    class="me-2 ms-3" data-acorn-size="17"></i>حذف حسابي</button>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="mt-3">
                        <img width="176px" height="176px" class="rounded-circle"
                            src="{{ $user->img_url }}"
                            alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="no-bullets">
                        <li>{{ $user->name }}
                            <img width="30px" src="verified.png" alt=""
                                srcset=""> </li>
                        <li>{{ $user->country_of_residence }}-{{ $user->city }}</li>
                        <li> {{ $user->profile->age }}سنة</li>
                        <li>
                            <div class="star-row">
                                <span class="fw-bold"> 2.6</span>
                                <i class="golden-star" data-acorn-icon="star"
                                    data-acorn-size="20"></i>
                                <i class="golden-star" data-acorn-icon="star"
                                    data-acorn-size="20"></i>
                                <i class="golden-star" data-acorn-icon="star"
                                    data-acorn-size="20"></i>
                                <i class="golden-star" data-acorn-icon="star"
                                    data-acorn-size="20"></i>
                                <i class="golden-star" data-acorn-icon="star"
                                    data-acorn-size="20"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="pt-5">
                <h4 class="text-primary fs-5 letter_spacing">
                    "مواصفات الشريك الذي أرغب في الزواج به"
                </h4>
                <p>
                    {{ $user->profile->specification_of_partner }}
                </p>

            </div>
        </div>
    </div>
    <button class="btn btn-primary fs-5 width_btn mt-md-4" type="button"><i
            data-acorn-icon="pen" class="me-2 ms-3"
            data-acorn-size="17"></i>تعديل</button>
    <div class="user-info margin_top justify-content-lg-evenly">
        <div class="user-info-item  sepcifyed_width">
            <span class="user-info-label">الجنسية</span>
            <span class="user-info-value">{{  $user->nationality }}</span>
        </div>
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label">نوع الزواج</span>
            <span class="user-info-value">{{ $user->profile->type_of_marriage }}</span>
        </div>
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label">الحالة الإجتماعية</span>
            <span class="user-info-value">{{ $user->profile->marital_status }}</span>
        </div>
    </div>
    <div class="user-info margin_top justify-content-lg-evenly">
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label">الوزن</span>
            <span class="user-info-value">{{ $user->profile->weight }}</span>
        </div>
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label">الطول</span>
            <span class="user-info-value"> {{ $user->profile->height }}</span>
        </div>
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label">البشرة</span>
            <span class="user-info-value">{{ $user->profile->skin_color }}</span>
        </div>
    </div>
    <div class="user-info margin_top justify-content-lg-evenly">
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label">بنية الجسم</span>
            <span class="user-info-value">{{ $user->profile->physique }} </span>
        </div>
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label">العمل</span>
            <span class="user-info-value">{{ $user->profile->job }}</span>
        </div>
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label">المؤهل التعليمي</span>
            <span class="user-info-value">{{  $user->profile->qualification }}
            </span>
        </div>
    </div>
    <div class="user-info margin_top justify-content-lg-evenly">
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label">الحالة المادية</span>
            <span class="user-info-value">{{ $user->profile->health_status }}</span>
        </div>
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label">الحالة الصحية</span>
            <span class="user-info-value">{{ $user->profile->health_status }}</span>
        </div>
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label">الالتزام الديني</span>
            <span class="user-info-value">{{ $user->profile->religious_commitment }}</span>
        </div>
    </div>
    <div class="user-info margin_top justify-content-lg-start ps-7">
        <div class="user-info-item sepcifyed_width pe-md-7 me-md-7">
            <span class="user-info-label">تاريخ التسجيل</span>
            <span class="user-info-value">{{ $user->profile->created_at->format('d/m/Y') }}</span>
        </div>
    </div>
    <div class="user-info margin_top justify-content-lg-start pe-md-7 me-md-7">
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label" style="color: var(--tawafeeq);">عن نفسي</span>
            <p class="user-info-value">{{ $user->profile->about }}</p>
        </div>
    </div>
</div>
