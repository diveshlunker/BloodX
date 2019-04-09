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

    <body>
        
        
        <ul id="myDIV">
            <li><h1>Welcome <?php echo"Divesh"?></h1></li>
            <li><hr></li>
            
            
            <li><a href="home.php">
              Home</a></li>
            <li><a class="navbar" href="donate.php">Donate</a></li>
            <li><a class="navbar active" href="request.php">Find Donar</a></li>
            <li><a class="navbar" href="availability.php">Availability</a></li>
            <li><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr></li>
            <li><a class="navbar" href="logout.php">Logout</a></li>
        </ul>
        
         <div class="container">
        
            <br><h1 align="center">Donate Blood Nearby..</h1><br>
                <h2>Hope you do the same work which you expect others to do now</h2>
            
            <table align="center" class="searchGroup right2 table table-hover">
                <form action="request.php" method="post">
                    
                    <tr>
                        
                        <td>
                            <input type="text" name="city" placeholder="Enter your Name" required="required"/>
                        </td>
                        <td>
                            <input type="text" name="name" placeholder="Your Name"/>
                        </td>
                        <td>
                            <input type="text" name="bgroup" placeholder="Blood Group"/>
                        </td>
                        <td colspan="1"><input type="submit" name="submit" value="Search"/></td>
<!--
                        </td>


                        <td colspan="1"><input type="submit" name="submit" value="Search"/></td>
                    </tr>
                    
                    
                    <input type="text" name="name" placeholder="Enter Your Name"/>
                    
                    
                    <select name="bgroup">
                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="3">B+</option>
                            <option value="4">B-</option>
                            <option value="5">O+</option>
                            <option value="6">O-</option>
                            <option value="7">AB+</option>
                            <option value="8">AB-</option>
                        </select>
-->
                    </tr>
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
               <tr align="center">
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
    
      </body>
    </head>
</html>