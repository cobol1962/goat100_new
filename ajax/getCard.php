<?php
	session_start();

	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
	$res = [];
	$qvr = "select * from `cards`  where `id`='" . $_POST["id"] . "' limit 1";

	$result = $mysqli->query($qvr);
	$rw = mysqli_fetch_assoc($result);
	$r = [];
	$r["category"] = $rw["category"];
	$r["name"] = $rw["name"];
	$r["spotify"] = $rw["spotify"];
	$r["apple"] = $rw["apple"];
	$r["OverallVotes"] = $rw["OverallVotes"];
	$r["LitRank"] = $rw["LitRank"];
	$r["html"] = base64_encode($rw["html"]);

	echo json_encode($r);
?>
