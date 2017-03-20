<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        商城管理
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
                    <h3 class="box-title">新增广告</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo U('Home/Shop/addAds');?>" method="post">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="0"
                               type="hidden">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">名称</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="name" placeholder="" value="<?php echo ($ads["name"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">简介</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="sub"
                                          rows="3"><?php echo ($ads["sub"]); ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">图片</label>

                            <div class="col-sm-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new img-thumbnail">
                                        <?php if(empty($ads["file_id"])): ?><img
                                                src="/wemall/Public/Admin/dist/img/noimage.gif">
                                            <?php else: ?>
                                            <img src="/wemall/Public/Uploads/<?php echo ($ads["savepath"]); echo ($ads["savename"]); ?>"><?php endif; ?>
                                        <input class="form-control" name="file_id" id="file_id" placeholder=""
                                               value="<?php echo ($ads["file_id"]); ?>"
                                               type="hidden">

                                        <div class="edit_pic_mask">
                                            <i class="fa fa-plus-circle" onclick="imageUploader(this,false)"></i>
                                            <i class="fa fa-minus-circle" onclick="removeImage(this,false)"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">广告位</label>

                            <div class="col-md-7">
                                <label class="radio-inline"><input name="adsname" type="radio"
                                    <?php if($ads["adsname"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>幻灯片</span></label>
                                <label class="radio-inline"><input name="adsname" type="radio"
                                    <?php if($ads["adsname"] == 2): ?>checked="checked"<?php endif; ?>
                                    value="2"><span>插件位</span></label>
                                <label class="radio-inline"><input name="adsname" type="radio"
                                    <?php if($ads["adsname"] == 3): ?>checked="checked"<?php endif; ?>
                                    value="3"><span>长行广告位</span></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">链接</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="url" placeholder="" value="<?php echo ($ads["url"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">排序</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="rank" placeholder="" value="<?php echo ($ads["rank"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">备注</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="remark" placeholder="" value="<?php echo ($ads["remark"]); ?>"
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
                            <button type="button" class="btn btn-block btn-default" onclick="history.go(-1)">取消
                            </button>
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
    $(function () {
        if ('<?php echo ($ads); ?>') {
            $('input[name="id"]').val('<?php echo ($ads["id"]); ?>');
        }
    });
</script>