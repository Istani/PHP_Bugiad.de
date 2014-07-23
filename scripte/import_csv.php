<?php

    //UVP

    $datei_name = "upload/import_csv/uvp.csv";
    if (file_exists($datei_name)) {
	$first_line = true;
	$datei = fopen($datei_name, "r");
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
	unlink($datei_name);
	unset($spalten);
	unset($inhalt);
	unset($import_array);
    }

    //Artikel Gruppen (Neu Import)
    $datei_name = "upload/import_csv/artikel_gruppen.csv";
    if (file_exists($datei_name)) {
	//$database->sql_delete("sta_texte", "art='artikel_gruppe'");
	$first_line = true;
	$datei = fopen($datei_name, "r");
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
		    $database->sql_insert_update("sta_texte", $import_array);
		}
	    }
	}
	fclose($datei);
	unlink($datei_name);
	unset($spalten);
	unset($inhalt);
	unset($import_array);
    }
    echo 'Import CSV OK<br>';
?>