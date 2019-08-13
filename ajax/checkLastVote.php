<?php
	session_start();
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
  $qvr = "select * from `votes` where `artistid`='" . $_POST["artistid"] . "' AND userid='" . $_POST["userid"] . "' ORDER By vote_time DESC LIMIT 1";
  $rez = $mysqli->query($qvr);

  if (mysqli_num_rows($rez) == 0) {
    echo "999999999";
  } else {
    $row = mysqli_fetch_assoc($rez);
  	echo  $row['vote_time'];
  }
?>
