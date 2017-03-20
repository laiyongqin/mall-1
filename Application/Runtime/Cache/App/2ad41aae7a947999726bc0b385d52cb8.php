<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>投票系统</title>
    <meta name="format-detection" content="telephone=no, address=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- apple devices fullscreen -->
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link href="/wemall/Addons/Vote/View/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/wemall/Addons/Vote/View/Public/css/font-awesome.min.css" rel="stylesheet">
    <link href="/wemall/Addons/Vote/View/Public/css/animate.css" rel="stylesheet">
    <link href="/wemall/Addons/Vote/View/Public/css/common.css" rel="stylesheet">
    <link href="/wemall/Addons/Vote/View/Public/css/sign.css" rel="stylesheet">

    <script type="text/javascript" src="/wemall/Addons/Vote/View/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/wemall/Addons/Vote/View/Public/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container container-fill">
    <div class="pcenter-main">
        <div class="head">
            <div class="pdetail">
                <div class="img-circle"><img src="<?php echo ($user["avater"]); ?>"></div>
                <div class="pull-left">
                    <span class="name"><?php echo ($user["username"]); ?></span>
                    <span class="type">会员ID: <?php echo ($user["id"]); ?></span>
                </div>
            </div>
            <div class="head-nav">
                <a class="head-nav-list"
                   href="">累计投票<span><?php echo ($config["vote_num"]); ?></span></a>
                <a class="head-nav-list"
                   href="">访问量<span><?php echo ($config["visiter_num"]); ?></span></a>
            </div>
        </div>
    </div>
    <div class="scroll-container">
        <div class="wrapper">
            <ul class="list-group">
                <li class="list-group-item" style="padding: 0px 0px;border-bottom: 1px solid #ccc;">
                    <div class="con">
                        <div class="list-hd">
                            <h5>项目：</h5><span><?php echo ($config["name"]); ?></span>
                        </div>
                    </div>
                </li>
                <li class="list-group-item" style="padding: 1px 0px;border-bottom: 1px solid #ccc;">
                    <div class="con">
                        <div class="list-hd">
                            <h5>时间：</h5><span><?php echo ($config["activity_time"]); ?></span>
                        </div>
                    </div>
                </li>
                <li class="list-group-item" style="padding: 0px;">
                    <div class="con">
                        <div class="list-hd">
                            <h5>投票介绍：</h5><span><?php echo ($config["about"]); ?></span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <ul class="nav nav-bardown nav-justified" style="z-index:10;">
        <li><a href="javascript:openUrl('<?php echo u_addons('Vote://Index/vote',array('id'=>$config['id']));?>')"><span class="btn btn-default" style="border-radius: 50px;padding: 10px 30px;">点击投票</span></a></li>
    </ul>
</div>

<script type="text/javascript">
    function openUrl(url){
        $.get(url , function (data) {
            alert('投票成功!');
            location.reload();
        });
    }

</script>
</body>
</html>