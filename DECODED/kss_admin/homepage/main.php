<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_lI_SlI_Si4iLhoiRlYyIh5I�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
$_obfuscate_k5KUlIyJio_Gj4_OlIiSjZA� = array( 1 => "正常登陆", 2 => "帐号过期", 3 => "帐号被锁定", 4 => "密码错误" );
$_obfuscate_kY_OiJWMlI_ViZWIk4qSiYY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']( "select * from kss_tb_log_login where `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." order by logintime desc limit 0,5" );
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(*) as tnum from kss_tb_soft " );
require( "../kss_inc/ip_function.php" );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "g", "sql", "" );
if ( $_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� == "datastatus" )
{
    ob_clean( );
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = array( );
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�['action'] = "mysqldatabak_down";
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�['pwd'] = MYSQLBAKPASSWORD;
    $_obfuscate_jJGLh4_OlZKSh4iQjo2JlJE� = _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH._obfuscate_hpGJi4yHlIqLhpSIh4iJlYw�( )."/admin_data.php";
    $_obfuscate_kY2Ui4_KjYeSlYuQlImKkoo� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( $_obfuscate_jJGLh4_OlZKSh4iQjo2JlJE�, $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, 5 )."<br>";
    if ( substr( $_obfuscate_kY2Ui4_KjYeSlYuQlImKkoo�, 0, 8 ) == "curlerr:" )
    {
        $_obfuscate_kY2Ui4_KjYeSlYuQlImKkoo� = substr( $_obfuscate_kY2Ui4_KjYeSlYuQlImKkoo�, 8 );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_kY2Ui4_KjYeSlYuQlImKkoo� );
}
$_obfuscate_kY2Ui4_KjYeSlYuQlImKkoo� = "";
$_obfuscate_jIeTi4eGipWPk4eKiZOKjYs� = KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."databak".DIRECTORY_SEPARATOR;
$_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� = glob( $_obfuscate_jIeTi4eGipWPk4eKiZOKjYs�."*.zip" );
if ( empty( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� ) )
{
    foreach ( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� )
    {
        $_obfuscate_kY2Ui4_KjYeSlYuQlImKkoo� .= substr( basename( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� ), 0, 16 )."备份文件大小".round( filesize( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� ) / 1024, 2 )."KB<br>";
    }
}
echo "\r\n<script>\r\nvar svrtime=";
echo time( )."001";
echo ";\r\nvar viewtimetd;\r\nvar newnotices=false;\r\nfunction vtime(){\r\nvar d=new Date();\r\nsvrtime=svrtime+1000;\r\nd.setTime(svrtime);\r\nviewtimetd.text(d.getFullYear()+'-'+(d.getMonth()+1)+'-'+d.getDate()+' '+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds());\r\n}\r\nfunction readnotices(){\r\n$.ajax({\r\nurl: \"admin_manager.php?action=noticesread&isajax=1&op=1\",\r\ncache: false,\r\nsuccess: function(html){\r\nmalert(html,'最近的10条公告');\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n}\r\n$(document).ready(function() {\r\nviewtimetd=$(\"#svtime\");\r\nsetInterval(\"vtime()\", 1000);\r\n$.ajax({\r\nurl: \"admin_manager.php?action=noticesread&isajax=1&op=0\",\r\ncache: false,\r\nsuccess: function(html){\t\t\t\t\r\nif(html.substr(0,7)=='notread'){\r\nnewnotices=true;\r\nmalert(html.substr(7),'有新的公告');\t\t\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n\r\n$(\"[noticeid]\").live(\"click\",function(){\r\nvar tid=$(this).attr(\"noticeid\");\r\nvar ttext=$(this).text();\r\nvar ourl=\"./admin_manager.php?action=noticesread&isajax=1&op=3&id=\"+tid;\r\nmalert(ourl,ttext,700,200);\r\n});\r\n\r\n$.ajax({\r\nurl: \"admin_homepage.php?action=main&isajax=1&op=datastatus\",\r\ncache: false,\r\nsuccess: function(html){\r\n$(\"#dstatus\").prepend(html); \r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n";
$_obfuscate_j4uPiI2GiYaVjJWGi4_UiIk� = _obfuscate_io_MiI6UjIyKkJOVk5GSjYo�( "index.php" );
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
{
    if ( stripos( $_SERVER['PHP_SELF'], "/".ADMINFOLDER."/admin_homepage" ) === FALSE )
    {
        echo "alert(\"你修改了管理文件夹名\\r\\n\\r\\n但是kss_inc/_config.php里的相应的管理文件夹常量ADMINFOLDER未被系统自动修正\\r\\n\\r\\n请手动修正后退出系统，再重新登陆，否则自动升级时原管理目录程序不能被备份！\")\r\n";
    }
    $_obfuscate_k4_Vh5SOioeMjIuUipWVh4c� = 0;
    $_obfuscate_jY6Pj4uQlJSQh5CLh5GRk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(*) as tnum from kss_tb_soft" );
    if ( empty( $_obfuscate_jY6Pj4uQlJSQh5CLh5GRk40� ) )
    {
        $_obfuscate_k4_Vh5SOioeMjIuUipWVh4c� = $_obfuscate_jY6Pj4uQlJSQh5CLh5GRk40�['tnum'];
    }
    $_obfuscate_lZSGj4iMkYyJkY2LjI_Jh5U� = 0;
    $_obfuscate_jY6Pj4uQlJSQh5CLh5GRk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select count(*) as tnum from kss_tb_manager where level=6" );
    if ( empty( $_obfuscate_jY6Pj4uQlJSQh5CLh5GRk40� ) )
    {
        $_obfuscate_lZSGj4iMkYyJkY2LjI_Jh5U� = $_obfuscate_jY6Pj4uQlJSQh5CLh5GRk40�['tnum'];
    }
    echo "$.getScript(\"http://api.hphu.com/import/kssnotice.php?sanum=";
    echo $_obfuscate_k4_Vh5SOioeMjIuUipWVh4c�."_".$_obfuscate_lZSGj4iMkYyJkY2LjI_Jh5U�;
    echo "&version=";
    echo KSSVERSION."&guid=".WEBID;
    echo "\");\r\n";
}
echo "\r\n\r\n});\r\n\r\n</script>\r\n<div style=\"background-color:#f6f6f6;\">\r\n<table  border=\"0\" cellspacing=\"5\" cellpadding=\"5\" align=\"center\" width=\"100%\">\r\n<tr><td>\r\n<table  border=\"0\" cellspacing=\"5\" cellpadding=\"5\" align=\"center\" width=\"100%\">\r\n";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
{
    echo "<tr>\r\n<td align=right nowrap=\"nowrap\">程序开发：</td>\r\n<td align=left nowrap=\"nowrap\"><a href=http://www.hphu.com target=_blank>火云网络工作室</a></td>\r\n</tr>\r\n";
}
echo "<tr>\r\n<td align=right nowrap=\"nowrap\">服务端版本：</td>\r\n<td align=left nowrap=\"nowrap\">";
echo KSSVERSION;
echo "&nbsp;&nbsp;<span id=\"onlineupdate\" style=\"display:none\"></span>&nbsp;&nbsp; \r\n";
$_obfuscate_j4uUkImJj4iJipGVioqGk4w� = $_SERVER['HTTP_HOST'];
$_obfuscate_lZWPi4aGiYmRkIuVjYuMh4w� = strpos( $_obfuscate_j4uUkImJj4iJipGVioqGk4w�, ":" );
if ( $_obfuscate_lZWPi4aGiYmRkIuVjYuMh4w� !== FALSE )
{
    $_obfuscate_j4uUkImJj4iJipGVioqGk4w� = substr( $_obfuscate_j4uUkImJj4iJipGVioqGk4w�, 0, $_obfuscate_lZWPi4aGiYmRkIuVjYuMh4w� );
}
if ( stristr( WEBLIC.",", ",".$_obfuscate_j4uUkImJj4iJipGVioqGk4w�."," ) === FALSE )
{
    echo "<span style='color:red;'>登记状态未能获取</span>";
}
else
{
    echo "<span style='color:red;'>".$_obfuscate_iIyGk4aPkZONh4mMkoyIj4g�."</span>";
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 && $_obfuscate_j4uPiI2GiYaVjJWGi4_UiIk� !== TRUE )
{
    echo "<br><span style='color:red'>".$_obfuscate_j4uPiI2GiYaVjJWGi4_UiIk�."</span>";
}
echo "<br><a href='javascript:void(0)' style='color:blue;font-size:16px' onClick=djalert() >什么是服务端登记，如何登记请点击这里</a><script>function djalert(){malert('1、必须登记服务端，客户端才可以完全正常使用。<br>2、登记方法：高级管理，系统设置里有登记按钮，一般情况下请用正式登记。<br>3、正式登记失败的情况下，请先临时登记，然后联系售后。<br>4、需要联系售后时，请第一时间说明白你要登记的域名。<br>5、登记状态未能获取，通常是因为你使用了非授权的域名访问后台。请用授权的域名";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
{
    echo substr( WEBLIC, 33 );
}
echo "和端口访问后台查看登记状态，切不可盲目的再登记。','服务端登记说明',650,180);}</script>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td align=right nowrap=\"nowrap\">服务器操作系统：</td>\r\n<td align=left nowrap=\"nowrap\">";
echo PHP_OS;
echo "  <input type=button class=\"submitbtn\" value=\"查看公告\" onclick=readnotices()></td>\r\n</tr>\r\n<tr>\r\n<td align=right nowrap=\"nowrap\">PHP版本：</td>\r\n<td align=left nowrap=\"nowrap\">";
echo 5.3 < substr( PHP_VERSION, 0, 3 ) ? "<font color=red>×".PHP_VERSION."</font>" : "<font color=green>√".PHP_VERSION."</font>";
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right nowrap=\"nowrap\">IP库版本：</td>\r\n<td align=left nowrap=\"nowrap\">";
echo _obfuscate_j5SHjI6IhpKIh4_Hh4iMjIs�( "255.255.255.255" );
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right>服务器时间：</td>\r\n<td align=left id='svtime'></td>\r\n</tr>\r\n<tr>\r\n<td align=right nowrap=\"nowrap\">RSA版本：</td>\r\n<td align=left nowrap=\"nowrap\">";
echo "<font color=green>√</font>".rsaisok( );
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right nowrap=\"nowrap\">Curl支持：</td>\r\n<td align=left nowrap=\"nowrap\">";
echo extension_loaded( "curl" ) && _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_exec" ) ? "<font color=green>√</font>" : "<font color=red>×</font>同步、支付宝担宝接口不能使用<br>如果你是VPS或自己的服务器，修改php.ini文件的设置<br>找到php_curl.dll去掉前面的【;】号，保存。<br>开始菜单->运行  输入iisreset /restart 回车重启IIS";
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right nowrap=\"nowrap\">fsockopen支持：</td>\r\n<td align=left nowrap=\"nowrap\">";
echo extension_loaded( "sockets" ) ? "<font color=green>√</font>" : "<font color=red>×</font>将不能本地发送邮件";
echo "</td>\r\n</tr>\r\n";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 )
{
    echo "<tr>\r\n<td align=right  nowrap=\"nowrap\" valign=top>数据库备份目录kss_logs/databak，状态：</td>\r\n<td align=left nowrap=\"nowrap\" id=\"dstatus\">";
    echo $_obfuscate_kY2Ui4_KjYeSlYuQlImKkoo�;
    echo "</td>\r\n</tr>\r\n";
}
echo "</table>\r\n</td>\r\n\r\n<td valign=top align=left>最近登录信息<br>\r\n<table  border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"98%\">\r\n<tr><td valign=top align=left>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" width=\"400\">\r\n<tr class=\"trhead\">\r\n<td malt=\"登录日期\">日期</td>\r\n<td malt=\"登录时的用户IP\">IP</td>\r\n<td>备注</td>\r\n</tr>\r\n";
foreach ( $_obfuscate_kY_OiJWMlI_ViZWIk4qSiYY� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    echo "<tr class=\"trd\">\r\n<td>";
    echo _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['logintime'] );
    echo "</td>\r\n<td class=\"isip\">";
    echo long2ip( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['loginip'] );
    echo "</td>\r\n<td>";
    echo $_obfuscate_k5KUlIyJio_Gj4_OlIiSjZA�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['logintype']];
    echo "</td>\r\n</tr>\r\n";
}
echo "</table>\r\n</td></tr>\r\n</table>\r\n<table   border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"98%\" style=\"margin-top:20px\">\r\n<tr><td>\r\n<ul id=kssnotice>\r\n</ul></td></tr></table>\t\r\n</td>\r\n</tr>\r\n</table>\r\n</div>\r\n</body>\r\n</html>";
?>
