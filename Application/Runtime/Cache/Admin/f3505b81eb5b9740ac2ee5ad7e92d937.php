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
                    <h3 class="box-title">新增微信自定义回复</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo U('Admin/Weixin/addWxReply');?>" method="post">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo ($wxReply['id']?$wxReply['id']:0); ?>"
                               type="hidden">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">类型</label>

                            <div class="col-sm-10">
                                <select name="type" class="form-control">
                                    <option value="news">图文</option>
                                    <option value="text">文本</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">标题</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="title" placeholder="" value="<?php echo ($wxReply["title"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">描述</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="description"
                                          rows="3"><?php echo ($wxReply["description"]); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">图片</label>

                            <div class="col-sm-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new img-thumbnail">
                                        <?php if(empty($wxReply["file_id"])): ?><img
                                                src="/Public/Admin/dist/img/noimage.gif">
                                            <?php else: ?>
                                            <img src="/Public/Uploads/<?php echo ($wxReply["savepath"]); echo ($wxReply["savename"]); ?>"><?php endif; ?>
                                        <input class="form-control" name="file_id" id="file_id" placeholder="" value="<?php echo ($wxReply['file_id']?$wxReply['file_id']:0); ?>"
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
                            <label class="col-sm-2 control-label">url</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="url" placeholder="" value="<?php echo ($wxReply["url"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">关键词</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="key" placeholder="" value="<?php echo ($wxReply["key"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">备注</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="remark" placeholder="" value="<?php echo ($wxReply["remark"]); ?>"
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
    if ('<?php echo ($wxReply); ?>') {
        $('select[name="type"]').val('<?php echo ($wxReply["type"]); ?>');
    }
</script>