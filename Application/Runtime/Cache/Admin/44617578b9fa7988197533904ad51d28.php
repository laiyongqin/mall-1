<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        系统设置
        <small></small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
                <div class="widget-content padded">
                    <div class="row">
                        <div class="col-xs-12 no-padding-right">
                            <div style="width: 260px; float: left;">
                                <img src="/Theme/<?php echo ($settheme); ?>/thumb.png" style="width: 240px; height: 340px;"
                                     class="img-thumbnail">
                                <button type="button" class="btn btn-danger"
                                        style="margin: 6px 10px 0px 0px; width: 240px;">已设置
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12" style="margin-top:20px;">
                            <?php if(is_array($theme)): $i = 0; $__LIST__ = $theme;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$theme): $mod = ($i % 2 );++$i;?><div style="width: 260px; float: left;">
                                    <img src="/Theme/<?php echo ($theme); ?>/thumb.png"
                                         style="width: 240px; height: 340px;"
                                         class="img-thumbnail">
                                    <a href="<?php echo U('Admin/Config/tplSet',array('theme'=>$theme));?>" type="button"
                                       class="btn btn-default"
                                       style="margin: 6px 10px 0px 0px; width: 240px;">设置</a>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>