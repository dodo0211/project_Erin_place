<!DOCTYPE html>
<html>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php"; ?>
	<link rel="stylesheet" type="text/css" href="css/member.css">

	<!-- link -->
	<link rel="stylesheet" href="https://<?= $_SERVER["HTTP_HOST"] ?>/member/css/member_modify.css">
	<!-- script -->
	<script src="https://<?= $_SERVER["HTTP_HOST"] ?>/member/js/member.js"></script>
</head>

<body>
	<header>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/header.php"; ?>
	</header>
	<section>
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
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/footer.php"; ?>
	</footer>
</body>

</html>