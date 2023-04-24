<?
$cate_num = 6;
$cate_title = '구매·렌탈';
$page_num = 1;
$page_title = '쇼핑몰';

include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>
<section class="shop">
    <img src="<?= G5_THEME_URL ?>/img/productFrontPng.png" alt="" class="product">
    </figure>    
    <div class="content">
        <div class="box">
            <figure>
                <a href="https://www.coupang.com/vp/products/7102240388?itemId=17731436147&vendorItemId=84896165975&q=%ED%86%A0%EC%85%98%ED%94%8C%EB%9F%AC%EC%8A%A4&itemsCount=36&searchId=a5c10f2d30b94f0fb4c296f3726d54a3&rank=1&isAddedCart=" target="_blank">
                    <img src="<?= G5_THEME_URL ?>/img/Coupang_logo.png" alt="" target="_blank">
                </a>
            </figure>
        </div>
        <div class="box">
            <figure>
                <a href="https://smartstore.naver.com/oorom/products/7977579837" target="_blank">
                    <img src="<?= G5_THEME_URL ?>/img/naver_shopping_logo.png" alt="">
                </a>
            </figure>
        </div>
        <div class="box">
            <figure>
                <a href="http://item.gmarket.co.kr/Item?goodscode=2768953979" target="_blank">
                    <img src="<?= G5_THEME_URL ?>/img/Gmarket_logo.png" alt="">
                </a>
            </figure>
        </div>
        <div class="box">
            <figure>
                <a href="https://www.11st.co.kr/products/5443237571" target="_blank">                    
                    <img src="<?= G5_THEME_URL ?>/img/11street_logo.png" alt="">
                </a>
            </figure>
        </div>
        <div class="box">
            <figure>
                <a href="http://itempage3.auction.co.kr/DetailView.aspx?ItemNo=C936526355&frm3=V2" target="_blank">                    
                    <img src="<?= G5_THEME_URL ?>/img/auction_logo.png" alt="">
                    </a>
            </figure>
        </div>
        <div class="box">
            <figure>
                <a href="https://www.lotteon.com/p/product/LO2066342997?sitmNo=LO2066342997_2066342998&entryPoint=bo" target="_blank">
                    <img src="<?= G5_THEME_URL ?>/img/lotte_logo.png" alt="">
                </a>
            </figure>
        </div>
    </div>
</section>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>