<?php
// ***************************
// 接続
// ***************************
$db = null;

try {
  $db = new PDO( "sqlite:../lightbox.sqlite3" );
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
}
catch (PDOException $ex) {
  print $ex->getMessage();
}
