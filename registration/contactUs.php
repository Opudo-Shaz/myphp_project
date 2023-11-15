<?php
    include  '../templates/common/header.php';
     include  '../templates/common/navbar.php';
    render_header('Student CRUD :: Contact Form')
?>

  <form action="registration_handler.php" method="POST">
   <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" required>
   </div>
   <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
   </div>
   <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
   </div>
   <button type="submit" name="submit_form" class="btn btn-primary">Submit</button>
</form>

  <?php  

    include  '../templates/common/footer.php';
?>
