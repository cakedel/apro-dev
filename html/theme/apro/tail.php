<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php
if(!defined('_INDEX_')) { // index가 아닐 떄...
    include G5_THEME_PATH.'/detail.tail.php'; // 서버페이지 푸터...
}
?>

<footer class="footer">
    <div class="inner">
        <h2>
            <a href="">
                <img src="<?= G5_THEME_URL ?>/img/logo_white.svg" alt="">
            </a>
        </h2>
        <div class="foot_info">
            <ul>
                <li><?= $as_company ?></li>
                <li>대 표 : <?= $as_name ?></li>
                <li>사업자등록번호 : <?= $as_num ?></li>
                <li>Address : <?= $as_address ?></li>
                <li>Tel : <?= $as_tel ?></li>
                <li>Fax : <?= $as_fax ?></li>
                <li><?= $as_mail ?></li>
            </ul>
            <p>Copyright &copy; Aproplus All rights reserved.</p>
        </div>
    </div>
        </footer>
    </div>

    <div class="toTop">
        <i class="xi-arrow-top"></i>
    </div>

    <button class="mopen">
        <i class="xi-bars"></i>
    </button>


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");