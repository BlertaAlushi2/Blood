<div class="modal" tabindex="-1" role="dialog" id="deleteModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure? You want to delete this item.</p>
                @include('layouts.alert_message')
            </div>
            <div class="modal-footer">
                <form method="POST" action="" class="modalForm">
                    @csrf
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                    <button class="btn btn-danger delete" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
