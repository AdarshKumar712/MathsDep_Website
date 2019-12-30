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
  <link rel="stylesheet" type="text/css" href="./login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header><div class="topnav">
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
        <li><a href="./Announcements.php">Announcements</a></li>
        <li><a href="./Join_Us.php">Join Us</a></li>
        <li><a href="./Contact_Us.php">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class = "active"><a href="#"><span class="glyphicon glyphicon-log-in"></span>Faculty Login</a></li>
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
    <div class="col-sm-8 text-left">
      <div class = "container">
          <form action = "#" method = "POST">
            <fieldset><center><legend><h1>Login:</h1></center></legend>
              <div class = "form_input">
                <table><tbody><tr><td>Username</td>
                <td><input type = "text" name = "Username" placeholder = "Enter your username"></td></tr></tbody></table>
              </div>
              <div class = "form_input">
                <table><tbody><tr><td>Password</td>
                <td><input type="password" name="Password" placeholder="Enter your password"></td></tr></tbody></table>
              </div><br>
              <input type = "submit" name = "submit" value = "Login" class = "btn-login"><br><br>
            </fieldset>
          </form>
          <?php 
              if ($_GET['msg'])
                 echo "<div class = 'success_message'>".base64_decode(urldecode($_GET['msg']))."</div>"; 
           ?>
      </div><br><br><br></div>
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
  Follow us on : <a href = "https://www.google.com" class = "fa fa-twitter"></a>  <a href = "https://facebook.com" class = "fa fa-facebook"></a>
  <p>&copy All copyrights reserved to Mathematics Department</p>
</footer>
</body>
</html>
<?php
          session_start();
// Database connection parameters.
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "demo";
$con=mysqli_connect('localhost:3306','root','root') or die('sorry unable to connect');  
    mysqli_select_db($con,"demo") or die("cannot select DB");

if (isset($_POST['Username']))
{
$user=$_POST['Username'];  
$pass=md5($_POST['Password']); 
#echo $user.$pass; 
#echo $con; 
$query=mysqli_query($con,"SELECT * FROM loginform WHERE User='".$user."' AND Password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
#echo $numrows;
if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
        $dbusername=$row['User'];  
        $dbpassword=$row['Password']; 
        $_SESSION['Username']= $row['User'];
    }
    #echo $dbusername.$dbpassword;
    if($user == $dbusername && $pass == $dbpassword)  
    {  
        echo "<script>window.location.assign('Dash.php');</script>";  
    } else {  
        echo "Invalid Username or password!";  
    } 
    }
else
  {
    echo "Sorry some Error happened!!!!!!!";
  }
}

?>