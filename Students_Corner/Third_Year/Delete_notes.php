<?php
    
    $dir = $_GET['dir'];
    unlink($dir);
    echo "<script>window.location.assign('./Lect.php');</script>";

?>