@foreach ($users as $user)
    <a href="#" onclick="openChat({{ $user->id }})"
        class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item mt-2" data-id="3"
        style="margin-top: 2em !important;">
        <div class="col-auto">
            <div class="sw-5 d-inline-block position-relative">
                <img src="{{ asset('assets/img/homepage_img/woman.png') }}" id="contactImg_{{ $user->id }}"
                    class="img_radius" width="50px" height="50px">
                <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0"
                    id="contactStatus"></i>
            </div>
        </div>
        <div class="col">
            <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                <div class="d-flex flex-column" style="margin-right: 2em;">
                    <div class="mb-1" id="contactName_{{ $user->id }}">{{ $user->name }}</div>
                    {{-- <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Yesterday 12:20
                    </div> --}}
                </div>
                <div class="d-flex">
                    <div class="badge bg-primary d-none" id="contactUnread">1</div>
                </div>
            </div>
        </div>
    </a>
@endforeach
