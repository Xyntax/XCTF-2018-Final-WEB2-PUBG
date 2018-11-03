<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jJSQk5OSj4iGiY2GhpOLjI8�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
_obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "cz_sorder" )
{
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "sordernum", "pg", "sql", "" );
    $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_log_agentrmb where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'" );
    if ( !empty( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� ) && $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['optype'] == 24 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "jsvok" );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "notok" );
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "管理员帐号无需充值。" );
}
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] && LICTYPE < 1000 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "只有".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[7]."或".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[6]."帐号才需要充值。" );
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 8 )
{
    $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where `id`=1 and level=9 limit 0,1" );
    if ( empty( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "未能取得管理员帐号信息，不能在线充值，请联系管理员！" );
    }
}
else
{
    $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� = 1;
    $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'], $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pmid'] );
    if ( empty( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� ) )
    {
        $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� = 0;
    }
    $_obfuscate_jYiHj4qPj4aUlIiUjIyJipE� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
    $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = "";
    if ( $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� == 1 )
    {
        $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo� = $_obfuscate_jYiHj4qPj4aUlIiUjIyJipE�;
        if ( strlen( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alipayset'] ) < 20 && strlen( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['tenpayset'] ) < 10 )
        {
            $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[8]."未设置收款接口，无法在线充值，请联系".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[8]."线下代充！";
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
        }
    }
    else if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
    {
        $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo� = $_obfuscate_jYiHj4qPj4aUlIiUjIyJipE�;
        if ( strlen( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alipayset'] ) < 20 && strlen( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['tenpayset'] ) < 10 )
        {
            $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[8]."未设置收款接口，无法在线充值，请联系".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[8]."线下代充！";
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
        }
    }
    else
    {
        $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo� = $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�;
        if ( strlen( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alipayset'] ) < 20 && strlen( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['tenpayset'] ) < 10 )
        {
            $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[7]."未设置收款接口，无法在线充值，请联系".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[7]."线下代充！";
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
        }
    }
}
$_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo� = explode( ",", $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alipayset'] );
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "cz_alino" )
{
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "ordernum", "pg", "sql", "" );
    $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_log_agentrmb where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'" );
    if ( empty( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "订单未找到" );
    }
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['intro'] == "" )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "网关订单号为空。" );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['intro'] );
}
else
{
    if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "cz_begin" )
    {
        $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "submit", "pg", "sqljs", "" );
        $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "rmb", "pg", "num", "0" );
        $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_jY_QjpOPk46MkoqNlZCQiJU�( "C" );
        if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "支付宝" )
        {
            include( KSSINCDIR."alipay_function.php" );
            $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = round( $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�, 2 );
            $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo� = explode( ",", $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alipayset'] );
            $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = array( "service" => $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[0], "partner" => $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1], "seller_id" => $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1], "notify_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_notify.php", "subject" => $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['username']."充值", "body" => "代理服务费", "out_trade_no" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "price" => $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�, "payment_type" => "1", "quantity" => "1", "logistics_fee" => "0.00", "logistics_payment" => "SELLER_PAY", "logistics_type" => "EXPRESS" );
            if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[0] != "create_direct_pay_by_user" )
            {
                $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['receive_name'] = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['username'];
                $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['receive_address'] = "虚拟物品无需收货地址";
                $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['receive_zip'] = "100000";
                $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['receive_phone'] = "010-12345678";
            }
            else
            {
                $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['return_url'] = _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_return.php";
            }
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� = _obfuscate_koiJjZKKlIqLjZORiYaGjog�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�, $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alikey'] );
        }
        else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "支付宝机器人" )
        {
            if ( strlen( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1] ) < 8 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "无法用支付宝机器人来完成支付！收款帐号少于8位字符" );
            }
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� = "<form name='' method='post' target='_blank' action='../kss_inc/jqrjamp.php'>";
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "<input type='hidden' name='aliusername' value='".$_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1]."' />";
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "<input type='hidden' name='rmb' value='".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�."'/>";
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "<input type='hidden' name='ordernum' value='KKAPP-2-".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' />";
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "<input type=submit class=submitbtn name=submit value='点击支付'>";
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "</form><br>";
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "登陆并进入支付宝转帐页面后，<span style='color:#0000ff'>收款人</span>请填写<input type=text  onClick='this.select()' style='width:100px;color:#0000ff' value=".$_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1].">&nbsp;";
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "<span style='color:#0000ff'>付款金额</span>请填写<input type=text  onClick='this.select()' style='width:50px;color:#0000ff' value=".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�."></span>&nbsp;";
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� .= "<span style='color:#0000ff'>付款说明</span>请填写<input type=text  onClick='this.select()' style='width:150px;color:#0000ff' value=KKAPP-2-".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."></span><br>";
        }
        else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "财付通" )
        {
            include( KSSINCDIR."tenpay_function.php" );
            $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = array( "partner" => $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['tenpayset'], "out_trade_no" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "total_fee" => $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� * 100, "return_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_return.php", "notify_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_notify.php", "body" => "代理服务费", "bank_type" => "DEFAULT", "spbill_create_ip" => $_SERVER['REMOTE_ADDR'], "fee_type" => "1", "subject" => $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['username']."充值", "sign_type" => "MD5", "service_version" => "1.0", "input_charset" => "UTF-8", "sign_key_index" => "1", "transport_fee" => "0", "trade_mode" => "1", "trans_type" => "1" );
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� = _obfuscate_lZWKjpCLjomHkoyKlZWQi5M�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�, $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['tenkey'] );
        }
        else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "微信扫码" )
        {
            if ( strlen( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['wxpayset'] ) < 15 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "无法用微信扫码来完成支付！" );
            }
            include( KSSINCDIR."wxpay_function.php" );
            $_obfuscate_jo_TkYyIiIiUiImPhpSOio8� = explode( ",", $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['wxpayset'] );
            $_obfuscate_iY2Pho6Li4yQkIaIiYuIios� = array( "appid" => trim( $_obfuscate_jo_TkYyIiIiUiImPhpSOio8�[0] ), "body" => $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['username']."充值", "device_info" => "WEB", "mch_id" => trim( $_obfuscate_jo_TkYyIiIiUiImPhpSOio8�[1] ), "nonce_str" => md5( time( ) ), "notify_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_notify.php", "out_trade_no" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "product_id" => $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['id'], "spbill_create_ip" => long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk� ), "time_expire" => date( "YmdHis", time( ) + 600 ), "time_start" => date( "YmdHis" ), "total_fee" => $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� * 100, "trade_type" => "NATIVE" );
            ksort( &$_obfuscate_iY2Pho6Li4yQkIaIiYuIios� );
            $_obfuscate_lIyHjJWRj46SkI6Ik4aNlYk� = _obfuscate_h4yJjZWLkYyMjIqNlYaSjpM�( $_obfuscate_iY2Pho6Li4yQkIaIiYuIios�, $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['wxpaykey'] );
            $_obfuscate_i4aTiI2KhouJi5OLi4iLkpQ� = _obfuscate_lZCGk4mUkY6GhoeIkZWMk5Q�( $_obfuscate_lIyHjJWRj46SkI6Ik4aNlYk�, "https://api.mch.weixin.qq.com/pay/unifiedorder" );
            $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkok� = _obfuscate_komQkZGUhomRk4eLipOSkJM�( $_obfuscate_i4aTiI2KhouJi5OLi4iLkpQ� );
            $_obfuscate_jYqIiYuQiIuHiYmGkpSQlYg� = _obfuscate_kpWLkoyMhouPipCQiImKjZA�( $_obfuscate_i4aTiI2KhouJi5OLi4iLkpQ�, $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['wxpaykey'] );
            if ( $_obfuscate_jYqIiYuQiIuHiYmGkpSQlYg� !== TRUE )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "无法用微信扫码来完成支付！<textarea>".htmlspecialchars( $_obfuscate_lIyHjJWRj46SkI6Ik4aNlYk� ).htmlspecialchars( $_obfuscate_i4aTiI2KhouJi5OLi4iLkpQ� )."</textarea>".$_obfuscate_jYqIiYuQiIuHiYmGkpSQlYg� );
            }
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� = _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/qrcode.php?data=".urlencode( $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkok�['code_url'] );
        }
        else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "网银在线" )
        {
            include( KSSINCDIR."chinabankpay_function.php" );
            $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = array( "partner" => $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['chinabankset'], "ordernum" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "rmb" => $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�, "cz" => 1, "return_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_return.php" );
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� = _obfuscate_jZOUipGMiJKKjZKJkZCIkYk�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�, $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['chinabankkey'] );
        }
        else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "易付通" )
        {
            include( KSSINCDIR."e138pay_function.php" );
            $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = array( "partner" => $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['e138set'], "ordernum" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "rmb" => $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�, "return_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_return.php", "notify_url" => _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/payapi_notify.php", "bkid" => $_GET['bkid'] );
            $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� = _obfuscate_lYuMlYiPko_OkYqUk4qRlJE�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�, $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['e138key'] );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",0,".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".time( ).",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['rmb'].",".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�.",20,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."','')", "sync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "记录订单失败，操作中断。".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
        }
        echo "<script type=\"text/javascript\">\t\r\n$(document).ready(function() {\t\r\n$(\"#cofok\").bind(\"click\",function(){\r\nvar ourl=\"admin_manager.php?action=cz_alino&isajax=1&ordernum=";
        echo $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�;
        echo "\";\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,2)=='ok'){\r\nwindow.open('https://lab.alipay.com/consume/queryTradeDetail.htm?tradeNo='+html.substr(2));\r\n}else{\r\nmalert('未能取到支付宝订单号，请<a href=http://www.alipay.com target=_blank>登陆支付宝确认收货</a>');\r\n};\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl);\r\n} \r\n});\t\r\n\r\n\r\n});\r\n$(\"#senditem\").bind(\"click\",function(e){\r\nvar ourl=\"admin_manager.php?action=cz_senditem&isajax=1&ordernum=";
        echo $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�;
        echo "\";\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\nmalert(html);\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\r\n\r\n});\r\n});\r\n</script>\r\n\r\n<table border=0  cellpadding=\"10\" cellspacing=\"10\" >\r\n<tr malt='订单号可到财务日志里查询'>\r\n<td align=right>订单号</td>\r\n<td align=left>";
        echo $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�;
        echo "  &nbsp;&nbsp;<font color=red>该订单号请到财务日志里查询</font></td>\r\n</tr>\t\t\t\r\n<tr>\r\n<td align=right>充值金额</td>\r\n<td align=left>";
        echo $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�;
        echo "元</td>\r\n</tr>\t\t\t\r\n<tr>\r\n<td align=right>&nbsp;</td>\r\n<td align=left>付款成功后，如果没有返回充值成功信息，请查询余额。</td>\r\n</tr>\r\n";
        if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "易付通" )
        {
            echo "<tr><td align=left colspan=2>".$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4�."</td></tr>";
        }
        else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "财付通" )
        {
            echo "<tr><td align=left colspan=2><input type=button class=submitbtn onclick=window.open('".$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4�."') value='点击支付' ></td></tr>";
        }
        else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "支付宝机器人" )
        {
            echo "<tr><td align=left colspan=2><br>支付宝机器人方式，付款完成后会没有充值成功的返回信息，充值的金额会在2分钟内到帐，超出2分钟未到帐请联系管理员<br>".$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4�."</td></tr>";
        }
        else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "网银在线" )
        {
            echo "<tr><td align=left colspan=2>".$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4�."</td></tr>";
        }
        else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "微信扫码" )
        {
            echo "<tr><td align=left colspan=2>请用微信扫描下边的二维码支付<br><img src=".$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4�." style='width:150px;height:150px;'></td></tr>";
        }
        else if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "支付宝" )
        {
            echo "<tr><td align=left colspan=2><input type=button class=submitbtn onclick=".YH2."window.open('".$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4�."')".YH2." value='点击支付' >";
            if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[0] == "create_partner_trade_by_buyer" )
            {
                if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[2] == "" )
                {
                    echo "<font color=red>如果你没有支付宝帐号，为免不必要的麻烦请不要使用支付宝充值</font><br><br>";
                }
                else
                {
                    echo "<font color=red>如果你没有支付宝帐号，在点击支付后，请选非支付宝会员支付方式，并且在Email地址或手机号码栏填写</font><font color=blue>".$_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[2]."</font><br>";
                    echo "<font color=red>支付成功后，系统一分钟内会自动给你帐号充值</font><br><br>";
                }
                echo "如果你有支付帐帐号，支付成功后，系统会自动发货，请到支付宝网站的交易管理里<input type=button class=submitbtn value='确认收货' id='cofok'><br>确认收货后，系统一分钟内会自动给你帐号充值";
            }
            else if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[0] == "trade_create_by_buyer" )
            {
                echo "<font color=red>请使用即时到帐方式支付，不要用担宝交易</font>";
            }
            echo "</td></tr>";
        }
        echo "</table>";
        if ( $_obfuscate_iY2TlZWTiYqIjY2TiJGGk4g� == "微信扫码" )
        {
            echo "<script type=\"text/javascript\">\r\nvar t;\r\nt=setTimeout(\"jsvieworder()\",10000);\r\nfunction jsvieworder(){\r\nvar ourl='";
            echo INSTALLPATH.ADMINFOLDER;
            echo "/admin_manager.php?action=cz_sorder&isajax=1&jsv=1&sordernum=";
            echo $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�;
            echo "';\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){                        \r\nif(html.substr(0,5)=='jsvok'){\r\nalert('充值成功,请到我的信息->我的资料中查询余额变动');\t\t\r\n}else{\r\nt=setTimeout(\"jsvieworder()\",3000);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl);\r\n} \r\n});\r\n}\r\n</script>\r\n\r\n";
        }
        exit( );
    }
    if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "cz_senditem" )
    {
        include( KSSINCDIR."alipay_function.php" );
        $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "ordernum", "pg", "sql", "" );
        $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_log_agentrmb where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'" );
        if ( empty( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "订单未找到" );
        }
        if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['intro'] == "" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "网关订单号为空，无法通知发货" );
        }
        $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo� = explode( ",", $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alipayset'] );
        if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[0] != "create_partner_trade_by_buyer" )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "这个订单无需你来发货！" );
        }
        $_obfuscate_jomQlJOKjYaHko_SkZGKi4w� = _obfuscate_koyJjYuOjZOSiZOUkYmKi40�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['intro'], $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[1], $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alikey'] );
        if ( function_exists( "curl_init" ) )
        {
            $_obfuscate_iYuIkIeRlJCQiIqQh5WGjIg� = _obfuscate_iYqMjJCPipKLjpSRioeUlYc�( $_obfuscate_jomQlJOKjYaHko_SkZGKi4w� );
            $_obfuscate_iJOJjo_KkY2PkYmSkY2JjJU� = stripos( $_obfuscate_iYuIkIeRlJCQiIqQh5WGjIg�, "<is_success>T</is_success>" );
            if ( $_obfuscate_iJOJjo_KkY2PkYmSkY2JjJU� !== FALSE && $_obfuscate_iJOJjo_KkY2PkYmSkY2JjJU� < 70 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "发货成功" );
            }
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "发货失败".htmlspecialchars( $_obfuscate_iYuIkIeRlJCQiIqQh5WGjIg� ) );
        }
        else
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "服务器不支持curl" );
        }
    }
}
echo "\r\n<script type=\"text/javascript\">\t\r\n\r\n$(document).ready(function() {\t\r\n$(\"input[name='submit']\").bind(\"click\",function(){\r\nvar ourl=\"./admin_manager.php?action=cz_begin&isajax=1&rmb=\"+$(\"#rmb\").val()+\"&submit=\"+encodeURIComponent($(this).val());\r\nif($(this).val()=='易付通')ourl=ourl+\"&bkid=\"+$(\"#bkid\").val();\r\nmalert(ourl,'完成充值前请不要关闭本窗口',750,301);\t\t\r\n});\r\n});\r\n</script>\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['username'];
echo "-帐号充值</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\t\t\r\n<table border=0  cellpadding=\"10\" cellspacing=\"10\" >\r\n<tr>\r\n<td align=right>充值金额</td>\r\n<td align=left>";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 8 )
{
    echo "<select name=\"rmb\" id=\"rmb\">\r\n<option value=30.00>30元</option>\r\n<option value=50.00>50元</option>\r\n<option value=100.00>100元</option>\r\n<option value=150.00>150元</option>\r\n<option value=200.00>200元</option>\r\n<option value=500.00>500元</option>\r\n<option value=1000.00>1000元</option>\r\n</select>\r\n";
}
else
{
    echo "<input class=\"smlinput\" type=\"text\" maxlength=\"5\" name=\"rmb\" id=\"rmb\" value='100' />元\r\n";
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 8 )
{
    echo "<br>单次充值50（包括50），免费自动延期15天的帐号有效期<br>单次充值100以上（包括100），免费自动延期1个月的帐号有效期";
}
echo "</td>\r\n</tr>\t\t\t\r\n<tr>\r\n<td align=right>支付方式</td>\r\n<td align=left>";
if ( 20 < strlen( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alipayset'] ) )
{
    if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[0] == "alipay_jqr" )
    {
        echo "<input type=button class='submitbtn' name='submit' value='支付宝机器人'>&nbsp;&nbsp;";
    }
    else
    {
        echo "<input type=button class='submitbtn' name='submit' value='支付宝'>&nbsp;&nbsp;";
    }
}
if ( 9 < strlen( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['wxpayset'] ) )
{
    echo "<input type=button class='submitbtn' name='submit' value='微信扫码'>&nbsp;&nbsp;";
}
if ( 9 < strlen( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['tenpayset'] ) )
{
    echo "<input type=button class='submitbtn' name='submit' value='财付通'>&nbsp;&nbsp;";
}
if ( 3 < strlen( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['chinabankset'] ) )
{
    echo "<input type=button class='submitbtn' name='submit' value='网银在线'>";
}
if ( isset( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['e138set'] ) && 10 < strlen( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['e138set'] ) )
{
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� = "<br>易付通支付请先选择支付银行<select id=bkid name=bkid>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=BOCB2C>中国银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=CMB>招商银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=ICBCB2C>中国工商银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=CCB>中国银设银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=ABC>中国农业银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=SPDB>上海浦东发展银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=CIB>兴业银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=GDB>广东发展银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=SDB>深圳发展银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=CMBC>中国民行银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=COMM>交通银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=CITIC>中信银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=CEBBANK>中国光大银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "<option value=PSBC-DEBIT>中国邮政储蓄银行</option>";
    $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0� .= "</select>";
    echo $_obfuscate_kpOUlIiGk5SGlIqIjYaPko0�;
    echo "&nbsp;<input type=button name=submit class=submitbtn value='易付通'>";
}
echo "</td>\r\n</tr>\t\t\t\r\n</table>\r\n\r\n</div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";
?>
