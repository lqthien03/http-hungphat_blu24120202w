<!-- giới thiệu -->
<div class="wrap-gioithieu">
    <div class="wrap-content">
        <div class="box-main-gioithieu">
            <div class="img-gioithieu" data-aos="fade-right" data-aos-duration="1000">
                <div class="scale-img">
                    <img class="w-100 lazy" onerror="this.src='<?= THUMBS ?>/430x430x1/assets/images/noimage.png';"
                        data-src="<?= THUMBS ?>/430x430x1/<?= UPLOAD_NEWS_L . $vechungtoi['photo'] ?>"
                        alt="<?= $vechungtoi['name' . $lang] ?>" />
                </div>
            </div>
            <div class="info-gioithieu" data-aos="fade-left" data-aos-duration="1000">
                <span class="vechungtoi">
                    Về chúng tôi
                </span>
                <span class="tieude title-effect"><?= $vechungtoi['name' . $lang] ?></span>
                <div class="desc-gioithieu"> <?= htmlspecialchars_decode($vechungtoi['desc' . $lang]) ?></div>
                <a class="xem-them" title="xem thêm" href="ve-chung-toi">
                    <div class="btn_xemthem w-clear">
                        Xem thêm
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- dịch vụ -->
<div class="wrap-dichvu">
    <div class="wrap-content">
        <div class="box-main-dichvu" data-aos="fade-up" data-aos-duration="1000">
            <div class="owl-page owl-carousel owl-theme"
                data-items="screen:0|items:1|margin:10,screen:425|items:1|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:10,screen:991|items:3|margin:20,screen:1199|items:2|margin:60"
                data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1"
                data-navcontainer=".control-news">
                <?php foreach ($dichvuListMenu as $v) { ?>
                    <div class="dichvu-item" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                        <div class="dichvu-img text-decoration-none">
                            <a href="<?= $v[$sluglang] ?>" class="scale-img">
                                <img class="w-100 lazy"
                                    onerror="this.src='<?= THUMBS ?>/570x500x1/assets/images/noimage.png';"
                                    data-src="<?= THUMBS ?>/570x500x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>"
                                    alt="<?= $v['name' . $lang] ?>" />
                            </a>
                        </div>
                        <div class="dichvu-info">
                            <h3 class="dichvu-title">Dịch vụ</h3>
                            <h3 class="dichvu-name text-split-2"><?= $v['name' . $lang] ?></h3>
                            <div class="dichvu-xemthem">
                                <a href="<?= $v[$sluglang] ?>">Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- dự án tiêu biểu -->
<div class="wrap-duan-tieubieu">
    <div class="wrap-content">
        <div class="title-main ">
            <span class="title-effect">Dự án tiêu biểu</span>
        </div>
        <div class="box-main-duan-tieubieu" data-aos="fade-up" data-aos-duration="1000">
            <div class="left-duan-tieubieu">
                <?php foreach ($duan_tieubieu as $k => $v) {
                    if ($k < 1) { ?>
                        <div class="duan-tieubieu-item">
                            <a class="duan-tieubieu-img scale-img" href="<?= $v[$sluglang] ?>">
                                <img class="w-100 lazy" onerror="this.src='<?= THUMBS ?>/450x280x1/assets/images/noimage.png';"
                                    data-src="<?= THUMBS ?>/450x280x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>"
                                    alt="<?= $v['name' . $lang] ?>" />

                            </a>
                            <h3 class="duan-tieubieu-name"><?= $v['name' . $lang] ?></h3>

                        </div>

                <?php }
                }
                ?>

            </div>
            <div class="right-duan-tieubieu">

                <div class="owl-page owl-carousel owl-theme"
                    data-items="screen:0|items:1|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:10,screen:991|items:3|margin:20,screen:1199|items:3|margin:20"
                    data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1"
                    data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1"
                    data-navcontainer=".control-duan-tieubieu">
                    <?php foreach ($duan_tieubieu as $k => $v) {
                        if ($k < 10) { ?>

                            <div class="duan-tieubieu-item">
                                <a class="duan-tieubieu-img scale-img" href="<?= $v[$sluglang] ?>">
                                    <img class="w-100 lazy" onerror="this.src='<?= THUMBS ?>/230x280x1/assets/images/noimage.png';"
                                        data-src="<?= THUMBS ?>/230x280x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>"
                                        alt="<?= $v['name' . $lang] ?>" />

                                </a>
                                <h3 class="duan-tieubieu-name"><?= $v['name' . $lang] ?></h3>

                            </div>
                    <?php }
                    }
                    ?>
                </div>
                <div class="control-duan-tieubieu control-owl transition"></div>
            </div>
        </div>
    </div>
</div>

<!-- tất cả dự án -->

<?php foreach ($duanList as $klist => $vlist) {
    $duanCat = $cache->get("select name$lang , slugvi, slugen, id from #_product_cat where id_list = ?  and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id']), 'result', 7200);
?>
    <div class="wrap-duan <?= ($klist % 2 != 0) ? 'bgr' : '' ?>">
        <div class="wrap-content">
            <div class="title-main">
                <span class="title-effect"><?= $vlist['name' . $lang] ?></span>
            </div>
            <div class="click_cat">
                <?php foreach ($duanCat as $vcat) { ?>
                    <p class="" data-list="<?= $vlist['id'] ?>" data-cat="<?= $vcat['id'] ?>"><?= $vcat['name' . $lang] ?> <i class="bi bi-chevron-down"></i></p>
                <?php }
                ?>
            </div>
            <div class=" list-item">
                <div class="<?= ($klist % 2 === 1) ? 'daonguoc' : '' ?>  show_padding show_padding<?= $vlist['id'] ?>" data-list="<?= $vlist['id'] ?>" data-cat=""></div>
            </div>
        </div>
    </div>
<?php }
?>

<!-- Mẫu thiết kế 3d -->
<div class="wrap-mau-3d">
    <div class="wrap-content">
        <div class="title-main">
            <span class="title-effect">Những mẫu thiết kế 3D</span>
        </div>
        <div class="box-main-mau-3d" data-aos="fade-up" data-aos-duration="1000">
            <div class="left-mau-3d">
                <?php foreach ($mau_3d as $k => $v) {
                    if ($k < 1) { ?>
                        <div class="mau-3d-item">
                            <a class="mau-3d-img scale-img" href="<?= $v[$sluglang] ?>">
                                <img class="w-100 lazy" onerror="this.src='<?= THUMBS ?>/450x280x1/assets/images/noimage.png';"
                                    data-src="<?= THUMBS ?>/450x280x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>"
                                    alt="<?= $v['name' . $lang] ?>" />
                            </a>
                            <h3 class="mau-3d-name"><?= $v['name' . $lang] ?></h3>
                        </div>
                <?php }
                }
                ?>
            </div>
            <div class="right-mau-3d">
                <div class="owl-page owl-carousel owl-theme"
                    data-items="screen:0|items:1|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:10,screen:991|items:3|margin:20,screen:1199|items:3|margin:20"
                    data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1"
                    data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1"
                    data-navcontainer=".control-mau-3d">
                    <?php foreach ($mau_3d as $k => $v) {
                        if ($k < 10) { ?>
                            <div class="mau-3d-item">
                                <a class="mau-3d-img scale-img" href="<?= $v[$sluglang] ?>">
                                    <img class="w-100 lazy" onerror="this.src='<?= THUMBS ?>/230x280x1/assets/images/noimage.png';"
                                        data-src="<?= THUMBS ?>/230x280x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>"
                                        alt="<?= $v['name' . $lang] ?>" />

                                </a>
                                <h3 class="mau-3d-name"><?= $v['name' . $lang] ?></h3>

                            </div>
                    <?php }
                    }
                    ?>
                </div>
                <div class="control-mau-3d control-owl transition"></div>
            </div>
        </div>
    </div>
</div>
<!-- banner -->
<div class="wrap-banner">
    <img class="w-100 lazy" onerror="this.src='<?= THUMBS ?>/1366x300x1/assets/images/noimage.png';"
        data-src="<?= THUMBS ?>/1366x300x1/<?= UPLOAD_PHOTO_L . $banner['photo'] ?>"
        alt="<?= $banner['name' . $lang] ?>" />
</div>
<!-- tiêu chí -->
<div class="wrap-tieuchi">
    <div class="title-main">
        <span class="title-effect">Điểm khác biệt về quy trình làm việc</span>
    </div>
    <div class="box-main-tieuchi" data-aos="fade-up" data-aos-duration="1000">
        <div class="wrap-content">
            <div class="owl-page owl-carousel owl-theme"
                data-items="screen:0|items:1|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:10,screen:991|items:3|margin:20,screen:1199|items:3|margin:20"
                data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1"
                data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1"
                data-navcontainer=".control-tieuchi">
                <?php foreach ($tieuchi as $v) { ?>
                    <div class="tieuchi-item">
                        <div class="tieuchi-img">
                            <img class="lazy" onerror="this.src='<?= THUMBS ?>/65x65x1/assets/images/noimage.png';"
                                data-src="<?= THUMBS ?>/65x65x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>"
                                alt="<?= $v['name' . $lang] ?>" />
                        </div>
                        <div class="tieuchi-info">
                            <h3 class="tieuchi-name text-split-2"><?= $v['name' . $lang] ?></h3>
                        </div>

                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
    <div class="box-main-quytrinh" data-aos="fade-up" data-aos-duration="1000">
        <div class="wrap-content">
            <div class="top-quytrinh" data-aos="fade-right" data-aos-duration="1000">
                <?php foreach ($quytrinh as $k => $v) {
                    if ($k < 5) { ?>
                        <div class="quytrinh-item <?= ($k % 2 != 0) ? '' : 'quytrinh-none' ?>">
                            <div class="quytrinh-info">
                                <h3 class="quytrinh-name text-split-2"><?= $v['name' . $lang] ?></h3>
                                <p class="quytrinh-desc text-split-4"><?= $v['desc' . $lang] ?></p>
                            </div>
                        </div>
                <?php }
                }
                ?>
            </div>
            <div class="center-quytrinh">
                <?php foreach ($quytrinh as $k => $v) {
                    if ($k < 5) { ?>
                        <div class="quytrinh-number">
                            <h3>0<?= $k + 1 ?></h3>
                        </div>
                <?php }
                }
                ?>
            </div>
            <div class="bottom-quytrinh" data-aos="fade-left" data-aos-duration="1000">
                <?php foreach ($quytrinh as $k => $v) {
                    if ($k < 5) { ?>
                        <div class="quytrinh-item <?= ($k % 2 == 0) ? '' : 'quytrinh-none' ?>">
                            <div class="quytrinh-info">
                                <h3 class="quytrinh-name text-split-2"><?= $v['name' . $lang] ?></h3>
                                <p class="quytrinh-desc text-split-4"><?= $v['desc' . $lang] ?></p>
                            </div>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="box-main-baohanh">
        <div class="wrap-content">
            <div class="box-baohanh" data-aos="fade-up" data-aos-duration="1000">
                <div class="line-baohanh">
                    <div class="left-baohanh"><?= $func->decodeHtmlChars($baohanh['content' . $lang]) ?></div>
                    <div class="right-baohanh"><?= $func->decodeHtmlChars($baohanh['desc' . $lang]) ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrap-dangky" id="dangky" data-dmuc="dangky">
    <div class="wrap-content">
        <div class="box-main-dangky" data-aos="fade-up" data-aos-duration="1000">
            <div class="title-main">
                <span class="title-effect">Liên hệ với chúng tôi</span>
                <div class="line"></div>
            </div>
            <form class="group-newsletter validation-newsletter" novalidate method="post" action=""
                enctype="multipart/form-data">
                <div class="col-group">
                    <div class="input-group">
                        <input type="text" name="dataNewsletter[fullname]" id="fullname-newsletter"
                            placeholder="Họ và tên:" class="input" required="">
                    </div>
                    <div class="input-group">
                        <input type="number" name="dataNewsletter[phone]" id="phone-newsletter"
                            placeholder="Số điện thoại:" class="input" required="">
                    </div>
                </div>
                <div class="col-group">
                    <div class="input-group">
                        <input type="text" name="dataNewsletter[email]" id="email-newsletter" placeholder="Email:"
                            class="input" required="">
                    </div>
                    <div class="input-group">
                        <input type="text" name="dataNewsletter[address]" id="address-newsletter"
                            placeholder="Thành phố:" class="input" required="">
                    </div>
                </div>
                <div class="newsletter-button">
                    <input type="submit" name="submit-newsletter" value="GỬI NGAY" disabled>
                    <input type="hidden" class="" name="dataNewsletter[type]" value="dangkynhantin">
                    <input type="hidden" class="" name="dataNewsletter[date_created]" value="<?= time() ?>">
                    <input type="hidden" class="" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Đối tác -->
<div class="wrap-doitac">
    <div class="wrap-content">
        <div class="title-main">
            <span class="title-effect">Đối tác</span>
        </div>
        <div class="box-main-doitac" data-aos="fade-up" data-aos-duration="1000">
            <div class="owl-page owl-carousel owl-theme"
                data-items="screen:0|items:3|margin:10,screen:425|items:3|margin:10,screen:575|items:3|margin:10,screen:767|items:3|margin:10,screen:991|items:3|margin:20,screen:1199|items:6|margin:20"
                data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1"
                data-navcontainer=".control-doitac">
                <?php foreach ($doitac as $v) { ?>
                    <div class="doitac-item">
                        <img class="lazy" onerror="this.src='<?= THUMBS ?>/185x100x1/assets/images/noimage.png';"
                            data-src="<?= THUMBS ?>/185x100x1/<?= UPLOAD_PHOTO_L . $v['photo'] ?>"
                            alt="<?= $v['name' . $lang] ?>" />
                    </div>
                <?php }
                ?>
            </div>

        </div>
    </div>
</div>


<div class="wrap-tintuc">
    <div class="wrap-content">
        <div class="title-main">
            <span class="title-effect">TIN TỨC & SỰ KIỆN</span>
        </div>
        <div class="box-main-tintuc" data-aos="fade-up" data-aos-duration="1000">
            <div class="owl-page owl-carousel owl-theme"
                data-items="screen:0|items:1|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:2|margin:10,screen:991|items:3|margin:20,screen:1199|items:3|margin:20"
                data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1"
                data-navcontainer=".control-tintuc">
                <?php foreach ($news as $v) { ?>
                    <a href="<?= $v[$sluglang] ?>" class="item-tintuc">
                        <div class="tintuc-img scale-img">
                            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/386x250x1/assets/images/noimage.png';"
                                data-src="<?= THUMBS ?>/386x250x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>"
                                alt="<?= $v['name' . $lang] ?>" />
                        </div>
                        <div class="tintuc-info">
                            <h3 class="tintuc-name text-split-2"><?= $v['name' . $lang] ?></h3>
                            <div class="tintuc-time">
                                <i class="bi bi-calendar-week"></i>
                                <?= date("d/m/Y", $v['date_created']) ?>
                            </div>
                            <p class="tintuc-desc text-split-3"><?= $v['desc' . $lang] ?></p>
                        </div>
                    </a>
                <?php }
                ?>
            </div>
        </div>
    </div>
</div>