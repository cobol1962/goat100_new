<?php
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
  $i = 0;
  $qvr = "SELECT `id`,`name` FROM `cards`";
  $rez = $mysqli->query($qvr);
  $i = 1;
  $rz = [];
  while ($row = mysqli_fetch_assoc($rez)) {
		 $rz[] = $row;
  }
  echo json_encode($rz);
?>
