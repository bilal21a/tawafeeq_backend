<div class=" p-0 width_silder ">
    {{-- @dd($users) --}}
    <div class="card" dir="rtl">
        <div>
            <span
                class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                style=" font-size: 9px;">منذ دقيقة</span>
            <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
            </div>
            <span
                class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                30 دقيقة</span>
            <img src="{{ asset('assets/img/homepage_img/man.png') }}" class="card-img-top"
                alt="card image" />
        </div>
        <div class="card-body pb-2">
            <h5 class="card-title fw-bold">{{ $user->name }}</h5>
            <div class="star-row">
                <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
                <i class="golden-star" data-acorn-icon="star" data-acorn-size="15"></i>
            </div>
            <p class="card-text mb-1" style="font-size: 13px;">{{ $user->nationality }},{{ $user->city }}</p>
            <p class="mb-0"> {{ $user->profile->specification_of_partner }} </p>
        </div>
        <div class="d-flex justify-content-between ps-4 pb-3">
            <div class="me-3">
                <i data-acorn-icon="star" class="me-2" data-acorn-size="17"></i>
                <i data-acorn-icon="message" class="me-2" data-acorn-size="17"></i>
            </div>
            <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
        </div>
    </div>
</div>
