<?php
    include("connection.php");


    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == ''){
            echo "<script>alert('Please enter a valid email!')</script>";
            echo "<script>window.open('./signup.php','_self')</script>";
            exit();
        }
        if ($password == ''){
            echo "<script>alert('Please enter your password!')</script>";
            echo "<script>window.open('./signup.php','_self')</script>";
            exit();
        }

        $check_user = "SELECT * FROM Users WHERE user_email = '$email' AND user_password = '$password'";
        $query = mysqli_query($conn, $check_user);

        $check_admin = "SELECT * FROM Admin WHERE admin_email = '$email' AND admin_password = '$password'";
        $admin_query = mysqli_query($conn, $check_admin);

        if(mysqli_num_rows($admin_query)){
            echo "<script>window.open('./admin.php','_self')</script>";
        }else{
            echo "<script>alert('Your Email/Password is incorrect!')</script>";
            echo "<script>window.open('./Login.php', '_self')</script>";
        }


        if(mysqli_num_rows($query)){
            echo "<script>window.open('./welcome.php','_self')</script>";
        }else{
            echo "<script>alert('Your Email/Password is incorrect!')</script>";
            echo "<script>window.open('./Login.php', '_self')</script>";
        }

    }else{
        echo "<script>window.open('./Login.php','_self')</script>";
    }

?>