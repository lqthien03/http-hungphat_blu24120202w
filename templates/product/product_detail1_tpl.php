<div class="grid-pro-detail w-clear">
    <div class="row position-relative">
        <div class="left-pro-detail col-md-6">
            <div class="gr_leftproductdetail">
                <a id="Zoom-1" class="MagicZoom"
                    data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;"
                    href="<?= ASSET ?>/product/540x540x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>"
                    title="<?= $rowDetail['name' . $lang] ?>">
                    <?= $func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                </a>
                <?php if ($rowDetailPhoto) {
                if (count($rowDetailPhoto) > 0) { ?>
                <div class="gallery-thumb-pro">
                    <div class="owl-page owl-carousel owl-theme owl-pro-detail" data-items="screen:0|items:5|margin:10"
                        data-nav="1" data-navcontainer=".control-pro-detail">
                        <div>
                            <a class="thumb-pro-detail" data-zoom-id="Zoom-1"
                                href="<?= ASSET ?>/product/540x540x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>"
                                title="<?= $rowDetail['name' . $lang] ?>">
                                <?= $func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                            </a>
                        </div>
                        <?php foreach ($rowDetailPhoto as $v) { ?>
                        <div>
                            <a class="thumb-pro-detail" data-zoom-id="Zoom-1"
                                href="<?= ASSET ?>/product/540x540x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>"
                                title="<?= $rowDetail['name' . $lang] ?>">
                                <?= $func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="control-pro-detail control-owl transition"></div>
                </div>
                <?php }
            } ?>
            </div>
        </div>

        <div class="right-pro-detail col-md-6 col-lg-4 mb-4">
            <p class="title-pro-detail mb-2"><?= $rowDetail['name' . $lang] ?></p>

            <div class="social-plugin social-plugin-pro-detail w-clear">
                <?php
                $params = array();
                $params['oaid'] = $optsetting['oaidzalo'];
                echo $func->markdown('social/share', $params);
                ?>
            </div>
            <div class="desc-pro-detail"><?= $func->decodeHtmlChars($rowDetail['desc' . $lang]) ?></div>
            <ul class="attr-pro-detail">
                <?php if (!empty($rowDetail['code'])) { ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= masp ?>:</label>
                    <div class="attr-content-pro-detail"><?= $rowDetail['code'] ?></div>
                </li>
                <?php } ?>
                <?php if (!empty($productBrand['id'])) { ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= thuonghieu ?>:</label>
                    <div class="attr-content-pro-detail"><a class="text-decoration-none"
                            href="<?= $productBrand[$sluglang] ?>"
                            title="<?= $productBrand['name' . $lang] ?>"><?= $productBrand['name' . $lang] ?></a></div>
                </li>
                <?php } ?>
                <!-- <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= gia ?>:</label>
                    <div class="attr-content-pro-detail">
                        <?php if ($rowDetail['sale_price']) { ?>
                        <span class="price-new-pro-detail"><?= $func->formatMoney($rowDetail['sale_price']) ?></span>
                        <span class="price-old-pro-detail"><?= $func->formatMoney($rowDetail['regular_price']) ?></span>
                        <?php } else { ?>
                        <span
                            class="price-new-pro-detail"><?= ($rowDetail['regular_price']) ? $func->formatMoney($rowDetail['regular_price']) : lienhe ?></span>
                        <?php } ?>
                    </div>
                </li> -->
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= gia ?>:</label>
                    <div class="attr-content-pro-detail">
                        <span class="price-new-pro-detail"><?= $func->formatMoney($rowDetail['sale_price']) ?></span>
                        <span class="price-old-pro-detail"><?= $func->formatMoney($rowDetail['regular_price']) ?>
                        </span>
                    </div>
                </li>
                <div class="load_installment"></div>
                <li>

                    <?php if (!empty($rowColor)) { ?>
                <li class="color-block-pro-detail w-clear">
                    <label class="attr-label-pro-detail d-block"><?= mausac ?>:</label>
                    <div class="attr-content-pro-detail d-block">
                        <?php foreach ($rowColor as $k => $v) { ?>
                        <?php if ($v['type_show'] == 1) { ?>
                        <label for="color-pro-detail-<?= $v['id'] ?>" class="color-pro-detail text-decoration-none"
                            data-idproduct="<?= $rowDetail['id'] ?>"
                            style="background-image: url(<?= UPLOAD_COLOR_L . $v['photo'] ?>)">
                            <input type="radio" value="<?= $v['id'] ?>" id="color-pro-detail-<?= $v['id'] ?>"
                                name="color-pro-detail">
                        </label>
                        <?php } else { ?>
                        <label for="color-pro-detail-<?= $v['id'] ?>" class="color-pro-detail text-decoration-none"
                            data-idproduct="<?= $rowDetail['id'] ?>" style="background-color: #<?= $v['color'] ?>">
                            <input type="radio" value="<?= $v['id'] ?>" id="color-pro-detail-<?= $v['id'] ?>"
                                name="color-pro-detail">
                        </label>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </li>
                <?php } ?>
                <?php if(!empty($rowSize)) { ?>
                <li class="size-block-pro-detail w-clear">
                    <label class="attr-label-pro-detail d-block"><?=kichthuoc?>:</label>
                    <div class="attr-content-pro-detail d-block">
                        <?php foreach($rowSize as $k => $v) { ?>
                        <label for="size-pro-detail-<?=$v['id']?>" class="size-pro-detail text-decoration-none">
                            <input type="radio" value="<?=$v['id']?>" id="size-pro-detail-<?=$v['id']?>"
                                name="size-pro-detail"> <?=$v['name'.$lang]?>
                        </label>
                        <?php } ?>
                    </div>
                </li>
                <?php } ?>
                <?php if (isset($config['LQD']['cart']) && $config['LQD']['cart'] == true) { ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail d-block"><?= soluong ?>:</label>
                    <div class="attr-content-pro-detail d-block">
                        <div class="quantity-pro-detail">
                            <span class="quantity-minus-pro-detail">-</span>
                            <input type="number" class="qty-pro" min="1" value="1" readonly />
                            <span class="quantity-plus-pro-detail">+</span>
                        </div>
                    </div>
                </li>
                <?php } ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= luotxem ?>:</label>
                    <div class="attr-content-pro-detail"><?= $rowDetail['view'] ?></div>
                </li>
            </ul>
            <?php if (isset($config['LQD']['cart']) && $config['LQD']['cart'] == true) { ?>
            <div class="cart-pro-detail">
                <a class="btn btn-cart-main addcart rounded-0 mr-2" data-id="<?= $rowDetail['id'] ?>"
                    data-action="addnow">
                    <i class="fa-light fa-bag-shopping mr-1"></i>
                    <span>Thêm vào giỏ hàng</span>
                </a>
                <a class="btn btn-dark addcart rounded-0" data-id="<?= $rowDetail['id'] ?>" data-action="buynow">
                    <i class="fa-light fa-bag-shopping mr-1"></i>
                    <span>Mua ngay</span>
                </a>
            </div>
            <?php } ?>
        </div>
        <!--  -->
        <div class="col-lg-3 col-md-12 col-12 product-col-right">
            <div class="block-policy">

                <?php foreach ($tieuchi as $k => $v) {
                    $stt = 0;
                    if($k == 0) $stt = 1;
                    if($k == 1) $stt = 2;
                    if($k == 2) $stt = 3;
                    if($k == 3) $stt = 4;
                    if($k == 4) $stt = 5;
                    if($k == 5) $stt = 6;
                    if($k == 6) $stt = 7;
                    if($k == 7) $stt = 8;
                    if($k == 8) $stt = 9;
                    if($k == 9) $stt = 10;
                    ?><div class="policy-item duration-300">
                    <span class="marker"><?=$stt?></span>
                    <div class="icon aspect-1">
                        <picture>

                            <?= $func->getImage(['isWebp' => true, 'class' => 'lazy w-100 loaded', 'sizes' => '50x50x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </picture>
                    </div>
                    <div class="info">
                        <h3>
                            <?=$v['name'.$lang]?> </h3>
                        <span>
                            <?=$v['desc'.$lang]?> </span>

                    </div>
                </div><?php
                    
                } ?>

            </div>

        </div>
    </div>

    <div class="tags-pro-detail w-clear">
        <?php if (!empty($rowTags)) {
            foreach ($rowTags as $v) { ?>
        <a class="btn btn-sm btn-danger rounded" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><i
                class="fas fa-tags"></i><?= $v['name' . $lang] ?></a>
        <?php }
        } ?>
    </div>
    <div class="row">
        <div class="tabs-pro-detail col-xl-9 col-lg-8 col-12">
            <ul class="nav nav-tabs" id="tabsProDetail" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="info-pro-detail-tab" data-toggle="tab" href="#info-pro-detail"
                        role="tab">Chi tiết <?= (!empty($titleCate)) ? $titleCate : @$titleMain ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="commentfb-pro-detail-tab" data-toggle="tab" href="#commentfb-pro-detail"
                        role="tab"><?= binhluan ?></a>
                </li>
            </ul>
            <div class="tab-content pt-4 pb-4" id="tabsProDetailContent">
                <div class="tab-pane fade show active w-pro-detail" id="info-pro-detail" role="tabpanel">
                    <?php /*Toc*/ if ((isset($config['LQD']['toc']) && $config['LQD']['toc'] == true) && ($config['LQD']['tocvip'] == false)) { ?>
                    <div class="meta-toc">
                        <div class="box-readmore">
                            <ul class="toc-list"></ul>
                        </div>
                    </div>
                    <?php } ?>

                    <div id="ftwp-postcontent">
                        <?php /*Toc vip*/ if (isset($config['LQD']['tocvip']) && $config['LQD']['tocvip'] == true) { ?>
                        <div id="ftwp-container-outer" class="ftwp-in-post ftwp-float-none" style="height: auto;">
                            <div id="ftwp-container" class="ftwp-wrap ftwp-middle-right ftwp-minimize">
                                <button type="button" id="ftwp-trigger"
                                    class="ftwp-shape-round ftwp-border-medium"><span
                                        class="ftwp-trigger-icon ftwp-icon-menu"></span></button>
                                <nav id="ftwp-contents" class="ftwp-shape-round ftwp-border-thin" data-colexp="collapse"
                                    style="height: auto;"> </nav>
                            </div>
                        </div>
                        <?php } ?>
                        <div id="toc-content"
                            class="img-auto <?= (isset($config['LQD']['showcontent']) && $config['LQD']['showcontent'] == true) ? 'content_product' : '' ?>  ">
                            <?= htmlspecialchars_decode($rowDetail['content' . $lang]) ?></div>
                    </div>

                    <?php /*Xem thêm nội dung*/ if (isset($config['LQD']['showcontent']) && $config['LQD']['showcontent'] == true) { ?>
                    <div class="show-more btn_read text-center add-none">
                        <a class="btn btn-primary btn-sm btn-click">
                            <span class="d-block">Xem thêm <i class="fa-regular fa-circle-chevron-down"></i></span>
                        </a>
                    </div>
                    <?php } ?>

                </div>

                <div class="tab-pane fade" id="commentfb-pro-detail" role="tabpanel">
                    <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-numposts="3"
                        data-colorscheme="light" data-width="100%"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-12">
            <div class="product-favi">
                <a href="san-pham">
                    <div class="title-head">CÓ THỂ BẠN THÍCH</div>
                </a>
                <div class="product-favi-content">
                    <?php
/* SEO */
$sphot = $cache->get("select * from #_product where type = ? and find_in_set('hot',status) and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'), 'result', 7200);

                    foreach ($sphot as $key => $value) { ?>
                    <div class="product-view">
                        <a class="image_thumb" href="<?=$value['slugvi']?>" title="<?=$value['name'.$lang]?>">
                            <?= $func->getImage(['isWebp' => true, 'class' => 'lazy w-100', 'sizes' => '80x80x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $value['photo'], 'alt' => $value['name' . $lang]]) ?>
                        </a>
                        <div class="product-info">
                            <h3 class="product-name"><a href="<?=$value['slugvi']?>"
                                    title="<?=$value['name'.$lang]?>"><?=$value['name'.$lang]?></a>
                            </h3>
                            <div class="price_spham">
                                <span class="price_oldsp"><?= $func->formatMoney($value['regular_price']) ?></span>
                                <span class="price_sp"><?= $func->formatMoney($value['sale_price']) ?></span>
                            </div>
                        </div>
                    </div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include TEMPLATE . "product/comment.php"; ?>

<?php if (empty($quickview)) { ?>
<div class="title-main"><span><?= sanphamcungloai ?></span></div>
<div class="row row-20">
    <?php if (!empty($product)) { ?>
    <?php foreach ($product as $k => $v) { ?>
    <div class="col-md-3 col-sm-6 col-6 col-20">
        <div class="box-product">
            <div class="pic-product">
                <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                    <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x285x1/assets/images/noimage.png';"
                        data-src="<?= WATERMARK ?>/product/285x285x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>"
                        alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                </a>
                <div class="product-tool d-flex align-items-stretch justify-content-between transition mb-0">
                    <a class="product-detail-view text-decoration-none text-hover-main transition"
                        href="<?= $v[$sluglang] ?>" title="Xem chi tiêt">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="18"
                            height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="10" cy="10" r="7" />
                            <line x1="21" y1="21" x2="15" y2="15" />
                        </svg>
                        <span>Chi tiêt</span>
                    </a>
                    <a class="product-quick-view text-decoration-none text-hover-main transition"
                        data-slug="<?= $v[$sluglang] ?>" title="Xem nhanh">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="18"
                            height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="12" r="2" />
                            <path
                                d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                        </svg>
                        <span>Xem nhanh</span>
                    </a>
                </div>
            </div>
            <h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>"
                    title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
            <p class="price-product">
                <?php if ($v['discount']) { ?>
                <span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
                <span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
                <span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
                <?php } else { ?>
                <span
                    class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                <?php } ?>
            </p>
            <p class="cart-product d-flex flex-wrap justify-content-between">
                <span class="cart-add addcart transition" data-id="<?= $v['id'] ?>"
                    data-action="addnow"><?= themvaogiohang ?></span>
                <span class="cart-buy addcart transition" data-id="<?= $v['id'] ?>"
                    data-action="buynow"><?= muangay ?></span>
            </p>
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
<?php } ?>

<?php if (empty($quickview)) { ?>
<?php if (count($_SESSION['pro_seen'])) { ?>
<div class="title-main"><span>Sản phẩm đã xem</span></div>
<div class="owl-page owl-carousel owl-theme"
    data-items="screen:0|items:2|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:3|margin:10,screen:991|items:4|margin:20,screen:1199|items:4|margin:20"
    data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
    data-smartspeed="300" data-autoplayspeed="500" data-autoplaytimeout="3500" data-dots="0" data-nav="0"
    data-navcontainer="">
    <?php foreach ($_SESSION['pro_seen'] as $k => $v) {
                $detailProduct = $func->getInfoDetail("type, id, name$lang, slugvi, slugen, code, photo, options, discount, sale_price, regular_price", 'product', $v);
            ?>
    <div class="box-product">
        <div class="pic-product">
            <a class="text-decoration-none scale-img" href="<?= $detailProduct[$sluglang] ?>"
                title="<?= $detailProduct['name' . $lang] ?>">
                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x285x1/assets/images/noimage.png';"
                    data-src="<?= WATERMARK ?>/product/285x285x2/<?= UPLOAD_PRODUCT_L . $detailProduct['photo'] ?>"
                    alt="<?= $detailProduct['name' . $lang] ?>" title="<?= $detailProduct['name' . $lang] ?>" />
            </a>
            <div class="product-tool d-flex align-items-stretch justify-content-between transition mb-0">
                <a class="product-detail-view text-decoration-none text-hover-main transition"
                    href="<?= $detailProduct[$sluglang] ?>" title="Xem chi tiêt">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="18"
                        height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="10" cy="10" r="7" />
                        <line x1="21" y1="21" x2="15" y2="15" />
                    </svg>
                    <span>Chi tiêt</span>
                </a>
                <a class="product-quick-view text-decoration-none text-hover-main transition"
                    data-slug="<?= $detailProduct[$sluglang] ?>" title="Xem nhanh">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="18"
                        height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="12" cy="12" r="2" />
                        <path
                            d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                    </svg>
                    <span>Xem nhanh</span>
                </a>
            </div>
        </div>
        <h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $detailProduct[$sluglang] ?>"
                title="<?= $detailProduct['name' . $lang] ?>"><?= $detailProduct['name' . $lang] ?></a></h3>
        <p class="price-product">
            <?php if ($detailProduct['discount']) { ?>
            <span class="price-new"><?= $func->formatMoney($detailProduct['sale_price']) ?></span>
            <span class="price-old"><?= $func->formatMoney($detailProduct['regular_price']) ?></span>
            <span class="price-per"><?= '-' . $detailProduct['discount'] . '%' ?></span>
            <?php } else { ?>
            <span
                class="price-new"><?= ($detailProduct['regular_price']) ? $func->formatMoney($detailProduct['regular_price']) : lienhe ?></span>
            <?php } ?>
        </p>
        <p class="cart-product d-flex flex-wrap justify-content-between">
            <span class="cart-add addcart transition" data-id="<?= $detailProduct['id'] ?>"
                data-action="addnow"><?= themvaogiohang ?></span>
            <span class="cart-buy addcart transition" data-id="<?= $detailProduct['id'] ?>"
                data-action="buynow"><?= muangay ?></span>
        </p>
    </div>
    <?php } ?>
</div>
<?php } ?>
<?php } ?>