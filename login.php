<?php

session_start();

if(isset($_SESSION['uid']))
{
    header('location:users/home.php');
}
?>

<html>
    <head>
        <title>Login PopUp</title>
        <link rel="stylesheet" type="text/css" href="css2/login2.css">
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

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $qrysearch = "SELECT * FROM `users` WHERE `email` = '$email' AND `password`='$pass' ";
    $run = mysqli_query($con,$qrysearch);
    if(mysqli_num_rows($run)<=0){
        
        $qrysearchorg = "SELECT * FROM `organization` WHERE `email` = '$email' AND `password`='$pass' ";
        $runorg = mysqli_query($con,$qrysearchorg);
        if(mysqli_num_rows($runorg)<=0){
            
            $qrysearchspon = "SELECT * FROM `sponsers` WHERE `email` = '$email' AND `password`='$pass' ";
            $runspon = mysqli_query($con,$qrysearchspon);
            if(mysqli_num_rows($runspon)<=0){
                
                $qrysearchadmin = "SELECT * FROM `admin` WHERE `email` = '$email' AND` password`='$pass' ";
                $runadmin = mysqli_query($con,$qrysearchadmin);
                if(mysqli_num_rows($runadmin)<=0){
                    
                    ?>
                    <script>
                        alert("Incorrect Id Or Password! Try Again");
                    </script>
<?php
                }
                else{
                    $data = mysqli_fetch_assoc($runadmin);
                    $id = data['id'];
                    $_SESSION['uid'] = $id;
                    header('location:admin/dash.php');
                }
            }
            else{
                $data = mysqli_fetch_assoc($runspon);
                $id = data['id'];
                $_SESSION['uid'] = $id;
                header('location:spon/dash.php');
            }
        }
        else{
            $data = mysqli_fetch_assoc($runorg);
            $id = data['id'];
            $_SESSION['uid'] = $id;
            ?>
            <script>
                
                window.open('org/dash.php?sid=<?php echo $id;?>','self');
                
                </script>

<?php
        }
    }
    else{
        $data = mysqli_fetch_assoc($run);
        $id = data['id'];
        $_SESSION['uid'] = $id;
        ?>
            <script>
                
                window.open('users/dash.php?sid=<?php echo $id;?>','self');
                
                </script>

<?php
    }
    
    
}

?>