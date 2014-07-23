<?php

    $agruppen_array = $database->sql_select("sta_texte", "lfd", "art='artikel_gruppe' AND ulfd='0'");
    foreach ($agruppen_array as $key => $value) {
	echo '<span class="blau">' . text("artikel_gruppe", $value['lfd'], $_SESSION['lang'], $database) . "&nbsp;</span><br>"; // Nochmal die Abfrage, damit fehlende Texte hinzugefügt werden
	$augruppen_array = $database->sql_select("sta_texte", "lfd,ulfd", "art='artikel_gruppe' AND lfd='" . $value['lfd'] . "' AND ulfd>0");
	foreach ($augruppen_array as $ukey => $uvalue) {
	    echo '<span class="grau">' . text("artikel_gruppe", $uvalue['lfd'], $_SESSION['lang'], $database, $uvalue['ulfd']) . "&nbsp;</span><br>";
	}
	unset($augruppen_array);
	unset($ukey);
	unset($uvalue);
    }
    unset($agruppen_array);
    unset($key);
    unset($value);
?>