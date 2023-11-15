<?php

    include  '../templates/common/header.php';
    render_header('Student CRUD :: Login')
?>


  <div class="container">
    <?php include('../message.php'); ?>
    <div class="row">
      <div class="col-md-4 offset-md-4 mt-5">
        <h2>Login</h2>
        <form action="registration_handler.php" method="POST">
          <div class="mb-3">
            <label for="email" class="form-label">Username</label>
            <input type="text" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary" name="login">Login</button>
           <p>Don't have an account?<a href="signup.php">Register</a></p>
        </form>
      </div>
    </div>
  </div>
       
 <?php

    include  '../templates/common/footer.php';
?>