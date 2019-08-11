<?php
	session_start();
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
	$qvr = "select * from `cards_images` where `card_id`='-1'";
	$rez = $mysqli->query($qvr);
	while ($row = mysqli_fetch_assoc($rez)) {
		unlink( $_SERVER["DOCUMENT_ROOT"] . $row["image"] );
	}
	$qvr = "delete  from `cards_images` where `card_id`='-1'";
	$rez = $mysqli->query($qvr);
?>
