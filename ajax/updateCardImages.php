<?php
	session_start();
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");

	$qvr = "update   `cards_images` set `card_id`='" . $_POST["card_id"] . "' where `card_id`='-1'";
	$rez = $mysqli->query($qvr);
?>
