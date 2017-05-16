<?php
//佈景種類是否可自訂
$theme_change = 0;

//預設佈景種類 bootstrap3 , html , mix
$theme_kind = 'html';

//可選用佈景種類 bootstrap3 , html , mix （$theme_change=1 時才有用）
$theme_kind_arr = 'html';

//引入哪些選單？ all(含 my_menu,admin,user),my_menu,admin,user
$menu_var_kind = 'all';

//額外顏色設定 如： bootstrap3/themes/light/Cerulean
$theme_color = 'bootstrap3';

/*
tabs-1 版面基礎設定
 */

$config_tabs[1] = 1;

//版面類型[自]，值： theme_type_1 ~ theme_type_8
$config_enable['theme_type'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'theme_type_1');

//版面寬度[自]，值：若bootstrap模式，最大值為 12，若 html 模式，則輸入預設版面寬度，如： 980
$config_enable['theme_width'] = array('enable' => '0', 'min' => '1', 'max' => '984', 'require' => '1', 'default' => '984');

//內容區顏色[theme_type_x.tpl]
$config_enable['base_color'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'transparent');

//左區域顏色[theme_type_1.tpl]
$config_enable['lb_color'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'transparent');

//中區域顏色[theme_type_x.tpl]
$config_enable['cb_color'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'transparent');

//右區域顏色[theme_type_2~4.tpl]
$config_enable['rb_color'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'transparent');

//左區域寬度[theme_type_x.tpl]，值：若 bootstrap 模式，最大值為 12，若 html 模式，則輸入預設左區域寬度，如： 220
$config_enable['lb_width'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '220');

//右區域寬度[theme_type_2~8.tpl]，值：若 bootstrap 模式，最大值為 12，若 html 模式，則輸入預設右區域寬度，如： 220
$config_enable['rb_width'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '220');

//中左區塊寬度[無]
$config_enable['clb_width'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '49%');

//中右區塊寬度[無]
$config_enable['crb_width'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '49%');

//離上邊界距離[自]
$config_enable['margin_top'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '40');

//文字大小[theme_css.tpl]
$config_enable['font_size'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '11pt');

//離下邊界距離[自]
$config_enable['margin_bottom'] = array('enable' => '0', 'min' => '', 'max' => '', 'require' => '0', 'default' => '0');

//文字顏色[theme_css.tpl]
$config_enable['font_color'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#202020');

//連結顏色[theme_css.tpl]
$config_enable['link_color'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#005ca8');

//移到連結顏色[theme_css.tpl]
$config_enable['hover_color'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#a40019');

/*
tabs-2 背景圖
 */

$config_tabs[2] = 1;

//上傳背景圖[theme_css.tpl]，值：可指定置於「themes/佈景/images/bg/」下的某一檔案名稱
$config_enable['bg_img'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'templatemo_main_bg.jpg');

//背景顏色[theme_css.tpl]
$config_enable['bg_color'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#FFFFFF');

//背景重複[theme_css.tpl]，值： repeat （重複）, repeat-x （水平重複）, repeat-y （垂直重複）, no-repeat （不重複）
$config_enable['bg_repeat'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'no-repeat');

//背景模式[theme_css.tpl]，值： scroll （捲動）,fixed （固定）
$config_enable['bg_attachment'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'fixed');

//背景位置[theme_css.tpl]，值： left top （預設，左上）, right top （右上）, left bottom （左下）, right bottom （右下）, center center （中中）, center top （中上）, center bottom （中下）
$config_enable['bg_position'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'center top');

/*
tabs-3 滑動圖片
 */

$config_tabs[3] = 1;

//佈景圖片寬度[slideshow_responsive.tpl]，值：若bootstrap模式，最大值為 12，若 html 模式，則輸入預設佈景圖片寬度，如： 980
$config_enable['slide_width'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '960');

//佈景圖片高度[slideshow_responsive.tpl]，值：數值，單位一律為 px
$config_enable['slide_height'] = array('enable' => '0', 'min' => '', 'max' => '', 'require' => '0', 'default' => '0');

//是否可上傳滑動圖片[slideshow_responsive.tpl]
$config_enable['use_slide'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '1');

/*
tabs-4 logo圖
 */

$config_tabs[4] = 1;

// 上傳logo圖[logo.tpl]，值：可指定置於「themes/佈景/images/logo/」下的某一檔案名稱
$config_enable['logo_img'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '');

//logo圖位置[logo.tpl]，值： slide （在滑動圖文上）, page （在頁面上）
$config_enable['logo_position'] = array('enable' => '0', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'page');

//Logo離上方距離[logo.tpl]，值：數值，單位一律為 px
$config_enable['logo_top'] = array('enable' => '0', 'min' => '', 'max' => '', 'require' => '0', 'default' => '');

//Logo離右邊距離[logo.tpl]，值：數值，單位一律為 px
$config_enable['logo_right'] = array('enable' => '0', 'min' => '', 'max' => '', 'require' => '0', 'default' => '');

//Logo離下方距離[logo.tpl]，值：數值，單位一律為 px
$config_enable['logo_bottom'] = array('enable' => '0', 'min' => '', 'max' => '', 'require' => '0', 'default' => '');

//Logo離左邊距離[logo.tpl]，值：數值，單位一律為 px
$config_enable['logo_left'] = array('enable' => '0', 'min' => '', 'max' => '', 'require' => '0', 'default' => '');

//Logo置中[logo.tpl]，值：1,0
$config_enable['logo_center'] = array('enable' => '0', 'min' => '', 'max' => '', 'require' => '', 'default' => '');

/*
tabs-5 區塊標題列
 */

$config_tabs[5] = 1;

//區塊標題文字大小[theme_css_blocks.tpl]，值：數值含單位
$config_enable['bt_text_size'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '1.5em');

//區塊標題縮排[theme_css_blocks.tpl]，值：數值，單位一律為 px
$config_enable['bt_text_padding'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '0');

//區塊標題文字顏色[theme_css_blocks.tpl]
$config_enable['bt_text'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#6bbdff');

//區塊標題背景顏色[theme_css_blocks.tpl]
$config_enable['bt_bg_color'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'transparent');

//區塊標題圓角設定[theme_css_blocks.tpl]，值： 1 （圓角）, 0 （直角）
$config_enable['bt_radius'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '1');

//區塊標題設定按鈕[theme_css_blocks.tpl]，值： right （右）, left （左）
$config_enable['block_config'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'right');

//區塊標題背景圖[theme_css_blocks.tpl]
$config_enable['bt_bg_img'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'transparent');

//區塊標題背景重複[theme_css_blocks.tpl]，值： 1 （重複）, 0 （不重複）
$config_enable['bt_bg_repeat'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '1');

//區塊整體樣式手動設定[theme_css_blocks.tpl]，值： 1 （重複）, 0 （不重複）
$config_enable['block_style'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '');

//區塊標題區樣式手動設定[theme_css_blocks.tpl]，值： 1 （重複）, 0 （不重複）
$config_enable['block_title_style'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'border:none;height:40px;line-height:40px;margin-bottom:10px;');

//區塊內容區樣式手動設定[theme_css_blocks.tpl]，值： 1 （重複）, 0 （不重複）
$config_enable['block_content_style'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '');

/*
若沒指定位置（如上方預設），那就是全部區塊預設值，若欲指定位置，只要多一個索引值即可：
$config_enable['bt_xx']['leftBlock']：左區塊設定
$config_enable['bt_xx']['rightBlock']：右區塊設定
$config_enable['bt_xx']['centerBlock']：上中區塊設定
$config_enable['bt_xx']['centerLeftBlock']：上中左區塊設定
$config_enable['bt_xx']['centerRightBlock']：上中右區塊設定
$config_enable['bt_xx']['centerBottomBlock']：下中區塊設定
$config_enable['bt_xx']['centerBottomLeftBlock']：下中左區塊設定
$config_enable['bt_xx']['centerBottomRightBlock']：下中右區塊設定
例如：
$config_enable['bt_bg_color']['leftBlock']=array('enable'=>1, 'min'=>'' , 'max'=>'' , 'require'=>0 , 'default'=>'#7CBBBB');
$config_enable['bt_bg_color']['rightBlock']=array('enable'=>1, 'min'=>'' , 'max'=>'' , 'require'=>0 , 'default'=>'#D2C38E');
 */

/*
tabs-6 導覽工具列
 */

$config_tabs[6] = 1;

//導覽工具列位置[navbar.tpl]，值： navbar-fixed-top （固定上方）, navbar-fixed-bottom （固定下方）, navbar-static-top （滑動圖片上方）, navbar-static-bottom （滑動圖片下方）, default （佈景預設值）, not-use （不使用）
$config_enable['navbar_pos'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'default');

//導覽工具列 漸層顏色(top)[theme_css_navbar.tpl]
$config_enable['navbar_bg_top'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'transparent');

//導覽工具列 漸層顏色(bottom)[theme_css_navbar.tpl]
$config_enable['navbar_bg_bottom'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'transparent');

//導覽工具列 連結區塊底色[theme_css_navbar.tpl]
$config_enable['navbar_hover'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'transparent');

//上傳導覽列背景圖[navbar.tpl]，值：可指定置於「themes/佈景/images/nav_bg/」下的某一檔案名稱
$config_enable['navbar_img'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'templatemo_wrapper_m.png');

//導覽工具列 文字顏色[theme_css_navbar.tpl]
$config_enable['navbar_color'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#520033');

//導覽工具列 文字移過顏色[theme_css_navbar.tpl]
$config_enable['navbar_color_hover'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#9e009d');

//導覽工具列 圖示顏色[navbar.tpl]，值： icon-white （白色圖案）, '' （黑色圖案）
$config_enable['navbar_icon'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'icon-white');

// 上傳導覽列logo圖[navbar.tpl]，值：可指定置於「themes/佈景/images/navlogo/」下的某一檔案名稱
$config_enable['navlogo_img'] = array('enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '');
