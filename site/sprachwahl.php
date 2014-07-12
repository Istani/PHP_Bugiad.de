<?php

    $sprachen_array = $database->sql_select("sta_texte", "*", "true=false", true);
    unset($sprachen_array[0]["art"]);
    unset($sprachen_array[0]["lfd"]);
    echo text("Sprachwahl", 0, $_SESSION['lang'], $database) . "&nbsp;";
    foreach ($sprachen_array[0] as $key => $value) {
	echo '<a href="?sprache=' . $key . '"><img src="img/flaggen/' . $key . '.png"></a>&nbsp;';
    }
?>