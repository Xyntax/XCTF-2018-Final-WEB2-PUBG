<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jJGPjoaQiJCQj4eJkJGTioY�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_lY6Gk5KMkYmPjIyPhpCOlYc�( $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc�, $_obfuscate_iY_Nj4_Gko6Mh42Ki4aIj4k� = 30 )
{
    $_obfuscate_joiNh4aIhouViZGQho_JiI4� = curl_init( );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_URL, $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_TIMEOUT, $_obfuscate_iY_Nj4_Gko6Mh42Ki4aIj4k� );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_HEADERFUNCTION, "read_header" );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_WRITEFUNCTION, "read_body" );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)" );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_HTTPHEADER, array( "Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache" ) );
    $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� = curl_exec( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
    if ( curl_errno( $_obfuscate_joiNh4aIhouViZGQho_JiI4� ) )
    {
        $_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY� = curl_error( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
        curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
        if ( $_obfuscate_iY_Nj4_Gko6Mh42Ki4aIj4k� == 1 && stripos( $_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY�, "peration timed out after" ) )
        {
            return "sendok";
        }
        $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� = "curlerr:".$_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY�;
        return $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g�;
    }
    curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
    return $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g�;
}

function read_header( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, $_obfuscate_jJWMiJWJjoyIkYmLjY6VipM� )
{
    if ( preg_match( "/Content-Length: ([0-9]+)/i", $_obfuscate_jJWMiJWJjoyIkYmLjY6VipM�, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkoc� ) )
    {
        echo "<script>$('#paksize').html('".intval( $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkoc�[1] )."');</script>";
        echo "<!--  ".str_repeat( " ", 2000 )." -->\r\n";
        ob_flush( );
        flush( );
    }
    return strlen( $_obfuscate_jJWMiJWJjoyIkYmLjY6VipM� );
}

function read_body( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, $_obfuscate_jJWMiJWJjoyIkYmLjY6VipM� )
{
    global $_obfuscate_ko6MhoiQkJKRlYeVio_JjYo�;
    global $_obfuscate_j4eNjZOQlIuKhoqMj4mOjYs�;
    global $_obfuscate_koaSiYqGjIqMiZSLk4uGiZU�;
    if ( $_obfuscate_ko6MhoiQkJKRlYeVio_JjYo� == 0 && substr( $_obfuscate_jJWMiJWJjoyIkYmLjY6VipM�, 0, 2 ) == "<!" )
    {
        $_obfuscate_j4eNjZOQlIuKhoqMj4mOjYs� = 0;
    }
    $_obfuscate_ko6MhoiQkJKRlYeVio_JjYo� += strlen( $_obfuscate_jJWMiJWJjoyIkYmLjY6VipM� );
    file_put_contents( KSSROOTDIR."kss_tool".DIRECTORY_SEPARATOR."_webup.php", $_obfuscate_jJWMiJWJjoyIkYmLjY6VipM�, FILE_APPEND );
    echo "<script>$('#downsize').html('".$_obfuscate_ko6MhoiQkJKRlYeVio_JjYo�."');</script>";
    echo "<!--  ".str_repeat( " ", 2000 )." -->\r\n";
    ob_flush( );
    flush( );
    return strlen( $_obfuscate_jJWMiJWJjoyIkYmLjY6VipM� );
}

require( "../kss_inc/inc.php" );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 9 );
$_obfuscate_kouLj4_JkJWKkJCQkIaMjZE� = "服务端更新";
include( "c_head.php" );
$_obfuscate_koaSiYqGjIqMiZSLk4uGiZU� = "serverupdate";
if ( isset( $_GET['pakname'] ) )
{
    $_obfuscate_koaSiYqGjIqMiZSLk4uGiZU� = $_GET['pakname'];
}
if ( isset( $_GET['cver'] ) )
{
    $_obfuscate_koaSiYqGjIqMiZSLk4uGiZU� = $_GET['cryptver'];
}
if ( !_obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_init" ) || !_obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_exec" ) )
{
    $_obfuscate_koaOh5WRio_ThoaLjI2Sk48� = "<pre>";
    $_obfuscate_koaOh5WRio_ThoaLjI2Sk48� .= "当前服务器不支持curl，无法在线升级，请登陆登陆 http://user.hphu.com 手动升级：<br><br><font color=red>没有帐号或忘记帐号密码，在user.hphu.com首页可自助找回</font></pre>";
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_koaOh5WRio_ThoaLjI2Sk48� );
}
if ( is_file( KSSROOTDIR."kss_tool".DIRECTORY_SEPARATOR."_webup.php" ) )
{
    unlink( KSSROOTDIR."kss_tool".DIRECTORY_SEPARATOR."_webup.php" );
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 100; ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
    {
        if ( is_file( KSSROOTDIR."kss_tool".DIRECTORY_SEPARATOR."_webup.php" ) )
        {
            unlink( KSSROOTDIR."kss_tool".DIRECTORY_SEPARATOR."_webup.php" );
        }
    }
    if ( is_file( KSSROOTDIR."kss_tool".DIRECTORY_SEPARATOR."_webup.php" ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "系统无法自动清理文件，请手动删除文件【".KSSROOTDIR."kss_tool".DIRECTORY_SEPARATOR."_webup.php】再升级！" );
    }
}
echo "<div style=\"width:850px;background:f6f6f6\">\r\n";
$_obfuscate_koaOh5WRio_ThoaLjI2Sk48� = "<pre>";
$_obfuscate_koaOh5WRio_ThoaLjI2Sk48� .= "如若远程自动下载升级包失败，请登陆登陆 http://user.hphu.com 手动升级：<br><br><font color=red>没有帐号或忘记帐号密码，在user.hphu.com首页可自助找回</font></pre>";
echo $_obfuscate_koaOh5WRio_ThoaLjI2Sk48�;
echo "<div>升级包大小：<span id=paksize>未知</span> Byte</div>\r\n<div>已下载大小：<span id=downsize>0</span> Byte</div>\r\n";
$_obfuscate_ko6MhoiQkJKRlYeVio_JjYo� = 0;
$_obfuscate_j4eNjZOQlIuKhoqMj4mOjYs� = 1;
file_put_contents( KSSROOTDIR."kss_tool".DIRECTORY_SEPARATOR."_webup.php", "" );
$_obfuscate_koiKkIiPjI6UkYeRlIqNhoc� = _obfuscate_lY6Gk5KMkYmPjIyPhpCOlYc�( "http://api.hphu.com/import/".$_obfuscate_koaSiYqGjIqMiZSLk4uGiZU�.".php?phpver=".PHP_VERSION."&webid=".WEBID."&rid=".time( ), 300 );
if ( $_obfuscate_j4eNjZOQlIuKhoqMj4mOjYs� == 0 )
{
    @unlink( @KSSROOTDIR."kss_tool".@DIRECTORY_SEPARATOR."_webup.php" );
    exit( "<p>升级包数据异常，请偿试手动更新。</p>" );
}
echo "升级包下载完成，正在执行升级包升级服务端！<br></div>\r\n<iframe frameborder=0 framespacing=0 scrolling=\"no\" src=\"../kss_tool/_webup.php\" style=\"width:850px;height:400px;\"></iframe>\r\n</body></html>\r\n";
exit( );
?>
