<?php if (!defined('THINK_PATH')) exit();?><section class="content-header">
    <h1>
        系统首页
        <small></small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo ($todayNewOrder?$todayNewOrder:0); ?></h3>

                    <p>今日新订单</p>
                </div>
                <div class="icon">
                    <i class="ion ion-connection-bars"></i>
                </div>
                <a href="<?php echo U('Admin/Order/order',array('day'=>date('Y-m-d')));?>" class="small-box-footer">更多详情 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo ($todayNewTrade?$todayNewTrade:0); ?></h3>

                    <p>今日销售额</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?php echo U('Admin/Order/order',array('day'=>date('Y-m-d')));?>" class="small-box-footer">更多详情 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?php echo ($yesterdayNewOrder?$yesterdayNewOrder:0); ?></h3>

                    <p>昨日新订单</p>
                </div>
                <div class="icon">
                    <i class="ion ion-connection-bars"></i>
                </div>
                <a href="<?php echo U('Admin/Order/order',array('day'=>date('Y-m-d', strtotime('-1 day'))));?>" class="small-box-footer">更多详情 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo ($yesterdayNewTrade?$yesterdayNewTrade:0); ?></h3>

                    <p>昨日销售额</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?php echo U('Admin/Order/order',array('day'=>date('Y-m-d', strtotime('-1 day'))));?>" class="small-box-footer">更多详情 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>


    <div class="row">
        <div class="col-md-12">
            <!-- LINE CHART -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">新订单走势图</h3>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="newOrderLineChart" style="height:250px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- LINE CHART -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">销售额走势图</h3>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="userBuyLineChart" style="height:250px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<script type="text/javascript">
    $(function () {
        //Get context with jQuery - using jQuery's .get() method.
        var ctx = $("#newOrderLineChart").get(0).getContext("2d");
        //This will get the first returned node in the jQuery collection.

        var data = {
            labels : <?php echo ($date); ?>,
            datasets : [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    data : <?php echo ($newOrderLine); ?>
                }
            ]
        }

        new Chart(ctx).Line(data);

        var ctx = $("#userBuyLineChart").get(0).getContext("2d");
        //This will get the first returned node in the jQuery collection.

        var data = {
            labels : <?php echo ($date); ?>,
            datasets : [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    data : <?php echo ($userTradeLine); ?>
                }
            ]
        }

        new Chart(ctx).Line(data);
    });
</script>