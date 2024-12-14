<div class="footer">
    <div class="footer-article">
        <div class="wrap-content padding-top-bottom d-flex justify-content-between">
            <div class="footer-news">
                <h3 class="footer-name"><?= $footer['name' . $lang] ?></h3>
                <div class="footer-info">
                    <?= $func->decodeHtmlChars($footer['content' . $lang]) ?>
                </div>
                <div class="social-footer">
                    <ul class="list-unstyled d-flex align-items-center">
                        <?php foreach ($social as $k => $v) { ?>
                            <li class="d-inline-block align-top">
                                <a href="<?= $v['link'] ?>" target="_blank" class="me-2">
                                    <img class="lazy" data-src="<?= THUMBS ?>/30x30x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>"
                                        alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

            </div>

            <div class="footer-news">
                <h3 class="title-footer">Dịch vụ</h3>
                <ul class="footer-ul d-flex flex-wrap justify-content-between">
                    <?php foreach ($policy as $v) { ?>
                        <li><a class=" text-decoration-none " href="<?= $v[$sluglang] ?>"
                                title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="footer-news">
                <h3 class="title-footer">FANPAGE</h3>
                <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 1); ?>

            </div>

        </div>

    </div>
    <div class="footer-powered">
        <div class="wrap-content">
            <div class="row text-align-center">
                <div class="footer-copyright col-md-6">Copyright © 2024 <?= $copyright['name' . $lang] ?>. Designed by
                    <a href="https://blueweb.com.vn/" class=" text-decoration-none"
                        title="Blueweb.com.vn">Blueweb.com.vn</a>
                </div>
                <div class="footer-statistic col-md-6">
                    <span><?= dangonline ?>: <?= $online ?></span>
                    <span><?= homnay ?>: <?= $counter['today'] ?></span>
                    <span><?= trongtuan ?>: <?= $counter['week'] ?></span>
                    <span><?= trongthang ?>: <?= $counter['month'] ?></span>
                    <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $addons->set('footer-map', 'footer-map', 1); ?>
<?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>

<a class="btn-youtube btn-frame text-decoration-none" target="_blank" href="<?= $optsetting['youtube'] ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'tiktok.jpg', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>