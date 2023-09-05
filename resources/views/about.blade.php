<!DOCTYPE html>
<html lang="en" data-footer="true" data-scrollspy="true" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Acorn Admin Template | Form Layouts</title>
    <meta name="description" content="Examples and usage guidelines for form control styles and layout options." />
    <!-- Favicon Tags Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="img/favicon/mstile-310x310.png" />
    <!-- Favicon Tags End -->
    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="font/CS-Interface/style.css" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/OverlayScrollbars.min.css" />

    <link rel="stylesheet" href="css/vendor/select2.min.css" />

    <link rel="stylesheet" href="css/vendor/select2-bootstrap4.min.css" />

    <link rel="stylesheet" href="css/vendor/bootstrap-datepicker3.standalone.min.css" />

    <link rel="stylesheet" href="css/vendor/tagify.css" />

    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="css/main.css" />
    <script src="js/base/loader.js"></script>

</head>

<body class="letter-spacing">
    <div id="root">
        <div id="nav" class="nav-container d-flex">
            <div class="nav-content d-flex">
                <!-- Logo Start -->
                <div class="logo position-relative d-none">
                    <a href="Dashboards.Default.html">
                        <!-- Logo can be added directly -->
                        <!-- <img src="img/logo/logo-white.svg" alt="logo" /> -->

                        <!-- Or added via css to provide different ones for different color themes -->
                        <div class="img"></div>
                    </a>
                </div>
                <!-- Logo End -->

                <!-- Language Switch Start -->
                <div class="language-switch-container d-none">
                    <button class="btn btn-empty language-button dropdown-toggle d-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</button>
                    <div class="dropdown-menu d-none">
                        <a href="#" class="dropdown-item">DE</a>
                        <a href="#" class="dropdown-item active">EN</a>
                        <a href="#" class="dropdown-item">ES</a>
                    </div>
                </div>
                <!-- Language Switch End -->

                <!-- User Menu Start -->
                <div class="user-container d-flex d-none">
                    <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="profile" alt="profile" src="img/profile/profile-9.webp" />
                        <div class="name">Lisa Jackson</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-menu wide">
                        <div class="row mb-3 ms-0 me-0">
                            <div class="col-12 ps-1 mb-2">
                                <div class="text-extra-small text-primary">ACCOUNT</div>
                            </div>
                            <div class="col-6 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">User Info</a>
                                    </li>
                                    <li>
                                        <a href="#">Preferences</a>
                                    </li>
                                    <li>
                                        <a href="#">Calendar</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 pe-1 ps-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Security</a>
                                    </li>
                                    <li>
                                        <a href="#">Billing</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-1 ms-0 me-0">
                            <div class="col-12 p-1 mb-2 pt-2">
                                <div class="text-extra-small text-primary">APPLICATION</div>
                            </div>
                            <div class="col-6 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Themes</a>
                                    </li>
                                    <li>
                                        <a href="#">Language</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 pe-1 ps-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Devices</a>
                                    </li>
                                    <li>
                                        <a href="#">Storage</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-1 ms-0 me-0">
                            <div class="col-12 p-1 mb-3 pt-3">
                                <div class="separator-light"></div>
                            </div>
                            <div class="col-6 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <i data-acorn-icon="help" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">Help</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i data-acorn-icon="file-text" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">Docs</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 pe-1 ps-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <i data-acorn-icon="gear" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Menu End -->

                <!-- Icons Menu Start -->
                <ul class="list-unstyled list-inline text-center menu-icons">

                    <li class="list-inline-item d-none">
                        <a href="#" id="pinButton" class="pin-button">
                            <i data-acorn-icon="lock-on" class="unpin" data-acorn-size="18"></i>
                            <i data-acorn-icon="lock-off" class="pin" data-acorn-size="18"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" id="colorButton">
                            <i data-acorn-icon="moon" class="light" data-acorn-size="18"></i>
                            <i data-acorn-icon="sun" class="dark" data-acorn-size="18"></i>
                        </a>
                    </li>
                    <li class="list-inline-item d-none">
                        <a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true" aria-expanded="false" class="notification-button">
                            <div class="position-relative d-inline-flex">
                                <i data-acorn-icon="bell" data-acorn-size="18"></i>
                                <span class="position-absolute notification-dot rounded-xl"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
                            <div class="scroll">
                                <ul class="list-unstyled border-last-none">
                                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                        <img src="img/profile/profile-1.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                        <div class="align-self-center">
                                            <a href="#">Joisse Kaycee just sent a new comment!</a>
                                        </div>
                                    </li>
                                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                        <img src="img/profile/profile-2.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                        <div class="align-self-center">
                                            <a href="#">New order received! It is total $147,20.</a>
                                        </div>
                                    </li>
                                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                        <img src="img/profile/profile-3.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                        <div class="align-self-center">
                                            <a href="#">3 items just added to wish list by a user!</a>
                                        </div>
                                    </li>
                                    <li class="pb-3 pb-3 border-bottom border-separator-light d-flex">
                                        <img src="img/profile/profile-6.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                        <div class="align-self-center">
                                            <a href="#">Kirby Peters just sent a new message!</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Icons Menu End -->

                <!-- Menu Start -->
                <div class="menu-container flex-grow-1">
                    <ul id="menu" class="menu">
                        <li class="">
                            <a href="tawafeeq.html">
                                <span>الصفحة الرئيسية</span>
                            </a>
                        </li>
                        <li>
                            <a href="about.html">
                                <span class="label">من نحن</span>
                            </a>
                        </li>
                        <li>
                            <a href="pricing.html">
                                <span class="label">الباقات</span>
                            </a>

                        </li>
                        <li class="mega">
                            <a href="contact.html">
                                <span class="label">تواصل معنا</span>
                            </a>
                        </li>
                        <li class="mega">
                            <a href="login_page.html">
                                <span class="label">تسجيل الدخول                                </span>
                            </a>
                        </li>
                        <li class="mega">
                            <a href="register.html">
                                <span class="label"> تسجيل</span>
                            </a>
                        </li>
                        <li class="mega">
                            <a href="profile_new.html">
                                <span class="label"> After Login</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Mobile Buttons Start -->
                <div class="mobile-buttons-container">
                    <!-- Scrollspy Mobile Button Start -->

                    <!-- Scrollspy Mobile Button End -->

                    <!-- Scrollspy Mobile Dropdown Start -->
                    <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
                    <!-- Scrollspy Mobile Dropdown End -->

                    <!-- Menu Button Start -->
                    <a href="#" id="mobileMenuButton" class="menu-button">
                        <i data-acorn-icon="menu"></i>
                    </a>
                    <!-- Menu Button End -->
                </div>
                <!-- Mobile Buttons End -->
            </div>
            <div class="nav-shadow"></div>
        </div>
        <main class="main_class padding_bottom_0 ">
            <div id="root">
                <div class="row p-4">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-0"></div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="container">
                            <div class="page-title-container">

                                <div id="accordionCards">
                                    <div class="mb-n2">
                                        <div class="d-flex mb-2">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                                    <div id="collapseOneCards" class="collapse show" data-bs-parent="#accordionCards">
                                                        <div class="card-body accordion-content pt-3">
                                                            <p class="fs-4"><strong>من نحن</strong></p>
                                                            <p>
                                                                توافيق هي فكرة نوعية بامتياز، تتماشى مع المستقبل أننا ندرك أن الهدف المنشود ليس أمرً سهلًا ولكننا وبنفس القوة نؤمن أن الاطلاع بالفكر أو العمل للمجتمع سبيل للارتقاء النجاح بالنسبة لموقع توافيق أكثر من مجرد إحصاءات، فهو يتولد من حماسنا وشغفنا بالتميز من
                                                                هنا جاءت البداية، وقررنا اختيار هذا الطريق لتقديم المساعدة لأنفسنا ومجتمعنا وإنشاء ثقة على أُسس وقواعد وذلك ايمانا منا بتذليل جميع العقبات أمام المشتركين بتوفير كل ماتحتاجة في مكان واحد
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                                    <div>
                                                        <img class="pt-3" width="77%" src="tawfeeq.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12"></div>
                </div>

                <!-- Layout Footer End -->
            </div>
        </main>
        <main class="main_class2 padding_bottom_0 padding_top_0">
            <div id="root">
                <div class="row p-4 m-0">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="container">
                            <div class="page-title-container">

                                <div id="accordionCards">
                                    <div class="mb-n2">
                                        <div class="d-flex mb-2">
                                            <div class="row">

                                                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12">
                                                    <img class="pt-3" width="100%" src="couple.png" alt="">
                                                </div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                                    <div id="collapseOneCards" class="collapse show" data-bs-parent="#accordionCards">
                                                        <div class="card-body accordion-content ps-0 pt-3">
                                                            <p class="fs-4"><strong>هدفنا</strong></p>
                                                            <p>
                                                                موقع زواج خاص للمسلمين في جميع دول العالم , يسعى للمساهمة في مساعدة الجنسين على الزواج الشرعي بطريقة اسلامية , بتوفير جميع الأدوات الازمة لتسجيل الطلبات والبحث وتسهيل عملية إيجاد الطرف الآخر بالمواصفات المطلوبة لذلك يسعى موقع توافيق الى تسهيل الخدمات
                                                                للمشتركين وذلك من خلال توفر جميع الخدمات الخاص بالاسرة والزواج كوجودد خدمة الاستشارة الاسرية والقانوني وخدمة البحث عن الزوج او الزوجة وخدمة الخطابة في موقع واحد وذلك بتوفير على المشتركين
                                                                الوقت والجهد.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>

                <!-- Layout Footer End -->
            </div>
        </main>
        <main class="main_class padding_bottom_0 padding_top_0">
            <div id="root">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="container">
                            <div class="page-title-container">

                                <div id="accordionCards">
                                    <div class="mb-n2">
                                        <div class="d-flex mb-2">
                                            <div class="row p-4">
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                                    <div id="collapseOneCards" class="collapse show" data-bs-parent="#accordionCards">
                                                        <div class="card-body accordion-content pt-3">
                                                            <p class="fs-4"><strong> رؤيتنا</strong></p>
                                                            <p>
                                                                ان نكون الرواد في تقديــم خدماتنــا بجــودة عاليــة وبطريقــة مختلفــة تميزنــا عــن مواقع الزواج الاخر والعمـل علـى أن تكـون لنـا بصمتنـا وهويتنـا المميـزة فـي كافـة أعمالنـا وذلــك مــن خــلال تقديم الخدمة المناسبة في الوقت المناسب الذي يحتاجة المشتركين
                                                                لتلبية احتيجاتهم
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                                    <div>
                                                        <img class="pt-3" width="77%" src="target.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>

                <!-- Layout Footer End -->
            </div>
        </main>
        <main class="main_class2 padding_top_0">
            <div id="root">
                <div class="row m-0">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="container">
                            <div class="page-title-container">

                                <div id="accordionCards">
                                    <div class="mb-n2">
                                        <div class="d-flex mb-2">
                                            <div class="row p-4">
                                                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12">
                                                    <img class="pt-3" width="100%" src="couple2.png" alt="">
                                                </div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                                    <div id="collapseOneCards" class="collapse show" data-bs-parent="#accordionCards">
                                                        <div class="card-body accordion-content ps-0 pt-3">
                                                            <p class="fs-4"><strong> مميزاتنا</strong></p>
                                                            <p>
                                                                عملنا على ان نكون الافضل بان الله تعالى وقمنا بتجهيز برنامج في كل عضو بهدا الموقع وهو تقييم الطرف الاخر من خلال تواصلك معه بالنجوم الخمس حيث الخمس نجوم تعني ممتاز جدا والنجمه الواحده سيئ جدا بدلك التقييم الشخص بمعاملته واخلاقة مع الغير يبني سيرتة الداتية
                                                                والاعضاء الجدد يعرفوا الصالح من الطالح ويكون كل عضو مسؤول عن نفسه ولا يلوم احد ان تعامل مع سيئ التقييم
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>

                <!-- Layout Footer End -->
            </div>
        </main>
        <main class="main_class padding_bottom_0 padding_top_0">
            <div id="root">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="container">
                            <div class="page-title-container">

                                <div id="accordionCards">
                                    <div class="mb-n2">
                                        <div class="d-flex mb-2">
                                            <div class="row p-4">
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                                    <div id="collapseOneCards" class="collapse show" data-bs-parent="#accordionCards">
                                                        <div class="card-body accordion-content pt-3">
                                                            <p class="fs-4"><strong>أهمية توثيق الحساب
                                                            </strong></p>
                                                            <p>
                                                                ان توثيق حسابك من خلال اعطاءك المعلومات الصحيح عنك يعطي المشتركين الثقة في التعامل معك واخذ معلوماتك بعين الاعتبار من الصحة وكذالك مزودين الخدمات ليكون من السهل للطرف الاخر سهولة الوصول لديك دون تنقيب وهي اسهل طريقة في وجود شريك حياتك المناسب لذلك يسعى
                                                                موقع توافيق الى تسهيل الخدمات للمشتركين وذلك من خلال توفر جميع الخدمات الخاص بالاسرة والزواج كوجودد خدمة الاستشارة الاسرية والقانوني وخدمة البحث عن الزوج او الزوجة وخدمة الخطابة في موقع واحد
                                                                وذلك بتوفير على المشتركين الوقت والجهد.

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                                    <div>
                                                        <img class="pt-3" width="77%" src="verified.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>

                <!-- Layout Footer End -->
            </div>
        </main>
    </div>
    <!-- Vendor Scripts Start -->
    <script src="js/vendor/jquery-3.5.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/OverlayScrollbars.min.js"></script>
    <script src="js/vendor/autoComplete.min.js"></script>
    <script src="js/vendor/clamp.min.js"></script>

    <script src="icon/acorn-icons.js"></script>
    <script src="icon/acorn-icons-interface.js"></script>

    <script src="js/cs/scrollspy.js"></script>

    <script src="js/vendor/select2.full.min.js"></script>

    <script src="js/vendor/datepicker/bootstrap-datepicker.min.js"></script>

    <script src="js/vendor/tagify.min.js"></script>

    <!-- Vendor Scripts End -->

    <!-- Template Base Scripts Start -->
    <script src="js/base/helpers.js"></script>
    <script src="js/base/globals.js"></script>
    <script src="js/base/nav.js"></script>
    <script src="js/base/search.js"></script>
    <script src="js/base/settings.js"></script>
    <!-- Template Base Scripts End -->
    <!-- Page Specific Scripts Start -->

    <script src="js/forms/layouts.js"></script>

    <script src="js/common.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Page Specific Scripts End -->
</body>

</html>