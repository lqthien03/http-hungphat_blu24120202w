<div class="wrap_productsort sort">
    <div class="coll-head mb-3">
        <h1 class="title_pageproductsorrt"><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></h1>
        <div class="coll-sortby d-flex justify-content-between align-items-center">
            <div class="sortPagiBar">
                <div class="sort-cate clearfix">
                    <div id="sort-by" class="d-flex align-items-baseline">
                        <label class="left">
                            <span class="">Sắp xếp: </span>
                        </label>
                        <select class="content_ul">
                            <option class="itemsort" data-list="<?= $productList['id'] ?>" data-cat="<?= $productCat['id'] ?>" data-sort="name:asc" value="alpha-asc">Tên A → Z
                            </option>
                            <option class="itemsort" data-list="<?= $productList['id'] ?>" data-cat="<?= $productCat['id'] ?>" data-sort="name:desc" value="alpha-desc">Tên Z → A
                            </option>
                            <option class="itemsort" data-list="<?= $productList['id'] ?>" data-cat="<?= $productCat['id'] ?>" data-sort="price_min:asc" value="price-asc">Giá tăng
                                dần</option>
                            <option class="itemsort" data-list="<?= $productList['id'] ?>" data-cat="<?= $productCat['id'] ?>" data-sort="price_min:desc" value="price-desc">Giá giảm
                                dần</option>
                        </select>
                    </div>
                </div>
            </div>
            <div id="open-filters" class="btn open-filters d-lg-none d-block p-0">
                <i class="fa fa-filter"></i>
                <span>Lọc</span>
            </div>
        </div>
    </div>
    <div class="sortproduct-paging-list">
        <!-- măc dinh  -->


        <?php if (!empty($product)) { ?>
            <div class="grid-duan">
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
            </div>
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

        <!--  -->
    </div>
</div>
<style>
    .coll-head {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    h1.title_pageproductsorrt {
        padding: 0;
        letter-spacing: normal;
        color: var(--c1);
        text-transform: uppercase;
        font-weight: bold;
    }

    .sortPagiBar {
        font-size: 16px;
        font-weight: bold;
    }

    #sort-by {
        gap: 10px;
        position: relative;
    }

    .coll-sortby select {
        -webkit-appearance: none;
        margin-left: 5px;
        height: 30px;
        padding: 0 5px;
        padding-right: 20px;
    }

    #sort-by:after {
        position: absolute;
        content: "";
        width: 0;
        height: 0;
        top: 12px;
        right: 4px;
        border-top: 6px solid;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
    }
</style>