<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/project_erin_place/db/db_connect.php";
$id = $_POST["id"];

$sql = "delete from members  where id='$id'";
$value = mysqli_query($con, $sql) or die('error : ' . mysqli_error($con));

include_once $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/login/logout.php";
