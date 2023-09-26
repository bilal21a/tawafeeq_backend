@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <main>
        <section class="scroll-section" id="helpText">
            <form method="POST" action="{{ route('update_profile') }}" id="your-form-id">
                @csrf
                @include('auth.common.register_form')
            </form>
        </section>
    </main>
@endsection
@section('js')
    <script>
        const countryCities = @json($countries);
        console.log('countryCities: ', countryCities);
        $(document).ready(function() {
            const $countryDropdown = $('#country_of_residence');
            const $cityDropdown = $('#city');
            const selectedCountry = $('#country_of_residence').val();
            console.log('selectedCountry: ', selectedCountry);
            const singleCountry = countryCities.find(obj => obj.country == selectedCountry);
            const cities = singleCountry.cities
            const user_city="{{ $user->city }}";
            console.log('user_city: ', user_city);

            // Clear and populate the city dropdown
            $cityDropdown.prop('disabled', false).empty();
            cities.forEach(city => {
                const selected_user_city=user_city==city?'selected':''
                $cityDropdown.append(`<option value="${city}" ${selected_user_city}>${city}</option>`);
            });

            $countryDropdown.on('change', function() {
                const selectedCountry = $(this).val();
                const singleCountry = countryCities.find(obj => obj.country == selectedCountry);
                const cities = singleCountry.cities

                // Clear and populate the city dropdown
                $cityDropdown.prop('disabled', false).empty();
                cities.forEach(city => {
                    $cityDropdown.append(`<option value="${city}">${city}</option>`);
                });
            });
        });
    </script>
@endsection
