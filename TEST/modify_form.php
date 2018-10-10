<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

  <?php
    require_once("BoardDao.php");
    require_once("/home/test01/www/PHP/tools.php");

    $db = new BoardDao();
    $num = requestValue("num");
    $row = $db->getMsg($num);

	/* 게시글 수정 폼
	  1. 세션의 유무 확인
	   1.1 세션의 id와 글작성자의id가 일치하는지 확인
	   1.2 일치하면 수정 폼 제공 아니면 errorBack("이 게시글의 작성자가 아닙니다.");
	  2. 세션이 없으면 errorBack("로그인이 필요합니다.")
	*/
	session_start();
	if(isset($_SESSION["id"])){
	  if($_SESSION["id"] != $row["writer"]){
	    errorBack("이 게시글의 작성자가 아닙니다.");
	  }
	}else{
	  errorBack("로그인이 필요합니다.");
	}
  ?>

<div class="container">
<h2>수정 폼</h2>
<p>수정해 주세요</p>
<form action="modify.php?num=<?=$num?>" method="post">
  <div class="form-group">
    <label for="title">제목 :</label>
    <input type="text" class="form-control" id="title" name="title" value="<?=$row["title"]?>">
  </div>
  <div class="form-group">
    <!-- 작성자는 수정 못하게 비활성화 -->
    <label for="writer">작성자 :</label>
    <input type="text" class="form-control" id="writer" name="writer" value="<?=$row["name"]?>" disabled>
  </div>
  <div class="form-group">
    <label for="content">내용 :</label>
    <textarea class="form-control" rows="5" id="content" name="content"><?=$row["content"]?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <input type="button" class="btn btn-primary" onclick="location.href='board.php'" value="목록보기">
</form>
  </div>
</body>
</html>
