<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kYmLh4qIipGMjJCSiIuTiJUÿ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ )
{
    $_obfuscate_k5CTkIyHk5CKkY6Pk5KQjJMÿ = array( );
    while ( list( $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ, $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ ) = each( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ ) )
    {
        if ( $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ == "sign" || $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ == "" )
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

function _obfuscate_lZWKjpCLjomHkoyKlZWQi5Mÿ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ )
{
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ = "https://gw.tenpay.com/gateway/pay.htm?";
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['input_charset'] = "UTF-8";
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ = _obfuscate_kYmLh4qIipGMjJCSiIuTiJUÿ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ );
    ksort( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ );
    reset( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ );
    $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4ÿ = "";
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ )
    {
        $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4ÿ .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ."=".$_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ."&";
    }
    $_obfuscate_lIyTho_IkJKLjJWHipOUlIwÿ = strtolower( md5( $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4ÿ."key=".$_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ ) );
    $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ = "";
    reset( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ );
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ )
    {
        $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ."=".urlencode( $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ )."&";
    }
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= $_obfuscate_jpCKkoaHhoiJlZSViIqSiIoÿ."sign=".$_obfuscate_lIyTho_IkJKLjJWHipOUlIwÿ;
    return $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ;
}

function _obfuscate_jY6OlY_RlYqPjZSQh4uPkJQÿ( $_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ )
{
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = FALSE;
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ = array( );
    foreach ( $_GET as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ )
    {
        $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ[$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ] = $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ;
    }
    foreach ( $_POST as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ )
    {
        $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ[$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ] = $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ;
    }
    $_obfuscate_iY2VhoaTh5SUh4mIiY6Hi5Mÿ = $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['sign'];
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ = _obfuscate_kYmLh4qIipGMjJCSiIuTiJUÿ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ );
    ksort( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ );
    reset( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ );
    $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4ÿ = "";
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ => $_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ )
    {
        $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4ÿ .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4ÿ."=".$_obfuscate_jJCNh42NjpGQkIaPk4qLkokÿ."&";
    }
    $_obfuscate_lIyTho_IkJKLjJWHipOUlIwÿ = md5( $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4ÿ."key=".$_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ );
    return strtoupper( $_obfuscate_lIyTho_IkJKLjJWHipOUlIwÿ ) == strtoupper( $_obfuscate_iY2VhoaTh5SUh4mIiY6Hi5Mÿ );
}

?>
