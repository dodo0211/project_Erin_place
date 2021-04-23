<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Erin's place</title>

    <!-- link -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/css/common.css?after=2">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/login/css/login.css?after=4">
    <!-- script -->
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/js/img_slide.js" defer></script>
    <script src="./js/login.js" defer></script>
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
        <div id="main_content">
            <div id="login_box">
                <div id="login_title">
                    <span>로그인</span>
                </div>
                <div id="login_form">
                    <form name="login_form" method="post" action="login.php">
                        <ul>
                            <li><input type="text" name="id" placeholder="아이디"></li>
                            <li><input type="password" id="pass" name="pass" placeholder="비밀번호"></li> <!-- pass -->
                        </ul>
                        <div id="login_btn">
                            <a href="#"><img src="../img/login.png" onclick="check_input()"></a>
                        </div>
                    </form>
                </div> <!-- login_form -->
            </div> <!-- login_box -->
        </div> <!-- main_content -->
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/footer.php"; ?>
    </footer>
</body>

</html>