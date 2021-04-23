<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/db/db_connect.php";
session_start();
if (isset($_SESSION["id"]) && $_SESSION["id"] != 'erin') {
    echo ("
            <script>
            alert('관리자가 아닙니다! 회원정보 수정은 관리자만 가능합니다!');
            history.go(-1)
            </script>
        ");
    exit;
}

$num   = $_GET["num"];

$sql = "delete from members where num = $num";
mysqli_query($con, $sql);

mysqli_close($con);

echo "
	     <script>
	         location.href = 'admin.php';
	     </script>
	   ";
