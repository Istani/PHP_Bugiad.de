<?php

    // Import der aus dem Webshop exportierten Dateien
    $tmp_tabellen = $database->show_tables();
    foreach ($tmp_tabellen as $tabellen_key => $tabellen_value) {
	if (file_exists("upload/import_webshop/" . $tabellen_value . ".csv")) {
	    $first_line = true;
	    $datei = fopen("upload/import_webshop/" . $tabellen_value . ".csv", "r");
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
			$database->sql_insert_update($tabellen_value, $import_array);
		    }
		}
	    }
	    fclose($datei);
	    unlink("upload/import_webshop/" . $tabellen_value . ".csv");
	    unset($spalten);
	    unset($inhalt);
	    unset($import_array);
	}
    }
    echo 'Import OK';
?>