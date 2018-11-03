<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_h46RkpCLhpGPiIiJioiJhogÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "softcode", "gp", "int", 0 );
$_obfuscate_iIaJh5KJi42KkYuIh5SGhosÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "gdata", "gp", "int", 0 );
if ( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ == 0 || strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ ) != 7 )
{
    if ( $_obfuscate_iIaJh5KJi42KkYuIh5SGhosÿ == 1 )
    {
        exit( "kssdata".QQ102.$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ );
    }
    exit( QQ102 );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ = ( integer );
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_soft where `softcode`=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qÿ );
if ( empty( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ ) )
{
    if ( $_obfuscate_iIaJh5KJi42KkYuIh5SGhosÿ == 1 )
    {
        exit( "kssdata".QQ104 );
    }
    exit( QQ104 );
}
if ( $_obfuscate_iIaJh5KJi42KkYuIh5SGhosÿ == 1 )
{
    exit( "kssdata".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['ismustupdate'].":|:".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softversion'].":|:".base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softdownurl'] ).":|:".base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softnotice'] ).":|:".base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['updatelog'] ).":|:" );
}
echo "<html>\r\n<head>\r\n<title>è½¯ä»¶æ›´æ–°æ—¥å¿—</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n<style>\r\nbody{\r\nfont-family: Arial, Verdana, sans-serif;\r\nfont-size: 12px;\r\ncolor: #222;\r\nbackground-color: #fff;\r\n}\r\n</style>\r\n</head>\r\n<body>\r\n";
$_obfuscate_kZOJj4uUh4_IjoaLkY_Vh5Mÿ = base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softdownurl'] );
if ( 10 < strlen( $_obfuscate_kZOJj4uUh4_IjoaLkY_Vh5Mÿ ) )
{
    echo "<div><a href=".$_obfuscate_kZOJj4uUh4_IjoaLkY_Vh5Mÿ." target='_blank' style='color:#f00;font-weight:700'>å¦‚è‹¥è‡ªåŠ¨æ›´æ–°å¤±è´¥ï¼Œç‚¹å‡»è¿™é‡Œæ‰‹åŠ¨ä¸‹è½½</a><br><br></div>";
}
echo "\r\n";
echo base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['updatelog'] );
echo "</body>\r\n</html>";
?>
