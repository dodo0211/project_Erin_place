<?php
// 데이터베이스 연동 및 멤버테이블 생성 (테이블 존재 시, 생략)
include_once $_SERVER['DOCUMENT_ROOT'] . "/db/db_connect.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/db/create_table.php";
create_table($con, 'members');

$id = input_set($_POST["id"]);
$pass = input_set($_POST["pass"]);
$name = input_set($_POST["name"]);
$email1 = input_set($_POST["email1"]);
$email2 = input_set($_POST["email2"]);

$email = $email1 . "@" . $email2;
$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

$sql = "insert into members(id, pass, name, email, regist_day, level, point) ";
$sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)";

$insert_result = mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
mysqli_close($con);

if ($insert_result === false) {
    alert_back("삽입이 오류, 재입력 요망");
} else {
    echo "
            <script>
                alert('회원가입을 환영합니다!');
                location.href = 'https://{$_SERVER['HTTP_HOST']}/index.php';
            </script>
        ";
}
