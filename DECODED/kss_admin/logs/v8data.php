<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_k5KVkZGHkYeVk4uSh4yLlYw�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA� = "from `kss_olddata` ";
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� = array( );
if ( 15 < strlen( $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� ) )
{
    $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� = preg_replace( "/([^a-zA-Z0-9\\n])/", "", $_obfuscate_lImLiIqUj5OSipGOko6RlJQ� );
    $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� = str_replace( "\n\n", "\n", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� );
    $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� = str_replace( "\n\n", "\n", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� );
    $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� = str_replace( "\n\n", "\n", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� );
    if ( strlen( $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� ) < 16 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没输入任何卡号或输入的卡号格式非法", 1 );
    }
    $_obfuscate_h5OVi5KSi5OIhpCSk42KiI4� = explode( "\n", $_obfuscate_kJKTk5WSiI6NiYmHj4_Jkoc� );
    $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� = "";
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
    $_obfuscate_kYiQkJKGlI6JlZWRioaKlYg� = array( );
    foreach ( $_obfuscate_h5OVi5KSi5OIhpCSk42KiI4� as $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w� )
    {
        if ( strlen( $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w� ) != 16 && strlen( $_obfuscate_ko2HkJOUh5WSiZKSjomUk4w� ) != 24 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "注册卡号必须是16或24位", 1 );
        }
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 1;
        if ( ZPAGESIZE < $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "每次最多只能查询".ZPAGESIZE."条", 1 );
        }
        $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� .= "'".$_obfuscate_ko2HkJOUh5WSiZKSjomUk4w�."',";
    }
    if ( $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� == "" )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你没输入任何卡号或输入的卡号格式非法", 1 );
    }
    $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� = substr( $_obfuscate_joeNkJKLko2Hi4aNjomOj4s�, 0, strlen( $_obfuscate_joeNkJKLko2Hi4aNjomOj4s� ) - 1 );
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['a'] = " `oldkey` in (".$_obfuscate_joeNkJKLko2Hi4aNjomOj4s�.") ";
}
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
{
    $_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['b'] = " `agentid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'];
}
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�['c'] = " `softcode`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softcode'];
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
echo "</textarea><script>\r\n$(document).ready(function() { \r\n$(\"[cls='newkey']\").bind(\"click\",function(e){\r\nMouse(e);//计算显示层的位置\r\nif(tcopy(this.innerText)){\r\nmview(\"已复制到剪贴板\");\r\n}\r\n});\r\n});\r\n</script>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=v8data&softid=";
echo $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n搜索旧的注册卡号，每行一张，每次最多可查询";
echo ZPAGESIZE;
echo "张卡号<br><textarea style=\"display:block;width:500px;height:100px;margin:5px 0 0 0;font-family:Fixedsys,Arial,Verdana;color:#333\" name=\"keywords\" >";
echo $_obfuscate_lImLiIqUj5OSipGOko6RlJQ�;
echo "</textarea>\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"搜索\" />\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td nowrap=\"nowrap\">ID</td>\r\n<td nowrap=\"nowrap\">所属</td>\t\r\n<td nowrap=\"nowrap\">旧卡号</td>\t\r\n<td nowrap=\"nowrap\">新卡号</td>\t\r\n<td nowrap=\"nowrap\">状态</td>\t\t\r\n<td nowrap=\"nowrap\">属性</td>\t\r\n</tr>\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
{
    echo "<tr nodata=1 class=trd><td colspan=6>没找到任何数据</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        echo "<tr class='trd' id='trd'><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['agentid'];
        echo "</td><td nowrap='nowrap' class=dwidth>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['oldkey'];
        echo "</td>";
        echo "<td nowrap='nowrap' class='dwidth' id='copy_"._obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 16 )."' class='keynum' copyt='";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['newkey'];
        echo "'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['newkey'];
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ext1'] == "0" ? "未使用" : "<font color=red>已使用</font>";
        echo "</td><td nowrap='nowrap'>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['ext2'];
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
