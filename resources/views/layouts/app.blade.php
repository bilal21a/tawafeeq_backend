<!DOCTYPE html>
<html lang="en" data-footer="true" data-scrollspy="true" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>HUDHOODH</title>
    <meta name="description" content="Examples and usage guidelines for form control styles and layout options." />
    <meta name="description"
        content="Glidejs is a dependency-free JavaScript ES6 slider and carousel. It’s lightweight, flexible and fast. Designed to slide. No less, no more." />
    <!-- Favicon Tags Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="{{ asset('assets/img/hudhood_icon.png') }}" />

    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicon/mstile-144x144.png') }}" />
    <meta name="msapplication-square70x70logo" content="{{ asset('assets/img/favicon/mstile-70x70.png') }}" />
    <meta name="msapplication-square150x150logo" content="{{ asset('assets/img/favicon/mstile-150x150.png') }}" />
    <meta name="msapplication-wide310x150logo" content="{{ asset('assets/img/favicon/mstile-310x150.png') }}" />
    <meta name="msapplication-square310x310logo" content="{{ asset('assets/img/favicon/mstile-310x310.png') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/CS-Interface/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/OverlayScrollbars.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/baguetteBox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/glide.core.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/select2-bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-datepicker3.standalone.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/profile_new.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tawfeeq.css') }}" />
    <script src="{{ asset('js/base/loader.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <link href="{{ asset('css/whatsapp_icon.css') }}" rel="stylesheet">

    @yield('css')
    <style>
        * {
            font-family: 'Tajawal', sans-serif !important;
        }

        .notification_area {
            padding: 0.5em;
            float: right;
            z-index: 9999999999999;
            position: absolute;
            right: 0;
            backdrop-filter: blur(4px);
        }
    </style>
</head>

<body
    class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-16 elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-16 letter-spacing padding_bottom font_family pb-0">
    <div id="root">
        @include('layouts.partials.header')
        @yield('content')
    </div>
    <a href="https://wa.me/+971566904982?text=اهلا بك
    شكرا لتواصلكم مع حظوظ
    المنصة الخليجية الرائدة والموثوقة
    للتعارف بهدف الزواج
    موظفونا مشغولين حاليا
    سوف يتم الرد عليكم في اقرب وقت ممكن"
        target=”_blank” class="whatsapp-btn">
        <i class="bi bi-whatsapp"></i>
    </a>


    @include('layouts.partials.footer')
    @include('layouts.partials.notification')
    <audio id="audio" src="{{ asset('assets/img/audio_notification.wav') }}" style="display: none"></audio>

    <script src="{{ asset('js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('js/vendor/OverlayScrollbars.min.js') }} "></script>
    <script src="{{ asset('js/vendor/autoComplete.min.js') }} "></script>
    <script src="{{ asset('js/vendor/clamp.min.js') }}"></script>
    <script src="{{ asset('js/vendor/glide.min.js') }}"></script>
    <script src="{{ asset('icon/acorn-icons.js') }}"></script>
    <script src="{{ asset('icon/acorn-icons-interface.js') }}"></script>
    <script src="{{ asset('js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/vendor/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/vendor/tagify.min.js') }}"></script>
    <script src="{{ asset('font/CS-Line/csicons.min.js') }}"></script>
    <script src="{{ asset('js/base/helpers.js') }}"></script>
    <script src="{{ asset('js/base/globals.js') }}"></script>
    <script src="{{ asset('js/base/nav.js') }} "></script>
    <script src="{{ asset('js/base/search.js') }} "></script>
    <script src="{{ asset('js/base/settings.js') }} "></script>
    <script src="js/base/init.js"></script>
    <script src="{{ asset('js/cs/glide.custom.js') }} "></script>
    <script src="{{ asset('js/plugins/carousels.js') }} "></script>
    <script src="{{ asset('js/common.js') }} "></script>
    <script src="{{ asset('js/scripts.js') }} "></script>
    <script src="{{ asset('js/forms/layouts.js') }} "></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-database.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('js/notification.js') }} "></script>

    <script>
        function activestar(user_id, element) {
            const data = {
                rated_to_id: user_id
            };
            if (element.classList.contains("bi-star")) {
                element.classList.remove("bi-star");
                element.classList.add("bi-star-fill");
                var url = "{{ route('favlist') }}";
            } else {
                element.classList.remove("bi-star-fill");
                element.classList.add("bi-star");
                var url = "{{ route('remove_from_favlist') }}";
            }
            axios.post(url, data)
                .then(response => {})
                .catch(error => {
                    if (error.response.status === 401) {
                        window.location.href = "{{ route('login') }}";
                        console.log('Unauthorized access. Please login.');
                    }
                });
        }
    </script>
    <script>
        var color_mode = localStorage.getItem('acorn-classic-dashboard-color');
        console.log(color_mode);
        if (color_mode == 'dark-blue') {
            $('.light_text').html('الوضع النهاري')
        } else {
            $('.light_text').html('الوضع الليلي')
        }

        function isNumeric(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }

        function hidePassword() {
            console.log("im in");
            $('.password_field').attr('type', 'password')
            $('.eye_icon').hide()
            $('.eye_off_icon').show()
        }

        function showPassword() {
            console.log("im in");
            $('.password_field').attr('type', 'text')
            $('.eye_icon').show()
            $('.eye_off_icon').hide()
        }
    </script>
    @yield('js')
</body>

</html>
