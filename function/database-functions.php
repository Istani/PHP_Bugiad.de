<?php

    function text($text_art, $text_lfd, $sprache, $datenbank) {
	// Um Datenbank abfragen zu vermeiden könnte man diese natürlich noch in eine Globale Variabel schreiben (Blöd zum kontrollieren ob Texte gesetzt sind)
	$text_array = $datenbank->sql_select("sta_texte", $sprache, "art='" . $text_art . "' AND lfd='" . $text_lfd . "'");
	if (isset($text_array[0])) {
	    if ($text_array[0][$sprache] == "") { // Falls es z.b. einen DE Text gibt aber keinen ENG
		$exit['art'] = $text_art;
		$exit['lfd'] = $text_lfd;
		$exit[$sprache] = "Texterror&nbsp;(" . $text_art . "/" . $sprache . ")";
		$datenbank->sql_insert_update("sta_texte", $exit);
		return $exit[$sprache];
	    } else {
		return $text_array[0][$sprache];
	    }
	} else { // Falls es keinen Text gibt
	    $text = "";
	    if ($sprache != "DE") {
		$text = text($text_art, $text_lfd, "DE", $datenbank);
	    }
	    $exit['art'] = $text_art;
	    $exit['lfd'] = $text_lfd;
	    $exit[$sprache] = "Texterror&nbsp;(" . $text_art . "/" . $sprache . ")";
	    $datenbank->sql_insert_update("sta_texte", $exit);
	    return $exit[$sprache];
	}
    }

?>