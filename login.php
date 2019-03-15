<html>
    <head>
        <title>Login PopUp</title>
        <link rel="stylesheet" type="text/css" href="login2.css">
    </head>
    <body>
          <div class="wrapper">
    <div class="container">
      <br><br>
      <div class="signup"><hr>Login<hr></div>
      
      
        <form action="login.php" method="post">
            <div class="signup-form" >
              <input type="text" placeholder="Your Email Address" name="email" class="input" required><br />
              <input type="password" placeholder="Create Password" name="password" class="input" required><br />
              <input type="submit" class="btn" name="submit" value="LOGIN"/><br>
              
            </div>
        </form>
      
      
      
    </div>
  </div>
        
    </body>
</html>



<?php

include('dbcon.php');


?>