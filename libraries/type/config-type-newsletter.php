<?php
/* Đăng ký nhận tin */
$nametype = "dangkynhantin";
$config['newsletter'][$nametype]['title_main'] = dangkynhantin;
$config['newsletter'][$nametype]['file'] = false;
$config['newsletter'][$nametype]['email'] = true;
$config['newsletter'][$nametype]['is_send'] = true;
$config['newsletter'][$nametype]['fullname'] = true;
$config['newsletter'][$nametype]['phone'] = true;
$config['newsletter'][$nametype]['time'] = false;
$config['newsletter'][$nametype]['number'] = false;
$config['newsletter'][$nametype]['date'] = false;
$config['newsletter'][$nametype]['address'] = true;
$config['newsletter'][$nametype]['hinhthuc'] = false;
$config['newsletter'][$nametype]['subject'] = false;
$config['newsletter'][$nametype]['content'] = false;
$config['newsletter'][$nametype]['tuvan'] = false;
$config['newsletter'][$nametype]['notes'] = false;
$config['newsletter'][$nametype]['confirm_status'] = array("1" => daxem, "2" => dalienhe, "3" => dathongbao);
$config['newsletter'][$nametype]['show_name'] = true;
$config['newsletter'][$nametype]['show_phone'] = true;
$config['newsletter'][$nametype]['show_date'] = true;
$config['newsletter'][$nametype]['file_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.xls|.xlsx|.jpg|.png|.gif|.webp|.WEBP';