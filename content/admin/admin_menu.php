<?php
    $class_button = "class='ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only'";
    $class_drop = "class='ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-active'";
?>
<ul id="menu">
    <?php
	$new_get['action'] = "adm_user";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '"><li ' . $class_button . '>Benutzer</li></a>&nbsp;';
    ?>
    <?php
	$new_get['action'] = "adm_text";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '"><li ' . $class_button . '>Texte</li></a>&nbsp;';
    ?>
</ul>
<br>