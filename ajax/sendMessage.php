<?php
	session_start();
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
  foreach ($_POST as $k => $v) {
    $$k = $v;
  }
  $sql = "insert into messages (cardid, date, userid, user,message) VALUES ('$cardid',NOW(),'$userid','$user', '$message')";

  $res = [];
  if (!mysqli_query($mysqli,$sql)) {
    $res["status"] = "fail";
    $res["error"] = mysqli_error($mysqli);
    $res["sql"] = $sql;
  } else {
      $res["sql"] = $sql;
    $res["status"] = "ok";
  }
  echo json_encode($res);
?>
