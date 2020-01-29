<?php  
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "demo";
  $con=mysqli_connect('localhost:3306','root','root') or die('sorry unable to connect');  
    mysqli_select_db($con,"demo") or die("cannot select DB");
  
  function getUserData($username)
  {
    $array= array();
    $con=mysqli_connect('localhost:3306','root','root') or die('sorry unable to connect');  
      mysqli_select_db($con,"demo") or die("cannot select DB");
    $q = mysqli_query($con,"SELECT * FROM loginform WHERE User='".$username."'");
    while($r = mysqli_fetch_assoc($q))
    {
      $array['id'] = $r['ID'];
      $array['Username'] = $r['User'];
      $array['Name'] = $r['Name'];
      $array['Place'] = $r['Place'];
      $array['Position'] = $r['Position'];
      $array['Email'] = $r['Email'];
      $array['Image'] = $r['Image'];
    }

    return $array;
  }

  $Userdata = array();
  if (isset($_SESSION['Username'])){
  $Userdata = getUserData($_SESSION['Username']);
  }
  else
  {
    echo "<script>window.location.assign('./login.php?msg=".urlencode(base64_encode('You have been Logged out successfully'))."');</script>";
  }
?>






<!DOCTYPE html>
<html>
<title>Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<link rel="stylesheet" type="text/css" href="Dashboard.css">
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><img src= "./Images/logo.jpg" height = "40px" width = "40px"></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" width="100%" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a></div><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="./Images/avatar.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome,<br> <strong><?php echo $Userdata['Name']; ?></strong></span><br>
    </div>

  </div>
  <hr>
  <div class="w3-bar-block">
    <button class="w3-bar-item w3-button w3-padding w3-blue dropdown-btn">Dashboard 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container ab" >
    <a href="#" class="w3-bar-item w3-button w3-padding active"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="./Update_profile.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-cog"></i> Update Profile</a>
  </div>
  <button class="w3-bar-item w3-button w3-padding w3-blue dropdown-btn"><i class="fa fa-bell"></i> Announcements
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container1">
    <a href="./Dash_announc_global.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-globe"></i> Global</a>
    <a href="./Students_Corner/First_Year/Dash_announce.php" class="w3-bar-item w3-button w3-padding w3-blue">First Year</a>
    <a href="./Students_Corner/Second_Year/Dash_announce.php" class="w3-bar-item w3-button w3-padding w3-blue">Second Year</a>
    <a href="./Students_Corner/Third_Year/Dash_announce.php" class="w3-bar-item w3-button w3-padding w3-blue">Third Year</a>
    <a href="./Students_Corner/Fourth_Year/Dash_announce.php" class="w3-bar-item w3-button w3-padding w3-blue">Fourth Year</a>
    <a href="./Students_Corner/Fifth_Year/Dash_announce.php" class="w3-bar-item w3-button w3-padding w3-blue">Fifth Year</a>
  </div>
  <button class="w3-bar-item w3-button w3-padding w3-blue dropdown-btn"><i class="fa fa-book"> Lecture Notes</i>
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container1">
    <a href="./Students_Corner/First_Year/Lect.php" class="w3-bar-item w3-button w3-padding w3-blue">First Year</a>
    <a href="./Students_Corner/Second_Year/Lect.php" class="w3-bar-item w3-button w3-padding w3-blue">Second Year</a>
    <a href="./Students_Corner/Third_Year/Lect.php" class="w3-bar-item w3-button w3-padding w3-blue">Third Year</a>
    <a href="./Students_Corner/Fourth_Year/Lect.php" class="w3-bar-item w3-button w3-padding w3-blue">Fourth Year</a>
    <a href="./Students_Corner/Fifth_Year/Lect.php" class="w3-bar-item w3-button w3-padding w3-blue">Fifth Year</a>
  </div>
  <button class="w3-bar-item w3-button w3-padding w3-blue dropdown-btn"><i class="fa fa-pencil"></i> Assignments
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container1">
    <a href="./Students_Corner/First_Year/Assignments.php" class="w3-bar-item w3-button w3-padding w3-blue">First Year</a>
    <a href="./Students_Corner/Second_Year/Assignments.php" class="w3-bar-item w3-button w3-padding w3-blue">Second Year</a>
    <a href="./Students_Corner/Third_Year/Assignments.php" class="w3-bar-item w3-button w3-padding w3-blue">Third Year</a>
    <a href="./Students_Corner/Fourth_Year/Assignments.php" class="w3-bar-item w3-button w3-padding w3-blue">Fourth Year</a>
    <a href="./Students_Corner/Fifth_Year/Assignments.php" class="w3-bar-item w3-button w3-padding w3-blue">Fifth Year</a>
  </div>
  <a href="./Events.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i> Events</a>
  <a onclick = "return con1()" href="logout.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-power-off"></i> Logout</a>
  </div>
<script type="text/javascript">
  function con1() {
    var r = confirm("Are you sure you want to logout?");
    if (r==true)
    {
      return true;
    }
    {
      return false;
    }
  }
</script>

</nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

<fieldset class ="supreme">
    <legend><h1>Faculty Profile</h1></legend>
    <div class = "a">
      <strong><?php echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$Userdata["Name"]; ?></strong>
      <div>
    <table> 
      <tr>
        <td>Place: </td><td><?php echo $Userdata["Place"]; ?></td>
      </tr>
      <tr>
        <td>Email: </td><td><?php echo $Userdata["Email"]; ?></td>
      </tr>
      <tr>
        <td>Designation:</td><td><?php echo $Userdata["Position"]; ?></td>
      </tr>
    </table>
  </div>
    <div class = "prof_img">
    <img src = "<?php echo $Userdata['Image']; ?>" width = "100px" height = "100px">
    </div>
    </div>    
    </fieldset>
    <p class = "Overview">
    <i class = "fa fa-cloud-upload"></i><i><em> ..This Login allows you to update Notifications,Upload Notes and Assignments. Kindly use the side Navigation bar to toggle.</em></i></p>
   
  
  <!-- End page content -->
 </div>
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
     for (i = 0; i < dropdown.length; i++) {
                      dropdown[i].nextElementSibling.style.display = "none"; 
                  }
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {

      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html>
