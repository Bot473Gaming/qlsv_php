<div class="modal fade" id="createSubject" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo "$_SERVER[REQUEST_URI]/create"?>" notSame="crs:name">
                        <input type="text" class="form-control" name="name" placeholder="Name Subject" required>
                    <div class="invalid-feedback">
                        Subject is not same.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>