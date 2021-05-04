<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php"; ?>
    <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/posting/posting.css?after=2">
    <!-- script -->
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/posting/posting.js" defer></script>
</head>

<body>
    <!-- header -->
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/header.php"; ?>
    </header>

    <!-- section (post) -->
    <section>
        <div>
            <div class="lang_list"><a href="#">the whole</a></div>
            <div class="lang_list"><a href="#">PHP</a></div>
            <div class="lang_list"><a href="#">Javascript</a></div>
            <div class="lang_list"><a href="#">Java</a></div>
            <div class="lang_list"><a href="#">Python</a></div>
            <div class="lang_list"><a href="#">C</a></div>
        </div>

        <div>
            <div class="posting_detail_category">
                <ul>
                    <li class="posting_detail_title">호이스팅(hoisting)이란?</li>
                </ul>
            </div>

            <div class="posting_content">
                <br>
                <h3>호이스팅(hositing)이란?</h3><br>
                함수 내에서 선언된 변수는 어디있던 간에 제일 처음으로 모두 끌어올려서 해당 함수 유효 범위의 최상단에 선언하는 것. <br><br>
                하지만 선언만 할 뿐, 정의는 해주지 않는다. <br>
                따라서 정의 이전의 변수는 undefined, 정의 이후에 변수만 정의한 타입과 값을 가지게 된다.
            </div>
        </div>


    </section>

    <!-- footer -->
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/footer.php"; ?>
    </footer>

</body>

</html>