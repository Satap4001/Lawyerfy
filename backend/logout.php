<?php 
    require_once('bd.php');
    session_start();

    if (isset($_POST['logout'])) {
        logout();
    }
?>