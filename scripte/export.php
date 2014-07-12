<?php

    //$settings['export_csv']['trennzeichen']

    $tmp_tabellen = $database->show_tables();
    foreach ($tmp_tabellen as $tabellen_key => $tabellen_value) {
	$tmp_inhalt = $database->sql_select($tabellen_value, "*", "", true);
	$first_line = true;
	$datei = fopen("export/" . $tabellen_value . ".csv", "w+");
	foreach ($tmp_inhalt as $inhalt_key => $inhalt_value) {
	    $tmp_ausgabe = "";
	    if ($first_line) {
		$tmp_kopfzeile = $inhalt_value;
		foreach ($tmp_kopfzeile as $tmp_key => $tmp_value) {
		    if ($tmp_ausgabe == "") {
			$tmp_ausgabe = $tmp_key;
		    } else {
			$tmp_ausgabe = $tmp_ausgabe . $settings['export_csv']['trennzeichen'] . $tmp_key;
		    }
		}
		fwrite($datei, $tmp_ausgabe . "\r\n");
		$tmp_ausgabe = "";
		$first_line = false;
	    }
	    foreach ($inhalt_value as $zeile_key => $zeile_value) {
		if ($tmp_ausgabe == "") {
		    $tmp_ausgabe = $zeile_value;
		} else {
		    $tmp_ausgabe = $tmp_ausgabe . $settings['export_csv']['trennzeichen'] . $zeile_value;
		}
	    }
	    fwrite($datei, $tmp_ausgabe . "\r\n");
	    $tmp_ausgabe = "";
	}
	fclose($datei);
    }
    echo 'Export OK';
?>
