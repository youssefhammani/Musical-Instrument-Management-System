<?php

    include 'database.php';

    if(isset($_POST['signup']))        saveUser();
    if(isset($_POST['login']))         userLogin();

    
    function saveUser()
    {
        global $link;

        $first_name    = $_POST['first-name'];
        $last_name     = $_POST['last-name'];
        $user_email    = $_POST['user-email'];
        $user_password = $_POST['user-password'];

        $query = "INSERT INTO `users` VALUES (null, '$first_name', '$last_name', '$user_email', '$user_password')";

        if (mysqli_query($link, $query)) 
        {
            header('location: login.php');
        }
        else
        {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        }
    }

    function userLogin()
    {
        global $link;

        $user_login_email     = $_POST['login-via-email'];
        $user_login_password  = $_POST['login-with-passowrd'];

        $query = "SELECT * FROM `users` WHERE Email_address = '$user_login_email' AND Password = '$user_login_password'";
        
        
        $result = mysqli_query($link, $query);
        $rows   = mysqli_fetch_assoc($result);

        $_SESSION['first_name'] = $rows['First_name'];
        $_SESSION['last_name']  = $rows['Last_name'];
        $_SESSION['email']       = $rows['Email_address'];

        if(mysqli_num_rows($result) != 0){
            header('location: home.php');
        }
        else{
            $_SESSION['message'] = "The email address you entered is not associated with an account";
            header('location: login.php');
        }
    }
?>