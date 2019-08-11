 <?php

 include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
 $qvr = "update users set `avatar`='' where `id`='" . $_POST["id"] . "'";
 $result =  $mysqli->query($qvr, $connect);

 ?>
