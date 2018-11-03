<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iYiLkZSRh5CGipCIj4_Ti4kÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
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
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 6 );
$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "orderid", "gp", "sql", 0 );
$_obfuscate_jJGViZKTi5GTjpWGjo6Rkowÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_order where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'" );
if ( empty( $_obfuscate_jJGViZKTi5GTjpWGjo6Rkowÿ ) )
{
    exit( "err ordernum." );
}
if ( $_obfuscate_jJGViZKTi5GTjpWGjo6Rkowÿ['managerid'] != $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'] )
{
    exit( "err userid." );
}
$_obfuscate_iJSMjYqGlZCOh42KiJOTk4oÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_keyset where id=".$_obfuscate_jJGViZKTi5GTjpWGjo6Rkowÿ['keygroupid'] );
if ( empty( $_obfuscate_iJSMjYqGlZCOh42KiJOTk4oÿ ) )
{
    exit( "err keygroupid." );
}
$_obfuscate_h4yVkpKPlY_Tk4qVjZKOj4kÿ = $_obfuscate_jJGViZKTi5GTjpWGjo6Rkowÿ['pid']( "select * from kss_z_key_".$_obfuscate_jJGViZKTi5GTjpWGjo6Rkowÿ['pid']."_".$_obfuscate_jJGViZKTi5GTjpWGjo6Rkowÿ['softid']." where ordernum='".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."'" );
if ( empty( $_obfuscate_h4yVkpKPlY_Tk4qVjZKOj4kÿ ) )
{
    exit( "err notkey" );
}
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_soft where id=".$_obfuscate_jJGViZKTi5GTjpWGjo6Rkowÿ['softid'] );
$_obfuscate_jZWKko2SlJWSjYiNjJSHkowÿ = "key_"._obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 15 ).".txt";
$_obfuscate_jouJi5CRlZWSlIqGio2MkZAÿ = "../kss_logs/".$_obfuscate_jZWKko2SlJWSjYiNjJSHkowÿ;
file_put_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZAÿ, "å¡åï¼š".$_obfuscate_iJSMjYqGlZCOh42KiJOTk4oÿ['keyname']."\r\n" );
file_put_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZAÿ, "å¤©æ•°ï¼š".$_obfuscate_iJSMjYqGlZCOh42KiJOTk4oÿ['cday']."\r\n", FILE_APPEND );
if ( $_obfuscate_iJSMjYqGlZCOh42KiJOTk4oÿ['points'] != 0 )
{
    file_put_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZAÿ, "ç‚¹æ•°ï¼š".$_obfuscate_iJSMjYqGlZCOh42KiJOTk4oÿ['points']."\r\n", FILE_APPEND );
}
if ( $_obfuscate_iJSMjYqGlZCOh42KiJOTk4oÿ['linknum'] != 1 )
{
    file_put_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZAÿ, "é€šé“æ•°ï¼š".$_obfuscate_iJSMjYqGlZCOh42KiJOTk4oÿ['linknum']."\r\n", FILE_APPEND );
}
if ( $_obfuscate_iJSMjYqGlZCOh42KiJOTk4oÿ['extattr1'] != "" )
{
    file_put_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZAÿ, "é™„å±žæ€§ï¼š".$_obfuscate_iJSMjYqGlZCOh42KiJOTk4oÿ['extattr1']."\r\n", FILE_APPEND );
}
$_obfuscate_ioeRj4yHlYeNiouRkoiQj4wÿ = "\r\n\r\n\r\n";
foreach ( $_obfuscate_h4yVkpKPlY_Tk4qVjZKOj4kÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
{
    $_obfuscate_ioeRj4yHlYeNiouRkoiQj4wÿ .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyfix'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keys'].$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyspassword']."\r\n";
}
file_put_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZAÿ, $_obfuscate_ioeRj4yHlYeNiouRkoiQj4wÿ, FILE_APPEND );
ob_clean( );
$_obfuscate_k4eLh5CTj42Pjo6MkYyIipAÿ = file_get_contents( $_obfuscate_jouJi5CRlZWSlIqGio2MkZAÿ );
$_obfuscate_k46PjYaSioiHiY6OjoaLjpAÿ = filesize( $_obfuscate_jouJi5CRlZWSlIqGio2MkZAÿ );
header( "Content-Type: text/plain" );
header( "Expires: ".gmdate( "D, d M Y H:i:s" )." GMT" );
header( "Content-Disposition: attachment; filename=".YH2.$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ['softname']."_".$_obfuscate_iJSMjYqGlZCOh42KiJOTk4oÿ['keyname']."_".$_obfuscate_jJGViZKTi5GTjpWGjo6Rkowÿ['keycount']."å¼ _".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ.".txt".YH2 );
header( "Cache-Control: must-revalidate, post-check=0, pre-check=0" );
header( "Pragma: public" );
header( "Last-Modified: ".gmdate( "D, d M Y H:i:s" )." GMT" );
header( "Content-Length: ".$_obfuscate_k46PjYaSioiHiY6OjoaLjpAÿ );
echo $_obfuscate_k4eLh5CTj42Pjo6MkYyIipAÿ;
unlink( $_obfuscate_jouJi5CRlZWSlIqGio2MkZAÿ );
exit( );
?>
