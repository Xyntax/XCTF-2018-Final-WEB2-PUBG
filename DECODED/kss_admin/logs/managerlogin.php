<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kYeIjo2OipCRkYyUjJCQko8�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_k5KUlIyJio_Gj4_OlIiSjZA� = array( 1 => "正常登陆", 2 => "帐号过期", 3 => "帐号被锁定", 4 => "密码错误" );
$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "managerid", "gp", "int", 0 );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4� );
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 )
{
    $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
}
else
{
    if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == 0 )
    {
        $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
    }
    $_obfuscate_jIqTkJSOiYyIk5WJjIuJiYk� = 0;
    $_obfuscate_kYmHlZCUhpSMkpCPiY6Shog� = array( );
    $_obfuscate_kZCRjYuGiIuGi5WJlIaKiZM� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select `id`,`username`,`pid`,`isdel` from `kss_tb_manager` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
    foreach ( $_obfuscate_kZCRjYuGiIuGi5WJlIaKiZM� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'] == $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� )
        {
            $_obfuscate_jIqTkJSOiYyIk5WJjIuJiYk� = 1;
            $_obfuscate_kYmHlZCUhpSMkpCPiY6Shog�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['username'];
        }
    }
    if ( $_obfuscate_jIqTkJSOiYyIk5WJjIuJiYk� == 0 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你所查询的用户没找到，或你无权查询该用户的登陆日志！" );
    }
}
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "page", "gp", "int", 1 );
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w� = "SELECT `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipM� = "SELECT * ";
$_obfuscate_homTioySho6Vh5ORiYmUkok� = " where `id` in";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIc� = "SELECT count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA� = "from `kss_tb_log_login` ";
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� = array( );
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `managerid`='".$_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�."'";
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['managerid'] = $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A�;
$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = "";
if ( empty( $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� ) )
{
    $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI� = " where".implode( " and ", $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� )." order by logintime desc";
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
echo "<!-- ";
echo $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE;
echo " -->";
$_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = "";
if ( empty( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� ) )
{
    foreach ( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� as $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4� )
    {
        $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� .= $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4�['id'].",";
    }
    $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� = substr( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo�, 0, strlen( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� ) - 1 );
}
$_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = FALSE;
if ( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� != "" )
{
    $_obfuscate_homTioySho6Vh5ORiYmUkok� .= "(".$_obfuscate_iIiHi4aTkoySkpCNio_UjYo�.")";
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok�." order by id desc" );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpE� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iouHh42RkIeKkYaSipWKiog�( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA�, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q�, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�."行  耗时"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I� )."毫秒</span>";
echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\".vieworder\").live(\"click\",function(){\r\n$(\".malertboxclosebtn\").click();\r\nmalert('./admin_order.php?action=vieworder&isajax=1&ordernum='+$(this).text(),'订单'+$(this).text()+'的注册卡号',600,300);\t\r\n});\r\n});\r\n</script>\r\n";
if ( 7 < $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] )
{
    echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=trd>\r\n<td valign=middle><form action=\"?action=managerlogin\" method=\"post\" id=\"agentrmbf\" name=\"agentrmbf\">\r\n用户<select id='managerid' name='managerid'>";
    foreach ( $_obfuscate_kZCRjYuGiIuGi5WJlIaKiZM� as $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8� )
    {
        if ( $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['isdel'] == 0 )
        {
            echo "<option value=".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['id'];
            if ( $_obfuscate_kYqTiZWUjZKLjZCVlImUi5A� == $_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['id'] )
            {
                echo " selected";
            }
            echo ">".$_obfuscate_ipWMj4mQkZSRi5KKkJOQlY8�['username']."</option>";
        }
    }
    echo "</select><input type=submit class=submitbtn value=\"查询\">\r\n</form></td>\r\n</tr>\r\n</table>\r\n";
}
echo "\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td >ID</td>\r\n<td >日期</td>\r\n<td >IP</td>\r\n<td >用户名</td>\r\n<td >备注</td>\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
{
    echo "<tr class=trd><td colspan=5>没有登陆记录</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        echo "<tr class=\"trd\">\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "</td>\r\n<td>";
        echo _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['logintime'] );
        echo "</td>\r\n<td class=isip>";
        echo long2ip( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['loginip'] );
        echo "</td>\r\n<td>";
        echo isset( $_obfuscate_kYmHlZCUhpSMkpCPiY6Shog�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['managerid']] ) ? $_obfuscate_kYmHlZCUhpSMkpCPiY6Shog�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['managerid']] : "&nbsp;";
        echo "</td>\r\n<td>";
        echo $_obfuscate_k5KUlIyJio_Gj4_OlIiSjZA�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['logintype']];
        echo "</td>\r\n</tr>\r\n";
    }
}
echo "</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<div id=pageruntime>页面运行时间"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipM� )."毫秒</div>";
echo "</body>\r\n</html>";
?>
