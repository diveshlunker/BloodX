<html>
    <head>
        <title>Login PopUp</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
          <div class="wrapper">
    <div class="container">
      <br><br>
      <div class="signup"><hr>Sign Up<hr></div>
      
      
        <form action="signup.php" method="post">
            <div class="signup-form" >
              <input type="text" placeholder="Your Username" name="name" class="input" required><br />
              <input type="text" placeholder="Your Email Address" name="email" class="input" required><br />
              <input type="password" placeholder="Create Password" name="password" class="input" required><br />
              <input type="submit" class="btn" name="submit" value="Create account"/><br>
              <h2><a href="login.php" class="alreadyid">Already Have Id? Login Here</a></h2>
            </div>
        </form>
      
      
      
    </div>
  </div>
        
    </body>
</html>

<?php

include('dbcon.php');

if(isset($_POST['submit'])){
    
    
    
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password']; 

    
    $qrysearch = "SELECT * FROM `users` WHERE `email` = '$email' ";
    

    
    $run = mysqli_query($con,$qrysearch);
    
    if(mysqli_num_rows($run)>0){
        ?>
        <script>
            alert('Id already exist! Try Logging In:)');
            window.location.href = "login.php";
            
        </script>
        <?php
        
    }
    else{
        $qry = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";
        
        $runqry = mysqli_query($con,$qry);
        if($runqry == true){
        ?>
            <script>
                alert('Your Id has been successfully created. Login to continue');
                windows.location.href = "login.php";
            </script>
<?php
            
        }
        else{
            echo(mysqli_error($con));
        }
    }
//    header('location:login.php');
}
    

?>