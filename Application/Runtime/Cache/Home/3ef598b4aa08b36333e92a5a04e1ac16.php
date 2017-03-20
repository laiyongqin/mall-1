<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        用户管理
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
                    <h3 class="box-title">新增用户</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo U('Home/User/addUser');?>" method="post">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo ($user['id']?$user['id']:0); ?>"
                               type="hidden">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">用户名</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="username" placeholder="" value="<?php echo ($user["username"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">手机号</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="phone" placeholder="" value="<?php echo ($user["phone"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">密码</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="password" placeholder="请输入新密码" value=""
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">账户</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="money" placeholder="" value="<?php echo ($user["money"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">积分</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="score" placeholder="" value="<?php echo ($user["score"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">备注</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="remark" placeholder="" value="<?php echo ($user["remark"]); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">状态</label>

                            <div class="col-md-7">
                                <label class="radio-inline"><input name="status" type="radio"
                                    <?php if($user["status"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>启用</span></label>
                                <label class="radio-inline"><input name="status" type="radio"
                                    <?php if($user["status"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>禁用</span></label>
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
    function oaCheck(obj) {
        var auth = $('#auth').val();
        if ($(obj).is(":checked")) {
            auth += $(obj).val() + ',';
        } else {
            auth = auth.replace($(obj).val() + ',', '');
        }
        $('#auth').val(auth);
    }
</script>