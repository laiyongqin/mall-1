<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        系统设置
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
                    <h3 class="box-title">支付宝设置</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" method="post" action="<?php echo U('Admin/Config/alipaySet');?>">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo ($alipay['id']?$alipay['id']:0); ?>"
                               type="hidden">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">支付宝账号</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="alipayname" placeholder=""
                                       value="<?php echo ($alipay["alipayname"]); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">合作身份者ID</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="partner" placeholder="" value="<?php echo ($alipay["partner"]); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">安全校验码KEY</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="key" placeholder="" value="<?php echo ($alipay["key"]); ?>"
                                       type="text">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-block btn-danger">保存</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (right) -->
    </div>
</section>