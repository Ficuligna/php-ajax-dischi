<?php
header("Content-Type: application/json");
require_once "db.php";
echo json_encode($db);

// $filtro = [];
// if ($_GET["artist"] == "All") {
//   echo json_encode($db);
// }else {
//   foreach ($db as $post) {
//     if ($post["author"] == $_GET["artist"]) {
//       $filtro[]= $post;
//     }
//   }
//   echo json_encode($filtro);
// }
 ?>
