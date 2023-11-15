<?php
    
    include  'templates/common/header.php';
    include  'templates/common/navbar.php';
    render_header('Student CRUD project');
    //var_dump($_SESSION);

    
?>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Details
                        <?php  
                        if (isset($_SESSION['user_role']) && $_SESSION['user_role']=== 'admin'): ?>
                                   <a href="student_create.php" class="btn btn-primary float-end">Add User</a>
                                   <?php endif; ?>
                            
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>

                                     <?php 
                                     if (isset($_SESSION['user_role']) && $_SESSION['user_role']=== 'admin'): ?>
                                   <th>Action</th>
                                   <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $query = "SELECT * FROM user";
                                    $query_run = mysqli_query($connection_obj, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $user)
                                        {
                                            ?>
                               
                                            <tr>
                                                <td><?= $user['id']; ?></td>
                                                <td><?= $user['name']; ?></td>
                                                <td><?= $user['email']; ?></td>
                                                <td><?= $user['phone']; ?></td>
                                                <td><?= $user['course']; ?></td>

                                                <?php 
                                                    if (isset($_SESSION['user_role']) && $_SESSION['user_role']=== 'admin'): ?>
                                                        <td>
                                                            <a href="student_view.php?id=<?= $user['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                            <a href="student_edit.php?id=<?= $user['id']; ?>" class="btn btn-success btn-sm">Edit</a>

                                                    
                                                            <a href="#" name="delete_user" onclick="del(<?=$user['id'];?>)" class="btn btn-danger btn-sm">Delete</a>
                                                        </td>
                                                <?php endif; ?>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

    include  'templates/common/footer.php';
?>

  

