<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        插件管理
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
                    <h3 class="box-title">插件管理</h3>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="table-responsive" style="overflow-x: visible;">
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <th>插件标识</th>
                                <th>插件名称</th>
                                <th>插件描述</th>
                                <th>链接</th>
                                <th>作者</th>
                                <th>版本</th>
                                <th>操作</th>
                            </tr>
                            <?php if(is_array($addons)): $i = 0; $__LIST__ = $addons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$addons): $mod = ($i % 2 );++$i;?><tr>
                                    <td>
                                        <?php echo ($addons["name"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($addons["title"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($addons["description"]); ?>
                                    </td>
                                    <td>
                                        <div class="btn-group" style="margin: 0px">
                                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                链接<span class="caret"></span></button>
                                            <div class="dropdown-menu" style="padding: 10px;max-width: none;">
                                                <?php echo ($url); echo u_addons($addons['name'].'://App/Index/index');?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo ($addons["author"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($addons["version"]); ?>
                                    </td>
                                    <td class="table-action">
                                        <a href="<?php echo ($addons["addons_config_url"]); ?>">设置</a><a href="<?php echo ($addons["addons_admin_url"]); ?>">管理</a><a href="<?php echo ($addons["addons_install_url"]); ?>">安装</a><a href="<?php echo ($addons["addons_uninstall_url"]); ?>">卸载</a>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
</section>