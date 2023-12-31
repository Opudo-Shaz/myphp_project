<?php
    session_start();
    include 'dbcon.php';


if(isset($_POST['delete_user']))
{
    $user_id = mysqli_real_escape_string($connection_obj, $_POST['delete_user']);
    $response = [];

    $query = "SELECT * FROM user WHERE id = '$user_id'";
    $result = mysqli_query($connection_obj, $query);


    if(mysqli_num_rows($result) > 0) {
        $query = "DELETE FROM user WHERE id='$user_id' ";
        $query_run = mysqli_query($connection_obj, $query);

        if($query_run)
        {
            $response['status'] = 'OK';
            $response['desc'] = 'User deleted Successfully';
            // $_SESSION['message'] = "User Deleted Successfully";
            // header("Location: index.php");
            // exit(0);
        }
    }
    
    else
    {
        $response['status'] = 'ERR';
        $response['desc'] = 'User not found';
        
    }
    echo json_encode($response);
}

if(isset($_POST['update_user']))
{
    $user_id = mysqli_real_escape_string($connection_obj, $_POST['user_id']);

    $name = mysqli_real_escape_string($connection_obj, $_POST['name']);
    $email = mysqli_real_escape_string($connection_obj, $_POST['email']);
    $phone = mysqli_real_escape_string($connection_obj, $_POST['phone']);
    $password = mysqli_real_escape_string($connection_obj, $_POST['password']);
    $user_role = mysqli_real_escape_string($connection_obj, $_POST['user_role']);
    $course = mysqli_real_escape_string($connection_obj, $_POST['course']);
    

    $query = "UPDATE user SET name='$name', email='$email', phone='$phone', password='$password',course='$course',user_role='$user_role' WHERE id='$user_id' ";
    $query_run = mysqli_query($connection_obj, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_user']))
{
    $name = mysqli_real_escape_string($connection_obj, $_POST['name']);
    $email = mysqli_real_escape_string($connection_obj, $_POST['email']);
    $phone = mysqli_real_escape_string($connection_obj, $_POST['phone']);
    $course = mysqli_real_escape_string($connection_obj, $_POST['course']);
    $password = mysqli_real_escape_string($connection_obj, $_POST['password']);
    $user_role = mysqli_real_escape_string($connection_obj, $_POST['user_role']);
   
    
    

    $query = "SELECT * FROM user WHERE email = '$email' OR phone = '$phone'";
    $result = mysqli_query($connection_obj, $query);


    if(mysqli_num_rows($result) > 0) {
        $_SESSION['message'] = "Email or phone number is already registered. Please choose different credentials.";
        header("Location: student_create.php");
        exit(0); 
    }

    $query = "INSERT INTO user (name,email,phone,course,password,user_role) VALUES ('$name','$email','$phone','$course','$password','user_role')";

    $query_run = mysqli_query($connection_obj, $query);
    if($query_run)
    {
        $_SESSION['message'] = "User Created Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Created";
        header("Location: student_create.php");
        exit(0);
    }
    
}

?>