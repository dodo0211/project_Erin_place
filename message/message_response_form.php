<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Erin's place</title>
	<!-- link -->
	<link rel="stylesheet" type="text/css" href="http://<?= $_SERVER['HTTP_HOST'] ?>/project_erin_place/css/common.css">
	<link rel="stylesheet" type="text/css" href="http://<?= $_SERVER['HTTP_HOST'] ?>/project_erin_place/message/css/message.css">
	<link rel="stylesheet" type="text/css" href="css/message.css">
	<!-- script -->
	<script src="http://<?= $_SERVER['HTTP_HOST'] ?>/project_erin_place/js/img_slide.js" defer></script>
	<script src="http://<?= $_SERVER['HTTP_HOST'] ?>/project_erin_place/message/js/message.js"></script>
	<!-- api -->
	<script src="https://kit.fontawesome.com/98f04cd3f2.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

	<script>
		function check_input() {
			if (!document.message_form.subject.value) {
				alert("제목을 입력하세요!");
				document.message_form.subject.focus();
				return;
			}
			if (!document.message_form.content.value) {
				alert("내용을 입력하세요!");
				document.message_form.content.focus();
				return;
			}
			document.message_form.submit();
		}
	</script>
</head>

<body>
	<header>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/header.php"; ?>
	</header>
	<section>
		<div id="message_box">
			<h3 id="write_title">
				<? 
				if ($_GET["mode"] === "reply") {
					echo "답변 쪽지 보내기";
				} else {
					echo "쪽지 수정하기"
				}
				?>
			</h3>
			<?php
			include_once $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/db/db_connect.php";
			$num = $_GET["num"];

			$sql = "select * from message where num=$num";
			$result = mysqli_query($con, $sql);

			$row = mysqli_fetch_array($result);
			$send_id = $row["send_id"];
			$rv_id = $row["rv_id"];
			$subject = $row["subject"];
			$content = $row["content"];

			if ($_GET["mode"] === "reply") {
				$subject = "RE: " . $subject;

				$content = "> " . $content;
				$content = str_replace("\n", "\n>", $content);
				$content = "\n\n\n-----------------------------------------------\n" . $content;
				echo "<form name='message_form' method='post' action='message_insert.php'>";
			} else {
				echo "<form name='message_form' method='post' action='message_modify.php'>
								<input type='hidden' value={$num} name='num'>";
			}
			$result2 = mysqli_query($con, "select name from members where id='$send_id'");
			$record = mysqli_fetch_array($result2);
			$send_name = $record["name"];
			?>

			<!--헤더에 있는 유저아이디인가?-->
			<input type="hidden" name="send_id" value="<?= $userid ?>">
			<input type="hidden" name="rv_id" value="<?= $send_id ?>">
			<div id="write_msg">
				<ul>
					<li>
						<span class="col1">보내는 사람 : </span>
						<span class="col2"><?= $userid ?></span>
					</li>
					<li>
						<span class="col1">수신 아이디 : </span>
						<span class="col2"><?= $send_name ?>(<?= $send_id ?>)</span>
					</li>
					<li>
						<span class="col1">제목 : </span>
						<span class="col2"><input name="subject" type="text" value="<?= $subject ?>"></span>
					</li>
					<li id="text_area">
						<span class="col1">글 내용 : </span>
						<span class="col2">
							<textarea name="content"><?= $content ?></textarea>
						</span>
					</li>
				</ul>
				<?php if ($_GET["mode"] === "reply") : $btn_name = "보내기";
				else :
					$btn_name = "수정하기";
				endif; ?>
				<button type="button" onclick="check_input()"><?= $btn_name ?></button>
			</div>
			</form>
		</div> <!-- message_box -->
	</section>
	<footer>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/footer.php"; ?>
	</footer>
</body>

</html>