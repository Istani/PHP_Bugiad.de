<?php

    function text($text_art, $text_lfd, $sprache, $datenbank, $ulfd = 0) {
	// Um Datenbank abfragen zu vermeiden könnte man diese natürlich noch in eine Globale Variabel schreiben (Blöd zum kontrollieren ob Texte gesetzt sind)
	$text_array = $datenbank->sql_select("sta_texte", $sprache, "art='" . $text_art . "' AND lfd='" . $text_lfd . "' AND ulfd='" . $ulfd . "'", true);
	if ($text_array[0][$sprache] == "") { // Falls es keinen Text gibt
	    $exit['art'] = $text_art;
	    $exit['lfd'] = $text_lfd;
	    $exit[$sprache] = "Texterror&nbsp;(" . $text_art . "[" . $text_lfd . "]/" . $sprache . ")";
	    $datenbank->sql_insert_update("sta_texte", $exit);
	    return $exit[$sprache];
	} else {
	    return $text_array[0][$sprache];
	}
    }

?>