<?php
  /*
    댓글삭제
    1. 삭제할 댓글의 작성자 id를 request로 받는다
    2. 세션의 id값과 댓글작성자의 id 값을 비교
      2.1 id가 같으면 댓글 삭제
      2.2 id가 다르면 errorBack"댓글 작성자가 아닙니다."
  */

  require_once("BoardDao.php");
  require_once("/home/test01/www/PHP/tools.php");

  session_start();

  $id = requestValue("id");
  $db = new BoardDao();

  if($_SESSION["id"] == $id){
    $db->deleteComment()
  }



?>
