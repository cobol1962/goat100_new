<?php
	session_start();

	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");

	$uploaddir = $_SERVER["DOCUMENT_ROOT"] . "/card_images";
	$path_parts = pathinfo($_FILES["file"]["name"]);
	$extension = $path_parts['extension'];
	$nm = time();
	$cid = "img_";

	$uploadfile = $uploaddir . "/" . $cid . $nm . "." . $extension;
	$ufn = "/card_images/"  . $cid . $nm . "." . $extension;
	if (!file_exists($uploaddir)) {
		mkdir($uploaddir, 0777, true);
	}
	 $exif = exif_read_data($_FILES['file']['tmp_name']);
	 $saved = "0";
	if (!empty($exif['Orientation'])) {
        $image = imagecreatefromjpeg($_FILES['file']['tmp_name']);
        switch ($exif['Orientation']) {
            case 3:
                $image = imagerotate($image, 180, 0);
                break;

            case 6:
                $image = imagerotate($image, -90, 0);
                break;

            case 8:
                $image = imagerotate($image, 90, 0);
                break;
        }

        imagejpeg($image, $uploadfile, 90);
		$saved = "1";
    }
	if ($saved == "0") {
		move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
	}
	//if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
	$qvr = "insert into `cards_images` (`card_id`,`image`) Values ('" . $_POST["card_id"] . "','" . $ufn . "')";

	$r = $mysqli->query($qvr);
	echo  $ufn . "#" . $mysqli->insert_id;
	/*} else {
		echo "Error";
	}*/


?>
