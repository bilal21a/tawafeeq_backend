@extends('layouts.app')
@section('content')
    <main>
        <section class="scroll-section" id="helpText">
            <form method="POST" action="{{ route('register') }}">
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
