<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        文章管理
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
                    <h3 class="box-title">新增文章</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo U('Home/Artical/addArtical');?>" method="post">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="0"
                               type="hidden">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">标题</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="title" placeholder="" value="<?php echo ($artical["title"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">作者</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="author" placeholder="" value="<?php echo ($artical["author"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">简介</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="sub"
                                          rows="3"><?php echo ($artical["sub"]); ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">图片</label>

                            <div class="col-sm-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new img-thumbnail">
                                        <?php if(empty($artical["file_id"])): ?><img
                                                src="/Public/Admin/dist/img/noimage.gif">
                                            <?php else: ?>
                                            <img src="/Public/Uploads/<?php echo ($artical["savepath"]); echo ($artical["savename"]); ?>"><?php endif; ?>
                                        <input class="form-control" name="file_id" id="file_id" placeholder=""
                                               value="<?php echo ($artical['file_id']?$artical['file_id']:0); ?>"
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
                            <label class="col-sm-2 control-label">备注</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="remark" placeholder="" value="<?php echo ($artical["remark"]); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">内容</label>

                            <div class="col-sm-10">
                                <!-- 加载编辑器的容器 -->
                                <script id="UEditor" name="content" type="text/plain" style="height:500px;"><?php echo ($artical["content"]); ?></script>
                            </div>
                        </div>
                    </div>

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
        //实例化编辑器异步载入
        var editor = new UE.ui.Editor();
        editor.render("UEditor");

        if ('<?php echo ($artical); ?>') {
            $('input[name="id"]').val('<?php echo ($artical["id"]); ?>');
        }
    });
</script>