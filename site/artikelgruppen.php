<?php

    $agruppen_array = $database->sql_select("sta_texte", "lfd", "art='artikel_gruppe'");
    foreach ($agruppen_array as $key => $value) {
	echo text("artikel_gruppe", $key, $_SESSION['lang'], $database) . "&nbsp;<br>"; // Nochmal die Abfrage, damit fehlende Texte hinzugefügt werden
    }
?>