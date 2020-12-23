<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>




</div>
    <!-- E:mainContent -->



<footer id="footer">
        <div class="container">
            <ul class="footer-tools">
                <li>
                    <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
                </li>
                <li>
                    <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
                </li>
                <li>
                    <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
                </li>
            </ul>

            <address>
                <p>
                    (주)우리정보기술 대표 : 김희영 사업자등록번호 : 000-000-00000 63119 
                </p>
                <p>
                    제주 제주시 신대로63 / Tel. 064-746-4524
                </p>
                <p class="copyright">© 우리정보기술</p>
            </address>

        </div>
    </footer>


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>