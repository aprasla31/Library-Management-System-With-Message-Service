<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>
     Library Management System
  </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
  nav
  {
    float: right;
    word-spacing: 30px;
    padding: 20px;
  }
  nav li 
  {
    display: inline-block;
    line-height: 80px;
  }
</style>
</head>


<body>
  <div class="wrapper">
    <header>
    <div class="logo">
      <img src="images/9.png">
      <h1 style="color: white;">LIBRARY MANAGEMENT SYSTEM</h1>
    </div>

    <?php
    if(isset($_SESSION['login_user']))
    {
      ?>
        <nav>
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
            
          </ul>
        </nav>
      <?php
    }
    else
    {
      ?>
            <nav>
              <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="login.php">LOGIN</a></li>
              </ul>
            </nav>
    <?php
    }
      
    ?>

      
    </header>
    <section>
    <div class="sec_img">
      <br><br><br>
      <div class="box">
        <br><br><br><br>
        <h1 style="text-align: center; font-size: 35px;">Welcome to the Library</h1><br><br>
        <h1 style="text-align: center;font-size: 25px;">Opens at: 09:00hrs </h1><br>
        <h1 style="text-align: center;font-size: 25px;">Closes at: 15:00hrs </h1><br>
      </div>
    </div>

    </section>
    <footer>
      <p style="color:white;  text-align: center; ">
        <br><br>
        FOR ANY QUERIES <br>
        Contact: +91 913********
      </p>
    </footer>
    

  </div>

</body>
</html>