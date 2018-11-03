<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iYqKh42Kj5GLjYeNlIqOlZMÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 8 );
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] != 9 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åªæœ‰ç®¡ç†å‘˜å¯ä»¥æ— å¯†ç™»å…¥å…¶å®ƒå¸å·" );
}
ob_clean( );
$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "id", "gp", "int", 0 );
$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_manager where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ );
if ( empty( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ²¡æ‰¾åˆ°è¯¥ç”¨æˆ·" );
}
if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['level'] < 8 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç›®æ ‡å¸å·ä¸æ˜¯ä½œè€…å¸å·ï¼Œä¸èƒ½ç™»å…¥æŸ¥çœ‹ï¼" );
}
$_obfuscate_kI6PjYmLhpGMk4qGjZSHlIgÿ = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['linecode'];
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set linecode='".$_obfuscate_kI6PjYmLhpGMk4qGjZSHlIgÿ."' where id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ, "notsync" );
_obfuscate_jZKVlY6HkYmKkIyRj4qSjIcÿ( "kss_manager", $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'].",".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['username'].",".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['password'].",".$_obfuscate_kI6PjYmLhpGMk4qGjZSHlIgÿ );
if ( isset( $_COOKIE['kss_mmlogin'] ) )
{
    _obfuscate_jZKVlY6HkYmKkIyRj4qSjIcÿ( "kss_mmlogin", md5( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['username'].$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['password'] ) );
}
echo "<script>alert('login ok!');window.top.location=window.top.location+'1';</script>";
exit( );
?>
