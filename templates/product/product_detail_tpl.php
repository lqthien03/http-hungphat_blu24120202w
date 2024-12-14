<div class="grid-pro-detail d-flex flex-wrap justify-content-between">
    <div class="left-pro-detail">
        <div class="gr_fixproductdetail">
            <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?= ASSET . WATERMARK ?>/product/540x540x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                <?= $func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
            </a>
            <?php if ($rowDetailPhoto) {
                if (count($rowDetailPhoto) > 0) { ?>
                    <div class="gallery-thumb-pro">
                        <div class="owl-page owl-carousel owl-theme owl-pro-detail" data-items="screen:0|items:5|margin:10" data-nav="1" data-navcontainer=".control-pro-detail">
                            <div>
                                <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= ASSET . WATERMARK ?>/product/540x540x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                                    <img class="w-100" onerror="this.src='<?= THUMBS ?>/540x540x1/assets/images/noimage.png';" src="<?= WATERMARK ?>/product/540x540x2/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" alt="<?= $rowDetail['name' . $lang] ?>" title="<?= $rowDetail['name' . $lang] ?>" />
                                </a>
                            </div>
                            <?php foreach ($rowDetailPhoto as $v) { ?>
                                <div>
                                    <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= ASSET . WATERMARK ?>/product/540x540x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                                        <img class="w-100" onerror="this.src='<?= THUMBS ?>/540x540x1/assets/images/noimage.png';" src="<?= WATERMARK ?>/product/540x540x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $rowDetail['name' . $lang] ?>" title="<?= $rowDetail['name' . $lang] ?>" />
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

    <div class="right-pro-detail">
        <p class="title-pro-detail mb-2"><?= $rowDetail['name' . $lang] ?></p>
        <div class="social-plugin social-plugin-pro-detail w-clear">
            <?php
            $params = array();
            $params['oaid'] = $optsetting['oaidzalo'];
            echo $func->markdown('social/share', $params);
            ?>
        </div>

        <ul class="attr-pro-detail">
            <li>
                <label class="attr-label-pro-detail"><?= luotxem ?>:</label>
                <div class="attr-content-pro-detail"><?= $rowDetail['view'] ?></div>
            </li>

            <!-- <li>
                <label class="attr-label-pro-detail"><?= gia ?>:</label>
                <div class="attr-content-pro-detail">
                    <?php if ($rowDetail['sale_price']) { ?>
                        <span class="price-new-pro-detail"><?= $func->formatMoney($rowDetail['sale_price']) ?></span>
                        <span class="price-old-pro-detail"><?= $func->formatMoney($rowDetail['regular_price']) ?></span>
                    <?php } else { ?>
                        <span class="price-new-pro-detail"><?= ($rowDetail['regular_price']) ? $func->formatMoney($rowDetail['regular_price']) : lienhe ?></span>
                    <?php } ?>
                </div>
            </li> -->
            <!-- <li>
                <div class="cart-pro-detail d-flex flex-wrap align-items-center justify-content-between">
                    <a class="transition buynow addcart text-decoration-none d-flex align-items-center justify-content-center"
                        data-id="<?= $rowDetail['id'] ?>" data-action="addnow"><i
                            class="bi bi-basket2"></i><span><?= themvaogiohang ?></span></a>
                    <a class="transition buynow addcart text-decoration-none d-flex align-items-center justify-content-center"
                        data-id="<?= $rowDetail['id'] ?>" data-action="buynow"><i
                            class="bi bi-cart2"></i><span><?= muangay ?></span></a>
                </div>
            </li> -->
        </ul>

        <div class="desc-pro-detail content-text"><?= $func->decodeHtmlChars($rowDetail['desc' . $lang]) ?></div>
    </div>
</div>
<?php if (empty($quickview)) { ?>
    <div class="tabs-pro-detail">
        <ul class="nav nav-tabs" id="tabsProDetail" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="info-pro-detail-tab" data-bs-toggle="tab" href="#info-pro-detail"
                    role="tab"><?= thongtinsanpham ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="commentfb-pro-detail-tab" data-bs-toggle="tab" href="#commentfb-pro-detail"
                    role="tab"><?= binhluan ?></a>
            </li>
        </ul>
        <div class="tab-content pt-4 pb-4" id="tabsProDetailContent">
            <div class="tab-pane fade show active" id="info-pro-detail" role="tabpanel">
                <div class="content-text"><?= $func->decodeHtmlChars($rowDetail['content' . $lang]) ?></div>
            </div>
            <div class="tab-pane fade" id="commentfb-pro-detail" role="tabpanel">
                <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-numposts="3"
                    data-colorscheme="light" data-width="100%"></div>
            </div>
        </div>
    </div>
<?php } ?>
<?php if (empty($quickview)) { ?>
    <div class="title-main"><span><?= sanphamcungloai ?></span></div>
    <div class="grid-duan">
        <?php if (!empty($product)) { ?>
            <?php foreach ($product as $k => $v) { ?>
                <div class="box-duan text-decoration-none" data-aos="fade-up" data-aos-duration="1000">
                    <div class="duan-img">
                        <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">

                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '380x430x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>

                        </a>
                    </div>
                    <div class="duan-info ease-in-200">
                        <a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <h3 class="duan-name text-split-1"> <?= $v['name' . $lang] ?></h3>
                            <div class="duan-desc text-split-4"><?= $func->decodeHtmlChars($v['desc' . $lang]) ?></div>
                        </a>

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

    </div>
    <div class="col-12">
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
<?php } ?>