<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kYmLh4qIipGMjJCSiIuTiJU�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� )
{
    $_obfuscate_k5CTkIyHk5CKkY6Pk5KQjJM� = array( );
    while ( list( $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�, $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� ) = each( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� ) )
    {
        if ( $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� == "sign" || $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� == "" )
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

function _obfuscate_lZWKjpCLjomHkoyKlZWQi5M�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44� )
{
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� = "https://gw.tenpay.com/gateway/pay.htm?";
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['input_charset'] = "UTF-8";
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = _obfuscate_kYmLh4qIipGMjJCSiIuTiJU�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
    ksort( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
    reset( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
    $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4� = "";
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� )
    {
        $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4� .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�."=".$_obfuscate_jJCNh42NjpGQkIaPk4qLkok�."&";
    }
    $_obfuscate_lIyTho_IkJKLjJWHipOUlIw� = strtolower( md5( $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4�."key=".$_obfuscate_i5GGjZGNi42Hk4qIioiKk44� ) );
    $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo� = "";
    reset( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� )
    {
        $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo� .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�."=".urlencode( $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� )."&";
    }
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= $_obfuscate_jpCKkoaHhoiJlZSViIqSiIo�."sign=".$_obfuscate_lIyTho_IkJKLjJWHipOUlIw�;
    return $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc�;
}

function _obfuscate_jY6OlY_RlYqPjZSQh4uPkJQ�( $_obfuscate_i5GGjZGNi42Hk4qIioiKk44� )
{
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = FALSE;
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = array( );
    foreach ( $_GET as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� )
    {
        $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�] = $_obfuscate_jJCNh42NjpGQkIaPk4qLkok�;
    }
    foreach ( $_POST as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� )
    {
        $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�] = $_obfuscate_jJCNh42NjpGQkIaPk4qLkok�;
    }
    $_obfuscate_iY2VhoaTh5SUh4mIiY6Hi5M� = $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['sign'];
    $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = _obfuscate_kYmLh4qIipGMjJCSiIuTiJU�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
    ksort( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
    reset( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
    $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4� = "";
    foreach ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_jJCNh42NjpGQkIaPk4qLkok� )
    {
        $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4� .= $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�."=".$_obfuscate_jJCNh42NjpGQkIaPk4qLkok�."&";
    }
    $_obfuscate_lIyTho_IkJKLjJWHipOUlIw� = md5( $_obfuscate_k46Hj5KSjJGUjYqLiJKIho4�."key=".$_obfuscate_i5GGjZGNi42Hk4qIioiKk44� );
    return strtoupper( $_obfuscate_lIyTho_IkJKLjJWHipOUlIw� ) == strtoupper( $_obfuscate_iY2VhoaTh5SUh4mIiY6Hi5M� );
}

?>
