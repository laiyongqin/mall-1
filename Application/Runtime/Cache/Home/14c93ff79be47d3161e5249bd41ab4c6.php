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
                    <h3 class="box-title">新增标签</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo U('Home/Shop/addLabel');?>" method="post">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo ($label['id']?$label['id']:0); ?>"
                               type="hidden">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">名称</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="name" placeholder="" value="<?php echo ($label["name"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">介绍</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="subname" placeholder="" value="<?php echo ($label["subname"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">备注</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="remark" placeholder="" value="<?php echo ($label["remark"]); ?>"
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