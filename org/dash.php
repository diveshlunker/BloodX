<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
}
else{
    header('location: ../login.php');
}

?>

<html>
    <head>
        <title>Login PopUp</title>
        <link rel="stylesheet" type="text/css" href="../css2/orgdash.css">
        <script src="jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
<!--
          <div class="wrapper">
    <div class="container">
      <br><br>
      <div class="signup"><hr>Details for the Blood Camp<hr></div>
      
      
        <form action="signup.php" method="post">
            <div class="signup-form" >
              <input type="text" placeholder="Name of Organization" name="Name Of Organization" class="input" required><br />
              <input type="text" placeholder="Contact Number" name="Contact Number" class="input" required><br />
              <input type="text" placeholder="City" name="city" class="input" required><br />
                <input type="text" placeholder="Address" name="address" class="input" required><br />
              <input type="text" placeholder="Contact Email" name="email" class="input" required><br />
                <input type="password" placeholder="Date" name="date" class="input" required><br />
              <input type="password" placeholder="Timings" name="timings" class="input" required><br />
                <input type="password" placeholder="Sponsor if Any" name="sponsor" class="input" required><br />
              <input type="submit" class="btn" name="submit" value=""/><br>
              <h2><a href="login.php" class="alreadyid">Already Have Id? Login Here</a></h2><br>
              <h2><a href="orglogin.php" class="alreadyid">Organizations: Signup Here</a></h2>
            </div>
        </form>
      
      
      
    </div>
  </div>
        
    </body>
-->
        
               
    <section class="cont">
      <div class="topicsel">
      </div>
    </section>
    <section id="header">
      <h1>Organizing Blood Camp?</h1><br>
      <h3>List The Details Below</h3>
    </section>
    <div id="cont">

    <section id="main">


      <form action="dash2.php" method="post" id="msform">
          
<!--          <input type="submit" name="submit" value="submit"/>-->

        <ul id="progressbar">
          <li class="active">About</li>
          <li>Details</li>
          <li>Submission</li>
        </ul>

        <div class="first">
            
          <h3 class="fsf-subtitle">About Blood-Camp</h3><br>
            <input type="text" name="name" placeholder="Organization Name" required/>
          <input type="text" name="email" placeholder="Contact Email" required/>
          <input type="text" name="number" placeholder="Contact Number" required/>
          
          <input type="button" name="next" class="next firstbutton action-button" value="Next" />
        </div>
        <div class="second">
           
          <h3 class="fsf-subtitle">Details about Blood-Camp</h3><br>
          <input type="text" name="city" placeholder="City" required/>
          <input type="text" name="address" placeholder="Address" required/>
          <input type="text" name="date" placeholder="Date" required/>
          <input type="text" name="time" placeholder="Timing" required/>
          
          <input type="button" name="previous" class="previous action-button" value="Previous" />
          <input type="submit" name="submit" class="next secondbutton action-button" value="Submit" />
        </div>

        <div class="third">
           
          <h3 class="fsf-subtitle">Thank You:)</h3><br><hr><br>
          <h4> Organization Name:- Blood-X</h4><br>
          <h4> Contact No:- 9884523855</h4><br>
          <h4> Email:- ndiveshjain@gmail.com</h4><br>
          <h4> Address:- vit</h4><br>
          <h4> City:- vellore</h4><br><hr><br>
            <h4>Your Blood Camp Details Will Be Updated And Everyone Will Get Notified Within 24 Hours Of Time.</h4><br><hr><br>
          <h4> Your Organization Is Creating a Deep Impact On Society :) </h4>


        </div>
          
          
      </form>

    </section>

    </div>

    <script>

    var parent, next_fs, previous_fs;



    $(".next").click(function(){
      parent = $(this).parent();
      next_fs = $(this).parent().next();
      prev_fs = $(this).parent().prev();
      $(parent).hide();
      $(next_fs).show();
      $("#progressbar li").eq($("div").index(parent)-1).addClass("active");
       // $("#progressbar li").eq($("div").index(parent)).removeClass("active");

     });

     $(".previous").click(function(){
       parent = $(this).parent();
       prev_fs = $(this).parent().prev();
       $(parent).hide();
       $(prev_fs).show();
       // $("#progressbar li").eq($("div").index(prev_fs)).addClass("active");
       $("#progressbar li").eq($("div").index(prev_fs)-1).removeClass("active");

     });
     </script>

    </body>
</html>





