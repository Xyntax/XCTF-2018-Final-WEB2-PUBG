<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_h46RkpCLhpGPiIiJioiJhog�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "softcode", "gp", "int", 0 );
$_obfuscate_iIaJh5KJi42KkYuIh5SGhos� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "gdata", "gp", "int", 0 );
if ( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� == 0 || strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� ) != 7 )
{
    if ( $_obfuscate_iIaJh5KJi42KkYuIh5SGhos� == 1 )
    {
        exit( "kssdata".QQ102.$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� );
    }
    exit( QQ102 );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� = ( integer );
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_soft where `softcode`=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� );
if ( empty( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� ) )
{
    if ( $_obfuscate_iIaJh5KJi42KkYuIh5SGhos� == 1 )
    {
        exit( "kssdata".QQ104 );
    }
    exit( QQ104 );
}
if ( $_obfuscate_iIaJh5KJi42KkYuIh5SGhos� == 1 )
{
    exit( "kssdata".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['ismustupdate'].":|:".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softversion'].":|:".base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softdownurl'] ).":|:".base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softnotice'] ).":|:".base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['updatelog'] ).":|:" );
}
echo "<html>\r\n<head>\r\n<title>软件更新日志</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n<style>\r\nbody{\r\nfont-family: Arial, Verdana, sans-serif;\r\nfont-size: 12px;\r\ncolor: #222;\r\nbackground-color: #fff;\r\n}\r\n</style>\r\n</head>\r\n<body>\r\n";
$_obfuscate_kZOJj4uUh4_IjoaLkY_Vh5M� = base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softdownurl'] );
if ( 10 < strlen( $_obfuscate_kZOJj4uUh4_IjoaLkY_Vh5M� ) )
{
    echo "<div><a href=".$_obfuscate_kZOJj4uUh4_IjoaLkY_Vh5M�." target='_blank' style='color:#f00;font-weight:700'>如若自动更新失败，点击这里手动下载</a><br><br></div>";
}
echo "\r\n";
echo base64_decode( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['updatelog'] );
echo "</body>\r\n</html>";
?>
