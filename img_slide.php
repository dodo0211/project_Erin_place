<body onload="slide_func()">
    <!-- header > slide container -->
    <div class="slideshow">
        <!-- container > nav slide*4 -->
        <div class="slideshow_slides">
            <a href="#"><img src="http://<?= $_SERVER["HTTP_HOST"] ?>/project_erin_place/img/slide1.jpg" alt="slide1"></a>
            <a href="#"><img src="http://<?= $_SERVER["HTTP_HOST"] ?>/project_erin_place/img/slide2.jpg" alt="slide2"></a>
            <a href="#"><img src="http://<?= $_SERVER["HTTP_HOST"] ?>/project_erin_place/img/slide3.jpg" alt="slide3"></a>
            <a href="#"><img src="http://<?= $_SERVER["HTTP_HOST"] ?>/project_erin_place/img/slide4.jpg" alt="slide4"></a>
        </div>

        <!-- 슬라이드 좌우 네비게이션 -->
        <div class="slideshow_nav">
            <a href="#" class="prev">prev</a>
            <a href="#" class="next">next</a>
        </div>
    </div>
</body>