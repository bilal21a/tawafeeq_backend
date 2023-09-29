@foreach ($users as $user)
    <div class="card swiper-slide" style="width: unset !important;">
        @include('common.card')
    </div>
@endforeach
@php
    $users_count = $users->count();
    $loop = $users_count > 3 ? true : false;
@endphp
<script>
    var key = "{{ $type }}"
    var loop = "{{ $loop }}";
    console.log('loop: ', loop);
    var swiper1 = new Swiper(`.${key}-slide-content`, {
        slidesPerView: 5,
        spaceBetween: 25,
        loop: loop,
        centeredSlides: !loop,
        fade: true,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: `.${key}-swiper-button-next`,
            prevEl: `.${key}-swiper-button-prev`,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });
</script>
