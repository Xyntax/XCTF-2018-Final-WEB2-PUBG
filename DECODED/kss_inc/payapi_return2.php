<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5I�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_hoyMkoeOj42QioaSioaKi4g�, $_obfuscate_i5OJk5CSj4iKhpOJkJKTjpU� = 1 )
{
    if ( defined( "SAE_MYSQL_USER" ) == TRUE || DEBUGPAYWG == 0 )
    {
        return FALSE;
    }
    $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE� = KSSLOGDIR."saledebug2_log.php";
    if ( $_obfuscate_i5OJk5CSj4iKhpOJkJKTjpU� == 1 )
    {
        @file_put_contents( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE�, @$_obfuscate_hoyMkoeOj42QioaSioaKi4g�."\r\n", @FILE_APPEND );
    }
    else if ( !is_file( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE� ) || 1024 * 256 < filesize( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZE� ) )
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

require( "inc.php" );
$_obfuscate_jo_MipCRkYuSk4mSko2RkIg� = array( "ali" => "支付宝", "ten" => "财付通", "chinabank" => "网银在线", "e138" => "易付通" );
$_obfuscate_iZSViY2KjJSNjoePh4yOjI4� = array( "ali" => "success", "ten" => "success", "chinabank" => "ok", "e138" => "2" );
$_obfuscate_k5OQh4iJjoyPjJSMjpSOlZA� = array( "WAIT_BUYER_PAY", "WAIT_SELLER_SEND_GOODS", "WAIT_BUYER_CONFIRM_GOODS", "TRADE_FINISHED", "TRADE_SUCCESS" );
$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� = "ali";
if ( isset( $_GET['transaction_id'] ) )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� = "ten";
}
if ( isset( $_POST['v_oid'] ) )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� = "chinabank";
}
if ( isset( $_POST['AttachString'] ) && $_POST['AttachString'] == "e138" )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� = "e138";
}
include( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�."pay_function.php" );
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ali" )
{
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "out_trade_no", "pg", "sql", "" );
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJU� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "trade_no", "pg", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "total_fee", "pg", "sql", "" );
    $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "trade_status", "pg", "sql", "" );
    $_obfuscate_j4mLiYmUj4aJiI6IjY6TjI0� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "buyer_email", "pg", "sql", "" );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ten" )
{
    $_obfuscate_hpKNkIaShoaKkY6Lk4qVk5U� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "trade_mode", "gp", "int", 0 );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "out_trade_no", "gp", "sql", "" );
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJU� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "transaction_id", "gp", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "total_fee", "gp", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� / 100;
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
    $_obfuscate_k42NkY2RkoiNjJCKlZSKiIg� = trim( $_POST['SerialNo'] );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = $_obfuscate_k42NkY2RkoiNjJCKlZSKiIg�;
    $_obfuscate_iIuQkYaUioqGlI6IjIuMiI8� = trim( $_POST['Status'] );
    $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpU� = trim( $_POST['Money'] );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpU�;
    $_obfuscate_iImJjYmQjYyOjIuVkIuMjIs� = trim( $_POST['VerifyString'] );
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
if ( !in_array( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE�, $_obfuscate_k5OQh4iJjoyPjJSMjpSOlZA� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."返回的状态码异常！" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_order where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'" );
if ( empty( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "订单未找到！" );
}
if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['orderamount'] != $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "订单金额不符！" );
}
$_obfuscate_jI2JlY_QkoeQj5OLjouLlYo� = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['pid'] );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iIeMkYyJiZKTjI2UjImPi4Y�( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['managerid'] );
$_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5M� = explode( ",", $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alipayset'] );
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ali" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = _obfuscate_i4iVlY2UkouLj5KGlI2Uhoc�( $_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5M�[1], $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alikey'], 1 );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ten" )
{
    if ( $_obfuscate_hpKNkIaShoaKkY6Lk4qVk5U� != 1 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "不支持即时到帐以外的".$_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."接口！" );
    }
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� = _obfuscate_jY6OlY_RlYqPjZSQh4uPkJQ�( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['tenkey'] );
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
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jo_MipCRkYuSk4mSko2RkIg�[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4�]."URL签名不正确！curl:".$_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44� );
}
$_obfuscate_iIeHlZWKipOJlIyVk42UjJM� = 0;
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "WAIT_BUYER_PAY" )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "订单已确定但还未付款，也可能是数据同步问题，如果你支付成功，请等五分钟再查询订单号！" );
}
else if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "WAIT_SELLER_SEND_GOODS" )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "订单已付款，系统在五分钟内会自动发货！" );
}
else if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "WAIT_BUYER_CONFIRM_GOODS" )
{
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4� == "ali" )
    {
        $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo� = explode( ",", $_obfuscate_jI2JlY_QkoeQj5OLjouLlYo�['alipayset'] );
        if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[0] == "create_partner_trade_by_buyer" && $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYo�[2] == $_obfuscate_j4mLiYmUj4aJiI6IjY6TjI0� )
        {
            $_obfuscate_iIeHlZWKipOJlIyVk42UjJM� = 1;
        }
        else
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "订单已发货，<a href=https://lab.alipay.com/consume/queryTradeDetail.htm?tradeNo=".$_obfuscate_kpGPh4mNh46SkZONh4eLlJU�.">请登陆支付宝确认收货</a>！" );
        }
    }
    else
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "订单已发货！" );
    }
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "TRADE_FINISHED" || $_obfuscate_i5CMioaGiI6ShomNiIuKjJE� == "TRADE_SUCCESS" || $_obfuscate_iIeHlZWKipOJlIyVk42UjJM� == 1 )
{
    $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� = "";
    $_obfuscate_lZCJkIySjI6TipKIio6Ojos� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select `keyfix`,`keys`,`keyspassword` from `kss_z_key_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['softid']."` where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."' limit 0,".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['keycount'] );
    if ( empty( $_obfuscate_lZCJkIySjI6TipKIio6Ojos� ) )
    {
        $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� = "订单已完成，但由于未知的原因注册卡号未找到<br>请记下订单号".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."五分钟后偿试重新查询，如还是无卡请联系销售方！";
    }
    else
    {
        $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� = "<textarea style='width:300px;height:100px'>";
        if ( count( $_obfuscate_lZCJkIySjI6TipKIio6Ojos� ) != $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5E�['keycount'] )
        {
            $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� .= "注册卡号数量不符，请记下订单号".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."并联系销售方\r\n\r\n";
        }
        else
        {
            $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� .= "你购买到的注册卡：\r\n";
        }
        foreach ( $_obfuscate_lZCJkIySjI6TipKIio6Ojos� as $_obfuscate_jpSNkYeQi5CGjIeTipSTkYY� )
        {
            $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� .= $_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['keyfix'].$_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['keys'].$_obfuscate_jpSNkYeQi5CGjIeTipSTkYY�['keyspassword']."\r\n";
        }
        $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� .= "</textarea>";
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_lImOiY6UiYaUlZKQh4qKiok� );
}
_obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "未知的订单状态码：".$_obfuscate_i5CMioaGiI6ShomNiIuKjJE� );
?>
