<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
_obfuscate_kY6LiJGJiIiRiIuRjomOiZA�( );
$_obfuscate_io_RiZWUkoaVh4_MlYiUlZI� = _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 32 );
$_SESSION['pagecook'] = $_obfuscate_io_RiZWUkoaVh4_MlYiUlZI�;
if ( $_obfuscate_joeVho6Tj4mQlJKKiI_LkJM� == 0 )
{
    $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "uid", "pg", "int", 1 );
}
else
{
    $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc� = ( integer );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where `id`='".$_obfuscate_kJSPlYqRjouVi4uTjZKMjoc�."'" );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "销售商ID未找到！" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pid'] != 10000 && 1000 < LICTYPE )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "在线零售功能被禁用" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['level'] == 7 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "销售商未授权！" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['level'] == 6 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['powerlist'], 11 ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "销售商未授权！" );
}
$_obfuscate_jY6KkJSQlIyViYiGiJGHipE� = explode( ",", $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['alipayset'] );
if ( strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['tenpayset'] ) < 10 && strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['chinabankset'] ) < 4 && strlen( $_obfuscate_jY6KkJSQlIyViYiGiJGHipE�[1] ) < 8 && strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['e138set'] ) < 10 && strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['wxpayset'] ) < 15 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "销售商支付接口未设置！" );
}
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "select * from kss_tb_keyset where `pid`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pid']."' and retailprice>0 and islock=0";
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['level'] == 6 )
{
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� = "select * from kss_tb_keyset where `pid`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['pid']."' and retailprice>0 and `id` in (select distinct keygroupid from kss_tb_agentprice where managerid=".$_obfuscate_kJSPlYqRjouVi4uTjZKMjoc�.") and islock=0";
}
$_obfuscate_kpGNjpOTjpWGiImOioqGj4c� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� );
if ( empty( $_obfuscate_kpGNjpOTjpWGiImOioqGj4c� ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "没有找到可零售的注册卡！" );
}
$_obfuscate_k46Kk4qMhoqKkI_MlIyHlZI� = array( );
$_obfuscate_i4uUio6PiJOQk5GKi42OjpI� = array( );
foreach ( $_obfuscate_kpGNjpOTjpWGiImOioqGj4c� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
{
    if ( !isset( $_obfuscate_k46Kk4qMhoqKkI_MlIyHlZI�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softid']] ) )
    {
        $_obfuscate_k46Kk4qMhoqKkI_MlIyHlZI�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softid']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softid'];
        $_obfuscate_i4uUio6PiJOQk5GKi42OjpI�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softid']] = array( );
    }
    $_obfuscate_i4uUio6PiJOQk5GKi42OjpI�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['softid']][] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�;
}
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_soft where `id` in (".join( ",", $_obfuscate_k46Kk4qMhoqKkI_MlIyHlZI� ).")" );
echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n<head>\r\n<title>";
echo empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['payweb_title'] ) ? "在线售卡" : $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['payweb_title'];
echo "</title>\r\n<meta HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=utf-8\" />\r\n<meta name=\"Version\" content=\"";
echo KSSVERSION;
echo "\" />\r\n<meta name=\"Author\" content=\"火云网络工作室  http://www.hphu.com\" />\r\n<link type=\"text/css\" rel=\"stylesheet\" href=\"";
echo INSTALLPATH;
echo "kss_inc/style/sale_style.css?version=";
echo KSSVERSION;
echo "\" />\r\n";
echo "<s";
echo "cript type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/jquery.1.3.2.pack.js?version=";
echo KSSVERSION;
echo "\" charset=\"utf-8\"></script>\r\n";
echo "<s";
echo "cript type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/jquery.form.js?version=";
echo KSSVERSION;
echo "\" charset=\"utf-8\"></script>\r\n";
echo "<s";
echo "cript type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/jquery.pngFix.js\" charset=\"utf-8\"></script>\r\n";
echo "<s";
echo "cript type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/admin_pub.js?version=";
echo KSSVERSION;
echo "\" charset=\"utf-8\"></script>\r\n";
echo "<s";
echo "cript type=\"text/javascript\">\r\nvar INSTALLPATH=\"";
echo INSTALLPATH;
echo "\";\r\nvar fackie=0;\r\nvar jsuid=";
echo $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc�;
echo ";\r\n$(document).ready(function () {\r\nif ($.browser.msie && $.browser.version<\"8.0\"){fackie=1;$(window).scroll(function(){$(\".malertbox\").css(\"top\",$(document).scrollTop()*1+100);});}\r\n$(document).pngFix();    \r\n$(\".buy\").bind('mouseover', function (){\r\n$(this).attr('src','";
echo INSTALLPATH;
echo "kss_inc/images/sale_btn2.gif');   \r\n}).bind(\"mouseout\",function (){\r\n$(this).attr('src','";
echo INSTALLPATH;
echo "kss_inc/images/sale_btn1.gif'); \r\n}).bind(\"click\",function(){\r\nvar kgroupid=$(this).attr(\"kgid\");\r\nmalert('";
echo INSTALLPATH;
echo "kss_inc/sale_cmd.php?uid=";
echo $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc�;
echo "&keygroupid='+kgroupid+'&pagecook='+$(\"#pagecook\").val(),'请输入购卡信息，和选择支付方式',800,300);\r\n});\r\n$(\"#search\").bind('click',function(){\r\nmalert('";
echo INSTALLPATH;
echo "kss_inc/sale_cmd.php?isajax=1&sordernum='+encodeURIComponent($(\"#sordernum\").val())+'&uid=";
echo $_obfuscate_kJSPlYqRjouVi4uTjZKMjoc�;
echo "&pagecook='+$(\"#pagecook\").val(),'查询到的订单信息',800,300);\r\n});\r\n});\r\n\r\n\r\n\r\n</script>\r\n</head>\r\n<body  leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\"><a name=\"top\"></a>\r\n<table width=\"1000\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=center>\r\n<tr>\r\n<td ><img src=\"";
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['payweb_loginimg'] == "" )
{
    echo INSTALLPATH."kss_inc/images/salelogo.png";
}
else
{
    echo $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['payweb_loginimg'];
}
echo "\"></td>\r\n<td ><input type=hidden name=\"pagecook\" id=\"pagecook\" value=\"";
echo $_obfuscate_io_RiZWUkoaVh4_MlYiUlZI�;
echo "\"><input type=text value=\"请输入订单号\" id=\"sordernum\" style=\"border:0;width:200px;height:24px;margin:0;line-height:24px;padding:0\"></td>\r\n<td ><img src=\"";
echo INSTALLPATH;
echo "kss_inc/images/sale_search.gif\" id=\"search\"></td>\r\n</tr>\r\n</table>\r\n<table width=\"1000\"  border=\"0\" id=\"tablenav\" cellpadding=\"0\" cellspacing=\"0\" align=center>\r\n<tr>\r\n<td ><div id=\"softlistnav\">\r\n";
foreach ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� as $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok� )
{
    echo "<span><a href='#tag".$_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['id']."' title='".$_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['softname']."'>"._obfuscate_kpCOhomRj5CHh5SLjZKIi4Y�( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['softname'], 9 )."</a></span>";
}
echo "</div></td>\r\n</tr>\r\n</table>\r\n";
foreach ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� as $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok� )
{
    echo "<a name=\"tag";
    echo $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['id'];
    echo "\"></a>\r\n<table class=\"softbox\" width=\"1000\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=center>\r\n<tr>\r\n<td class=td1>&nbsp;&nbsp;&nbsp;&nbsp;软件名称：";
    echo $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['softname'];
    echo "</td><td class=td2 align=right>";
    $_obfuscate_lYeUjJKMkpOSlZCLlJGOiYo� = base64_decode( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['softdownurl'] );
    if ( 10 < strlen( $_obfuscate_lYeUjJKMkpOSlZCLlJGOiYo� ) && stripos( $_obfuscate_lYeUjJKMkpOSlZCLlJGOiYo�, "salenotview" ) == FALSE )
    {
        echo "<a href=".$_obfuscate_lYeUjJKMkpOSlZCLlJGOiYo�." target=_blank>下载软件</a>";
    }
    echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"#top\">回到顶部</a>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td class=td3><div class=\"pad\">\r\n";
    echo base64_decode( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['softintro'] );
    echo "</div></td>\r\n<td class=td4 valign=top>";
    foreach ( $_obfuscate_i4uUio6PiJOQk5GKi42OjpI�[$_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['id']] as $_obfuscate_lJCSkoeMho2PlJOLiouJj4Y� )
    {
        echo "<table border=0 class='stable' cellpadding=0 cellspacing=0 width='100%'>";
        echo "<tr><td colspan=2>".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['keyname']."</td></tr>";
        echo "<tr><td width=50%>价格：".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['retailprice']."元</td><td width=50%><img class=buy kgid=".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Y�['id']." src=".INSTALLPATH."kss_inc/images/sale_btn1.gif></td></tr>"."\r\n";
        echo "</table>\r\n";
    }
    echo "</td>\r\n</tr>\r\n</table>\r\n";
}
echo "<div align=center style=\"margin:auto\">\r\n<table  width=\"1000\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=center style=\"background:#f6f6f6;margin:10px 0 0 0;border-top:2px solid #DF8711\">\r\n<tr>\r\n<td  align=center style=\"padding:10px 0\">";
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['payweb_title'] != "" )
{
    echo $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['payweb_title']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['email'] != "" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['email'] != "10000@qq.com" )
{
    echo "&nbsp;&nbsp;邮箱:".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['email'];
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['qq'] != "" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['qq'] != "10000" )
{
    echo "&nbsp;&nbsp;QQ:".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['qq'];
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['tel'] != "" )
{
    echo "&nbsp;&nbsp;电话:".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['tel'];
}
if ( ICPNUM != "" )
{
    echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=http://www.miibeian.gov.cn/ target=_blank >".ICPNUM."</a>";
}
echo "&nbsp;</td>\r\n</tr>\r\n</table></div>";
echo base64_decode( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYg�['jscript'] );
echo "</body>\r\n</html>";
?>
