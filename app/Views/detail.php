<div class="border rounded p-4">
    <a class="btn btn-primary" href="/qlsv" role="button">Back</a>
    <div class="heading mt-4">
        <div class="d-flex justify-content-between">
            <h1 class="d-inline">
                <?php if ($student) {
                    echo "$student->firstName $student->lastName ";
                    echo "<p class=\"d-inline h5 text-secondary\">$student->studentCode</p>";
                } else {
                    echo "Student non-existence";
                }
                ?>
            </h1>
            <?php
            $isOk = ($student) ? "" : "disabled";
            echo "<div><button type=\"button\" class=\"btn btn-danger $isOk\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteStudent\">Delete</button></div>"; ?>
        </div>
    </div>
    <hr>
    <div class="content">
        <?php if ($student) : ?>
            <table class="table" style="width: 50%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    <?php foreach($subjects as $subject):?>
                    <tr>
                        <?php 
                            $grade = '';
                            if (array_key_exists($subject->name, $student->scoreStudent)) {
                                $grade = $student->scoreStudent[$subject->name];
                            }
                        ?>
                        <th scope="row"><?= esc($i++)?></th>
                        <td><?= esc(ucfirst($subject->name))?></td>
                        <td class="scoreTb"><?= esc($grade)?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif ?>
        <?php echo "<div><button type=\"button\" class=\"btn btn-primary btn-score $isOk\" data-bs-toggle=\"modal\" data-bs-target=\"#editScore\">Edit Score</button></div>"; ?>
    </div>
</div>
<?= view('forms/formDelete', ['action' => 'delete']) ?>
<?= view('forms/formEditScore', ['subjects', $subjects]) ?>
<?= view('scripts/main'); ?>
<?= view('scripts/detail') ?>