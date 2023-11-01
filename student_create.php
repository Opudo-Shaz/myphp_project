<?php

    include  'templates/common/header.php';
    render_header('Student CRUD :: User add')
?>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add User
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>User Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>User Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>User Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>User Course</label>
                                <input type="text" name="course" class="form-control">
                            </div>
                                      <div class="mb-3">
                            <label for="role" class="form-label">User Role</label>
                            <select class="form-control" name="user_role" required>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                            <div class="mb-3">
                                <button type="submit" name="save_user" class="btn btn-primary">Save User</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php

    include  'templates/common/footer.php';
?>
  
