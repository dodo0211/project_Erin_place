<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";
if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
else $userlevel = "9";
if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
else $userpoint = "";
// 모든 페이지에서 세션값을 확인하고 가져옴, 세션값이 없으면 문자열 '' 저장

include_once $_SERVER['DOCUMENT_ROOT'] . "/db/create_table.php";
create_table($con, 'board');
create_table($con, 'portfolio');
create_table($con, 'message');
?>

<div class="header_whole">
    <nav class="navbar">
        <!-- nevigation logo -->
        <div class="navbar_logo">
            <i class="fas fa-keyboard"></i>
            <a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/index.php">Erin's Place</a>
        </div>

        <!-- nevigation menu -->
        <ul class="navbar_menu" class="active">
            <li><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/portfolio.php">PORTFOLIO</a></li>
            <li><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/posting/posting.php">POSTING</a></li>
            <li><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/board/board_list.php">BOARD</a></li>
            <li><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/image_board/board_list.php">IMAGE</a></li>
            <li><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/message/message_box.php?mode=rv">MESSAGE</a></li>
            <li><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/qna/list.php?mode=rv">QnA</a></li>
        </ul>

        <div>
            <!-- nevigation SNS icon -->
            <ul class="navbar_icons">
                <li><a href="https://github.com/dodo0211" target="_blank"><i class="fab fa-git-square"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCGjxLr0w5KoEjVyah2cmArw" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                <li><a href="https://cafe.naver.com/incodingram" target="_blank"><span>N</span></a></li>
                <li><a href="https://www.instagram.com/erin._.place/" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
                <li><a href="#" target="_blank"></a><i class="fab fa-facebook-square"></i></a></li>
            </ul>

            <ul class="register_login">
                <?php
                if (!$userid) {
                ?>
                    <li><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/login/login_form.php">Login</a></li>
                    <li>|</li>
                    <li><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/member/member_form.php">Register</a></li>
                <?php
                } else {
                    $logged = $username . "(" . $userid . ")님[Level:" . $userlevel . ", Point:" . $userpoint . "]";
                ?>
                    <li><?= $logged ?> </li>
                    <li> | </li>
                    <li><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/login/logout.php">Logout</a> </li>
                    <li> | </li>
                    <li><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/member/member_modify_form.php">Update_Info</a></li>
                <?php
                }
                ?>
            </ul>
        </div>

        <!-- 햄버거바 -->
        <?php
        if ($userid == 'erin') {
        ?>
            <a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/admin/admin.php" class="navbar_toggle" id="navbar_button"> <i class="fas fa-bars"></i> </a>
        <?php
        }
        ?>
    </nav>
</div>

<div>
    <?php include $_SERVER['DOCUMENT_ROOT']."/img_slide.php"; ?>
</div>