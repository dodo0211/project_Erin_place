<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erin's place</title>
    <!-- link -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/css/common.css?after=4">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/post/post.css?after=1">
    <!-- script -->
    <script src="./post.js" defer></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/js/img_slide.js"></script>
    <!-- api -->
    <script src="https://kit.fontawesome.com/98f04cd3f2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/header.php"; ?>
    </header>

    <!-- section (post) -->
    <section>
        <div>
            <div class="lang_list"><a href="#">the whole</a></div>
            <div class="lang_list"><a href="#">PHP</a></div>
            <div class="lang_list"><a href="#">Javascript</a></div>
            <div class="lang_list"><a href="#">HTML</a></div>
            <div class="lang_list"><a href="#">Java</a></div>
            <div class="lang_list"><a href="#">Python</a></div>
            <div class="lang_list"><a href="#">C</a></div>
        </div>

        <div>
            <div class="post_detail_category">
                <ul>
                    <li class="post_detail_title">호이스팅(hoisting)이란?</li>
                </ul>
            </div>

            <div class="post_content">
                <br>
                <h3>호이스팅(hositing)이란?</h3><br>
                함수 내에서 선언된 변수는 어디있던 간에 제일 처음으로 모두 끌어올려서 해당 함수 유효 범위의 최상단에 선언하는 것. <br><br>
                하지만 선언만 할 뿐, 정의는 해주지 않는다. <br>
                따라서 정의 이전의 변수는 undefined, 정의 이후에 변수만 정의한 타입과 값을 가지게 된다.
            </div>
        </div>


    </section>

    <hr>

    <!-- footer -->
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/footer.php"; ?>
    </footer>

</body>

</html>