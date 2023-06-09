<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<div class="Wrap">
        <header class="header">
            <div class="head_container">
                <div class="inner">
                    <h1>
                        <a href="/">
                            <img src="<?= G5_THEME_URL ?>/img/logo.svg" alt="<?= $as_company ?>">
                        </a>
                    </h1>
                    <nav class="gnb">
                        <ul>
                            <li><? include G5_THEME_PATH.'/doc/nav01.php';?></li>
                            <li><? include G5_THEME_PATH.'/doc/nav02.php';?></li>
                            <li><? include G5_THEME_PATH.'/doc/nav03.php';?></li>
                            <li><? include G5_THEME_PATH.'/doc/nav04.php';?></li>
                            <li><? include G5_THEME_PATH.'/doc/nav05.php';?></li>
                            <li><? include G5_THEME_PATH.'/doc/nav06.php';?></li>
                            <li><a href="http://aproplus.dothome.co.kr/adm" target="_blank"><i class="xi-cog"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

<?php
if(!defined('_INDEX_')) { // index가 아닐 떄...
    include G5_THEME_PATH.'/detail.head.php'; // 서버페이지 해드...
}
?>