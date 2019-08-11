 <?php
 $data = json_decode($_POST["gg"]);
 include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
 $qvr = "select * from users where `googleID`='" . $data->uid . "'";
 $result =  $mysqli->query($qvr, $connect);
 if ($result->num_rows == 0) {
	 $qvr = "insert into users (`googleID`,`FirstLastName`,`avatar`,`nick`,`email`) Values ('" . $data->uid . "','" . $data->displayName . "','" . $data->photoURL . "','" . $data->displayName . "','" . $data->email . "')";
	 $result = $mysqli->query($qvr, $connect);
	 if (!$result) {
		$message  = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' . $query;
		die($message);
	}
	echo  json_encode(["result" => mysql_insert_id($connect)]);
 } else {
	 echo json_encode(["result" => "error#User already registered using this Google account. Please login."]);
 }
 ?>
