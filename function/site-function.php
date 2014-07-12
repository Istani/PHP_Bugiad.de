<?php

    function generate_get_string($var_get) {
	$return_string = "";
	if (is_array($var_get)) {
	    foreach ($var_get as $key => $value) {
		if ($return_string == "") {
		    $return_string = "?" . $key . "=" . $value;
		} else {
		    $return_string = "&" . $key . "=" . $value;
		}
	    }
	}
	return $return_string;
    }
?>