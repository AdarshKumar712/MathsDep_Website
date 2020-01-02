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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="Prof_info.php">Professor Information</a></li>
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
              <!-- Slideshow container -->
          <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="./Images/Dep.jpg" style="width:100%">
            <div class="text">Department Building</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="./Images/Dep2.jpg" style="width:100%">
            <div class="text">Department_photos</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="./Images/Dep3.jpg" style="width:100%">
            <div class="text">Department_photos</div>
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>

          <!-- The dots/circles -->
          <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
          <script type="text/javascript">
                var slide_Index = 1;
                showSlide(slide_Index);

                // Next/previous controls
                function plusSlides(n) {
                  showSlide(slide_Index += n);
                }

                // Thumbnail image controls
                function currentSlide(n) {
                  showSlide(slide_Index = n);
                }

                function showSlide(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slide_Index = 1} 
                  if (n < 1) {slide_Index = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none"; 
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slide_Index-1].style.display = "block"; 
                  dots[slide_Index-1].className += " active";
                }
          </script>
          <script type="text/javascript">
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none"; 
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");}
                  slideIndex++;
                  if (slideIndex > slides.length) {slideIndex = 1} 
                  slides[slideIndex-1].style.display = "block"; 
                  dots[slideIndex-1].className += " active";
                  setTimeout(showSlides, 6000); // Change image every 2 seconds
                }
          </script>
      <hr>
      <h2>About</h2>
      <p style="font-family:Times New Roman;font-size:16px;">The Department of Mathematics has started in 1951 through the vision and untiring efforts of late Prof. B. R. Seth, the first head of the Department. With his dynamic leadership, a strong school of Continuum Mechanics came into existence. In fact, this school has become a pool to cater experts to various other new institutes that have come up consequently. In 1956, Prof. B. R. Seth took initiation to establish Indian Society of Theoretical and Applied Mechanics (ISTAM), one of the main forums where scientists, engineers, technologists, and mathematicians could interact and exchange <span id="dots">...</span><span id="more">ideas, has now achieved international recognition.<br>

      In subsequent years, the department has attracted faculty with diversified expertise, for example, Statistics and Quality Control, Operations Research, Reliability, Interval Analysis, Algebra, Biomechanics, Complex analysis, Functional analysis, Optimization, and Data Base Management systems. The department’s vision to cater to the demand from software industry resulted to start a M.Tech. programme in Computer Science and Data Processing (CSDP) and a 5-Year integrated M.Sc. programme in Mathematics and Computing. These two programmes are first of their kind in the country and witnessed integration of Mathematics with Theoretical Computer Science.
      <br><br>
      The department tried its best to cater to the needs of the institute where specific tailor made courses are to be offered to the needs of engineering departments. This helped to have a close collaboration with some of the engineering departments, which lead to joint Ph.D. supervisions. The Department has a Colloquium which is run by students. Its objective is mainly to have informal mathematical discussions and seminars along with social and cultural activities.
      <br><br>
      From the strong school of Applied Mathematics, the department now has a balanced expertize covering various areas of Mathematics, Statistics and Theoretical Computer Science. The department is looking forward to encourage young faculty across diversified areas of Mathematics.
      </p></span>
      <button onclick="myFunction()" id="myBtn">Read more</button><br><br>
      <script>
      function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more"; 
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less"; 
          moreText.style.display = "inline";
        }
      }
      </script>
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