<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jIiJj4mOiIeKh4eIipSJjIc�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_lI2HiomQkZKJkYqRj42Mh5M� = array( "1" => "正常登陆", "2" => "不在线，新机登陆！", "3" => "非法下线次数超限，锁定帐号", "4" => "下线成功", "5" => "下线失败，机器码不符", "6" => "下线失败，IP不符", "7" => "下线失败，在线码不符", "8" => "下线失败，单机多开，还有客户端正在使用", "9" => "任意登陆！", "10" => "机器码变动，禁止登陆！", "11" => "帐号被挤下线，机器码变动！", "12" => "用户登陆（新机）！", "13" => "", "14" => "", "15" => "自动解绑，解绑就扣时登陆！", "16" => "自动解绑，不扣时登陆！", "17" => "自动解绑，超解绑次数扣时登陆！", "18" => "自动解绑，未超解绑次数不扣时登陆！", "19" => "！", "20" => "！", "21" => "！", "22" => "登陆太频繁，锁定帐号", "23" => "在线标识启用，用户已在线，强登录", "24" => "在线标识启用，用户已在线，未到可强制上线时间，登陆失败", "25" => "帐号被挤下线（在线码变动）", "26" => "当日强登陆次数用尽，不能强登陆", "27" => "未到自动解绑时间", "28" => "解绑次数用尽不可以解绑", "29" => "帐号剩余时间不足，不能自动解绑", "30" => "调用advapi", "31" => "调用advapi太频繁，锁定帐号", "32" => "IP变动太频繁，锁定帐号", "33" => "用户在线，禁止换机登陆", "34" => "调试软件登陆，锁定IP帐号机器码", "35" => "hook系统关键函数，锁定IP帐号机器码" );
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
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA� = "from `kss_z_log_".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."` ";
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
$_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." order by id asc LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
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
    $_obfuscate_homTioySho6Vh5ORiYmUkok� .= 1 < count( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� ) ? " in (".$_obfuscate_iIiHi4aTkoySkpCNio_UjYo�.") order by id asc" : $_obfuscate_j4aSkImMlYyRiY6Mho2VkZM�;
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
    echo htmlspecialchars( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpE� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iouHh42RkIeKkYaSipWKiog�( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA�, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q�, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�."行  耗时"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I� )."毫秒</span>";
echo "</textarea><table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=user_log&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n用户名：<input class=\"longinput\" type=text name=\"keywords\" value=\"";
echo $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�;
echo "\">\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"搜索\" />\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td nowrap=\"nowrap\">ID</td>\r\n";
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softmode'] == "USOFT" )
{
    echo "<td nowrap='nowrap' malt='用户名'>用户名</td>";
}
else
{
    echo "<td nowrap='nowrap' malt='注册卡号前十位'>用户名</td>";
}
echo "<td nowrap=\"nowrap\" malt=\"该条记录使用的通道号，也就是老的客户端ID\">通道号</td>\t\t\r\n<td nowrap=\"nowrap\" malt=\"上次使用本用户该通道号的电脑特征码\">原机器码（机器码~号后边的仅供参考不做比对）</td>\r\n<td nowrap=\"nowrap\" malt=\"本次使用本用户该通道号的电脑特征码\">新机器码（机器码~号后边的仅供参考不做比对）</td>\t\r\n<td nowrap=\"nowrap\" malt=\"上次连接服务器的IP\">原IP</td>\r\n<td nowrap=\"nowrap\" malt=\"本次连接服务器的IP\">新IP</td>\r\n<td nowrap=\"nowrap\" malt=\"保证唯一在线的在线码\">在线码</td>\r\n<td nowrap=\"nowrap\" malt=\"连接服务器验证的时间\">时间</td>\r\n<td nowrap=\"nowrap\" malt=\"连接服务器备注\">备注</td>\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
{
    echo "<tr nodata=1 class=trd><td colspan=10>没找到任何日志</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        echo "<tr class='trd' id='trd'><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['clientid'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['opccode'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pccode'];
        echo "</td><td nowrap='nowrap' class=isip>";
        echo long2ip( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['oip'] );
        echo "</td><td nowrap='nowrap' class=isip>";
        echo long2ip( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ip'] );
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linecode'];
        echo "</td><td nowrap='nowrap'>";
        echo _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['addtime'], "m-d H:i:s" );
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_lI2HiomQkZKJkYqRj42Mh5M�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['optype']];
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
