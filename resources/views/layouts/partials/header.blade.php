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
            <button class="btn btn-empty language-button dropdown-toggle d-none" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">EN</button>
            <div class="dropdown-menu d-none">
                <a href="#" class="dropdown-item">DE</a>
                <a href="#" class="dropdown-item active">EN</a>
                <a href="#" class="dropdown-item">ES</a>
            </div>
        </div>
        <!-- Language Switch End -->

        <!-- User Menu Start -->
        <div class="user-container d-flex ms-md-7 ms-0 flex-md-row-reverse">
            <div class="d-flex user position-relative ps-md-7 ps-0" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="profile" alt="profile" src="{{ asset('assets/img/homepage_img/man.png') }}" />
                <ul class="text-decoration-none d-md-flex ps-0 pe-1 flex-column" style="list-style-type: none;">
                    <li>
                    </li>
                    <li class="ps-3 mb-2">
                        <div class="name fs-6">خالد.</div>
                    </li>
                    <div class="d-flex flex-md-row-reverse me-3">
                        <li class="ps-3">
                            <i class="white" data-acorn-icon="star" data-acorn-size="15"></i>
                        </li>
                        <li class="ps-3">
                            <i class="white" data-acorn-icon="bell" data-acorn-size="15"></i>
                        </li>
                        <li class="ps-3">
                            <i class="white" data-acorn-icon="message" data-acorn-size="15"></i>
                        </li>
                        <a href="{{ route('logout') }}">
                        <li class="ps-3">
                                <i class="white" data-acorn-icon="logout" data-acorn-size="15"></i>
                            </li>
                        </a>
                    </div>
                </ul>

            </div>
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


            <li class="list-inline-item">
                <a href="#" id="colorButton">
                    <span class="fs-6" style="padding-left: 15px;"> الوضع النهاري</span>
                    <i data-acorn-icon="moon" class="light" data-acorn-size="18"></i>
                    <i data-acorn-icon="sun" class="dark" data-acorn-size="18"></i>
                </a>
            </li>

        </ul>
        <!-- Icons Menu End -->

        <!-- Menu Start -->
        <div class="menu-container flex-grow-1">
            <ul id="menu" class="menu">
                <li class="">
                    <a href="{{ route('tawafeeq') }}">
                        <span>الصفحة الرئيسية</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}">
                        <span class="label">من نحن</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('plans') }}">
                        <span class="label">الباقات</span>
                    </a>

                </li>
                <li class="mega">
                    <a href="{{ route('contact') }}">
                        <span class="label">تواصل معنا</span>
                    </a>
                </li>
                <li class="mega">
                    <a href="{{ route('login') }}">
                        <span class="label">تسجيل الدخول </span>
                    </a>
                </li>
                <li class="mega">
                    <a href="{{ route('register') }}">
                        <span class="label"> تسجيل</span>
                    </a>
                </li>
                <li class="mega">
                    <a href="{{ route('profile') }}">
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
