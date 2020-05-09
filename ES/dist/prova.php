
<?php

header("Content-Type: application/json");
require_once "db.php";

$filtro = [];
$ricerca = $_GET["artist"];
if ($ricerca == "All") {
  echo json_encode($db);
}else {
  foreach ($db as $post) {
    if ($post["author"] == $ricerca) {
      $filtro[]= $post;
    }
  }
  echo json_encode($filtro);
}

 ?>
