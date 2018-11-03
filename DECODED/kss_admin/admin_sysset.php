<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iY2JkpSTioeNlY_PlZKVkIo�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_lYiVlYaSh4iPk5GNkJWUlYo�( $_obfuscate_koiKkIiPjI6UkYeRlIqNhoc�, $_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�, $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
{
    if ( preg_match( "/s\\s*c\\s*r\\s*i\\s*p\\s*t|<.*?>|eval|0x[0-9a-f]{6}|\\/\\*|'/i", $_obfuscate_io6UjZWThpOSjYeOj46Qkow� ) )
    {
        $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� = preg_replace( "/(s\\s*c\\s*r\\s*i\\s*p\\s*t|<.*?>|eval|0x[0-9a-f]{6}|\\/\\*|')/i", "$1", $_obfuscate_io6UjZWThpOSjYeOj46Qkow� );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�."信息部份有禁止使用的字符串<font color=red>".htmlentities( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� )."</font>" );
    }
    return preg_replace( "/define\\('".$_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�."','[^']*'\\)/i", "define('".$_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�."','".$_obfuscate_io6UjZWThpOSjYeOj46Qkow�."')", $_obfuscate_koiKkIiPjI6UkYeRlIqNhoc� );
}

function _obfuscate_jY_Gj4yUkYaHiZCGlZONlIY�( $_obfuscate_koiKkIiPjI6UkYeRlIqNhoc�, $_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�, $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
{
    if ( _obfuscate_i46Ti46MkZCVkYaOkYmVi4w�( $_obfuscate_io6UjZWThpOSjYeOj46Qkow� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�."只能填写数字".$_obfuscate_io6UjZWThpOSjYeOj46Qkow� );
    }
    return preg_replace( "/define\\('".$_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�."',[^\\)]*\\)/i", "define('".$_obfuscate_hpSVjpOKhouRkpOLjY6MkYY�."',".$_obfuscate_io6UjZWThpOSjYeOj46Qkow�.")", $_obfuscate_koiKkIiPjI6UkYeRlIqNhoc� );
}

require( "../kss_inc/inc.php" );
$_obfuscate_lZOThomRipOIi5SRhpWRjY4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "action", "gp", "sql", "" );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 9 );
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
{
    _obfuscate_lI_NjpSLio_JjZCVh4qUjYc�( );
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "save" )
{
    $_obfuscate_joePjYuMi4yRipGThoiPh5A� = array( "MYSQLBAKPASSWORD0", "BAKDATAMODE", "MYSQLBAKPASSWORD", "ADMINWEBNAME", "RSACRYPT", "RSA_PRVKEY", "RSA_MODULES", "WEBID", "ZPAGESIZE", "ICPNUM", "HOMEPAGEGOTO", "PRV_SVRLIC", "SENDMAILMODE", "QQMAIL", "QQMAIL2", "QQMAILPASSWORD" );
    foreach ( $_POST as $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4� => $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
    {
        if ( in_array( $_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�, $_obfuscate_joePjYuMi4yRipGThoiPh5A� ) && strpos( $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�, "'" ) !== FALSE )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "保存失败，".$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�."里有特殊字符'" );
        }
        $_POST[$_obfuscate_koiIh4mRlJKGlIiGiJCUkI4�] = $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�;
    }
    $_obfuscate_joqGlI2UkY_Rk5WKlZGHlY8� = 1;
    if ( isset( $_POST['BAKDATAMODE'] ) )
    {
        $_obfuscate_joqGlI2UkY_Rk5WKlZGHlY8� = $_POST['BAKDATAMODE'];
    }
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['s_bakmode'] = $_obfuscate_joqGlI2UkY_Rk5WKlZGHlY8�;
    $_obfuscate_io6MlYuRlZOPi4_Mio2Vho0� = $_POST['MYSQLBAKPASSWORD'];
    $_obfuscate_jYuTj4uQkZWKjI_QhpGRio0� = $_POST['MYSQLBAKPASSWORD0'];
    $_obfuscate_h4mIiYmIkJOJjI_RkIuIkpA� = $_POST['ADMINWEBNAME'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['s_webtitle'] = $_obfuscate_h4mIiYmIkJOJjI_RkIuIkpA�;
    $_obfuscate_h5SKioyLlZSNiYyLj5WOlI4� = $_POST['RSACRYPT'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['s_rsamode'] = $_obfuscate_h5SKioyLlZSNiYyLj5WOlI4�;
    $_obfuscate_iJCKj5WMkIeKipKQjZGHiYs� = $_POST['RSA_PRVKEY'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['s_rsaekey'] = $_obfuscate_iJCKj5WMkIeKipKQjZGHiYs�;
    $_obfuscate_lJOKlZKIk5GHkpSLk5GRjpQ� = $_POST['RSA_MODULES'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['s_rsankey'] = $_obfuscate_lJOKlZKIk5GHkpSLk5GRjpQ�;
    $_obfuscate_jZCGiJGHjJOQiYmQlJCSkpQ� = $_POST['WEBID'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['s_webid'] = $_obfuscate_jZCGiJGHjJOQiYmQlJCSkpQ�;
    $_obfuscate_kpGTkpKKkYmKjJSQho2OhpI� = $_POST['ZPAGESIZE'];
    $_obfuscate_kI2Ni4aLh5SRi5KLkJGMkY8� = $_POST['ICPNUM'];
    $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['s_icp'] = $_obfuscate_kI2Ni4aLh5SRi5KLkJGMkY8�;
    $_obfuscate_lJOIkoiOjZKGkpKJlY6IiIY� = $_POST['BINDIP'];
    $_obfuscate_jYuMkJGIkYiVk5OHi4iVlY4� = $_POST['HOMEPAGEGOTO'];
    $_obfuscate_iJGTiIyVhoqRkIaTi5SPh4Y� = $_POST['PRV_SVRLIC'];
    if ( SVRID == 1 )
    {
        $_obfuscate_k5WMkoyRipGGh5KTiY2Hk5M� = 0;
        if ( isset( $_POST['SENDMAILMODE'] ) )
        {
            $_obfuscate_k5WMkoyRipGGh5KTiY2Hk5M� = $_POST['SENDMAILMODE'];
        }
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['s_sendmailmode'] = $_obfuscate_k5WMkoyRipGGh5KTiY2Hk5M�;
        $_obfuscate_hoaUioiOk4iKkpCOk5SUkI0� = $_POST['QQMAIL'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['s_sendmail'] = $_obfuscate_hoaUioiOk4iKkpCOk5SUkI0�;
        $_obfuscate_iY2GkIaLlZGHkZKVjYiViY8� = $_POST['QQMAIL2'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['s_recvmail'] = $_obfuscate_iY2GkIaLlZGHkZKVjYiViY8�;
        $_obfuscate_j46IhpWKkJGMi5OJiI_MlZM� = $_POST['QQMAILPASSWORD'];
        $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�['s_sendmailpassword'] = $_obfuscate_j46IhpWKkJGMi5OJiI_MlZM�;
        $_obfuscate_jZCIh4_Si4yKj46LiIeJjYY� = $_obfuscate_joqGlI2UkY_Rk5WKlZGHlY8�;
    }
    $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = file_get_contents( KSSINCDIR."_config.php" );
    if ( $_obfuscate_io6MlYuRlZOPi4_Mio2Vho0� != "" )
    {
        if ( md5( $_obfuscate_jYuTj4uQkZWKjI_QhpGRio0� ) != MYSQLBAKPASSWORD )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "旧的安全接口密码错误" );
        }
        $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_lYiVlYaSh4iPk5GNkJWUlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "MYSQLBAKPASSWORD", md5( $_obfuscate_io6MlYuRlZOPi4_Mio2Vho0� ) );
    }
    $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_lYiVlYaSh4iPk5GNkJWUlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "ADMINWEBNAME", $_obfuscate_h4mIiYmIkJOJjI_RkIuIkpA� );
    $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_jY_Gj4yUkYaHiZCGlZONlIY�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "RSACRYPT", $_obfuscate_h5SKioyLlZSNiYyLj5WOlI4� );
    $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_lYiVlYaSh4iPk5GNkJWUlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "RSA_PRVKEY", $_obfuscate_iJCKj5WMkIeKipKQjZGHiYs� );
    $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_lYiVlYaSh4iPk5GNkJWUlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "RSA_MODULES", $_obfuscate_lJOKlZKIk5GHkpSLk5GRjpQ� );
    $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_lYiVlYaSh4iPk5GNkJWUlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "WEBID", $_obfuscate_jZCGiJGHjJOQiYmQlJCSkpQ� );
    $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_lYiVlYaSh4iPk5GNkJWUlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "PRV_SVRLIC", $_obfuscate_iJGTiIyVhoqRkIaTi5SPh4Y� );
    $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_jY_Gj4yUkYaHiZCGlZONlIY�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "ZPAGESIZE", $_obfuscate_kpGTkpKKkYmKjJSQho2OhpI� );
    $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_lYiVlYaSh4iPk5GNkJWUlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "ICPNUM", $_obfuscate_kI2Ni4aLh5SRi5KLkJGMkY8� );
    $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_lYiVlYaSh4iPk5GNkJWUlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "HOMEPAGEGOTO", $_obfuscate_jYuMkJGIkYiVk5OHi4iVlY4� );
    $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_jY_Gj4yUkYaHiZCGlZONlIY�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "BINDIP", $_obfuscate_lJOIkoiOjZKGkpKJlY6IiIY� );
    if ( SVRID == 1 )
    {
        if ( $_obfuscate_j46IhpWKkJGMi5OJiI_MlZM� != "" )
        {
            $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_lYiVlYaSh4iPk5GNkJWUlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "QQMAILPASSWORD", $_obfuscate_j46IhpWKkJGMi5OJiI_MlZM� );
        }
        $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_jY_Gj4yUkYaHiZCGlZONlIY�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "SENDMAILMODE", $_obfuscate_k5WMkoyRipGGh5KTiY2Hk5M� );
        $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_jY_Gj4yUkYaHiZCGlZONlIY�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "BAKDATAMODE", $_obfuscate_jZCIh4_Si4yKj46LiIeJjYY� );
        $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_lYiVlYaSh4iPk5GNkJWUlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "QQMAIL", $_obfuscate_hoaUioiOk4iKkpCOk5SUkI0� );
        if ( $_obfuscate_iY2GkIaLlZGHkZKVjYiViY8� == "" )
        {
            $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_lYiVlYaSh4iPk5GNkJWUlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "QQMAIL2", $_obfuscate_hoaUioiOk4iKkpCOk5SUkI0� );
        }
        else
        {
            $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� = _obfuscate_lYiVlYaSh4iPk5GNkJWUlYo�( $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo�, "QQMAIL2", $_obfuscate_iY2GkIaLlZGHkZKVjYiViY8� );
        }
    }
    $_obfuscate_jpCGhoeQlYqUk4uHjYeQi4c� = "";
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iJOJipCPk4yQlJOMlIeTjYs�( "kss_tb_config", $_obfuscate_j42HkJGSkI6UhoaJlYuVk4k�, "id=1", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
    {
        if ( file_put_contents( KSSINCDIR."_config.php", $_obfuscate_ioyNhoyGk5GGlY6UjomGhoo� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "参数设置已保存" );
        }
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "更新配置文件kss_inc/_config.php失败（参数设置已保存到数据库）" );
    }
    else
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "参数设置保存失败".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
    }
}
else if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "testmail" )
{
    if ( SENDMAILMODE == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你还没有开启邮件功能！" );
    }
    include( KSSINCDIR."sendmail.php" );
    $_obfuscate_jIuMi42QkYqVkpOMjYaLiYY� = "测试邮件";
    $_obfuscate_jJSLjY_MjImIioeGkZKHipA� = "<html><head><title>测试邮件</title><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'></head><body><p>如果你收到这封邮件表示邮件功能正常</p></body></html>";
    $_obfuscate_kI_PkJWVk5CTi5GQlYmMi44� = QQMAIL2;
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = kk_sendmail( $_obfuscate_jIuMi42QkYqVkpOMjYaLiYY�, $_obfuscate_jJSLjY_MjImIioeGkZKHipA�, $_obfuscate_kI_PkJWVk5CTi5GQlYmMi44�, QQMAIL, QQMAILPASSWORD, "" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === TRUE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "ok" );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� );
}
$_obfuscate_kouLj4_JkJWKkJCQkIaMjZE� = "系统设置";
include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."c_head.php" );
$_obfuscate_iJSKjJWGlJKIhoiHjYuSkYY� = _obfuscate_jZKGhoeQk46KiJCHi5CLjpQ�( );
$_obfuscate_kJOOkZOUioiHipSQlZWRjIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_config where `id`=1" );
if ( empty( $_obfuscate_kJOOkZOUioiHipSQlZWRjIY� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "读取数据库中的系统配置出错，请进高级管理，清理优化修复数据库中修复kss_tb_config表" );
}
echo "<!--\r\nWebId:";
echo WEBID;
echo "WebLic:";
echo WEBLIC;
echo "HOSTA:";
echo HOST1_DOMAIN;
echo "HOSTB:";
echo HOST2_DOMAIN;
echo "MD5KEY:";
echo MD5KEY;
echo "HTTPKEY:";
echo HTTPKEY;
echo "LICTYPE:";
echo LICTYPE;
echo "-->\r\n<script type=\"text/javascript\">\t\r\nfunction loadsyssetui(idiv){\r\nif(idiv=='0'){\r\n$(\"#mailtr1\").hide();\r\n$(\"#mailtr2\").hide();\r\n$(\"#mailtr3\").hide();\r\n}else if(idiv=='1'){\r\n$(\"#mailtr1\").hide();\r\n$(\"#mailtr2\").show();\r\n$(\"#mailtr3\").show();\t\r\n}else{\r\n$(\"#mailtr1\").show();\r\n$(\"#mailtr2\").show();\r\n$(\"#mailtr3\").show();\t\r\n}\r\n\r\n}\r\nvar getok=0;\r\nvar oldprv;\r\n$(document).ready(function() { \r\nloadsyssetui($(\"input[name='SENDMAILMODE']:checked\").val());\r\n$(\"input[name='SENDMAILMODE']\").bind(\"click\",function(){\r\nloadsyssetui($(this).val());\r\n});\r\n$(\"#submitsysset\").bind(\"click\",function(e){\r\nMouse(e);\n});\r\n$(\"#sendmailtest\").bind(\"click\",function(e){\r\nMouse(e);\r\nvar ourl=\"admin_sysset.php?action=testmail&isajax=1\";\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='ok'){\r\nmview(\"邮件发送成功，请查收。\");\r\n}else{\r\nmalert(html); \r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\r\n\r\n});\r\n$(\"#MYSQLBAKPASSWORD\").bind(\"click\",function(){$(\"#oldpassword\").show();});\r\n\r\n$(\"#viewgencode\").bind(\"click\",function(){\r\nmalert(\"<textarea onClick=this.select() style='width:440px;height:120px' >";
echo $_obfuscate_iJSKjJWGlJKIhoiHjYuSkYY�;
echo "</textarea>\",\"服务端环境系列号\");\r\n});\r\n$(\"#getregcode2\").bind(\"click\",function(){\r\nif($(\"#WEBID\").val().length>4){\r\nmalert(\"WEBID是一个2-4位的数字\\r\\n如若不记得，请登陆user.hphu.com里查询！\");\r\nreturn true;\r\n}\r\noldprv=$(\"#PRV_SVRLIC\").val();\r\n$(\"#PRV_SVRLIC\").val(\"请稍等，正在处理中...\");\r\n$.ajax({type: \"GET\",async: false,dataType: \"script\",\r\nurl: \"http://user.hphu.com/rpc.php?s=";
echo SVRID - 1;
echo "&webid=\"+$(\"#WEBID\").val()+\"&sgenkey=";
echo urlencode( $_obfuscate_iJSKjJWGlJKIhoiHjYuSkYY� );
echo "\"}); \r\n\r\nsetTimeout(function(){\r\nif(getok==0){\r\nmalert(\"访问临时登记URL超时：<br><input onClick=this.select() style='width:400px' type=text value='http://user.hphu.com/rpc.php?webid=\"+$(\"#WEBID\").val()+\"&sgenkey=";
echo urlencode( $_obfuscate_iJSKjJWGlJKIhoiHjYuSkYY� );
echo "' >\");\r\n}else{\r\ngetok=0;\r\n}\r\n},6000);\r\n});\r\n\r\n$(\"#getregcode\").bind(\"click\",function(){\r\nif($(\"#WEBID\").val().length>4){\r\nmalert(\"WEBID是一个2-4位的数字\\r\\n如若不记得，请登陆user.hphu.com里查询！\");\r\nreturn true;\r\n}\r\noldprv=$(\"#PRV_SVRLIC\").val();\r\n$(\"#PRV_SVRLIC\").val(\"请稍等，正在处理中...\");\r\n$.ajax({type: \"GET\",async: false,dataType: \"script\",\r\nurl: \"http://user.hphu.com/rpc.php?webid=\"+$(\"#WEBID\").val()\r\n}); \r\nsetTimeout(function(){\t\t\t\r\nif(getok==0){\r\nmalert(\"访问正式登记URL超时：<br><input onClick=this.select() style='width:400px' type=text value='http://user.hphu.com/rpc.php?webid=\"+$(\"#WEBID\").val()+\"' >\");\r\n}else{\r\ngetok=0;\r\n}\t\t\t\r\n},6000);\r\n});\r\n\r\n\r\n$('#admin_sysset').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif(responseText=='设置已保存'){\r\nmview(\"设置已保存。\",-30,-80);\r\n}else{\r\nmalert(responseText); \r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\r\n});\r\n</script>\r\n<form id=\"admin_sysset\" action=\"?action=save\" method=\"post\"> \r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=150  class=\"edittable_th2\">系统参数设置</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n<input type=\"hidden\" name=\"isajax\" value=\"1\" />\r\n<table border=0  cellpadding=\"10\" cellspacing=\"10\" >\r\n<tr >\r\n<td align=right>&nbsp;</td>\r\n<td align=left><span style=\"color:#0000ff;font-weight:700\">如若有备服，主服和备服的系统参数设置需要手动设置成一样的</span>\r\n</td></tr>\r\n<tr id=\"oldpassword\" malt=\"要修改安全接口密码必须输入旧的\">\r\n<td align=right>旧的安全接口密码</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"18\" name=\"MYSQLBAKPASSWORD0\" id=\"MYSQLBAKPASSWORD0\" value='' /> *要修改安全接口密码必须效验旧的安全接口密码，请输入旧的安全接口密码，不修改请留空<br>\r\n忘记旧的安全接口密码，请手工修改kss_inc/_config.php 里常量MYSQLBAKPASSWORD的值改成9a361ed860ec2617da5af72079594a21，此时安全接口密码为abc12345678\r\n</td></tr>\r\n<tr malt=\"自动备份接口、同步数据所需要的密码，主服和备服的必须相同\">\r\n<td align=right>新的安全接口密码</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"18\" name=\"MYSQLBAKPASSWORD\" id=\"MYSQLBAKPASSWORD\" value='' /> *该密码主服和备服必须相同，不修改请留空\r\n</td></tr>\r\n<tr>\t\t\t\r\n<td align=right malt='防止xss攻击盗用cookies或sessionID'>登入安全绑定正在使用的IP</td> \r\n<td align=left>\r\n<input type=radio value='1' name=\"BINDIP\" id=\"BINDIP_1\"";
echo BINDIP == 1 ? " checked" : "";
echo "><label for=\"BINDIP_1\" >是</label>\r\n&nbsp;&nbsp;<input type=radio value='0' name=\"BINDIP\" id=\"BINDIP_0\"";
echo BINDIP == 0 ? " checked" : "";
echo "><label for=\"BINDIP_0\">否</label>\t\t\t\t\r\n</td></tr>\r\n<tr malt=\"网站后台登陆页面标题\">\r\n<td align=right>网站标题</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"18\" name=\"ADMINWEBNAME\" id=\"ADMINWEBNAME\" value='";
echo $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_webtitle'];
echo "' />\r\n</td></tr>\r\n";
if ( SVRID == 1 )
{
    echo "<tr>\t\t\t\r\n<td align=right malt='数据库自动备份'>自动备份数据库</td> \r\n<td align=left>\r\n<input type=radio value='0' name=\"BAKDATAMODE\" id=\"BAKDATAMODE_0\"";
    echo $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_bakmode'] == 0 ? " checked" : "";
    echo "><label for=\"BAKDATAMODE_0\" >不</label>\r\n&nbsp;&nbsp;<input type=radio value='1' name=\"BAKDATAMODE\" id=\"BAKDATAMODE_1\"";
    echo $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_bakmode'] == 1 ? " checked" : "";
    echo "><label for=\"BAKDATAMODE_1\" malt='本地备份指将数据库备服到你网站目录kss_logs/databak里'>只本地备份</label>\r\n&nbsp;&nbsp;<input type=radio value='2' name=\"BAKDATAMODE\" id=\"BAKDATAMODE_2\"";
    echo !!extension_loaded( "curl" ) || !extension_loaded( "sockets" ) ? " disabled" : $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_bakmode'] == 2 ? " checked" : "";
    echo "><label for=\"BAKDATAMODE_2\" >本地备份，并发送到QQ邮箱</label>\r\n\r\n</td></tr>\r\n<tr>\r\n<td align=right malt='客户通过售卡系统购卡成功后，发送卡号给客户QQ邮箱'>订单发送邮件方式</td>\r\n<td align=left>\r\n<input type=\"button\" class=\"submitbtnn\" id=\"sendmailtest\" value=\"发送邮件测试（请先保存设置）\"><br>\r\n<input type=radio value='0' name=\"SENDMAILMODE\" id=\"SENDMAILMODE_0\"";
    echo $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_sendmailmode'] == 0 ? " checked" : "";
    echo "><label for=\"SENDMAILMODE_0\" malt='如果服务器PHP不支持fsockopen和curl_init，就只能选择此项关闭邮件发送功能'>不发送邮件</label>\r\n&nbsp;&nbsp;<input type=radio value='1' name=\"SENDMAILMODE\" id=\"SENDMAILMODE_1\"";
    echo !!extension_loaded( "sockets" ) && !function_exists( "fsockopen" ) ? " disabled" : $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_sendmailmode'] == 1 ? " checked" : "";
    echo "><label for=\"SENDMAILMODE_1\" malt='如果服务器PHP支持sockets，选此项会用sockets发送邮件'>sockets发送</label>\r\n\r\n</td></tr>\r\n<tr id='mailtr2' malt=\"用于发送系统邮件的邮箱帐号。\">\r\n<td align=right>发送邮箱</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"28\" name=\"QQMAIL\" id=\"QQMAIL\" value='";
    echo $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_sendmail'];
    echo "' /> \r\n</td></tr>\r\n<tr id='mailtr3' malt=\"用于发送系统邮件的QQ邮箱密码\">\r\n<td align=right>发送邮件帐号的密码</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"18\" name=\"QQMAILPASSWORD\" id=\"QQMAILPASSWORD\" value='";
    if ( $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_sendmailpassword'] != QQMAILPASSWORD )
    {
        echo $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_sendmailpassword'];
    }
    echo "' /> *不修改请留空，如打开页面发现有数据表示缓存和数据库里的密码不一样需要重新保存密码\r\n</td></tr>\r\n<tr id='mailtr2' malt=\"用于发送系统邮件的邮箱帐号。\">\r\n<td align=right>数据库备份邮箱</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"28\" name=\"QQMAIL2\" id=\"QQMAIL2\" value='";
    echo $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_recvmail'];
    echo "' />  *如果是Linux系统的话不要和发送邮箱相同\r\n</td></tr>\r\n";
}
echo "<tr malt=\"显示于网站底部的ICP备案号，无备案号请留空\">\r\n<td align=right>网站ICP备案号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"18\" name=\"ICPNUM\" id=\"ICPNUM\" value='";
echo $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_icp'];
echo "' /> *如 鄂ICP备12009758号，无备案号请留空\r\n</td></tr>\r\n<tr malt=\"各种数据分页显示，每一页最多显示的行数\">\r\n<td align=right>每一页显示数据行</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"2\" name=\"ZPAGESIZE\" id=\"ZPAGESIZE\" value='";
echo ZPAGESIZE;
echo "' />\r\n</td></tr>\r\n<tr malt=\"访问http://你的域名/ 时跳转到的页面URL\">\r\n<td align=right>首页跳转到的页面URL</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"256\" name=\"HOMEPAGEGOTO\" id=\"HOMEPAGEGOTO\" value='";
echo HOMEPAGEGOTO;
echo "' />\r\n</td></tr>\r\n<tr malt=\"服务端身份ID，未经授权而去修改将不能升级服务端\">\r\n<td align=right>WEBID</td>\r\n<td align=left><input class=\"longinput\" onClick=this.select() type=\"text\" maxlength=\"256\" name=\"WEBID\" id=\"WEBID\" value='";
echo WEBID;
echo "' /><span style=\"color:red\">登陆user.hphu.com可以查询到WEBID，是一个数字</span>\r\n</td></tr>\t\r\n<tr malt=\"服务端授权码可在面板首页申请临时授权码，也可联系售后申请正式授权码\">\r\n<td align=right>服务端登记码</td>\r\n<td align=left><input class=\"longinput\" onClick=this.select() type=\"text\" maxlength=\"1000\" name=\"PRV_SVRLIC\" id=\"PRV_SVRLIC\" value='";
echo PRV_SVRLIC;
echo "' /> <input type=button id='getregcode' value='获取正式登记码'>　　<input type=button id='getregcode2' value='获取临时登记码'>　　　　　<input type=button id='viewgencode' value='查看服务端环境系列号'>\r\n</td></tr>\r\n<tr malt=\"\" >\r\n<td align=right>友情提示</td>\r\n<td align=left><span style=\"color:#f00\">以下三项RSA的设置为老版本兼容保留，新版本不再使用</span>\r\n</td></tr>\t\t\t\r\n<tr malt=\"\" style=\"background-color:#fc9\">\r\n<td align=right malt=\"服务端数据公钥加密，客户端私钥解密，有效的防止IP劫持\">启用RSA不对称算法</td>\r\n<td align=left><input type=radio value='1' name=\"RSACRYPT\" id=\"RSACRYPT_1\"";
echo $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_rsamode'] == 1 ? " checked" : "";
echo "><label for=\"RSACRYPT_1\" >是</label>\r\n&nbsp;&nbsp;<input type=radio value='0' name=\"RSACRYPT\" id=\"RSACRYPT_0\"";
echo $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_rsamode'] == 0 ? " checked" : "";
echo "><label for=\"RSACRYPT_0\" >否</label>  *如果你服务器运行RSA功能没有任何问题的话建议选是\r\n</td></tr>\r\n<tr malt=\"\" style=\"background-color:#fc9\">\r\n<td align=right>RSA私钥 Private Exp.(D)</td>\r\n<td align=left><input class=\"longinput\" onClick=this.select() type=\"text\" maxlength=\"256\" name=\"RSA_PRVKEY\" id=\"RSA_PRVKEY\" value='";
echo $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_rsaekey'];
echo "' /> * <a href=\"http://www.hphu.com/_soft/pan.php?id=rsatool\" target=_blank>请使用RSATool工具计算获取 (256位)</a>\r\n</td></tr>\r\n<tr malt=\"请使用RSATool工具计算 Modulus(N)\" style=\"background-color:#fc9\">\r\n<td align=right>RSA模数 Modulus(N)</td>\r\n<td align=left><input class=\"longinput\" onClick=this.select() type=\"text\" maxlength=\"256\" name=\"RSA_MODULES\" id=\"RSA_MODULES\" value='";
echo $_obfuscate_kJOOkZOUioiHipSQlZWRjIY�['s_rsankey'];
echo "' /> * <a href=\"http://www.hphu.com/_soft/pan.php?id=rsatool\" target=_blank>请使用RSATool工具计算获取 (256位)</a>\r\n</td></tr>\r\n</table>\r\n\r\n</div>\r\n<div style=\"padding:10px 0 10px 150px\"><input type=submit id=\"submitsysset\" class=\"submitbtn\"  value=\"保存设置\"></div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";
?>
