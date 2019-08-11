<?php
	session_start();
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");

	$qvr = "select * from `users`  where `id`='" . $_POST["id"] . "'";
	$res = $mysqli->query($qvr);
	$r = mysqli_fetch_assoc($res);

	unlink($_SERVER["DOCUMENT_ROOT"] . $r["avatar"]);
	$image = str_replace(' ', '+', $_POST["header"]);
	$image = base64_decode($image);
	$image_name = "avatar_" . $_POST["id"] . '_' . time() . ".png";
	file_put_contents($_SERVER["DOCUMENT_ROOT"] . '/avatars/' . $image_name, $image);
	$qvr = "update  `users` set `avatar`='" . '/avatars/' . $image_name . "' where `id`='" . $_POST["id"] . "'";
	$res = $mysqli->query($qvr);
	echo  '/avatars/' . $image_name;
?>
