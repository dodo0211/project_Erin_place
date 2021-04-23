<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Erin's place</title>
	<!-- link -->
	<link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/project_erin_place/css/common.css">
	<link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/project_erin_place/member/css/member_modify.css">
	<!-- script -->
	<script src="http://<?= $_SERVER["HTTP_HOST"] ?>/project_erin_place/js/img_slide.js" defer></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="http://<?= $_SERVER["HTTP_HOST"] ?>/project_erin_place/member/js/member.js"></script>
	<!-- api -->
	<script src="https://kit.fontawesome.com/98f04cd3f2.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/header.php"; ?>
	</header>
	<?php
	// include_once는 반복이 되더라도 한번만 포함시킴 (include는 여러번 부르면 여러번 가져옴)
	include_once $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/db/db_connect.php";
	$sql = "select * from members where id='$userid'";
	// query문 실행, 실행결과값인 record_set을 result에 저장
	$result = mysqli_query($con, $sql);
	// record_set에서 첫번째 record를 연관배열 지정($row)
	$row = mysqli_fetch_array($result);

	$pass = $row["pass"];
	$name = $row["name"];

	// 아이디랑 도메인명을 배열로 분리하여 자름
	$email = explode("@", $row["email"]);
	$email1 = $email[0];
	$email2 = $email[1];

	mysqli_close($con);
	?>
	<section>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/main_img_bar.php"; ?>
		<div id="main_content">
			<div id="join_box">

				<h2>회원 정보 수정</h2>
				<form name="member_form" method="post" action="member_modify.php">
					<table>
						<tr>
							<th>사용자 ID</th>
							<td><?= $userid ?> <input type="hidden" name="id" value="<?= $userid ?>">
						</tr>
						<tr>
							<th>비밀번호</th>
							<td><input type="password" name="pass" value="<?= $pass ?>">
								<!-- 4~12자리의 영문,숫자,특수문자(!, @, $, %, ^,&,*)만 가능-->
							</td>
						</tr>
						<tr>
							<th>비밀번호 확인</th>
							<td colspan="2"><input type="password" name="pass_confirm" value="<?= $pass ?>"></td>
						</tr>
						<tr>
							<th>성명</th>
							<td><input type="text" name="name" value="<?= $name ?>">
							</td>
						</tr>
						<tr>
							<th>E-mail</th>
							<td><input type="text" name="email1" value="<?= $email1 ?>">@<input type="text" name="email2" value="<?= $email2 ?>">

							</td>
						</tr>
					</table>
					<br>
					<div>
						<!-- submit 누르면 뮤조건 member_modify.php로 전송 -->
						<input type="button" value="수정" onclick="check_input()">
						<input type="button" value="취소" onclick="location.href='http://<?= $_SERVER['HTTP_HOST'] ?>/project_erin_place/index.php'">
					</div>
				</form>
			</div> <!-- join_box -->
		</div> <!-- main_content -->
	</section>
	<footer>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/footer.php"; ?>
	</footer>
</body>

</html>