<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>





<main>
            <section class="mainVisual">
                <div class="main_slide">
                    <figure>
                    <img src="<?= G5_THEME_URL ?>/img/productFrontPng.png" alt="" class="product">
                        <div class="content">
                            <h2>공기정화기 토션플러스</h2>
                            <p>숲 속에 있는 것 같은 맑은 공기를 선사합니다<br>토션장·원적외선·음이온을 방사하는 우리집 건강지킴이</p>
                            <div class="link_button">
                            <a href="<?= G5_THEME_URL ?>/doc/m021.php"><i class="xi-angle-right-min"></i>자세히보기</a>
                            <a href="<?= G5_THEME_URL ?>/doc/m061.php"><i class="xi-angle-right-min"></i>구매 및 렌탈</a>
                            </div>
                        </div>
                    </figure>
                    <figure>
                    <img src="<?= G5_THEME_URL ?>/img/brand_medal.png" alt="" class="brand">
                    <div class="content">
                        <h2>2022 대한민국 최고브랜드 대상</h2>
                        <strong>(주) 아프로플러스 - 토션이온발생 공기정화기 부문</strong>
                        <p>아프로플러스가 토션이온 발생 공기정화기 부문에서 2022 대한민국 최고브랜드 대상을 수상했습니다<br>대기오염으로 인해 대두된 실내 공기정화 시장을 선도하도록 노력하겠으며 국내뿐만 아니라 시장을 넓혀 해외 고객들도<br>
                        더 맑은 공기를 통해 건강해질 수 있도록 하겠습니다</p>                    
                    </div>
                    </figure>
            </section>
            <section class="productIntro">
                <div class="container">
                    <h2>제품소개</h2>
                    <div class="inner">
                        <div class="content">
                        <figure><img src="<?= G5_THEME_URL ?>/img/thumb_air.jpg" alt=""></figure><div class="des">
                            <h3>토션플러스</h3><p>토션장·음이온·원적외선을 방출하는 공기정화기<br>필터 필요 없이 냄새 제거, 공기 정화</p><a href="<?= G5_THEME_URL ?>/doc/m021.php">자세히보기</a>
                        </div>
                        </div>
                        <div class="content">
                            <figure><img src="<?= G5_THEME_URL ?>/img/thumb_urinary.jpg" alt=""></figure><div class="des"><h3>요실금 치료기</h3><p>갱년기 여성들의 요실금, 빈뇨, 야간뇨, 과민성 방광, 근육통 등을 치료해주는 기기</p><a href="<?= G5_THEME_URL ?>/doc/m022.php">자세히보기</a>
                                </div>
                        </div>
                        <div class="content">
                            <figure><img src="<?= G5_THEME_URL ?>/img/thumb_food.jpg" alt=""></figure><div class="des"><h3>음식물 처리기</h3><p>분쇄하고 고온에 건조하여 쾌적한 주방환경을 만들어 주는 주방기기</p><a href="<?= G5_THEME_URL ?>/doc/m023.php">자세히보기</a>
                                </div>
                        </div>                        
                    </div>
                </div>
            </section>
            <section class="mainMap">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1681886592232" class="root_daum_roughmap root_daum_roughmap_landing map"></div>
                <!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
                <script charset="UTF-8" class="daum_roughmap_loader_script"
                    src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp": "1681886592232",
                        "key": "2ehoo",
                        // "mapWidth": "100%",
                        // "mapHeight": "360"
                    }).render();
                </script>
            </section>
            <section class="mainCustomer">
                <div class="inner">
                    <div class="news">
                        <h3>news &amp; notice <a href="/bbs/board.php?bo_table=notice"><i class="xi-plus"></i></a></h3>
                        <div class="latest">
                            <?php
                                echo latest('theme/basic', 'notice', 4, 35);
                            ?>	
                        </div>
                    </div>
                    <div class="faq">
                    <h3>FAQ <a href="/bbs/board.php?bo_table=qa"><i class="xi-plus"></i></a></h3>
                        <div class="latest">
                            <?php
                                echo latest('theme/basic', 'qa', 4, 35);
                            ?>	
                        </div>  
                    </div>
                    <div class="contact">
                        <a href="tel:<?= $as_tel ?>" class="tel"><?= $as_tel ?></a>
                        <div class="social">
                            <a href="https://band.us/n/aca181R91c17r" target="_blank" class="band"><img src="<?= G5_THEME_URL ?>/img/band_icon.png" alt=""></a>
                            <a
                                href="https://www.youtube.com/@user-ru9xx1my5t" target="_blank" class="youtube">
                                <i class="xi-youtube-play"></i>
                            </a>                            
                        </div>
                    </div>
                </div>
            </section>
        </main>















<?php
include_once(G5_THEME_PATH.'/tail.php');