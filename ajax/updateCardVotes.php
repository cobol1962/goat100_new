<?php
	session_start();
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
  $sql = "update cards set OverallVotes = OverallVotes + " . $_POST["vote"] . " WHERE id = '" . $_POST["cardid"] . "'";
  $mysqli->query($sql);
  echo $sql;
?>
