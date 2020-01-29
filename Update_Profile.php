<?php  
  session_start();

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
      $array['password'] = $r['Password'];
      $array['Position'] = $r['Position'];
      $array['Email'] = $r['Email'];
      $array['Image'] = $r['Image'];
      $array['dir'] = $r['Announcement_Global'];
    }

    return $array;
  }
  $_SESSION['message1'] = "";
  $_SESSION['message'] = "";
  $_SESSION['message3'] = "";
  $dir = "./Announcements/";
  $Userdata = array();
  if (isset($_SESSION['Username'])){
  $Userdata = getUserData($_SESSION['Username']);
  }
  else
  {
    echo "<script>window.location.assign('./login.php?msg=".urlencode(base64_encode('You have been Logged out successfully'))."');</script>";
  }
  $id = $Userdata['id'];
?>
<?php
    
    $mysqli = new mysqli('localhost','root','root','demo');
    if (isset($_POST['Update_data']))
    {
       $id = $Userdata['id'];
       $email = $mysqli->real_escape_string($_POST["email"]);
       $name = $mysqli->real_escape_string($_POST["Name"]);
       $place = $mysqli->real_escape_string($_POST["Place"]);
       $position = $mysqli->real_escape_string($_POST["Designation"]);

          $_SESSION['username'] = $username;
          $_SESSION['avatar'] = $avatar_path;
          $sql = "UPDATE `loginform` SET `Name`='$name',`Place`='$place',`Position`='$position',`Email`='$email' WHERE ID = '$id'";
          if ($mysqli->query($sql)===true)
          {
            $_SESSION['message1'] = "Update Successful!!!";
          }
          else
          {
            $_SESSION['message1'] = "Update unsuccessful";
          }

    }
    if (isset($_POST["Update_pass"]))
    {
      if(md5($_POST['password'])==$Userdata['password']){
      //$password = $mysqli->real_escape_string($_POST["passwords"]);
      if ($_POST['new_password']==$_POST['confirmpassword'])
      {
          $pass = md5($_POST['new_password']);
          $sql = "UPDATE `loginform` SET Password = '$pass' WHERE ID = '$id'";
          if ($mysqli->query($sql)===true)
          {
            $_SESSION['message'] = "Update Successful!!!";
          }
          else
          {
            $_SESSION['message'] = "Update unsuccessful";
          }
      }
      else
      {
        $_SESSION['message'] = "Password not matching Confirm Password";
      }
      }
      else
        $_SESSION['message']="Old password not matching";
    }

    if (isset($_POST['Update_pic']))
    {
      $avatar_path = $mysqli->real_escape_string('./Uploads/'.$_FILES['file']['name']);
       if (preg_match("!image!", $_FILES['file']['type'])){

        if (copy($_FILES['file']['tmp_name'],$avatar_path))
        {
            $sql = "UPDATE `loginform` SET Image = '$avatar_path' WHERE ID = '$id'";
            if ($mysqli->query($sql)===true)
            {
              $_SESSION['message3'] = "Profile Pic Update Successful!!!";
            }
           else
           {
            $_SESSION['message3'] = "Update unsuccessful";
           }
        }
      }
        else
        {
            $_SESSION['message3'] = "Error!! Upload an Image(.jpeg/.png/.jpg format)";
        }
  }

    $Userdata = getUserData($_SESSION['Username']);


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
<style type="text/css">
    fieldset{
      margin-right: 40px;
    }
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
      <span>Welcome, <strong><?php echo $Userdata['Name']; ?></strong></span><br>
    </div>

  </div>
  <hr>
  <div class="w3-bar-block">
    <button class="w3-bar-item w3-button w3-padding w3-blue dropdown-btn">Dashboard 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container" >
    <a href="./Dash.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding active"><i class="fa fa-cog"></i> Update Profile</a>
  </div>
  <button class="w3-bar-item w3-button w3-padding w3-blue dropdown-btn active"><i class="fa fa-bell"></i> Announcements
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container1" >
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
<div class="w3-main" style="margin-left:400px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>
  <p class = "heading"><h1><i class = "fa fa-cog"></i>Update Profile</h1><hr>
  </p><p><strong><i>Here you can update the details into your profile, by changing thye details of the respective field</i></strong></p><br><br>


  <fieldset class = "data">
  <i>Kindly change the data you want to update:</i><br><br><center>
  <form action = '#' method = "POST" enctype="multipart/form-data"><table><tr><td>
      Name:</td><td><input type="text" name="Name" placeholder="Name" value = "<?php echo $Userdata['Name'] ?>"/></td></tr><tr>
      <td>Designation:</td><td><input type="text" name="Designation" placeholder="Position" value = "<?php echo $Userdata['Position'] ?>"/></td></tr><tr>
      <td>Place:</td><td><input type="text" name="Place" placeholder="Place" value = "<?php echo $Userdata['Place'] ?>"/></td></tr><tr><td>Email:</td>
      <td><input type="email" placeholder="Email" name="email" value = "<?php echo $Userdata['Email'] ?>" /></td></tr></table>
      <input type="submit" value="Update" name="Update_data" class="btn btn-block btn-primary" /><br><br> 
  </form></center><br><br>
<center><i>
<? echo $_SESSION['message1'] ?></i></center></fieldset>
<br><br>



<fieldset><i>Kindly change enter password to update:</i><br><br><center>
    <form action = '#' method = "POST" enctype="multipart/form-data"><table><tr>
      <td>Old Password</td><td><input type = "password" name = "password" placeholder = "Old Password"></td></tr><tr>
      <td>New Password</td><td><input type = "password" name = "new_password" placeholder = "New Password"></td></tr><tr>
      <td>Confirm New Password</td><td><input type = "password" name = "confirmpassword" placeholder = "Reconfirm New Password"></td></tr></table>
      <input type="submit" value="Update" name="Update_pass" class="btn btn-block btn-primary"/><br><br>
      </form></center><center><i>
<? echo $_SESSION['message'] ?></i></center></fieldset>
<br><br>



<fieldset><i>Kindly upload new profile pic you want to display:</i><br><br><center>
    <form action = '#' method = "POST" enctype="multipart/form-data"><table><tr>
      <input type="file" name = "file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" value="Update" name="Update_pic" class="btn btn-block btn-primary"/><br><br>
      </form></center><center><i>
<? echo $_SESSION['message3'] ?></i></center></fieldset>
<br><br>

 </div>
 <!-- End of Page content-->
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