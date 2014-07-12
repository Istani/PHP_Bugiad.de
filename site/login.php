<?php

    if (isset($_POST['submit_login'])) {
	$login_array = $database->sql_select("sta_user", "user_id, user_status", "(user_email='" . $_POST['user_login'] . "' OR user_login='" . $_POST['user_login'] . "') AND user_password='" . pwd_code($_POST['user_pass']) . "'", false);
	if (isset($login_array[0]['user_id'])) {
	    if ($login_array[0]['user_status'] > 0) {
		$_SESSION['User_Id'] = $login_array[0]['user_id'];
		$_SESSION['User_Status'] = $login_array[0]['user_status'];
		$login_array[0]['user_lastlogin'] = time();
		$database->sql_insert_update("sta_user", $login_array[0]);
	    } else {
		$fehler_meldung[] = "Login wurde noch nicht freigeschaltet!";
	    }
	} else {
	    $fehler_meldung[] = "Fehlerhafter Login!";
	}
    }
    if ($_GET['action'] == "logout") {
	unset($_SESSION['User_Id']);
	$_SESSION['User_Status'] = 0;
    }
    if (!isset($_SESSION['User_Id'])) {
	$get_string = generate_get($_GET);
	if ($_GET['action'] == "logout") {
	    $new_get['action'] = "webshop";
	    $get_string = generate_new_get($new_get, $_GET);
	    unset($new_get);
	}

	echo '<form method="POST" action="' . $get_string . '">';
	echo '<table width="100%">';
	echo '<tr>';
	echo '<td>';
	echo text("Login", 1, $_SESSION['lang'], $database) . "&nbsp;";
	echo '</td>';
	echo '<td>';
	echo '<input type="text" name="user_login">';
	echo '</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>';
	echo text("Login", 2, $_SESSION['lang'], $database) . "&nbsp;";
	echo '</td>';
	echo '<td>';
	echo '<input type="password" name="user_pass">';
	echo '</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>';
	$new_get['action'] = "get_konto";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '">' . text("New_Account", 0, $_SESSION['lang'], $database) . "</a>&nbsp;<br>";
	$new_get['action'] = "get_password";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '">' . text("New_Password", 0, $_SESSION['lang'], $database) . "</a>&nbsp;";
	echo '</td>';
	echo '<td>';
	echo '<input type="submit" name="submit_login" value="' . text("Login", 0, $_SESSION['lang'], $database) . '">';
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	echo '</form>';
    } else {
	echo '<table width="100%">';
	echo '<tr>';
	echo '<td>';
	$new_get['action'] = "my_konto";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '">' . text("My_Account", 0, $_SESSION['lang'], $database) . "</a>&nbsp;<br>";
	$new_get['action'] = "my_bestellung";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '">' . text("My_Order", 0, $_SESSION['lang'], $database) . "</a>&nbsp;<br>";
	echo '<br>';
	$new_get['action'] = "logout";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '">' . text("Login", 99, $_SESSION['lang'], $database) . "</a>&nbsp;<br>";
	echo '</td>';
	echo '</tr>';
	echo '</table>';
    }
?>
