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
                                <button class="nav-link {{ $chat_id!=null?'':'active' }}" data-bs-toggle="tab" data-bs-target="#first" role="tab"
                                    type="button" aria-selected="true">الملف الشخصي</button>
                            </li>
                            <li class="nav-item chat_nav_item" role="presentation">
                                <button class="nav-link {{ $chat_id!=null?'active':'' }}" data-bs-toggle="tab" data-bs-target="#second" role="tab"
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
                            <div class="tab-pane fade {{ $chat_id!=null?'':'active show' }}" id="first" role="tabpanel">
                                @include('common.profile.profile')
                            </div>
                            <div class="tab-pane fade {{ $chat_id!=null?'active show':'' }}" id="second" role="tabpanel">
                                @include('common.profile.chat')
                                @include('common.profile.chat_error')
                            </div>
                            <div class="tab-pane fade" id="third" role="tabpanel">
                                @include('common.profile.identity')
                            </div>
                            <div class="tab-pane fade" id="fourth" role="tabpanel">
                                @include('common.profile.payments')
                            </div>
                            <div class="tab-pane fade" id="fifth" role="tabpanel">
                                @include('common.profile.visited')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')


    @include('profile.js.chat_mainjs')
@endsection
