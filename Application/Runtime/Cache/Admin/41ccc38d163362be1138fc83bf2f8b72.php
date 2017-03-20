<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        签到管理
        <small></small>
    </h1>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">签到管理</h3>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="heading tabs" style="background: transparent;">
                        <ul class="nav nav-tabs pull-left" data-tabs="tabs" id="tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#tab1"><i class="icon-comments"></i><span>签到设置</span></a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#tab2"><i class="icon-user"></i><span>签到记录</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content padded" id="my-tab-content"style="margin-top: 60px;">
                        <div class="tab-pane active" id="tab1">
                            <!-- <h3>签到设置</h3> -->

                            <p>
                            <form action="<?php echo u_addons('Sign://Admin/Admin/addConfig');?>" id="myForm" method="post"
                                  onsubmit="return false;" class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-md-2">签到名称</label>

                                    <div class="col-md-7">
                                        <input class="form-control" placeholder="" value="<?php echo ($config["name"]); ?>"
                                               name="name" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">首次签到赠送积分</label>

                                    <div class="col-md-7">
                                        <input class="form-control" placeholder="" value="<?php echo ($config["first_sign"]); ?>"
                                               name="first_sign" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">连续签到增长积分</label>

                                    <div class="col-md-7">
                                        <input class="form-control" placeholder=""
                                               value="<?php echo ($config["continue_sign"]); ?>" name="continue_sign" type="text">
                                    </div>
                                </div>
                               <!--  <div class="form-group">
                                    <label class="control-label col-md-2">最大连续签到天数</label>

                                    <div class="col-md-7">
                                        <input class="form-control" placeholder="" value="<?php echo ($config["max_sign"]); ?>"
                                               name="max_sign" type="text">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label class="control-label col-md-2"></label>

                                    <div class="col-md-7">
                                        <button class="btn btn-primary"
                                                onclick="myFormSubmit('<?php echo u_addons('Sign://Admin/Admin/index');?>')"
                                                type="submit">提交
                                        </button>
                                        <button class="btn btn-default-outline">取消</button>
                                    </div>
                                </div>
                            </form>
                            </p>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <!-- <h3>签到记录</h3> -->

                            <p>

                            <div class="widget-content padded clearfix">
                                <table class="table table-hover">
                                    <thead>
                                    <th class="check-header hidden-xs">
                                        <label><input id="checkAll" name="checkAll"
                                                      type="checkbox"><span></span></label>
                                    </th>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        用户名
                                    </th>
                                    <th class="hidden-xs">
                                        积分
                                    </th>
                                    <th class="hidden-xs">
                                        时间
                                    </th>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($record)): $i = 0; $__LIST__ = $record;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$record): $mod = ($i % 2 );++$i;?><tr>
                                            <td class="check hidden-xs">
                                                <label><input name="optionsRadios1" type="checkbox"
                                                              value="option1"><span></span></label>
                                            </td>
                                            <td>
                                                <?php echo ($record["id"]); ?>
                                            </td>
                                            <td>
                                                <?php echo ($record["username"]); ?>
                                            </td>
                                            <td class="hidden-xs">
                                                <?php echo ($record["score"]); ?>
                                            </td>
                                            <td class="hidden-xs">
                                                <?php echo ($record["time"]); ?>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                                <?php echo ($page); ?>
                            </div>
                            </p>
                        </div>
                    </div>                    

                </div>
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
</section>