<?php
	session_start();
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
	$intos = [];
	$valos = [];

	foreach ($_POST as $key => $val) {
		if ($key != "id") {
			$intos[count($intos)] = "`" . $key . "`='" . $val . "'";
		}
	}
	$qvr = "update  `users`  set " . join(",",$intos) . " where `id`='" . $_POST["id"] . "'";

	$result = $mysqli->query($qvr);
	echo  $qvr;
?>
