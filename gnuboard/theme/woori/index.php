<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>






<section class="main-issue">

<div class="slider">
    <div class="slide">
        <a href=""><img src="<?php echo G5_THEME_URL ?>/images/main01.png"></a>
    </div>
    <div class="slide">
        <a href=""><img src="<?php echo G5_THEME_URL ?>/images/main01.png"></a>
    </div>
    <div class="slide">
        <a href=""><img src="<?php echo G5_THEME_URL ?>/images/main01.png"></a>
    </div>
</div>

<button class="left">
    <i class='bx bx-chevron-left'></i>이전</button>
<button class="right">
    <i class='bx bx-chevron-right'></i>다음</button>

</section>
<section class="main-partner">
<div class="container">
<h2>
    공식파트너
</h2>

<ul>
    <li class="fuji">후지제록스</li>
    <li class="brother">브라더</li>
    <li class="lucoms">루컴즈</li>
    <li class="atec">에이텍</li>
</ul>
<p>상담문의
    <strong>064.746.4254</strong>
</p>
</div>
</section>
<section class="main-content">
<div class="container">
<div class="notice">


    <?php
	echo latest('theme/notice', 'notice', 4, 23);		//공지사항게시판
    ?>


</div>

<div class="links">
    <a class="rental" href="">
        <i class='bx bx-printer'></i>렌탈서비스</a>
    <a class="used" href="">
        <i class='bx bx-cart-alt'></i>중고장터</a>
    <a class="as" href="">
        <i class='bx bx-chalkboard'></i>a/s안내</a>
</div>

</div>
</section>

<section class="main-list">
<div class="container">
<h2>
    렌탈제품 안내

    <a href="">
        <i class='bx bx-list-plus'></i>더보기</a>
</h2>
<div class="slider">
    <div class="slide">
        <a href="">
            <p class="image"><img src="/source/images/temp-product01.png"></p>
            <h3>신도리코 N500</h3>
        </a>
    </div>
    <div class="slide">
        <a href="">
            <p class="image"><img src="/source/images/temp-product01.png"></p>
            <h3>신도리코 N500</h3>
        </a>
    </div>
    <div class="slide">
        <a href="">
            <p class="image"><img src="/source/images/temp-product01.png"></p>
            <h3>신도리코 N500</h3>
        </a>
    </div>
    <div class="slide">
        <a href="">
            <p class="image"><img src="/source/images/temp-product01.png"></p>
            <h3>신도리코 N500</h3>
        </a>
    </div>
    <div class="slide">
        <a href="">
            <p class="image"><img src="/source/images/temp-product01.png"></p>
            <h3>신도리코 N500</h3>
        </a>
    </div>
</div>

<button class="left">
    <i class='bx bx-left-arrow-circle'></i>이전</button>
<button class="right">
    <i class='bx bx-right-arrow-circle'></i>다음</button>
</div>

</div>
</section>










<?php
include_once(G5_THEME_PATH.'/tail.php');
?>