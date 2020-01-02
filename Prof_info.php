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
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Spectral:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Patrick+Hand&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="./jquery/jquery.js"></script>
  <script src="./jquery/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fuse.js/3.4.5/fuse.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
  <script type="text/javascript" src="./Prof_data.js"></script>
  <style type="text/css">
    fieldset{
      border-radius: 20px;
      border:2px;
      padding: 20px;
      margin-bottom: 20px
    }

    .search_prof_heading
    {
      text-align: center;
      font-family: 'Spectral', serif;
      font-weight:bold;
      font-size: 2vw;
      color: black;
    }
    #search
    {
      margin-left: 37.5%;
      width: 25%;
      height: 2.2vw;
      border-radius: 2vw;
      border-style: solid;
      font-family: 'Spectral', serif;
      font-size: 1.4vw;
      font-weight:100;
      text-align: center;
      background-color: aliceblue;
    }
    #output
    {
      display: none;
      font-family: 'Spectral', serif;
      font-size:1.5vw;
      text-align:left;
      padding-left: 10%;
      background:linear-gradient(to bottom right, rgba(0,255,255,0.7), rgba(0,90,255,0.7));
      border-radius:4vw;
      padding-top:5%;
      padding-bottom:5%;
      box-shadow:10px 10px 10px rgba(0,0,0,0.5);
    }
      
      #prof_photo
      {
          width: 13vw;
          height: 13vw;
          border-radius: 10vw;
          background-color: pink;
          margin-left:65%;
          position: absolute;
          top: 42%;
          display: none;
          border: solid 0.2vw black;
      }
  </style>

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
        <li class = "active"><a href="#">Professor Information</a></li>
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
        <li><a href="./Join_us.php">Join Us</a></li>
        <li><a href="./Contact_Us.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Faculty Login</a></li>
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
    <form class = "search_prof">
      <fieldset>
        <legend class="search_prof_heading">Search by Professor name</legend>
        <input id = "search" list = "names" placeholder="Select name of Prof.">
            <datalist id = "names">
              <option value = "Adrijit Goswami">
              <option value = "Asish Ganguly">
              <option value = "Bappaditya Bhowmik">
              <option value = "Bibhas Adhikari">
              <option value = "Biswa Nath Datta">
              <option value = "Bodhayan Roy">
              <option value = "Buddhananda Banerjee">
              <option value = "Chandal Nahak">
              <option value = "Debapriya Biswas">
              <option value = "Debjani Chakraborty">
              <option value = "Geetanjali Panda">
              <option value = "Gnaneshwar Nelakanti">
              <option value = "G P Raja Sekhar">
              <option value = "Hari Shankar Mahato">
              <option value = "Husney Parvez Sarwar">
              <option value = "Jitendra Kumar ">
              <option value = "Koeli Ghoshal">
              <option value = "Mahendra Prasad Biswal">
              <option value = "Mousumi Mandal">
              <option value = "Nitin Gupta">
              <option value = "Pawan Kumar">
              <option value = "Prateep Chakraborty">
              <option value = "Pratima Panigrahi">
              <option value = "P V S N Murthy">
              <option value = "Rajesh Kannan">
              <option value = "Rajni Kant Pandey">
              <option value = "Ramakrishna Nanduri">
              <option value = "Ratna Dutta">
              <option value = "Rupanwita Gayen">
              <option value = "Somesh Kumar">
              <option value = "Somnath Bhattacharyya">
              <option value = "Sourav Mukhopadhyay">
              <option value = "Swanand Ravindra Khare">
              <option value = "T Raja Sekhar">
              <option value = "Umesh Chandra Gupta">
            </datalist> 
            <br><br><br>
            <script type='text/javascript' src='./test.js'></script>
    <fieldset border = "2px"><div id = "output"></div><div id="prof_photo"></div></fieldset>
      </fieldset>
    </form>
    <div class = "result">
      <p id = "srh"></p>
        </script>
      </div>
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
</html>
