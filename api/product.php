<?php
include "config.php";

/* Paginations */
include LIBRARIES . "class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);
$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;
$idCat = (isset($_GET['idCat']) && $_GET['idCat'] > 0) ? htmlspecialchars($_GET['idCat']) : 0;
$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p - 1) * $pagingAjax->perpage;
$pageLink = "api/product.php?perpage=" . $pagingAjax->perpage;
$tempLink = "";
$where = "";
$params = array();
/* Math url */
if ($idList > 0) {
    $tempLink .= "&idList=" . $idList;
    $where .= " and id_list = ?";
    array_push($params, $idList);
}
if ($idCat > 0) {
    $tempLink .= "&idCat=" . $idCat;
    $where .= " and id_cat = ?";
    array_push($params, $idCat);
}
$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
$sql = "select name$lang,desc$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type,file_attach  from #_product where type='du-an' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
$sqlCache = $sql . " limit $start, $pagingAjax->perpage";
$items = $cache->get($sqlCache, $params, 'result', 7200);

/* Count all data */
$countItems = count($cache->get($sql, $params, 'result', 7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if ($countItems) { ?>
    <div class="grid-duan">
        <?php foreach ($items as $k => $v) { ?>
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
    <div class="pagination-ajax"><?= $pagingItems ?></div>
<?php } ?>
<script>
    BLUEWEB_FRAMEWORK.toolTip();
</script>