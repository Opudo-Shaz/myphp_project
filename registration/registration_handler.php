<?php

    include  '../templates/common/header.php';
?>
<?php  
if (isset($_POST['register'])) {
    
    $name = mysqli_real_escape_string($connection_obj,$_POST['name']);
    $email = mysqli_real_escape_string ($connection_obj,$_POST['email']);
    $phone = mysqli_real_escape_string($connection_obj,$_POST['phone']);
    $password = mysqli_real_escape_string($connection_obj,$_POST['password']);


    $query = "SELECT * FROM user WHERE email = '$email' OR phone = '$phone'";
$result = mysqli_query($connection_obj, $query);


if(mysqli_num_rows($result) > 0) {
    $_SESSION['message'] = "Email or phone number is already registered. Please choose different credentials.";
    header("Location: signup.php");
    exit(0); 
}
    $query = "INSERT INTO user (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
    if ($connection_obj->query($query) === TRUE) {
      $_SESSION['message'] = "Registration successfull";
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


    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = $connection_obj->query($query);

    if ($result->num_rows == 1) 
    {
    		$_SESSION['message'] = "Welcome" .$username;
        header("Location: index.php");
        exit(0);
    	}
    else 
    {
        echo "Invalid email or password!";
    }

    
}
?>





