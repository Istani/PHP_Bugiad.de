<?php

    $alle_texte = $database->sql_select("sta_texte", "*");
    $first_line = true;
    foreach ($alle_texte as $key => $value) {
	if ($first_line) {
	    echo '<table class="dataTable" width="100%">';
	    echo '<thead>';
	    echo '<tr>';
	    foreach ($value as $ukey => $uvalue) {
		echo '<th>' . $ukey . '&nbsp;&nbsp;&nbsp;&nbsp;</th>';
	    }
	    echo '</tr>';
	    echo '</thead>';
	    echo '<tbody>';
	    $first_line = false;
	}
	echo '<tr>';
	foreach ($value as $ukey => $uvalue) {
	    if ($ukey != "art" && $ukey != "lfd" && $ukey != "ulfd") {
		echo '<td><img src="img/icons/edit.png">' . $uvalue . '</td>';
	    } else {
		echo '<td>' . $uvalue . '</td>';
	    }
	}
	echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '<script></script>';
?>

