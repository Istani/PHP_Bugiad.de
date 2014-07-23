<?php

    //UVP
    $first_line = true;
    $datei = fopen("upload/import_csv/uvp.csv", "r");
    while (!feof($datei)) {
	$line = fgets($datei);
	if ($first_line) {
	    $spalten = explode($settings['export_csv']['trennzeichen'], $line);
	    $first_line = false;
	} else {
	    $inhalt = explode($settings['export_csv']['trennzeichen'], $line);
	    if (trim($line) != "") {
		foreach ($inhalt as $key => $value) {
		    $import_array[trim($spalten[$key])] = trim($inhalt[$key]);
		}
		if (isset($import_array["art_uvp"])) {
		    $import_array["art_uvp"] = str_replace(",", ".", $import_array["art_uvp"]);
		}
		$database->sql_insert_update("sta_artikel", $import_array);
	    }
	}
    }
    fclose($datei);
?>