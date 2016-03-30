<?php

function connect($use_db) {
	$link = mysqli_connect($use_db['host'], $use_db['user'], $use_db['pass']);
	mysqli_select_db($use_db['db'], $link);
	return $link;
}



?>