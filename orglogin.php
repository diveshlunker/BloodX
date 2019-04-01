<html>
    <head>
        <title>Login PopUp</title>
        <link rel="stylesheet" type="text/css" href="css2/login.css">
    </head>
    <body>
          <div class="wrapper">
    <div class="container">
      <br><br>
      <div class="signup"><hr>Organizations Sign Up<hr></div>
      
      
        <form action="orglogin.php" method="post">
            <div class="signup-form" >
              <input type="text" placeholder="Your Username" name="name" class="input" required><br />
              <input type="text" placeholder="Phone Number" name="number" class="input" required><br />
              <input type="text" placeholder="Organization Address" name="address" class="input" required><br />
                <input type="text" placeholder="City" name="city" class="input" required><br />
              <input type="text" placeholder="Your Email Address" name="email" class="input" required><br />
              <input type="password" placeholder="Create Password" name="password" class="input" required><br />
               
              <input type="submit" class="btn" name="submit" value="Create account"/><br>
              <h2><a href="login.php" class="alreadyid">Already Have Id? Login Here</a></h2><br>
              
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
    $address = $_POST['address'];
    $number = $_POST['number'];
    $city = $_POST['city'];


    
    $qrysearch = "SELECT * FROM `organization` WHERE `email` = '$email' ";
    

    
    $run = mysqli_query($con,$qrysearch);
    
    if(mysqli_num_rows($run)>0){
        ?>
        <script>
            alert('Id already exist! Try Logging In:)');
            window.location.href = "orglogin.php";
            
        </script>
        <?php
        
    }
    else{
        $qry = "INSERT INTO `organization`(`name`, `email`, `password`,`city`,`address`,`number`) VALUES ('$name','$email','$pass','$city','$address','$number')";
        
        $runqry = mysqli_query($con,$qry);
        if($runqry == true){
        ?>
            <script>
                alert('Your Id has been successfully created. Login to continue');
                windows.location.href = "http://localhost/osp/orglogin.php";
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