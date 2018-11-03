<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function error_report_fun( $errno, $errstr, $error_file, $error_line )
{
    $ErrArr = array( "E_ERROR", "E_WARNING", "E_PARSE", "E_NOTICE", "E_CORE_ERROR", "E_CORE_WARNING", "E_COMPILE_ERROR", "E_COMPILE_WARNING", "E_USER_ERROR", "E_USER_WARNING", "E_USER_NOTICE", "E_STRICT", "E_RECOVERABLE_ERROR", "E_ALL" );
    if ( stripos( $errstr, "mysql_" ) !== FALSE )
    {
        return TRUE;
    }
    if ( preg_match( "/unlink|file_put_contents|in safe mode|php_network_getaddresses|function\\.rmdir/i", $errstr ) )
    {
        return TRUE;
    }
    $errinfo = "<b>".$ErrArr[$errno]." : ".$errstr." in ".$error_file." on line ".$error_line."</b>";
    echo $errinfo;
    return TRUE;
}

function mco( $c, $n, $v )
{
    return preg_replace( "/define\\('".$n."','[^']*'\\)/i", "define('".$n."','".$v."')", $c );
}

function mco2( $c, $n, $v )
{
    return preg_replace( "/define\\('".$n."',[^\\)]*\\)/i", "define('".$n."',".$v.")", $c );
}

function kk_rndstr( $kk_len )
{
    $kk_output = "";
    $kk_i = 0;
    for ( ; $kk_i < $kk_len; $kk_i++ )
    {
        $kk_which = mt_rand( 0, 2 );
        if ( $kk_which == 0 )
        {
            $kk_output .= mt_rand( 0, 9 );
        }
        else if ( $kk_which == 1 )
        {
            $kk_output .= chr( mt_rand( 65, 90 ) );
        }
        else
        {
            $kk_output .= chr( mt_rand( 97, 122 ) );
        }
    }
    return $kk_output;
}

function getrow( $sql, $conn )
{
    $rs = mysql_query( $sql, $conn );
    if ( $rs !== FALSE )
    {
        return mysql_fetch_array( $rs, 1 );
    }
    else
    {
        return FALSE;
    }
}

function getrows( $sql, $conn )
{
    $rs = mysql_query( $sql, $conn );
    if ( $rs !== FALSE )
    {
        $arr = array( );
        while ( $row = mysql_fetch_array( $rs, 1 ) )
        {
            $arr[] = $row;
        }
        mysql_free_result( $rs );
        return $arr;
    }
    else
    {
        return FALSE;
    }
}

echo "﻿";
error_reporting( E_ALL );
@ini_set( "display_errors", "On" );
@ini_set( "memory_limit", "64M" );
@ob_start( );
@header( "content-type:text/html;charset=utf-8" );
if ( ini_get( "safe_mode" ) == FALSE )
{
    ini_set( "max_execution_time", 90 );
}
if ( function_exists( "date_default_timezone_set" ) )
{
    date_default_timezone_set( "PRC" );
}
set_error_handler( "error_report_fun" );
echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n<head>\r\n<title>服务端迁移、加装备服、数据还原工具</title>\r\n<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />\r\n";
echo "<s";
echo "cript type=\"text/javascript\" src=\"../kss_inc/js/jquery.1.3.2.pack.js?version=20121124\" charset=\"utf-8\"></script>\r\n";
echo "<s";
echo "tyle>\r\n*{word-wrap:break-word;font-size:12px;font-family: \"Microsoft YaHei\",\"Hiragino Sans GB\",\"Verdana\", \"sans-serif\",\"宋体\";}\r\nbody{background:#F7FBFE}\r\nh1{font-size:18px;font-weight:700;color:#00f}\r\n.emsql{display:none}\r\n#SVRAREA{display:none}\r\n</style>\r\n";
echo "<s";
echo "cript type=\"text/javascript\">\r\n$(document).ready(function() { \r\n\t\t\t$(\"#safepassword\").bind(\"blur\",function (){\r\n\t\t\t\t\r\n\t\t\t}); \r\n\t\t\t$(\"#SVRID_2\").bind(\"click\",function(){\r\n\t\t\t\t$(\"#IS2SVR\").attr(\"checked\",true);\r\n\t\t\t\t$(\"#hav2svr\").hide();\r\n\t\t\t});\r\n\t\t\t$(\"#SVRID_1\").bind(\"click\",function(){\r\n\t\t\t\t$(\"#IS2SVR\").attr(\"checked\",false);\r\n\t\t\t\t$(\"#hav2svr\").show();\r\n\t\t\t});\r\n\t\t\t$(\"#setmysql\").bind(\"click\",funct";
echo "ion(){\r\n\t\t\t\tif($(this).attr(\"checked\")){\r\n\t\t\t\t\t$(\".emsql\").show();\t\r\n\t\t\t\t}else{\r\n\t\t\t\t\t$(\".emsql\").hide();\t\t\t\r\n\t\t\t\t}\r\n\t\t\t});\r\n\t\t\t$(\"#SETSVR\").bind(\"click\",function(){\r\n\t\t\t\tif($(this).attr(\"checked\")){\r\n\t\t\t\t\t$(\"#SVRAREA\").show();\t\r\n\t\t\t\t}else{\r\n\t\t\t\t\t$(\"#SVRAREA\").hide();\t\t\t\r\n\t\t\t\t}\r\n\t\t\t});\t\t\t\r\n})\r\n</script>\r\n</head>\r\n<body align=\"center\">";
require( "../kss_inc/_config.php" );
$retstring = "";
$mmysqlhost = "localhost";
$mmysqluser = "";
$mmysqlpassword = "";
$mmysqldb = "";
$ssafepassword = "";
if ( isset( $_POST['mysqlhost'] ) )
{
    $ssafepassword = $_POST['safepassword'];
    if ( md5( $_POST['safepassword'] ) != MYSQLBAKPASSWORD )
    {
        exit( "安全接口密码错误" );
    }
    $retstring = "";
    $nsvrid = SVRID;
    $nis2svr = IS2SVR;
    if ( isset( $_POST['SETSVR'] ) )
    {
        $nsvrid = $_POST['SVRID'];
        $nis2svr = isset( $_POST['IS2SVR'] ) ? 1 : 0;
    }
    if ( isset( $_POST['setmysql'] ) )
    {
        $mmysqlhost = $_POST['mysqlhost'];
        $mmysqluser = $_POST['mysqluser'];
        $mmysqlpassword = $_POST['mysqlpassword'];
        $mmysqldb = $_POST['mysqldb'];
        $conn = mysql_connect( $mmysqlhost, $mmysqluser, $mmysqlpassword );
        if ( !$conn )
        {
            $retstring = "err,连接数据库服务器失败！".mysql_error( );
        }
        else
        {
            if ( $mmysqluser == "root" )
            {
                $mmysqluser = "kss_".kk_rndstr( 10 );
                $mmysqlpassword = kk_rndstr( 16 );
                if ( trim( $mmysqldb ) == "" )
                {
                    $mmysqldb = $mmysqluser;
                }
                $retstring = "数据库用户名：".$mmysqluser."<br>数据库密码：".$mmysqlpassword."<br>数据库名：".$mmysqldb."<br><br>";
                $creatdatabase = array( "CREATE USER '".$mmysqluser."'@'%' IDENTIFIED BY '".$mmysqlpassword."'", "GRANT USAGE ON * . * TO '".$mmysqluser."'@'%' IDENTIFIED BY '".$mmysqlpassword."' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ", "CREATE DATABASE IF NOT EXISTS `".$mmysqldb."`", "GRANT ALL PRIVILEGES ON `".$mmysqldb."` . * TO '".$mmysqluser."'@'%'" );
                $result = mysql_query( $creatdatabase[0], $conn );
                if ( $result !== TRUE )
                {
                    exit( "err,创建新的数据库用户失败！".mysql_error( ) );
                }
                $result = mysql_query( $creatdatabase[1], $conn );
                if ( $result !== TRUE )
                {
                    exit( "err,设置新的数据库用户属性失败！".mysql_error( ) );
                }
                $result = mysql_query( $creatdatabase[2], $conn );
                if ( $result !== TRUE )
                {
                    exit( "err,添加新的数据库失败！".mysql_error( ) );
                }
                $result = mysql_query( $creatdatabase[3], $conn );
                if ( $result !== TRUE )
                {
                    exit( "err,绑定用户和数据库关系失败！".mysql_error( ) );
                }
            }
            $cd = "";
            if ( !mysql_select_db( $mmysqldb, $conn ) )
            {
                $retstring = "err,没找到数据库".mysql_error( );
            }
            else
            {
                $cd = file_get_contents( "../kss_inc/_config.php" );
                $cd = mco2( $cd, "IS2SVR", $nis2svr );
                $cd = mco2( $cd, "SVRID", $nsvrid );
                if ( $nsvrid == 1 )
                {
                    $cd = mco( $cd, "MYSQL1HostNameOrIp", $mmysqlhost );
                    $cd = mco( $cd, "MYSQL1UserName", $mmysqluser );
                    $cd = mco( $cd, "MYSQL1Password", $mmysqlpassword );
                    $cd = mco( $cd, "MYSQL1DataBaseName", $mmysqldb );
                    $cd = mco( $cd, "MYSQL2HostNameOrIp", "" );
                    $cd = mco( $cd, "MYSQL2UserName", "" );
                    $cd = mco( $cd, "MYSQL2Password", "" );
                    $cd = mco( $cd, "MYSQL2DataBaseName", "" );
                }
                else
                {
                    $cd = mco( $cd, "MYSQL1HostNameOrIp", "" );
                    $cd = mco( $cd, "MYSQL1UserName", "" );
                    $cd = mco( $cd, "MYSQL1Password", "" );
                    $cd = mco( $cd, "MYSQL1DataBaseName", "" );
                    $cd = mco( $cd, "MYSQL2HostNameOrIp", $mmysqlhost );
                    $cd = mco( $cd, "MYSQL2UserName", $mmysqluser );
                    $cd = mco( $cd, "MYSQL2Password", $mmysqlpassword );
                    $cd = mco( $cd, "MYSQL2DataBaseName", $mmysqldb );
                }
                if ( $_POST['restore'] == 1 )
                {
                    mysql_query( "SET NAMES 'utf8'", $conn );
                    $sql = file_get_contents( "restore.sql" );
                    $sql = str_replace( "\r", "", $sql );
                    $ret = array( );
                    $num = 0;
                    foreach ( explode( ";\n", trim( $sql ) ) as $query )
                    {
                        $ret[$num] = "";
                        $queries = explode( "\n", trim( $query ) );
                        foreach ( $queries as $query )
                        {
                            $ret .= $num;
                        }
                        $num++;
                    }
                    unset( $sql );
                    foreach ( $ret as $query )
                    {
                        $query = trim( $query );
                        if ( $query )
                        {
                            $result = mysql_query( $query, $conn );
                            if ( $result !== TRUE )
                            {
                                exit( "<font color=red>[err]->".$query."</font>".mysql_error( ) );
                            }
                        }
                    }
                    if ( @( unlink( "restore.sql" ) !== TRUE ) )
                    {
                        $retstring .= "删除restore.sql失败，请手动删除restore.sql<br>";
                    }
                    $retstring .= "导入数据成功！";
                    $kconfig = getrow( "select * from kss_tb_config where id=1", $conn );
                    $cd = mco2( $cd, "RSACRYPT", $kconfig['s_rsamode'] );
                    $cd = mco( $cd, "RSA_PRVKEY", $kconfig['s_rsaekey'] );
                    $cd = mco( $cd, "RSA_MODULES", $kconfig['s_rsankey'] );
                    $cd = file_put_contents( "../kss_inc/_config.php", $cd );
                    $retstring .= "RSA模式、私钥、模数从数据库中写入到config.php<br>";
                    $retstring .= "配置文件../kss_inc/_config.php更新完成<br>";
                    $advrs = getrows( "select * from kss_tb_soft", $conn );
                    $qtag = "?";
                    if ( !empty( $advrs ) )
                    {
                        foreach ( $advrs as $rsa_cache => $rs )
                        {
                            $rsa_cache .= "?";
                            $rsa_cache .= "php /* 编码 */  define('SOFTRSAMODE',".$rs['rsaenable']."); define('SOFTRSAEKEY','".$rs['rsaekey']."');  define('SOFTRSANKEY','".$rs['rsankey']."'); ?";
                            $rsa_cache .= ">";
                            file_put_contents( "../kss_inc/advapi/rsa".$rs['softcode'].".php", $rsa_cache );
                            $sadvapi = "<".$qtag."php defined('YH2') or exit('Access denied to view this page!');"."\r\n".base64_decode( $rs['advapi'] )."\r\n".$qtag.">";
                            file_put_contents( "../kss_inc/advapi/".$rs['pid'].$rs['id'].".php", $sadvapi );
                        }
                        $retstring .= "advapi文件生成完成<br>";
                    }
                }
            }
        }
    }
    else
    {
        $cd = file_get_contents( "../kss_inc/_config.php" );
        $cd = mco2( $cd, "IS2SVR", $nis2svr );
        $cd = mco2( $cd, "SVRID", $nsvrid );
        $cd = file_put_contents( "../kss_inc/_config.php", $cd );
        $retstring .= "配置文件../kss_inc/_config.php更新完成<br>";
    }
}
echo "<h1>服务端迁移、加装备服、数据还原工具</h1>\r\n\r\n<table border=0  style=\"border:1px solid #aaa\" CELLPADDING=\"5\" CELLSPACING=\"5\">\r\n<form method=\"post\" enctype=\"multipart/form-data\">\r\n<tr><td align=right><label for=\"file\">检查安全接口密码:</label></td><td><input type=\"password\" value=\"";
echo $ssafepassword;
echo "\" name=\"safepassword\" id=\"safepassword\"  style=\"width:300px\"/> </td></tr>\t\r\n<tr><td align=right height=36>主备服重定位<input type='checkbox'  name='SETSVR' value='1' id='SETSVR'></td><td align=left>";
echo "<s";
echo "pan id=\"SVRAREA\">\t\t\t\t\t\r\n<input type=radio value='1' name=\"SVRID\" id=\"SVRID_1\" checked><label for=\"SVRID_1\">主服</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='2' name=\"SVRID\" id=\"SVRID_2\"><label for=\"SVRID_2\">备服</label>   &nbsp;&nbsp;&nbsp;&nbsp;";
echo "<s";
echo "pan id=\"hav2svr\">有两个服务器<input type='checkbox'  name='IS2SVR' value='1' id='IS2SVR'></span></span></td>\r\n</tr>\t\t\t\t\r\n<tr><td align=right height=36>重配置数据库<input type='checkbox' name='setmysql' value='1' id='setmysql'></td><td align=left>&nbsp;</td>\r\n</tr>\r\n<tr class='emsql'><td align=right width=100><label for=\"file\">数据库主机:</label></td><td><input type=\"text\" value=\"";
echo $mmysqlhost;
echo "\" name=\"mysqlhost\" id=\"mysqlhost\"  style=\"width:300px\" /> *一般情况下是localhost</td></tr>\r\n<tr class='emsql'><td align=right><label for=\"file\">数据库用户名:</label></td><td><input type=\"text\" value=\"";
echo $mmysqluser;
echo "\"  name=\"mysqluser\" id=\"mysqluser\"  style=\"width:300px\" /> *请使用kss_inc/_config.php里的数据库用户名</td></tr>\r\n<tr class='emsql'><td align=right><label for=\"file\">数据库用户密码:</label></td><td><input type=\"password\" value=\"";
echo $mmysqlpassword;
echo "\"  name=\"mysqlpassword\" id=\"mysqlpassword\" style=\"width:300px\" />  *请使用kss_inc/_config.php里的数据库密码</td></tr>\r\n<tr class='emsql'><td align=right><label for=\"file\">数据库名:</label></td><td><input type=\"text\" value=\"";
echo $mmysqldb;
echo "\"  name=\"mysqldb\" id=\"mysqldb\" style=\"width:300px\" /> *请使用kss_inc/_config.php里的数据库名 </td></tr>\r\n<tr class='emsql'><td align=right height=36>导入SQL：</td><td align=left>\t\t\t\t\t\r\n<input type=radio value='0' name=\"restore\" id=\"SVRIDxx_1\" checked><label for=\"SVRIDxx_1\">否</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='1' name=\"restore\" id=\"SVRIDxx_2\"><label for=\"SVRIDxx_2\">是</lab";
echo "el> *如果你要导入SQL，请将SQL文件改名为restore.sql，用FTP软件上传到kss_tool文件夹里边。 本页面不提供文件上传功能</td>\r\n</tr>\r\n<tr><td align=right><input type=\"submit\" name=\"submit\" value=\"确定\" />\r\n</form>\r\n</table>\r\n<p style=\"color:#f00;font-size:14px;font-weight:700\">";
echo $retstring;
echo "</p>\r\n</body>\r\n</html>";
?>
