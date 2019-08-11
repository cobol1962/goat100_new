<?php
	session_start();
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
	$qvr = " update `cards` SET
	  `category`='" . $_POST["category"] . "',
	  `name`='" . $_POST["name"] . "',
		`spotify`='" . $_POST["spotify"] . "',
		`apple`='" . $_POST["apple"] . "',
	  `html`='" . base64_decode($_POST["html"]) . "',
	  `LitRank`='" . $_POST["LitRank"] . "',
	  `OverallVotes`='" . $_POST["OverallVotes"] . "' where `id`='" . $_POST["id"] . "'";
	  $mysqli->query($qvr);
	  echo $qvr;
?>
