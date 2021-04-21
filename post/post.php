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
            <div><a href="#">the whole</a></div>
            <div><a href="#">PHP</a></div>
            <div><a href="#">Javascript</a></div>            
            <div><a href="#">HTML</a></div>
            <div><a href="#">Java</a></div>
            <div><a href="#">Python</a></div>
            <div><a href="#">C</a></div>
        </div>

        <div>
            <div class="post_detail_category">세부항목</div>

            <div class="post_content">내용내용내용</div>
        </div>


    </section>

    <hr>

    <!-- footer -->
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/footer.php"; ?>
    </footer>

</body>

</html>