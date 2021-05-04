<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/db/db_connect.php";

$login_flag = false;
if (!isset($_POST["id"]) || empty($_POST["id"])) {
    $login_flag = true;
} else if (!isset($_POST["pass"]) || empty($_POST["pass"])) {
    $login_flag = true;
}

if ($login_flag == true) {
    echo ("
           <script>
             window.alert('아이디와 비밀번호를 정확하게 입력하시기 바랍니다.');
             history.go(-1);
           </script>
         ");
}

$id   = $_POST["id"];
$pass = $_POST["pass"];

// 멤버테이블 속 같은 id 레코드 추출 -> $result
$sql = "select * from members where id='$id' and pass='$pass'";
// result 안에 record set이 존재
$result = mysqli_query($con, $sql);

// record set의 개수 (row = record set)
$num_match = mysqli_num_rows($result);

// record set의 개수가 0이면 -> false
if (!$num_match) {
    echo ("
           <script>
             window.alert('등록되지 않은 아이디와 비밀번호입니다!');
             history.go(-1);
           </script>
         ");
} else {
    // 해당되는 record set에서 첫번째 record를 (연관)배열로 가져옴
    $row = mysqli_fetch_array($result);

    // 세션 값 할당
    session_start();
    $_SESSION["userid"] = $row["id"];
    $_SESSION["username"] = $row["name"];
    $_SESSION["userlevel"] = $row["level"];
    $_SESSION["userpoint"] = $row["point"];

    mysqli_close($con);

    echo ("
            <script>
            location.href = 'https://{$_SERVER["HTTP_HOST"]}/index.php';
            </script>
        ");
}
