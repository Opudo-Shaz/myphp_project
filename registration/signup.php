<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$connection_obj = mysqli_connect("localhost", "root", "aris0007", "test");

if(!$connection_obj) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
} else {
    //echo 'Connected successfully';
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
     
        <h2>Registration Form</h2>
        <form method="POST" action="registration_handler.php">
            <div class="mb-3">
            <?php include('message.php'); ?>
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
 <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
