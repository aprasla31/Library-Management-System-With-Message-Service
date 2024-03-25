<?php
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
section
    {
      margin-top: -20px;
    }
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.img
{
    height: 730px;
    margin-top: 0px;
    background-image: url("images/ms.jpg");
}

</style>
</head>
<body>
<section>
<div class="img">
<div class="box2">
  <h1 style="text-align: center; font-size: 35px; color: white;"> &nbspEmail Portal </h1><br><br>
 
  <form action="send_mail.php" method="post">
    <label >Email-Id</label>
    <input type="email"name="email" placeholder="Student Email id.." style="color: black;"><br><br><br>

    <label>Subject</label>
    <input type="text" name="subject" placeholder="Your Subject.." style="color: black;">

    <label >Message</label>
    <textarea name="message" style="height:200px; color: black;"></textarea>

    <button type="send"name="Send" style="color:black;">Send</button>

  </form>
</div>
</div>
</section>
</body>
</html>
