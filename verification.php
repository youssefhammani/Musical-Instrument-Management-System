<?php

    include 'database.php';

    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();

    if(isset($_POST['signup']))        saveUser();
    if(isset($_POST['login']))         userLogin();

    
    function checkInput($first_name, $last_name, $user_email, $user_password, $confirm_user_password, $check_email)
    {
        if (empty($user_email) || empty($user_password) || empty($first_name) || empty($confirm_user_password || empty($last_name)))
        {
            $_SESSION['message'] = 'All Inputs Are Required';
            $_SESSION['icon'] = 'fa-solid fa-xmark';
            header('location: signup.php');
        }
        else if (!preg_match("/^[a-zA-Z-' ]*$/",$first_name) || !preg_match("/^[a-zA-Z-' ]*$/",$last_name))
        {
            $_SESSION['message'] = 'Only Letters And White Space Allowed In The UserName';
            $_SESSION['icon'] = 'fa-solid fa-xmark';
            header('location: signup.php');
        }
        else if (!filter_var($user_email, FILTER_VALIDATE_EMAIL))
        {
            $_SESSION['message'] = 'Please Entre A Valid Email';
            $_SESSION['icon'] = 'fa-solid fa-xmark';
            header('location: signup.php');
        }
        else if(mysqli_num_rows($check_email) != 0)
        {
                $_SESSION['message'] = 'This Email Is Already Token';
                $_SESSION['icon'] = 'fa-solid fa-xmark';
                header('location: signup.php');

        }
        else if($user_password != $confirm_user_password)
        {
            $_SESSION['message'] = 'The Passwords Are Not Identical';
            $_SESSION['icon'] = 'fa-solid fa-xmark';
            header('location: signup.php');
        }
        else
        {
            return true;
        }
    }

    
    function saveUser()
    {
        global $link;

        $first_name            = $_POST['first-name'];
        $last_name             = $_POST['last-name'];
        $user_email            = $_POST['user-email'];
        $user_password         = $_POST['user-password'];
        $confirm_user_password = $_POST['confirm-user-password'];

        $sql         = "SELECT * FROM `users` WHERE Email_address = '$user_email'";

        if ($check_email = mysqli_query($link, $sql))
        {
            if (checkInput($first_name, $last_name, $user_email, $user_password, $confirm_user_password, $check_email) == true)
            {
                $query = "INSERT INTO `users` VALUES (null, '$first_name', '$last_name', '$user_email', '$user_password')";
        
                if (mysqli_query($link, $query)) 
                {
                    header('location: index.php?Create-an-account=Account successfully created');
                }
                else
                {
                    echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
                }
            }
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
        $_SESSION['email']      = $rows['Email_address'];

        if(mysqli_num_rows($result) != 0){
            header('location: home.php');
        }
        else{
            header('location: index.php?User-input-is-wrong=The information you entered is not associated with any account');
        }
    }
?>