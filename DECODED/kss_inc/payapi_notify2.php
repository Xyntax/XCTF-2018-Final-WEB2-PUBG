<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_io_HhpSGjI6IlZKJioqUhpI�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_hoyMkoeOj42QioaSioaKi4g�, $_obfuscate_i5OJk5CSj4iKhpOJkJKTjpU� = 1 )
{
    if ( defined( "SAE_MYSQL_USER" ) || DEBUGPAYWG == 0 )
    {
        return FALSE;
    }
    $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE� = KSSLOGDIR."saledebug1_log.php";
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

if ( isset( $_POST['wxtest'] ) )
{
    $GLOBALS['HTTP_RAW_POST_DATA'] = $_POST['wxtest'];
}
if ( isset( $_obfuscate_k5OUk5WOk5KVlIaLlYmRh5I� ) )
{
    include( "inc.php" );
}
$_obfuscate_jo_MipCRkYuSk4mSko2RkIg� = array( "ali" => "支付宝", "ten" => "财付通", "chinabank" => "网银在线", "e138" => "易付通", "jqr" => "支付宝机器人", "wx" => "微信扫描" );
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
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = trim( $_GET['rmb'] );
    $_obfuscate_iImJjYmQjYyOjIuVkIuMjIs� = trim( $_GET['sign'] );
    $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� = "TRADE_SUCCESS";
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ten" )
{
    $_obfuscate_hpKNkIaShoaKkY6Lk4qVk5U� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "trade_mode", "gp", "int", 0 );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "out_trade_no", "gp", "sql", "" );
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJU� = "";
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
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器success，状态码".$_obfuscate_i5CMioaGiI6ShomNiIuKjJE�."非法，不再通知" );
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
    {
        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[状态码未找到]]></return_msg></xml>" );
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select A.*,B.softname,B.mailtext from kss_tb_order as A left join kss_tb_soft as B on A.softid=B.id where A.ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'" );
if ( empty( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� ) )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器success，订单未找到，不再通知" );
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
if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['orderamount'] != $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� )
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
$_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5M� = explode( ",", $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['alipayset'] );
$_obfuscate_i4yRjJOUiI2QjYiHkpGUi5M� = explode( ",", $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['wxpayset'] );
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = _obfuscate_kpWLkoyMhouPipCQiImKjZA�( $_obfuscate_h5WSiIeGkYiNk4iJjYuHkJA�, $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['wxpaykey'] );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ali" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = _obfuscate_i4iVlY2UkouLj5KGlI2Uhoc�( $_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5M�[1], $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['alikey'] );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ten" )
{
    if ( $_obfuscate_hpKNkIaShoaKkY6Lk4qVk5U� != 1 )
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器success，非即时到帐交易" );
        exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
    }
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = _obfuscate_jY6OlY_RlYqPjZSQh4uPkJQ�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['tenkey'] );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
{
    if ( strtolower( md5( "ordernum=".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."&rmb=".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�."&key=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['alikey'] ) ) != $_obfuscate_iImJjYmQjYyOjIuVkIuMjIs� )
    {
        exit( "fail:URL_signerror" );
    }
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = TRUE;
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "chinabank" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = TRUE;
    if ( $_obfuscate_iImJjYmQjYyOjIuVkIuMjIs� != strtoupper( md5( $_obfuscate_k42NkY2RkoiNjJCKlZSKiIg�.$_obfuscate_iIuQkYaUioqGlI6IjIuMiI8�.$_obfuscate_jpGJk5SSkJOIk4iQiI_OhpU�.$_obfuscate_hpCRlJCSjI6Ki5WSipCLkpQ�.$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['chinabankkey'] ) ) )
    {
        $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = FALSE;
    }
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "e138" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = TRUE;
    if ( $_obfuscate_iImJjYmQjYyOjIuVkIuMjIs� != strtolower( md5( "SerialNo=".$_obfuscate_k42NkY2RkoiNjJCKlZSKiIg�."&UserID=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['e138set']."&Money=".$_obfuscate_jpGJk5SSkJOIk4iQiI_OhpU�."&Status=".$_obfuscate_iIuQkYaUioqGlI6IjIuMiI8�."&AttachString=e138&MerchantKey=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['e138key'] ) ) )
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
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $GLOBALS['HTTP_RAW_POST_DATA'] );
}
$_obfuscate_iIeHlZWKipOJlIyVk42UjJM� = 0;
$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8� = "";
if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['aliorderno'] != $_obfuscate_kpGPh4mNh46SkZONh4eLlJU� )
{
    $_obfuscate_lYuMkpWKjIaLjIuOlIaUio8� = ",`aliorderno`='".$_obfuscate_kpGPh4mNh46SkZONh4eLlJU�."'";
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "WAIT_BUYER_PAY" )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器success" );
    if ( $_obfuscate_lYuMkpWKjIaLjIuOlIaUio8� != "" )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_order SET `aliorderno`='".$_obfuscate_kpGPh4mNh46SkZONh4eLlJU�."' where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'", "sync" );
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "WAIT_SELLER_SEND_GOODS" )
{
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['orderstatus'] < 1 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_order SET `orderstatus`=1".$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8�."  where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'", "sync" );
    }
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ali" )
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "alipay 自动发货" );
        $_obfuscate_jomQlJOKjYaHko_SkZGKi4w� = _obfuscate_koyJjYuOjZOSiZOUkYmKi40�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_kpGPh4mNh46SkZONh4eLlJU�, $_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5M�[1], $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['alikey'] );
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
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['orderstatus'] < 2 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_order SET `orderstatus`=2".$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8�."  where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'", "sync" );
    }
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ali" )
    {
        $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo� = explode( ",", $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['alipayset'] );
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
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "TRADE_FINISHED" || $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "TRADE_SUCCESS" || $_obfuscate_iIeHlZWKipOJlIyVk42UjJM� == 1 || $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "SUCCESS" )
{
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['orderstatus'] < 8 )
    {
        $_obfuscate_hpGMlZWJho_Pj5CNlJWUiJI� = 0;
        $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� = 0;
        $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8� = "";
        $_obfuscate_hpKUj5GNh4aPlI2JhpSGlZE� = "";
        $_obfuscate_i4yTlYaRiIeKjY6QjImVi5E� = "";
        $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_keyset where id=".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['keygroupid'] );
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
        {
            $_obfuscate_kYqLhouRj5GLipOGk4iPh4c� = $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid']( "select * from kss_tb_agentprice where `softid`=".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid']." and `keygroupid`=".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['keygroupid']." and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." and `tmpkey`='no'" );
            $_obfuscate_h5SKjZOQh4yGkoqGkYuUj4Y� = $_obfuscate_kYqLhouRj5GLipOGk4iPh4c�['keyprice'];
            $_obfuscate_hoiIjJOLhoyKjZONh4eLiZU� = $_obfuscate_h5SKjZOQh4yGkoqGkYuUj4Y� * $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['keycount'];
            if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['touzhirmb'] + $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['rmb'] < $_obfuscate_hoiIjJOLhoyKjZONh4eLiZU� )
            {
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "代理余额不足，不能扣款！" );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                {
                    exit( "fail:level6_rmb_Not_enough" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[代理余额不足]]></return_msg></xml>" );
                }
                exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
            }
            $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'], $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pmid'] );
            if ( empty( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� ) )
            {
                $_obfuscate_hoaGiZOUjIyGk4eMjJCPio0� = $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid']( "select * from kss_tb_agentprice where `softid`=".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid']." and `keygroupid`=".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['keygroupid']." and `managerid`=".$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['id']." and `tmpkey`='no'" );
                if ( empty( $_obfuscate_hoaGiZOUjIyGk4eMjJCPio0� ) )
                {
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "上级总代理没有该注册卡销售权！" );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                    {
                        exit( "fail:level7_key_Not_permission" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[上级总代理没有该注册卡销售权]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
                }
                $_obfuscate_jo_ThoyRjpCLkoqVkYeViJA� = $_obfuscate_hoaGiZOUjIyGk4eMjJCPio0�['keyprice'];
                $_obfuscate_hpGMlZWJho_Pj5CNlJWUiJI� = $_obfuscate_jo_ThoyRjpCLkoqVkYeViJA� * $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['keycount'];
                if ( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['touzhirmb'] + $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['rmb'] < $_obfuscate_hpGMlZWJho_Pj5CNlJWUiJI� )
                {
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "上级总代理帐号余额不足，不能扣款！" );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                    {
                        exit( "fail:level7_rmb_Not_enough" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[上级代理余额不足]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
                }
            }
            $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
            if ( empty( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c� ) )
            {
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "上级作者帐号未找到！" );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                {
                    exit( "fail:Not_find_level8" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[上级作者帐号未找到]]></return_msg></xml>" );
                }
                exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
            }
            if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['level'] == 8 )
            {
                $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� = _obfuscate_iImThpCMlYmSjIeMi5GOlIg�( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['cday'], $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['linknum'] );
                $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� = $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� * $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['keycount'];
                if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['touzhirmb'] + $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['rmb'] < $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� )
                {
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "上级作者帐号余额不足，不能扣款！" );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                    {
                        exit( "fail:level8_rmb_Not_enough" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[上级作者帐号余额不足]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
                }
            }
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 8 )
        {
            $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�;
            $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� = _obfuscate_iImThpCMlYmSjIeMi5GOlIg�( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['cday'], $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40�['linknum'] );
            $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� = $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYs� * $_obfuscate_hpCPjIePioeHkYiIhpSPkok�;
            if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['touzhirmb'] + $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['rmb'] < $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� )
            {
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "上级作者帐号余额不足，不能扣款！" );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[上级作者帐号余额不足]]></return_msg></xml>" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                {
                    exit( "fail:level8_rmb_Not_enough" );
                }
                exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
            }
        }
        $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'] );
        if ( $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk� !== TRUE )
        {
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "未能成功独占操作：".$_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk� );
            if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
            {
                exit( "retry:locktable error" );
            }
            if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
            {
                exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[未能成功独占操作]]></return_msg></xml>" );
            }
            exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4k�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".time( ).",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['rmb'].",".( 0 - $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['agentamount'] ).",1,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."','零售提卡')", "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'] );
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "操作代理金额变动日志时出错[未扣款]！".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                {
                    exit( "fail:level6_editrmb_err" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[操作代理金额变动日志时出错]]></return_msg></xml>" );
                }
                exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4k�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['agentamount'].",`xfrmb`=`xfrmb`+".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['agentamount']." where `id`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'], "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' order by `id` Desc limit 0,1", "sync" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_manager`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'] );
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "代理扣款操作失败！".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                {
                    exit( "fail:level6_editrmb_err" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[代理扣款操作失败]]></return_msg></xml>" );
                }
                exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4k�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
            }
            $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8� = "代理款项已扣，";
            if ( empty( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A� ) )
            {
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES\r\n(".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'].",".$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".time( ).",".$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['rmb'].",".( 0 - $_obfuscate_hpGMlZWJho_Pj5CNlJWUiJI� ).",1,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."','零售提卡')", "sync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'] );
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8�."记录上级总代扣款日志失败，操作中断[总代未扣款]！".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                    {
                        exit( "fail:level7_writelog_editrmb_err" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[记录上级总代扣款日志失败，操作中断]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4k�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
                }
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_hpGMlZWJho_Pj5CNlJWUiJI�.",`xfrmb`=`xfrmb`+".$_obfuscate_hpGMlZWJho_Pj5CNlJWUiJI�." where `id`=".$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5A�['id'], "sync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' order by `id` Desc limit 0,1", "sync" );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_manager`", "notsync" );
                    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'] );
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8�."上级总代理扣款操作失败，操作中断！".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                    {
                        exit( "fail:level7_editrmb_err" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[上级总代理扣款操作失败，操作中断]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4k�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
                }
                $_obfuscate_hpKUj5GNh4aPlI2JhpSGlZE� = "总代理款项已扣，";
            }
            if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['level'] == 8 )
            {
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'].",".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".time( ).",".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['rmb'].",".( 0 - $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� ).",1,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."','零售提卡')", "sync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'] );
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8�.$_obfuscate_hpKUj5GNh4aPlI2JhpSGlZE�."记录上级作者扣款日志失败，操作中断[作者未扣款]！".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                    {
                        exit( "fail:level8_writelog_editrmb_err" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[记录上级作者扣款日志失败，操作中断]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4k�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
                }
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M�.",`xfrmb`=`xfrmb`+".$_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M�." where `id`=".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['id'], "sync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' order by `id` Desc limit 0,1", "sync" );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_manager`", "notsync" );
                    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'] );
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8�.$_obfuscate_hpKUj5GNh4aPlI2JhpSGlZE�."作者扣款操作失败，操作中断！".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                    {
                        exit( "fail:level8_editrmb_err" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[作者扣款操作失败，操作中断]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4k�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
                }
                $_obfuscate_i4yTlYaRiIeKjY6QjImVi5E� = "作者款项已扣，";
            }
        }
        else if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 8 )
        {
            $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�;
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'].",".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".time( ).",".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['rmb'].",".( 0 - $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M� ).",1,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."','零售提卡')", "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'] );
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8�.$_obfuscate_hpKUj5GNh4aPlI2JhpSGlZE�."记录作者扣款日志失败，操作中断[作者未扣款]！".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                {
                    exit( "fail:level8_writelog_editrmb_err" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[记录作者扣款日志失败，操作中断]]></return_msg></xml>" );
                }
                exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4k�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M�.",`xfrmb`=`xfrmb`+".$_obfuscate_joeIhoiOh5KLlY6GiI_Hh5M�." where `id`=".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4c�['id'], "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' order by `id` Desc limit 0,1", "sync" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_manager`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'] );
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8�.$_obfuscate_hpKUj5GNh4aPlI2JhpSGlZE�."作者扣款操作失败，操作中断！".$_obfuscate_h4aUkomQiI6JlIaSkomSkok� );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
                {
                    exit( "fail:level8_editrmb_err" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[作者扣款操作失败，操作中断]]></return_msg></xml>" );
                }
                exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4k�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
            }
            $_obfuscate_i4yTlYaRiIeKjY6QjImVi5E� = "作者款项已扣，";
        }
        $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_ioeOiIuTiJGQi42VkY_Vios�( "kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'] );
        $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w� = array( "beginid" => $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIg�, "addtime" => time( ), "managerid" => $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'], "ordernum" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "ispay" => 1, "tag" => $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['tags'], "keyattr" => $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['keygroupid'], "k_num" => $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['keycount'] );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = _obfuscate_jo2HlYmTj4eQhpKTkYyIj5E�( $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w�, $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['keygroupid'] );
        $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid'] );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === TRUE )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_order SET `orderstatus`=9 where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'", "sync" );
            if ( 0 < SENDMAILMODE )
            {
                include( KSSINCDIR."sendmail.php" );
                $_obfuscate_jJSLjY_MjImIioeGkZKHipA� = "<html>";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipA� .= "<head>";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipA� .= "<title>确认</title>";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipA� .= "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipA� .= "</head>";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipA� .= "<body>";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipA� .= "这是系统自动发送的邮件，请不要回复<br><br>软件名：".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softname']."<br><br>单号：".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."<br>\r\n<br>卡号:<br>\r\n".join( "<br>", $_obfuscate_iZGLlYiTk42PlJOHh4aJkok� );
                $_obfuscate_jJSLjY_MjImIioeGkZKHipA� .= "<br><br>".base64_decode( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['mailtext'] );
                $_obfuscate_jJSLjY_MjImIioeGkZKHipA� .= "</body>";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipA� .= "</html>";
                $_obfuscate_lJSGjpKSio2Lj5WIio2VhpU� = kk_sendmail( "订单完成", $_obfuscate_jJSLjY_MjImIioeGkZKHipA�, $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['payqq']."@qq.com", QQMAIL, QQMAILPASSWORD, REMOTESENDMAILAPI );
                if ( $_obfuscate_lJSGjpKSio2Lj5WIio2VhpU� )
                {
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "邮件发送成功！" );
                }
                else
                {
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "邮件发送失败！".$_obfuscate_lJSGjpKSio2Lj5WIio2VhpU� );
                }
            }
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "生成卡号成功！" );
        }
        else
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_order set `orderstatus`=7 where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'", "sync" );
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "生成卡号失败！".$_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� );
            if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "jqr" )
            {
                exit( "fail:make_key_err" );
            }
            if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
            {
                exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[生成卡号失败]]></return_msg></xml>" );
            }
            exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
        }
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "完成，返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器success" );
        if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
        {
            exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[OK]]></return_msg></xml>" );
        }
        exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
    }
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "完成，返回给".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."服务器success" );
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
    {
        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[OK]]></return_msg></xml>" );
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
}
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "wx" )
{
    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[OK]]></return_msg></xml>" );
}
exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�] );
?>
