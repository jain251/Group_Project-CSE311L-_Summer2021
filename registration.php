<?php
    include("connection.php");


    if(isset($_POST['submit'])){
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];

        if ($firstname == ''){
            echo "<script>alert('Please enter your first name!')</script>";
            echo "<script>window.open('./signup.php','_self')</script>";
            exit();
        }
        if ($lastname == ''){
            echo "<script>alert('Please enter your last name!')</script>";
            echo "<script>window.open('./signup.php','_self')</script>";
            exit();
        }
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
        if ($dob == ''){
            echo "<script>alert('Please enter your date of birth!')</script>";
            echo "<script>window.open('./signup.php','_self')</script>";
            exit();
        }
        if ($gender == ''){
            echo "<script>alert('Please choose your gender!')</script>";
            echo "<script>window.open('./signup.php','_self')</script>";
            exit();
        }

        $check_email_query = "SELECT * FROM Users WHERE user_email = '$email'";
        $run_query = mysqli_query($conn, $check_email_query);

        if(mysqli_num_rows($run_query) > 0){
            echo "<script>alert('The email $email is already registered!')</script>";
            echo "<script>window.open('./signup.php','_self')</script>";
            exit();
        }

        $insert_user = "INSERT INTO Users (user_fname, user_lname, user_email, user_password, user_dob, user_gender) 
        VALUE ('$firstname', '$lastname', '$email', '$password', '$dob', '$gender')";

        mysqli_query($conn, $insert_user);
    }else{
        echo "<script>window.open('./signup.php','_self')</script>";
    }

?>