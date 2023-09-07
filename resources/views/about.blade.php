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
                                                        <p>
                                                            توافيق هي فكرة نوعية بامتياز، تتماشى مع المستقبل أننا ندرك أن
                                                            الهدف المنشود ليس أمرً سهلًا ولكننا وبنفس القوة نؤمن أن الاطلاع
                                                            بالفكر أو العمل للمجتمع سبيل للارتقاء النجاح بالنسبة لموقع
                                                            توافيق أكثر من مجرد إحصاءات، فهو يتولد من حماسنا وشغفنا بالتميز
                                                            من
                                                            هنا جاءت البداية، وقررنا اختيار هذا الطريق لتقديم المساعدة
                                                            لأنفسنا ومجتمعنا وإنشاء ثقة على أُسس وقواعد وذلك ايمانا منا
                                                            بتذليل جميع العقبات أمام المشتركين بتوفير كل ماتحتاجة في مكان
                                                            واحد
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                                <div>
                                                    <img class="pt-3" width="77%"
                                                        src="{{ asset('assets/img/tawfeeq.png') }}" alt="">
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
                <div class="col-2"></div>
                <div class="col-8">
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
                                                            موقع زواج خاص للمسلمين في جميع دول العالم , يسعى للمساهمة في
                                                            مساعدة الجنسين على الزواج الشرعي بطريقة اسلامية , بتوفير جميع
                                                            الأدوات الازمة لتسجيل الطلبات والبحث وتسهيل عملية إيجاد الطرف
                                                            الآخر بالمواصفات المطلوبة لذلك يسعى موقع توافيق الى تسهيل
                                                            الخدمات
                                                            للمشتركين وذلك من خلال توفر جميع الخدمات الخاص بالاسرة والزواج
                                                            كوجودد خدمة الاستشارة الاسرية والقانوني وخدمة البحث عن الزوج او
                                                            الزوجة وخدمة الخطابة في موقع واحد وذلك بتوفير على المشتركين
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
                                                <div id="collapseOneCards" class="collapse show"
                                                    data-bs-parent="#accordionCards">
                                                    <div class="card-body accordion-content pt-3">
                                                        <p class="fs-4"><strong> رؤيتنا</strong></p>
                                                        <p>
                                                            ان نكون الرواد في تقديــم خدماتنــا بجــودة عاليــة وبطريقــة
                                                            مختلفــة تميزنــا عــن مواقع الزواج الاخر والعمـل علـى أن تكـون
                                                            لنـا بصمتنـا وهويتنـا المميـزة فـي كافـة أعمالنـا وذلــك مــن
                                                            خــلال تقديم الخدمة المناسبة في الوقت المناسب الذي يحتاجة
                                                            المشتركين
                                                            لتلبية احتيجاتهم
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
                <div class="col-2"></div>
            </div>
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
                                                <img class="pt-3" width="100%"
                                                    src="{{ asset('assets/img/couple2.png') }}" alt="">
                                            </div>
                                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                                <div id="collapseOneCards" class="collapse show"
                                                    data-bs-parent="#accordionCards">
                                                    <div class="card-body accordion-content ps-0 pt-3">
                                                        <p class="fs-4"><strong> مميزاتنا</strong></p>
                                                        <p>
                                                            عملنا على ان نكون الافضل بان الله تعالى وقمنا بتجهيز برنامج في
                                                            كل عضو بهدا الموقع وهو تقييم الطرف الاخر من خلال تواصلك معه
                                                            بالنجوم الخمس حيث الخمس نجوم تعني ممتاز جدا والنجمه الواحده سيئ
                                                            جدا بدلك التقييم الشخص بمعاملته واخلاقة مع الغير يبني سيرتة
                                                            الداتية
                                                            والاعضاء الجدد يعرفوا الصالح من الطالح ويكون كل عضو مسؤول عن
                                                            نفسه ولا يلوم احد ان تعامل مع سيئ التقييم
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
                                                <div id="collapseOneCards" class="collapse show"
                                                    data-bs-parent="#accordionCards">
                                                    <div class="card-body accordion-content pt-3">
                                                        <p class="fs-4"><strong>أهمية توثيق الحساب
                                                            </strong></p>
                                                        <p>
                                                            ان توثيق حسابك من خلال اعطاءك المعلومات الصحيح عنك يعطي
                                                            المشتركين الثقة في التعامل معك واخذ معلوماتك بعين الاعتبار من
                                                            الصحة وكذالك مزودين الخدمات ليكون من السهل للطرف الاخر سهولة
                                                            الوصول لديك دون تنقيب وهي اسهل طريقة في وجود شريك حياتك المناسب
                                                            لذلك يسعى
                                                            موقع توافيق الى تسهيل الخدمات للمشتركين وذلك من خلال توفر جميع
                                                            الخدمات الخاص بالاسرة والزواج كوجودد خدمة الاستشارة الاسرية
                                                            والقانوني وخدمة البحث عن الزوج او الزوجة وخدمة الخطابة في موقع
                                                            واحد
                                                            وذلك بتوفير على المشتركين الوقت والجهد.

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
                <div class="col-2"></div>
            </div>
        </div>
    </main>
@endsection
