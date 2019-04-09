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
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      
      <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="../js/demo.js"></script>

    <body>
        
        <div id="particles">
        <ul id="myDIV">
            
            
            <li><h1>Welcome <?php
                include('../dbcon.php');
                $id = $_SESSION['uid'];
//                echo $id;
                $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
                $run = mysqli_query($con,$sql);
                $data = mysqli_fetch_assoc($run);
                
                echo "Divesh";

                
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
            </div>
      </body>
    </head>
</html>