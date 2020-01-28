<?php
// ini_set('display_errors', "On");

include("p0functions.php");

include("p0db.php");

$sql = "SELECT * FROM portf where portf0del = 0 AND portf0approved is not null ORDER BY portf0created DESC;";

$stmt = $pdo->prepare($sql);

$status = $stmt->execute();

if($status == false) {
  $error = $stmt->errorInfo();
  exit("SQLエラー: ".$error[2]);
} else {
  while($r[] = $stmt->fetch(PDO::FETCH_ASSOC));
  $json = json_encode($r, JSON_UNESCAPED_UNICODE);
}

header('Content-type: application/json');
echo $json;