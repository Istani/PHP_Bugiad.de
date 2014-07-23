<?php

    $ordner = 'upload/artikel_bilder';
    $alledateien = scandir($ordner);
    foreach ($alledateien as $datei) {
	if ($datei != "." && $datei != "..") {
	    @rename($ordner . "/" . $datei, $ordner . "/" . strtolower($datei));
	    $datei = strtolower($datei);
	    $dateiinfo = pathinfo($ordner . "/" . $datei);
	    if ($dateiinfo['extension'] == "jpg" || $dateiinfo['extension'] == "gif" || $dateiinfo['extension'] == "png") {
		$artikel = $database->sql_select("sta_artikel", "art_nr", "art_nr like '%" . $dateiinfo['filename'] . "%'");
		foreach ($artikel as $key => $value) {
		    $import_array["art_nr"] = trim($value['art_nr']);
		    $import_array["art_bild"] = trim($ordner . "/" . $datei);
		    $database->sql_insert_update("sta_artikel", $import_array);
		    echo $import_array["art_nr"] . " = " . $import_array["art_bild"] . '<br>';
		}
	    }
	}
    }
?>