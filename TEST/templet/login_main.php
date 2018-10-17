<?php
  session_start();
  $id = isset($_SESSION["id"]) ? $_SESSION["id"] : "";
  $name = isset($_SESSION["name"]) ? $_SESSION["name"] : "";
  if($id){
?>
	<form action="logout.php">
	  <?= $name ?>님 로그인
	  <input type="submit" value="로그아웃">
	  <input type="button" value="회원정보 수정" onclick="location.href='update_form.php'">
	</form>
<?php
  }
?>

<div class="container">
<h2>로그인</h2>
  <form class="modal-content animate" method="post" action="login.php">
    <div class="container">
    <label for="id"><b>아이디</b></label>
	<input type="text" name="id" placeholder="Enter ID" required><br>

	<label for="pw"><b>비밀번호</b><label>
	<input type="password" name="pw" placeholder="Enter PW" required><br>
	
	<button type="submit">로그인</button>
	<a href="register_form.php">회원가입</a>
	</div>
  </form>
</div>
