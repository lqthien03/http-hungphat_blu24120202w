<?php
if (!defined('SOURCES'))
    die("Error");
/* static */
$popup = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('popup', 'photo_static'), 'fetch', 7200);
/* multi */
$vechungtoi = $d->rawQueryOne("select name$lang,desc$lang,content$lang,photo from #_static where type = ? limit 0,1", array('ve-chung-toi'));
$banner = $cache->get("select photo from #_photo where type = ? and act = ? limit 0,1", array('banner', 'photo_static'), 'fetch', 7200);
$news = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('tin-tuc'));
$dichvu = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('dich-vu'));
$tieuchi = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('tieu-chi'));
$quytrinh = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, id from #_news where type = ?  and find_in_set('hienthi',status) order by numb,id desc", array('quy-trinh'));
$baohanh = $d->rawQueryOne("select name$lang,desc$lang,content$lang from #_static where type = ? limit 0,1", array('bao-hanh'));
$video = $cache->get("select name$lang, desc$lang, link_video,photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('video'), 'result', 7200);
$danhgia = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang,content$lang, id, photo from #_news where type = ?  and find_in_set('hienthi',status) order by numb,id desc", array('danh-gia'));
$doitac = $cache->get("select photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('doi-tac'), 'result', 7200);
$muctuvan = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news where type = ?  and find_in_set('hienthi',status) order by numb,id desc", array('muc-tu-van'));
$duan_tieubieu = $cache->get("select name$lang,desc$lang, slugvi, slugen, id, photo from #_product where type = ? and find_in_set('tieubieu',status) and find_in_set('hienthi',status) order by numb,id desc", array('du-an'), 'result', 7200);
$mau_3d = $cache->get("select name$lang,desc$lang, slugvi, slugen, id, photo from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('thiet-ke-thi-cong'), 'result', 7200);
$duanList = $d->rawQuery("select id, name$lang, slugvi, slugen  from #_product_list where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('du-an'));

/* SEO */
$seopage = $d->rawQueryOne("select * from #_seopage where type = ? limit 0,1", array('trang-chu'));
$seo->set('h1', $seopage['title' . $seolang]);
if (!empty($seopage['title' . $seolang]))
    $seo->set('title', $seopage['title' . $seolang]);
else
    $seo->set('title', $titleMain);
if (!empty($seopage['keywords' . $seolang]))
    $seo->set('keywords', $seopage['keywords' . $seolang]);
if (!empty($seopage['description' . $seolang]))
    $seo->set('description', $seopage['description' . $seolang]);
$seo->set('url', $func->getPageURL());
$imgJson = (!empty($seopage['options'])) ? json_decode($seopage['options'], true) : null;
if (!empty($seopage['photo'])) {
    if (empty($imgJson) || ($imgJson['p'] != $seopage['photo'])) {
        $imgJson = $func->getImgSize($seopage['photo'], UPLOAD_SEOPAGE_L . $seopage['photo']);
        $seo->updateSeoDB(json_encode($imgJson), 'seopage', $seopage['id']);
    }
    if (!empty($imgJson)) {
        $seo->set('photo', $configBase . THUMBS . '/' . $imgJson['w'] . 'x' . $imgJson['h'] . 'x2/' . UPLOAD_SEOPAGE_L . $seopage['photo']);
        $seo->set('photo:width', $imgJson['w']);
        $seo->set('photo:height', $imgJson['h']);
        $seo->set('photo:type', $imgJson['m']);
    }
}
