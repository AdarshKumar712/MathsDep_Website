# MathsDep_Website
Website for the department of Mathematics, IIT Kharagpur.

# Purpose
Purpose of this website is to the serve for the benefit of the students of Mathematics and Computing at IIT Kharagpur and to provide a better interface between Professors and Students.

# Details/Components
<ul>
  <li>index.php - home page.<br></li>
  <li>Prof_info.php - a page to search about the professors/faculty of the department.<br></li>
  <li>Prof_data.js - contains basic information of the professors of the department.<br></li>
<li>Announcements.php - Here you will be able to find all the new announcements by the professors and faculty.<br></li>
<li>Students Corner - specifically meant for the students, under this section you can find all the recent yearwise announcements,                               lecture_notes,assignments uploaded ny the faculty.<br></li>
  <li>Join_us.php - a registeration page.<br></li>
  <li>Contact_Us.php - to get contact details or to submit some query.<br></li>
  <li>login.php - for login purpose of the faculty and admin.<br></li>
  <li>Dashboard.php - Default page that opens by default at the time of login showing basic information of the professor.<br></li>
  <li>Announc_global.php - Page which allows professor to Upload/Delete the documents meant for the whole department.<br></li>
  </ul>

# Installation
### Primary Installation:
1. Install any apache software for server hosting like XAMPP or MAMP.
    <ul>
    <li>[Download XAMPP](https://www.apachefriends.org/download.html)</li>
    <li>[Download MAMP](https://www.mamp.info/en/downloads/)</li>
    </ul>
    and more you can google.....<br> 
2. Clone the repository, and navigate to the downloaded folder.<br>
3. Move the downloaded Zip file related to the repository to the htdocs folder in the XAMPP/MAMP folder wherever you have installed          it(XAMPP/MAMP) and then unzip the file.<br>
4. Suppose your host app is MAMP, then run the MAMP and then click <b>Start Servers</b>(<i>Though in general it starts automatically</i>).<br>
5. Click "Open WebStart page". New Window opens in the browser. From the webpage opened in browser, click "My Website".<br>
6. Select the Mathematics Website folder from Index.<br>
  <br>
  <t><b>Website is all set to surf!!!!!!!!</b><br>

### Installing the Database for Login
1. Run MAMP/XAMPP, then Click "Open WebStart Page".<br>
2. Select "phpMyAdmin" from drop down of "Tools" menu.<br>
3. Now in phpMyAdmin, create a new database named "demo".<br>
4. After creating the database, click "Import" tab. Then under choose file, select the 'loginform.sql' file from MY SQL folder in the Maths Website folder.<br>
<br>
<b> Now the login page is also set </b>
<br>
**Note: Password you can find out using the decrypt web application.

### Contribution
Those who want to contribute in this project, go through the [CONTRIBUTION_KWOC.md](https://github.com/AdarshKumar712/MathsDep_Website/blob/kwoc/CONTRIBUTION_KWOC.md).

# Other details
This repository make use of the boootstrap templates. With the help oh Php,Html,Javascript, it tries to create a user-friendly interface between client(faculty/student) and the database.  


