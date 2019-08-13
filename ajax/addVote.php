<?php
	session_start();
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
  $sql = "insert into votes (userid, artistid, vote, vote_time) VALUES ('" .$_POST["userid"] . "','" . $_POST["artistid"] . "','" . $_POST["vote"] . "','" . $_POST["time_vote"] . "')";
  $mysqli->query($sql);
  echo $sql;
?>
