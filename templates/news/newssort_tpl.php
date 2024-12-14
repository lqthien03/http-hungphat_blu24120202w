<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<div class="dropdown_select sort_news d-flex d-justify">
    <div class="selectsort">
        <div class="selected" data-default="Chọn bộ lọc" data-one="Từ A đến Z" data-two="Từ Z đến A" data-three="option-3">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" class="arrow">
                <path
                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z">
                </path>
            </svg>
        </div>
        <div class="options">
            <div title="all">
                <input id="all" name="option" type="radio" checked="" />
                <label class="option" for="all" data-txt="Chọn bộ lọc"></label>
            </div>
            <div title="az">
                <input id="az" name="option" type="radio" />
                <label class="option" for="az" data-txt="Từ A đến Z"></label>
            </div>
            <div title="za">
                <input id="za" name="option" type="radio" />
                <label class="option" for="za" data-txt="Từ Z đến A"></label>
            </div>
        </div>
    </div>

</div>
<div class="row-news row">
    <?php if (isset($news) && count($news) > 0) { ?>
    <?php foreach ($news as $k => $v) { ?>
    <div class="news d-flex flex-wrap col-md-6 pb-3" data-aos="fade-up" data-aos-duration="1000">
        <a class="pic-news scale-img text-decoration-none" href="<?= $v[$sluglang] ?>"
            title="<?= $v['name' . $lang] ?>">
            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/210x144x1/assets/images/noimage.png';"
                data-src="<?= THUMBS ?>/210x144x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>"
                title="<?= $v['name' . $lang] ?>" />
        </a>
        <div class="info-news">
            <h3>
                <a class="name-news text-decoration-none text-split" href="<?= $v[$sluglang] ?>"
                    title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
            </h3>
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