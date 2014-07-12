<?php

    session_start();
    if (!isset($_SESSION['lang'])) {
	$_SESSION['lang'] = "DE";
    }
    if (isset($_GET['sprache'])) {
	$_SESSION['lang'] = $_GET['sprache'];
	unset($_GET['sprache']);
    }

    unset($fehler_meldung);

    // Böse Zeichen entfernen
    foreach ($_COOKIE as $key => $value) {
	if (get_magic_quotes_gpc()) {
	    $_COOKIE[$key] = stripslashes($value);
	}
	$_COOKIE[$key] = mysql_real_escape_string($value);
    }
    foreach ($_POST as $key => $value) {
	if (get_magic_quotes_gpc()) {
	    $_POST[$key] = stripslashes($value);
	}
	$_POST[$key] = mysql_real_escape_string($value);
    }
    foreach ($_GET as $key => $value) {
	if (get_magic_quotes_gpc()) {
	    $_GET[$key] = stripslashes($value);
	}
	$_GET[$key] = mysql_real_escape_string($value);
    }
?>