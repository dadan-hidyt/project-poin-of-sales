@props(['id', 'title','size','scrollable'])
<!-- Modal-->
<div class="modal fade" id="{{ $id }}" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div  @class(['modal-dialog', ($size ?? false) ? 'modal-'.$size : '',($scrollable ?? false) ? 'modal-dialog-scrollable' : ''])  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title ?? '' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold"
                    data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
