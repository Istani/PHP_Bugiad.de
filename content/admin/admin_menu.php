'<div class="ui-tabs ui-widget ui-corner-all grau artikelgruppen"><b>Admin:</b>&nbsp;
    <?php
	$class_button = "class='ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only'";
	$class_drop = "class='ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-active'";

	$i = 9;
	$new_get['action'] = "adm_firmen";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '">' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</a> &nbsp;';
    ?>
    <?php
	$i = 1;
	$new_get['action'] = "adm_user";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '">' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</a> &nbsp;';
    ?>
    <?php
	$i = 2;
	$new_get['action'] = "adm_text";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '">' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</a> &nbsp;';
    ?>
    <?php
	$i = 3;
	$new_get['action'] = "adm_artikel";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '">' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</a> &nbsp;';
    ?>
    <?php
	$i = 4;
	$new_get['action'] = "adm_produktgruppen";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '">' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</a> &nbsp;';
    ?>
    <?php
	$i = 5;
	$new_get['action'] = "adm_artikellayout";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '">' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</a> &nbsp;';
    ?>
    <?php
	$i = 6;
	$new_get['action'] = "adm_preise";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '">' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</a> &nbsp;';
    ?>
    <?php
	$i = 7;
	$new_get['action'] = "adm_update";
	$get_string = generate_new_get($new_get, $_GET);
	unset($new_get);
	echo '<a href="' . $get_string . '">' . text("Adm_Menue", $i, $_SESSION['lang'], $database) . '</a> &nbsp;';
    ?>
</div><br>