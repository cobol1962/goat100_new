 <?php
 $data = json_decode($_POST["tw"]);
 include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
 $qvr = "select * from users where `twitterID`='" . $data->uid . "'";
 $result =  $mysqli->query($qvr, $connect);
 if ($result->num_rows == 0) {
	 $qvr = "insert into users (`twitterID`,`FirstLastName`,`avatar`,`nick`) Values ('" . $data->uid . "','" . $data->displayName . "','" . $data->photoURL . "','" . $data->displayName . "')";
	 $result = $mysqli->query($qvr, $connect);
	 if (!$result) {
		$message  = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' . $query;
		die($message);
	}
	echo  json_encode(["result" => mysql_insert_id($connect)]);
 } else {
	 echo json_encode(["result" => "error#User already registered using this Twitter account. Please login."]);
 }
 ?>
