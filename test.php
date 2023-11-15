<?php

    include  'templates/common/header.php';
     include  'templates/common/navbar.php';
    render_header('Student CRUD :: Contact Form')
?>

  <div class="container">
    <h1>Contact Us</h1>
    <form action="registration_handler.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" rows="3" required></textarea>
      </div>
      <button type="submit" name="submit_form" class="btn btn-primary">Submit</button>
    </form>
  </div>
  
 <?php

    include  '../templates/common/footer.php';
?>