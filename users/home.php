<?php

session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else{
    header('location: ../login.php');
}

?>

<html>
  <head>
      <link rel="stylesheet" type="text/css" href="style.css">

    <body>
        
        
        <ul id="myDIV">
            
            
            <li><h1>Welcome <?php
                include('../dbcon.php');
                $id = $_GET['sid'];
//                
//                $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
//                $run = mysqli_query($con,$sql);
//                $data = mysqli_fetch_assoc($run);
                
                echo $id;

                
                ?></h1></li>
            <li><hr></li>
            
            <li><a class="navbar active" href="home.php">
              Home</a></li>
            <li><a class="navbar" href="donate.php">Donate</a></li>
            <li><a class="navbar" href="request.php">Find Donar</a></li>
            <li><a class="navbar" href="availability.php">Availability</a></li>
            <li><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr></li>
            <li><a class="navbar" href="logout.php">Logout</a></li>
        </ul>
      </body>
    </head>
</html>