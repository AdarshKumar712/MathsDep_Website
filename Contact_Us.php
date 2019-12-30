<?php 
    $dir1 = "./Events";
    $Events_file = glob($dir1."/*.*");
?>

<?php
    $dir2 = "./News";
    $News_file = glob($dir2."/*.*");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Department Of Mathematics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="contactus.css">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .sidenav {
      height: 655px;
    }
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      #letter {
        display: none;
      }
      #letter2 {
        display: block;
      }
    }
    @media screen and (min-width: 768px) {
      #letter2 {
        display: none;
      }
    }
  </style>
</head>
<body>
<header>
    <div class="topnav">
        <img src = "./Images/logo1.png" height = "120 " width = "120">
        <div class = "text1">
            <font id="dept"><b>DEPARTMENT OF </b></font> 
            <font id="math">MATHEMATICS</font><br>
            <font id="iit">INDIAN INSTITUTE OF TECHNOLOGY KHARAGPUR</font>
        </div>
    </div>
</header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="Prof_info.php">Professor Information</a></li>
        <li id="stud">
          <div class="dropdown">
            <button class="dropbtn">Students' Corner</button>
            <div class="dropdown-content">
              <a href="./Students_Corner/First_Year/Index.php">First Year</a>
              <a href="./Students_Corner/Second_Year/Index.php">Second Year</a>
              <a href="./Students_Corner/Third_Year/Index.php">Third Year</a>
              <a href="./Students_Corner/Fourth_Year/Index.php">Fourth Year</a>
              <a href="./Students_Corner/Fifth_Year/Index.php">Fifth Year</a>
            </div>
      </div></li>
        <li><a href="./Announcements.php">Announcements</a></li>
        <li><a href="./Join_us.php">Join Us</a></li>
        <li class = "active"><a href="#">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Faculty Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2" id="sidebar">
		<h4 style="text-align: center; margin-bottom: 15px">Direct Links</h4>
		<ul id="sidebar-list">
			<li href="#" class="sidebar-item">Link</li>
			<li href="#" class="sidebar-item">Link</li>
			<li href="#" class="sidebar-item">Link</li>
		</ul>
    </div>
    <div class="col-sm-8 text-left" style="background: linear-gradient(white, #d1d1d1);">
      <div style="float: left;">
        <h2 style="font-family: Georgia;">CONTACT DETAILS:</h2>
        <span class="fa fa-envelope"></span>E-mail: <a href="mailto:123@gmail.com" style="text-decoration:none;">123@gmail.com</a><br>
        <span class="fa fa-phone"></span>Mobile: <a href="tel:12344211" style="text-decoration:none; ">12344211</a><br><br>
      </div>
      <div>
        <img src="images/letter.png" id="letter2" style="width: 140px; float:right; margin-top: 10px;">
      </div>
      
      <hr style="border-color: black; clear: both;">
    
      <div class="row">
        <div class="col-12">
          <center><font size="6" face="Georgia">HAVE SOME QUESTIONS?</font></center>
        </div>
      </div>
      <div class="row" style="padding-top: 15px;">
        <div class="col-sm-6 text-center"><img src="images/letter.png" id="letter" style="width:70%; margin-bottom: 20px; margin-top: 8%;"></div>
        <div class="col-sm-6 text-center">
          <form action="#" class="query" method="post">
            <i class="fa fa-user fa-lg" style="position:absolute; padding-top:15px;"></i><input type="text" id="name" class="inputs" placeholder="Name" required><br>
            <i class="fa fa-id-card fa-lg" style="position:absolute; padding-top:15px;"></i><input type="text" id="Roll" class="inputs" placeholder="Roll Number" required><br>
            <i class="fa fa-envelope fa-lg" style="position:absolute; padding-top:15px;"></i><input type="email" id="Email" class="inputs" placeholder="Email" required><br>
            <i class="fa fa-question-circle fa-lg" style="position:absolute; padding-top:15px;"></i><textarea rows="5" id="query" class="inputs" placeholder="Your questions..."></textarea><br>
            <button type="submit" id="submit_query" class="inputs">SUBMIT</button> 
          </form>
        </div>
      </div>
      <!--<form class = "query" method = "post" action="#">
        <table class = "table_form">
        <tbody>
         <tr>
          <td text-align = "center">Name*:</td><td><input type = "text" id = "name" required> </td>
        </tr>
        <tr>
          <td text-align = "center">Roll Number*:</td><td><input type = "text" id = "Roll" required></td>
        </tr>
        <tr>
          <td text-align = "center">Email Id*:</td><td><input type = "email" id = "Email" required></td>
        </tr>
        <tr>
          <td>Query*:</td><td><textarea placeholder="What is your Query?" rows = "10" cols="80" id = "query" required></textarea></td>
        </tr>
        </tbody>
        </table>
        <input type = "submit" id = "submit_query">
      </form>-->
    </div>
    
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p><h2>Events</h2></p>
        <?php 
          foreach($Events_file as $file_value){
                echo '<p><a href="'.$file_value.'">'.basename($file_value).'</a></p>';
          }
        ?>
      </div>
      <div class="well">
        <p><h2>News</h2></p>
        <?php
          foreach($News_file as $file_value){
                echo '<p><a href="'.$file_value.'">'.basename($file_value).'</a></p>';
          }
        ?>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  Follow us on : <a href = "#"><img src = "/Images/twitter.png" height= "10px" width = "10px" ></a> <a href = "#">@</a></a>
  <p>&copy All copyrights reserved to Mathematics Department</p>

</footer>

</body>
</html>
