<?php

    if (!isset($_SESSION['KdNr'])) {
	$get_string = generate_get($_GET);
	echo '<form method="POST" action="' . $get_string . '">';
	echo '<table>';
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


	echo '</form>';
    }
?>
