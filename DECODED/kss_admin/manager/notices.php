<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_iZGRlJGUk4qShpWUlZKGkooÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ = new mysql_cls( );
$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( 8 );
$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "id", "gp", "int", 0 );
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ == "notices_view" )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_notices where id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æœªæ‰¾åˆ°å…¬å‘Š" );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "<textarea name=\"softnotice\" class=\"softtextarea\">".htmlspecialchars( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ['content'] == "" ? "" : base64_decode( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ['content'] ) )."</textarea>" );
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ == "notices_add" )
{
    $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "level", "gp", "int", 7 );
    $_obfuscate_jIuMi42QkYqVkpOMjYaLiYYÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "title", "gp", "sql", 7 );
    $_obfuscate_kpGHjIyRkZOGiYaLipKIiYgÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "content", "gp", "sql", 7 );
    $_obfuscate_kpGHjIyRkZOGiYaLipKIiYgÿ = base64_encode( $_obfuscate_kpGHjIyRkZOGiYaLipKIiYgÿ );
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] <= $_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ— æƒé™å‘å¸ƒè¯¥çº§åˆ«å…¬å‘Šï¼" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "insert into `kss_tb_notices` (`pid`,`managerid`,`level`,`addtime`,`title`,`content`) VALUES (".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'].",".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['id'].",".$_obfuscate_jYeUjIaQh4_Gh46KjoeQipAÿ.",".time( ).",'".$_obfuscate_jIuMi42QkYqVkpOMjYaLiYYÿ."','".$_obfuscate_kpGHjIyRkZOGiYaLipKIiYgÿ."')", "notsync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å‘å¸ƒå…¬å‘ŠæˆåŠŸ,è¯·åˆ·æ–°é¡µé¢æŸ¥çœ‹ï¼" );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "å‘å¸ƒå…¬å‘Šæ—¶å‡ºé”™ï¼š".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ == "notices_del" )
{
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_notices where pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ );
    if ( empty( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æœªæ‰¾åˆ°å…¬å‘Š" );
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from `kss_tb_notices` where id=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ, "notsync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ !== FALSE )
    {
        $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from `kss_tb_noticesread` where noticesid=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ, "notsync" );
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "delokåˆ é™¤å…¬å‘ŠæˆåŠŸï¼" );
    }
    _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "åˆ é™¤å…¬å‘Šæ—¶å‡ºé”™ï¼š".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( ) );
}
$_obfuscate_lJKGipSShoyHi4aRkoyKjo0ÿ = array( );
$_obfuscate_lJKGipSShoyHi4aRkoyKjo0ÿ[0] = "æ— ";
$_obfuscate_jo_Mh4iRkIuRjYyUh5CVj4gÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select id,username from kss_tb_manager where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'] );
foreach ( $_obfuscate_jo_Mh4iRkIuRjYyUh5CVj4gÿ as $_obfuscate_ko2TkI6OjY_GiI2IjZKOlIoÿ )
{
    $_obfuscate_lJKGipSShoyHi4aRkoyKjo0ÿ[$_obfuscate_ko2TkI6OjY_GiI2IjZKOlIoÿ['id']] = $_obfuscate_ko2TkI6OjY_GiI2IjZKOlIoÿ['username'];
}
unset( $Œ‡ˆ‘‹‘Œ”‡•ˆ );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ = array( "action" => $_obfuscate_lZOThomRipOIi5SRhpWRjY4ÿ );
$_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "page", "gp", "int", 1 );
$_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ = "SELECT `id` ";
$_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ = "SELECT * ";
$_obfuscate_homTioySho6Vh5ORiYmUkokÿ = " where `id` in";
$_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIcÿ = "SELECT count(*) as tnum ";
$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ = "from `kss_tb_notices`  ";
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ = array( );
$_obfuscate_j4aLlZCQhoyUh5GSjoeSh4cÿ = "username";
if ( stripos( $_SERVER['HTTP_HOST'], ".hphu.com" ) )
{
    $_obfuscate_j4aLlZCQhoyUh5GSjoeSh4cÿ = "qq";
}
$_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ[] = " `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid'];
$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ = "";
if ( empty( $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ ) )
{
    $_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ = " where".implode( " and ", $_obfuscate_h4eJlYuIjpKNio6QkIuJlIYÿ );
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iÿ( "recordnum", "gp", "int", 0 );
if ( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ == 1 )
{
    $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( $_obfuscate_kZCPiJCHiI_IlY2Ok4_JlIcÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ );
    $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ = $_obfuscate_k46Gk4qOjJGGiYqMiouGh4gÿ['tnum'];
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ['recordnum'] = $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ;
$_obfuscate_jIiNjZCPkoeUjI2LipCQk5Qÿ = abs( floor( $_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ / ZPAGESIZE * -1 ) );
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
echo "<textarea id=viewsql>";
echo htmlspecialchars( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
echo "\r\n";
$_obfuscate_iZWHjpGQkoqPlYmJjYmIhpUÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( $_obfuscate_iYqPiJGIjoaVhoaQiI2Ti4wÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_j4mJh4aKjZKHhpOSiJKSjJIÿ." LIMIT ".( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ - 1 ) * ZPAGESIZE.",".ZPAGESIZE );
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ = "";
if ( empty( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpUÿ ) )
{
    foreach ( $_obfuscate_iZWHjpGQkoqPlYmJjYmIhpUÿ as $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4ÿ )
    {
        $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ .= $_obfuscate_kYqOi5CTjoySj4mIkYmIlY4ÿ['id'].",";
    }
    $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ = substr( $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ, 0, strlen( $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ ) - 1 );
}
$_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = FALSE;
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
if ( $_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ != "" )
{
    $_obfuscate_homTioySho6Vh5ORiYmUkokÿ .= "(".$_obfuscate_iIiHi4aTkoySkpCNio_UjYoÿ.") order by id asc";
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( $_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_homTioySho6Vh5ORiYmUkokÿ );
    echo $_obfuscate_jpCQi4aKkYaIjpSUhpWNipMÿ.$_obfuscate_lJSNlZWKlYmGi4iSkIqHjpAÿ.$_obfuscate_homTioySho6Vh5ORiYmUkokÿ;
    echo "\r\n";
}
$_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
$_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iouHh42RkIeKkYaSipWKiogÿ( $_obfuscate_k42Rh4mVlYqGi4mOiZWMjJAÿ, $_obfuscate_jIiNjZCPkoeUjI2LipCQk5Qÿ, $_obfuscate_i4uIkYuKkJGQlJKOjoiMj4cÿ )."<span class=page_nav_a>".$_obfuscate_lI_KipSOk4iQkI_MjIuVkpQÿ."è¡Œ  è€—æ—¶"._obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_lJKOiJSHjo_Sj4yKk4aIh5Iÿ )."æ¯«ç§’</span>";
echo "</textarea><script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\".viewnotices\").bind(\"click\",function(){\r\nvar tid=$(this).attr(\"nid\");\r\nvar ttext=$(this).text();\r\nvar ourl=\"./admin_manager.php?action=notices_view&isajax=1&id=\"+tid;\r\nmalert(ourl,ttext,700,200);\r\n});\r\n\r\n$(\"#submitadd\").click(function () {\r\nvar options = {\r\nurl: $(\"#addnotices\").attr(\"action\"),\r\ntype: 'post',\r\ndataType: 'text',\r\ndata: $(\"#addnotices\").serialize(),\r\nsuccess: function (responseText) {\r\nmalert(responseText);\r\n}\r\n};\r\n$.ajax(options);            \r\n\r\nreturn false;\r\n});\r\n\r\n$(\"[delnoticeid]\").bind('click',function(){\r\nvar othis=$(this);\r\ndid=othis.attr(\"delnoticeid\");\r\nvar ourl=\"./admin_manager.php?action=notices_del&isajax=1&id=\"+did;\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,5)=='delok'){\r\n$(\"#trnid\"+did).remove();\t\r\nmalert(html.substr(5));\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\r\n});\r\n\r\n});\r\n</script>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\"><form id=\"addnotices\" action=\"?action=notices_add&isajax=1\" method=\"post\"> \r\nå…¬å‘Šæ ‡é¢˜ï¼š<input type=\"text\" class=\"longinput\" maxlength=\"20\" name=\"title\" value=\"\"/>&nbsp;\r\nå…¬å‘Šå‘é€ç»™<select name=\"level\" style=\"width:200px;height:22px\">\r\n";
if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 9 && 1 < LICTYPE )
{
    echo "<option value=8>æ‰€æœ‰ä½œè€…</option>\r\n";
}
echo "<option value=7>æ‰€æœ‰æ€»ä»£</option>\r\n<option value=6>æ‰€æœ‰æ€»ä»£å’Œä»£ç†</option>\r\n</select>\r\n&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"submit\" id=\"submitadd\" name=\"submitadd\" class=\"submitbtn\" value=\"æ·»åŠ å…¬å‘Š\" /></td></tr>\r\n<tr><td class=\"findorpage\">\r\nå…¬å‘Šå†…å®¹ï¼š<textarea name=\"content\" class=\"softtextarea\"></textarea>\r\n\r\n</form></td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ;
echo "</td>\r\n</tr>\r\n</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"å…¬å‘ŠID\">ID</td>\r\n<td>å‘å¸ƒäººID</td>\r\n<td>å‘å¸ƒæ—¶é—´</td>\r\n<td>æ ‡é¢˜</td>\r\n<td>å‘å¸ƒå¯¹åƒ</td>\r\n<td colspan=4>æ“ä½œ</td>\r\n</tr>\r\n\r\n";
if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ ) )
{
    echo "<tr class=trd><td colspan=6>æ— ä»»ä½•æ•°æ®</td></tr>";
}
else
{
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        echo "<tr class=\"trd\" id=\"trnid";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "\">\r\n<td>";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "</td>\t\t\r\n";
        echo "<td>".$_obfuscate_lJKGipSShoyHi4aRkoyKjo0ÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['managerid']]."</td>";
        echo "<td>"._obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['addtime'], "y-m-d H:i" )."</td>";
        echo "<td><a class=\"viewnotices\" nid=";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo ">";
        echo _obfuscate_j5CKkY_GkomSkoaUlIuLlYkÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['title'] );
        echo "</a></td>\r\n<td>";
        echo $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['level']];
        echo "</td>\r\n<td width=\"20\"><img delnoticeid=\"";
        echo $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
        echo "\" malt=\"åˆ é™¤è¯¥å…¬å‘Š\" src=\"";
        echo INSTALLPATH;
        echo "kss_inc/images/bd_drop.png\"></td>\r\n</tr>\r\n";
    }
}
echo "</table>\t\t\t\t\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $_obfuscate_k4yVk4iOipWPioqJlIuVkpEÿ;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ[] = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
echo "<div id=pageruntime>é¡µé¢è¿è¡Œæ—¶é—´"._obfuscate_i4mGjpKMk5WRipSVi4mLi40ÿ( $_obfuscate_i5GVjZWQj4ePkJKMjJSRipMÿ )."æ¯«ç§’</div>";
echo "</body>\r\n</html>";
?>
