<div>
    <nav class="navbar">
        <!-- 네비게이션 로고 -->
        <div class="navbar_logo">
            <i class="fas fa-keyboard"></i>
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/index.php">Erin's Place</a>
        </div>

        <!-- 네비게이션 메뉴 -->
        <!-- div도 블록, ul도 블럭이니까 둘 중 하나만 써도 됨 -->
        <ul class="navbar_menu" class="active">
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/index.php">MAIN</a></li>
            <li><a href="#">LANGUAGE</a></li>
            <li><a href="#">PORTFOLIO</a></li>
            <li><a href="#">Q&A</a></li>
        </ul>

        <div>
            <!-- 네비게이션 아이콘 -->
            <ul class="navbar_icons">
                <li><a href="https://github.com/dodo0211" target="_blank"><i class="fab fa-git-square"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCGjxLr0w5KoEjVyah2cmArw" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                <li><a href="https://cafe.naver.com/incodingram" target="_blank"><span>N</span></a></li>
                <li><a href="https://www.instagram.com/kind_zeroh/" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
                <li><a href="#" target="_blank"></a><i class="fab fa-facebook-square"></i></a></li>
            </ul>

            <ul class="register_login">
                <li><a href="#">Login</a></li>
                <li>|</li>
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_erin_place/member/member_form.php">Register</a></li>
            </ul>
        </div>

        <!-- 햄버거바 -->
        <a href="#" class="navbar_toggle" id="navbar_button"> <i class="fas fa-bars"></i> </a>

    </nav>
</div>

<div><?php include $_SERVER['DOCUMENT_ROOT'] . "/project_erin_place/img_slide.php"; ?></div>