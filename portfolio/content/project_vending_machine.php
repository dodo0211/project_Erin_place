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
                <h1>재활용품으로 기부하는 자판기</h1><br />
                <h3>C_lang</h3> <br>
                <div class="portfolio_icon">
                    <span><a href="https://github.com/dodo0211/vandingMachine" target="_blank"><i class="fab fa-git-square"></i></a></span>
                    <span><a href="https://cafe.naver.com/incodingram/154" target="_blank"><span>Naver</span></a></span>
                </div><br />

                <div>
                    <br>
                    <h3>제작 상세</h3>
                    - 개발 기간 : 2021 ~ <br />
                    - 개발 <br />
                    : 허선영 <br /><br />

                    <h3>개발 환경</h3>
                    - IntelliJ IDEA CE 11.0.9.1 <br>
                    - Version : 8.0.23 <br>
                    - Docker version 20.10.2 <br><br>

                    <h3>실행 환경</h3>
                    - window 10 <br /><br>

                </div>

                <div class="portfolio_img">
                    <div><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/img/project_vending_machine/vending_machine1.png" alt="프로젝트vending_machine_결과사진1"></div>
                    <div><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/img/project_vending_machine/vending_machine2.png" alt="프로젝트vending_machine_결과사진2"></div>
                    <div><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/img/project_vending_machine/vending_machine3.png" alt="프로젝트vending_machine_결과사진3"></div>
                    <div><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/portfolio/img/project_vending_machine/vending_machine4.png" alt="프로젝트vending_machine_결과사진4"></div>
                </div><br />
            </div>
        </div>

    </section>

    <!-- footer -->
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/footer.php"; ?>
    </footer>

</body>

</html>