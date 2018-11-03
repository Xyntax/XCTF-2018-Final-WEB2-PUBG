<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iImJh5KOi5OGk5KLlJCIjYgÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

require( "inc.php" );
if ( isset( $_POST['remark1'] ) && $_POST['remark1'] == 0 )
{
    $_obfuscate_k5OUk5WOk5KVlIaLlYmRh5Iÿ = 1;
    include( "payapi_notify2.php" );
    exit( );
}
function _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_hoyMkoeOj42QioaSioaKi4gÿ, $_obfuscate_i5OJk5CSj4iKhpOJkJKTjpUÿ = 1 )
{
    if ( defined( "SAE_MYSQL_USER" ) || DEBUGPAYWG == 0 )
    {
        return FALSE;
    }
    $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ = KSSLOGDIR."agentczdebug1_log.php";
    if ( $_obfuscate_i5OJk5CSj4iKhpOJkJKTjpUÿ == 1 )
    {
        @file_put_contents( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ, @$_obfuscate_hoyMkoeOj42QioaSioaKi4gÿ."\r\n", @FILE_APPEND );
    }
    else if ( !is_file( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ ) || 262144 < filesize( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ ) )
    {
        $_obfuscate_ipWMho2NlI2MiI_MioeTlZIÿ = "?";
        $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZIÿ = "<".$_obfuscate_ipWMho2NlI2MiI_MioeTlZIÿ."php exit('Access denied to view this page!');".$_obfuscate_ipWMho2NlI2MiI_MioeTlZIÿ.">\r\n";
        @file_put_contents( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ, @$_obfuscate_ipCIiZCRiYmKhpOSi4eSjZIÿ."\r\n\r\n\r\næ—¶é—´:".@date( "Y-m-d H:i:s" )."\r\nè®¢å•å·:".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."\r\nçŠ¶æ€:".$_obfuscate_hoyMkoeOj42QioaSioaKi4gÿ."\r\n" );
    }
    else
    {
        @file_put_contents( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ, @"\r\n\r\n\r\næ—¶é—´:".@date( "Y-m-d H:i:s" )."\r\nè®¢å•å·:".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."\r\nçŠ¶æ€:".$_obfuscate_hoyMkoeOj42QioaSioaKi4gÿ."\r\n", @FILE_APPEND );
    }
}
$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ = array( "ali" => "æ”¯ä»˜å®", "ten" => "è´¢ä»˜é€š", "chinabank" => "ç½‘é“¶åœ¨çº¿", "e138" => "æ˜“ä»˜é€š", "jqr" => "æ”¯ä»˜å®æœºå™¨äºº", "å¾®ä¿¡æ‰«ç " );
$_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ = array( "ali" => "success", "ten" => "success", "chinabank" => "ok", "e138" => "success", "jqr" => "success", "wx" => "success" );
$_obfuscate_k4iNkYmOkpOVjJCHkIqUj4kÿ = array( "ali" => "fail", "ten" => "fail", "chinabank" => "error", "e138" => "fail", "jqr" => "fail", "wx" => "fail" );
$_obfuscate_k5OQh4iJjoyPjJSMjpSOlZAÿ = array( "WAIT_BUYER_PAY", "WAIT_SELLER_SEND_GOODS", "WAIT_BUYER_CONFIRM_GOODS", "TRADE_FINISHED", "TRADE_SUCCESS", "SUCCESS", "FAIL" );
$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ = "ali";
if ( isset( $_GET['alipayjqr'] ) )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ = "jqr";
}
if ( isset( $_GET['transaction_id'] ) )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ = "ten";
}
if ( isset( $_POST['v_oid'] ) )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ = "chinabank";
}
if ( isset( $_GET['AttachString'] ) && $_GET['AttachString'] == "e138" )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ = "e138";
}
if ( isset( $GLOBALS['HTTP_RAW_POST_DATA'] ) && substr( $GLOBALS['HTTP_RAW_POST_DATA'], 0, 5 ) == "<xml>" )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ = "wx";
}
if ( isset( $_GET['alipayjqr'] ) )
{
    include( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ."pay_function.php" );
}
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
{
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ = "";
    $_obfuscate_h5WSiIeGkYiNk4iJjYuHkJAÿ = $GLOBALS['HTTP_RAW_POST_DATA'];
    $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkokÿ = _obfuscate_komQkZGUhomRk4eLipOSkJMÿ( $_obfuscate_h5WSiIeGkYiNk4iJjYuHkJAÿ );
    if ( !array_key_exists( "return_code", $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkokÿ ) && !array_key_exists( "result_code", $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkokÿ ) )
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( "æœªçŸ¥", "GLOBALS:".$_obfuscate_h5WSiIeGkYiNk4iJjYuHkJAÿ, 0 );
        exit( "<xml><return_code><![CDATA[FAIL]]></return_code><return_msg><![CDATA[å‘é€æ¥çš„æ•°æ®å¼‚å¸¸]]></return_msg></xml>" );
    }
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkokÿ['out_trade_no'], "val", "sql", "" );
    $_obfuscate_lZSLkIeSlIySkY6SlIuJio0ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkokÿ['transaction_id'], "val", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkokÿ['total_fee'], "val", "int", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ /= 100;
    $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( $_obfuscate_ho6Nh5WMj4mLh5WTh4aTkokÿ['result_code'], "val", "sql", "" );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ali" )
{
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "out_trade_no", "pg", "sql", "" );
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "trade_no", "pg", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "total_fee", "pg", "sql", "" );
    $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "trade_status", "pg", "sql", "" );
    $_obfuscate_j4mLiYmUj4aJiI6IjY6TjI0ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "buyer_email", "pg", "sql", "" );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
{
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ = "";
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = trim( $_GET['ordernum'] );
    $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpUÿ = trim( $_GET['rmb'] );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ = $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpUÿ;
    $_obfuscate_iImJjYmQjYyOjIuVkIuMjIsÿ = trim( $_GET['sign'] );
    $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ = "TRADE_SUCCESS";
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ten" )
{
    $_obfuscate_hpKNkIaShoaKkY6Lk4qVk5Uÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "trade_mode", "gp", "int", 0 );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "out_trade_no", "gp", "sql", "" );
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "transaction_id", "gp", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "total_fee", "gp", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ /= 100;
    $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "trade_state", "gp", "sql", "" );
    if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "0" )
    {
        $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ = "TRADE_FINISHED";
    }
    else
    {
        $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ = "WAIT_BUYER_PAY";
    }
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "chinabank" )
{
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ = "";
    $_obfuscate_k42NkY2RkoiNjJCKlZSKiIgÿ = trim( $_POST['v_oid'] );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = $_obfuscate_k42NkY2RkoiNjJCKlZSKiIgÿ;
    $_obfuscate_iIuQkYaUioqGlI6IjIuMiI8ÿ = trim( $_POST['v_pstatus'] );
    $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpUÿ = trim( $_POST['v_amount'] );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ = $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpUÿ;
    $_obfuscate_hpCRlJCSjI6Ki5WSipCLkpQÿ = trim( $_POST['v_moneytype'] );
    $_obfuscate_lJSPjJCOi5CIiJSSkZWNh4Yÿ = trim( $_POST['remark1'] );
    $_obfuscate_iImJjYmQjYyOjIuVkIuMjIsÿ = trim( $_POST['v_md5str'] );
    if ( $_obfuscate_iIuQkYaUioqGlI6IjIuMiI8ÿ == "20" )
    {
        $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ = "TRADE_FINISHED";
    }
    else
    {
        $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ = "WAIT_BUYER_PAY";
    }
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "e138" )
{
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ = "";
    $_obfuscate_k42NkY2RkoiNjJCKlZSKiIgÿ = trim( $_GET['SerialNo'] );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = $_obfuscate_k42NkY2RkoiNjJCKlZSKiIgÿ;
    $_obfuscate_iIuQkYaUioqGlI6IjIuMiI8ÿ = trim( $_GET['Status'] );
    $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpUÿ = trim( $_GET['Money'] );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ = $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpUÿ;
    $_obfuscate_iImJjYmQjYyOjIuVkIuMjIsÿ = trim( $_GET['VerifyString'] );
    if ( $_obfuscate_iIuQkYaUioqGlI6IjIuMiI8ÿ == "2" )
    {
        $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ = "TRADE_FINISHED";
    }
    else
    {
        $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ = "WAIT_BUYER_PAY";
    }
}
else
{
    exit( "errwg" );
}
_obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ, 0 );
$_obfuscate_k42GiI_RiIqKjIaUio6IiIwÿ = "POSTDATA:";
foreach ( $_POST as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
{
    $_obfuscate_k42GiI_RiIqKjIaUio6IiIwÿ .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ."=".urlencode( $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )."&";
}
_obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_k42GiI_RiIqKjIaUio6IiIwÿ );
$_obfuscate_lYuTjYmGkJWKk5WOjoeGlYwÿ = "GETDATA:";
foreach ( $_GET as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
{
    $_obfuscate_lYuTjYmGkJWKk5WOjoeGlYwÿ .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ."=".urlencode( $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )."&";
}
_obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_lYuTjYmGkJWKk5WOjoeGlYwÿ );
if ( in_array( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ, $_obfuscate_k5OQh4iJjoyPjJSMjpSOlZAÿ ) )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨failï¼ŒçŠ¶æ€ç éæ³•" );
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
    {
        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[çŠ¶æ€ç æœªæ‰¾åˆ°]]></return_msg></xml>" );
    }
    exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4kÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_log_agentrmb where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'" );
if ( empty( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ ) )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨successï¼Œè®¢å•æœªæ‰¾åˆ°" );
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
    {
        exit( "fail:Order_not_find" );
    }
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
    {
        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[è®¢å•æœªæ‰¾åˆ°]]></return_msg></xml>" );
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
}
_obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è®¢å•æ‰¾åˆ°" );
if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['changermb'] != $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨successï¼Œè®¢å•é‡‘é¢ä¸ç¬¦ï¼Œä¸å†é€šçŸ¥" );
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
    {
        exit( "fail:Order_rmb" );
    }
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
    {
        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[è®¢å•é‡‘é¢ä¸ç¬¦]]></return_msg></xml>" );
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
}
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iIeMkYyJiZKTjI2UjImPi4Yÿ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['managerid'] );
$_obfuscate_lIiPjo6LjoqUjYiUjJKOhpAÿ = 1;
$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5Aÿ = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQÿ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['pid'], $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pmid'] );
if ( !empty( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5Aÿ ) && $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5Aÿ['islock'] == 0 )
{
    $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpAÿ = 0;
}
$_obfuscate_jYiHj4qPj4aUlIiUjIyJipEÿ = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQÿ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['pid'] );
if ( $_obfuscate_lIiPjo6LjoqUjYiUjJKOhpAÿ == 1 )
{
    $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ = $_obfuscate_jYiHj4qPj4aUlIiUjIyJipEÿ;
}
else if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 7 )
{
    $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ = $_obfuscate_jYiHj4qPj4aUlIiUjIyJipEÿ;
}
else
{
    $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ = $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5Aÿ;
}
$_obfuscate_i42MjZCUi5CJjI_NhoaRj4Yÿ = 0;
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 8 && 1000 < LICTYPE )
{
    $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ = _obfuscate_iIeMkYyJiZKTjI2UjImPi4Yÿ( 1 );
    $_obfuscate_i42MjZCUi5CJjI_NhoaRj4Yÿ = 1;
}
$_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5Mÿ = explode( ",", $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['alipayset'] );
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = _obfuscate_kpWLkoyMhouPipCQiImKjZAÿ( $_obfuscate_h5WSiIeGkYiNk4iJjYuHkJAÿ, $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['wxpaykey'] );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ali" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = _obfuscate_i4iVlY2UkouLj5KGlI2Uhocÿ( $_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5Mÿ[1], $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['alikey'] );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ten" )
{
    if ( $_obfuscate_hpKNkIaShoaKkY6Lk4qVk5Uÿ != 1 )
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨successï¼Œéå³æ—¶åˆ°å¸äº¤æ˜“" );
        exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
    }
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = _obfuscate_jY6OlY_RlYqPjZSQh4uPkJQÿ( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['tenkey'] );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
{
    if ( strtolower( md5( "ordernum=".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."&rmb=".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ."&key=".$_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['alikey'] ) ) != $_obfuscate_iImJjYmQjYyOjIuVkIuMjIsÿ )
    {
        exit( "fail:URL_signerror" );
    }
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = TRUE;
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "chinabank" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = TRUE;
    if ( $_obfuscate_iImJjYmQjYyOjIuVkIuMjIsÿ != strtoupper( md5( $_obfuscate_k42NkY2RkoiNjJCKlZSKiIgÿ.$_obfuscate_iIuQkYaUioqGlI6IjIuMiI8ÿ.$_obfuscate_jpGJk5SSkJOIk4iQiI_OhpUÿ.$_obfuscate_hpCRlJCSjI6Ki5WSipCLkpQÿ.$_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['chinabankkey'] ) ) )
    {
        $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = FALSE;
    }
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "e138" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = TRUE;
    if ( $_obfuscate_iImJjYmQjYyOjIuVkIuMjIsÿ != strtolower( md5( "SerialNo=".$_obfuscate_k42NkY2RkoiNjJCKlZSKiIgÿ."&UserID=".$_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['e138set']."&Money=".$_obfuscate_jpGJk5SSkJOIk4iQiI_OhpUÿ."&Status=".$_obfuscate_iIuQkYaUioqGlI6IjIuMiI8ÿ."&AttachString=e138&MerchantKey=".$_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['e138key'] ) ) )
    {
        $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = FALSE;
    }
}
if ( $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ !== TRUE )
{
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "æ ¡éªŒå¾®ä¿¡å‘é€æ¥çš„XMLæ•°æ®:".$_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ.",è¿”å›ç»™å¾®ä¿¡æœåŠ¡å™¨".$_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."ï¼Œç­¾åéæ³•" );
        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[ç­¾åæ²¡é€šè¿‡]]></return_msg></xml>" );
    }
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "curl:".$_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ );
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨".$_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."ï¼Œç­¾åéæ³•" );
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
}
_obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ç­¾åæ•ˆéªŒé€šè¿‡" );
$_obfuscate_iIeHlZWKipOJlIyVk42UjJMÿ = 0;
$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8ÿ = "";
if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['intro'] != $_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ )
{
    $_obfuscate_lYuMkpWKjIaLjIuOlIaUio8ÿ = ",`intro`='".$_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ."'";
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "WAIT_BUYER_PAY" )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨success" );
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['optype'] < 21 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_log_agentrmb SET `optype`=21,`oldrmb`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['rmb'].$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8ÿ." where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'", "sync" );
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "WAIT_SELLER_SEND_GOODS" )
{
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['optype'] < 22 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_log_agentrmb SET `optype`=22,`oldrmb`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['rmb'].$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8ÿ."  where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'", "sync" );
    }
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ali" )
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "alipay è‡ªåŠ¨å‘è´§" );
        $_obfuscate_jomQlJOKjYaHko_SkZGKi4wÿ = _obfuscate_koyJjYuOjZOSiZOUkYmKi40ÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ, $_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5Mÿ[1], $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['alikey'] );
        if ( function_exists( "curl_init" ) )
        {
            $_obfuscate_iYuIkIeRlJCQiIqQh5WGjIgÿ = _obfuscate_iYqMjJCPipKLjpSRioeUlYcÿ( $_obfuscate_jomQlJOKjYaHko_SkZGKi4wÿ );
            $_obfuscate_iJOJjo_KkY2PkYmSkY2JjJUÿ = stripos( $_obfuscate_iYuIkIeRlJCQiIqQh5WGjIgÿ, "<is_success>T</is_success>" );
            if ( $_obfuscate_iJOJjo_KkY2PkYmSkY2JjJUÿ !== FALSE && $_obfuscate_iJOJjo_KkY2PkYmSkY2JjJUÿ < 70 )
            {
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è‡ªåŠ¨å‘è´§æˆåŠŸï¼" );
            }
            else
            {
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è‡ªåŠ¨å‘è´§å¤±è´¥ï¼" );
            }
        }
        else
        {
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ä¸æ”¯æŒcurlï¼Œæœªèƒ½è‡ªåŠ¨å‘è´§ï¼" );
        }
    }
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨success" );
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "WAIT_BUYER_CONFIRM_GOODS" )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨success" );
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['optype'] < 23 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_log_agentrmb SET `optype`=23,`oldrmb`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['rmb'].$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8ÿ."  where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'", "sync" );
    }
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ali" )
    {
        $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYoÿ = explode( ",", $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['alipayset'] );
        if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYoÿ[0] == "create_partner_trade_by_buyer" && $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYoÿ[2] == $_obfuscate_j4mLiYmUj4aJiI6IjY6TjI0ÿ )
        {
            $_obfuscate_iIeHlZWKipOJlIyVk42UjJMÿ = 1;
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ä½¿ç”¨ç‰¹æ®Šå¸å·çš„æå¡äº¤æ˜“ï¼Œå‘è´§åå°±ç»™ä»£ç†å……å€¼ï¼" );
        }
        else
        {
            exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
        }
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "TRADE_FINISHED" || $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "TRADE_SUCCESS" || $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "SUCCESS" || $_obfuscate_iIeHlZWKipOJlIyVk42UjJMÿ == 1 )
{
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['optype'] != 24 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_log_agentrmb SET `optype`=24,`oldrmb`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['rmb'].$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8ÿ." where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'", "sync" );
        $_obfuscate_j4ePkZOGiZOLjpSLio_PjY0ÿ = "";
        if ( $_obfuscate_i42MjZCUi5CJjI_NhoaRj4Yÿ == 1 )
        {
            if ( 100 <= $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ )
            {
                $_obfuscate_j4ePkZOGiZOLjpSLio_PjY0ÿ = ",`endtime`='".date( "Y-m-d H:i:s", strtotime( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['endtime'] ) + 2592000 )."'";
            }
            if ( $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ == 50 )
            {
                $_obfuscate_j4ePkZOGiZOLjpSLio_PjY0ÿ = ",`endtime`='".date( "Y-m-d H:i:s", strtotime( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['endtime'] ) + 1296000 )."'";
            }
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set `rmb`=`rmb`+".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ." ".$_obfuscate_j4ePkZOGiZOLjpSLio_PjY0ÿ." where `id`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'], "sync" );
        $_obfuscate_i42MjZCUi5CJjI_NhoaRj4Yÿ = 1;
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
        {
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ä»£ç†å……å€¼åŠ æ¬¾å¤±è´¥ï¼".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
        }
        else
        {
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ä»£ç†å……å€¼åŠ æ¬¾æˆåŠŸï¼" );
        }
    }
    else
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "äºŒæ¬¡é€šçŸ¥å·²æˆåŠŸå¤„ç†ï¼" );
    }
}
exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
?>
