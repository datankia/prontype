<?php
ini_set('display_errors', "On");

include("p0functions.php");
// echo $_FILES['postimg']['tmp_name']."<br>";
$userhash = $_POST["userhash"];
$dataid= h($_POST["dataid"]);
$postimg = h($_FILES["postimg"]["name"]);
// $postimg = mb_convert_encoding($postimg, "SJIS", "AUTO");

$path = './needsimg/';
$ext = mb_strtolower(substr($postimg, strrpos($postimg, '.') + 1));

$fname = $userhash . $dataid . "." . $ext;

echo "<br>";
echo $ext."<br>";
echo $userhash."<br>";
echo $dataid."<br>";
echo $postimg."<br>";
echo $fname."<br>";

	if(move_uploaded_file( $_FILES['postimg']['tmp_name'], $path.$fname) ) {
		echo 'アップロードされたファイルを保存しました。';
	} else {
		echo 'アップロードされたファイルの保存に失敗しました。';
  }

  // if(isset($_FILES["upfile"] ) && $_FILES["upfile"]["error"] == 0 ) {
  //   if(is_uploaded_file($_FILES['postimg']['tmp_name'])) {
  //     if(move_uploaded_file($_FILES['postimg']['tmp_name'], $path.$fname)) {
  //       chmod( $path.$fname, 0644 );
  //       $msg = "アップロードされたファイルを保存しました。";
  //       echo $msg;
  //     } else {
  //       $msg = "アップロードされたファイルの保存に失敗しました。";
  //       echo $msg;
  //     }
  //   } else {
  //     $msg = "Error:画像が送信されていません。";
  //     echo $msg;
  //   }
  // }
  
include("p0db.php");

$sql = "UPDATE needs0list SET fname = '" . $fname . "' WHERE id = $dataid AND userhash = '" . $userhash . "'";
// "UPDATE needs_user SET fname = 'hh.jpg' WHERE id = 23 AND userhash = '2b548d1410bac61e43b64180013b3b8c8f3d74080ce386bbb32b4336c9c2aad4'";
// "UPDATE needs_user SET fname = '" . $fname . "' WHERE id = $dataid AND userhash = '" . $userhash . "'";

echo "<br>";
var_dump($sql);

$stmt = $pdo->prepare($sql);

// $stmt->bindValue(':fname', $fname, PDO::PARAM_STR);
// $stmt->bindValue(':id', $dataid, PDO::PARAM_INT);
// $stmt->bindValue(':userhash', $dataid, PDO::PARAM_STR);

$status = $stmt->execute();

if($status == false){
  $err = $stmt->errorInfo();
  exit("SQLエラー: ".$err[2]);
} else {
  unset($pdo);
  echo "SQL OK";
  // header("Location: https://auneeds.com/main.php");
  header("Location: main.php");
  exit();
}