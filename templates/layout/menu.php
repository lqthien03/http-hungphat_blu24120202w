<div class="w-menu <?= ($source == 'index') ? 'menu-index' : '' ?>">
    <div class="header-top">
        <div class="wrap-content">
            <div>
                <marquee behavior="" direction=""><?= $slogan['name' . $lang] ?></marquee>
            </div>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'vi'
                    }, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            <div id="google_translate_element"></div>
        </div>
    </div>
    <div class="menu">
        <div class="wrap-content">
            <ul class="menu-main">
                <a class="logo-head" href="">
                    <img onerror="this.src='<?= THUMBS ?>/220x80x1/assets/images/noimage.png';" src="<?= THUMBS ?>/220x80x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" alt="logo" title="logo" />
                </a>
                <li class=""><a class="<?php if ($com == '' || $com == 'index') echo 'active'; ?> transition" href="" title="<?= trangchu ?>"><?= trangchu ?></a></li>
                <li class=""><a class="<?php if ($com == 've-chung-toi') echo 'active'; ?> transition" href="ve-chung-toi" title="Về chúng tôi">Về chúng tôi</a></li>


                <li>
                    <a class="has-child <?php if ($com == 'du-an') echo 'active'; ?> transition" href="du-an" title="Dự án">Dự án</a>
                    <?php if (count($duanListMenu)) { ?>
                        <ul>
                            <?php foreach ($duanListMenu as $klist => $vlist) {
                                $duanCatMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                <li>
                                    <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                    <?php if (!empty($duanCatMenu)) { ?>
                                        <ul>
                                            <?php foreach ($duanCatMenu as $kcat => $vcat) {
                                                $productItemMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                                <li>
                                                    <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>

                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
                <li class=""><a class="<?php if ($com == 'thiet-ke-thi-cong') echo 'active'; ?> transition" href="thiet-ke-thi-cong" title="Thiết kế & thi công">Thiết kế & thi công</a></li>
                <?php if ($source == 'index') { ?>
                    <li class="" onclick="scrollTocuon('dangky')"><a class="<?php if ($com == 'bao-gia') echo 'active'; ?> transition" title="Báo giá">Báo giá</a></li>
                <?php }
                ?>

                <li>
                    <a class="has-child <?php if ($com == 'dich-vu') echo 'active'; ?> transition" href="dich-vu" title="Dịch vụ">Dịch vụ</a>
                    <?php if (count($dichvuListMenu)) { ?>
                        <ul>
                            <?php foreach ($dichvuListMenu as $klist => $vlist) {
                                $dichvuCatMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                <li>
                                    <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                    <?php if (!empty($dichvuCatMenu)) { ?>
                                        <ul>
                                            <?php foreach ($dichvuCatMenu as $kcat => $vcat) {
                                                $productItemMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                                <li>
                                                    <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>

                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
                <li class=""><a class="<?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="Tin tức">Tin tức</a></li>
                <li class=""><a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he" title="<?= lienhe ?>"><?= lienhe ?></a></li>
            </ul>
        </div>
    </div>
</div>
<?php include TEMPLATE . LAYOUT . "mmenu.php"; ?>