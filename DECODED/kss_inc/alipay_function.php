<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_lZWKi4mVio2IjYyHjZKQiI0�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� )
{
    $_obfuscate_k5CTkIyHk5CKkY6Pk5KQjJM� = array( );
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� )
    {
        if ( $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� == "sign" || $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� == "sign_type" || $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� == "" )
        {
            continue;
        }
        else
        {
            $_obfuscate_k5CTkIyHk5CKkY6Pk5KQjJM�[$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�] = $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�];
        }
    }
    return $_obfuscate_k5CTkIyHk5CKkY6Pk5KQjJM�;
}

function _obfuscate_koiJjZKKlIqLjZORiYaGjog�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44� )
{
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� = "https://mapi.alipay.com/gateway.do?";
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['_input_charset'] = "utf-8";
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = _obfuscate_lZWKi4mVio2IjYyHjZKQiI0�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
    ksort( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
    reset( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
    $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo� = "";
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� )
    {
        $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo� .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�."=".$_obfuscate_jJCNh42NjpGQkIaPk4qLkok�."&";
    }
    $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4� = substr( $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo�, 0, count( $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo� ) - 2 );
    $_obfuscate_lIyTho_IkJKLjJWHipOUlIw� = md5( $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4�.$_obfuscate_i5GGjZGNi42Hk4qIioiKk44� );
    $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo� = "";
    reset( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� )
    {
        $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo� .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�."=".urlencode( $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� )."&";
    }
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo�."sign=".$_obfuscate_lIyTho_IkJKLjJWHipOUlIw�."&sign_type=MD5";
    return $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc�;
}

function _obfuscate_i4iVlY2UkouLj5KGlI2Uhoc�( $_obfuscate_hpWMiIaMiZCSlJSSj42MjpU�, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44�, $_obfuscate_jI6NlI6HiJWPiYeKipCNk4g� = 0 )
{
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = FALSE;
    if ( $_obfuscate_jI6NlI6HiJWPiYeKipCNk4g� == 0 )
    {
        $_obfuscate_lZWPiZCQiomLi4qSiImUhos� = $_POST['notify_id'];
        $_obfuscate_kpWNiY2Kk5KUi4eTi5KKipE� = $_POST;
        $_obfuscate_ho6Hh4mLj4iLi5GMkYuPh5U� = $_POST['sign'];
    }
    else
    {
        $_obfuscate_lZWPiZCQiomLi4qSiImUhos� = $_GET['notify_id'];
        $_obfuscate_kpWNiY2Kk5KUi4eTi5KKipE� = $_GET;
        $_obfuscate_ho6Hh4mLj4iLi5GMkYuPh5U� = $_GET['sign'];
    }
    $_obfuscate_jJWQj4iTioeTjo_Ujo_Jk4k� = "https://mapi.alipay.com/gateway.do?service=notify_verify&partner=".$_obfuscate_hpWMiIaMiZCSlJSSj42MjpU�."&notify_id=".$_obfuscate_lZWPiZCQiomLi4qSiImUhos�;
    if ( _obfuscate_iYqMjJCPipKLjpSRioeUlYc�( $_obfuscate_jJWQj4iTioeTjo_Ujo_Jk4k� ) != "true" )
    {
        return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
    }
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = _obfuscate_lZWKi4mVio2IjYyHjZKQiI0�( $_obfuscate_kpWNiY2Kk5KUi4eTi5KKipE� );
    ksort( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
    reset( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
    $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo� = "";
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� )
    {
        $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo� .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�."=".$_obfuscate_jJCNh42NjpGQkIaPk4qLkok�."&";
    }
    $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4� = substr( $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo�, 0, count( $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo� ) - 2 );
    $_obfuscate_lIyTho_IkJKLjJWHipOUlIw� = md5( $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4�.$_obfuscate_i5GGjZGNi42Hk4qIioiKk44� );
    if ( $_obfuscate_lIyTho_IkJKLjJWHipOUlIw� == $_obfuscate_ho6Hh4mLj4iLi5GMkYuPh5U� )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = TRUE;
    }
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
}

function _obfuscate_iYqMjJCPipKLjpSRioeUlYc�( $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� )
{
    $_obfuscate_h42OlYmRjY2VhoyUho6SkIw� = "true";
    if ( defined( "AliPay_No_Safe" ) && AliPay_No_Safe == 1 )
    {
        return $_obfuscate_h42OlYmRjY2VhoyUho6SkIw�;
    }
    if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_init" ) && _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_exec" ) )
    {
        $_obfuscate_i5WJjY_SkpKUjIiQiJGRjpA� = parse_url( $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� );
        $_obfuscate_jYyIkpCKlIiLlI6NipSUj4w� = curl_init( );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4w�, CURLOPT_URL, $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4w�, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4w�, CURLOPT_SSL_VERIFYHOST, FALSE );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4w�, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT'] );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4w�, CURLOPT_POST, 1 );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4w�, CURLOPT_POSTFIELDS, $_obfuscate_i5WJjY_SkpKUjIiQiJGRjpA�['query'] );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4w�, CURLOPT_HEADER, 0 );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4w�, CURLOPT_RETURNTRANSFER, 1 );
        $_obfuscate_h42OlYmRjY2VhoyUho6SkIw� = curl_exec( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4w� );
        if ( curl_errno( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4w� ) )
        {
            $_obfuscate_h42OlYmRjY2VhoyUho6SkIw� = "true";
            @file_put_contents( @KSSLOGDIR."err_log.php", @"连接alipay服务器效验订单时出错:".@curl_error( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4w� )."\r\n", @FILE_APPEND );
        }
        curl_close( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4w� );
    }
    return $_obfuscate_h42OlYmRjY2VhoyUho6SkIw�;
}

function _obfuscate_koyJjYuOjZOSiZOUkYmKi40�( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, $_obfuscate_koeTkZCTiIiGlYuOioqJiog�, $_obfuscate_jZOVj4mKjI2Oi5WKhpCIho8�, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44� )
{
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = array( "service" => "send_goods_confirm_by_platform", "partner" => $_obfuscate_jZOVj4mKjI2Oi5WKhpCIho8�, "trade_no" => $_obfuscate_koeTkZCTiIiGlYuOioqJiog�, "logistics_name" => "KSPAY", "invoice_no" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48�, "transport_type" => "EXPRESS" );
    return _obfuscate_koiJjZKKlIqLjZORiYaGjog�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44� );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
?>
