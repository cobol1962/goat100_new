<?php

    include($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
    $res = [];
    $qvr = "select * from `cards`  where `id`='" . $_GET["id"] . "' limit 1";

    $result = $mysqli->query($qvr);
    $rw = mysqli_fetch_assoc($result);
    $doc = new DOMDocument();
    $doc->loadHTML($rw["html"]);
    $items = $doc->getElementsByTagName('img');
   $it = $doc->getElementsByTagName('p');
   $desc = "";
   foreach ($it as $t)
  {

    $desc .= ($t->nodeValue != "") ? $t->nodeValue . " " : "";

  }
 ?>
<!DOCTYPE html>
<head>
  <title>GOAT100 - <?=$rw["name"]?></title>
  <meta property="og:title" content="GOAT100 - <?=$rw["name"]?>">
  <meta property="og:description" content="<?=$desc?>">
  <meta property="og:image" content="https://goat100.com/<?=$items[0]->getAttribute("src")?>?<?=time()?>">
  <meta property="og:url" content="https://goat100.com/share.php?id=<?=$_GET["id"]?>&amp;artsearch=<?=$_GET["artsearch"]?>">
  <meta property="og:image:width" content="300"/>
  <meta property="og:image:height" content="330"/>

  <meta name="twitter:title" content="GOAT100 - <?=$rw["name"]?>">
  <meta name="twitter:description" content="<?=$desc?>">
  <meta name="twitter:image" content="https://goat100.com/<?=$items[0]->getAttribute("src")?>">
  <meta name="twitter:card" content="summary_large_image">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
  <img src="https://goat100.com/<?=$items[0]->getAttribute("src")?>?<?=time()?>" />
  <br />
  <p><?=$desc?></p>
</body>
<script type="text/javascript">
  $(document).ready(function() {
    window.location.href = "http://goat100.com/#<?=$_GET["artsearch"]?>";
  });
</script>
</html>
<?php  ?>
