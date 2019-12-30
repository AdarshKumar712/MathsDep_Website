<?php 
    $dir1 = "./Events";
    $Events_file = glob($dir1."/*.*");

?>

<?php
    $dir2 = "./News";
    $News_file = glob($dir2."/*.*");
?>


<?php

  $dir = "./Announcements/";
  $file = glob($dir."/*.*");
  $subfile = glob($dir."/*/*.*");

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
  <script src="./jquery/jquery.js"></script>
  <script src="./jquery/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fuse.js/3.4.5/fuse.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="./Announcements.css">

</head>
<body>
</body><header><div class="topnav">
  <img src = "./Images/logo.jpg" height = "80" width = "80">
  <div class = "text1">
      <i><font size = "14px">D</font>epartment of <b><font size = "14px">M</font>athematics<br>IIT Kharagpur</b></i>
  </div>
</div></header>
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
        <li><a href="./index.php">Home</a></li>
        <li><a href="./Prof_info.php">Professor Information</a></li>
        <li>
          <div class="dropdown">
            <button class="dropbtn">Students Corner</button>
            <div class="dropdown-content">
              <a href="./Students_Corner/First_Year/Index.php">First Year</a>
              <a href="./Students_Corner/Second_Year/Index.php">Second Year</a>
              <a href="./Students_Corner/Third_Year/Index.php">Third Year</a>
              <a href="./Students_Corner/Fourth_Year/Index.php">Fourth Year</a>
              <a href="./Students_Corner/Fifth_Year/Index.php">Fifth Year</a>
            </div>
      </div></li>
        <li class = "active"><a href="#">Announcements</a></li>
        <li><a href="./Join_us.php">Join Us</a></li>
        <li><a href="./Contact_Us.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span>Faculty Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2" id="sidebar">
		<h4 style="text-align: center; margin-bottom: 15px">Direct Links</h4>
		<ul id="sidebar-list">
			<li href="#" class="sidebar-item">Erp Login</li>
			<li href="#" class="sidebar-item">IIT Kgp Main Website</li>
			<li href="#" class="sidebar-item">MetaKgp</li>
		</ul>
    </div>
    <div class="col-sm-8 text-left">
      <fieldset>
        <legend><h2>Announcements and Notifications</h2></legend>
        <ul>
        <?php

        foreach($file as $file_value){
                echo '<li><a href="'.$file_value.'">'.basename($file_value).'</a></li>';
          }
        foreach($subfile as $file_value){
                echo '<li><a href="'.$file_value.'">'.basename($file_value).'</a></li>';
          }
        ?>
      </fieldset>

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
  Follow us on : <a href = "#"><img src = "/Images/twitter.png" height= "10px" width = "10px" ></a> <a href = "#">@</a>
  <p>&copy All copyrights reserved to Mathematics Department</p>

</footer>

</body>