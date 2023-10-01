<div class="p-0 width_silder">
    <div class="card" dir="rtl">
        <div>
            @php
                $timeDifference = Carbon\Carbon::parse($user->last_seen_at)->diffForHumans();
                $onlinestatus = isUserActive($user->last_seen_at);
            @endphp
            <span class="badge rounded-pill bg-outline-light position-absolute s-2 pill_styling z-index-1 fw-bolder"
                style="font-size: 9px;padding-right: 26px;">
                @if ($onlinestatus)
                    متواجد حاليا
                @else
                    @if (strpos($timeDifference, 'minute') !== false)
                        {{ str_replace('minutes', 'دقائق', str_replace('ago', 'منذ', $timeDifference)) }}
                    @elseif (strpos($timeDifference, 'hour') !== false)
                        @if ($timeDifference == 1)
                            {{ str_replace('hour', 'ساعة', str_replace('ago', 'منذ', $timeDifference)) }}
                        @else
                            {{ str_replace('hours', 'ساعات', str_replace('ago', 'منذ', $timeDifference)) }}
                        @endif
                    @else
                        {{ str_replace('ago', 'منذ', $timeDifference) }}
                    @endif
                @endif
            </span>
            <div class="{{ $onlinestatus ? 'green' : 'red' }}_dot me-1 position-absolute s-2 pill_styling z-index-1">
            </div>
            {{-- <span class="badge rounded-pill bg-primary me-1 position-absolute s-2 pill_styling z-index-1 fw-bolder"
                style="left: 21px;margin-left:105px; font-size: 9px;margin-left: 85px;">منذ
                30 دقيقة</span> --}}
            <a href="{{ route('members_profile', $user->id) }}">
                <img src="{{ $user->img_url }}" class="card-img-top" alt="card image" />
            </a>
        </div>
        <div class="card-body pb-2" style="text-align: justify;">
            <h5 class="card-title fw-bold">{{ $user->name }} ({{ $user->profile->age }})</h5>

            @php
                $rating = $user->rating;
                $filledStars = floor($rating);
                $halfStar = $rating - $filledStars >= 0.5;
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

            <p class="card-text mb-1" style="font-size: 13px;">{{ $user->nationality }}-{{ $user->city }}</p>
            <p class="mb-0">
                {{ Illuminate\Support\Str::limit($user->profile->about, 50, '...') }}
            </p>
        </div>
        <div class="d-flex justify-content-between ps-4 pb-3">
            <div class="me-3">
                <span
                    class="golden-star bi bi-star{{ $user->check_star_status($user->id, auth()->id()) ? '-fill' : '' }} cursor-pointer"
                    onclick="activestar('{{ $user->id }}',this)" style="font-size: 20px;"></span>
                <a href="{{ route('chat.chat_load', $user->id) }}">
                    <span class=" bi bi-chat-dots cursor-pointer" style="font-size: 20px;"></span>
                </a>
            </div>
            <a href="{{ route('members_profile', $user->id) }}">
                <span class=" bi bi-person-lines-fill cursor-pointer" style="font-size: 20px;"></span>
            </a>
        </div>
    </div>
</div>
