<?php
	session_start();
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
	$qvr = " insert into `cards` (`category`, `name`,  `spotify`, `apple`, `html`, `LitRank`, `OverallVotes`) VALUES (
	  '" . $_POST["category"] . "',
	  '" . $_POST["name"] . "',
		'" . $_POST["spotify"] . "',
		'" . $_POST["apple"] . "',
	  '" . base64_decode($_POST["html"]) . "',
	  '" . $_POST["LitRank"] . "',
	  '" . $_POST["OverallVotes"] . "')";
	  $mysqli->query($qvr);
	  echo  $mysqli->insert_id;
?>
