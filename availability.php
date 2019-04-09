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
            <li><h1>Welcome <?php echo"Divesh"?></h1></li>
            <li><hr></li>
            
            
            <li><a href="home.php">
              Home</a></li>
            <li><a class="navbar" href="donate.php">Donate</a></li>
            <li><a class="navbar" href="request.php">Find Donar</a></li>
            <li><a class="navbar active" href="availability.php">Availability</a></li>
            <li><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr></li>
            <li><a class="navbar" href="logout.php">Logout</a></li>
        </ul>
        



<br><h1 align="center">Availability Of Blood</h1><br>
<table align="center">
<form action="availability.php" method="post">
    <tr>
        <th>
            Enter Blood Group
        </th>
        <td>
            <input type="text" name="bgrp" placeholder="Enter Blood Group" required="required"/>
        </td>
    
    
        <td colspan="1"><input type="submit" name="submit" value="Search"/></td>
    </tr>
    
    
</form>
</table>
<br>

<table align="center" width="80%" border="1" style:"margin-top:10px;">
    <tr style="background-color:#000; color:#fff; ">
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
                <tr align="center">
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


      </body>
    </head>
</html>