<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function get_language_name( )
{
    $languageid = 0;
    if ( isset( $_GET['lgid'] ) )
    {
        $languageid = $_GET['lgid'];
    }
    switch ( $languageid )
    {
        case 0 :
            define( "Client_Language", "GBK" );
            break;
        case 1 :
            define( "Client_Language", "GBK" );
            break;
        case 2 :
            define( "Client_Language", "BIG5" );
            break;
        default :
    }
    do
    {
        define( "Client_Language", "GBK" );
        break;
    } while ( 1 );
}

function extfun_decode( $sdata )
{
    return $sdata;
}

get_language_name( );
define( "STOPDDOSPASSWORD", "" );
if ( STOPDDOSPASSWORD != "" )
{
    $notcc = $_GET['f'];
    if ( $notcc != STOPDDOSPASSWORD )
    {
        exit( 0 );
    }
}
include( "../kss_ip/cc_config.php" );
if ( NOTCCKG == 1 )
{
    require( "../kss_ip/ip.php" );
    $clientip = cc_getip( );
    $mem = memcache_connect( MEMHOST, MEMPORT );
    if ( "Y" != memcache_get( $mem, $clientip ) )
    {
        memcache_close( $mem );
        exit( "Please check the IP,kss_ip/index.php" );
    }
    memcache_close( $mem );
}
?>
