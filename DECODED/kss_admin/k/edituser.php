<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_io_Oi5OHi5CHlYuOk4iMiI8�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
_obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "softid", "gp", "int", 0 );
$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keys", "gp", "sql", "" );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "opsubmit", "gp", "sql", "" );
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
if ( empty( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "软件未找到" );
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
    if ( empty( $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没有该软件的授权", 1 );
    }
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where `username`='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�."' and managerid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'] );
}
else
{
    $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." where `username`='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�."'" );
}
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "用户未找到" );
}
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "保存" )
{
    $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "password", "gp", "sqljs", "" );
    $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZI� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "password2", "gp", "sqljs", "" );
    $_obfuscate_k4_Gk5CUhoaJlZGNj42PiIs� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "bdinfo", "gp", "sqljs", "" );
    $_obfuscate_i4eIipGJiZWSlIeIh4uJj5Q� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keyextattr", "gp", "sqljs", "" );
    $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "cday", "gp", "num", 0 );
    $_obfuscate_ko6Hj46GiZWKiYeQho6Oj5I� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "cday_add", "gp", "num", 0 );
    $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "points", "gp", "int", 0 );
    $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "linknum", "gp", "int", 1 );
    $_obfuscate_io6KiIyHkouMlY6LlImMiIc� = array( );
    $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� += $_obfuscate_ko6Hj46GiZWKiYeQho6Oj5I�;
    $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� = number_format( $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk�, 2, ".", "" );
    if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "USOFT" && ( !( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 ) || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "18" ) ) )
    {
        if ( strlen( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� ) < 5 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "用户密码最少5位" );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['password'] = $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c�;
    }
    $_obfuscate_kpSQh42Tk4mRi4yRiZCGipI� = "<script>";
    if ( !( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 ) || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "13" ) )
    {
        if ( strlen( $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZI� ) < 5 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "安全密码最少5位" );
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['password2'] = $_obfuscate_iY_Hk5KMh4uRkpKGkoeQkZI�;
    }
    if ( !( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 ) || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "15" ) )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['bdinfo'] = $_obfuscate_k4_Gk5CUhoaJlZGNj42PiIs�;
        $_obfuscate_kpSQh42Tk4mRi4yRiZCGipI� .= "$(".YH2."[aj='bdinfo".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�."']".YH2.").val('".htmlspecialchars( $_obfuscate_k4_Gk5CUhoaJlZGNj42PiIs� )."');";
    }
    if ( !( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 ) || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "16" ) )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['keyextattr'] = $_obfuscate_i4eIipGJiZWSlIeIh4uJj5Q�;
        $_obfuscate_kpSQh42Tk4mRi4yRiZCGipI� .= "$(".YH2."[aj='keyextattr".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�."']".YH2.").val('".$_obfuscate_i4eIipGJiZWSlIeIh4uJj5Q�."');";
    }
    if ( $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� < 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "天数不能小于0" );
    }
    if ( PETIME <= $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� * 86400 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "该用户最大天数可设置为".round( ( PETIME - $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] - 86400 ) / 86400, 2 ) );
    }
    if ( $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog� < 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "点数不能小于0" );
    }
    if ( $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo� < 1 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "通道数不能小于1" );
    }
    if ( ( !( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 ) || _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "12" ) ) && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['endtime'] != PETIME )
    {
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] = $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk�;
        $_obfuscate_kpSQh42Tk4mRi4yRiZCGipI� .= "$(".YH2."[aj='cday".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�."']".YH2.").text('".$_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk�."');";
        $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ� = $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['starttime'] + $_obfuscate_iYmHlIeIio2Ni5CRjIeJkYk� * 86400;
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['endtime'] = $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ�;
        $_obfuscate_kImSkYuTk4qHkJWTiZCRio8� = _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_kJSSjJKSkIyJiZCViI2TlJQ�, "y-m-d H:i" );
        $_obfuscate_kpSQh42Tk4mRi4yRiZCGipI� .= "$(".YH2."[aj='endtime".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�."']".YH2.").text('".$_obfuscate_kImSkYuTk4qHkJWTiZCRio8�."');";
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['points'] = $_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�;
        $_obfuscate_kpSQh42Tk4mRi4yRiZCGipI� .= "$(".YH2."[aj='points".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�."']".YH2.").text('".$_obfuscate_iI_TiI_HjoiGj4eIkZSIjog�."');";
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] = $_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo�;
        $_obfuscate_kpSQh42Tk4mRi4yRiZCGipI� .= "$(".YH2."[aj='linknum".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�."']".YH2.").text('".$_obfuscate_kJCVjoaIiYeKiI6UiYuIjYo�."');";
    }
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� = array_diff_assoc( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� );
    if ( empty( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你未做任何修改！" );
    }
    if ( stripos( $_SERVER['SERVER_NAME'], "v9.hphu.com" ) !== FALSE && isset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['linknum'] ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "禁止修改通道数！" );
    }
    if ( isset( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] ) )
    {
        if ( stripos( $_SERVER['SERVER_NAME'], "v9.hphu.com" ) !== FALSE && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "禁止修改天数！" );
        }
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_log_addcday` (`pid`,`managerid`,`softid`,`addtime`,`cday`,`username`,`intro`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�.",".time( ).",".( $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['cday'] - $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'] ).",'".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�."','".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username']."加时前天数：".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday']."')", "notsync" );
        if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "REPAIR TABLE `kss_tb_log_addcday`", "notsync" );
        }
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iJOJipCPk4yQlJOMlIeTjYs�( "kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�, $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "`username`='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�."'", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "保存时出错[执行update语句]".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    $_obfuscate_kpSQh42Tk4mRi4yRiZCGipI� .= "</script>";
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok".$_obfuscate_kpSQh42Tk4mRi4yRiZCGipI� );
}
else if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "setpub" )
{
    if ( stripos( $_SERVER['SERVER_NAME'], "v9.hphu.com" ) !== FALSE && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] != 9 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "服务器禁止使用公用帐号功能！" );
    }
    $_obfuscate_kJWKkYuPko2SkZORiI6UiZM� = round( ( PETIME - time( ) ) / 86400 + 0.5 );
    $_obfuscate_hpWPi5KTh4qKh4qUkYePlJQ� = PETIME - $_obfuscate_kJWKkYuPko2SkZORiI6UiZM� * 86400;
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "update kss_z_user_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." set starttime=".$_obfuscate_hpWPi5KTh4qKh4qUkYePlJQ�.",cday=".$_obfuscate_kJWKkYuPko2SkZORiI6UiZM�.",endtime=".PETIME.",linknum=1,points=0,keyextattr='' where `username`='".$_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�."'", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== TRUE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok" );
}
echo "<script>\r\nfunction closeat(){\r\n$(\".malertboxclosebtn\").click();\r\n}\r\n$(document).ready(function() {\t\r\n\r\n$('#setpubuser').bind(\"click\",function(){\r\nif(!confirm(\"注意：此操作不可逆！\\r\\n是否真的要将此帐号设为公用帐号?\"))return false; \r\nvar cdurl='./admin_key.php?action=edituser&opsubmit=setpub&isajax=1&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "&keys='+encodeURIComponent('";
echo $_obfuscate_j5WKlJOMkIyQjoePlYuSjJE�;
echo "');\r\n$.ajax({\r\nurl: cdurl,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='ok'){\r\nwindow.setTimeout(\"closeat()\", 1);\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\t\r\n});\r\n\r\n$('#saveuser').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif(responseText.substr(0,2)!='ok'){\r\nmalert(responseText);\r\n}else{\r\n$(\"#load__script\").append(responseText.substr(2)); \r\nwindow.setTimeout(\"closeat()\", 1);\r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\r\n});\r\n</script>\r\n<div id='load__script'></div>\r\n<form id=\"saveuser\" action=\"?action=edituser&isajax=1&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "\" method=\"post\">\r\n<table border=0  cellpadding=\"0\" cellspacing=\"0\" width='100%'>\r\n<tr><td valitn=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>用户名</td>\r\n<td align=left><input class=\"longinput\" type=\"hidden\" name=\"keys\" value=\"";
echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username'] );
echo "\" />";
echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['username'] );
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right>用户密码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\"  name=\"password\" value=";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "18" ) )
{
    echo YH2."无权查看和修改".YH2." readOnly";
    echo YH2.htmlspecialchars( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['password'] ).YH2;
}
else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    echo " readOnly";
}
echo " /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>安全密码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\" name=\"password2\" value=";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "13" ) )
{
    echo YH2."无权查看和修改".YH2." readOnly";
    echo YH2.htmlspecialchars( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['password2'] ).YH2;
}
else if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    echo " readOnly";
}
echo " ></td>\r\n</tr>\r\n<tr>\r\n<td align=right>绑定信息</td>\r\n<td align=left><input class=\"longinput\" type=\"text\"  name=\"bdinfo\"";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "15" ) )
{
    echo " disabled";
}
echo " value=\"";
echo htmlspecialchars( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['bdinfo'], ENT_QUOTES, "UTF-8" );
echo "\" /></td>\r\n</tr>\r\n</table></td><td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>天数</td>\r\n<td align=left><input class=\"midinput\" type=\"text\" maxlength=\"6\" name=\"cday\"";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "12" ) )
{
    echo " disabled";
}
echo " value=\"";
echo $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['cday'];
echo "\" />\r\n+\r\n<input style=\"width:76px\" type=\"text\" maxlength=\"6\" name=\"cday_add\"";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "12" ) )
{
    echo " disabled";
}
echo " value=\"0\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>点数</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"6\" name=\"points\"";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "12" ) )
{
    echo " disabled";
}
echo " value=\"";
echo $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['points'];
echo "\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>通道</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"4\" name=\"linknum\"";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "12" ) )
{
    echo " disabled";
}
echo " value=\"";
echo $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['linknum'];
echo "\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>附属性</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"keyextattr\"";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'], "16" ) )
{
    echo " disabled";
}
echo " value=\"";
echo htmlspecialchars( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['keyextattr'], ENT_QUOTES, "UTF-8" );
echo "\" /></td>\r\n</tr>\r\n</table></td></tr>\r\n<tr><td colspan=2 align=center>";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "<input type=button id=setpubuser class=submitbtn value=设为公用 title='点此按钮会将此帐号设为公用帐号'>&nbsp;&nbsp;";
}
echo "<input type=submit name=opsubmit class=submitbtn value=保存>&nbsp;&nbsp;<span style=\"color:#0000ff\">操作成功无提示，窗口会自动关闭</span></td></tr>\r\n</table>\r\n</form>";
?>
