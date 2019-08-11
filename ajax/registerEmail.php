 <?php
 $data = json_decode($_POST["em"]);
 include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
 $qvr = "select * from users where `emailID`='" . $data->uid . "'";
 $result =  $mysqli->query($qvr, $connect);
 if ($result->num_rows == 0) {
	 $qvr = "insert into users (`emailID`,`email`,`nick`) Values ('" . $data->email . "','" . $data->email . "','" . $data->email . "')";

	 $result = $mysqli->query($qvr, $connect);
	 if (!$result) {
		$message  = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' . $qvr;
		die($message);
	}
	$qvr = "select * from users where `id`='" . mysql_insert_id($connect) . "' LIMIT 1";
	$result = $mysqli->query($qvr, $connect);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);

 } else {
	$qvr = "select * from users where `emailID`='" . $data->email . "' LIMIT 1";

	$result = $mysqli->query($qvr, $connect);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);
 }
 ?>
