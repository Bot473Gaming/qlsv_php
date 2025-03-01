<div class="border rounded p-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col" style="width:10%">#</th>
                <th scope="col" style="width:25%">Subject</th>
                <th scope="col" style="width:65%"></th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1?>
            <?php if ($subjects):?>
            <?php foreach($subjects as $subject):?>
            <tr>
                <td hidden class="nb"><?= esc($subject->_id)?></td>
                <th><?= esc($i++)?></th>
                <td class="name"><?= esc(ucfirst($subject->name))?></td>
                <td style="text-align: right;"><button type="button" class="btn btn-primary btnEdits" data-bs-toggle="modal" data-bs-target="#editSubject" notSameTarget="eds">Edit</button> <button type="button" class="btn btn-danger btnDelete" data-bs-toggle="modal" data-bs-target="#deleteStudent">Delete</button></td>
            </tr>
            <?php endforeach ?>
            <?php else:?>
            <td col="3">No subjects yet. Create new a subject now</td>
            <?php endif?>

        </tbody>
    </table>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createSubject" notSameTarget="crs">Create</button>
</div>
<?= view('forms/formDelete', ['action' => 'delete']) ?>
<?= view('forms/formEditSubject')?>
<?= view('forms/formCreateSubject') ?>
<?= view('scripts/subject'); ?>
<?= view('scripts/main'); ?>