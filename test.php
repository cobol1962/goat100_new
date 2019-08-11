<?php
	$txt = time() . " --- " . $_SERVER["HTTP_REFERER"];
	echo $txt;
	$myfile = file_put_contents('logs.txt', $txt . "\n" , FILE_APPEND | LOCK_EX);
?>