<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/db/db_connect.php";
$id = $_POST["id"];

$pass = $_POST["pass"];
$name = $_POST["name"];
$email1 = $_POST["email1"];
$email2 = $_POST["email2"];

$email = $email1 . "@" . $email2;

$sql = "update members set pass='$pass', name='$name' , email='$email'";
$sql .= " where id='$id'";
$value = mysqli_query($con, $sql) or die('error : ' . mysqli_error($con));
// 수정이 잘 되었으면 true, 아님 false나 null
// select => record set, update, insert, delete => true, false
if ($value) {
    session_start();
    $_SESSION["username"] = $name;
} else {
    echo "<script>
                    alert('정보 수정 실패');
                    history.go(-1);
              </script>";
}

mysqli_close($con);


echo "
	      <script>
	      alert('수정 완료');
	          location.href = 'http://{$_SERVER['HTTP_HOST']}/project_erin_place/index.php';
	      </script>
	  ";
