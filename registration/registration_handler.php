<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../dbcon.php';

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
    $query = "INSERT INTO user (name, email, phone,course, password) VALUES ('$name', '$email', '$phone', '$course', '$password')";
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

    if (isset($_SESSION['user_role'])) {
        $_SESSION['message'] = "User already logged in!";
        header("Location: ../index.php");
           
    }
    else{

        
        $email = $_POST['email'];
        $password = $_POST['password'];


        $query = "SELECT * FROM user WHERE email = '$email'AND password = '$password'";
        $result = $connection_obj->query($query);

        if ($result->num_rows > 0) 
        {
        	$_SESSION['message'] = "Welcome to My Php Site";

            $result_row = $result->fetch_array(MYSQLI_ASSOC);
            $_SESSION['user_role'] = $result_row['user_role'];
            $_SESSION['user_name'] = $result_row['name'];
            var_dump($result_row);
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
}

  
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_form']))

{
    $name = mysqli_real_escape_string($connection_obj, $_POST['name']);
    $email = mysqli_real_escape_string($connection_obj, $_POST['email']);
    $message = mysqli_real_escape_string($connection_obj, $_POST['message']);
    
    
    

    $query = "SELECT * FROM messages WHERE email = '$email' OR name = '$name'";
    $result = mysqli_query($connection_obj, $query);


    if(mysqli_num_rows($result) > 0) {
        $_SESSION['message'] = "Response can only be submitted once!";
        header("Location: contactUs.php");
        exit(0); 
    }

    $query = "INSERT INTO messages (name,email,message) VALUES ('$name','$email','$message')";

    $query_run = mysqli_query($connection_obj, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Response submitted Successfully";
        header("Location: contactUs.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Ooops! An error occured";
        header("Location: contactUs.php");
        exit(0);
    }
    
}

    

?>





