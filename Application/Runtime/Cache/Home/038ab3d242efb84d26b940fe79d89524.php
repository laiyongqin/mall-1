<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        商城管理
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
                    <h3 class="box-title">菜单管理</h3>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="mailbox-controls">
                        <div class="btn-group">
                            <a href="<?php echo U('Home/Shop/addMenu');?>" class="btn btn-danger ">
                                新增菜单
                            </a>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <div class="table-responsive" style="overflow-x: visible;">
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <th class="hidden-xs">
                                    <label><input onchange="checkAll()" type="checkbox" value=""></label>
                                </th>
                                <th>店铺名称</th>
                                <th>菜单名称</th>
                                <th>图片</th>
                                <th>排序</th>
                                <th>备注</th>
                                <th>操作</th>
                            </tr>

                            <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><tr>
                                    <td class="hidden-xs">
                                        <label><input name="checkbox" class="check" type="checkbox" value="<?php echo ($menu["id"]); ?>"></label>
                                    </td>

                                    <td>
                                        <?php echo ($menu["shop"]["name"]); ?>
                                    </td>
                                    <td><?php echo ($menu["name"]); ?></td>
                                    <td>
                                        <?php if($menu["savepath"] && $menu.savename): ?><img style="height: 48px;max-width: 72px"
                                                 src="/Public/Uploads/<?php echo ($menu["savepath"]); echo ($menu["savename"]); ?>"><?php endif; ?>
                                    </td>
                                    <td><?php echo ($menu["rank"]); ?></td>
                                    <td><?php echo ($menu["remark"]); ?></td>
                                    <td class="table-action"><a
                                            href="<?php echo U('Home/Shop/modifyMenu',array('id'=>$menu['id']));?>">修改</a><a
                                            href="<?php echo U('Home/Shop/delMenu',array('id'=>$menu['id']));?>">删除</a>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                        <div class="box-footer no-padding">
                            <div class="mailbox-controls">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger "
                                            onclick="batchUrl('<?php echo U('Home/Shop/delMenu');?>')">全部删除
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
</section>