<?php
  class MemberDao {
    private $db;

    public function __construct(){
      try{
        $this->db = new PDO("mysql:host=192.168.56.101;dbname=php","root","");
        $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      }catch(PDOException $e){
        exit($e->getMessage());
      }
    }

    function getMember($id){ //동일 아이다가 있는지 없는지 조회
      //place holder
      //prepare하면 데이터 베이스에서 문법체크 하고 유효성 체크하고
      try{
        $pstmt = $this->db->prepare("select * from member where id=:id");
        $pstmt->bindValue(":id",$id,PDO::PARAM_STR);
        $pstmt->execute();
        $result = $pstmt->fetch(PDO::FETCH_ASSOC);

      }catch(PDOException $e){
        exit($e->getMessage());
      }

      return $result;
    }
    function insertMember($id, $pw, $name){
      try{
        $sql = "insert into member(id, pw, name) values(:id, :pw, :name)";
        $pstmt = $this->db->prepare($sql);

        $pstmt->bindValue(":id", $id, PDO::PARAM_STR);
        $pstmt->bindValue(":pw", $pw, PDO::PARAM_STR);
        $pstmt->bindValue(":name", $name, PDO::PARAM_STR);

        $pstmt->execute();
      }catch(PDOException $e){
        exit($e->getMessage());
      }
    }
    function updateMemer($id, $pw, $name){
      try{
        $sql = "update member set pw=:pw, name=:name where id=:id";
        $pstmt = $this->db->prepare($sql);

        $pstmt->bindValue(":id", $id, PDO::PARAM_STR);
        $pstmt->bindValue(":pw", $pw, PDO::PARAM_STR);
        $pstmt->bindValue(":name", $name, PDO::PARAM_STR);

        $pstmt->execute();
      }catch(PDOException $e){
        exit($e->getMessage());
      }
    }

    function getName($id){
  	  try{
  	    $sql = "select name from member where id = :id";
    	  $pstmt = $this->db->prepare($sql);
  		  $pstmt->bindValue(":id", $id, PDO::PARAM_STR);

  		  $pstmt->execute();
        $result = $pstmt->fetch(PDO::FETCH_ASSOC);
  	  }catch(PDOException $e){
  	    exit($e->getMessage());
  	  }
      return $result;
	  }
  }

?>
