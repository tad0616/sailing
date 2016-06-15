<?php
include_once XOOPS_ROOT_PATH . '/modules/tadtools/language/' . $xoopsConfig['language'] . '/theme_common.php';

/**自訂設定之語系**/
define("TF_SHOW_VAR", "Display themes vars.");
define("TF_SHOW_VAR_DESC", "Display all variable of tad_themes module that you could use it to design theme.");
define("TF_FONT_FAMILY", "Theme fonts");
define("TF_FONT_FAMILY_DEFAULT", "\"Helvetica Neue\",Helvetica,Arial,sans-serif");
define("TF_FONT_FAMILY_DESC", "CSS font-family setup.ex:" . TF_FONT_FAMILY_DEFAULT);
define("TF_FOOTER_BGCOLOR", "Footer background color");
define("TF_FOOTER_BGCOLOR_DESC", "Set footer background color.");
define("TF_FOOTER_IMG", "Footer backgorund image");
define("TF_FOOTER_IMG_DESC", "Please upload a background image.");
define("TF_FOOTER_STYLE", "Custom styles");
define("TF_FOOTER_STYLE_DESC", "You can design footer style by CSS.");
define("TF_TOPMENU", "Top Menu");
define("TF_TOPMENU_DEFAULT", '[{"name":"Home","url":"{XOOPS_URL}","target":"_self"},\n{"name":"News","url":"{XOOPS_URL}/modules/tadnews/","target":"_self"},\n{"name":"Photos","url":"{XOOPS_URL}/modules/tadgallery/","target":"_self"},\n{"name":"Files","url":"{XOOPS_URL}/modules/tad_uploader/","target":"_self"},\n{"name":"Contact us","url":"{XOOPS_URL}/modules/ugm_contact_us/","target":"_self"}]');
define("TF_TOPMENU_DESC", 'json content：[{"name":"item name","url":"item url","target":"_self or _blank"},{...},{...}], <b>{XOOPS_URL} = Your web site url</b>.');
