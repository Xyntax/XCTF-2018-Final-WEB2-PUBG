<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iJCMj42PlYiUiIeQlJOIjYs�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 6 );
$_obfuscate_k4mViI2Nj4mJkIuUj42JiIY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "op", "gp", "sql", "" );
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "page", "gp", "int", 1 );
$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "softid", "gp", "int", 0 );
$_obfuscate_lImLiIqUj5OSipGOko6RlJQ� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "keywords", "gp", "sql", "" );
$_obfuscate_lImLiIqUj5OSipGOko6RlJQ� = trim( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4� );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['softid'] = $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['keywords'] = $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�;
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_agentprice where `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
    if ( empty( $_obfuscate_ho2NhoaMhoqMlYuLiJSKjo4� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没有该软件的授权", 1 );
    }
}
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_soft where `id`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� );
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w� = "SELECT `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipM� = "SELECT * ";
$_obfuscate_homTioySho6Vh5ORiYmUkok� = " where `id` ";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIc� = "SELECT count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA� = "from `kss_z_client_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."` ";
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� = array( );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "KSOFT" )
{
    $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� = substr( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�, 0, 10 );
}
if ( 1 < strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `username`='".$_obfuscate_lImLiIqUj5OSipGOko6RlJQ�."' ";
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `username`=(select `czusername` from `kss_z_key_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."` where `czusername`='".$_obfuscate_lImLiIqUj5OSipGOko6RlJQ�."' and `managerid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id']." limit 0,1)";
}
$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = "";
if ( empty( $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� ) )
{
    $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = " where".implode( " and ", $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "recordnum", "gp", "int", 0 );
if ( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� == 1 )
{
    $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( $_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIc�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� );
    $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4g�['tnum'];
}
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['recordnum'] = $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�;
$_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q� = abs( floor( $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� / ZPAGESIZE * -1 ) );
$_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
echo "<textarea id=viewsql>";
echo htmlspecialchars( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
echo "\r\n";
$_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = "";
$_obfuscate_j4aSkImMlYyRiY6Mho2VkZM� = "";
if ( empty( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� ) )
{
    foreach ( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� as $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4� )
    {
        $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� .= $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4�['id'].",";
        $_obfuscate_j4aSkImMlYyRiY6Mho2VkZM� = "=".$_obfuscate_kYqOi5CTjoySj4mIkYmIlY4�['id'];
    }
    $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = substr( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo�, 0, strlen( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� ) - 1 );
}
$_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = FALSE;
$_obfuscate_koeUkImOlYeQiZSJkZWPiJU� = "";
if ( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� != "" )
{
    $_obfuscate_homTioySho6Vh5ORiYmUkok� .= 1 < count( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� ) ? " in (".$_obfuscate_iIiHi4aTkoySkpCNio_UjYo�.")" : $_obfuscate_j4aSkImMlYyRiY6Mho2VkZM�;
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
    echo htmlspecialchars( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpE� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iouHh42RkIeKkYaSipWKiog�( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA�, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q�, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�."行  耗时"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I� )."毫秒</span>";
echo "</textarea><script>\r\nvar softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo ";\r\n$(document).ready(function() { \r\n$(\".online2,.online3\").bind(\"click\",function(e){\r\n\r\nvar othis=$(this);\r\nvar tkey=othis.parent().parent().attr(\"id\");\r\nvar tcid=othis.attr(\"cid\");\r\ntkey=tkey.substr(3);\r\nMouse(e);//计算显示层的位置\r\n\r\nvar ourl=\"admin_key.php?action=userlist&op=unline&isajax=1&clientid=\"+tcid+\"&softid=\"+softid+\"&keys=\"+encodeURIComponent(tkey);\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,2)=='ok'){\r\nothis.removeClass(\"online2\").removeClass(\"online3\").addClass(\"online0\");\r\nmview(\"强制离线成功。\");\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\r\nreturn false;\r\n});\r\n});\r\n</script>\t\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=dklist&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n用户名：<input class=\"longinput\" type=text name=\"keywords\" value=\"";
echo $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�;
echo "\">\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"搜索\" />\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td nowrap=\"nowrap\">在线状态</td>\t\r\n";
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "USOFT" )
{
    echo "<td nowrap='nowrap' malt='用户名'>用户名</td>";
}
else
{
    echo "<td nowrap='nowrap' malt='注册卡号前十位'>用户名</td>";
}
echo "<td nowrap=\"nowrap\" malt=\"该条记录使用的通道号，也就是老的客户端ID\">通道号</td>\t\t\r\n<td nowrap=\"nowrap\" malt=\"上次使用本用户该通道号的电脑特征码\">机器码</td>\r\n<td nowrap=\"nowrap\" malt=\"保证唯一在线的在线码\">在线码</td>\r\n<td nowrap=\"nowrap\" malt=\"上一次连接服务器验证的时间\">上一次在线</td>\r\n<td nowrap=\"nowrap\" malt=\"上一次连接服务器的IP\">IP</td>\r\n<td nowrap=\"nowrap\" malt=\"可通过advapi接口来操作\">私有数据</td>\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
{
    echo "<tr nodata=1 class=trd><td colspan=8>没找到用户相关通道数据</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        echo "<tr class='trd' id='trd";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        echo "'>";
        if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['chkonline'] == 0 )
        {
            $_obfuscate_jpKIj4yRlZGKjYmOioqHjpQ� = time( ) < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['lasttime'] + 60 * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['unbindpc_autotime'] ? "'online1' title='在线'" : "'online0' title='不在线'";
        }
        else if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['isonline'] == 1 )
        {
            if ( time( ) < $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['lasttime'] + 60 * $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['outlinetime'] )
            {
                $_obfuscate_jpKIj4yRlZGKjYmOioqHjpQ� = "'online2' title='在线，单击可强制设置为离线'";
            }
            else
            {
                $_obfuscate_jpKIj4yRlZGKjYmOioqHjpQ� = "'online3' title='在线，单击可强制设置为离线'";
            }
        }
        else
        {
            $_obfuscate_jpKIj4yRlZGKjYmOioqHjpQ� = "'online0' title='不在线'";
        }
        echo "<td nowrap='nowrap'><span class=".$_obfuscate_jpKIj4yRlZGKjYmOioqHjpQ�." cid=";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['clientid'];
        echo ">◆</span></td><td nowrap='nowrap'>";
        echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'] );
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['clientid'];
        echo "</td><td nowrap='nowrap'>";
        echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pccode'] );
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linecode'];
        echo "</td><td nowrap='nowrap'>";
        echo _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['lasttime'], "m-d H:i:s" );
        echo "</td><td nowrap='nowrap' class=isip>";
        echo long2ip( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['lastip'] );
        echo "</td><td nowrap='nowrap'>";
        echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['updata'] );
        echo "</td></tr>\r\n";
    }
}
echo "</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<div id=pageruntime>页面运行时间"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipM� )."毫秒</div>";
echo "</body>\r\n</html>";
?>
