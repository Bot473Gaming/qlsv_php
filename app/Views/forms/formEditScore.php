<div class="modal fade" id="editScore" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Score</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo "$_SERVER[REQUEST_URI]/update"; ?>">
                    <?php foreach($subjects as $subject):?>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><?= esc(ucfirst($subject->name))?></span>
                        <input type="number" name="<?= esc($subject->name)?>" class="form-control score-form" placeholder="(Grade)" aria-describedby="basic-addon1" min="0" max="10" required>
                    </div>
                    <?php endforeach?>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>