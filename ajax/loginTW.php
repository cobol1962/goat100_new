 <?php

 include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
 $qvr = "select * from users where `twitterID`='" . $_POST["twid"] . "' limit 1";

 $result =  $mysqli->query($qvr, $connect);
 if (mysqli_num_rows($result) != 0) {
	$row = mysqli_fetch_assoc($result);
	echo  json_encode($row);
 } else {
	 echo json_encode([]);
 }
 ?>
