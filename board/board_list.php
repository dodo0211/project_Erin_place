<!DOCTYPE html>
<html>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php"; ?>
    <link rel="stylesheet" href="https://<?= $_SERVER["HTTP_HOST"] ?>/board/css/board.css?after=3">
    <script src="https://<?= $_SERVER['HTTP_HOST'] ?>/board/js/board.js" defer></script>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/header.php"; ?>
    </header>
    <section>
        <div id="board_box">
            <h3>
                게시판 > 목록보기
            </h3>
            <ul id="board_list">
                <li>
                    <span class="col1">번호</span>
                    <span class="col2">제목</span>
                    <span class="col3">글쓴이</span>
                    <span class="col4">첨부</span>
                    <span class="col5">등록일</span>
                    <span class="col6">조회</span>
                </li>
                <?php
                include_once $_SERVER['DOCUMENT_ROOT'] . "/db/db_connect.php";

                // $_GET["page"]가 없으면 $page를 1로 세팅
                if (isset($_GET["page"]))
                    $page = $_GET["page"];
                else
                    $page = 1;


                $sql = "select * from board order by num desc";
                $result = mysqli_query($con, $sql);
                // resert_set에서 전체 레코드 수가 몇 개인가
                $total_record = mysqli_num_rows($result); // 전체 글 수

                // 게시판에서 보여줘야 할 record의 개수
                $scale = 10;

                // 전체 페이지 수($total_page) 계산
                if ($total_record % $scale == 0)
                    $total_page = floor($total_record / $scale);
                else
                    $total_page = floor($total_record / $scale) + 1;

                // 표시할 페이지($page)에 따라 $start 계산
                $start = ($page - 1) * $scale;

                $number = $total_record - $start;

                // 보여줘야할 개수의 게시판을 진행
                // 제일 마지막 페이지에 scale보다 게시물의 수가 적을 수 있기 때문
                for ($i = $start; $i < $start + $scale && $i < $total_record; $i++) {
                    mysqli_data_seek($result, $i);
                    // 가져올 레코드로 위치(포인터) 이동
                    $row = mysqli_fetch_array($result);
                    // 하나의 레코드 가져오기
                    $num = $row["num"];
                    $id = $row["id"];
                    $name = $row["name"];
                    $subject = $row["subject"];
                    $regist_day = $row["regist_day"];
                    $hit = $row["hit"];
                    if ($row["file_name"])
                        $file_image = "<img src='./img/file.gif'>";
                    else
                        $file_image = " ";
                ?>
                    <li>
                        <span class="col1"><?= $number ?></span>
                        <span class="col2"><a href="board_view.php?num=<?= $num ?>&page=<?= $page ?>"><?= $subject ?></a></span>
                        <span class="col3"><?= $name ?></span>
                        <span class="col4"><?= $file_image ?></span>
                        <span class="col5"><?= $regist_day ?></span>
                        <span class="col6"><?= $hit ?></span>
                    </li>
                <?php
                    $number--;
                }   //end of for
                mysqli_close($con);
                ?>
            </ul>

            <!-- 페이지를 보여주는 영역 -->
            <ul id="page_num">
                <?php
                if ($total_page >= 2 && $page >= 2) {
                    $new_page = $page - 1;
                    echo "<li><a href='board_list.php?page=$new_page'>◀ 이전</a> </li>";
                } else
                    echo "<li>&nbsp;</li>";

                // 게시판 목록 하단에 페이지 링크 번호 출력
                for ($i = 1; $i <= $total_page; $i++) {
                    if ($page == $i)     // 현재 페이지 번호 링크 안함
                    {
                        echo "<li><b> $i </b></li>";
                    } else {
                        echo "<li><a href='board_list.php?page=$i'> $i </a><li>";
                    }
                }
                if ($total_page >= 2 && $page != $total_page) {
                    $new_page = $page + 1;
                    echo "<li> <a href='board_list.php?page=$new_page'>다음 ▶</a> </li>";
                } else
                    echo "<li>&nbsp;</li>";
                ?>
            </ul> <!-- page -->
            <ul class="buttons">
                <li>
                    <button onclick="location.href='board_list.php'">목록</button>
                </li>
                <li>
                    <?php
                    if ($userid) {
                    ?>
                        <button onclick="location.href='board_form.php'">글쓰기</button>
                    <?php
                    } else {
                    ?>
                        <a href="javascript:alert('로그인 후 이용해 주세요!')">
                            <button>글쓰기</button>
                        </a>
                    <?php
                    }
                    ?>
                </li>
            </ul>
        </div> <!-- board_box -->
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/footer.php"; ?>
    </footer>
</body>

</html>