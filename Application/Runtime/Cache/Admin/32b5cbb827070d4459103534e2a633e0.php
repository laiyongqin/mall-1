<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        微信设置
        <small></small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">新增微信菜单</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo U('Admin/Weixin/addWxMenu');?>" method="post">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo ($wxMenu['id']?$wxMenu['id']:0); ?>"
                               type="hidden">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">上级菜单</label>

                            <div class="col-sm-10">
                                <select name="pid" class="form-control">
                                    <option value="0">一级菜单</option>
                                    <?php if(is_array($parentWxMenuList)): $i = 0; $__LIST__ = $parentWxMenuList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$parentWxMenuList): $mod = ($i % 2 );++$i;?><option value="<?php echo ($parentWxMenuList["id"]); ?>"><?php echo ($parentWxMenuList["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">菜单名称</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="name" placeholder="" value="<?php echo ($wxMenu["name"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">类型</label>

                            <div class="col-sm-10">
                                <select class="form-control" name="type">
                                    <option value="view">view</option>
                                    <option value="click">click</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">url</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="url" placeholder="" value="<?php echo ($wxMenu["url"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">关键词</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="key" placeholder="" value="<?php echo ($wxMenu["key"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">排序</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="rank" placeholder="" value="<?php echo ($wxMenu["rank"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">备注</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="remark" placeholder="" value="<?php echo ($wxMenu["remark"]); ?>"
                                       type="text">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-block btn-danger">保存</button>
                        </div>

                        <div class="col-sm-2">
                            <button type="button" class="btn btn-block btn-default" onclick="history.go(-1)">取消</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
</section>
<script type="text/javascript">
    if ('<?php echo ($wxMenu); ?>') {
        $('select[name="type"]').val('<?php echo ($wxMenu["type"]); ?>');
        $('select[name="pid"]').val('<?php echo ($wxMenu["pid"]); ?>');
    }
</script>