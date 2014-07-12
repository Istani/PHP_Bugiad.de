<?php

    $sprachen_array = $database->sql_select("sta_texte", "*", "true=false", true);
    unset($sprachen_array[0]["art"]);
    unset($sprachen_array[0]["lfd"]);
    echo text("Sprachwahl", 0, $_SESSION['lang'], $database) . "&nbsp;";
    foreach ($sprachen_array[0] as $key => $value) {
	if ($_SESSION['lang'] == $key) {
	    $erw = "sprache_auswahl";
	} else {
	    $erw = "";
	}
	$_GET['sprache'] = $key;
	$get_string = generate_get_string($_GET);
	unset($_GET['sprache']);
	echo '<a href="' . $get_string . '" class="' . $erw . '"><img src="img/flaggen/' . $key . '.png"></a>&nbsp;';
    }
?>