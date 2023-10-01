<footer class="footer">
    <div class="row d-flex justify-content-center p-7" style="width: 99% !important;">
        <!-- Large screens: 3 columns, each col-3 -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 line_height_footer">
            <h4 class="white fw-bold mb-6">احصل على المساعدة</h4>
            <div>
                <a class="white fw-bold text_decoration" href="#">
                    الاسئلة الأكثر شيوعا
                </a>
            </div>
            <div>
                <a class="white fw-bold text_decoration font_size" href="{{ route('about') }}">
                    من نحن
                </a>
            </div>
            <div>
                <a class="white fw-bold text_decoration font_size" href="{{ route('plans') }}">
                    الباقات
                </a>
            </div>

            <div>
                <a class="white fw-bold text_decoration font_size" href="{{ route('contact') }}">
                    تواصل معنا </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 line_height_footer">
            <h4 class="white fw-bold mb-6"> أعطنا رأيك</h4>
            <textarea class="form-control blue_background" name="" id="" cols="25" rows="10"
                placeholder=" ما رأيك في موقع هدهدة؟" style="color:#fff;"></textarea>
            <button type="button" class="btn btn-light mb-1 mt-4">أرسل</button>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 line_height_footer">
            <h4 class="white fw-bold mb-6">تواصل معنا</h4>
            <div class="ps-4 pb-7 white">
                <div class="d-flex ">
                    <i data-acorn-icon="phone" class="ms-2" data-acorn-size="17"></i>
                    <a class="white fw-bold text_decoration" href="tel:+971566904982">
                        +971566904982</a>
                </div>
                <div class="d-flex"> <i data-acorn-icon="email" class="ms-2" data-acorn-size="17"></i>
                    <a class="white fw-bold text_decoration" href="mailto:info@hi.com">info@hi.com</a>
                </div>
                <div class="d-flex"> <i data-acorn-icon="pin" class="ms-2" data-acorn-size="17"></i>
                    <p>الامارات - دبي</p>
                </div>

                <div class="pt-3">
                    <a href="http://www.tiktok.com/@hudhoodh1" class="text-white">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.9076 10.2085V15.4921C16.9076 19.0018 14.8183 22.8992 9.65694 22.8992C5.67715 22.8817 2.41211 19.6017 2.41211 15.6219C2.41211 15.5603 2.41294 15.4988 2.41461 15.4322C2.5311 11.5914 5.72292 8.49605 9.56542 8.49605C9.92071 8.49605 10.276 8.52268 10.628 8.5751C11.0681 8.64167 11.3943 9.02026 11.3943 9.46542V12.8952C11.3943 13.1748 11.2645 13.4377 11.0432 13.6083C10.8218 13.7789 10.5348 13.8363 10.2644 13.7656C10.0913 13.7198 9.91239 13.6965 9.73266 13.6965C8.62018 13.6965 7.69409 14.586 7.64916 15.6976L7.64417 15.8341C7.64417 16.8201 8.45543 17.6322 9.44144 17.6322L9.84 17.633C10.821 17.633 11.6281 16.8259 11.6281 15.8441L11.619 15.6219V2.02921C11.619 1.53246 12.0225 1.12891 12.5193 1.12891H15.9116C16.3534 1.12891 16.7304 1.45009 16.8003 1.88609C17.0441 3.40379 17.5067 4.35651 18.2006 4.95227C18.9004 5.55302 19.8057 5.78434 20.83 5.94826C21.2668 6.01815 21.588 6.39508 21.588 6.83691V10.2775C21.588 10.5288 21.4823 10.7693 21.2976 10.939C21.1129 11.1096 20.8649 11.1953 20.6145 11.1745C19.3281 11.0688 18.0742 10.741 16.9076 10.2085ZM15.1702 2.92951H13.4196V15.5903C13.4254 15.6743 13.4287 15.7592 13.4287 15.8441C13.4287 17.8127 11.8087 19.4328 9.84 19.4328C9.77094 19.4328 9.70187 19.4311 9.63281 19.4261C9.56958 19.4303 9.50551 19.432 9.44144 19.432C7.46777 19.432 5.8444 17.8077 5.8444 15.8341C5.8444 15.7575 5.84689 15.6801 5.85022 15.6244C5.9326 13.6008 7.58426 11.9708 9.59371 11.8992V10.2967L9.56542 10.2958C6.68978 10.2958 4.30091 12.6131 4.21354 15.4829C4.21271 15.5287 4.21188 15.5753 4.21188 15.6219C4.21188 18.6174 6.66981 21.0861 9.6611 21.0986C13.5519 21.0986 15.107 18.1397 15.107 15.4921V8.69658C15.107 8.36791 15.2867 8.06504 15.5755 7.90695C15.8642 7.74886 16.2153 7.76134 16.4924 7.93857C17.5 8.58342 18.6192 9.02775 19.7874 9.24908V7.58244C18.7257 7.3478 17.7938 6.97586 17.0283 6.31853C16.2012 5.60794 15.5447 4.56036 15.1702 2.92951Z"
                                fill="white" />
                        </svg>
                    </a>
                    <a href="https://instagram.com/hudhoodh?igshid=NzZlODBkYWE4Ng==">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.34 3.46C15.1027 3.46 14.8707 3.53038 14.6733 3.66224C14.476 3.79409 14.3222 3.98151 14.2313 4.20078C14.1405 4.42005 14.1168 4.66133 14.1631 4.89411C14.2094 5.12689 14.3236 5.34071 14.4915 5.50853C14.6593 5.67635 14.8731 5.79064 15.1059 5.83694C15.3387 5.88324 15.5799 5.85948 15.7992 5.76866C16.0185 5.67783 16.2059 5.52402 16.3378 5.32668C16.4696 5.12935 16.54 4.89734 16.54 4.66C16.54 4.34174 16.4136 4.03652 16.1885 3.81147C15.9635 3.58643 15.6583 3.46 15.34 3.46ZM19.94 5.88C19.9206 5.0503 19.7652 4.2294 19.48 3.45C19.2257 2.78313 18.83 2.17928 18.32 1.68C17.8248 1.16743 17.2196 0.774176 16.55 0.53C15.7727 0.236161 14.9508 0.07721 14.12 0.0599999C13.06 -5.58794e-08 12.72 0 10 0C7.28 0 6.94 -5.58794e-08 5.88 0.0599999C5.04915 0.07721 4.22734 0.236161 3.45 0.53C2.78168 0.776649 2.17693 1.16956 1.68 1.68C1.16743 2.17518 0.774176 2.78044 0.53 3.45C0.236161 4.22734 0.07721 5.04915 0.0599999 5.88C-5.58794e-08 6.94 0 7.28 0 10C0 12.72 -5.58794e-08 13.06 0.0599999 14.12C0.07721 14.9508 0.236161 15.7727 0.53 16.55C0.774176 17.2196 1.16743 17.8248 1.68 18.32C2.17693 18.8304 2.78168 19.2234 3.45 19.47C4.22734 19.7638 5.04915 19.9228 5.88 19.94C6.94 20 7.28 20 10 20C12.72 20 13.06 20 14.12 19.94C14.9508 19.9228 15.7727 19.7638 16.55 19.47C17.2196 19.2258 17.8248 18.8326 18.32 18.32C18.8322 17.8226 19.2283 17.2182 19.48 16.55C19.7652 15.7706 19.9206 14.9497 19.94 14.12C19.94 13.06 20 12.72 20 10C20 7.28 20 6.94 19.94 5.88ZM18.14 14C18.1327 14.6348 18.0178 15.2637 17.8 15.86C17.6403 16.2952 17.3839 16.6884 17.05 17.01C16.7256 17.3405 16.3332 17.5964 15.9 17.76C15.3037 17.9778 14.6748 18.0927 14.04 18.1C13.04 18.15 12.67 18.16 10.04 18.16C7.41 18.16 7.04 18.16 6.04 18.1C5.38089 18.1123 4.72459 18.0109 4.1 17.8C3.68578 17.6281 3.31136 17.3728 3 17.05C2.66809 16.7287 2.41484 16.3352 2.26 15.9C2.01586 15.2952 1.88044 14.6519 1.86 14C1.86 13 1.8 12.63 1.8 10C1.8 7.37 1.8 7 1.86 6C1.86448 5.35106 1.98295 4.70795 2.21 4.1C2.38605 3.67791 2.65626 3.30166 3 3C3.30381 2.65617 3.67929 2.3831 4.1 2.2C4.70955 1.98004 5.352 1.86508 6 1.86C7 1.86 7.37 1.8 10 1.8C12.63 1.8 13 1.8 14 1.86C14.6348 1.86728 15.2637 1.98225 15.86 2.2C16.3144 2.36865 16.7223 2.64285 17.05 3C17.3777 3.30718 17.6338 3.68273 17.8 4.1C18.0223 4.70893 18.1373 5.35178 18.14 6C18.19 7 18.2 7.37 18.2 10C18.2 12.63 18.19 13 18.14 14ZM10 4.87C8.98581 4.87198 7.99496 5.17453 7.15265 5.73942C6.31035 6.30431 5.65438 7.1062 5.26763 8.04375C4.88089 8.98131 4.78072 10.0125 4.97979 11.0069C5.17886 12.0014 5.66824 12.9145 6.38608 13.631C7.10392 14.3474 8.01801 14.835 9.01286 15.0321C10.0077 15.2293 11.0387 15.1271 11.9755 14.7385C12.9123 14.35 13.7129 13.6924 14.2761 12.849C14.8394 12.0056 15.14 11.0142 15.14 10C15.1413 9.3251 15.0092 8.65661 14.7512 8.03296C14.4933 7.40931 14.1146 6.84281 13.6369 6.36605C13.1592 5.88929 12.5919 5.51168 11.9678 5.25493C11.3436 4.99818 10.6749 4.86736 10 4.87ZM10 13.33C9.34139 13.33 8.69757 13.1347 8.14995 12.7688C7.60234 12.4029 7.17552 11.8828 6.92348 11.2743C6.67144 10.6659 6.6055 9.99631 6.73398 9.35035C6.86247 8.70439 7.17963 8.11104 7.64533 7.64533C8.11104 7.17963 8.70439 6.86247 9.35035 6.73398C9.99631 6.6055 10.6659 6.67144 11.2743 6.92348C11.8828 7.17552 12.4029 7.60234 12.7688 8.14995C13.1347 8.69757 13.33 9.34139 13.33 10C13.33 10.4373 13.2439 10.8703 13.0765 11.2743C12.9092 11.6784 12.6639 12.0454 12.3547 12.3547C12.0454 12.6639 11.6784 12.9092 11.2743 13.0765C10.8703 13.2439 10.4373 13.33 10 13.33Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
</footer>
