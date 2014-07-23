<?php

    $agruppen_array = $database->sql_select("sta_texte", "lfd", "art='artikel_gruppe' AND ulfd='0'");
    foreach ($agruppen_array as $key => $value) {
	echo '<div class="ui-tabs ui-widget ui-corner-all grau artikelgruppen" OnClick="jQuery(\'#AGruppe' . $value['lfd'] . '\').toggle();">';
	echo '' . text("artikel_gruppe", $value['lfd'], $_SESSION['lang'], $database) . "&nbsp;"; // Nochmal die Abfrage, damit fehlende Texte hinzugefügt werden
	echo '<div id="AGruppe' . $value['lfd'] . '">';
	$augruppen_array = $database->sql_select("sta_texte", "lfd,ulfd", "art='artikel_gruppe' AND lfd='" . $value['lfd'] . "' AND ulfd>0");
	foreach ($augruppen_array as $ukey => $uvalue) {
	    $new_get['ArtGruppe'] = $uvalue['lfd'];
	    $new_get['ArtUnterGruppe'] = $uvalue['ulfd'];
	    $get_string = generate_new_get($new_get, $_GET);
	    unset($new_get);
	    echo '<a href="' . $get_string . '">';
	    echo '<div class="ui-tabs ui-widget ui-corner-all blau artikeluntergruppen">';
	    echo '' . text("artikel_gruppe", $uvalue['lfd'], $_SESSION['lang'], $database, $uvalue['ulfd']) . "&nbsp;<br>";
	    echo '</div>';
	    echo '</a>';
	}
	echo '</div>';
	echo '<script>jQuery("#AGruppe' . $value['lfd'] . '").hide();</script>';
	unset($augruppen_array);
	unset($ukey);
	unset($uvalue);
	echo '</span>';
	echo '</div>';
    }

    unset($agruppen_array);
    unset($key);
    unset($value);
?>