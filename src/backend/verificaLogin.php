<?php
    session_start();
    
    if (!$_SESSION['email']) {
        header('Location: ./login.php');
        exit();
    }
?>