<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iYiLkZSRh5CGipCIj4_Ti4k�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
$_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "orderid", "gp", "sql", 0 );
$_obfuscate_jJGViZKTi5GTjpWGjo6Rkow� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_order where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'" );
if ( empty( $_obfuscate_jJGViZKTi5GTjpWGjo6Rkow� ) )
{
    exit( "err ordernum." );
}
if ( $_obfuscate_jJGViZKTi5GTjpWGjo6Rkow�['managerid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] )
{
    exit( "err userid." );
}
$_obfuscate_iJSMjYqGlZCOh42KiJOTk4o� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_keyset where id=".$_obfuscate_jJGViZKTi5GTjpWGjo6Rkow�['keygroupid'] );
if ( empty( $_obfuscate_iJSMjYqGlZCOh42KiJOTk4o� ) )
{
    exit( "err keygroupid." );
}
$_obfuscate_h4yVkpKPlY_Tk4qVjZKOj4k� = $_obfuscate_jJGViZKTi5GTjpWGjo6Rkow�['pid']( "select * from kss_z_key_".$_obfuscate_jJGViZKTi5GTjpWGjo6Rkow�['pid']."_".$_obfuscate_jJGViZKTi5GTjpWGjo6Rkow�['softid']." where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."'" );
if ( empty( $_obfuscate_h4yVkpKPlY_Tk4qVjZKOj4k� ) )
{
    exit( "err notkey" );
}
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_soft where id=".$_obfuscate_jJGViZKTi5GTjpWGjo6Rkow�['softid'] );
$_obfuscate_jZWKko2SlJWSjYiNjJSHkow� = "key_"._obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 15 ).".txt";
$_obfuscate_jouJi5CRlZWSlIqGio2MkZA� = "../kss_logs/".$_obfuscate_jZWKko2SlJWSjYiNjJSHkow�;
file_put_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZA�, "卡名：".$_obfuscate_iJSMjYqGlZCOh42KiJOTk4o�['keyname']."\r\n" );
file_put_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZA�, "天数：".$_obfuscate_iJSMjYqGlZCOh42KiJOTk4o�['cday']."\r\n", FILE_APPEND );
if ( $_obfuscate_iJSMjYqGlZCOh42KiJOTk4o�['points'] != 0 )
{
    file_put_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZA�, "点数：".$_obfuscate_iJSMjYqGlZCOh42KiJOTk4o�['points']."\r\n", FILE_APPEND );
}
if ( $_obfuscate_iJSMjYqGlZCOh42KiJOTk4o�['linknum'] != 1 )
{
    file_put_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZA�, "通道数：".$_obfuscate_iJSMjYqGlZCOh42KiJOTk4o�['linknum']."\r\n", FILE_APPEND );
}
if ( $_obfuscate_iJSMjYqGlZCOh42KiJOTk4o�['extattr1'] != "" )
{
    file_put_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZA�, "附属性：".$_obfuscate_iJSMjYqGlZCOh42KiJOTk4o�['extattr1']."\r\n", FILE_APPEND );
}
$_obfuscate_ioeRj4yHlYeNiouRkoiQj4w� = "\r\n\r\n\r\n";
foreach ( $_obfuscate_h4yVkpKPlY_Tk4qVjZKOj4k� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    $_obfuscate_ioeRj4yHlYeNiouRkoiQj4w� .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keys'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyspassword']."\r\n";
}
file_put_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZA�, $_obfuscate_ioeRj4yHlYeNiouRkoiQj4w�, FILE_APPEND );
ob_clean( );
$_obfuscate_k4eLh5CTj42Pjo6MkYyIipA� = file_get_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZA� );
$_obfuscate_k46PjYaSioiHiY6OjoaLjpA� = filesize( $_obfuscate_jouJi5CRlZWSlIqGio2MkZA� );
header( "Content-Type: text/plain" );
header( "Expires: ".gmdate( "D, d M Y H:i:s" )." GMT" );
header( "Content-Disposition: attachment; filename=".YH2.$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softname']."_".$_obfuscate_iJSMjYqGlZCOh42KiJOTk4o�['keyname']."_".$_obfuscate_jJGViZKTi5GTjpWGjo6Rkow�['keycount']."张_".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�.".txt".YH2 );
header( "Cache-Control: must-revalidate, post-check=0, pre-check=0" );
header( "Pragma: public" );
header( "Last-Modified: ".gmdate( "D, d M Y H:i:s" )." GMT" );
header( "Content-Length: ".$_obfuscate_k46PjYaSioiHiY6OjoaLjpA� );
echo $_obfuscate_k4eLh5CTj42Pjo6MkYyIipA�;
unlink( $_obfuscate_jouJi5CRlZWSlIqGio2MkZA� );
exit( );
?>
