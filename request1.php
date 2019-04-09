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
          <li class="active"><a href="request1.php">Request</a></li>
        <li><a href="availability1.php">Availability</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      
    </ul>
  </div>
</nav>
 <div id="particles"> 
<div id="intro">
  
            <br><h1 align="center">Check People with same blood group</h1><br>
                <h2>Hope you do the same work which you expect others to do now</h2>
            
            <table align="center" class="searchGroup right2 table table-hover">
                <form action="request1.php" method="post">
                    <table>
                    <tr>
                        
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" placeholder="Enter your Name" required="required"/>
                        </td>
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phone" placeholder="Your Phone number"/>
                        </td><br>
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bgroup" placeholder="Blood Group"/>
                        </td>
                        <td colspan="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Search"/></td>
                    </tr>
                        </table>
                </form>
    </table>
    <br>
    
          
<table align="center" width="80%" border="1" class="dataprovided">
    <tr style="background-color:#000; color:#fff; ">
        <th>No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>State</th>
    </tr>
<?php
    
   if(isset($_POST['submit'])){
       $name = $_POST['name'];
       $number = $_POST['phone'];
       $bgroup = $_POST['bgroup'];
       
       include('../dbcon.php');
       
       $qry = "SELECT * FROM `users` WHERE `bloodgroup` = '$bgroup'";
       
       $run = mysqli_query($con,$qry);
       
       
       
       if(mysqli_num_rows($run)>0){
           $count=0;
           
           while($data = mysqli_fetch_assoc($run)){
               $count++;
               ?>
               <tr>
                   <td><?php echo $count;?></td>
                   <td><?php echo $data['name'];?></td>
                   <td><?php echo $data['email'];?></td>
                   <td><?php echo $data['number'];?></td>
                   <td><?php echo $data['state'];?></td>
</tr>
    <?php
           }
       }
       else{
           echo"<tr><td colspan='5'>No Records Found</td></tr>";
       }
       
   }
                
                
                ?>
</table>
    
</div>
    </div>

</body>
</html>
