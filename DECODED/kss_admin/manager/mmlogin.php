<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iYqKh42Kj5GLjYeNlIqOlZM�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 8 );
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "只有管理员可以无密登入其它帐号" );
}
ob_clean( );
$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "id", "gp", "int", 0 );
$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� );
if ( empty( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "没找到该用户" );
}
if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level'] < 8 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "目标帐号不是作者帐号，不能登入查看！" );
}
$_obfuscate_kI6PjYmLhpGMk4qGjZSHlIg� = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linecode'];
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set linecode='".$_obfuscate_kI6PjYmLhpGMk4qGjZSHlIg�."' where id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "notsync" );
_obfuscate_jZKVlY6HkYmKkIyRj4qSjIc�( "kss_manager", $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'].",".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'].",".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['password'].",".$_obfuscate_kI6PjYmLhpGMk4qGjZSHlIg� );
if ( isset( $_COOKIE['kss_mmlogin'] ) )
{
    _obfuscate_jZKVlY6HkYmKkIyRj4qSjIc�( "kss_mmlogin", md5( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['username'].$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['password'] ) );
}
echo "<script>alert('login ok!');window.top.location=window.top.location+'1';</script>";
exit( );
?>
