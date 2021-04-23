<?php
date_default_timezone_set("Asia/Seoul");
$server_name = "localhost";
$user_name = "root";
$pass = "123456";
$db_name = "sample";

$con = mysqli_connect($server_name, $user_name, $pass);
$query = "create database if not exists sample";
// die($con->error): query문을 실행하고 결과값에 오류 발생 시, 프로그램을 멈춤&error메세지
// $con->query($query): query문 실행
$result = $con->query($query) or die($con->error);

$con->select_db($db_name) or die($con->error);

// 결과가 잘못되었을 경우, 경고해주고 뒤로
function alert_back($message)
{
    echo ("
        <script>
        alert('$message');
        history.go(-1)
        </script>
        ");
}

function input_set($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
