@extends('layouts.app')
@section('css')
@endsection
@section('content')
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
                                                <div id="collapseOneCards" class="collapse show"
                                                    data-bs-parent="#accordionCards">
                                                    <div class="card-body accordion-content pt-3">
                                                        <p class="fs-4"><strong>من نحن</strong></p>
                                                        <p class="mt-md-5">
                                                            حظوظ هو موقع يخدم الشباب الراغبين بالتعرف بقصد الزواج ، بشكل
                                                            يتماشى مع التطورات , مع مراعات الجوانب الدينية و اخلاق مجتمعنا
                                                            العربي المحافظة
                                                            و بشكل يضمن السرية و الخصوصية للجميع
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                                <div>
                                                    <img class="pt-3" width="77%"
                                                        src="{{ asset('assets/img/hudhood_baner.png') }}" alt="">
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
        </div>
    </main>
    <main class="main_class2 padding_bottom_0 padding_top_0">
        <div id="root">
            <div class="row p-4 m-0">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12">
                    <div class="container">
                        <div class="page-title-container">
                            <div id="accordionCards">
                                <div class="mb-n2">
                                    <div class="d-flex mb-2">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12">
                                                <img class="pt-3" width="100%"
                                                    src="{{ asset('assets/img/couple.png') }}" alt="">
                                            </div>
                                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                                <div id="collapseOneCards" class="collapse show"
                                                    data-bs-parent="#accordionCards">
                                                    <div class="card-body accordion-content ps-0 pt-3">
                                                        <p class="fs-4"><strong>هدفنا</strong></p>
                                                        <p>
                                                            حل مشكلة جذرية الشباب الراغبين بالتعارف بقصد الزواج و ايجاد و
                                                            انتشار هذا الموقع في الامارات و باقي دول الخليج بشكل خاص و باقي
                                                            دول العالم بشكل عام
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
                <div class="col-md-2"></div>
            </div>
        </div>
    </main>
    <main class="main_class padding_bottom_0 padding_top_0">
        <div id="root">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12">
                    <div class="container">
                        <div class="page-title-container">
                            <div id="accordionCards">
                                <div class="mb-n2">
                                    <div class="d-flex mb-2">
                                        <div class="row p-4">
                                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                                <div id="collapseOneCards" class="collapse show"
                                                    data-bs-parent="#accordionCards">
                                                    <div class="card-body accordion-content pt-3">
                                                        <p class="fs-4"><strong> رؤيتنا</strong></p>
                                                        <p>
                                                            ان نكون حققنا اهدافنا بالشراكة معكم و بوعيكم و مقترحاتكم و
                                                            توصياتكم
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                                <div>
                                                    <img class="pt-3" width="77%"
                                                        src="{{ asset('assets/img/target.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </main>
    <main class="main_class2 padding_top_0">
        <div id="root">
            <div class="row m-0">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12">
                    <div class="container">
                        <div class="page-title-container">
                            <div id="accordionCards">
                                <div class="mb-n2">
                                    <div class="d-flex mb-2">
                                        <div class="row p-4">
                                            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12">
                                                <img class="pt-3" width="100%"
                                                    src="{{ asset('assets/img/couple2.png') }}" alt="">
                                            </div>
                                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                                <div id="collapseOneCards" class="collapse show"
                                                    data-bs-parent="#accordionCards">
                                                    <div class="card-body accordion-content ps-0 pt-3">
                                                        <p class="fs-4"><strong> مميزاتنا</strong></p>
                                                        <p>
                                                            لقد بذلنا جهود لايجاد هذه المنصة لكي تجدوا خدمة قيمة بشكل سهل و
                                                            بسيط و بطريقة تحمي خصوصياتكم و تستطيعون من خلالها التواصل بشكل
                                                            آمن مع الاطراف الاخرى الذين تم توثيق حساباتهم عبر الاشارة
                                                            الواضحة امام اسمه
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
                <div class="col-md-2"></div>
            </div>
        </div>
    </main>
    <main class="main_class padding_bottom_0 padding_top_0">
        <div id="root">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-12">
                    <div class="container">
                        <div class="page-title-container">
                            <div id="accordionCards">
                                <div class="mb-n2">
                                    <div class="d-flex mb-2">
                                        <div class="row p-4">
                                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                                <div id="collapseOneCards" class="collapse show"
                                                    data-bs-parent="#accordionCards">
                                                    <div class="card-body accordion-content pt-3">
                                                        <p class="fs-4"><strong>أهمية توثيق الحساب
                                                            </strong></p>
                                                        <p>
                                                            ان توثيق حسابك في منصة حظوظ
                                                            من خلال اعطاءك المعلومات الصحيحة عنك يعطي المشتركين الثقة في
                                                            التعامل معك واخذ معلوماتك بعين الاعتبار من الصحة
                                                            لذلك بادر بتوثيق حسابك
                                                            لتوفير الوقت والجهد للتسهيل على شريك حياتك باتخاذ قرارات اولية
                                                            ايجابية
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                                <div>
                                                    <img class="pt-3" width="77%"
                                                        src="{{ asset('assets/img/verified.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </main>
@endsection
