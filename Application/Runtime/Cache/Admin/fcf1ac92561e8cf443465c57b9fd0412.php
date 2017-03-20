<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" href="/multi/Public/Admin/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
<script src="/multi/Public/Admin/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="/multi/Public/Admin/plugins/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>

<section class="content-header">
    <h1>
        优惠券管理
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
                    <h3 class="box-title">新增优惠券</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo U('Admin/Admin/add/addon/Coupon');?>" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">名称</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="name" placeholder="" value="<?php echo ($ads["name"]); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">金额</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="price" placeholder="" value="<?php echo ($ads["name"]); ?>"
                                       type="number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">数量</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="num" placeholder="" value="<?php echo ($ads["name"]); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">截止时间</label>

                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" name="last_time"
                                           id="last_time" value="<?php echo ($productPost["timeRange"]); ?>">
                                </div>
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
        $('#last_time').datetimepicker({
            language:  'zh-CN',
            format: 'yyyy-mm-dd hh:ii'
        });
    });
</script>