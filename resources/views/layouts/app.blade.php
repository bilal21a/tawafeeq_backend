<!DOCTYPE html>
<html lang="en" data-footer="true" data-scrollspy="true" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Acorn Admin Template | Form Layouts</title>
    <meta name="description" content="Examples and usage guidelines for form control styles and layout options." />
    <meta name="description"
        content="Glidejs is a dependency-free JavaScript ES6 slider and carousel. It’s lightweight, flexible and fast. Designed to slide. No less, no more." />
    <!-- Favicon Tags Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="apple-touch-icon-precomposed" sizes="57x57"
        href="{{ asset('assets/img/favicon/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('assets/img/favicon/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('assets/img/favicon/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('assets/img/favicon/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60"
        href="{{ asset('assets/img/favicon/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
        href="{{ asset('assets/img/favicon/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
        href="{{ asset('assets/img/favicon/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
        href="{{ asset('assets/img/favicon/apple-touch-icon-152x152.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-196x196.png') }}"
        sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/png"
        href="{{ asset('img/favicon/favicon-32x32.png" sizes="assets/img/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-128.png') }}" sizes="128x128" />
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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap"
        rel="stylesheet" />
    @yield('css')
    <style>
        .global_errors {
            width: 100%;
            margin-top: 0.25rem;
            font-size: .875em;
            color: #dc3545;
        }

        .font_family {
            font-family: Tajawal !important;
        }

        .white {
            color: whitesmoke;
        }

        .custom_chat_loader {
            padding-left: 27px !important;
            padding-right: 5px !important;
        }



        .letter_spacing {
            letter-spacing: -1px;
        }

        .width_btn {
            width: 209px;
            height: 35px;
        }

        .margin_top {
            margin-top: 14px !important;
        }

        .footer {
            background-color: #00A3D8;
        }

        .text_decoration {
            text-decoration: none;
        }

        .line_height_footer {
            line-height: 2;
        }

        .font_size {
            font-size: 14px;
        }

        .blue_background {
            background-color: #00A3D8;
            color: whitesmoke;
        }

        ::placeholder {
            color: whitesmoke;
            /* Change the color to your desired color */
        }

        .blue_background:focus {
            border: 1px solid whitesmoke;
            background-color: #00A3D8;
            outline: none;
            color: whitesmoke;
        }
    </style>
</head>

<body
    class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-16 elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-16 letter-spacing padding_bottom font_family pb-0">
    <div id="root">
        @include('layouts.partials.header')
        @yield('content')
    </div>
    @include('layouts.partials.footer')
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

    @yield('js')
</body>

</html>
