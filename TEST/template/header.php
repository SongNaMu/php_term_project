<?php
  $page = requestValue("page");
  $request_uri = $_SERVER['REQUEST_URI'];
  if(stristr($request_uri, 'board')){
    $page = 1;
  }else{
    $page = requestValue("page");
  }

?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal"><a style="text-decoration:none" href="./board.php?page=<?=$page?>">Song's Board</a></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav>
<?php if(isset($_SESSION["name"])){ ?>
      <a class="btn btn-lutline-primary" href="./logout.php">Logout</a>
<?php }else{ ?>
			<a class="btn btn-outline-primary" href="./register_form.php">Sign Up</a>
      <a class="btn btn-outline-primary" href="./login_form.php">Login</a>
<?php } ?>
    </div>
