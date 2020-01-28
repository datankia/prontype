<?php

$host = "mysql57.auneeds.sakura.ne.jp";
$dbName = "auneeds_prontype";
$user = "auneeds";
$password = "1qaz2wsx";
$dsn = "mysql:host={$host};dbname={$dbName};charser=utf8";

try {
  $pdo = new PDO($dsn, $user, $password);
  // $pdo->query('SET NAMES utf8;');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "データベース{$dbName}に接続しました。";
} catch (PDOException $e) {
  exit("DBエラー: ".$e->getMessage());
}