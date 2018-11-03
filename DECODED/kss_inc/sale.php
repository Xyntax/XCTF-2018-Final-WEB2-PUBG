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
_obfuscate_kY6LiJGJiIiRiIuRjomOiZAÿ( );
$_obfuscate_io_RiZWUkoaVh4_MlYiUlZIÿ = _obfuscate_iI6QhpSTiJCJiI_KlYePlZIÿ( 32 );
$_SESSION['pagecook'] = $_obfuscate_io_RiZWUkoaVh4_MlYiUlZIÿ;
if ( $_obfuscate_joeVho6Tj4mQlJKKiI_LkJMÿ == 0 )
{
    $_obfuscate_kJSPlYqRjouVi4uTjZKMjocÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "uid", "pg", "int", 1 );
}
else
{
    $_obfuscate_kJSPlYqRjouVi4uTjZKMjocÿ = ( integer );
}
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_manager where `id`='".$_obfuscate_kJSPlYqRjouVi4uTjZKMjocÿ."'" );
if ( empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "é”€å”®å•†IDæœªæ‰¾åˆ°ï¼" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['pid'] != 10000 && 1000 < LICTYPE )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åœ¨çº¿é›¶å”®åŠŸèƒ½è¢«ç¦ç”¨" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['level'] == 7 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "é”€å”®å•†æœªæˆæƒï¼" );
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['level'] == 6 && !_obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['powerlist'], 11 ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "é”€å”®å•†æœªæˆæƒï¼" );
}
$_obfuscate_jY6KkJSQlIyViYiGiJGHipEÿ = explode( ",", $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['alipayset'] );
if ( strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['tenpayset'] ) < 10 && strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['chinabankset'] ) < 4 && strlen( $_obfuscate_jY6KkJSQlIyViYiGiJGHipEÿ[1] ) < 8 && strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['e138set'] ) < 10 && strlen( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['wxpayset'] ) < 15 )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "é”€å”®å•†æ”¯ä»˜æ¥å£æœªè®¾ç½®ï¼" );
}
$_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "select * from kss_tb_keyset where `pid`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['pid']."' and retailprice>0 and islock=0";
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['level'] == 6 )
{
    $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ = "select * from kss_tb_keyset where `pid`='".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['pid']."' and retailprice>0 and `id` in (select distinct keygroupid from kss_tb_agentprice where managerid=".$_obfuscate_kJSPlYqRjouVi4uTjZKMjocÿ.") and islock=0";
}
$_obfuscate_kpGNjpOTjpWGiImOioqGj4cÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ );
if ( empty( $_obfuscate_kpGNjpOTjpWGiImOioqGj4cÿ ) )
{
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ²¡æœ‰æ‰¾åˆ°å¯é›¶å”®çš„æ³¨å†Œå¡ï¼" );
}
$_obfuscate_k46Kk4qMhoqKkI_MlIyHlZIÿ = array( );
$_obfuscate_i4uUio6PiJOQk5GKi42OjpIÿ = array( );
foreach ( $_obfuscate_kpGNjpOTjpWGiImOioqGj4cÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
{
    if ( !isset( $_obfuscate_k46Kk4qMhoqKkI_MlIyHlZIÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softid']] ) )
    {
        $_obfuscate_k46Kk4qMhoqKkI_MlIyHlZIÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softid']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softid'];
        $_obfuscate_i4uUio6PiJOQk5GKi42OjpIÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softid']] = array( );
    }
    $_obfuscate_i4uUio6PiJOQk5GKi42OjpIÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['softid']][] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ;
}
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_soft where `id` in (".join( ",", $_obfuscate_k46Kk4qMhoqKkI_MlIyHlZIÿ ).")" );
echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n<head>\r\n<title>";
echo empty( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['payweb_title'] ) ? "åœ¨çº¿å”®å¡" : $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['payweb_title'];
echo "</title>\r\n<meta HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=utf-8\" />\r\n<meta name=\"Version\" content=\"";
echo KSSVERSION;
echo "\" />\r\n<meta name=\"Author\" content=\"ç«äº‘ç½‘ç»œå·¥ä½œå®¤  http://www.hphu.com\" />\r\n<link type=\"text/css\" rel=\"stylesheet\" href=\"";
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
echo $_obfuscate_kJSPlYqRjouVi4uTjZKMjocÿ;
echo ";\r\n$(document).ready(function () {\r\nif ($.browser.msie && $.browser.version<\"8.0\"){fackie=1;$(window).scroll(function(){$(\".malertbox\").css(\"top\",$(document).scrollTop()*1+100);});}\r\n$(document).pngFix();    \r\n$(\".buy\").bind('mouseover', function (){\r\n$(this).attr('src','";
echo INSTALLPATH;
echo "kss_inc/images/sale_btn2.gif');   \r\n}).bind(\"mouseout\",function (){\r\n$(this).attr('src','";
echo INSTALLPATH;
echo "kss_inc/images/sale_btn1.gif'); \r\n}).bind(\"click\",function(){\r\nvar kgroupid=$(this).attr(\"kgid\");\r\nmalert('";
echo INSTALLPATH;
echo "kss_inc/sale_cmd.php?uid=";
echo $_obfuscate_kJSPlYqRjouVi4uTjZKMjocÿ;
echo "&keygroupid='+kgroupid+'&pagecook='+$(\"#pagecook\").val(),'è¯·è¾“å…¥è´­å¡ä¿¡æ¯ï¼Œå’Œé€‰æ‹©æ”¯ä»˜æ–¹å¼',800,300);\r\n});\r\n$(\"#search\").bind('click',function(){\r\nmalert('";
echo INSTALLPATH;
echo "kss_inc/sale_cmd.php?isajax=1&sordernum='+encodeURIComponent($(\"#sordernum\").val())+'&uid=";
echo $_obfuscate_kJSPlYqRjouVi4uTjZKMjocÿ;
echo "&pagecook='+$(\"#pagecook\").val(),'æŸ¥è¯¢åˆ°çš„è®¢å•ä¿¡æ¯',800,300);\r\n});\r\n});\r\n\r\n\r\n\r\n</script>\r\n</head>\r\n<body  leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\"><a name=\"top\"></a>\r\n<table width=\"1000\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=center>\r\n<tr>\r\n<td ><img src=\"";
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['payweb_loginimg'] == "" )
{
    echo INSTALLPATH."kss_inc/images/salelogo.png";
}
else
{
    echo $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['payweb_loginimg'];
}
echo "\"></td>\r\n<td ><input type=hidden name=\"pagecook\" id=\"pagecook\" value=\"";
echo $_obfuscate_io_RiZWUkoaVh4_MlYiUlZIÿ;
echo "\"><input type=text value=\"è¯·è¾“å…¥è®¢å•å·\" id=\"sordernum\" style=\"border:0;width:200px;height:24px;margin:0;line-height:24px;padding:0\"></td>\r\n<td ><img src=\"";
echo INSTALLPATH;
echo "kss_inc/images/sale_search.gif\" id=\"search\"></td>\r\n</tr>\r\n</table>\r\n<table width=\"1000\"  border=\"0\" id=\"tablenav\" cellpadding=\"0\" cellspacing=\"0\" align=center>\r\n<tr>\r\n<td ><div id=\"softlistnav\">\r\n";
foreach ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ as $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ )
{
    echo "<span><a href='#tag".$_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['id']."' title='".$_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['softname']."'>"._obfuscate_kpCOhomRj5CHh5SLjZKIi4Yÿ( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['softname'], 9 )."</a></span>";
}
echo "</div></td>\r\n</tr>\r\n</table>\r\n";
foreach ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIÿ as $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ )
{
    echo "<a name=\"tag";
    echo $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['id'];
    echo "\"></a>\r\n<table class=\"softbox\" width=\"1000\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=center>\r\n<tr>\r\n<td class=td1>&nbsp;&nbsp;&nbsp;&nbsp;è½¯ä»¶åç§°ï¼š";
    echo $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['softname'];
    echo "</td><td class=td2 align=right>";
    $_obfuscate_lYeUjJKMkpOSlZCLlJGOiYoÿ = base64_decode( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['softdownurl'] );
    if ( 10 < strlen( $_obfuscate_lYeUjJKMkpOSlZCLlJGOiYoÿ ) && stripos( $_obfuscate_lYeUjJKMkpOSlZCLlJGOiYoÿ, "salenotview" ) == FALSE )
    {
        echo "<a href=".$_obfuscate_lYeUjJKMkpOSlZCLlJGOiYoÿ." target=_blank>ä¸‹è½½è½¯ä»¶</a>";
    }
    echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"#top\">å›åˆ°é¡¶éƒ¨</a>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td class=td3><div class=\"pad\">\r\n";
    echo base64_decode( $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['softintro'] );
    echo "</div></td>\r\n<td class=td4 valign=top>";
    foreach ( $_obfuscate_i4uUio6PiJOQk5GKi42OjpIÿ[$_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['id']] as $_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ )
    {
        echo "<table border=0 class='stable' cellpadding=0 cellspacing=0 width='100%'>";
        echo "<tr><td colspan=2>".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['keyname']."</td></tr>";
        echo "<tr><td width=50%>ä»·æ ¼ï¼š".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['retailprice']."å…ƒ</td><td width=50%><img class=buy kgid=".$_obfuscate_lJCSkoeMho2PlJOLiouJj4Yÿ['id']." src=".INSTALLPATH."kss_inc/images/sale_btn1.gif></td></tr>"."\r\n";
        echo "</table>\r\n";
    }
    echo "</td>\r\n</tr>\r\n</table>\r\n";
}
echo "<div align=center style=\"margin:auto\">\r\n<table  width=\"1000\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=center style=\"background:#f6f6f6;margin:10px 0 0 0;border-top:2px solid #DF8711\">\r\n<tr>\r\n<td  align=center style=\"padding:10px 0\">";
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['payweb_title'] != "" )
{
    echo $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['payweb_title']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['email'] != "" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['email'] != "10000@qq.com" )
{
    echo "&nbsp;&nbsp;é‚®ç®±:".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['email'];
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['qq'] != "" && $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['qq'] != "10000" )
{
    echo "&nbsp;&nbsp;QQ:".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['qq'];
}
if ( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['tel'] != "" )
{
    echo "&nbsp;&nbsp;ç”µè¯:".$_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['tel'];
}
if ( ICPNUM != "" )
{
    echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=http://www.miibeian.gov.cn/ target=_blank >".ICPNUM."</a>";
}
echo "&nbsp;</td>\r\n</tr>\r\n</table></div>";
echo base64_decode( $_obfuscate_jZGSiIyHlYaPjpWPjI_QiYgÿ['jscript'] );
echo "</body>\r\n</html>";
?>
