<?php
/* Banner */
$nametype = "banner";
$config['photo']['photo_static'][$nametype]['title_main'] = "Banner";
$config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['photo']['photo_static'][$nametype]['images'] = true;
$config['photo']['photo_static'][$nametype]['width'] = 1366;
$config['photo']['photo_static'][$nametype]['height'] = 320;
$config['photo']['photo_static'][$nametype]['thumb'] = '1366x320x1';
$config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Logo */
$nametype = "logo";
$config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
$config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['photo']['photo_static'][$nametype]['images'] = true;
$config['photo']['photo_static'][$nametype]['width'] = 220;
$config['photo']['photo_static'][$nametype]['height'] = 120;
$config['photo']['photo_static'][$nametype]['thumb'] = '220x120x2';
$config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Favicon */
$nametype = "favicon";
$config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
$config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['photo']['photo_static'][$nametype]['images'] = true;
$config['photo']['photo_static'][$nametype]['width'] = 48;
$config['photo']['photo_static'][$nametype]['height'] = 48;
$config['photo']['photo_static'][$nametype]['thumb'] = '48x48x1';
$config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Watermark */
$nametype = "watermark";
$config['photo']['photo_static'][$nametype]['title_main'] = "Watermark";
$config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['photo']['photo_static'][$nametype]['images'] = true;
$config['photo']['photo_static'][$nametype]['watermark'] = true;
$config['photo']['photo_static'][$nametype]['watermark-advanced'] = true;
$config['photo']['photo_static'][$nametype]['width'] = 100;
$config['photo']['photo_static'][$nametype]['height'] = 100;
$config['photo']['photo_static'][$nametype]['thumb'] = '100x100x1';
$config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';

/* Watermark tin tức */
// $nametype = "watermark-news";
// $config['photo']['photo_static'][$nametype]['title_main'] = watermarktintuc;
// $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => hienthi);
// $config['photo']['photo_static'][$nametype]['images'] = true;
// $config['photo']['photo_static'][$nametype]['watermark'] = true;
// $config['photo']['photo_static'][$nametype]['watermark-advanced'] = true;
// $config['photo']['photo_static'][$nametype]['width'] = 50;
// $config['photo']['photo_static'][$nametype]['height'] = 50;
// $config['photo']['photo_static'][$nametype]['thumb'] = '50x50x1';
// $config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';



/* Slideshow */
$nametype = "slide";
$config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
$config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => hienthi);
$config['photo']['man_photo'][$nametype]['number_photo'] = 2;
$config['photo']['man_photo'][$nametype]['images_photo'] = true;
$config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
$config['photo']['man_photo'][$nametype]['link_photo'] = true;
$config['photo']['man_photo'][$nametype]['name_photo'] = true;
$config['photo']['man_photo'][$nametype]['desc_photo'] = true;
$config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
$config['photo']['man_photo'][$nametype]['height_photo'] = 600;
$config['photo']['man_photo'][$nametype]['thumb_photo'] = '200x100x1';
$config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

// menu
$nametype = "doi-tac";
$config['photo']['man_photo'][$nametype]['title_main_photo'] = "Đối tác";
$config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => hienthi);
$config['photo']['man_photo'][$nametype]['number_photo'] = 1;
$config['photo']['man_photo'][$nametype]['images_photo'] = true;
$config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
$config['photo']['man_photo'][$nametype]['width_photo'] = 450;
$config['photo']['man_photo'][$nametype]['height_photo'] = 400;
$config['photo']['man_photo'][$nametype]['thumb_photo'] = '200x100x1';
$config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Video */
// $nametype = "video";
// $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Video";
// $config['photo']['man_photo'][$nametype]['check_photo'] = array("noibat" => "Nổi bật", "hienthi" => hienthi);
// $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
// $config['photo']['man_photo'][$nametype]['video_photo'] = true;
// $config['photo']['man_photo'][$nametype]['name_photo'] = true;
// $config['photo']['man_photo'][$nametype]['images_photo'] = true;
// $config['photo']['man_photo'][$nametype]['width_photo'] = 600;
// $config['photo']['man_photo'][$nametype]['height_photo'] = 325;
// $config['photo']['man_photo'][$nametype]['thumb_photo'] = '600x325x1';
// $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

// banner facebook
// $nametype = "banner-facebook";
// $config['photo']['photo_static'][$nametype]['title_main'] = "Banner facebook";
// $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => hienthi);
// $config['photo']['photo_static'][$nametype]['images'] = true;
// $config['photo']['photo_static'][$nametype]['link'] = true;
// $config['photo']['photo_static'][$nametype]['width'] = 335;
// $config['photo']['photo_static'][$nametype]['height'] = 142;
// $config['photo']['photo_static'][$nametype]['thumb'] = '335x142x1';
// $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';


// banner tiktok
// $nametype = "banner-tiktok";
// $config['photo']['photo_static'][$nametype]['title_main'] = "Banner tiktok";
// $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => hienthi);
// $config['photo']['photo_static'][$nametype]['images'] = true;
// $config['photo']['photo_static'][$nametype]['link'] = true;
// $config['photo']['photo_static'][$nametype]['width'] = 335;
// $config['photo']['photo_static'][$nametype]['height'] = 142;
// $config['photo']['photo_static'][$nametype]['thumb'] = '335x142x1';
// $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';



$nametype = "backgroud-adminlogin";
$config['photo']['photo_static'][$nametype]['title_main'] = "Hình admin";
$config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['photo']['photo_static'][$nametype]['images'] = true;
$config['photo']['photo_static'][$nametype]['width'] = 600;
$config['photo']['photo_static'][$nametype]['height'] = 500;
$config['photo']['photo_static'][$nametype]['thumb'] = '600x500x1';
$config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

/* Social */
$nametype = "social";
$config['photo']['man_photo'][$nametype]['title_main_photo'] = "Social";
$config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => hienthi);
$config['photo']['man_photo'][$nametype]['number_photo'] = 2;
$config['photo']['man_photo'][$nametype]['images_photo'] = true;
$config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
$config['photo']['man_photo'][$nametype]['link_photo'] = true;
$config['photo']['man_photo'][$nametype]['name_photo'] = true;
$config['photo']['man_photo'][$nametype]['width_photo'] = 30;
$config['photo']['man_photo'][$nametype]['height_photo'] = 30;
$config['photo']['man_photo'][$nametype]['thumb_photo'] = '30x30x2';
$config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';

$nametype = "popup";
$config['photo']['photo_static'][$nametype]['title_main'] = "Popup";
$config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => hienthi);
$config['photo']['photo_static'][$nametype]['images'] = true;
$config['photo']['photo_static'][$nametype]['name'] = true;
$config['photo']['photo_static'][$nametype]['link'] = true;
$config['photo']['photo_static'][$nametype]['width'] = 800;
$config['photo']['photo_static'][$nametype]['height'] = 530;
$config['photo']['photo_static'][$nametype]['thumb'] = '800x530x1';
$config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.webp|.WEBP';
