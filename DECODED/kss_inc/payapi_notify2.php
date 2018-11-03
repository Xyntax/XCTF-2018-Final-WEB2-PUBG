<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_io_HhpSGjI6IlZKJioqUhpIÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_hoyMkoeOj42QioaSioaKi4gÿ, $_obfuscate_i5OJk5CSj4iKhpOJkJKTjpUÿ = 1 )
{
    if ( defined( "SAE_MYSQL_USER" ) || DEBUGPAYWG == 0 )
    {
        return FALSE;
    }
    $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ = KSSLOGDIR."saledebug1_log.php";
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

if ( isset( $_POST['wxtest'] ) )
{
    $GLOBALS['HTTP_RAW_POST_DATA'] = $_POST['wxtest'];
}
if ( isset( $_obfuscate_k5OUk5WOk5KVlIaLlYmRh5Iÿ ) )
{
    include( "inc.php" );
}
$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ = array( "ali" => "æ”¯ä»˜å®", "ten" => "è´¢ä»˜é€š", "chinabank" => "ç½‘é“¶åœ¨çº¿", "e138" => "æ˜“ä»˜é€š", "jqr" => "æ”¯ä»˜å®æœºå™¨äºº", "wx" => "å¾®ä¿¡æ‰«æ" );
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
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ = trim( $_GET['rmb'] );
    $_obfuscate_iImJjYmQjYyOjIuVkIuMjIsÿ = trim( $_GET['sign'] );
    $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ = "TRADE_SUCCESS";
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ten" )
{
    $_obfuscate_hpKNkIaShoaKkY6Lk4qVk5Uÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "trade_mode", "gp", "int", 0 );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "out_trade_no", "gp", "sql", "" );
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ = "";
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
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨successï¼ŒçŠ¶æ€ç ".$_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ."éæ³•ï¼Œä¸å†é€šçŸ¥" );
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
    {
        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[çŠ¶æ€ç æœªæ‰¾åˆ°]]></return_msg></xml>" );
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select A.*,B.softname,B.mailtext from kss_tb_order as A left join kss_tb_soft as B on A.softid=B.id where A.ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'" );
if ( empty( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ ) )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨successï¼Œè®¢å•æœªæ‰¾åˆ°ï¼Œä¸å†é€šçŸ¥" );
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
if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['orderamount'] != $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ )
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
$_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5Mÿ = explode( ",", $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['alipayset'] );
$_obfuscate_i4yRjJOUiI2QjYiHkpGUi5Mÿ = explode( ",", $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['wxpayset'] );
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = _obfuscate_kpWLkoyMhouPipCQiImKjZAÿ( $_obfuscate_h5WSiIeGkYiNk4iJjYuHkJAÿ, $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['wxpaykey'] );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ali" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = _obfuscate_i4iVlY2UkouLj5KGlI2Uhocÿ( $_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5Mÿ[1], $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['alikey'] );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ten" )
{
    if ( $_obfuscate_hpKNkIaShoaKkY6Lk4qVk5Uÿ != 1 )
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨successï¼Œéå³æ—¶åˆ°å¸äº¤æ˜“" );
        exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
    }
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = _obfuscate_jY6OlY_RlYqPjZSQh4uPkJQÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['tenkey'] );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
{
    if ( strtolower( md5( "ordernum=".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."&rmb=".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ."&key=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['alikey'] ) ) != $_obfuscate_iImJjYmQjYyOjIuVkIuMjIsÿ )
    {
        exit( "fail:URL_signerror" );
    }
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = TRUE;
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "chinabank" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = TRUE;
    if ( $_obfuscate_iImJjYmQjYyOjIuVkIuMjIsÿ != strtoupper( md5( $_obfuscate_k42NkY2RkoiNjJCKlZSKiIgÿ.$_obfuscate_iIuQkYaUioqGlI6IjIuMiI8ÿ.$_obfuscate_jpGJk5SSkJOIk4iQiI_OhpUÿ.$_obfuscate_hpCRlJCSjI6Ki5WSipCLkpQÿ.$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['chinabankkey'] ) ) )
    {
        $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = FALSE;
    }
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "e138" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = TRUE;
    if ( $_obfuscate_iImJjYmQjYyOjIuVkIuMjIsÿ != strtolower( md5( "SerialNo=".$_obfuscate_k42NkY2RkoiNjJCKlZSKiIgÿ."&UserID=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['e138set']."&Money=".$_obfuscate_jpGJk5SSkJOIk4iQiI_OhpUÿ."&Status=".$_obfuscate_iIuQkYaUioqGlI6IjIuMiI8ÿ."&AttachString=e138&MerchantKey=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['e138key'] ) ) )
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
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $GLOBALS['HTTP_RAW_POST_DATA'] );
}
$_obfuscate_iIeHlZWKipOJlIyVk42UjJMÿ = 0;
$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8ÿ = "";
if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['aliorderno'] != $_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ )
{
    $_obfuscate_lYuMkpWKjIaLjIuOlIaUio8ÿ = ",`aliorderno`='".$_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ."'";
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "WAIT_BUYER_PAY" )
{
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "è¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨success" );
    if ( $_obfuscate_lYuMkpWKjIaLjIuOlIaUio8ÿ != "" )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_order SET `aliorderno`='".$_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ."' where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'", "sync" );
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "WAIT_SELLER_SEND_GOODS" )
{
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['orderstatus'] < 1 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_order SET `orderstatus`=1".$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8ÿ."  where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'", "sync" );
    }
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ali" )
    {
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "alipay è‡ªåŠ¨å‘è´§" );
        $_obfuscate_jomQlJOKjYaHko_SkZGKi4wÿ = _obfuscate_koyJjYuOjZOSiZOUkYmKi40ÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ, $_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5Mÿ[1], $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['alikey'] );
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
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['orderstatus'] < 2 )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_order SET `orderstatus`=2".$_obfuscate_lYuMkpWKjIaLjIuOlIaUio8ÿ."  where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'", "sync" );
    }
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ali" )
    {
        $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYoÿ = explode( ",", $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['alipayset'] );
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
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "TRADE_FINISHED" || $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "TRADE_SUCCESS" || $_obfuscate_iIeHlZWKipOJlIyVk42UjJMÿ == 1 || $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "SUCCESS" )
{
    if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['orderstatus'] < 8 )
    {
        $_obfuscate_hpGMlZWJho_Pj5CNlJWUiJIÿ = 0;
        $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5Mÿ = 0;
        $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8ÿ = "";
        $_obfuscate_hpKUj5GNh4aPlI2JhpSGlZEÿ = "";
        $_obfuscate_i4yTlYaRiIeKjY6QjImVi5Eÿ = "";
        $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_keyset where id=".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['keygroupid'] );
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
        {
            $_obfuscate_kYqLhouRj5GLipOGk4iPh4cÿ = $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid']( "select * from kss_tb_agentprice where `softid`=".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid']." and `keygroupid`=".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['keygroupid']." and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id']." and `tmpkey`='no'" );
            $_obfuscate_h5SKjZOQh4yGkoqGkYuUj4Yÿ = $_obfuscate_kYqLhouRj5GLipOGk4iPh4cÿ['keyprice'];
            $_obfuscate_hoiIjJOLhoyKjZONh4eLiZUÿ = $_obfuscate_h5SKjZOQh4yGkoqGkYuUj4Yÿ * $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['keycount'];
            if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['touzhirmb'] + $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['rmb'] < $_obfuscate_hoiIjJOLhoyKjZONh4eLiZUÿ )
            {
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ä»£ç†ä½™é¢ä¸è¶³ï¼Œä¸èƒ½æ‰£æ¬¾ï¼" );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                {
                    exit( "fail:level6_rmb_Not_enough" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[ä»£ç†ä½™é¢ä¸è¶³]]></return_msg></xml>" );
                }
                exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
            }
            $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5Aÿ = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'], $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pmid'] );
            if ( empty( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5Aÿ ) )
            {
                $_obfuscate_hoaGiZOUjIyGk4eMjJCPio0ÿ = $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid']( "select * from kss_tb_agentprice where `softid`=".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid']." and `keygroupid`=".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['keygroupid']." and `managerid`=".$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5Aÿ['id']." and `tmpkey`='no'" );
                if ( empty( $_obfuscate_hoaGiZOUjIyGk4eMjJCPio0ÿ ) )
                {
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ä¸Šçº§æ€»ä»£ç†æ²¡æœ‰è¯¥æ³¨å†Œå¡é”€å”®æƒï¼" );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                    {
                        exit( "fail:level7_key_Not_permission" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[ä¸Šçº§æ€»ä»£ç†æ²¡æœ‰è¯¥æ³¨å†Œå¡é”€å”®æƒ]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
                }
                $_obfuscate_jo_ThoyRjpCLkoqVkYeViJAÿ = $_obfuscate_hoaGiZOUjIyGk4eMjJCPio0ÿ['keyprice'];
                $_obfuscate_hpGMlZWJho_Pj5CNlJWUiJIÿ = $_obfuscate_jo_ThoyRjpCLkoqVkYeViJAÿ * $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['keycount'];
                if ( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5Aÿ['touzhirmb'] + $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5Aÿ['rmb'] < $_obfuscate_hpGMlZWJho_Pj5CNlJWUiJIÿ )
                {
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ä¸Šçº§æ€»ä»£ç†å¸å·ä½™é¢ä¸è¶³ï¼Œä¸èƒ½æ‰£æ¬¾ï¼" );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                    {
                        exit( "fail:level7_rmb_Not_enough" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[ä¸Šçº§ä»£ç†ä½™é¢ä¸è¶³]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
                }
            }
            $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQÿ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] );
            if ( empty( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ ) )
            {
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ä¸Šçº§ä½œè€…å¸å·æœªæ‰¾åˆ°ï¼" );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                {
                    exit( "fail:Not_find_level8" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[ä¸Šçº§ä½œè€…å¸å·æœªæ‰¾åˆ°]]></return_msg></xml>" );
                }
                exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
            }
            if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ['level'] == 8 )
            {
                $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYsÿ = _obfuscate_iImThpCMlYmSjIeMi5GOlIgÿ( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40ÿ['cday'], $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40ÿ['linknum'] );
                $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5Mÿ = $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYsÿ * $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['keycount'];
                if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ['touzhirmb'] + $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ['rmb'] < $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5Mÿ )
                {
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ä¸Šçº§ä½œè€…å¸å·ä½™é¢ä¸è¶³ï¼Œä¸èƒ½æ‰£æ¬¾ï¼" );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                    {
                        exit( "fail:level8_rmb_Not_enough" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[ä¸Šçº§ä½œè€…å¸å·ä½™é¢ä¸è¶³]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
                }
            }
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 8 )
        {
            $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ;
            $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYsÿ = _obfuscate_iImThpCMlYmSjIeMi5GOlIgÿ( $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40ÿ['cday'], $_obfuscate_j4ePi5GUjJSIj4iTiJOVh40ÿ['linknum'] );
            $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5Mÿ = $_obfuscate_kYiSlYiLiZKKk4qHiIaIlYsÿ * $_obfuscate_hpCPjIePioeHkYiIhpSPkokÿ;
            if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ['touzhirmb'] + $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ['rmb'] < $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5Mÿ )
            {
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ä¸Šçº§ä½œè€…å¸å·ä½™é¢ä¸è¶³ï¼Œä¸èƒ½æ‰£æ¬¾ï¼" );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[ä¸Šçº§ä½œè€…å¸å·ä½™é¢ä¸è¶³]]></return_msg></xml>" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                {
                    exit( "fail:level8_rmb_Not_enough" );
                }
                exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
            }
        }
        $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIkÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'] );
        if ( $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIkÿ !== TRUE )
        {
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "æœªèƒ½æˆåŠŸç‹¬å æ“ä½œï¼š".$_obfuscate_k5KJkIyVkZWKk4_NiJSQlIkÿ );
            if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
            {
                exit( "retry:locktable error" );
            }
            if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
            {
                exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[æœªèƒ½æˆåŠŸç‹¬å æ“ä½œ]]></return_msg></xml>" );
            }
            exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4kÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
        }
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'].",".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].",".time( ).",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['rmb'].",".( 0 - $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['agentamount'] ).",1,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."','é›¶å”®æå¡')", "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'] );
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "æ“ä½œä»£ç†é‡‘é¢å˜åŠ¨æ—¥å¿—æ—¶å‡ºé”™[æœªæ‰£æ¬¾]ï¼".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                {
                    exit( "fail:level6_editrmb_err" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[æ“ä½œä»£ç†é‡‘é¢å˜åŠ¨æ—¥å¿—æ—¶å‡ºé”™]]></return_msg></xml>" );
                }
                exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4kÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['agentamount'].",`xfrmb`=`xfrmb`+".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['agentamount']." where `id`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'], "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_log_agentrmb set `intro`='<font color=red>æ‰£æ¬¾å¤±è´¥</font>' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."' order by `id` Desc limit 0,1", "sync" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_manager`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'] );
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ä»£ç†æ‰£æ¬¾æ“ä½œå¤±è´¥ï¼".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                {
                    exit( "fail:level6_editrmb_err" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[ä»£ç†æ‰£æ¬¾æ“ä½œå¤±è´¥]]></return_msg></xml>" );
                }
                exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4kÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
            }
            $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8ÿ = "ä»£ç†æ¬¾é¡¹å·²æ‰£ï¼Œ";
            if ( empty( $_obfuscate_lJOGjpSRkI2NiJSIjpCKj5Aÿ ) )
            {
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES\r\n(".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'].",".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'].",".$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5Aÿ['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].",".time( ).",".$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5Aÿ['rmb'].",".( 0 - $_obfuscate_hpGMlZWJho_Pj5CNlJWUiJIÿ ).",1,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."','é›¶å”®æå¡')", "sync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'] );
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8ÿ."è®°å½•ä¸Šçº§æ€»ä»£æ‰£æ¬¾æ—¥å¿—å¤±è´¥ï¼Œæ“ä½œä¸­æ–­[æ€»ä»£æœªæ‰£æ¬¾]ï¼".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                    {
                        exit( "fail:level7_writelog_editrmb_err" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[è®°å½•ä¸Šçº§æ€»ä»£æ‰£æ¬¾æ—¥å¿—å¤±è´¥ï¼Œæ“ä½œä¸­æ–­]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4kÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
                }
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_hpGMlZWJho_Pj5CNlJWUiJIÿ.",`xfrmb`=`xfrmb`+".$_obfuscate_hpGMlZWJho_Pj5CNlJWUiJIÿ." where `id`=".$_obfuscate_lJOGjpSRkI2NiJSIjpCKj5Aÿ['id'], "sync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_log_agentrmb set `intro`='<font color=red>æ‰£æ¬¾å¤±è´¥</font>' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."' order by `id` Desc limit 0,1", "sync" );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_manager`", "notsync" );
                    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'] );
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8ÿ."ä¸Šçº§æ€»ä»£ç†æ‰£æ¬¾æ“ä½œå¤±è´¥ï¼Œæ“ä½œä¸­æ–­ï¼".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                    {
                        exit( "fail:level7_editrmb_err" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[ä¸Šçº§æ€»ä»£ç†æ‰£æ¬¾æ“ä½œå¤±è´¥ï¼Œæ“ä½œä¸­æ–­]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4kÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
                }
                $_obfuscate_hpKUj5GNh4aPlI2JhpSGlZEÿ = "æ€»ä»£ç†æ¬¾é¡¹å·²æ‰£ï¼Œ";
            }
            if ( $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ['level'] == 8 )
            {
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'].",".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'].",".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].",".time( ).",".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ['rmb'].",".( 0 - $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5Mÿ ).",1,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."','é›¶å”®æå¡')", "sync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'] );
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8ÿ.$_obfuscate_hpKUj5GNh4aPlI2JhpSGlZEÿ."è®°å½•ä¸Šçº§ä½œè€…æ‰£æ¬¾æ—¥å¿—å¤±è´¥ï¼Œæ“ä½œä¸­æ–­[ä½œè€…æœªæ‰£æ¬¾]ï¼".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                    {
                        exit( "fail:level8_writelog_editrmb_err" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[è®°å½•ä¸Šçº§ä½œè€…æ‰£æ¬¾æ—¥å¿—å¤±è´¥ï¼Œæ“ä½œä¸­æ–­]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4kÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
                }
                $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_joeIhoiOh5KLlY6GiI_Hh5Mÿ.",`xfrmb`=`xfrmb`+".$_obfuscate_joeIhoiOh5KLlY6GiI_Hh5Mÿ." where `id`=".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ['id'], "sync" );
                if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
                {
                    $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_log_agentrmb set `intro`='<font color=red>æ‰£æ¬¾å¤±è´¥</font>' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."' order by `id` Desc limit 0,1", "sync" );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_manager`", "notsync" );
                    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'] );
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8ÿ.$_obfuscate_hpKUj5GNh4aPlI2JhpSGlZEÿ."ä½œè€…æ‰£æ¬¾æ“ä½œå¤±è´¥ï¼Œæ“ä½œä¸­æ–­ï¼".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                    {
                        exit( "fail:level8_editrmb_err" );
                    }
                    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                    {
                        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[ä½œè€…æ‰£æ¬¾æ“ä½œå¤±è´¥ï¼Œæ“ä½œä¸­æ–­]]></return_msg></xml>" );
                    }
                    exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4kÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
                }
                $_obfuscate_i4yTlYaRiIeKjY6QjImVi5Eÿ = "ä½œè€…æ¬¾é¡¹å·²æ‰£ï¼Œ";
            }
        }
        else if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 8 )
        {
            $_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ;
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'].",".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'].",".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ['id'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].",".time( ).",".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ['rmb'].",".( 0 - $_obfuscate_joeIhoiOh5KLlY6GiI_Hh5Mÿ ).",1,'".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."','é›¶å”®æå¡')", "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_log_agentrmb`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'] );
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8ÿ.$_obfuscate_hpKUj5GNh4aPlI2JhpSGlZEÿ."è®°å½•ä½œè€…æ‰£æ¬¾æ—¥å¿—å¤±è´¥ï¼Œæ“ä½œä¸­æ–­[ä½œè€…æœªæ‰£æ¬¾]ï¼".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                {
                    exit( "fail:level8_writelog_editrmb_err" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[è®°å½•ä½œè€…æ‰£æ¬¾æ—¥å¿—å¤±è´¥ï¼Œæ“ä½œä¸­æ–­]]></return_msg></xml>" );
                }
                exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4kÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
            }
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set `rmb`=`rmb`-".$_obfuscate_joeIhoiOh5KLlY6GiI_Hh5Mÿ.",`xfrmb`=`xfrmb`+".$_obfuscate_joeIhoiOh5KLlY6GiI_Hh5Mÿ." where `id`=".$_obfuscate_iYiHj4aUkoqOjZOHjZKMh4cÿ['id'], "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_log_agentrmb set `intro`='<font color=red>æ‰£æ¬¾å¤±è´¥</font>' where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."' order by `id` Desc limit 0,1", "sync" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "REPAIR TABLE `kss_tb_manager`", "notsync" );
                $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'] );
                _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_jZGIi4eRiJOGjJCKk42IjI8ÿ.$_obfuscate_hpKUj5GNh4aPlI2JhpSGlZEÿ."ä½œè€…æ‰£æ¬¾æ“ä½œå¤±è´¥ï¼Œæ“ä½œä¸­æ–­ï¼".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ );
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
                {
                    exit( "fail:level8_editrmb_err" );
                }
                if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
                {
                    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[ä½œè€…æ‰£æ¬¾æ“ä½œå¤±è´¥ï¼Œæ“ä½œä¸­æ–­]]></return_msg></xml>" );
                }
                exit( $_obfuscate_k4iNkYmOkpOVjJCHkIqUj4kÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
            }
            $_obfuscate_i4yTlYaRiIeKjY6QjImVi5Eÿ = "ä½œè€…æ¬¾é¡¹å·²æ‰£ï¼Œ";
        }
        $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_ioeOiIuTiJGQi42VkY_Viosÿ( "kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'] );
        $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4wÿ = array( "beginid" => $_obfuscate_jY2OjpWVjpGNi4yNiIeIjIgÿ, "addtime" => time( ), "managerid" => $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'], "ordernum" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ispay" => 1, "tag" => $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['tags'], "keyattr" => $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['keygroupid'], "k_num" => $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['keycount'] );
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = _obfuscate_jo2HlYmTj4eQhpKTkYyIj5Eÿ( $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4wÿ, $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['keygroupid'] );
        $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid'] );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === TRUE )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_order SET `orderstatus`=9 where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'", "sync" );
            if ( 0 < SENDMAILMODE )
            {
                include( KSSINCDIR."sendmail.php" );
                $_obfuscate_jJSLjY_MjImIioeGkZKHipAÿ = "<html>";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipAÿ .= "<head>";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipAÿ .= "<title>ç¡®è®¤</title>";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipAÿ .= "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipAÿ .= "</head>";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipAÿ .= "<body>";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipAÿ .= "è¿™æ˜¯ç³»ç»Ÿè‡ªåŠ¨å‘é€çš„é‚®ä»¶ï¼Œè¯·ä¸è¦å›å¤<br><br>è½¯ä»¶åï¼š".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softname']."<br><br>å•å·ï¼š".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."<br>\r\n<br>å¡å·:<br>\r\n".join( "<br>", $_obfuscate_iZGLlYiTk42PlJOHh4aJkokÿ );
                $_obfuscate_jJSLjY_MjImIioeGkZKHipAÿ .= "<br><br>".base64_decode( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['mailtext'] );
                $_obfuscate_jJSLjY_MjImIioeGkZKHipAÿ .= "</body>";
                $_obfuscate_jJSLjY_MjImIioeGkZKHipAÿ .= "</html>";
                $_obfuscate_lJSGjpKSio2Lj5WIio2VhpUÿ = kk_sendmail( "è®¢å•å®Œæˆ", $_obfuscate_jJSLjY_MjImIioeGkZKHipAÿ, $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['payqq']."@qq.com", QQMAIL, QQMAILPASSWORD, REMOTESENDMAILAPI );
                if ( $_obfuscate_lJSGjpKSio2Lj5WIio2VhpUÿ )
                {
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "é‚®ä»¶å‘é€æˆåŠŸï¼" );
                }
                else
                {
                    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "é‚®ä»¶å‘é€å¤±è´¥ï¼".$_obfuscate_lJSGjpKSio2Lj5WIio2VhpUÿ );
                }
            }
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ç”Ÿæˆå¡å·æˆåŠŸï¼" );
        }
        else
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_order set `orderstatus`=7 where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'", "sync" );
            _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "ç”Ÿæˆå¡å·å¤±è´¥ï¼".$_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ );
            if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "jqr" )
            {
                exit( "fail:make_key_err" );
            }
            if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
            {
                exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[ç”Ÿæˆå¡å·å¤±è´¥]]></return_msg></xml>" );
            }
            exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
        }
        _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "å®Œæˆï¼Œè¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨success" );
        if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
        {
            exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[OK]]></return_msg></xml>" );
        }
        exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
    }
    _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "å®Œæˆï¼Œè¿”å›ç»™".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æœåŠ¡å™¨success" );
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
    {
        exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[OK]]></return_msg></xml>" );
    }
    exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
}
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "wx" )
{
    exit( "<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[OK]]></return_msg></xml>" );
}
exit( $_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ] );
?>
