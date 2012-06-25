<?php

function str_isset_and_not_empty() {

	$ok = true;
	
	foreach(func_get_args() as $arg) {
		if ( !(isset($arg) && !empty($arg) ) ) {
		    return false;
		}
	}
	
	return true;
	
}

?>