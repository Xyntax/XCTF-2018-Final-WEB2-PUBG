<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iJKHiIeSiJGQkoiPjI6Kk5Iÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_hoyMkoeOj42QioaSioaKi4gÿ, $_obfuscate_i5OJk5CSj4iKhpOJkJKTjpUÿ = 1 )
{
    if ( defined( "SAE_MYSQL_USER" ) == TRUE || DEBUGPAYWG == 0 )
    {
        return FALSE;
    }
    $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ = KSSLOGDIR."saledebug2_log.php";
    if ( $_obfuscate_i5OJk5CSj4iKhpOJkJKTjpUÿ == 1 )
    {
        @file_put_contents( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ, @$_obfuscate_hoyMkoeOj42QioaSioaKi4gÿ."\r\n", @FILE_APPEND );
    }
    else if ( !is_file( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ ) || 1024 * 256 < filesize( $_obfuscate_jpKUipCPlZSHlYuJjYaUlZEÿ ) )
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

require( "inc.php" );
$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ = array( "ali" => "æ”¯ä»˜å®", "ten" => "è´¢ä»˜é€š", "chinabank" => "ç½‘é“¶åœ¨çº¿", "e138" => "æ˜“ä»˜é€š" );
$_obfuscate_iZSViY2KjJSNjoePh4yOjI4ÿ = array( "ali" => "success", "ten" => "success", "chinabank" => "ok", "e138" => "2" );
$_obfuscate_k5OQh4iJjoyPjJSMjpSOlZAÿ = array( "WAIT_BUYER_PAY", "WAIT_SELLER_SEND_GOODS", "WAIT_BUYER_CONFIRM_GOODS", "TRADE_FINISHED", "TRADE_SUCCESS" );
$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ = "ali";
if ( isset( $_GET['transaction_id'] ) )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ = "ten";
}
if ( isset( $_POST['v_oid'] ) )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ = "chinabank";
}
if ( isset( $_POST['AttachString'] ) && $_POST['AttachString'] == "e138" )
{
    $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ = "e138";
}
include( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ."pay_function.php" );
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ali" )
{
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "out_trade_no", "pg", "sql", "" );
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "trade_no", "pg", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "total_fee", "pg", "sql", "" );
    $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "trade_status", "pg", "sql", "" );
    $_obfuscate_j4mLiYmUj4aJiI6IjY6TjI0ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "buyer_email", "pg", "sql", "" );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ten" )
{
    $_obfuscate_hpKNkIaShoaKkY6Lk4qVk5Uÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "trade_mode", "gp", "int", 0 );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "out_trade_no", "gp", "sql", "" );
    $_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "transaction_id", "gp", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "total_fee", "gp", "sql", "" );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ = $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ / 100;
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
    $_obfuscate_k42NkY2RkoiNjJCKlZSKiIgÿ = trim( $_POST['SerialNo'] );
    $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = $_obfuscate_k42NkY2RkoiNjJCKlZSKiIgÿ;
    $_obfuscate_iIuQkYaUioqGlI6IjIuMiI8ÿ = trim( $_POST['Status'] );
    $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpUÿ = trim( $_POST['Money'] );
    $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ = $_obfuscate_jpGJk5SSkJOIk4iQiI_OhpUÿ;
    $_obfuscate_iImJjYmQjYyOjIuVkIuMjIsÿ = trim( $_POST['VerifyString'] );
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
if ( !in_array( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ, $_obfuscate_k5OQh4iJjoyPjJSMjpSOlZAÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."è¿”å›çš„çŠ¶æ€ç å¼‚å¸¸ï¼" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_order where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'" );
if ( empty( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è®¢å•æœªæ‰¾åˆ°ï¼" );
}
if ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['orderamount'] != $_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è®¢å•é‡‘é¢ä¸ç¬¦ï¼" );
}
$_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ = _obfuscate_iY6RiYaNio6PiIyIiZWJkJQÿ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['pid'] );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iIeMkYyJiZKTjI2UjImPi4Yÿ( $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['managerid'] );
$_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5Mÿ = explode( ",", $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['alipayset'] );
if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ali" )
{
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = _obfuscate_i4iVlY2UkouLj5KGlI2Uhocÿ( $_obfuscate_kJCGiI6Nk4_RkYuGiZWSi5Mÿ[1], $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['alikey'], 1 );
}
else if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ten" )
{
    if ( $_obfuscate_hpKNkIaShoaKkY6Lk4qVk5Uÿ != 1 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä¸æ”¯æŒå³æ—¶åˆ°å¸ä»¥å¤–çš„".$_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."æ¥å£ï¼" );
    }
    $_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ = _obfuscate_jY6OlY_RlYqPjZSQh4uPkJQÿ( $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['tenkey'] );
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
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_jo_MipCRkYuSk4mSko2RkIgÿ[$_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ]."URLç­¾åä¸æ­£ç¡®ï¼curl:".$_obfuscate_k4mJh5SPkY6Vh4qHjIaJh44ÿ );
}
$_obfuscate_iIeHlZWKipOJlIyVk42UjJMÿ = 0;
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "WAIT_BUYER_PAY" )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è®¢å•å·²ç¡®å®šä½†è¿˜æœªä»˜æ¬¾ï¼Œä¹Ÿå¯èƒ½æ˜¯æ•°æ®åŒæ­¥é—®é¢˜ï¼Œå¦‚æœä½ æ”¯ä»˜æˆåŠŸï¼Œè¯·ç­‰äº”åˆ†é’Ÿå†æŸ¥è¯¢è®¢å•å·ï¼" );
}
else if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "WAIT_SELLER_SEND_GOODS" )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è®¢å•å·²ä»˜æ¬¾ï¼Œç³»ç»Ÿåœ¨äº”åˆ†é’Ÿå†…ä¼šè‡ªåŠ¨å‘è´§ï¼" );
}
else if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "WAIT_BUYER_CONFIRM_GOODS" )
{
    if ( $_obfuscate_kYyPkY_PkJKVh4qGjJGIio4ÿ == "ali" )
    {
        $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYoÿ = explode( ",", $_obfuscate_jI2JlY_QkoeQj5OLjouLlYoÿ['alipayset'] );
        if ( $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYoÿ[0] == "create_partner_trade_by_buyer" && $_obfuscate_jpSRjpKGhpOOiIuHiI_UjYoÿ[2] == $_obfuscate_j4mLiYmUj4aJiI6IjY6TjI0ÿ )
        {
            $_obfuscate_iIeHlZWKipOJlIyVk42UjJMÿ = 1;
        }
        else
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è®¢å•å·²å‘è´§ï¼Œ<a href=https://lab.alipay.com/consume/queryTradeDetail.htm?tradeNo=".$_obfuscate_kpGPh4mNh46SkZONh4eLlJUÿ.">è¯·ç™»é™†æ”¯ä»˜å®ç¡®è®¤æ”¶è´§</a>ï¼" );
        }
    }
    else
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "è®¢å•å·²å‘è´§ï¼" );
    }
}
if ( $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "TRADE_FINISHED" || $_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ == "TRADE_SUCCESS" || $_obfuscate_iIeHlZWKipOJlIyVk42UjJMÿ == 1 )
{
    $_obfuscate_lImOiY6UiYaUlZKQh4qKiokÿ = "";
    $_obfuscate_lZCJkIySjI6TipKIio6Ojosÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select `keyfix`,`keys`,`keyspassword` from `kss_z_key_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['pid']."_".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['softid']."` where `ordernum`='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."' limit 0,".$_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['keycount'] );
    if ( empty( $_obfuscate_lZCJkIySjI6TipKIio6Ojosÿ ) )
    {
        $_obfuscate_lImOiY6UiYaUlZKQh4qKiokÿ = "è®¢å•å·²å®Œæˆï¼Œä½†ç”±äºæœªçŸ¥çš„åŸå› æ³¨å†Œå¡å·æœªæ‰¾åˆ°<br>è¯·è®°ä¸‹è®¢å•å·".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."äº”åˆ†é’Ÿåå¿è¯•é‡æ–°æŸ¥è¯¢ï¼Œå¦‚è¿˜æ˜¯æ— å¡è¯·è”ç³»é”€å”®æ–¹ï¼";
    }
    else
    {
        $_obfuscate_lImOiY6UiYaUlZKQh4qKiokÿ = "<textarea style='width:300px;height:100px'>";
        if ( count( $_obfuscate_lZCJkIySjI6TipKIio6Ojosÿ ) != $_obfuscate_lZGQj4iOj4mTlZGNjZGUj5Eÿ['keycount'] )
        {
            $_obfuscate_lImOiY6UiYaUlZKQh4qKiokÿ .= "æ³¨å†Œå¡å·æ•°é‡ä¸ç¬¦ï¼Œè¯·è®°ä¸‹è®¢å•å·".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."å¹¶è”ç³»é”€å”®æ–¹\r\n\r\n";
        }
        else
        {
            $_obfuscate_lImOiY6UiYaUlZKQh4qKiokÿ .= "ä½ è´­ä¹°åˆ°çš„æ³¨å†Œå¡ï¼š\r\n";
        }
        foreach ( $_obfuscate_lZCJkIySjI6TipKIio6Ojosÿ as $_obfuscate_jpSNkYeQi5CGjIeTipSTkYYÿ )
        {
            $_obfuscate_lImOiY6UiYaUlZKQh4qKiokÿ .= $_obfuscate_jpSNkYeQi5CGjIeTipSTkYYÿ['keyfix'].$_obfuscate_jpSNkYeQi5CGjIeTipSTkYYÿ['keys'].$_obfuscate_jpSNkYeQi5CGjIeTipSTkYYÿ['keyspassword']."\r\n";
        }
        $_obfuscate_lImOiY6UiYaUlZKQh4qKiokÿ .= "</textarea>";
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_lImOiY6UiYaUlZKQh4qKiokÿ );
}
_obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æœªçŸ¥çš„è®¢å•çŠ¶æ€ç ï¼š".$_obfuscate_i5CMioaGiI6ShomNiIuKjJEÿ );
?>
