<?php
// ini_set('display_errors', "On");

include("p0functions.php");

$portf0desc = h($_POST["portf0desc"]);
$portf0func = h($_POST["portf0func"]);
$portf0tech = h($_POST["portf0tech"]);
$portf0url = h($_POST["portf0url"]);
$portf1img = h($_POST["portf1img"]);
$portf2img = h($_POST["portf3img"]);
$portf3img = h($_POST["portf3img"]);

include("p0db.php");

$sql = "SELECT * FROM portf WHERE portf0url = :portf0url";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':portf0url', $portf0url, PDO::PARAM_STR);
$status = $stmt->execute();
$r = $stmt->fetch();

if($r == true) {
  unset($pdo);
  echo "dup";
  exit();
} 

$sql = "INSERT INTO portf (portf0desc, portf0func, portf0tech, portf0url, portf1img, portf2img, portf3img, portf0created) VALUES (:portf0desc, :portf0func, :portf0tech, :portf0url, :portf1img, :portf2img, :portf3img, sysdate());";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':portf0desc', $portf0desc, PDO::PARAM_STR);
$stmt->bindValue(':portf0func', $portf0func, PDO::PARAM_STR);
$stmt->bindValue(':portf0tech', $portf0tech, PDO::PARAM_STR);
$stmt->bindValue(':portf0url', $portf0url, PDO::PARAM_STR);
$stmt->bindValue(':portf1img', $portf1img, PDO::PARAM_STR);
$stmt->bindValue(':portf2img', $portf2img, PDO::PARAM_STR);
$stmt->bindValue(':portf3img', $portf3img, PDO::PARAM_STR);

$status = $stmt->execute();

if($status == false) {
  unset($pdo);
  $error = $stmt->errorInfo();
  exit("SQLエラー: ".$error[2]);
} else {
  unset($pdo);
  exit();
}