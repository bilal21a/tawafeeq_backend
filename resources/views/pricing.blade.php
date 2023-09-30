@extends('layouts.app')
@section('content')
    <div id="root">
        <main>
            <div class="row">
                <div class="col-sm-0 col-md-2"></div>
                <div class="col-sm-12 col-md-8">
                    <div class="container">
                        <div class="page-title-container">
                            <div id="accordionCards">
                                <div class="mb-n2">
                                    <div class="card d-flex mb-2">
                                        <div id="collapseOneCards" class="collapse show" data-bs-parent="#accordionCards">
                                            <div class="card-body accordion-content pt-3">
                                                <p class="fs-4"><strong>اشتراك الباقات</strong></p>
                                                <p>
                                                    اشترك في باقات موقع حظوظ
                                                    و تميَّز عن الآخرين عن طريق توثيق حسابك لكي يظهر على حسابك الشخصي علامة
                                                    توثيق ويكون حسابك موثق من ادارة الموقع ما يعكس هذا على الاعضاء بثقة بك
                                                    وبتعامل معك بجدية في الزواج وأنت كذلك تعرف مع من تتعامل حتى توفر على
                                                    نفسك الوقت والجهد والمال في نتائج البحث بالاضافة لتواصل بلا حدود عن طريق
                                                    برنامج المحادثات الفورية لتعثر على شريك حياتك المثالي ولك الاختيار
                                                    الباقة المناسبة لك في الوقت والخدمات المتوفرة فيها
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5 mt-5">
                                <div class="row ">
                                    @foreach ($plans as $plan)
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card h-100 hover-scale-up plan_card">
                                                <div class="card-body pb-0">
                                                    <div class="d-flex flex-column align-items-center ">
                                                        <div class="display-4">{{ $plan->name }}</div>
                                                    </div>
                                                    <div class="d-flex flex-column align-items-center ">
                                                        <div class="display-4">
                                                            <h4 class="text-primary fw-bold">
                                                                {{ $plan->amount }} درهم
                                                            </h4>
                                                        </div>
                                                        <div class="d-flex flex-column align-items-center ">
                                                            <p class="line_height fw-light pt-7"
                                                                style="text-align: center;">
                                                                توثيق الحساب<br> إمكانية التواصل مع المشتركين<br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer pt-0 border-0">
                                                    <div class="d-flex justify-content-center">
                                                        <a href="#" id="{{ $plan->id }}"
                                                            class="payment_btn btn btn-icon btn-icon-start btn-foreground hover-outline stretched-link">
                                                            <span>اشترك الان</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-0 col-md-2"></div>
            </div>
        </main>
    </div>
@endsection
@section('js')
    <script>
        const stripe = Stripe("{{ env('STRIPE_PUBLIC_KEY') }}");

        const checkoutButton = document.getElementById('checkout-button');
        const csrfToken = "{{ csrf_token() }}";
        $(document).ready(function() {
            $('.payment_btn').on('click', function(event) {
                $('.plan_card').addClass('overlay-spinner')
                event.preventDefault();
                console.log(this.id);
                fetch('/create-checkout-session/' + this.id, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                    })
                    .then(response => response.json())
                    .then(session => {
                        $('.plan_card').removeClass('overlay-spinner')
                        return stripe.redirectToCheckout({
                            sessionId: session.id
                        });
                    })
                    .then(result => {
                        $('.plan_card').removeClass('overlay-spinner')
                        if (result.error) {
                            alert(result.error.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script>
@endsection
