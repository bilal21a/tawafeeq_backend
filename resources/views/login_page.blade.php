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

<body>
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
                <!-- Menu End -->

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
        <main>
            <section class="scroll-section" id="helpText">

                <div class="row mb-5">
                    <div class="col-sm-0 col-md-2"></div>
                    <div class="col-sm-12 col-md-8">
                        <div class="card">
                            <div class="card-body p-0">
                                <form>
                                    <div class="container mt-5">
                                        <div class="row  p-4" dir="rtl">
                                            <div class="col-12 d-flex">
                                                <p class="fw-bolder ms-auto">بيانات الدخول</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <!-- <i data-acorn-icon="user"></i> -->
                                                <p class="fw-bolder d-flex justify-content-start">اسم العضو</p>
                                                <input type="text" name="organization_name" id="organization_name" class="form-control input_background ">
                                            </div>

                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">البريد الالكتروني</p>
                                                <input type="password" name="password" id="password" class="form-control input_background">
                                            </div>

                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">كلمة المرور <i class="m-0" data-acorn-icon="eye"></i></p>
                                                <input type="email" name="email" id="email" class="form-control input_background">
                                            </div>


                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">الجنس
                                                </p>
                                                <select class="form-control input_background" name="gender" id="gender">
                                            <option value="other">اختر...</option>
                                            <option value="male">ذكر</option>
                                            <option value="female">انثى</option>
                                          </select>
                                            </div>
                                            <div id="passwordHelpBlock" class="text-danger form-text">
                                                حقل مطلوب
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-0 col-md-2"></div>
                </div>

                <div class="row mb-5">
                    <div class="col-sm-0 col-md-2"></div>
                    <div class="col-sm-12 col-md-8">
                        <div class="card">
                            <div class="card-body p-0">
                                <form>
                                    <div class="container mt-5">
                                        <div class="row  p-4" dir="rtl">
                                            <div class="col-12 d-flex">
                                                <p class="fw-bolder ms-auto">الجنسية والاقامة </p>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">الجنسية
                                                </p>
                                                <select class="form-control input_background" name="countries" id="gender">
                                                  <option value="other" selected>اختر...</option>
                                                  <option>اختر البلد...</option>
                                                    <option>أوكرانيا</option>
                                                    <option>اخر</option>
                                                    <option>الاردن</option>
                                                    <option>الامارات</option>
                                                    <option>البحرين</option>
                                                    <option>الجزائر</option>
                                                    <option>السعودية</option>
                                                    <option>السودان</option>
                                                    <option>الصومال</option>
                                                    <option>العراق</option>
                                                    <option>الكويت</option>
                                                    <option>المغرب</option>
                                                    <option>اليمن</option>
                                                    <option>ایران</option>
                                                    <option>باكستان</option>
                                                    <option>تونس</option>
                                                    <option>جزر القمر</option>
                                                    <option>جيبوتي</option>
                                                    <option>دول غربية</option>
                                                    <option>سوريا</option>
                                                    <option>عُمان</option>
                                                    <option>فلسطين</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">بلد الإقامة
                                                </p>
                                                <select class="form-control input_background" name="countries" id="gender">
                                                <option selected>اختر...</option>
                                                <option>الأردن</option>
                                                <option>مصر</option>
                                                <option>الجزائر</option>
                                                <option>السودان</option>
                                                <option>العراق</option>
                                                <option>المغرب</option>
                                                <option>اليمن</option>
                                                <option>سوريا</option>
                                                <option>الصومال</option>
                                                <option>تونس</option>
                                                <option>ليبيا</option>
                                                <option>فلسطين</option>
                                                      <option>عمان</option>
                                                      <option>الكويت</option>
                                                      <option>موريتانيا</option>
                                                      <option>قطر</option>
                                                      <option>البحرين</option>
                                                      <option>جيبوتي</option>
                                                      <option>لبنان</option>
                                                      <option>جزر القمر</option>
                                                      <option>السعودية</option>
                                                      <option>أوكرانيا</option>
                                                      <option>الامارات</option>
                                                      <option>ایران</option>
                                                      <option>باكستان</option>
                                                      <option>بريطاني</option>
                                                      <option>إيران</option>
                                                


                                              </select>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">المدينة
                                                </p>
                                                <select class="form-control input_background" name="gender" id="gender">
                                                <option value="other">اختر...</option>
                                                <option>أوبوك</option>
  <option>الدوادمي</option>
  <option>المجمعة</option>
  <option>تاجورة</option>
  <option>جازان</option>
  <option>صامطة</option>
  <option>صبيا</option>
  <option>علايلي دادا</option>
  <option>الحسيمة</option>
  <option>الفنيدق</option>
  <option>اليوسفية</option>
  <option>جرادة</option>
  <option>جرسيف</option>
  <option>سلا الجديدة</option>
  <option>سوق السبت أولاد النمة</option>
  <option>شفشاون</option>
  <option>صفرو</option>
  <option>انتر</option>
  <option>طانطان</option>
  <option>محافظة الأحمدي</option>
  <option>محافظة الجهراء</option>
  <option>نبجرير</option>
  <option>ورزازات</option>
  <option>وزان</option>
  <option>أسفي</option>
  <option>أبها</option>
  <option>أبو نصير</option>
  <option>أبوظبي</option>
  <option>أجد عبر بارزونن</option>
  <option>أجد عبرين</option>
  <option>أحد رفيدة</option>
  <option>أحمد آباد</option>
  <option>آرتا</option>
  <option>أرخبيل سقطرى</option>
  <option>أسوان</option>
  <option>أسيوط</option>
  <option>التر</option>
  <option>أكادير</option>
  <option>أم القيوين</option>
  <option>أم درمان</option>
  <option>أوديسا</option>
  <option>إربد</option>
  <option>إيفانو فرانكيفسك</option>
  <option>اب ابين</option>
  <option>احد المسارحة</option>
  <option>اسکان</option>
  <option>اسكندريه</option>
  <option>اسلام آباد</option>
  <option>اصفهان</option>
  <option>اكادير</option>
  <option>الأبيض</option>
  <option>الأقصر</option>
  <option>الإسماعيلية الاحساء</option>
  <option>الاسماعيلية</option>
  <option>الباحة</option>
  <option>الباشا</option>
  <option>البحر الأحمر</option>
  <option>البحيرة</option>
  <option>البدع الشرقية</option>
  <option>البريمي</option>
  <option>البيضاء</option>
  <option>الجبيل</option>
                                              </select>
                                            </div>
                                            <div id="passwordHelpBlock" class="text-danger form-text">
                                                حقل مطلوب
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-0 col-md-2"></div>
                </div>

                <div class="row mb-5">
                    <div class="col-sm-0 col-md-2"></div>
                    <div class="col-sm-12 col-md-8">
                        <div class="card">
                            <div class="card-body p-0">
                                <form>
                                    <div class="container mt-5">
                                        <div class="row  p-4" dir="rtl">
                                            <div class="col-12 d-flex">
                                                <p class="fw-bolder ms-auto">الحالة الإجتماعية</p>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <!-- <i data-acorn-icon="user"></i> -->
                                                <p class="fw-bolder d-flex justify-content-start">نوع الزواج</p>
                                                <select class="form-control input_background" name="gender" id="gender">
                                                  <option value="other">حدد الجنس </option>
                                                 
                                                </select> </div>

                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">الحالة الاجتماعية</p>
                                                <select class="form-control input_background" name="gender" id="gender">
                                                  <option value="other">حدد الجنس </option>

                                                </select> </div>

                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">العمر</p>
                                                <input type="text" name="email" id="email" class="form-control input_background">
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">عدد الاطفال</p>
                                                <input type="email" name="email" id="email" class="form-control input_background">
                                            </div>

                                            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">الجنس
                                                </p>
                                                <select class="form-control input_background" name="gender" id="gender">
                                          <option value="other">اختر...</option>
                                          <option value="male">ذكر</option>
                                          <option value="female">انثى</option>
                                        </select>
                                            </div> -->
                                            <div id="passwordHelpBlock" class="text-danger form-text">
                                                حقل مطلوب
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-0 col-md-2"></div>
                </div>


                <div class="row mb-5">
                    <div class="col-sm-0 col-md-2"></div>
                    <div class="col-sm-12 col-md-8">
                        <div class="card">
                            <div class="card-body p-0">
                                <form>
                                    <div class="container mt-5">
                                        <div class="row  p-4" dir="rtl">
                                            <div class="col-12 d-flex">
                                                <p class="fw-bolder ms-auto">معلومات شخصية</p>
                                            </div>


                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">رقم الهاتف</p>
                                                <input type="text" name="email" id="email" class="form-control input_background">
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">الوزن (كجم)</p>
                                                <input type="email" name="email" id="email" class="form-control input_background">
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">الطول (سم)</p>
                                                <input type="text" name="email" id="email" class="form-control input_background">
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">لون البشرة</p>
                                                <input type="email" name="email" id="email" class="form-control input_background">
                                            </div>

                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">بنية الجسم</p>
                                                <input type="text" name="email" id="email" class="form-control input_background">
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">العمل</p>
                                                <input type="email" name="email" id="email" class="form-control input_background">
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">الموهل العلمي</p>
                                                <input type="text" name="email" id="email" class="form-control input_background">
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">الحاله المادية</p>
                                                <input type="email" name="email" id="email" class="form-control input_background">
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">الحالة الصحية</p>
                                                <input type="text" name="email" id="email" class="form-control input_background">
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">الالتزام الديني</p>
                                                <input type="email" name="email" id="email" class="form-control input_background">
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">عن نفسي</p>
                                                <textarea class="form-control input_background" name="" id="" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fw-bolder d-flex justify-content-start">مواصفات الشريك الذي أرغب الإرتباط به</p>
                                                <textarea class="form-control input_background" name="" id="" cols="30" rows="10"></textarea>
                                            </div>

                                            <div id="passwordHelpBlock" class="text-danger form-text">
                                                حقل مطلوب
                                            </div>
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-0 col-md-2"></div>
                </div>

                <div class="row mb-5">
                    <div class="col-sm-0 col-md-2"></div>
                    <div class="col-sm-12 col-md-8">
                        <div class="card">
                            <div class="card-body p-0">
                                <form>
                                    <div class="container">
                                        <div class=" p-4 fw-bold fs-6" dir="rtl">
                                            شروط وقوانين موقع تَوَافِيْق لجمع راسين بالحلال<br> <input type="checkbox" id="myCheckbox" name="myCheckbox"> لقد قرأت <span class="text-primary"> شروط الموقع و قوانينه </span> وأوافق على كل ما جاء فيه
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-0 col-md-2"></div>
                </div>

                <div class="row" dir="rtl">
                    <div class="col-sm-0 col-md-2"></div>
                    <div class="col-8 mt-4">
                        <button class="btn btn-xl btn-primary" type="button">تسجيل</button>
                    </div>
                    <div class="col-sm-0 col-md-2"></div>

                </div>
            </section>
        </main>
        <!-- Search Modal End -->

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