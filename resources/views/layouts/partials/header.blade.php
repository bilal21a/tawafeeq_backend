<div id="nav" class="nav-container d-flex">
    <div class="nav-content d-flex">
        <!-- Logo Start -->
        <div class="logo position-relative">
            <a href="{{ route('home') }}">
                <!-- Logo can be added directly -->
                <img src="{{ asset('assets/img/hudhood logo.svg') }}" alt="logo" />

                <!-- Or added via css to provide different ones for different color themes --> </a>
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
            @php
                $user_data = Auth::user();
            @endphp
            @if ($user_data != null)
                <div class="d-flex flex-column">
                    <div class="d-flex justify-content-center user position-relative ps-md-2 ps-0">
                        <img class="profile me-3 img_left_right" id="goto_profile" alt="profile" src="{{ $user_data->img_url }}" />
                        <div class="name fs-6">{{ $user_data->name }}</div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('profile',['page'=>'chat']) }}" class="position-relative">
                            <i class="white" data-acorn-icon="message" data-acorn-size="15"></i>
                            <span class="badge rounded-pill bg-warning position-absolute top-0 start-100 translate-middle chat_new" style="display: none">
                              جديد
                            </span>
                        </a>
                        &nbsp;&nbsp;
                        <a href="{{ route('members',['page'=>'starred']) }}">
                            <i class="white" data-acorn-icon="star" data-acorn-size="15"></i>
                        </a>
                        &nbsp;&nbsp;
                        <a href="{{ route('logout') }}">
                            <i class="white" data-acorn-icon="logout" data-acorn-size="15"></i>
                        </a>
                    </div>
                </div>
            @else
                <div class="d-flex flex-row">
                    <div class="d-flex pb-3 ps-2">
                        <div class="name fs-6"><a href="{{ route('login') }}" type="button"
                                class="btn btn-light mb-1 mt-4">تسجيل الدخول</a></div>
                    </div>
                    <div class="d-flex pb-3 ps-0">
                        <div class="name fs-6">
                            <a href="{{ route('register') }}" type="button"
                                class="btn btn-outline-light mb-1 mt-4">تسجيل</a>
                        </div>
                    </div>

                </div>
            @endif
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
        <ul class="list-unstyled list-inline text-center menu-icons mt-1">
            <li class="list-inline-item">
                <a href="#" id="colorButton">
                    <span class="fs-6 light_text" style="padding-left: 15px;"> الوضع النهاري</span>
                    <i data-acorn-icon="moon" class="light" data-acorn-size="18"></i>
                    <i data-acorn-icon="sun" class="dark" data-acorn-size="18"></i>
                </a>
            </li>

        </ul>
        <!-- Icons Menu End -->

        <!-- Menu Start -->
        <div class="menu-container flex-grow-1">
            <ul id="menu" class="menu">
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">
                        <span>الصفحة الرئيسية</span>
                    </a>
                </li>
                @if (auth()->user())
                <li>
                    <a href="{{ route('profile') }}" class="{{ request()->is('profile*') ? 'active' : '' }}">
                        <span>الملف الشخصي</span>
                    </a>
                </li>
                @endif
                <li>
                    <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">
                        <span class="label">من نحن</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('plans') }}" class="{{ request()->is('plans') ? 'active' : '' }}">
                        <span class="label">الباقات</span>
                    </a>

                </li>
                <li>
                    <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">
                        <span class="label">تواصل معنا</span>
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
            <a href="#" id="mobileMenuButton" class="menu-button hamburger">
                <i data-acorn-icon="menu"></i>
            </a>
            <!-- Menu Button End -->
        </div>
        <!-- Mobile Buttons End -->
    </div>
    <div class="nav-shadow"></div>
</div>
<div class="notification_area">
</div>
