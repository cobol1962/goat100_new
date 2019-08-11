<?php
	session_start();
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");

	$qvr = "select * from `categories` order by `id`";
	$res = $mysqli->query($qvr);

	$r = [];
	while ($row = mysqli_fetch_assoc($res)) {
		$r[count($r)] = ["value" => $row["name"], "label" => $row["name"]];
	}
	echo json_encode($r);
?>
