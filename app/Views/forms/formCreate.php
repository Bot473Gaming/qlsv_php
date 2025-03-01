<div class="modal fade" id="createStudent" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" name="createStudent" notSame="cr:studentCode">
                    <div class="input-group">
                        <input type="text" class="form-control" name="studentCode" placeholder="Student Code" required>
                        <input type="text" class="form-control" name="firstName" placeholder="First Name" required>
                        <input type="text" class="form-control" name="lastName" placeholder="Last Name" required>
                    </div>
                    <div class="invalid-feedback">
                        Student code is not same.
                    </div>
                    <div class="input-group">
                        <input type="date" class="form-control" name="birthdate" required>
                        <select class="form-control" name="gender" required>
                            <option selected>-- Gender --</option>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Khác">Khác</option>
                        </select>
                        <input type="text" class="form-control" name="courseCode" placeholder="Course Code" required>
                    </div>
                    <input type="hidden" name="_method" value="POST">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>