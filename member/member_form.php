<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Erin's place</title>
	<link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/project_erin_place/css/common.css">
	<link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/project_erin_place/member/css/member.css">
	<!-- script -->
	<script src="http://<?= $_SERVER["HTTP_HOST"] ?>/project_erin_place/js/img_slide.js" defer></script>
	<script src="http://<?= $_SERVER["HTTP_HOST"] ?>/project_erin_place/member/js/member.js" defer></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<!-- api -->
	<script src="https://kit.fontawesome.com/98f04cd3f2.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/header.php"; ?>
	</header>

	<section>
		<!-- register form -->
		<div id="main_content">
			<div id="join_box">
				<h2>회원 가입</h2>
				<form name="member_form" method="post" action="./member_insert.php">
					<table>
						<tr>
							<th>사용자 ID</th>
							<td><input type="text" name="id">
								<input type="button" value="중복 확인" onclick="check_id()">
							</td>
						</tr>
						<tr>
							<th>비밀번호</th>
							<td><input type="password" name="pass">
							</td>
						</tr>
						<tr>
							<th>비밀번호 확인</th>
							<td colspan="2"><input type="password" name="pass_confirm"></td>
						</tr>
						<tr>
							<th>성명</th>
							<td><input type="text" name="name">
							</td>
						</tr>
						<tr>
							<th>E-mail</th>
							<td><input type="text" name="email1">@<input type="text" name="email2">
							</td>
						</tr>
					</table>
					<br>
					<div>
						<!-- 회원가입 양식 확인 후 전송하기 때문에 submit이 아닌 button -->
						<input type="button" value="초기화" onclick="reset_form()">
						<input type="button" value="회원가입" onclick="check_input()">
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