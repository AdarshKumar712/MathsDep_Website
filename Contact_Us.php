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
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
</body>
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
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left">
    <h2>Contact Details</h2>
     E-mail: 123@gmail.com<br>
     Mobile: 12344211<br>
     <hr>
     <h3><b>Or you can submit your query here:</b></h3>
     <form class = "query" method = "post" action="#">
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
    </div>
  </form>
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
  Follow us on : <a href = "https://www.google.com" class = "fa fa-facebook"></a>  <a href = "https://facebook.com" class = "fa fa-facebook"></a>
  <p>&copy All copyrights reserved to Mathematics Department</p>

</footer>

</body>
</html>

