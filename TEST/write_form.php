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
<?php
  require_once("./../tools.php");

  session_start();
  if(isset($_SESSION["id"])){
	}else{
	  errorBack("로그인 후에 이용하실수 있습니다.");
	}

?>
</head>
<body>
<div class="container">
<h2>새 글쓰기 폼</h2>
<p>제목과 내용을 작성해주세요</p>
<form action="write.php" method="post">
  <div class="form-group">
    <label for="title">제목 :</label>
    <input type="text" class="form-control" id="title" name="title" >
  </div>
  <div class="form-group">
    <!-- 세션에서 사용자의 name을 받아온다. -->
    <label for="writer">작성자 :</label>
    <input type="text" class="form-control" id="writer" name="writer" value="<?= $_SESSION["name"]?>"disabled >
  </div>
  <div class="form-group">
    <label for="content">내용 :</label>
    <textarea class="form-control" rows="5" id="content" name="content" ></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <input type="button" class="btn btn-primary" onclick="location.href='board.php'" value="목록보기">
</form>
  </div>
</body>
</html>
