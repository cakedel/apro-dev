<?
$cate_num = 1;
$cate_title = '회사소개';
$page_num = 2;
$page_title = '회사전경';
include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>
<section class="view">
    <div class="sub_slide">
        <figure>
        <img src="<?= G5_THEME_URL ?>/img/factory01.jpg" alt="">
        </figure>
        <figure>
        <img src="<?= G5_THEME_URL ?>/img/factory03.jpg" alt="">
        </figure>
        <figure>
        <img src="<?= G5_THEME_URL ?>/img/factory02.jpg" alt="">
        </figure>
        <figure>
        <img src="<?= G5_THEME_URL ?>/img/factory04.jpg" alt="">
        </figure>
        <figure>
        <img src="<?= G5_THEME_URL ?>/img/factory05.jpg" alt="">
        </figure>
        <figure>
        <img src="<?= G5_THEME_URL ?>/img/factory06.jpg" alt="">
        </figure>
    </div>
</section>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>