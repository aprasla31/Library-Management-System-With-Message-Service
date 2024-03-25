<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <style type="text/css">
        .srch
        {
            padding-left: 1200px;
        }
         body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }

        .sidenav {
            height: 100%;
            margin-top: 50px;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #222;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: white;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
            
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .img-circle {
            margin-left: 20px;
        }

        .h:hover {
            color: white;
            width: 300px;
            height: 50px;
            background-color: #00544c;
        }
   

    </style>
</head>
<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div style="color: white; margin-left: 60px; font-size: 20px;">

            <?php
                if(isset($_SESSION['login_user']))

                {   echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user']; 
                }
                ?>
        </div><br><br>

        <div class="h"> <a href="books.php">Books</a> </div>
        <div class="h"> <a href="request.php">Book Request</a></div>
        <div class="h"> <a href="issue_info.php">Issue Information</a></div>
        <div class="h"> <a href="expired.php">Expired List</a></div>

    </div>

    <div id="main">

        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>


        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "300px";
                document.getElementById("main").style.marginLeft = "300px";
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
                document.body.style.backgroundColor = "white";
            }
        </script>

    <!--_____________search bar______________-->
    <div class="srch">
        <form class="navbar-form" method="post"
         name="form1">
         <label for="department">Choose the Department:</label>
         <select name="department">
            <optgroup label="Educational">
                <option>CS</option>
                <option>IT</option>
                <option>BAF</option>
                <option>BMS</option>
                <option>BCOM</option>
                <option>BAMMC</option>
                <option>LLB</option>
                <option>BBI</option>
                <option>MICRO</option>

            </optgroup>
            <optgroup label="Entertainment">
                <option>story telling</option>
                <option>Action</option>
                <option>Comedy</option>
            
            </optgroup>
         </select>
           
            <input class="form-control" type="text" name="search" placeholder="search books.." required="">
            <button style="background-color: aqua;" type="submit" name="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        
        </form>
    </div>
    <!---_______________request book_________ -->
    <div class="srch">
        <form class="navbar-form" method="post" name="form1">

                <input class="form-control" type="text" name="bid" placeholder="search book..." required="">
                <button style="background-color: aqua;" type="submit" name="submit1" class="btn btn-default">
                    REQ
                </button>
        
        </form>
    </div>
    <h2>List Of Books</h2>
    <?php

        if (isset($_POST['submit'])) 
        {
            $q=mysqli_query($db,"SELECT * FROM books where name like '%$_POST[search]%' and department= '$_POST[department]'");
            if(mysqli_num_rows($q)==0)
            {
                echo "Sorry! No book found. Try searching again.";
            }
            else
            {
        echo "<table class='table table-bordered table-hover' >";
            echo "<tr style='background-color: aqua;'>";
                //Table header
                echo "<th>"; echo "ID"; echo "</th>";
                echo "<th>"; echo "Book-Name";  echo "</th>";
                echo "<th>"; echo "Authors Name";  echo "</th>";
                echo "<th>"; echo "Edition";  echo "</th>";
                
                echo "<th>"; echo "Quantity";  echo "</th>";
                echo "<th>"; echo "Department";  echo "</th>";
            echo "</tr>";   

            while($row=mysqli_fetch_assoc($q))
            {
                echo "<tr>";
                echo "<td>"; echo $row['bid']; echo "</td>";
                echo "<td>"; echo $row['name']; echo "</td>";
                echo "<td>"; echo $row['authors']; echo "</td>";
                echo "<td>"; echo $row['edition']; echo "</td>";
                
                echo "<td>"; echo $row['quantity']; echo "</td>";
                echo "<td>"; echo $row['department']; echo "</td>";

                echo "</tr>";
            }
        echo "</table>";
            }
        }
        else
        {
            $res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`bid` ASC;");

        echo "<table class='table table-bordered table-hover' >";
            echo "<tr style='background-color: aqua;'>";
                //Table header
                echo "<th>"; echo "ID"; echo "</th>";
                echo "<th>"; echo "Book-Name";  echo "</th>";
                echo "<th>"; echo "Authors Name";  echo "</th>";
                echo "<th>"; echo "Edition";  echo "</th>";
                
                echo "<th>"; echo "Quantity";  echo "</th>";
                echo "<th>"; echo "Department";  echo "</th>";
            echo "</tr>";   

            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row['bid']; echo "</td>";
                echo "<td>"; echo $row['name']; echo "</td>";
                echo "<td>"; echo $row['authors']; echo "</td>";
                echo "<td>"; echo $row['edition']; echo "</td>";
                
                echo "<td>"; echo $row['quantity']; echo "</td>";
                echo "<td>"; echo $row['department']; echo "</td>";

                echo "</tr>";
            }
        echo "</table>";
        }  


        if (isset($_POST['submit1']))
        {
            if (isset($_SESSION['login_user']))
            {
                mysqli_query($db,"INSERT INTO `issue_book` VALUES('$_SESSION[login_user]','$_POST[bid]','','','');");
                 ?>
                    <script type="text/javascript">
                        window.location="request.php";
                    </script>
                <?php
            }
            else
            {
                ?>
                    <script type="text/javascript">
                        alert("You must login to Request a book");
                    </script>
                <?php
            }
        }

    ?>
</body>
</html>