<?php
$newsdanhmuc = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('danhmucnoibat',status) and find_in_set('hienthi',status) order by numb,id desc", array($com));
$albumdanhmuc = $cache->get("select photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('news-danhmuc'), 'result', 7200);

?>
<div class="wrap_newsdanhmuc">
    <div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
    <div class="flex_newsdm">
        <div class="left_newsdm">


            <div class="row-news row">
                <?php if (isset($news) && count($news) > 0) { ?>
                <?php foreach ($news as $k => $v) { ?>
                <div class="news d-flex flex-wrap col-md-12 pb-3 mb-2 box_newsdanhmuc" data-aos="fade-up" data-aos-duration="1000">
                    <a class="pic-news scale-img text-decoration-none" href="<?= $v[$sluglang] ?>"
                        title="<?= $v['name' . $lang] ?>">
                        <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/370x200x1/assets/images/noimage.png';"
                            data-src="<?= THUMBS ?>/370x200x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>"
                            alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                    </a>
                    <div class="info-news">
                        <h3>
                            <a class="name-news text-decoration-none text-split" href="<?= $v[$sluglang] ?>"
                                title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                        </h3>
                       <div class="timer_newsdm">
                        <img src="assets/icons/calendar.png" alt="" class="calendarnews">
                        <div class="txt_cldar"><?= date("d/m/Y", $v['date_created']) ?></div>
                       </div>
                        <p class="desc-news text-split mb-0"><?= $v['desc' . $lang] ?></p>
                    </div>
                </div>
                <?php } ?>
                <?php } else { ?>
                <div class="col-12">
                    <div class="alert alert-warning w-100" role="alert">
                        <strong><?= khongtimthayketqua ?></strong>
                    </div>
                </div>
                <?php } ?>
                <div class="col-12">
                    <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
                </div>
            </div>
        </div>
        <div class="right_newsdm">
            <div class="position-relative slide_index slide_albumanhnews">
                <div class="owl-page owl-carousel owl-theme"
                    data-items="screen:0|items:1|margin:10,screen:425|items:1|margin:10,screen:575|items:1|margin:10,screen:767|items:1|margin:10,screen:991|items:1|margin:10,screen:1199|items:1|margin:10"
                    data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1"
                    data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="500" data-autoplaytimeout="5000"
                    data-dots="0" data-nav="1"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                    data-navcontainer=".control-albumanhnews">
                    <?php foreach($albumdanhmuc as $v) { ?>
                    <a href="<?=$v['link']?>">
                        <div class="gr_albumnewsdmuc">
                            <img class="lazy w-100" onerror="this.src='assets/images/noimage.png';"
                                data-src="<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>"
                                title="<?= $v['name' . $lang] ?>" />
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div class="gr_danhmucnews">
                <div class="title_dmnews"><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?> NỔI BẬT</div>
                <div class="gr__dmucnews">
                    <div class="slick_newsdm">
                        <?php foreach ($newsdanhmuc as $k => $v) { ?>
                        <div>
                            <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                                <div class="gr_newsdmuc">
                                    <div class="img_newsdmuc scale-img">
                                        <img class="lazy w-100"
                                            onerror="this.src='<?= THUMBS ?>/100x70x1/assets/images/noimage.png';"
                                            data-src="<?= THUMBS ?>/100x70x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>"
                                            alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                    </div>
                                    <div class="grname_newsdmuc">
                                        <div class="name_newsdm"><?=$v['name'.$lang]?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>