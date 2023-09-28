<html lang="en" data-placement="horizontal" data-behaviour="unpinned" data-layout="fluid" data-radius="rounded"
    data-color="light-pink" data-navcolor="default" data-show="true">

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

        .fixed-background {
            background: url("{{ asset('assets/img/something_went_wrong.svg') }}") no-repeat center center fixed;
            background-image: url("{{ asset('assets/img/something_went_wrong.svg') }}");
            background-position-x: center;
            background-position-y: center;
            background-size: initial;
            background-repeat-x: no-repeat;
            background-repeat-y: no-repeat;
            background-attachment: fixed;
            background-origin: initial;
            background-clip: initial;
            background-color: initial;
            background-size: cover;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
    </style>
</head>

<body class="h-100" style="" data-bs-padding="0px" data-new-gr-c-s-check-loaded="14.1127.0"
    data-gr-ext-installed="">
    <div id="paddingModal" class="modal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog d-none">
            <div class="modal-content"></div>
        </div>
    </div>
    <div id="root" class="h-100">
        <div class="fixed-background"></div>
        <div class="container-fluid p-0 h-100 position-relative">
            <div class="row g-0 h-100">
                <div class="offset-0 col-12 d-none d-lg-flex offset-md-1 col-lg h-lg-100"></div>
                <div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
                    <div
                        class="sw-lg-80 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
                        <div class="sw-lg-60 px-5">
                            <div class="sh-11">
                                <a href="{{ route('home') }}">
                                    <div class="logo-default"></div>
                                </a>
                            </div>
                            <div class="mb-5">
                                <h2 class="cta-1 mb-0 text-primary">هناك خطأ ما!</h2>
                                <h2 class="display-2 text-primary">رمز الخطأ 500</h2>
                            </div>
                            <div class="mb-5">
                                <p class="h6">يبدو أن الصفحة التي تبحث عنها غير متوفرة.</p>
                            </div>
                            <div>
                                <a href="{{ route('home') }}" class="btn btn-icon btn-icon-start btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="acorn-icons acorn-icons-arrow-left undefined">
                                        <path
                                            d="M9 17 2.35355 10.3536C2.15829 10.1583 2.15829 9.84171 2.35355 9.64645L9 3M18 10 3 10">
                                        </path>
                                    </svg>
                                    <span>العودة إلى الصفحة الرئيسية</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
