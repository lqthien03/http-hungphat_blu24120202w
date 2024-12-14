<?php if ($deviceType == 'mobile') { ?>
    <div class="wrap__logommenu">
        <div class="wrap_logommenu">
            <div class="logommenu">
                <a class="logo-head" href="">
                    <img onerror="this.src='<?= THUMBS ?>/120x45x3/assets/images/noimage.png';"
                        src="<?= THUMBS ?>/120x45x3/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" alt=" logo" title="logo" />
                </a>
            </div>
        </div>
        <div class="header_mobile">
            <div class="menumobile">
                <div class="wrap-content">
                    <div class="flex_menumobile">
                        <div class="menu-icon open" aria-label="Menu" id="btn-menu-mobile" title="Menu">
                            <i class="fa-solid fa-bars-staggered"></i>
                        </div>

                        <div class="search w-100 w-clear ml-1">
                            <input type="text" id="keyword2" placeholder="<?= nhaptukhoatimkiem ?>"
                                onkeypress=" doEnter(event,'keyword2');"
                                value="<?= (!empty($_GET['keyword2'])) ? $_GET['keyword2'] : '' ?>" />
                            <p onclick=" onSearch('keyword2');"><i class="bi bi-search"></i></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap_scrolldmuc">
                <div class="wrap-content">
                    <div class="flex_scrolldmuc">
                        <div class="left_iconhomescroll">
                            <a href=" ">
                                <i class="fa-solid fa-house"></i>
                            </a>
                        </div>
                        <div class="center_scrolldmu">
                            <ul>
                                <li><a href="ve-chung-toi" title="Về chúng tôi">Về chúng tôi</a></li>
                                <li><a href="du-an" title="Dự án">Dự án</a></li>
                                <li><a href="cong-trinh" title="Thiết kế & thi công">Thiết kế & thi công</a></li>
                                <li><a href="dich-vu" title="Dịch vụ">Dịch vụ</a></li>
                                <li><a href="tin-tuc" title="Tin tức">Tin tức</a></li>
                                <li><a href="lien-he" title="Liên hệ">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="right_scrolldmu">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!--  -->
    <div class="header-menu">
        <div class="navigation-horizontal">
            <div class="title">
                <div class="logommenu">
                    <a class="logo-head" href="">
                        <img onerror="this.src='<?= THUMBS ?>/120x45x3/assets/images/noimage.png';"
                            src="<?= THUMBS ?>/120x45x3/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" alt=" logo" title="logo" />
                    </a>
                </div>
                <div class="close-menu" title="Đóng">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="col-menu" data-section="header_nav">
                <ul id="nav-col" class="nav-col">
                </ul>
                <ul id="nav" class="nav">

                    <li class="nav-item ">
                        <a class="nav-link" href="" title="Trang chủ">
                            Trang chủ
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="ve-chung-toi" title="Về chúng tôi">
                            Về chúng tôi
                        </a>
                    </li>

                    <li class="nav-item has-childs">
                        <a href="du-an" class="nav-link" title="Dự án">
                            Dự án
                            <?php if (count($duanListMenu)) { ?>
                                <i class="open_mnu down_icon"></i>
                            <?php } ?>
                        </a>
                        <?php if (count($duanListMenu)) { ?>
                            <ul class="dropdown-menu" style="display: none;">
                                <?php foreach ($duanListMenu as $klist => $vlist) {
                                    $duaCatMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="<?= $vlist[$sluglang] ?>"
                                            title="<?= $vlist['name' . $lang] ?>"><?= $vlist['name' . $lang] ?>
                                            <?php if (count($duaCatMenu)) { ?>
                                                <i class="open_mnu down_icon"></i>
                                            <?php } ?>
                                        </a>
                                        <ul class="dropdown-menu drop2menu" style="display: none;">
                                            <?php foreach ($duaCatMenu as $kcat => $vcat) { ?>
                                                <li class="nav-item-lv3">
                                                    <a class="nav-link" href="<?= $vcat[$sluglang] ?>"
                                                        title="<?= $vcat['name' . $lang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="thiet-ke-thi-cong" title="Thiết kế & thi công">
                            Thiết kế & thi công
                        </a>
                    </li>
                    <li class="nav-item has-childs">
                        <a href="dich-vu" class="nav-link" title="Dịch vụ">
                            Dịch vụ
                            <?php if (count($dichvuListMenu)) { ?>
                                <i class="open_mnu down_icon"></i>
                            <?php } ?>
                        </a>
                        <?php if (count($dichvuListMenu)) { ?>
                            <ul class="dropdown-menu" style="display: none;">
                                <?php foreach ($dichvuListMenu as $klist => $vlist) {
                                    $dichvuCatMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="<?= $vlist[$sluglang] ?>"
                                            title="<?= $vlist['name' . $lang] ?>"><?= $vlist['name' . $lang] ?>
                                            <?php if (count($dichvuCatMenu)) { ?>
                                                <i class="open_mnu down_icon"></i>
                                            <?php } ?>
                                        </a>
                                        <ul class="dropdown-menu drop2menu" style="display: none;">
                                            <?php foreach ($dichvuCatMenu as $kcat => $vcat) { ?>
                                                <li class="nav-item-lv3">
                                                    <a class="nav-link" href="<?= $vcat[$sluglang] ?>"
                                                        title="<?= $vcat['name' . $lang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="tin-tuc" title="Tin tức">
                            Tin tức
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="lien-he" title="Liên hệ">
                            Liên hệ
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <div class="sudes-header-hotline">
                    <div class="frame-fix">
                        <a title="Điện thoại: 0343608693" href="tel:0343608693"></a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                            </path>
                        </svg>
                        <div class="text-box">
                            <span class="acc-text-small">Hotline hỗ trợ:</span>
                            <span class="acc-text">0343608693</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>