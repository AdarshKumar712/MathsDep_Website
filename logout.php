<?php
	session_start();
	setcookie(session_name(),'',100); //Kill the cookie data
	$_SESSION = array();//Unset array of Session
	session_unset();
	session_destroy();
	echo "<script>window.location.assign('./login.php?msg=".urlencode(base64_encode('You have been Logged out successfully'))."');</script>";

?>