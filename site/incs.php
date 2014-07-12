<?php

    if (isset($_GET['action'])) {
	switch ($_GET['action']) {
	    case 'logout':
		$incpage = "site/logout.php";
		break;
	    default:
		$incpage = "content/welcome.php";
	}
    } else {
	$incpage = "content/welcome.php";
    }
?>