<?php
    
    $dir = $_GET['dir'];
    unlink($dir);
    echo "<script>window.location.assign('./Dash_announce.php');</script>";

?>