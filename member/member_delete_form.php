<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Erin's place</title>

	<link rel="stylesheet" type="text/css" href="http://<?= $_SERVER["HTTP_HOST"] ?>/project_erin_place/css/common.css">
	<link rel="stylesheet" type="text/css" href="css/member.css">

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
	<section>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/main_img_bar.php"; ?>
		<div id="main_content">
			<div id="join_box">
				<h2>정말로 회원탈퇴를 하시겠습니까?</h2>
				<form name="member_form" method="post" action="member_delete.php">
					<input type="hidden" name="id" value="<?= $userid ?>">
					<br><br>
					<div>
						<input type="submit" value="확인">
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