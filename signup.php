<!DOCTYPE html>
<html lang="en">

<head>
  <title>Oberon-Signup</title>
  <link rel="stylesheet" href="signup.css">
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

  <div style="background-image: url(images/signup.jpeg); background-size: cover; width: 1905px; height: 1080px;">
    <div class="signupbox">
      <h1>Sign Up</h1>
      <form action="./registration.php" method="POST">
        <input id="name" type="text" name="fname" placeholder="First Name">
        <input id="name" type="text" name="lname" placeholder="Last Name">
        <input id="x" type="text" name="email" placeholder="Email">
        <input id="x" type="password" name="password" placeholder="Password">
        <input id="x" type="password" name="confirmpass" placeholder="Confirm Password">
        <input id="x" type="date" name="dob" placeholder="Date of Birth">
        <input id="y" type="radio" name="gender" value="Male">
        <label for="male">Male</label>
        <input id="y" type="radio" name="gender" value="Female">
        <label for="female">Female</label>
        <input id="y" type="radio" name="gender" value="Other">
        <label for="other">Other</label>
        <input id="x" type="submit" name="submit" value="Sign Up">

      </form>
    </div>
  </div>
  </div>
  </div>
</body>

</html>