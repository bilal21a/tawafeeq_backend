{{-- @dd($profilevistors); --}}
@foreach ($profilevistors as $profilevistor)
<div class="os-content mb-3" style="padding: 0px 15px; height: 100%; width: 100%;">
    <div class=" mb-2">
        <div class="row g-0 sh-19 sh-lg-9">
            <div class="col-auto position-relative">
                <img src="{{ $profilevistor->user->img_url }}" alt="alternate text"
                    class="card-img card-img-horizontal sw-11">
            </div>
            <div class="col">
                <div class="card-body pt-0 pb-0 h-100">
                    <div class="row g-0 h-100 align-content-center d-flex justify-content-evenly">
                        <a href="#" class="col-12 col-lg-3 d-flex flex-column mb-lg-0 mb-3 mb-lg-0  mb-lg-0 align-items-lg-center">
                            {{ $profilevistor->user->name }}
                        </a>
                        <div class="col-12 col-sm-6 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-center" dir="ltr">
                            <div class="lh-1 text-alternate">{{ $profilevistor->created_at->diffForHumans() }}</div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-lg-center" dir="ltr">
                            <a href="{{route('members_profile', $profilevistor->user_id) }}" class="btn btn-sm btn-icon btn-icon-only btn-outline-primary align-top float-end" type="button">
                                <i data-acorn-icon="eye" class="mb-3 d-inline-block text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
