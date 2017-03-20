<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>微信安全支付</title>

    <script type="text/javascript">

        //调用微信JS api 支付
        function jsApiCall() {
            WeixinJSBridge.invoke(
                    'getBrandWCPayRequest',
                    <?php echo ($jsApiParameters); ?>,
                    function (res) {
                        WeixinJSBridge.log(res.err_msg);
                        // alert(res.err_code+res.err_desc+res.err_msg);
                        if (res.err_msg == 'get_brand_wcpay_request:ok') {
                            alert("支付成功!");
                        } else if (res.err_msg == 'get_brand_wcpay_request:cancel') {
                            alert("已取消支付!");
                        } else if (res.err_msg == 'get_brand_wcpay_request:fail') {
                            alert("支付失败!");
                        }
                        window.location.href = "<?php echo ($url); ?>";
                    }
            );
        }

        function callpay() {
            if (typeof WeixinJSBridge == "undefined") {
                if (document.addEventListener) {
                    document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
                } else if (document.attachEvent) {
                    document.attachEvent('WeixinJSBridgeReady', jsApiCall);
                    document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
                }
            } else {
                jsApiCall();
            }
        }
        callpay();
    </script>
</head>
<body>
</body>
</html>