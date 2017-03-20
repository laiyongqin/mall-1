<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
    .select2-container--default .select2-selection--multiple {
        border-radius: 0px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #dd4b39;
        border: 0px;
        border-radius: 0px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: #fff;
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #dd4b39;
    }

    #allmap {
        width: 100%;
        height: 100%;
        overflow: hidden;
        margin: 0;
        font-family: "微软雅黑";
    }
</style>

<section class="content-header">
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
                    <h3 class="box-title">商城设置</h3>
                </div>
                <!-- form start -->
                <form action="<?php echo U('Home/Shop/addShop');?>" method="post" class="form-horizontal">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo ($shop['id']?$shop['id']:0); ?>"
                               type="hidden">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商城名称</label>

                            <div class="col-sm-6">
                                <input class="form-control" name="name" placeholder="" value="<?php echo ($shop["name"]); ?>"
                                       type="text">
                            </div>
                            <div class="col-md-4" style="color: red">
                                *名称最多8个字
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">子名称</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="subname" placeholder="" value="<?php echo ($shop["subname"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">图片</label>

                            <div class="col-sm-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new img-thumbnail">
                                        <?php if(empty($shop["file_id"])): ?><img
                                                src="/Public/Admin/dist/img/noimage.gif">
                                            <?php else: ?>
                                            <img src="/Public/Uploads/<?php echo ($shop["savepath"]); echo ($shop["savename"]); ?>"><?php endif; ?>
                                        <input class="form-control" name="file_id" id="file_id" placeholder=""
                                               value="<?php echo ($shop["file_id"]); ?>"
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
                            <label class="control-label col-md-2">是否显示在店铺列表</label>

                            <div class="col-md-7">
                                <label class="radio-inline"><input name="shoplist" type="radio"
                                    <?php if($shop["shoplist"] == 1): ?>checked="checked"<?php endif; ?>
                                    value="1"><span>显示</span></label>
                                <label class="radio-inline"><input name="shoplist" type="radio"
                                    <?php if($shop["shoplist"] == 0): ?>checked="checked"<?php endif; ?>
                                    value="0"><span>隐藏</span></label>
                            </div>
                        </div>

                        <!--<div class="form-group">-->
                        <!--    <label class="control-label col-md-2">店铺是否隐藏</label>-->

                        <!--    <div class="col-md-7">-->
                        <!--        <label class="radio-inline"><input name="is_show" type="radio"-->
                        <!--            <?php if($shop["is_show"] == 1): ?>checked="checked"<?php endif; ?>-->
                        <!--            value="1"><span>显示</span></label>-->
                        <!--        <label class="radio-inline"><input name="is_show" type="radio"-->
                        <!--            <?php if($shop["is_show"] == 0): ?>checked="checked"<?php endif; ?>-->
                        <!--            value="0"><span>隐藏</span></label>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商城公告</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="notification"
                                          rows="3"><?php echo ($shop["notification"]); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">温馨提示</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="reminder" rows="3"><?php echo ($shop["reminder"]); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">客服电话</label>

                            <div class="col-sm-10">
                                <input class="form-control" placeholder="" name="tel" value="<?php echo ($shop["tel"]); ?>" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">客服QQ</label>

                            <div class="col-sm-10">
                                <input class="form-control" placeholder="" name="qq" value="<?php echo ($shop["qq"]); ?>" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">地址</label>

                            <div class="col-sm-10">
                                <input class="form-control" placeholder="" id="address" readonly name="address"
                                       value="<?php echo ($shop["address"]); ?>"
                                       type="text">
                                <div id='message'></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">经纬度</label>

                            <div class="col-md-2">
                                <input class="form-control" name="lng" readonly id="lng" value="<?php echo ($shop["lng"]); ?>"
                                       placeholder="经度"
                                       type="text">
                            </div>
                            <div class="col-md-2">
                                <input class="form-control" name="lat" readonly id="lat" value="<?php echo ($shop["lat"]); ?>"
                                       placeholder="纬度"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">定位</label>

                            <div class="col-sm-10" style="height: 600px;margin-bottom: 20px;">
                                <div class="districtsList" style="margin-top: 8px;margin-bottom: 5px;">
                                    省：
                                    <select id='province' style="width:100px" onchange='amapAdcode.createCity(this.value)'></select>
                                    市：
                                    <select id='city' style="width:100px" onchange='amapAdcode.createDistrict(this.value)'></select>
                                    区：
                                    <select id='district' style="width:100px" onchange='amapAdcode.createBiz(this.value)'></select>
                                    商圈：
                                    <select id='biz_area' style="width:100px"></select>
                                </div>
                                <div id="allmap"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">订单满减</label>

                            <div class="col-md-2">
                                <input class="form-control" name="full" value="<?php echo ($shop["full"]); ?>" placeholder="满多少" type="text">
                            </div>
                            <div class="col-md-2">
                                <input class="form-control" name="discount" value="<?php echo ($shop["discount"]); ?>" placeholder="减多少" type="text">
                            </div>
                        </div>
                        <!--<div class="form-group">-->
                        <!--    <label class="control-label col-md-2">账户支付折扣</label>-->

                        <!--    <div class="col-md-2">-->
                        <!--        <input class="form-control" step="0.01" name="zhekou" value="<?php echo ($shop["zhekou"]); ?>" placeholder="在线支付折扣"-->
                        <!--               type="number">-->
                        <!--    </div>-->
                        <!--    <div class="col-md-3" style="color: red">-->
                        <!--        * 账户支付折扣的值 (  0 < x <= 1 )-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">运费</label>

                            <div class="col-sm-10">
                                <input class="form-control" placeholder="" name="freight" value="<?php echo ($shop["freight"]); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">配送时间</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="delivery_time"
                                          rows="3"
                                          placeholder="格式(英文逗号)10:30-11:30,14:30-15:30"><?php echo ($shop["delivery_time"]); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">备注</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="remark" placeholder="" value="<?php echo ($shop["remark"]); ?>"
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
<script type="text/javascript">
    var lng = <?php echo ($shop['lng'] ? $shop['lng'] : 113); ?>;
    var lat = <?php echo ($shop['lat'] ? $shop['lat'] : 34); ?>;
    var ads = "<?php echo ($shop['address'] ? $shop['address'] : "中国"); ?>";

    var map = new AMap.Map('allmap', {
        resizeEnable: true,
        zoom: 13,
        center: [lng, lat]
    });
    $(document).ready(function () {

        //为地图注册click事件获取鼠标点击出的经纬度坐标
        var clickEventListener = map.on('click', function(e) {
            document.getElementById("lng").value = e.lnglat.getLng();
            document.getElementById("lat").value = e.lnglat.getLat();
        });
        AMap.plugin('AMap.Geocoder', function() {
            var geocoder = new AMap.Geocoder({
                city: "010" //城市，默认：“全国”
            });
            var marker = new AMap.Marker({
                map: map,
                bubble: true
            })
            var address = document.getElementById('address');
            var lng = document.getElementById('lng');
            var lat = document.getElementById('lat');
            var message = document.getElementById('message');
            map.on('click', function(e) {
                marker.setPosition(e.lnglat);
                geocoder.getAddress(e.lnglat, function(status, result) {
                    if (status == 'complete') {
                        // console.log(result);
                        var address1 = result.regeocode.formattedAddress;
                        address.value = address1;
                        message.innerHTML = ''
                    } else {
                        message.innerHTML = '无法获取地址'
                    }
                });
    
            })
    
            address.onchange = function(e) {
                var address = address.value;
                geocoder.getLocation(address, function(status, result) {
                    if (status == 'complete' && result.geocodes.length) {
                        marker.setPosition(result.geocodes[0].location);
                        map.setCenter(marker.getPosition())
                        message.innerHTML = ''
                    } else {
                        message.innerHTML = '无法获取位置'
                    }
                })
            }
    
        });

    });
    
//城市插件
    var amapAdcode = {};
    amapAdcode._district = new AMap.DistrictSearch({ //高德行政区划查询插件实例
        subdistrict: 1 //返回下一级行政区
    });
    amapAdcode._overlay = []; //行政区划覆盖物
    amapAdcode.createSelectList = function(selectId, list) { //生成下拉列表
        var selectList = document.getElementById(selectId);
        selectList.innerHTML = '';
        selectList.add(new Option('--请选择--'));
        for (var i = 0, l = list.length, option; i < l; i++) {
            option = new Option(list[i].name);
            option.setAttribute("value", list[i].adcode)
            selectList.add(option);
        }
    }
    amapAdcode.search = function(adcodeLevel, keyword, selectId) { //查询行政区划列表并生成相应的下拉列表
        var me = this;
        if (adcodeLevel == 'district' || adcodeLevel == 'city') { //第三级时查询边界点
            this._district.setExtensions('all');
        } else {
            this._district.setExtensions('base');
        }
        this._district.setLevel(adcodeLevel); //行政区级别
        this._district.search(keyword, function(status, result) { //注意，api返回的格式不统一，在下面用三个条件分别处理
            var districtData = result.districtList[0];
            if (districtData.districtList) {
                me.createSelectList(selectId, districtData.districtList);
            } else if (districtData.districts) {
                me.createSelectList(selectId, districtData.districts);
            } else {
                document.getElementById(selectId).innerHTML = '';
            }
            map.setCenter(districtData.center);
            me.clearMap();
            // me.addPolygon(districtData.boundaries);
        });
    }
    amapAdcode.searchs = function(adcodeLevel, keyword, selectId) { //查询行政区划列表并生成相应的下拉列表
        var me = this;
        if (adcodeLevel == 'district' || adcodeLevel == 'city') { //第三级时查询边界点
            this._district.setExtensions('all');
        } else {
            this._district.setExtensions('base');
        }
        this._district.setLevel(adcodeLevel); //行政区级别
        this._district.search(keyword, function(status, result) { //注意，api返回的格式不统一，在下面用三个条件分别处理
            var districtData = result.districtList[0];
            if (districtData.districtList) {
                me.createSelectList(selectId, districtData.districtList);
            } else if (districtData.districts) {
                me.createSelectList(selectId, districtData.districts);
            } else {
                document.getElementById(selectId).innerHTML = '';
            }
            // map.setCenter(districtData.center);
            me.clearMap();
            // me.addPolygon(districtData.boundaries);
        });
    }
    amapAdcode.clearMap = function(selectId) { //清空地图上的覆盖物
        map.remove(this._overlay);
        this._overlay = [];
    }
    // amapAdcode.addPolygon = function(boundaries) { //往地图上添加覆盖物
    //     if (boundaries) {
    //         for (var i = 0, l = boundaries.length; i < l; i++) {
    //             //生成行政区划polygon
    //             var polygon = new AMap.Polygon({
    //                 map: map,
    //                 path: boundaries[i]
    //             });
    //             this._overlay.push(polygon);
    //         }
    //         map.setFitView(); //地图自适应
    //     }
    // }
    amapAdcode.clear = function(selectId) { //清空下拉列表
        var selectList = document.getElementById(selectId);
        selectList.innerHTML = '';
    }
    amapAdcode.createProvince = function() { //创建省列表
        this.searchs('country', "中国", 'province');
    }
    amapAdcode.createCity = function(provinceAdcode) { //创建市列表
        this.search('province', provinceAdcode, 'city');
        this.clear('district');
        this.clear('biz_area');
    }
    amapAdcode.createDistrict = function(cityAdcode) { //创建区县列表
        this.search('city', cityAdcode, 'district');
        this.clear('biz_area');
    }
    amapAdcode.createBiz = function(districtAdcode) { //创建商圈列表
        this.search('district', districtAdcode, 'biz_area');
    }
    amapAdcode.createProvince();

</script>