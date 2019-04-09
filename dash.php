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
            
            <li><a class="navbar active" href="home.php">
              Home</a></li>
            <li><a class="navbar" href="donate.php">Donate</a></li>
            <li><a class="navbar" href="request.php">Find Donar</a></li>
            <li><a class="navbar" href="availabilty.php">Availability</a></li>
        </ul>
        
        <script>
            
            // Add active class to the current button (highlight it)
            var header = document.getElementById("myDIV");
            var btns = header.getElementsByClassName("navbar");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("active");
              current[0].className = current[0].className.replace(" active", "");
              this.className += " active";
              });
            }
            
        </script>
        
        
        
        
        
        
     
   </body>
    </head>
     
</html>