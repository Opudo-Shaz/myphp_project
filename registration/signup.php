<?php

    include  '../templates/common/header.php';
    render_header('Student CRUD :: Register')
?>


    <div class="container">
      <h2>Registration Form</h2>
        <form method="POST" action="registration_handler.php">
            <?php include('../message.php'); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
             <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <input type="text" class="form-control" name="course" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>

            </div>
  
            <button type="submit" class="btn btn-primary" name="register">Register</button>
            <p>Already have an account?<a href="login.php">Login</a></p>
        </form>
    </div>
        
 <?php

    include  '../templates/common/footer.php';
?>
