<?php
    session_start();
    include '../dbcon.php';
?>
<?php  
if (isset($_POST['register'])) {
    
    $name = mysqli_real_escape_string($connection_obj,$_POST['name']);
    $email = mysqli_real_escape_string ($connection_obj,$_POST['email']);
    $phone = mysqli_real_escape_string($connection_obj,$_POST['phone']);
    $course= mysqli_real_escape_string($connection_obj,$_POST['course']);
    $password = mysqli_real_escape_string($connection_obj,$_POST['password']);


    $query = "SELECT * FROM user WHERE email = '$email' OR phone = '$phone'";
$result = mysqli_query($connection_obj, $query);


if(mysqli_num_rows($result) > 0) {
    $_SESSION['message'] = "Email or phone number is already registered. Please choose different credentials.";
    header("Location: signup.php");
    exit(0); 
}
    $query = "INSERT INTO user (name, email, phone,course, password) VALUES ('$name', '$email', '$phone', '$password', '$course')";
    if ($connection_obj->query($query) === TRUE) 
    {
      $_SESSION['message'] = "Registration successfull!";
        header("Location: login.php");
        exit(0);
    } 
  else{
  	echo "An error occured!";
  }

}


if (isset($_POST['login'])) 
{

    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_role= $_POST['user_role'];


    $query = "SELECT * FROM user WHERE email = '$email'AND password = '$password'";
    $result = $connection_obj->query($query);
    if (isset($array['user_role'])) {
    $user_role = $array['user_role'];
     } 
else {
   echo "User role not specified!";
}

    if ($result->num_rows == 1) 
    {
    	$_SESSION['message'] = "Welcome" . $user_role;
        header("Location: ../index.php");
        exit(0);
    	}
    else 
    {
       	$_SESSION['message'] = "Invalid username or password!";
        header("Location: login.php");
        exit(0); 
    }
}

    

?>





