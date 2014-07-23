<?php
    include("site/init.php");
    include("function/_include.php");

    include("site/init_project.php");
    include("site/incs.php");
?>

<!DOCTYPE html>
<html>
    <head>
	<title>Bugiad.de</title>
	<meta http-equiv="content-type" content="text7html; charset=isso-8859-1">
	<meta name="robots" content="INDEX, FOLLOW">
	<!--- Verschiedene Meta Werte !--->
	<meta name="description" content="Bugiad - Fahrzeugteile in Neuwied, Ersatzteile, OE-Teile">
	<meta name="keywords" content="gasfeder, gasfedern, l?¼fterkupplungen, skoda, vag">
	<meta name="author" content="Sascha Kaufmann">
	<meta name="publisher" content="Bugiad">
	<meta name="copyright" content="Bugiad">
	<meta name="revosot-after" content="3 Days">
	<!--- JS/CSS Fremd !--->
	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.js"></script>
	<script type="text/javascript" src="js/jquery.flip.js"></script>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="css/custom-theme/jquery-ui-1.10.4.custom.css">
	<!--- Favicon, CSS, JS - Eigene !--->
	<link rel="shortcut icon" href="favicon.ico">
	<script type="text/javascript" src="js/scripts.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
	<div id="page-nav">
	    <table width="100%">
		<tr>
		    <td>
			<img src="img/logo.jpg" class="logo"><br>
			Version: <?php echo get_version(); ?>
		    </td>
		    <td>
			<?php include("site/nav.php"); ?>
		    </td>
		    <td class="text_rechts abstand_oben" width="300">
			<?php include("site/sprachwahl.php"); ?><br><br>
			<?php include("site/login.php"); ?>
		    </td>
		</tr>
	    </table>
	</div>
	<div id="inhalt">


