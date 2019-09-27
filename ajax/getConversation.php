<?php
	session_start();
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
  foreach ($_POST as $k => $v) {
    $$k = $v;
  }
  $sql = "select * from messages where cardid='$cardid' order by date ASC limit 100";

  $res = [];
  $res["records"] = [];
  $r = mysqli_query($mysqli,$sql);
  if (!$r) {
    $res["status"] = "fail";
    $res["error"] = mysqli_error($mysqli);
    $res["sql"] = $sql;
  } else {
    $res["sql"] = $sql;
    $res["status"] = "ok";
    while ($row = mysqli_fetch_assoc($r)) {
      $res["records"][] = $row;
    }
  }
  echo json_encode($res);
?>
