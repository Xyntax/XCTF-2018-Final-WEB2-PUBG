<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iImJh5KOi5OGk5KLlJCIjYg�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

require( "inc.php" );
if ( isset( $_POST['remark1'] ) && $_POST['remark1'] == 0 )
{
    $_obfuscate_k5OUk5WOk5KVlIaLlYmRh5I� = 1;
    include( "payapi_notify2.php" );
    exit( );
}
function _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_hoyMkoeOj42QioaSioaKi4g�, $_obfuscate_i5OJk5CSj4iKhpOJkJKTjpU� = 1 )
{
    if ( defined( "SAE_MYSQL_USER" ) || DEBUGPAYWG == 0 )
    {
        return FALSE;
    }
    $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE� = KSSLOGDIR."agentczdebug1_log.php";
    if ( $_obfuscate_i5OJk5CSj4iKhpOJkJKTjpU� == 1 )
    {
        @file_put_contents( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE�, @$_obfuscate_hoyMkoeOj42QioaSioaKi4g�."\r\n", @FILE_APPEND );
    }
    else if ( !is_file( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE� ) || 262144 < filesize( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE� ) )
    {
        $_obfuscate_ipWMho2NlI2MiI_MioeTlZI� = "?";
        $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZI� = "<".$_obfuscate_ipWMho2NlI2MiI_MioeTlZI�."php exit('Access denied to view this page!');".$_obfuscate_ipWMho2NlI2MiI_MioeTlZI�.">\r\n";
        @file_put_contents( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE�, @$_obfuscate_ipCIiZCRiYmKhpOSi4eSjZI�."\r\n\r\n\r\n时间:".@date( "Y-m-d H:i:s" )."\r\n订单号:".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."\r\n状态:".$_obfuscate_hoyMkoeOj42QioaSioaKi4g�."\r\n" );
    }
    else
    {
        @file_put_contents( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE�, @"\r\n\r\n\r\n时间:".@date( "Y-m-d H:i:s" )."\r\n订单号:".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."\r\n状态:".$_obfuscate_hoyMkoeOj42QioaSioaKi4g�."\r\n", @FILE_APPEND );
    }
}
$_obfuscate_jo_MipCRkYuSk4mSko2RkIg� = array( "ali" => "支付宝", "ten" => "财付通", "chinabank" => "网银在线", "e138" => "易付通", "jqr" => "支付宝机器人", "微信扫码" );
$_obfuscate_iZSViY2KjJSNjoePh4yOjI4� = array( "ali" => "success", "ten" => "success", "chinabank" => "ok", "e138" => "success", "jqr" => "success", "wx" => "success" );
$_obfuscate_k4iNkYmOkpOVjJCHkIqUj4k� = array( "ali" => "fail", "ten" => "fail", "chinabank" => "error", "e138" => "fail", "jqr" => "fail", "wx" => "fail" );
$_obfuscate_k5OQh4iJjoyPjJSMjpSOlZA� = array( "WAIT_BUYER_PAY", "WAIT_SELLER_SEND_GOODS", "WAIT_BUYER_CONFIRM_GOODS", "TRADE_FINISHED", "TRADE_SUCCESS", "SUCCESS", "FAIL" );
$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� = "ali";
if ( isset( $_GET['alipayjqr'] ) )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� = "jqr";
}
if ( isset( $_GET['transaction_id'] ) )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� = "ten";
}
if ( isset( $_POST['v_oid'] ) )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� = "chinabank";
}
if ( isset( $_GET['AttachString'] ) && $_GET['AttachString'] == "e138" )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� = "e138";
}
if ( isset( $GLOBALS['HTTP_RAW_POST_DATA'] ) && substr( $GLOBALS['HTTP_RAW_POST_DATA'], 0, 5 ) == "<xml>" )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� = "wx";
}
if ( isset( $_GET['alipayjqr'] ) )
{
    include( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�."pay_function.php" );
}
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
{
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJU� = "";
    $_obfuscate_h5WSiIeGkYiNk4iJjYuHkJA� = $GLOBALS['HTTP_RAW_POST_DATA'];
    $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkok� = _obfuscate_komQkZGUhomRk4eLipOSkJM�( $_obfuscate_h5WSiIeGkYiNk4iJjYuHkJA� );
    if ( !array_key_exists( "return_code", $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkok� ) && !array_key_exists( "result_code", $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkok� ) )
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( "未知", "GLOBALS:".$_obfuscate_h5WSiIeGkYiNk4iJjYuHkJA�, 0 );
        exit( "<xml><return_code><![CDATA[FAIL]]></return_code><return_msg><![CDATA[发送来的数据异常]]></return_msg></xml>" );
    }
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkok�['out_trade_no'], "val", "sql", "" );
    $_obfuscate_lZSLkIeSlIySkY6SlIuJio0� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkok�['transaction_id'], "val", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkok�['total_fee'], "val", "int", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� /= 100;
    $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkok�['result_code'], "val", "sql", "" );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ali" )
{
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "out_trade_no", "pg", "sql", "" );
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJU� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "trade_no", "pg", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "total_fee", "pg", "sql", "" );
    $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "trade_status", "pg", "sql", "" );
    $_obfuscate_j4mLiYmUj4aJiI6IjY6TjI0� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "buyer_email", "pg", "sql", "" );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
{
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJU� = "";
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = trim( $_GET['ordernum'] );
    $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpU� = trim( $_GET['rmb'] );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpU�;
    $_obfuscate_iImJjYmQjYyOjIuVkIuMjIs� = trim( $_GET['sign'] );
    $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� = "TRADE_SUCCESS";
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ten" )
{
    $_obfuscate_hpKNkIaShoaKkY6Lk4qVk5U� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "trade_mode", "gp", "int", 0 );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "out_trade_no", "gp", "sql", "" );
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJU� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "transaction_id", "gp", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "total_fee", "gp", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� /= 100;
    $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "trade_state", "gp", "sql", "" );
    if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "0" )
    {
        $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� = "TRADE_FINISHED";
    }
    else
    {
        $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� = "WAIT_BUYER_PAY";
    }
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "chinabank" )
{
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJU� = "";
    $_obfuscate_k42NkY2RkoiNjJCKlZSKiIg� = trim( $_POST['v_oid'] );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = $_obfuscate_k42NkY2RkoiNjJCKlZSKiIg�;
    $_obfuscate_iIuQkYaUioqGlI6IjIuMiI8� = trim( $_POST['v_pstatus'] );
    $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpU� = trim( $_POST['v_amount'] );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpU�;
    $_obfuscate_hpCRlJCSjI6Ki5WSipCLkpQ� = trim( $_POST['v_moneytype'] );
    $_obfuscate_lJSPjJCOi5CIiJSSkZWNh4Y� = trim( $_POST['remark1'] );
    $_obfuscate_iImJjYmQjYyOjIuVkIuMjIs� = trim( $_POST['v_md5str'] );
    if ( $_obfuscate_iIuQkYaUioqGlI6IjIuMiI8� == "20" )
    {
        $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� = "TRADE_FINISHED";
    }
    else
    {
        $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� = "WAIT_BUYER_PAY";
    }
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "e138" )
{
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJU� = "";
    $_obfuscate_k42NkY2RkoiNjJCKlZSKiIg� = trim( $_GET['SerialNo'] );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = $_obfuscate_k42NkY2RkoiNjJCKlZSKiIg�;
    $_obfuscate_iIuQkYaUioqGlI6IjIuMiI8� = trim( $_GET['Status'] );
    $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpU� = trim( $_GET['Money'] );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpU�;
    $_obfuscate_iImJjYmQjYyOjIuVkIuMjIs� = trim( $_GET['VerifyString'] );
    if ( $_obfuscate_iIuQkYaUioqGlI6IjIuMiI8� == "2" )
    {
        $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� = "TRADE_FINISHED";
    }
    else
    {
        $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� = "WAIT_BUYER_PAY";
    }
}
else
{
    exit( "errwg" );
}
_obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_i5CMioaGiI6ShomNiIuKjJE�, 0 );
$_obfuscate_k42GiI_RiIqKjIaUio6IiIw� = "POSTDATA:";
foreach ( $_POST as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
{
    $_obfuscate_k42GiI_RiIqKjIaUio6IiIw� .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�."=".urlencode( $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )."&";
}
_obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_k42GiI_RiIqKjIaUio6IiIw� );
$_obfuscate_lYuTjYmGkJWKk5WOjoeGlYw� = "GETDATA:";
foreach ( $_GET as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
{
    $_obfuscate_lYuTjYmGkJWKk5WOjoeGlYw� .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�."=".urlencode( $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )."&";
}
_obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_lYuTjYmGkJWKk5WOjoeGlYw� );
if ( in_array( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE�, $_obfuscate_k5OQh4iJjoyPjJSMjpSOlZA� ) )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器fail，状态码非法" );
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
    {
        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[状态码未找到]]></return_msg></xml>" );
    }
    exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4k�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_log_agentrmb where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'" );
if ( empty( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� ) )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器success，订单未找到" );
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
    {
        exit( "fail:Order_not_find" );
    }
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
    {
        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[订单未找到]]></return_msg></xml>" );
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
}
_obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "订单找到" );
if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['changermb'] != $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器success，订单金额不符，不再通知" );
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
    {
        exit( "fail:Order_rmb" );
    }
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
    {
        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[订单金额不符]]></return_msg></xml>" );
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
}
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iIeMkYyJiZKTjI2UjImPi4Y�( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['managerid'] );
$_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� = 1;
$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['pid'], $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pmid'] );
if ( !empty( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� ) && $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['islock'] == 0 )
{
    $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� = 0;
}
$_obfuscate_jYiHj4qPj4aUlIiUjIyJipE� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['pid'] );
if ( $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpA� == 1 )
{
    $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo� = $_obfuscate_jYiHj4qPj4aUlIiUjIyJipE�;
}
else if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 7 )
{
    $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo� = $_obfuscate_jYiHj4qPj4aUlIiUjIyJipE�;
}
else
{
    $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo� = $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�;
}
$_obfuscate_i42MjZCUi5CJjI_NhoaRj4Y� = 0;
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 8 && 1000 < LICTYPE )
{
    $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo� = _obfuscate_iIeMkYyJiZKTjI2UjImPi4Y�( 1 );
    $_obfuscate_i42MjZCUi5CJjI_NhoaRj4Y� = 1;
}
$_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5M� = explode( ",", $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alipayset'] );
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = _obfuscate_kpWLkoyMhouPipCQiImKjZA�( $_obfuscate_h5WSiIeGkYiNk4iJjYuHkJA�, $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['wxpaykey'] );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ali" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = _obfuscate_i4iVlY2UkouLj5KGlI2Uhoc�( $_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5M�[1], $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alikey'] );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ten" )
{
    if ( $_obfuscate_hpKNkIaShoaKkY6Lk4qVk5U� != 1 )
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器success，非即时到帐交易" );
        exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
    }
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = _obfuscate_jY6OlY_RlYqPjZSQh4uPkJQ�( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['tenkey'] );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
{
    if ( strtolower( md5( "ordernum=".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."&rmb=".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�."&key=".$_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alikey'] ) ) != $_obfuscate_iImJjYmQjYyOjIuVkIuMjIs� )
    {
        exit( "fail:URL_signerror" );
    }
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = TRUE;
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "chinabank" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = TRUE;
    if ( $_obfuscate_iImJjYmQjYyOjIuVkIuMjIs� != strtoupper( md5( $_obfuscate_k42NkY2RkoiNjJCKlZSKiIg�.$_obfuscate_iIuQkYaUioqGlI6IjIuMiI8�.$_obfuscate_jpGJk5SSkJOIk4iQiI_OhpU�.$_obfuscate_hpCRlJCSjI6Ki5WSipCLkpQ�.$_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['chinabankkey'] ) ) )
    {
        $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = FALSE;
    }
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "e138" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = TRUE;
    if ( $_obfuscate_iImJjYmQjYyOjIuVkIuMjIs� != strtolower( md5( "SerialNo=".$_obfuscate_k42NkY2RkoiNjJCKlZSKiIg�."&UserID=".$_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['e138set']."&Money=".$_obfuscate_jpGJk5SSkJOIk4iQiI_OhpU�."&Status=".$_obfuscate_iIuQkYaUioqGlI6IjIuMiI8�."&AttachString=e138&MerchantKey=".$_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['e138key'] ) ) )
    {
        $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = FALSE;
    }
}
if ( $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� !== TRUE )
{
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "校验微信发送来的XML数据:".$_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44�.",返回给微信服务器".$_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."，签名非法" );
        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[签名没通过]]></return_msg></xml>" );
    }
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "curl:".$_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� );
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器".$_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."，签名非法" );
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
}
_obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "签名效验通过" );
$_obfuscate_iIeHlZWKipOJlIyVk42UjJM� = 0;
$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8� = "";
if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['intro'] != $_obfuscate_kpGPh4mNh46SkZONh4eLlJU� )
{
    $_obfuscate_lYuMkpWKjIaLjIuOlIaUio8� = ",`intro`='".$_obfuscate_kpGPh4mNh46SkZONh4eLlJU�."'";
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "WAIT_BUYER_PAY" )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器success" );
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['optype'] < 21 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_agentrmb SET `optype`=21,`oldrmb`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['rmb'].$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8�." where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'", "sync" );
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "WAIT_SELLER_SEND_GOODS" )
{
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['optype'] < 22 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_agentrmb SET `optype`=22,`oldrmb`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['rmb'].$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8�."  where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'", "sync" );
    }
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ali" )
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "alipay 自动发货" );
        $_obfuscate_jomQlJOKjYaHko_SkZGKi4w� = _obfuscate_koyJjYuOjZOSiZOUkYmKi40�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_kpGPh4mNh46SkZONh4eLlJU�, $_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5M�[1], $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alikey'] );
        if ( function_exists( "curl_init" ) )
        {
            $_obfuscate_iYuIkIeRlJCQiIqQh5WGjIg� = _obfuscate_iYqMjJCPipKLjpSRioeUlYc�( $_obfuscate_jomQlJOKjYaHko_SkZGKi4w� );
            $_obfuscate_iJOJjo_KkY2PkYmSkY2JjJU� = stripos( $_obfuscate_iYuIkIeRlJCQiIqQh5WGjIg�, "<is_success>T</is_success>" );
            if ( $_obfuscate_iJOJjo_KkY2PkYmSkY2JjJU� !== FALSE && $_obfuscate_iJOJjo_KkY2PkYmSkY2JjJU� < 70 )
            {
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "自动发货成功！" );
            }
            else
            {
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "自动发货失败！" );
            }
        }
        else
        {
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "不支持curl，未能自动发货！" );
        }
    }
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器success" );
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "WAIT_BUYER_CONFIRM_GOODS" )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器success" );
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['optype'] < 23 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_agentrmb SET `optype`=23,`oldrmb`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['rmb'].$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8�."  where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'", "sync" );
    }
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ali" )
    {
        $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo� = explode( ",", $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alipayset'] );
        if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[0] == "create_partner_trade_by_buyer" && $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[2] == $_obfuscate_j4mLiYmUj4aJiI6IjY6TjI0� )
        {
            $_obfuscate_iIeHlZWKipOJlIyVk42UjJM� = 1;
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "使用特殊帐号的提卡交易，发货后就给代理充值！" );
        }
        else
        {
            exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
        }
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "TRADE_FINISHED" || $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "TRADE_SUCCESS" || $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "SUCCESS" || $_obfuscate_iIeHlZWKipOJlIyVk42UjJM� == 1 )
{
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['optype'] != 24 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_agentrmb SET `optype`=24,`oldrmb`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['rmb'].$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8�." where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'", "sync" );
        $_obfuscate_j4ePkZOGiZOLjpSLio_PjY0� = "";
        if ( $_obfuscate_i42MjZCUi5CJjI_NhoaRj4Y� == 1 )
        {
            if ( 100 <= $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� )
            {
                $_obfuscate_j4ePkZOGiZOLjpSLio_PjY0� = ",`endtime`='".date( "Y-m-d H:i:s", strtotime( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['endtime'] ) + 2592000 )."'";
            }
            if ( $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� == 50 )
            {
                $_obfuscate_j4ePkZOGiZOLjpSLio_PjY0� = ",`endtime`='".date( "Y-m-d H:i:s", strtotime( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['endtime'] ) + 1296000 )."'";
            }
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `rmb`=`rmb`+".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�." ".$_obfuscate_j4ePkZOGiZOLjpSLio_PjY0�." where `id`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'], "sync" );
        $_obfuscate_i42MjZCUi5CJjI_NhoaRj4Y� = 1;
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
        {
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "代理充值加款失败！".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
        }
        else
        {
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "代理充值加款成功！" );
        }
    }
    else
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "二次通知已成功处理！" );
    }
}
exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
?>
