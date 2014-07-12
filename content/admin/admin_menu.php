<?php
    $class_button = "class='ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only'";
    $class_drop = "class='ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-active'";
    $i = 0;
?>
<ul id="menu">
    <?php
	$i++;
	$new_get['action'] = "adm_user";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '"><li ' . $class_button . '>' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</li></a>&nbsp;';
    ?>
    <?php
	$i++;
	$new_get['action'] = "adm_text";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '"><li ' . $class_button . '>' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</li></a>&nbsp;';
    ?>
    <?php
	$i++;
	$new_get['action'] = "adm_artikel";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '"><li ' . $class_button . '>' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</li></a>&nbsp;';
    ?>
    <?php
	$i++;
	$new_get['action'] = "adm_produktgruppen";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '"><li ' . $class_button . '>' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</li></a>&nbsp;';
    ?>
    <?php
	$i++;
	$new_get['action'] = "adm_artikellayout";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '"><li ' . $class_button . '>' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</li></a>&nbsp;';
    ?>
    <?php
	$i++;
	$new_get['action'] = "adm_preise";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '"><li ' . $class_button . '>' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</li></a>&nbsp;';
    ?>
</ul>
<br><br>