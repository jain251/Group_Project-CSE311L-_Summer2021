<!DOCTYPE html>
<html lang="en">

<head>
    <title>Oberon-Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div style="background-color: gold;">
        <table id="headerdash" style="margin-left: 700px;">
            <thead>
                <tr>
                    <th style="padding-top: 0px; font-size: 20px; padding-right: 500px;">Welcome to Oberon! The New Cryptocurrency Exchange</th>
                </tr>
            </thead>
        </table>
    </div>

    <div id="header1" style="background-color: black; width: auto;">
        <table id="header1dash">
            <thead>
                <tr>
                    <th style="padding-right: 100px;"><img src="images/oberonlogo.png" alt="Oberon.png" width="350" </th>
                    <th><a id="anchordash" href="index.php">Home</a></th>
                    <th><a id="anchordash" href="AboutUs.php">About Us</a></th>
                    <th><a id="anchordash" href="">Services</a></th>
                    <th><a id="anchordash" href="Guide.php">How it Works</a></th>
                    <th><a id="anchordash" href="Contact.php">Contact Us</a></th>
                </tr>
            </thead>
        </table>
    </div>

    <div style="background-image: url(images/login.jpeg); background-size: cover; width: 1905px; height: 1080px;">
        <div class="loginbox">
            <img src="images/avatar.png" class="avatar" width="100">
            <h1>Login</h1>
            <form action="./signin.php" method="POST">
                <p>Username/Email</p>
                <input type="text" name="email" placeholder="Enter Username/Email">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="login" value="Login">
                <a href="#">Forgot your Password?</a>
                <br>
                <a href="signup.php">Create an account</a>
            </form>
        </div>
    </div>
</body>
</html>

