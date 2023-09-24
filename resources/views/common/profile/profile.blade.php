<div class="tab-pane fade active show" id="first" role="tabpanel">
    <div class="d-grid gap-2 d-md-flex justify-content-between">
        @if ($user_id == $user->id)
            <div class="d-grid gap-2 d-flex">
                <a href="{{ route('edit_profile', $user->id) }}" class="btn btn-primary fs-5" style="padding-top: 12px;"
                    type="button"><i data-acorn-icon="pen" class="me-2 ms-3" data-acorn-size="17"></i>تعديل</a>
            </div>
            <div>
                <button type="button" class="btn btn-danger mb-1"><i data-acorn-icon="bin" class="me-2 ms-3"
                        data-acorn-size="17"></i>حذف حسابي</button>
            </div>
        @endif
    </div>
    <div class="row justify-content-between">
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="mt-3">
                        <img width="176px" height="176px" class="rounded-circle" src="{{ $user->img_url }}"
                            alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-8 align-self-center">
                    <ul class="no-bullets">
                        <li>{{ $user->name }}
                            <img width="30px" src="verified.png" alt="" srcset="">
                        </li>
                        <li>{{ $user->country_of_residence }}-{{ $user->city }}</li>
                        <li> {{ $user->profile->age }}سنة</li>

                        <li>
                            @php
                                $rating = $user->rating;
                                $filledStars = floor($rating);
                                $halfStar = $rating - $filledStars >= 0.5;
                                $unfilledStars = 5 - ceil($rating);
                            @endphp

                            <div class="star-rating" dir="ltr">
                                @for ($i = 0; $i < $filledStars; $i++)
                                <i class="golden-star bi bi-star-fill"></i>
                                @endfor

                                @if ($halfStar)
                                <i class="golden-star bi bi-star-half"></i>
                                @endif

                                @for ($i = 0; $i < $unfilledStars; $i++)
                                <i class="golden-star bi bi-star"></i>
                                @endfor
                                <span class="fw-bold">{{ $user->rating }}</span>
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
    <div class="d-flex justify-content-end">
        <button class="btn btn-primary fs-5 width_btn mt-md-4 d-none" type="button"><i data-acorn-icon="pen"
                class="me-2 ms-3" data-acorn-size="17"></i>تعديل</button>
        @if ($user_id != $user->id && $user->check_rating($user->id, auth()->id()))
            <div class="ms-7 ps-7">
                <button type="button" class="btn btn-outline-primary ms-6 rating_modal_btn" data-bs-toggle="modal"
                    data-bs-target="#ratingModal">تقييم العضو</button>
            </div>
        @endif
    </div>
    <div class="user-info margin_top justify-content-lg-evenly">
        <div class="user-info-item  sepcifyed_width">
            <span class="user-info-label">الجنسية</span>
            <span class="user-info-value">{{ $user->nationality }}</span>
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
            <span class="user-info-value">{{ $user->profile->weight }}kg</span>
        </div>
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label">الطول</span>
            <span class="user-info-value"> {{ $user->profile->height }}cm</span>
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
            <span class="user-info-value">{{ $user->profile->qualification }}
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
        <div class="user-info-item sepcifyed_width me-md-7">
            <span class="user-info-label">تاريخ التسجيل</span>
            <span class="user-info-value">{{ $user->profile->created_at->format('d/m/Y') }}</span>
        </div>
    </div>
    <div class="user-info margin_top justify-content-lg-start me-md-7">
        <div class="user-info-item sepcifyed_width">
            <span class="user-info-label" style="color: var(--hudhood);">عن نفسي</span>
            <p class="user-info-value">{{ $user->profile->about }}</p>
        </div>
    </div>
</div>
<div class="">
    <div class="card-body">
        <div class="modal fade" id="ratingModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class=" modal-header d-flex justify-content-center modal_title"
                        style="border-bottom: 0px solid !important">
                        <h1>تقييم العضو</h1>
                    </div>
                    <form action="#">
                        <div class="d-flex justify-content-center mt-3 fs-5">
                            <p>ملاحظاتك قيمة</p>
                        </div>
                        <div class=" d-flex justify-content-center" style="border-bottom: 0px solid !important">
                            <div class="star-row rating_star_assign">
                                <i class="golden-star bi bi-star-fill font_star"></i>
                                <i class="golden-star bi bi-star font_star"></i>
                                <i class="golden-star bi bi-star font_star"></i>
                                <i class="golden-star bi bi-star font_star"></i>
                                <i class="golden-star bi bi-star font_star"></i>
                            </div>
                            <input type="hidden" name="" id="profile_id" value="{{ $user->id }}">

                        </div>
                        <div class="modal-footer d-flex justify-content-center"
                            style="border-top: 0px solid !important;">
                            <button type="button" class="btn btn-primary save_stars">تقييم</button>
                            <button type="submit" class="text-danger btn btn-light"
                                data-bs-dismiss="modal">ألغاء</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ratingDoneModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class=" modal-header d-flex justify-content-center modal_title"
                        style="border-bottom: 0px solid !important">
                        <h1>تقييم العضو</h1>
                    </div>
                    <img src="{{ asset('assets/img/rating_done.png') }}" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
