<?php

function h($s) {
  return htmlspecialchars($s,ENT_QUOTES,"UTF-8");
}

function chkssid() {
  if(!isset($_SESSION["ssid"]) || $_SESSION["ssid"] != session_id()) {
    header("Location: index.php");
    exit("ログインエラー");
  } else {
    session_regenerate_id(true);
    $_SESSION["ssid"] = session_id();
  }
}