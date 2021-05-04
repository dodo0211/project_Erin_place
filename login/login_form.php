<!DOCTYPE html>
<html>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php"; ?>

    <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/login/css/login.css?after=4">
    <!-- script -->
    <script src="https://<?= $_SERVER["HTTP_HOST"] ?>/login/js/login.js" defer></script>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/header.php"; ?>
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
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/footer.php"; ?>
    </footer>
</body>

</html>