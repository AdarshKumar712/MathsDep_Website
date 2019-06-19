<?php
session_start();
  $_SESSION['message'] = '';
  $mysqli = new mysqli('localhost','root','root','accounts');

  if ( $_SERVER['REQUEST_METHOD']=='POST'){

    if ($_POST["password"]==$_POST["confirmpassword"])
    {
       $username = $mysqli->real_escape_string($_POST["username"]);
       $email = $mysqli->real_escape_string($_POST["email"]);
       $password = md5($_POST['password']);
       $avatar_path = $mysqli->real_escape_string('./uploads/'.$_FILES['avatar']['name']);

    if (preg_match("!image!", $_FILES['avatar']['type'])){

        if (copy($_FILES['avatar']['tmp_name'],$avatar_path))
        {
          $_SESSION['username'] = $username;
          $_SESSION['avatar'] = $avatar_path;

          $sql = "INSERT INTO users (username,email,password,avatar) VALUES ('".$username."','".$email."','".$password."','".$avatar_path."')";

          if ($mysqli->query($sql)===true)
          {
            $_SESSION['message'] = "Registration Successful!!!";
          }

        }
        
        else
        {
          $_SESSION['message'] = "File upload failed";
        }
      }
  else
  {
        $_SESSION['message'] = "File not an Image";
    }
  }
  else
  {
    $_SESSION['message'] = 'Sorry Password not matching confirmpassword';
  }
  }  

?>



<link rel="stylesheet" href="Join_us.css" type="text/css">
<div class="body-content">
  <div class="module">
    <form class="form" action="#" method="post" enctype="multipart/form-data" autocomplete="off">
      <h1>Register Yourself Here</h1>
      <div class="alert alert-error"><?php $_SESSION["message"]; ?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" /><br><br>
      <a href = "./index.php"><center><font color = "#ffffff">Click here to return to home page</font></center></a>
    </form>
  </div>
</div>