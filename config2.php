<?php
$i                           = 0;
$theme_config[$i]['name']    = "show_var";
$theme_config[$i]['text']    = TF_SHOW_VAR;
$theme_config[$i]['desc']    = TF_SHOW_VAR_DESC;
$theme_config[$i]['type']    = "yesno";
$theme_config[$i]['default'] = "0";

//字型設定
$i++;
$theme_config[$i]['name']    = "font_family";
$theme_config[$i]['text']    = TF_FONT_FAMILY;
$theme_config[$i]['desc']    = TF_FONT_FAMILY_DESC;
$theme_config[$i]['type']    = "text";
$theme_config[$i]['default'] = constant('TF_FONT_FAMILY_DEFAULT');

//頂頭選單陣列
$i++;
$theme_config[$i]['name']    = "topmenu";
$theme_config[$i]['text']    = TF_TOPMENU;
$theme_config[$i]['desc']    = TF_TOPMENU_DESC;
$theme_config[$i]['type']    = "array";
$theme_config[$i]['default'] = constant('TF_TOPMENU_DEFAULT');
