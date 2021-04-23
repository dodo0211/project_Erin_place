<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/db/db_connect.php";

// 여기서 session값을 CURD
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

$id = $_POST["id"];
$num   = $_POST["num"];
$level = $_POST["level"];
$point = $_POST["point"];

// members 테이블애서 해당되는 num값을 찾아서 level과 point 값을 수정
$sql = "update members set level=$level, point=$point where num=$num";
$result = mysqli_query($con, $sql);

if (!$result) {
    echo "
    <script>
        alert('수정 실패');
        history.go(-1);
    </script>
    ";
} else {

    if($_SESSION["userid"] == $id) {          
        $_SESSION["userlevel"] = $level;
        $_SESSION["userpoint"] = $point;
    }
    echo "
        <script>
            alert('수정 성공');
            location.href = './admin.php';
        </script>
        ";
}

mysqli_close($con);
