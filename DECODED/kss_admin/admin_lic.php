<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function HY_b36ba7da53eab05103( $HY_fc12e3cf6043961fb3 = 1 )
{
    $HY_b82d21ca0e0bf53f05 = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $HY_94d81d317ac6f7e6a6 = ( $HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4 ) + ( $HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4 );
        $HY_fc12e3cf6043961fb3 += 2;
    } while ( $HY_fc12e3cf6043961fb3 < 28 );
}

require( "../kss_inc/inc.php" );
$HY_82d6536edf704aabc5 = new mysql_cls( );
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb( 9 );
$HY_b0a23355aa9ae9f34d = "服务端登记";
include( "c_head.php" );
$HY_d85667db055bac863e = explode( ",", WEBLIC );
$HY_4b3d9efb7350a1f023 = explode( ":", $_SERVER['HTTP_HOST'] );
if ( in_array( strtolower( $HY_4b3d9efb7350a1f023[0] ), $HY_d85667db055bac863e ) )
{
    hy_bd307d155f057feb55( "请用验证绑定的域名(主服)".$HY_d85667db055bac863e[1]."或(备服)".$HY_d85667db055bac863e[2]."来访问登陆服务端申请授权！" );
}
$HY_3b9c64f9b9582407f9 = hy_0108ebb5d9320ee08e( );
echo "<div style=\"background-color:#f6f6f6;\">\r\n<table  border=\"0\" cellspacing=\"5\" cellpadding=\"5\" align=\"center\" width=\"100%\">\r\n<tr><td>\r\n<form method=\"post\" id=\"abc\" action=\"http://api.hphu.com/skey/js.php\">\r\n【服务端系列号】<input onClick=\"this.select();\" id=\"genkey\" name=\"genkey\" type=\"text\" value=\"";
echo $HY_3b9c64f9b9582407f9;
echo "\" style=\"width:400px\">&nbsp;\r\n<input  name=\"act\" type=\"text\" value=\"1\" style=\"display:none\"><input type=\"submit\" value=\"申请临时授权码\" name=\"submit\">\r\n</form>\r\n<div style=\"font-size:14px;color:#333;line-height:150%\">注意：<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、服务端登记不收费。<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2、授权码分临时授权码和正式授权码;<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3、正式授权码：只要你不换服务器或更換环境可永久使用，请将你的授权域名告诉售后，由售后来操作即可。<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4、临时授权码：为防止我们不能急时的给你正式登记，10天内可获取两次临时授权码，每个临时授权码可用3天(生成即开始计时)<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;　　　　　　　临时授权码和正式授权只有有限期的区别，其它完全一样<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5、2014-11-30日后，登记过的服务端登才可以正常使用，该日期之前未登记也可正常使用。<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6、【服务端系列号】不是授权码，不要把【服务端系列号】当授权码。<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7、申请得到的服务端授权码请填入【高级管理】 -- 【系统参数设置】页面的服务端授权码里。<br><br></div>\r\n</td></tr></table>\r\n</body>\r\n</html>\r\n";
?>
