<?php
if (isset($_GET["fbclid"])) {

  header('Location: ' . "http://goat100.com/#" . $_GET["artsearch"]);
}
include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
$res = [];
$qvr = "select * from `cards`  where `id`='" . $_GET["id"] . "' limit 1";

$result = $mysqli->query($qvr);
$rw = mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<head>
</head>
</head>
<head>
  <title>GOAT100 - <?=$rw["name"]?></title>
</head>
<body>
  <?=$rw["html"]?>
</body>
</html>
