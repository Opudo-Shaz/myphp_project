
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

  <div class="container">

    <div class="row">
      <div class="col-md-4 offset-md-4 mt-5">
        <h2>Login</h2>
        <form action="registration_handler.php" method="POST">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
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
   <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>