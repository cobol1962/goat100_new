<?php
	session_start();

	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
	$res = [];
	$qvr = "delete from  `cards_images`  where `card_id`='" . $_POST["id"] . "'";
	$result = $mysqli->query($qvr);
	$qvr = "delete from  `cards`  where `id`='" . $_POST["id"] . "'";
	$result = $mysqli->query($qvr);

?>
