<!DOCTYPE html>
<html>

<head>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php"; ?>
	<!-- script -->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://<?= $_SERVER['HTTP_HOST'] ?>/admin/css/admin.css">
	<script src="https://<?= $_SERVER["HTTP_HOST"] ?>/member/js/member.js"></script>
</head>

<body>
	<header>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/header.php"; ?>
	</header>
	<section>
		<div id="admin_box">
			<h3 id="member_title">
				관리자 모드 > 회원 관리
			</h3>
			<ul id="member_list">
				<li>
					<span class="col1">번호</span>
					<span class="col2">아이디</span>
					<span class="col3">이름</span>
					<span class="col4">레벨</span>
					<span class="col5">포인트</span>
					<span class="col6">가입일</span>
					<span class="col7">수정</span>
					<span class="col8">삭제</span>
				</li>
				<?php
				include_once $_SERVER['DOCUMENT_ROOT'] . "/db/db_connect.php";

				if (!isset($_SESSION['userid']) && $_SESSION['userlevel'] !== '1') {
					echo ("
						            <script>
						            alert('관리자만 접근가능합니다');
						            history.go(-1)
						            </script>
						        ");
					exit;
				}

				$sql = "select * from members order by num desc";
				$result = mysqli_query($con, $sql);
				// record_set에 해당하는 record의 개수 = 전체 회원 수
				$total_record = mysqli_num_rows($result);

				// number는 전체 record의 개수
				$number = $total_record;

				// record_set에서 첫번째 record를 연관배열 지정($row)
				// record_set에 가르키는 pointer 위치 record를 배열로 가져온다
				// pointer 위치는 mysqli_fetch_array($result) 사용 시 가음 record를 가르키고 있다
				// 가르킬 record 위치가 없으면 null을 리턴하다 -> false를 준다.
				while ($row = mysqli_fetch_array($result)) {
					$num = $row["num"];
					$id = $row["id"];
					$name = $row["name"];
					$level = $row["level"];
					$point = $row["point"];
					$regist_day = $row["regist_day"];
				?>

					<li>
						<form method="post" action="./admin_member_update.php">
							<!-- number가 primary_key이기 때문에 hidden -->
							<input type="hidden" name="num" value="<?= $num ?>">
							<input type="hidden" name="id" value="<?= $id ?>">
							<span class="col1"><?= $number ?></span>
							<span class="col2"><?= $id ?></a></span>
							<span class="col3"><?= $name ?></span>
							<span class="col4"><input type="text" name="level" value="<?= $level ?>"></span>
							<span class="col5"><input type="text" name="point" value="<?= $point ?>"></span>
							<span class="col6"><?= $regist_day ?></span>
							<span class="col7"><button type="submit">수정</button></span>
							<!-- get방식 -->
							<span class="col8"><button type="button" onclick="location.href='admin_member_delete.php?num=<?= $num ?>'">삭제</button></span>
						</form>
					</li>

				<?php
					$number--;
				} //end of while
				?>
			</ul>
			<h3 id="member_title">
				관리자 모드 > 게시판 관리
			</h3>
			<ul id="board_list">
				<li class="title">
					<span class="col1">선택</span>
					<span class="col2">번호</span>
					<span class="col3">이름</span>
					<span class="col4">제목</span>
					<span class="col5">첨부파일명</span>
					<span class="col6">작성일</span>
				</li>
				<form method="post" action="admin_board_delete.php">
					<?php
					$sql = "select * from board order by num desc";
					$result = mysqli_query($con, $sql);
					$total_record = mysqli_num_rows($result); // 전체 글의 수

					$number = $total_record;

					while ($row = mysqli_fetch_array($result)) {
						$num = $row["num"];
						$name = $row["name"];
						$subject = $row["subject"];
						$file_name = $row["file_name"];
						$regist_day = $row["regist_day"];
						$regist_day = substr($regist_day, 0, 10)
					?>
						<li>
							<span class="col1"><input type="checkbox" name="item[]" value="<?= $num ?>"></span>
							<span class="col2"><?= $number ?></span>
							<span class="col3"><?= $name ?></span>
							<span class="col4"><?= $subject ?></span>
							<span class="col5"><?= $file_name ?></span>
							<span class="col6"><?= $regist_day ?></span>
						</li>
					<?php
						$number--;
					}
					mysqli_close($con);
					?>
					<button type="submit">선택된 글 삭제</button>
				</form>
			</ul>
		</div> <!-- admin_box -->
	</section>
	<footer>
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/footer.php"; ?>
	</footer>
</body>

</html>