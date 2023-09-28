<div class="p-0 width_silder">
    <div class="card " dir="rtl">
        <div>

            {{-- <span class="badge rounded-pill bg-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                style=" font-size: 9px;">منذ دقيقة</span>
            <div class=" red_dot me-1 position-absolute s-2 pill_styling z-index-1">
            </div>
            <span class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                30 دقيقة</span> --}}
            <a href="{{ route('members_profile', $user->id) }}">
                <img src="{{ $user->img_url }}" class="card-img-top" alt="card image" />
            </a>
        </div>
        <div class="card-body pb-2" style="text-align: justify;">
            <h5 class="card-title fw-bold">{{ $user->name }}</h5>

            @php
                $rating=$user->rating;
                $filledStars = floor($rating);
                $halfStar = ($rating - $filledStars) >= 0.5;
                $unfilledStars = 5 - ceil($rating);
            @endphp

            <div class="star-rating" dir="ltr" style="text-align: end;">
                @for ($i = 0; $i < $filledStars; $i++)
                    <span class="golden-star bi bi-star-fill"></span>
                @endfor

                @if ($halfStar)
                    <span class="golden-star bi bi-star-half"></span>
                @endif

                @for ($i = 0; $i < $unfilledStars; $i++)
                    <span class="golden-star bi bi-star"></span>
                @endfor
            </div>

            <p class="card-text mb-1" style="font-size: 13px;">{{ $user->nationality }}</p>
            <p class="mb-0"> {{ $user->profile->specification_of_partner }} </p>
        </div>
        <div class="d-flex justify-content-between ps-4 pb-3">
            <div class="me-3">
                <span class="golden-star bi bi-star cursor-pointer" onclick="activestar('{{ $user->id }}',this)"></span>
                <a href="{{ route('chat.chat_load', $user->id) }}">
                    <i data-acorn-icon="message" class="me-2 cursor-pointer" data-acorn-size="17"></i>
                </a>
            </div>
            <a href="{{ route('members_profile', $user->id) }}">
                <i data-acorn-icon="user" class="me-2" data-acorn-size="17"></i>
            </a>
        </div>
    </div>
</div>
