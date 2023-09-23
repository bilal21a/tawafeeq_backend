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
