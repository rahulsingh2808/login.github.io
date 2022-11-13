<?php
    $myemail="rahulsingh123@gmail.com";
    $mypassword ="RAHUL@123";
    if(isset($_POST['login']))
    {
        $email =$_POST['email'];
        $password = $_POST['password'];
        if($email == $myemail and $password== $mypassword)
        {
            if(isset($_POST['remember']))
            {
                setcookie('email', $email,time()+24+60*60*7);
                setcookie('password', $password,time()+60*60*7);
                session_start();
                $_SESSION['email'] = $email;
                header ("Location: welcome.php");
            }
        }
        else
        {
            echo"Email or password is Invalid!";
        }
    }
    else 
    {
        header ("Location: loginpage.php");
    }
?>

