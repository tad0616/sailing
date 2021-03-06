<!DOCTYPE html>
<html lang="<{$xoops_langcode}>">
  <head>
    <!--目前$_SESSION['bootstrap']="<{php}>echo $_SESSION['bootstrap'];<{/php}>"; -->
    <!--將目前的資料夾名稱，設定為樣板標籤變數 theme_name-->
    <{assign var=theme_name value=$xoTheme->folderName}>

    <!--載入由使用者設定的各項佈景變數-->
    <{includeq file="$xoops_rootpath/modules/tadtools/themes_common/get_var.tpl"}>

    <{includeq file="$xoops_rootpath/modules/tadtools/themes_common/meta.tpl"}>

    <!-- 網站的標題及標語 -->
    <title><{$xoops_sitename}> - <{$xoops_pagetitle}></title>

    <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/link_css.tpl"}>

    <!-- 給模組套用的樣板標籤 -->
    <{$xoops_module_header}>
    <script src="<{$xoops_url}>/browse.php?Frameworks/jquery/jquery.js" type="text/javascript"></script>
    <script src="<{$xoops_url}>/modules/tadtools/jquery/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<{$xoops_url}>/modules/tadtools/jquery/ui/jquery-ui.js" type="text/javascript"></script>
    <script src="<{$xoops_url}>/modules/tadtools/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>

    <!-- 局部套用的樣式，如果有載入完整樣式 theme_css.tpl 那就不需要這一部份 -->
    <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/theme_css.tpl"}>
    <link rel="stylesheet" type="text/css" media="all" title="Style sheet" href="<{xoImgUrl templatemo_style.css}>" />
    <style type="text/css" media="screen">
      body{
        font-size: <{$font_size}>;
        font-family: <{$font_family}>;
      }
      .nav-pills > li > a{
        background: <{$navbar_bg_top}>;
        color: <{$navbar_color}>;
      }
      .nav-pills > li > a:hover{
        background: <{$navbar_hover}>;
        color: <{$navbar_color_hover}>;
      }
    </style>
  </head>

  <body>

    <div id="templatemo_wrapper_outer">
      <div id="templatemo_wrapper">
        <div id="templatemo_header">
          <div id="site_title">
            <{if $logo_img}>
              <a href="<{xoAppUrl}>"><img src="<{$logo_img}>" alt="<{$xoops_sitename}>" style="position: absolute;z-index:10;"></a>
            <{else}>
              <h1><a href="<{xoAppUrl}>"><{$xoops_sitename}><span><{$xoops_slogan}></span></a></h1>
            <{/if}>
          </div>

          <div id="templatemo_menu">
            <ul>
              <{foreach from=$topmenu item=tm key=i}>
                <li><a href="<{$tm.url}>" <{if $i==0}>class="current"<{/if}> <{if $tm.target}>target="<{$tm.target}>"<{/if}>><{$tm.name}></a></li>
              <{/foreach}>
            </ul>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <!--{includeq file="$theme_name/xotpl/slider.tpl"}-->
            <div id="templatemo_slider">
              <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/slider/amazingslider1.tpl"}>
            </div>
            <div id="templatemo_content">
              <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/menu/nav-pills/menu.tpl"}>
              <div class="col-sm-12">
                <!-- 載入布局 -->
                  <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/siteclosed_login.tpl"}>
              </div>
              <div class="cleaner"></div>
              <div id="templatemo_footer">
                <{$xoops_footer}>
              </div>

              <div id="templatemo_copyright">
                Copyright © 2048 <a href="#">Your Company Name</a> | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="templatemo_footer_wrapper" style="position: fixed; bottom: 0px; z-index: -1;">
      </div>
    </div>



    <!-- 載入 BootStrap所需的javascript -->
    <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/bootstrap_js.tpl"}>

    <!-- 載入自訂的javascript -->
    <{includeq file="$xoops_rootpath/modules/tadtools/themes3_tpl/my_js.tpl"}>

    <!-- 是否顯示樣板變數資訊 -->
    <{if $show_var==1}>
    <{includeq file="$xoops_rootpath/modules/tadtools/themes_common/show_var.tpl"}>
    <{/if}>

  </body>
</html>