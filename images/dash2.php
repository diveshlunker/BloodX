     <?php

include('../dbcon.php');



if(isset($_POST['submit'])){
    
    
   
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number']; 
    $city = $_POST['city'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $time = $_POST['time'];


    
        $qry = "INSERT INTO `blood camps`(`name`, `email`, `number`,`city`,`address`,`date`,`time`) VALUES ('$name','$email','$number','$city','$address','$date','$time')";
        
        $runqry = mysqli_query($con,$qry);
        if($runqry == true){
            
        ?>
            <script type="text/javascript">
                alert("Your Blood Camp Date Noted! SPONSERING AMOUNT WILL REACH ASAP");
                window.location.href = "dash.php";
            </script>
<?php
            
            

            
        }
        else{
            echo(mysqli_error($con));
        }
    
//    header('location:login.php');
}


?>
