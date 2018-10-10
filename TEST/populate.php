<?php
  require_once "BoardDao.php";
  $dao = new BoardDao();

  foreach (file('/home/test01/www/FILE/rows.txt') as $line){
    $line = trim($line);
    $value = explode('|', $line);
    $dao->insertMsg($value[1],$value[0],$value[2]);
  }
?>
