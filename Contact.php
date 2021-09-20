<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact</title>
  <style>
    .wrapper {
      text-align: center;
    }

    .button {
      background-color: gold;
    }
  </style>
</head>

<body>

  <div style="background-color: rgb(34, 15, 15); padding-bottom: 5px; color: floralwhite;">
    <h1 style="text-align: center; font-weight: 700;font-size: 55px;
    padding-top: 25px;">Our contact information:</h1>

    <br>
    <p style="font-size: 25px;text-align: center; margin-top: -25px;">
      Phone number: <a style="color: white;" href="tel:+8801904711459">+8801904711459</a> <br>
      Email: <a style="color: white;" href="mailto:razzad.raz@gmail.com">razzad.raz@gmail.com</a><br>
      Website: <a style="color: white;" href="https://github.com/razzadhossain">Github/RazzadHossain</a><br>
    </p>
  </div>

  <div style="text-align: center; background-color:  #f2f2f2 ;padding-top: 25px;">
    <h3 style="font-size: 35px;">Any queries?</h3>


    <form action="action_page.php">

      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
      <br>


      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      <br>


      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
      <br>


      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      <br>

      <div class="wrapper">
        <button style="margin: 25px; padding-bottom: 5px;" class="button">Biew Block Chain</button>
      </div>
      </div>

    </form>
  </div>
 

</body>

</html>