<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iZGRlJGUk4qShpWUlZKGkoo�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
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
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( 8 );
$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "id", "gp", "int", 0 );
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "notices_view" )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_notices where id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "未找到公告" );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "<textarea name=\"softnotice\" class=\"softtextarea\">".htmlspecialchars( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�['content'] == "" ? "" : base64_decode( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�['content'] ) )."</textarea>" );
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "notices_add" )
{
    $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "level", "gp", "int", 7 );
    $_obfuscate_jIuMi42QkYqVkpOMjYaLiYY� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "title", "gp", "sql", 7 );
    $_obfuscate_kpGHjIyRkZOGiYaLipKIiYg� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "content", "gp", "sql", 7 );
    $_obfuscate_kpGHjIyRkZOGiYaLipKIiYg� = base64_encode( $_obfuscate_kpGHjIyRkZOGiYaLipKIiYg� );
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] <= $_obfuscate_jYeUjIaQh4_Gh46KjoeQipA� )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "无权限发布该级别公告！" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "insert into `kss_tb_notices` (`pid`,`managerid`,`level`,`addtime`,`title`,`content`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['id'].",".$_obfuscate_jYeUjIaQh4_Gh46KjoeQipA�.",".time( ).",'".$_obfuscate_jIuMi42QkYqVkpOMjYaLiYY�."','".$_obfuscate_kpGHjIyRkZOGiYaLipKIiYg�."')", "notsync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "发布公告成功,请刷新页面查看！" );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "发布公告时出错：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "notices_del" )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_notices where pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "未找到公告" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_notices` where id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "notsync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� !== FALSE )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_noticesread` where noticesid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE�, "notsync" );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "delok删除公告成功！" );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "删除公告时出错：".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( ) );
}
$_obfuscate_lJKGipSShoyHi4aRkoyKjo0� = array( );
$_obfuscate_lJKGipSShoyHi4aRkoyKjo0�[0] = "无";
$_obfuscate_jo_Mh4iRkIuRjYyUh5CVj4g� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select id,username from kss_tb_manager where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'] );
foreach ( $_obfuscate_jo_Mh4iRkIuRjYyUh5CVj4g� as $_obfuscate_ko2TkI6OjY_GiI2IjZKOlIo� )
{
    $_obfuscate_lJKGipSShoyHi4aRkoyKjo0�[$_obfuscate_ko2TkI6OjY_GiI2IjZKOlIo�['id']] = $_obfuscate_ko2TkI6OjY_GiI2IjZKOlIo�['username'];
}
unset( $����������������� );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4� );
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "page", "gp", "int", 1 );
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w� = "SELECT `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipM� = "SELECT * ";
$_obfuscate_homTioySho6Vh5ORiYmUkok� = " where `id` in";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIc� = "SELECT count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA� = "from `kss_tb_notices`  ";
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIY� = array( );
$_obfuscate_j4aLlZCQhoyUh5GSjoeSh4c� = "username";
if ( stripos( $_SERVER['HTTP_HOST'], ".hphu.com" ) )
{
    $_obfuscate_j4aLlZCQhoyUh5GSjoeSh4c� = "qq";
}
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIY�[] = " `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid'];
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
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c�['recordnum'] = $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�;
$_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q� = abs( floor( $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ� / ZPAGESIZE * -1 ) );
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<textarea id=viewsql>";
echo htmlspecialchars( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
echo "\r\n";
$_obfuscate_iZWHjpGQkoqPlYmJjYmIhpU� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4w�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJI�." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA� - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
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
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
if ( $_obfuscate_iIiHi4aTkoySkpCNio_UjYo� != "" )
{
    $_obfuscate_homTioySho6Vh5ORiYmUkok� .= "(".$_obfuscate_iIiHi4aTkoySkpCNio_UjYo�.") order by id asc";
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok� );
    echo $_obfuscate_jpCQi4aKkYaIjpSUhpWNipM�.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpA�.$_obfuscate_homTioySho6Vh5ORiYmUkok�;
    echo "\r\n";
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpE� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iouHh42RkIeKkYaSipWKiog�( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJA�, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Q�, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4c� )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQ�."行  耗时"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5I� )."毫秒</span>";
echo "</textarea><script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\".viewnotices\").bind(\"click\",function(){\r\nvar tid=$(this).attr(\"nid\");\r\nvar ttext=$(this).text();\r\nvar ourl=\"./admin_manager.php?action=notices_view&isajax=1&id=\"+tid;\r\nmalert(ourl,ttext,700,200);\r\n});\r\n\r\n$(\"#submitadd\").click(function () {\r\nvar options = {\r\nurl: $(\"#addnotices\").attr(\"action\"),\r\ntype: 'post',\r\ndataType: 'text',\r\ndata: $(\"#addnotices\").serialize(),\r\nsuccess: function (responseText) {\r\nmalert(responseText);\r\n}\r\n};\r\n$.ajax(options);            \r\n\r\nreturn false;\r\n});\r\n\r\n$(\"[delnoticeid]\").bind('click',function(){\r\nvar othis=$(this);\r\ndid=othis.attr(\"delnoticeid\");\r\nvar ourl=\"./admin_manager.php?action=notices_del&isajax=1&id=\"+did;\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,5)=='delok'){\r\n$(\"#trnid\"+did).remove();\t\r\nmalert(html.substr(5));\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\r\n});\r\n\r\n});\r\n</script>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\"><form id=\"addnotices\" action=\"?action=notices_add&isajax=1\" method=\"post\"> \r\n公告标题：<input type=\"text\" class=\"longinput\" maxlength=\"20\" name=\"title\" value=\"\"/>&nbsp;\r\n公告发送给<select name=\"level\" style=\"width:200px;height:22px\">\r\n";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 && 1 < LICTYPE )
{
    echo "<option value=8>所有作者</option>\r\n";
}
echo "<option value=7>所有总代</option>\r\n<option value=6>所有总代和代理</option>\r\n</select>\r\n&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"submit\" id=\"submitadd\" name=\"submitadd\" class=\"submitbtn\" value=\"添加公告\" /></td></tr>\r\n<tr><td class=\"findorpage\">\r\n公告内容：<textarea name=\"content\" class=\"softtextarea\"></textarea>\r\n\r\n</form></td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"公告ID\">ID</td>\r\n<td>发布人ID</td>\r\n<td>发布时间</td>\r\n<td>标题</td>\r\n<td>发布对像</td>\r\n<td colspan=4>操作</td>\r\n</tr>\r\n\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
{
    echo "<tr class=trd><td colspan=6>无任何数据</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        echo "<tr class=\"trd\" id=\"trnid";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\">\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "</td>\t\t\r\n";
        echo "<td>".$_obfuscate_lJKGipSShoyHi4aRkoyKjo0�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['managerid']]."</td>";
        echo "<td>"._obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['addtime'], "y-m-d H:i" )."</td>";
        echo "<td><a class=\"viewnotices\" nid=";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo ">";
        echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYk�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['title'] );
        echo "</a></td>\r\n<td>";
        echo $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['level']];
        echo "</td>\r\n<td width=\"20\"><img delnoticeid=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
        echo "\" malt=\"删除该公告\" src=\"";
        echo INSTALLPATH;
        echo "kss_inc/images/bd_drop.png\"></td>\r\n</tr>\r\n";
    }
}
echo "</table>\t\t\t\t\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpE�;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipM�[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
echo "<div id=pageruntime>页面运行时间"._obfuscate_i4mGjpKMk5WRipSVi4mLi40�( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipM� )."毫秒</div>";
echo "</body>\r\n</html>";
?>
