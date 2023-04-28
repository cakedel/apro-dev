<?
$cate_num = 1;
$cate_title = '회사소개';
$page_num = 3;
$page_title = '특허 및 인증서';
include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>
<div class="certificate">
    <div class="certifi_slide">
<figure>
<img src="<?= G5_THEME_URL ?>/img/air_certificate.jpg" alt="">
<p>공기 정화기 특허증</p>
</figure>
<figure>
<img src="<?= G5_THEME_URL ?>/img/kti_certificate.jpg" alt="">
<p>KTI마크 안전확인 신고 증명서</p>
</figure>
<figure>
<img src="<?= G5_THEME_URL ?>/img/ion_certificate.jpg" alt="">
<p>음이온 방출 시험 성적서</p>
</figure>
<figure>
<img src="<?= G5_THEME_URL ?>/img/light_certificate.jpg" alt="">
<p>원적외선 시험 성적서</p>
</figure>
<figure>
<img src="<?= G5_THEME_URL ?>/img/ozon_certificate.jpg" alt="">
<p>오존농도 측정 시험 결과서</p>
</figure>
<figure>
<img src="<?= G5_THEME_URL ?>/img/ozon_certificate02.jpg" alt="">
<p>오존농도 측정 시험 결과서</p>
</figure>
<figure>
<img src="<?= G5_THEME_URL ?>/img/design_certificate.jpg" alt="">
<p>디자인 특허증</p>
</figure>
    </div>
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>