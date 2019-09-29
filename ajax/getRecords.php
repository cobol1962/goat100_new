<?php
	include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
  $i = 0;
  $qvr = "SELECT `id`, `category`, `name`, `html`, `LitRank`, `OverallVotes`,`spotify`,`apple` FROM `cards` order by (`OverallVotes`) DESC";
  $rez = $mysqli->query($qvr);
  $i = 1;
  $rz = "";
  while ($row = mysqli_fetch_assoc($rez)) {
		  $c = explode(",", $row["category"]);
			$c1 = implode(" ", $c);
        $rz .= "<div class='col l4 m12 s12 gallery-item gallery-expand gallery-filter polygon " . $c1 . "' artsearch_m='" . str_replace(" ","_", $row["name"]) . "' artname='" . $row['name'] . "' cardid='" . $row["id"] . "' order='" . $i . "' category='" . $row['category'] . "'>
            <div class='gallery-curve-wrapper' pageid='" . $row['name'] . "'>"
                    . $row["html"] . "
                  </div>";
						if ($row["spotify"] != "") {
							$rz .= "<span spotify>" . $row["spotify"] . "</span>";
						}
						if ($row["apple"] != "") {
							$rz .= "<span apple>" . $row["apple"] . "</span>";
						}
            $rz .= "</div><!--endartist-->";
      $i++;
    }
    echo $rz;
?>
