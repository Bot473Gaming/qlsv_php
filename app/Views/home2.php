<div class="col">
  <div class="mb-4 d-flex">
    <select name="action" class="form-select action-select" style="width: 128px;margin: 0 16px;">
      <option selected value="null">-- Action --</option>
      <option value="DEL">Delete</option>
    </select>
    <button type="button" class="btn btn-primary disabled btn-apply" data-bs-toggle="modal" data-bs-target="#HandlerModal">
      Apply
    </button>
  </div>
  <div class="content border rounded p-4">

    <table class="table" id="data-table">
      <thead>
        <tr>
          <th scope="col" style="width:5%">
            <div>
              <input class="all-check-input" type="checkbox" value="" id="">
              <label class="form-check-label" for="flexCheckDefault">
                <!-- All -->
              </label>
            </div>
          </th>
          <th hidden></th>
          <th scope="col" style="width:5%">#</th>
          <th scope="col" style="width:10%">St Code</th>
          <th scope="col" style="width:22%">First Name</th>
          <th scope="col" style="width:12%">Last Name</th>
          <th scope="col" style="width:12%">Birthdate</th>
          <th scope="col" style="width:10%">Gender</th>
          <th scope="col" style="width:10%">Cs Code</th>
          <th scope="col" style="width:7%"></th>
          <th scope="col" style="width:7%"></th>
        </tr>
      </thead>
      <tbody>
        <?php

        if ($students) {
          $i = 1;
          foreach ($students as $student) {
            echo "<tr>";
            echo "<td>";
            echo "<div class=\"form-check\"><input class=\"form-check-input\" name=\"studentIds[]\" type=\"checkbox\" id=\"\"></div>";
            echo "</td>";
            echo "<td hidden class=\"nb\">$student->_id</td>";
            echo "<td>$i</td>";
            echo "<td class=\"dt studentCode\">$student->studentCode</td>";
            echo "<td class=\"dt\">$student->firstName</td>";
            echo "<td class=\"dt\">$student->lastName</td>";
            echo "<td class=\"dt\">$student->birthdate</td>";
            echo "<td class=\"dt\">$student->gender</td>";
            echo "<td class=\"dt\">$student->courseCode</td>";
            echo "<td><button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#editStudent\"onclick=\"editBtn('$student->_id')\" notSameTarget=\"ed\">Edit</button></td>";
            // echo "<td class=\"mr-16\"><button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteStudent\"onclick=\"addId('$student->_id')\">Delete</button></td>";
            echo "<td><a class=\"btn btn-primary\" href=\"detail/$student->_id\" role=\"button\">Detail</a></td>";
            echo "</tr>";
            $i++;
          }
        } else {
          echo "<td colspan=\"6\">No students yet. Add new student now!</td>";
        }
        view('home', ['students' => $students]); ?>
      </tbody>
    </table>

    <button type="button" class="btn btn-primary createStudent" data-bs-toggle="modal" data-bs-target="#createStudent" notSameTarget="cr">
      Add New Student
    </button>

  </div>
</div>

<?= view('forms/formHandler') ?>
<?= view('forms/formCreate') ?>
<?= view('forms/formEdit') ?>

<script>
        document.addEventListener('DOMContentLoaded', () => {
            $(document).ready(function() {
                $('#data-table').DataTable({
                    "columns": [{
                            "orderable": false,
                            "searchable": false
                        },
                        {
                            "orderable": false,
                            "searchable": false,
                        },
                        null,
                        null,
                        null,
                        null,
                        null,
                        null,
                        null,
                        {
                            "orderable": false,
                            "searchable": false
                        },
                        {
                            "orderable": false,
                            "searchable": false
                        },
                    ],
                    order: [
                        [2, 'asc']
                    ],
                    "pageLength": 10,
                });
            })
        });
    </script>
    <?= view('scripts/main'); ?>