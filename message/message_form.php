<!DOCTYPE html>
<html>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php"; ?>
	<link rel="stylesheet" type="text/css" href="https://<?= $_SERVER['HTTP_HOST'] ?>/message/css/message.css">
	<script src="https://<?= $_SERVER['HTTP_HOST'] ?>/message/js/message.js"></script>
</head>

<body>
	<header>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/header.php"; ?>
	</header>
	<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . "/db/db_connect.php";
	include_once $_SERVER['DOCUMENT_ROOT'] . "/db/create_table.php";
	create_table($con, 'message');
	if (!$userid) {
		echo ("<script>
				alert('로그인 후 이용해주세요!');
				history.go(-1);
				</script>
			");
		exit;
	}
	?>
	<section>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/main_img_bar.php"; ?>
		<div id="message_box">
			<h3 id="write_title">
				쪽지 보내기
			</h3>
			<ul class="top_buttons">
				<li><span><a href="message_box.php?mode=rv">수신 쪽지함 </a></span></li>
				<li><span><a href="message_box.php?mode=send">송신 쪽지함</a></span></li>
			</ul>
			<form name="message_form" method="post" action="message_insert.php">
				<div id="write_msg">
					<ul>
						<li>
							<span class="col1">보내는 사람 : </span>
							<span class="col2"><?= $userid ?></span>
							<input type="hidden" value=<?= $userid ?> name="send_id">
						</li>
						<li>
							<span class="col1">수신 아이디 : </span>
							<span class="col2"><input name="rv_id" type="text"></span>
						</li>
						<li>
							<span class="col1">제목 : </span>
							<span class="col2"><input name="subject" type="text"></span>
						</li>
						<li id="text_area">
							<span class="col1">내용 : </span>
							<span class="col2">
								<textarea name="content"></textarea>
							</span>
						</li>
					</ul>
					<button type="button" onclick="check_input()">보내기</button>
				</div>
			</form>
		</div> <!-- message_box -->
	</section>
	<footer>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/footer.php"; ?>
	</footer>
</body>

</html>