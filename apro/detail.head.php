<?
        if($board['bo_table'] == 'gal') {
            $cate_num = 3;
            $page_num = 1;
            $cate_title = '갤러리';
            $page_title = '갤러리';
        }  else if($board['bo_table'] == 'branch') {
            $cate_num = 4;
            $page_num = 1;
            $cate_title = '서비스센터';
            $page_title = '안내';            
        } else if($board['bo_table'] == 'qa') {
            $cate_num = 5;
            $page_num = 1;
            $cate_title = '고객지원';
            $page_title = 'FAQ';            
        }  else if($board['bo_table'] == '11') {
            $cate_num = 5;
            $page_num = 2;
            $cate_title = '고객지원';
            $page_title = '1:1 문의';
        }  else if($board['bo_table'] == 'notice') {
            $cate_num = 5;
            $page_num = 3;
            $cate_title = '고객지원';
            $page_title = '공지사항';
        }
?>

<div id="sub">
            <div class="sub_banner bg0<?= $cate_num ?>" style="background-image:url(<?= G5_THEME_URL ?>/img/bg0<?= $cate_num ?>.jpg)"  >
                <div class="inner">
                    <strong><?= $as_company ?></strong>
                    <span><?= $as_slogan ?></span>
                </div>
            </div>
            <div class="sub_page">
                <div class="inner">
                    <ul>
                        <li><?= $as_company ?></li>
                        <li><?= $cate_title ?></li>
                        <li><?= $page_title ?></li>
                    </ul>
                </div>
            </div>
            <div class="sub_container">
                <div class="inner">
                    <article class="article content<?= $cate_num ?>">
                        <!-- 만약에 게시판이 있으면 게시판 타이틀을 보여주고 아니면 타이틀을 보여줘라 -->
                        <h3><?= $page_title ?> <span>/ <?= $cate_title ?></span></h3>
                        <div class="content">
