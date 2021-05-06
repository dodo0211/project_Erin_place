<!DOCTYPE html>
<html>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php"; ?>
	<link rel="stylesheet" href="https://<?= $_SERVER["HTTP_HOST"] ?>/member/css/member.css?after=6">
	<script src="https://<?= $_SERVER["HTTP_HOST"] ?>/member/js/member.js" defer></script>
</head>

<body>
	<header>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/header.php"; ?>
	</header>

	<section>
		<!-- register form -->
		<div id="main_content">
			<div id="join_box">
				<h2 class="register_title">회원 가입</h2>
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
					<div class="btn_register">
						<!-- 회원가입 양식 확인 후 전송하기 때문에 submit이 아닌 button -->
						<input type="button" value="초기화" onclick="reset_form()">
						<input type="button" value="회원가입" onclick="check_input()">
					</div>
				</form>
			</div> <!-- join_box -->
		</div> <!-- main_content -->
	</section>

	<footer>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/footer.php"; ?>
	</footer>
</body>

</html>