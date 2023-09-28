<input type="hidden" name="" id="dev_id_notification" value="{{ auth()->id() }}">

<div class="settings-buttons-container">
    <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal"
        data-bs-target="#niches" id="nichesButton">
        <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip"
            data-bs-placement="left" title="" data-bs-original-title="إشعارات">
            <i class="d-inline-block icon-20 bi-bell"></i>
        </span>
    </button>
</div>
<div class="modal fade modal-right scroll-out-negative" id="niches" data-bs-backdrop="true" tabindex="-1"
    role="dialog" aria-labelledby="niches" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable full" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">إشعارات</h5>
                <span data-bs-dismiss="modal" aria-label="Close" class="cursor-pointer">X</span>
            </div>

            <div class="modal-body">
                <div class="scroll-track-visible">
                    <div class="all_noti">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
