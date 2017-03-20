<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
    <meta name="referrer" content="origin-when-cross-origin">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">

    <title><?php echo ($artical["title"]); ?></title>
    <link rel="stylesheet" type="text/css"
          href="/Public/Artical/page_mp_article_improve2756b8.css">
    <link rel="stylesheet" type="text/css"
          href="/Public/Artical/page_mp_article_improve_combo2805ea.css">
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css"
          href="/Public/Artical/page_mp_article_improve_pc2637ae.css">
    <![endif]-->
</head>
<body>
<div id="js_article" class="rich_media">

    <div id="js_top_ad_area" class="top_banner">

    </div>
    <div class="rich_media_inner">
        <div id="page-content">
            <div id="img-content" class="rich_media_area_primary">
                <h2 class="rich_media_title" id="activity-name">
                    <?php echo ($artical["title"]); ?>
                </h2>

                <div class="rich_media_meta_list">
                    <em id="post-date" class="rich_media_meta rich_media_meta_text"><?php echo ($artical["time"]); ?></em>

                    <em class="rich_media_meta rich_media_meta_text">作者</em>
                    <a class="rich_media_meta rich_media_meta_link rich_media_meta_nickname" href="javascript:void(0);"
                       id="post-user"><?php echo ($artical["author"]); ?></a>
                </div>

                <div class="rich_media_content" id="js_content">
                    <p><?php echo ($artical["content"]); ?></p>
                </div>

                <div class="rich_media_tool" id="js_toobar2">

                    <div id="js_read_area2" class="media_tool_meta tips_global meta_primary" style="display:block;">阅读
                        <span id="readNum2"><?php echo ($artical["visiter"]); ?></span></div>

                </div>
            </div>

        </div>
        <div id="js_pc_qr_code" class="qr_code_pc_outer">
            <div class="qr_code_pc_inner">
                <div class="qr_code_pc">
                    <img id="js_pc_qr_code_img" class="qr_code_pc_img" src="<?php echo ($qrCode); ?>">

                    <p>微信扫一扫<br>关注该公众号</p>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>