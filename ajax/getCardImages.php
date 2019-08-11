<?php
	session_start();

	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
	$res = [];
	$qvr = "select * from  `cards_images`  where `card_id`='" . $_POST["card_id"] . "' order by `id`";

	$result = $mysqli->query($qvr);

	while ($row = mysqli_fetch_assoc($result)) {
		$res[count($res)] = $row;
	}

	echo json_encode($res);
?>
