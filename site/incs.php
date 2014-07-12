<?php

    if (isset($_GET['action'])) {
	switch ($_GET['action']) {
	    case 'logout':
		$incpage = "site/logout.php";
		break;
	    case 'my_konto':
		$incpage = "content/user/my_konto.php";
		break;
	    case 'my_bestellung':
		$incpage = "content/shop/my_bestellung.php";
		break;
	    case 'get_konto':
		$incpage = "content/user/get_konto.php";
		break;
	    case 'get_password':
		$incpage = "content/user/get_password.php";
		break;
	    case 'adm_export':
		$incpage = "scripte/export.php";
		break;
	    default:
		$incpage = "content/welcome.php";
	}
    } else {
	$incpage = "content/welcome.php";
	$_GET['action'] = "willkommen";
    }
?>