 <?php

 include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
 $qvr = "select * from users where `facebookID`='" . $_POST["fbid"] . "' limit 1";

 $result =  $mysqli->query($qvr, $connect);
 if ($result->num_rows != 0) {
	$row = mysqli_fetch_assoc($result);
	echo  json_encode($row);
 } else {
	 echo json_encode([]);
 }
 ?>
