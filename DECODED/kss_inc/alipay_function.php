<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_lZWKi4mVio2IjYyHjZKQiI0ÿ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ )
{
    $_obfuscate_k5CTkIyHk5CKkY6Pk5KQjJMÿ = array( );
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ )
    {
        if ( $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ == "sign" || $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ == "sign_type" || $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ == "" )
        {
            continue;
        }
        else
        {
            $_obfuscate_k5CTkIyHk5CKkY6Pk5KQjJMÿ[$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ] = $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ[$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ];
        }
    }
    return $_obfuscate_k5CTkIyHk5CKkY6Pk5KQjJMÿ;
}

function _obfuscate_koiJjZKKlIqLjZORiYaGjogÿ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ )
{
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ = "https://mapi.alipay.com/gateway.do?";
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['_input_charset'] = "utf-8";
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ = _obfuscate_lZWKi4mVio2IjYyHjZKQiI0ÿ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ );
    ksort( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ );
    reset( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ );
    $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ = "";
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ )
    {
        $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ."=".$_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ."&";
    }
    $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4ÿ = substr( $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ, 0, count( $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ ) - 2 );
    $_obfuscate_lIyTho_IkJKLjJWHipOUlIwÿ = md5( $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4ÿ.$_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ );
    $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ = "";
    reset( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ );
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ )
    {
        $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ."=".urlencode( $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ )."&";
    }
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ."sign=".$_obfuscate_lIyTho_IkJKLjJWHipOUlIwÿ."&sign_type=MD5";
    return $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ;
}

function _obfuscate_i4iVlY2UkouLj5KGlI2Uhocÿ( $_obfuscate_hpWMiIaMiZCSlJSSj42MjpUÿ, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ, $_obfuscate_jI6NlI6HiJWPiYeKipCNk4gÿ = 0 )
{
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = FALSE;
    if ( $_obfuscate_jI6NlI6HiJWPiYeKipCNk4gÿ == 0 )
    {
        $_obfuscate_lZWPiZCQiomLi4qSiImUhosÿ = $_POST['notify_id'];
        $_obfuscate_kpWNiY2Kk5KUi4eTi5KKipEÿ = $_POST;
        $_obfuscate_ho6Hh4mLj4iLi5GMkYuPh5Uÿ = $_POST['sign'];
    }
    else
    {
        $_obfuscate_lZWPiZCQiomLi4qSiImUhosÿ = $_GET['notify_id'];
        $_obfuscate_kpWNiY2Kk5KUi4eTi5KKipEÿ = $_GET;
        $_obfuscate_ho6Hh4mLj4iLi5GMkYuPh5Uÿ = $_GET['sign'];
    }
    $_obfuscate_jJWQj4iTioeTjo_Ujo_Jk4kÿ = "https://mapi.alipay.com/gateway.do?service=notify_verify&partner=".$_obfuscate_hpWMiIaMiZCSlJSSj42MjpUÿ."&notify_id=".$_obfuscate_lZWPiZCQiomLi4qSiImUhosÿ;
    if ( _obfuscate_iYqMjJCPipKLjpSRioeUlYcÿ( $_obfuscate_jJWQj4iTioeTjo_Ujo_Jk4kÿ ) != "true" )
    {
        return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
    }
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ = _obfuscate_lZWKi4mVio2IjYyHjZKQiI0ÿ( $_obfuscate_kpWNiY2Kk5KUi4eTi5KKipEÿ );
    ksort( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ );
    reset( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ );
    $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ = "";
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ )
    {
        $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ."=".$_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ."&";
    }
    $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4ÿ = substr( $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ, 0, count( $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ ) - 2 );
    $_obfuscate_lIyTho_IkJKLjJWHipOUlIwÿ = md5( $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4ÿ.$_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ );
    if ( $_obfuscate_lIyTho_IkJKLjJWHipOUlIwÿ == $_obfuscate_ho6Hh4mLj4iLi5GMkYuPh5Uÿ )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = TRUE;
    }
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
}

function _obfuscate_iYqMjJCPipKLjpSRioeUlYcÿ( $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ )
{
    $_obfuscate_h42OlYmRjY2VhoyUho6SkIwÿ = "true";
    if ( defined( "AliPay_No_Safe" ) && AliPay_No_Safe == 1 )
    {
        return $_obfuscate_h42OlYmRjY2VhoyUho6SkIwÿ;
    }
    if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "curl_init" ) && _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "curl_exec" ) )
    {
        $_obfuscate_i5WJjY_SkpKUjIiQiJGRjpAÿ = parse_url( $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ );
        $_obfuscate_jYyIkpCKlIiLlI6NipSUj4wÿ = curl_init( );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4wÿ, CURLOPT_URL, $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4wÿ, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4wÿ, CURLOPT_SSL_VERIFYHOST, FALSE );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4wÿ, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT'] );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4wÿ, CURLOPT_POST, 1 );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4wÿ, CURLOPT_POSTFIELDS, $_obfuscate_i5WJjY_SkpKUjIiQiJGRjpAÿ['query'] );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4wÿ, CURLOPT_HEADER, 0 );
        curl_setopt( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4wÿ, CURLOPT_RETURNTRANSFER, 1 );
        $_obfuscate_h42OlYmRjY2VhoyUho6SkIwÿ = curl_exec( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4wÿ );
        if ( curl_errno( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4wÿ ) )
        {
            $_obfuscate_h42OlYmRjY2VhoyUho6SkIwÿ = "true";
            @file_put_contents( @KSSLOGDIR."err_log.php", @"è¿žæŽ¥alipayæœåŠ¡å™¨æ•ˆéªŒè®¢å•æ—¶å‡ºé”™:".@curl_error( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4wÿ )."\r\n", @FILE_APPEND );
        }
        curl_close( $_obfuscate_jYyIkpCKlIiLlI6NipSUj4wÿ );
    }
    return $_obfuscate_h42OlYmRjY2VhoyUho6SkIwÿ;
}

function _obfuscate_koyJjYuOjZOSiZOUkYmKi40ÿ( $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, $_obfuscate_koeTkZCTiIiGlYuOioqJiogÿ, $_obfuscate_jZOVj4mKjI2Oi5WKhpCIho8ÿ, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ )
{
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ = array( "service" => "send_goods_confirm_by_platform", "partner" => $_obfuscate_jZOVj4mKjI2Oi5WKhpCIho8ÿ, "trade_no" => $_obfuscate_koeTkZCTiIiGlYuOioqJiogÿ, "logistics_name" => "KSPAY", "invoice_no" => $_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ, "transport_type" => "EXPRESS" );
    return _obfuscate_koiJjZKKlIqLjZORiYaGjogÿ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
?>
