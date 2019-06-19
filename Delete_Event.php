<?php
    
    $dir = $_GET['dir'];
    unlink($dir);
    echo "<script>window.location.assign('./Events.php');</script>";

?>