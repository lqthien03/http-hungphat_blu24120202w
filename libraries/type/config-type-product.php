<?php
$nametype = "du-an";
$config['product'][$nametype]['title_main'] = "Dự án";
$config['product'][$nametype]['dropdown'] = true;
$config['product'][$nametype]['list'] = true;
$config['product'][$nametype]['cat'] = true;
$config['product'][$nametype]['check'] = array("tieubieu" => "Tiêu biểu", "noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['slug'] = true;
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh",
        "title_sub_photo" => hinhanh,
        "check_photo" => array("hienthi" => hienthi),
        "number_photo" => 2,
        "images_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 540,
        "height_photo" => 540,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP'
    )
);
$config['product'][$nametype]['desc'] = true;
$config['product'][$nametype]['desc_cke'] = true;
$config['product'][$nametype]['content'] = true;
$config['product'][$nametype]['content_cke'] = true;
$config['product'][$nametype]['seo'] = true;
$config['product'][$nametype]['width_icon'] = 135;
$config['product'][$nametype]['height_icon'] = 100;
$config['product'][$nametype]['width'] = 270;
$config['product'][$nametype]['height'] = 270;
$config['product'][$nametype]['thumb'] = '100x100x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Dự án (List) */
$config['product'][$nametype]['title_main_list'] = danhmuccap1;
$config['product'][$nametype]['slug_list'] = true;
$config['product'][$nametype]['check_list'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['desc_list'] = true;
$config['product'][$nametype]['seo_list'] = true;

/* Dự án (Cat) */
$config['product'][$nametype]['title_main_cat'] = danhmuccap2;
$config['product'][$nametype]['slug_cat'] = true;
$config['product'][$nametype]['check_cat'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['desc_cat'] = true;
$config['product'][$nametype]['seo_cat'] = true;




// thiết kế 3d
$nametype = "thiet-ke-thi-cong";
$config['product'][$nametype]['title_main'] = "Thiết kế & thi công";
$config['product'][$nametype]['dropdown'] = false;
$config['product'][$nametype]['list'] = false;
$config['product'][$nametype]['cat'] = false;
$config['product'][$nametype]['check'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['slug'] = true;
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh",
        "title_sub_photo" => hinhanh,
        "check_photo" => array("hienthi" => hienthi),
        "number_photo" => 2,
        "images_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 540,
        "height_photo" => 540,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP'
    )
);
$config['product'][$nametype]['seo'] = true;
$config['product'][$nametype]['width_icon'] = 135;
$config['product'][$nametype]['height_icon'] = 100;
$config['product'][$nametype]['width'] = 270;
$config['product'][$nametype]['height'] = 270;
$config['product'][$nametype]['thumb'] = '100x100x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Dự án (List) */
$config['product'][$nametype]['title_main_list'] = danhmuccap1;
$config['product'][$nametype]['slug_list'] = true;
$config['product'][$nametype]['check_list'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['desc_list'] = true;
$config['product'][$nametype]['seo_list'] = true;

/* Dự án (Cat) */
$config['product'][$nametype]['title_main_cat'] = danhmuccap2;
$config['product'][$nametype]['slug_cat'] = true;
$config['product'][$nametype]['check_cat'] = array("noibat" => noibat, "hienthi" => hienthi);
$config['product'][$nametype]['desc_cat'] = true;
$config['product'][$nametype]['seo_cat'] = true;
