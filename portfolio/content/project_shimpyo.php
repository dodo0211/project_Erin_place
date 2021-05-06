<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php"; ?>
    <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/portfolio.css?after=2">
    <!-- script -->
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/portfolio.js" defer></script>
</head>

<body>
    <!-- header -->
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/header.php"; ?>
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
                    <li class="portfolio_detail_title"><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/content/project_next.php">주식차트 분석 프로그램</a></li>
                    <li class="portfolio_detail_title"><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/content/project_shimpyo.php">매일 일기 프로그램</a></li>
                    <li class="portfolio_detail_title"><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/content/project_mp3.php">MP3 Player</a></li>
                    <li class="portfolio_detail_title"><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/content/project_patients.php">병원 환자 명단관리 프로그램</a></li>
                    <li class="portfolio_detail_title"><a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/content/project_vending_machine.php">재활용품으로 기부하는 자판기</a></li>
                </ul>
            </div>

            <div class="portfolio_content">
                <div>
                    <h1>매일 일기 프로그램</h1><br />
                    <h3>Adroid_studio</h3> <br>
                    <div class="portfolio_icon">
                        <span><a href="https://github.com/freean2468/project_shimpyo" target="_blank"><i class="fab fa-git-square"></i></a></span>
                        <span><a href="https://trello.com/b/gGeXNlLT/projectshimpyo%ED%83%9C%EC%8A%A4%ED%81%AC%EA%B4%80%EB%A6%AC%EB%B3%B4%EB%93%9C" target="_blank"><span>Trello</span></a></span>
                        <span><a href="https://www.youtube.com/watch?v=DTHIRK1alsk&t=1s" target="_blank"><i class="fab fa-youtube-square"></i></a></span>
                        <span><a href="https://cafe.naver.com/incodingram/171?boardType=L" target="_blank"><span>Naver</span></a></span>
                    </div><br />

                    <div>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/DTHIRK1alsk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br><br>
                        <h3>제작 상세</h3>
                        - 개발 기간 : 2021.03.04 ~ <br />
                        - 개발 <br />
                        팀장 : 송훈일 <br />
                        팀원 : 허선영, 김택민 <br /><br />

                        <h3>개발 환경</h3>
                        - Android Studio v.4.1.2, Android 11.0 (R) <br>
                        - IntelliJ IDEA CE 11.0.9.1 <br>
                        - Java version "15.0.1", javac 15.0.1 <br>
                        - scala_version [2.13.4] <br>
                        - sbt_version [1.4.5] <br>
                        - scalatra_version [2.7.1] <br>
                        - MySQL Server v.8.0.11 <br>
                        - Version : 8.0.23 <br>
                        - Docker version 20.10.2 <br>
                        - AWS 환경 <br>
                        - AWS Elastic Beanstalk <br>
                        - AWS Elastic Container Registry <br>
                        - AWS RDS MySQL <br>
                        - MySQL Server v.8.0.11 <br> <br>

                        <h3>실행 환경</h3>
                        - 안드로이드 <br />

                    </div>

                    <div class="portfolio_img_android">
                        <div><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/img/project_shimpyo/shimpyo1.png" alt="프로젝트shimpyo_결과사진1"></div>
                        <div><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/img/project_shimpyo/shimpyo2.png" alt="프로젝트shimpyo_결과사진2"></div>
                        <div><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/img/project_shimpyo/shimpyo3.png" alt="프로젝트shimpyo_결과사진3"></div>
                        <div><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/img/project_shimpyo/shimpyo4.png" alt="프로젝트shimpyo_결과사진4"></div>
                        <div><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/img/project_shimpyo/shimpyo5.png" alt="프로젝트shimpyo_결과사진5"></div>
                    </div><br />
                </div>
            </div>
        </div>

    </section>

    <!-- footer -->
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/footer.php"; ?>
    </footer>

</body>

</html>