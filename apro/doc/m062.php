<?
$cate_num = 6;
$cate_title = '구매·렌탈';
$page_num = 2;
$page_title = '렌탈';

include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>
<section class="rental">
<img src="<?= G5_THEME_URL ?>/img/productFrontPng.png" alt="" class="product">
<div class="right">
    <h4>렌탈 문의</h4>
    <div class="content">
        <div class="charge">
            <p class="price">월 <strong>6만원</strong>의 저렴한 가격으로 렌탈 서비스를 받아보세요</p>
            <div class="num">
                <p><i class="xi-call"></i>010-8549-7303</p>
                <p><i class="xi-call"></i>1544-3673</p>
            </div>
        </div>
    </div>
</div>
</section>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>