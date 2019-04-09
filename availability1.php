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


<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" type="text/css">
  <!-- remember, jQuery is completely optional -->
  <!-- <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script> -->
  <script type="text/javascript" src="js/jquery.particleground.js"></script>
  <script type="text/javascript" src="js/demo.js"></script>
</head>
<body>

    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Blood-X</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home1.php">Home</a></li>
      
          <li><a href="donate1.php">Donate</a></li>
          <li><a href="request1.php">Request</a></li>
        <li class="active"><a href="availability1.php">Availability</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      
    </ul>
  </div>
</nav>
 <div id="particles"> 
<div id="intro">
  
            <br><h1 align="center">Availability Of Blood..</h1><br>
                
            
            <table align="center" class="table table-hover">
                <form action="availability1.php" method="post">
                    
                    <table>
                        
                    <tr>
                        
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bgrp" placeholder="Enter Blood Group" required="required"/>
                        </td>


                        <td colspan="1">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="submit" value="Search"/></td>
                    </tr>
                    </table>
                    
                </form>
    </table>
    <br>
    
          
<table align="center" width="80%" border="1" class="dataprovided">
    <tr align="center" style="background-color:#000; color:#fff; ">
        <th>No.</th>
        <th>Organization</th>
        <th>Address</th>
        <th>Blood Group</th>
        <th>Available Units</th>
        
        
    </tr>
    
    <?php

    if(isset($_POST['submit'])){
        include('../dbcon.php');

        $bgroup=$_POST['bgrp'];

        $sql = "SELECT * FROM `availability` WHERE `bloodgroup`='$bgroup'"; 

        $run=mysqli_query($con, $sql);

        if(mysqli_num_rows($run)<1){
            echo "<tr><td colspan='5'>No Records Found</td></tr>";
        }
        else{
            $count=0;
            while($data=mysqli_fetch_assoc($run)){
                $count++;
                ?>
                <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $data['organization'] ?> </td>
                    <td><?php echo $data['address']; ?></td>
                    <td><?php echo $data['bloodgroup']; ?></td>
                    <td><?php echo $data['Units']; ?></td>
                </tr>

        <?php
            }
        }
    }
?>
</table>
    
</div>
    </div>

</body>
</html>