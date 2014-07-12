<?php
    session_start();
    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang']="DE";
    }
    if (isset($_GET['sprache'])) {
        $_SESSION['lang']=$_GET['sprache'];
        unset($_GET['sprache']);
    }
?>