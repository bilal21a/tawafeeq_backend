@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/custom_chat.css') }}" />
@endsection
@section('content')
    <main>
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="card mb-5 main_card">
                    <div class="card-header border-0 pb-0">
                        <ul class="nav nav-tabs nav-tabs-line card-header-tabs responsive-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#first" role="tab"
                                    type="button" aria-selected="true">الملف الشخصي</button>
                            </li>
                            <li class="nav-item chat_nav_item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#second" role="tab"
                                    type="button" aria-selected="false">الرسائل</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#third" role="tab"
                                    type="button" aria-selected="false">تأكيد الهوية</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fourth" role="tab"
                                    type="button" aria-selected="false">
                                    إشتراكاتي
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fifth" role="tab"
                                    type="button" aria-selected="false">من زار ملفي</button>
                            </li>
                            <li class="nav-item dropdown ms-auto pe-0 d-none responsive-tab-dropdown">
                                <button class="btn btn-icon btn-icon-only btn-foreground mt-2" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i data-cs-icon="more-horizontal"></i>
                                </button>
                                <ul class="dropdown-menu mt-2 dropdown-menu-end"></ul>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body ">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="first" role="tabpanel">
                                <div class="d-grid gap-2 d-md-flex justify-content-between">
                                    <div class="d-grid gap-2 d-flex">
                                        <button class="btn btn-primary fs-5" type="button"><i data-acorn-icon="pen"
                                                class="me-2 ms-3" data-acorn-size="17"></i>تعديل</button>
                                        <button class="btn btn-primary fs-5" type="button"><i data-acorn-icon="share"
                                                class="me-2 ms-3" data-acorn-size="17"></i>تعديل</button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-danger mb-1"><i data-acorn-icon="bin"
                                                class="me-2 ms-3" data-acorn-size="17"></i>حذف حسابي</button>
                                    </div>
                                </div>
                                <div class="row justify-content-between">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mt-3">
                                                    <img width="176px" height="176px" class="rounded-circle"
                                                        src="{{ asset('assets/img/homepage_img/man.png') }}" alt=""
                                                        srcset="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 align-self-center">
                                                <ul class="no-bullets">
                                                    <li>خالد<img width="30px" src="verified.png" alt=""
                                                            srcset=""> </li>
                                                    <li>أبوظبي - الامارات</li>
                                                    <li>40 سنة</li>
                                                    <li>
                                                        <div class="star-row">
                                                            <span class="fw-bold"> 2.6</span>
                                                            <i class="golden-star" data-acorn-icon="star"
                                                                data-acorn-size="20"></i>
                                                            <i class="golden-star" data-acorn-icon="star"
                                                                data-acorn-size="20"></i>
                                                            <i class="golden-star" data-acorn-icon="star"
                                                                data-acorn-size="20"></i>
                                                            <i class="golden-star" data-acorn-icon="star"
                                                                data-acorn-size="20"></i>
                                                            <i class="golden-star" data-acorn-icon="star"
                                                                data-acorn-size="20"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="pt-5">
                                            <h4 class="text-primary fs-5 letter_spacing">
                                                مواصفات الزوج الذي أرغب الارتباط به
                                            </h4>
                                            <p>
                                                ابحث عن ارملة او مطلقة من دبي او بوظبي تقدر الحياة الزوجية و تخاف
                                                الله حرة وما يكون فيها عرج و تكون على قدر من الجمال و تكون موظفة.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary fs-5 width_btn mt-md-4" type="button"><i
                                        data-acorn-icon="pen" class="me-2 ms-3" data-acorn-size="17"></i>تعديل</button>
                                <div class="user-info margin_top justify-content-lg-evenly">
                                    <div class="user-info-item  sepcifyed_width">
                                        <span class="user-info-label">الجنسية</span>
                                        <span class="user-info-value">الامارات</span>
                                    </div>
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">نوع الزواج</span>
                                        <span class="user-info-value">الزوجة الاولى</span>
                                    </div>
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">الحالة الإجتماعية</span>
                                        <span class="user-info-value">مطلق</span>
                                    </div>
                                </div>
                                <div class="user-info margin_top justify-content-lg-evenly">
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">الوزن</span>
                                        <span class="user-info-value">73</span>
                                    </div>
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">الطول</span>
                                        <span class="user-info-value"> 170</span>
                                    </div>
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">البشرة</span>
                                        <span class="user-info-value">أبيض</span>
                                    </div>
                                </div>
                                <div class="user-info margin_top justify-content-lg-evenly">
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">بنية الجسم</span>
                                        <span class="user-info-value">متوسط البنية</span>
                                    </div>
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">العمل</span>
                                        <span class="user-info-value">اعمال حرة</span>
                                    </div>
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">المؤهل التعليمي</span>
                                        <span class="user-info-value">دراسة جامعية
                                        </span>
                                    </div>
                                </div>
                                <div class="user-info margin_top justify-content-lg-evenly">
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">الحالة المادية</span>
                                        <span class="user-info-value">متوسط</span>
                                    </div>
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">الحالة الصحية</span>
                                        <span class="user-info-value">ممتاز</span>
                                    </div>
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">الالتزام الديني</span>
                                        <span class="user-info-value">متدين</span>
                                    </div>
                                </div>
                                <div class="user-info margin_top justify-content-lg-evenly">
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">الحالة المادية</span>
                                        <span class="user-info-value">متوسط</span>
                                    </div>
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">الحالة الصحية</span>
                                        <span class="user-info-value">ممتاز</span>
                                    </div>
                                    <div class="user-info-item sepcifyed_width">
                                        <span class="user-info-label">الالتزام الديني</span>
                                        <span class="user-info-value">متدين</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="second" role="tabpanel">
                                <div class="content-chat mt-20">
                                    <div class="content-chat-user">
                                        <div class="head-search-chat">
                                            <h4 class="text-center">Chat Finder</h4>
                                        </div>

                                        <div class="list-search-user-chat mt-20 chat_heads">
                                        </div>
                                    </div>

                                    <div class="content-chat-message-user active">
                                        <div class="head-chat-message-user">
                                            <img src="{{ asset('assets/img/noimg.png') }}" id="active_chat_img"
                                                alt="">
                                            <div class="message-user-profile">
                                                <p class="mt-0 mb-0 text-white"><strong class="active_chat_name"></strong>
                                                </p>
                                                {{-- <small class="text-white">
                                                    <p class="offline  mt-0 mb-0"></p>Offline
                                                </small> --}}
                                            </div>
                                        </div>
                                        <div class="body-chat-message-user messages_container" dir="ltr">

                                        </div>
                                        <div class="footer-chat-message-user">
                                            <div class="message-user-send">
                                                <input type="text" placeholder="Send Message" id="chatInput">
                                            </div>
                                            <input type="hidden" id="internet_conn" value="">
                                            <button type="button" class="chat_send_btn" onclick="ChatSend()">
                                                <i data-acorn-icon="send" class="d-inline-block"></i>
                                            </button>
                                            <button type="button" class="custom_chat_loader chat_loading_btn"
                                                onclick="ChatSend()" style="display: none">
                                                <span class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="third" role="tabpanel">
                                <div class="d-grid gap-2 d-md-flex justify-content-between">
                                    <div class="d-grid gap-2 ">
                                    </div>
                                </div>
                                <div class="row justify-content-between">
                                    <div class="col-md-5 col-sm-12">
                                        <h4 class="fw-bold letter_spacing pe-4">
                                            تأكيد الهوية الشخصية
                                        </h4>
                                        <h4 class="fw-light letter_spacing pe-4"> الاسم كاملاً حسب الهوية الشخصية
                                        </h4>
                                        <form action="">
                                            <input type="text" name="topic" id="topic"
                                                class="form-control input_background"
                                                placeholder="الاسم كاملاً حسب الهوية الشخصية...">
                                        </form>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="pt-5">
                                            <label class="width_100 ">
                                                <input class="file-input" accept="image/jpeg, image/png" multiple
                                                    type="file">
                                                <div class="file-input-label w-md-75 w-sm-100">
                                                    <img class="height_input_img w-100 h-100"
                                                        src="{{ asset('assets/img/image.png') }}" alt="image placeholder">
                                                    <p>اسحب الملف هنا</p>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary fs-5 width_btn mt-4" type="button">
                                    حفظ
                                </button>
                            </div>
                            <div class="tab-pane fade" id="fourth" role="tabpanel">
                                <table class="">
                                    <tr>
                                        <th>الحالة </th>
                                        <th>طريقة الدفع </th>
                                        <th>نوع الإشتراك </th>
                                        <th>الرقم</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="2" class="text_align">لست مشترك بأي باقة
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="2" class="text_align">+ الإشتراك بباقة جديدة</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="fifth" role="tabpanel">
                                <h5 class="card-title text_align line_height fw-bold">إجمالي عدد زيارات ملفك25
                                </h5>
                                <div class="text_align">
                                    <button class="btn btn-primary fs-5 mt-4 " type="button">
                                        حفظ
                                    </button><button class="btn btn-primary fs-5 mt-4 me-3" type="button">
                                        حفظ
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-database.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    @include('chat.js.chat_mainjs')

@endsection
