<div class="row g-2 mb-5">
    @forelse ($profilevistors as $profilevistor)
        <div class="col-sm-6 col-6">
            <a href="{{ route('members_profile', $profilevistor->user_id) }}" class="row g-0 sh-10">
                <div class="col-3 col-sm-3 h-100">
                    <img src="{{ $profilevistor->user->img_url }}" alt="alternate text"
                        class="card-img card-img-horizontal">
                </div>
                <div class="col-9 col-sm-9">
                    <div class="card-body d-flex flex-column">
                        <p class="heading mb-0"> {{ $profilevistor->user->name }}
                            <br>
                            <span class="text-muted">
                                {{ $profilevistor->created_at->diffForHumans() }}
                            </span>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    @empty
        <div class="row d-flex justify-content-center mt-2">
            <img src="{{ asset('assets/img/latest_no_memebers.svg') }}" alt="" style="width: 30em" >
        </div>
    @endforelse
</div>
