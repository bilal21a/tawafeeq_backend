@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <main>
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="tab-content">
                            @if ($user)
                                @include('common.profile.profile')
                            @else
                                <img src="{{ asset('assets/img/no_profile.png') }}" alt="" width="100%">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script>
        let selectedStars = 1;
        var stars = 1;

        $('.star-row i').on('click', function() {
            const index = $(this).index() + 1;

            if (index === selectedStars) {
                $(this).removeClass('bi-star-fill').addClass('bi-star');
                selectedStars--;
            } else {
                $('.star-row i').removeClass('bi-star-fill').addClass('bi-star');
                $(this).prevAll().addBack().removeClass('bi-star').addClass('bi-star-fill');
                selectedStars = index;
            }
            stars = selectedStars
            console.log('Selected stars:', selectedStars);
        });
        $('.save_stars').on('click', function() {
            console.log('stars: ', stars);
            var profile_id = $('#profile_id').val()
            const url = "{{ route('save_rating') }}";
            const data = {
                profile_id: profile_id,
                stars: stars
            };

            axios.post(url, data)
                .then(response => {
                    console.log('Response:', response.data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    </script>
@endsection
