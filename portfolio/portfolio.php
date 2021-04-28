<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erin's place</title>
    <!-- link -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/css/common.css?after=4">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/portfolio/portfolio.css?after=5">
    <!-- script -->
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/portfolio/portfolio.js" defer></script>
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

    <!-- section (portfolio) -->
    <section>
        <!-- 언어 분류, 포트폴리오가 더 많아지면 다시 삽입예정 -->
        <!-- <h2>Portfolio > the whole</h2> -->
        <div class="portfolio_list">
            <!-- <div class="lang_list"><a href="#">the whole</a></div>
            <div class="lang_list"><a href="#">PHP</a></div>
            <div class="lang_list"><a href="#">Javascript</a></div>
            <div class="lang_list"><a href="#">Java</a></div>
            <div class="lang_list"><a href="#">Python</a></div>
            <div class="lang_list"><a href="#">C</a></div> -->
        </div>

        <div>
            <div class="portfolio_detail_category">
                <ul>
                    <li class="portfolio_detail_title"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/portfolio/content/project_next.php">주식차트 분석 프로그램</a></li>
                    <li class="portfolio_detail_title"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/portfolio/content/project_shimpyo.php">매일 일기 프로그램</a></li>
                    <li class="portfolio_detail_title"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/portfolio/content/project_mp3.php">MP3 Player</a></li>
                    <li class="portfolio_detail_title"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/portfolio/content/project_patients.php">병원 환자 명단관리 프로그램</a></li>
                    <li class="portfolio_detail_title"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/portfolio/content/project_vending_machine.php">재활용품으로 기부하는 자판기</a></li>
                </ul>
            </div>

            <!-- 최초의 화면 default -->
            <div class="portfolio_content">
                <br><br>
                <h1>주식차트 분석 프로그램</h1><br />
                <h3>Adroid_studio, Python</h3> <br>
                <div class="portfolio_icon">
                    <span><a href="https://github.com/dodo0211/ProjectNext" target="_blank"><i class="fab fa-git-square"></i></a></span>
                    <span><a href="https://trello.com/b/S9j6XRw2/projectnext" target="_blank"><span>Trello</span></a></span>
                    <span><a href="https://www.youtube.com/watch?v=jHTt17o2BgM" target="_blank"><i class="fab fa-youtube-square"></i></a></span>
                    <span><a href="https://cafe.naver.com/incodingram/172?boardType=L" target="_blank"><span>Naver</span></a></span>
                </div><br />

                <div class="portfolio_explanation">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/jHTt17o2BgM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <br><br>
                    <h3>제작 상세</h3>
                    - 개발 기간 : 2021.03.25 ~ <br />
                    - 개발 <br />
                    팀장 : 송훈일 <br />
                    팀원 : 허선영, 김택민 <br /><br />

                    <h3>개발 환경</h3>
                    - java 15.0.2 <br />
                    - scala 2.13.4 <br />
                    - python 3.9.2 <br />
                    - android studio 4.1.3, Intellij IDEA 11.0.2, PyCharm 11.0.10 <br />
                    - MySQL 8.0.23 <br /><br />

                    <h3>실행 환경</h3>
                    - Windows 10 <br />
                    - MacOS <br /><br />
                </div>

                <div class="portfolio_img_android">
                    <div><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/portfolio/img/project_next/next1.png" alt="프로젝트next_결과사진1"></div>
                    <div><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/portfolio/img/project_next/next2.png" alt="프로젝트next_결과사진2"></div>
                    <div><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/portfolio/img/project_next/next3.png" alt="프로젝트next_결과사진3"></div>
                    <div><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/portfolio/img/project_next/next4.png" alt="프로젝트next_결과사진4"></div>
                    <div><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/portfolio/img/project_next/next5.png" alt="프로젝트next_결과사진5"></div>
                </div><br />
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