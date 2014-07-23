<?php

    function generate_get($var_get) {
	$return_string = "";
	if (is_array($var_get)) {
	    foreach ($var_get as $key => $value) {
		if ($return_string == "") {
		    $return_string = "?" . $key . "=" . $value;
		} else {
		    $return_string = $return_string . "&" . $key . "=" . $value;
		}
	    }
	}
	return $return_string;
    }

    function generate_new_get($new_array, $var_get) {
	foreach ($new_array as $key => $value) {
	    $var_get[$key] = $value;
	}
	return generate_get($var_get);
    }

    function pwd_code($pwd) {
	// Password Codierung - Lokal noch keine
	$return = $pwd;
	return $return;
    }

    function get_version() {
	$anzahl = count(file('README'));
	return "0." . $anzahl;
    }

?>