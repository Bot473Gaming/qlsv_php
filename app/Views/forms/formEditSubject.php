<div class="modal fade" id="editSubject" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo "$_SERVER[REQUEST_URI]/update"; ?>" notSame="eds:name">
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control form-edit" placeholder="Name Subject" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="invalid-feedback">
                        Student code is not same.
                    </div>
                    <input type="hidden" name="sd-id" class="sd-id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>